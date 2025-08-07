<?php

namespace App\Service;

use App\Entity\Tool;
use App\Entity\ToolInspection;
use App\Entity\ToolSet;
use App\Entity\ToolSetItem;
use App\Repository\ToolSetRepository;
use App\Repository\ToolSetItemRepository;
use App\Repository\ToolRepository;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;

class ToolSetService
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private ToolSetRepository $toolSetRepository,
        private ToolSetItemRepository $toolSetItemRepository,
        private ToolRepository $toolRepository,
        private LoggerInterface $logger
    ) {
    }

    /**
     * Create a new tool set
     */
    public function createToolSet(
        string $name,
        ?string $description = null,
        ?string $code = null,
        ?string $location = null
    ): ToolSet {
        $toolSet = new ToolSet();
        $toolSet->setName($name)
               ->setDescription($description)
               ->setCode($code)
               ->setLocation($location);

        // Auto-generate code if not provided
        if (!$code) {
            $this->entityManager->persist($toolSet);
            $this->entityManager->flush();
            $toolSet->setCode($toolSet->generateCode());
        }

        $this->entityManager->persist($toolSet);
        $this->entityManager->flush();

        $this->logger->info('Created new tool set', [
            'set_id' => $toolSet->getId(),
            'name' => $name,
            'code' => $toolSet->getCode(),
            'location' => $location
        ]);

        return $toolSet;
    }

    /**
     * Add a tool to a tool set
     */
    public function addToolToSet(
        ToolSet $toolSet,
        Tool $tool,
        int $requiredQuantity = 1,
        int $currentQuantity = 0,
        ?string $notes = null
    ): ToolSetItem {
        // Check if tool is already in the set
        if ($this->toolSetItemRepository->isToolInSet($toolSet, $tool)) {
            throw new \InvalidArgumentException(sprintf(
                'Narzędzie "%s" już znajduje się w zestawie "%s"',
                $tool->getName(),
                $toolSet->getName()
            ));
        }

        $item = new ToolSetItem();
        $item->setToolSet($toolSet)
             ->setTool($tool)
             ->setRequiredQuantity($requiredQuantity)
             ->setQuantity($currentQuantity)
             ->setNotes($notes);

        $toolSet->addItem($item);
        
        $this->entityManager->persist($item);
        $this->updateToolSetStatus($toolSet);
        $this->entityManager->flush();

        $this->logger->info('Added tool to set', [
            'set_id' => $toolSet->getId(),
            'tool_id' => $tool->getId(),
            'required_quantity' => $requiredQuantity,
            'current_quantity' => $currentQuantity
        ]);

        return $item;
    }

    /**
     * Remove a tool from a tool set
     */
    public function removeToolFromSet(ToolSet $toolSet, Tool $tool): bool
    {
        $items = $this->toolSetItemRepository->findByCriteria([
            'tool_set' => $toolSet,
            'tool' => $tool
        ]);

        if (empty($items)) {
            return false;
        }

        foreach ($items as $item) {
            $toolSet->removeItem($item);
            $this->entityManager->remove($item);
        }

        $this->updateToolSetStatus($toolSet);
        $this->entityManager->flush();

        $this->logger->info('Removed tool from set', [
            'set_id' => $toolSet->getId(),
            'tool_id' => $tool->getId()
        ]);

        return true;
    }

    /**
     * Update quantities in a tool set item
     */
    public function updateItemQuantity(
        ToolSetItem $item,
        ?int $currentQuantity = null,
        ?int $requiredQuantity = null
    ): ToolSetItem {
        $changed = false;

        if ($currentQuantity !== null && $currentQuantity !== $item->getQuantity()) {
            $item->setQuantity($currentQuantity);
            $changed = true;
        }

        if ($requiredQuantity !== null && $requiredQuantity !== $item->getRequiredQuantity()) {
            $item->setRequiredQuantity($requiredQuantity);
            $changed = true;
        }

        if ($changed) {
            $this->updateToolSetStatus($item->getToolSet());
            $this->entityManager->flush();

            $this->logger->info('Updated item quantity', [
                'item_id' => $item->getId(),
                'set_id' => $item->getToolSet()->getId(),
                'tool_id' => $item->getTool()->getId(),
                'current_quantity' => $item->getQuantity(),
                'required_quantity' => $item->getRequiredQuantity()
            ]);
        }

        return $item;
    }

    /**
     * Automatically adjust item quantities based on tool availability
     */
    public function adjustQuantitiesFromTools(ToolSet $toolSet): array
    {
        $adjustedItems = [];
        
        foreach ($toolSet->getActiveItems() as $item) {
            $oldQuantity = $item->getQuantity();
            
            if ($item->adjustQuantityFromTool()) {
                $adjustedItems[] = [
                    'item' => $item,
                    'old_quantity' => $oldQuantity,
                    'new_quantity' => $item->getQuantity()
                ];
            }
        }

        if (!empty($adjustedItems)) {
            $this->updateToolSetStatus($toolSet);
            $this->entityManager->flush();

            $this->logger->info('Adjusted quantities from tools', [
                'set_id' => $toolSet->getId(),
                'adjusted_count' => count($adjustedItems)
            ]);
        }

        return $adjustedItems;
    }

    /**
     * Check out a tool set (mark tools as in use)
     */
    public function checkOutSet(ToolSet $toolSet, ?string $notes = null): array
    {
        $checkedOut = [];
        $errors = [];

        foreach ($toolSet->getActiveItems() as $item) {
            $tool = $item->getTool();
            
            if (!$tool->isActive() || $tool->getStatus() !== Tool::STATUS_ACTIVE) {
                $errors[] = sprintf('Narzędzie "%s" nie jest dostępne', $tool->getName());
                continue;
            }

            if ($tool->isMultiQuantity()) {
                $availableQuantity = $tool->getCurrentQuantity();
                $requiredQuantity = $item->getQuantity();
                
                if ($availableQuantity < $requiredQuantity) {
                    $errors[] = sprintf('Narzędzie "%s" - brak wystarczającej ilości (dostępne: %d, wymagane: %d)', 
                        $tool->getName(), $availableQuantity, $requiredQuantity);
                    continue;
                }

                // Decrease available quantity
                $tool->setCurrentQuantity($availableQuantity - $requiredQuantity);
                $checkedOut[] = ['tool' => $tool, 'quantity' => $requiredQuantity];
            } else {
                // Single quantity tool
                $tool->setStatus(Tool::STATUS_INACTIVE);
                $checkedOut[] = ['tool' => $tool, 'quantity' => 1];
            }
        }

        if (empty($errors)) {
            $toolSet->setStatus(ToolSet::STATUS_INACTIVE);
            $toolSet->setLocation($toolSet->getLocation() ? $toolSet->getLocation() . ' (wypożyczony)' : 'Wypożyczony');
        }

        $this->entityManager->flush();

        $this->logger->info('Tool set checkout attempt', [
            'set_id' => $toolSet->getId(),
            'checked_out_count' => count($checkedOut),
            'errors_count' => count($errors),
            'success' => empty($errors)
        ]);

        return [
            'success' => empty($errors),
            'checked_out' => $checkedOut,
            'errors' => $errors
        ];
    }

    /**
     * Check in a tool set (mark tools as returned)
     */
    public function checkInSet(ToolSet $toolSet, array $returnedQuantities = []): array
    {
        $checkedIn = [];
        
        foreach ($toolSet->getActiveItems() as $item) {
            $tool = $item->getTool();
            $toolId = $tool->getId();
            
            if ($tool->isMultiQuantity()) {
                $returnQuantity = $returnedQuantities[$toolId] ?? $item->getQuantity();
                $currentQuantity = $tool->getCurrentQuantity();
                $tool->setCurrentQuantity($currentQuantity + $returnQuantity);
                $checkedIn[] = ['tool' => $tool, 'quantity' => $returnQuantity];
            } else {
                // Single quantity tool
                if ($tool->getStatus() === Tool::STATUS_INACTIVE) {
                    $tool->setStatus(Tool::STATUS_ACTIVE);
                    $checkedIn[] = ['tool' => $tool, 'quantity' => 1];
                }
            }
        }

        // Update tool set status
        $toolSet->setStatus(ToolSet::STATUS_ACTIVE);
        $location = $toolSet->getLocation();
        if ($location && str_contains($location, '(wypożyczony)')) {
            $toolSet->setLocation(str_replace(' (wypożyczony)', '', $location));
        }

        $this->entityManager->flush();

        $this->logger->info('Tool set checked in', [
            'set_id' => $toolSet->getId(),
            'checked_in_count' => count($checkedIn)
        ]);

        return $checkedIn;
    }

    /**
     * Clone a tool set with all its items
     */
    public function cloneToolSet(ToolSet $originalSet, string $newName, ?string $newCode = null): ToolSet
    {
        $clonedSet = new ToolSet();
        $clonedSet->setName($newName)
                 ->setDescription($originalSet->getDescription() ? $originalSet->getDescription() . ' (kopia)' : null)
                 ->setCode($newCode)
                 ->setLocation($originalSet->getLocation());

        $this->entityManager->persist($clonedSet);
        $this->entityManager->flush();

        // Auto-generate code if not provided
        if (!$newCode) {
            $clonedSet->setCode($clonedSet->generateCode());
        }

        // Clone all items
        foreach ($originalSet->getActiveItems() as $originalItem) {
            $clonedItem = new ToolSetItem();
            $clonedItem->setToolSet($clonedSet)
                      ->setTool($originalItem->getTool())
                      ->setRequiredQuantity($originalItem->getRequiredQuantity())
                      ->setQuantity(0) // Start with 0 quantity
                      ->setNotes($originalItem->getNotes());

            $clonedSet->addItem($clonedItem);
            $this->entityManager->persist($clonedItem);
        }

        $this->updateToolSetStatus($clonedSet);
        $this->entityManager->flush();

        $this->logger->info('Cloned tool set', [
            'original_set_id' => $originalSet->getId(),
            'cloned_set_id' => $clonedSet->getId(),
            'items_count' => $clonedSet->getActiveItems()->count()
        ]);

        return $clonedSet;
    }

    /**
     * Get optimization suggestions for tool sets
     */
    public function getOptimizationSuggestions(): array
    {
        $opportunities = $this->toolSetItemRepository->findOptimizationOpportunities();
        $suggestions = [];

        foreach ($opportunities as $opportunity) {
            $toolId = $opportunity['tool_id'];
            $totalRequired = $opportunity['total_required'];
            $totalCurrent = $opportunity['total_current'];

            if ($totalCurrent > $totalRequired) {
                $suggestions[] = [
                    'type' => 'excess',
                    'tool_id' => $toolId,
                    'tool_name' => $opportunity['tool_name'],
                    'message' => sprintf(
                        'Narzędzie "%s" ma nadwyżkę %d sztuk w zestawach',
                        $opportunity['tool_name'],
                        $totalCurrent - $totalRequired
                    ),
                    'excess_quantity' => $totalCurrent - $totalRequired
                ];
            } elseif ($totalCurrent < $totalRequired) {
                $suggestions[] = [
                    'type' => 'shortage',
                    'tool_id' => $toolId,
                    'tool_name' => $opportunity['tool_name'],
                    'message' => sprintf(
                        'Narzędzie "%s" ma niedobór %d sztuk w zestawach',
                        $opportunity['tool_name'],
                        $totalRequired - $totalCurrent
                    ),
                    'shortage_quantity' => $totalRequired - $totalCurrent
                ];
            }
        }

        return $suggestions;
    }

    /**
     * Generate tool set inspection report
     */
    public function generateInspectionReport(ToolSet $toolSet): array
    {
        $items = $toolSet->getActiveItems();
        $inspections = $toolSet->getInspections();
        
        $report = [
            'tool_set' => $toolSet,
            'items' => $items,
            'inspections' => $inspections,
            'completion_percentage' => $toolSet->getCompletionPercentage(),
            'missing_items' => $toolSet->getMissingItems(),
            'tools_requiring_inspection' => [],
            'tools_with_overdue_inspections' => [],
            'last_inspection' => $toolSet->getLastInspection(),
            'inspection_summary' => [
                'total' => $inspections->count(),
                'passed' => $toolSet->getPassedInspections()->count(),
                'failed' => $toolSet->getFailedInspections()->count(),
            ]
        ];

        // Check individual tool inspection status
        foreach ($items as $item) {
            $tool = $item->getTool();
            
            if ($tool->isInspectionDue()) {
                $report['tools_with_overdue_inspections'][] = $tool;
            } elseif ($tool->isInspectionUpcoming(30)) {
                $report['tools_requiring_inspection'][] = $tool;
            }
        }

        return $report;
    }

    /**
     * Update tool set status based on its items' condition
     */
    public function updateToolSetStatus(ToolSet $toolSet): void
    {
        $toolSet->updateStatusBasedOnCondition();
    }

    /**
     * Get tool sets statistics for dashboard
     */
    public function getStatistics(): array
    {
        return $this->toolSetRepository->getStatistics();
    }

    /**
     * Find available alternatives for missing tools in a set
     */
    public function findAlternatives(ToolSetItem $item): array
    {
        $tool = $item->getTool();
        $alternatives = [];

        // Find tools in same category and type
        $similarTools = $this->toolRepository->findByCriteria([
            'category' => $tool->getCategory(),
            'type' => $tool->getType(),
        ]);

        foreach ($similarTools as $similarTool) {
            if ($similarTool->getId() === $tool->getId()) {
                continue; // Skip the same tool
            }

            if ($similarTool->isActive() && $similarTool->getStatus() === Tool::STATUS_ACTIVE) {
                $alternatives[] = [
                    'tool' => $similarTool,
                    'available_quantity' => $similarTool->isMultiQuantity() 
                        ? $similarTool->getCurrentQuantity() 
                        : 1,
                    'similarity_score' => $this->calculateSimilarityScore($tool, $similarTool)
                ];
            }
        }

        // Sort by similarity score
        usort($alternatives, fn($a, $b) => $b['similarity_score'] <=> $a['similarity_score']);

        return array_slice($alternatives, 0, 5); // Return top 5 alternatives
    }

    /**
     * Calculate similarity score between two tools
     */
    private function calculateSimilarityScore(Tool $tool1, Tool $tool2): float
    {
        $score = 0;

        // Same category (weight: 0.4)
        if ($tool1->getCategory() === $tool2->getCategory()) {
            $score += 0.4;
        }

        // Same type (weight: 0.3)
        if ($tool1->getType() === $tool2->getType()) {
            $score += 0.3;
        }

        // Same manufacturer (weight: 0.2)
        if ($tool1->getManufacturer() === $tool2->getManufacturer()) {
            $score += 0.2;
        }

        // Similar name (weight: 0.1)
        $similarity = 0;
        similar_text($tool1->getName(), $tool2->getName(), $similarity);
        $score += ($similarity / 100) * 0.1;

        return $score;
    }

    /**
     * Bulk update tool set items from template
     */
    public function updateFromTemplate(ToolSet $toolSet, array $template): array
    {
        $results = [];

        foreach ($template as $templateItem) {
            $toolId = $templateItem['tool_id'];
            $requiredQuantity = $templateItem['required_quantity'];
            
            $tool = $this->toolRepository->find($toolId);
            if (!$tool) {
                $results[] = ['status' => 'error', 'message' => "Nie znaleziono narzędzia ID: {$toolId}"];
                continue;
            }

            // Check if tool is already in set
            if ($this->toolSetItemRepository->isToolInSet($toolSet, $tool)) {
                // Update existing item
                $items = $this->toolSetItemRepository->findByCriteria([
                    'tool_set' => $toolSet,
                    'tool' => $tool
                ]);
                
                if (!empty($items)) {
                    $item = $items[0];
                    $this->updateItemQuantity($item, null, $requiredQuantity);
                    $results[] = ['status' => 'updated', 'tool' => $tool->getName()];
                }
            } else {
                // Add new item
                $this->addToolToSet($toolSet, $tool, $requiredQuantity, 0);
                $results[] = ['status' => 'added', 'tool' => $tool->getName()];
            }
        }

        return $results;
    }
}