<?php

namespace App\Service;

use App\Entity\Tool;
use App\Entity\ToolInspection;
use App\Entity\ToolSet;
use App\Repository\ToolInspectionRepository;
use App\Repository\ToolRepository;
use App\Repository\ToolSetRepository;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;

class InspectionService
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private ToolRepository $toolRepository,
        private ToolInspectionRepository $inspectionRepository,
        private ToolSetRepository $toolSetRepository,
        private LoggerInterface $logger
    ) {
    }

    /**
     * Create a new inspection for a tool
     */
    public function createInspection(
        Tool $tool,
        \DateTimeInterface $plannedDate,
        ?string $inspectorName = null,
        ?string $description = null
    ): ToolInspection {
        $inspection = new ToolInspection();
        $inspection->setTool($tool)
                  ->setPlannedDate($plannedDate)
                  ->setInspectorName($inspectorName ?? 'Nieprzypisany')
                  ->setDescription($description);

        $this->entityManager->persist($inspection);
        
        $this->logger->info('Created new inspection for tool', [
            'tool_id' => $tool->getId(),
            'tool_name' => $tool->getName(),
            'planned_date' => $plannedDate->format('Y-m-d'),
            'inspector' => $inspectorName
        ]);

        return $inspection;
    }

    /**
     * Complete an inspection with results
     */
    public function completeInspection(
        ToolInspection $inspection,
        string $result,
        ?string $notes = null,
        ?array $defects = null,
        ?string $cost = null,
        ?\DateTimeInterface $inspectionDate = null
    ): ToolInspection {
        $inspection->setResult($result)
                  ->setNotes($notes)
                  ->setDefectsFound($defects ?? [])
                  ->setCost($cost)
                  ->setInspectionDate($inspectionDate ?? new \DateTime());

        // Calculate and set next inspection date if tool has interval
        if ($inspection->getTool()->getInspectionIntervalMonths()) {
            $nextDate = $inspection->calculateNextInspectionDate();
            $inspection->setNextInspectionDate($nextDate);
            
            // Update tool's next inspection date
            $inspection->getTool()->setNextInspectionDate($nextDate);
        }

        // Update tool status based on inspection result
        $this->updateToolStatusFromInspection($inspection);

        $this->entityManager->flush();

        $this->logger->info('Completed inspection', [
            'inspection_id' => $inspection->getId(),
            'tool_id' => $inspection->getTool()->getId(),
            'result' => $result,
            'defects_count' => count($defects ?? []),
            'next_inspection' => $inspection->getNextInspectionDate()?->format('Y-m-d')
        ]);

        return $inspection;
    }

    /**
     * Schedule next inspection for a tool
     */
    public function scheduleNextInspection(Tool $tool, ?\DateTimeInterface $baseDate = null): ?ToolInspection
    {
        if (!$tool->getInspectionIntervalMonths()) {
            return null;
        }

        $baseDate = $baseDate ?? new \DateTime();
        $plannedDate = (clone $baseDate)->modify('+' . $tool->getInspectionIntervalMonths() . ' months');

        $inspection = $this->createInspection(
            $tool,
            $plannedDate,
            'Automatycznie zaplanowany',
            'Przegląd zaplanowany automatycznie na podstawie interwału'
        );

        $tool->setNextInspectionDate($plannedDate);
        $this->entityManager->flush();

        return $inspection;
    }

    /**
     * Get tools requiring inspection soon
     */
    public function getToolsRequiringInspection(int $days = 30): array
    {
        return $this->toolRepository->findWithUpcomingInspections($days);
    }

    /**
     * Get overdue inspections
     */
    public function getOverdueInspections(): array
    {
        return $this->inspectionRepository->findOverdue();
    }

    /**
     * Generate inspection report for a tool
     */
    public function generateInspectionReport(Tool $tool): array
    {
        $inspections = $this->inspectionRepository->findByTool($tool);
        $lastInspection = $inspections[0] ?? null;

        $passedCount = 0;
        $failedCount = 0;
        $totalCost = 0;
        $defectsTotal = 0;

        foreach ($inspections as $inspection) {
            if ($inspection->isPassed()) {
                $passedCount++;
            } else {
                $failedCount++;
            }

            if ($inspection->getCost()) {
                $totalCost += (float) $inspection->getCost();
            }

            $defectsTotal += count($inspection->getDefectsFound() ?? []);
        }

        return [
            'tool' => $tool,
            'inspections' => $inspections,
            'last_inspection' => $lastInspection,
            'total_inspections' => count($inspections),
            'passed_inspections' => $passedCount,
            'failed_inspections' => $failedCount,
            'pass_rate' => count($inspections) > 0 ? round(($passedCount / count($inspections)) * 100, 2) : 0,
            'total_cost' => $totalCost,
            'average_cost' => count($inspections) > 0 ? round($totalCost / count($inspections), 2) : 0,
            'total_defects' => $defectsTotal,
            'next_inspection_due' => $tool->getNextInspectionDate(),
            'is_inspection_overdue' => $tool->isInspectionDue(),
            'days_until_next_inspection' => $this->getDaysUntilNextInspection($tool),
        ];
    }

    /**
     * Bulk schedule inspections for multiple tools
     */
    public function bulkScheduleInspections(array $tools, \DateTimeInterface $startDate, int $intervalDays = 7): array
    {
        $scheduled = [];
        $currentDate = clone $startDate;

        foreach ($tools as $tool) {
            if (!$tool instanceof Tool || !$tool->getInspectionIntervalMonths()) {
                continue;
            }

            $inspection = $this->createInspection(
                $tool,
                clone $currentDate,
                'Planowanie masowe',
                'Przegląd zaplanowany w ramach planowania masowego'
            );

            $tool->setNextInspectionDate(clone $currentDate);
            $scheduled[] = $inspection;

            // Move to next date
            $currentDate->modify('+' . $intervalDays . ' days');
        }

        $this->entityManager->flush();

        $this->logger->info('Bulk scheduled inspections', [
            'count' => count($scheduled),
            'start_date' => $startDate->format('Y-m-d'),
            'interval_days' => $intervalDays
        ]);

        return $scheduled;
    }

    /**
     * Update tool status based on inspection result
     */
    private function updateToolStatusFromInspection(ToolInspection $inspection): void
    {
        $tool = $inspection->getTool();

        switch ($inspection->getResult()) {
            case ToolInspection::RESULT_FAILED:
            case ToolInspection::RESULT_NEEDS_REPAIR:
                $tool->setStatus(Tool::STATUS_MAINTENANCE);
                break;
                
            case ToolInspection::RESULT_OUT_OF_SERVICE:
                $tool->setStatus(Tool::STATUS_BROKEN);
                break;
                
            case ToolInspection::RESULT_PASSED:
            case ToolInspection::RESULT_PASSED_WITH_REMARKS:
                // Only update to active if not already in a worse state
                if ($tool->getStatus() === Tool::STATUS_MAINTENANCE) {
                    $tool->setStatus(Tool::STATUS_ACTIVE);
                }
                break;
        }
    }

    /**
     * Get days until next inspection (negative if overdue)
     */
    private function getDaysUntilNextInspection(Tool $tool): ?int
    {
        if (!$tool->getNextInspectionDate()) {
            return null;
        }

        $today = new \DateTime();
        $diff = $today->diff($tool->getNextInspectionDate());
        
        return $diff->invert ? -$diff->days : $diff->days;
    }

    /**
     * Get inspection statistics for dashboard
     */
    public function getInspectionStatistics(): array
    {
        $stats = $this->inspectionRepository->getStatistics();
        
        // Add additional computed statistics
        $overdueTools = $this->toolRepository->findWithOverdueInspections();
        $upcomingInspections = $this->getToolsRequiringInspection(30);
        
        $stats['overdue_tools'] = count($overdueTools);
        $stats['upcoming_tools'] = count($upcomingInspections);
        $stats['average_cost'] = $this->inspectionRepository->getAverageInspectionCost();
        
        return $stats;
    }

    /**
     * Create inspection from tool's next inspection date
     */
    public function createInspectionFromTool(Tool $tool, ?string $inspectorName = null): ?ToolInspection
    {
        if (!$tool->getNextInspectionDate()) {
            return null;
        }

        return $this->createInspection(
            $tool,
            $tool->getNextInspectionDate(),
            $inspectorName,
            'Przegląd zgodnie z harmonogramem narzędzia'
        );
    }

    /**
     * Create a tool set inspection
     */
    public function createToolSetInspection(
        ToolSet $toolSet,
        \DateTimeInterface $plannedDate,
        ?string $inspectorName = null,
        ?string $description = null
    ): array {
        $inspections = [];
        $errors = [];

        foreach ($toolSet->getActiveItems() as $item) {
            $tool = $item->getTool();
            
            try {
                $inspection = $this->createInspection(
                    $tool,
                    $plannedDate,
                    $inspectorName,
                    $description ?? "Przegląd zestawu: {$toolSet->getName()}"
                );
                
                $inspection->addToolSet($toolSet);
                $inspections[] = $inspection;
            } catch (\Exception $e) {
                $errors[] = [
                    'tool' => $tool,
                    'error' => $e->getMessage()
                ];
            }
        }

        $this->entityManager->flush();

        $this->logger->info('Created tool set inspection', [
            'set_id' => $toolSet->getId(),
            'planned_date' => $plannedDate->format('Y-m-d'),
            'inspector' => $inspectorName,
            'inspections_created' => count($inspections),
            'errors_count' => count($errors)
        ]);

        return [
            'inspections' => $inspections,
            'errors' => $errors
        ];
    }

    /**
     * Complete a tool set inspection
     */
    public function completeToolSetInspection(
        ToolSet $toolSet,
        array $inspectionResults,
        ?string $overallNotes = null
    ): array {
        $completedInspections = [];
        $errors = [];

        foreach ($inspectionResults as $toolId => $result) {
            $tool = $this->toolRepository->find($toolId);
            if (!$tool) {
                $errors[] = "Nie znaleziono narzędzia ID: {$toolId}";
                continue;
            }

            // Find the inspection for this tool in this set
            $inspection = $this->findToolInspectionInSet($tool, $toolSet);
            if (!$inspection) {
                $errors[] = "Nie znaleziono przeglądu dla narzędzia: {$tool->getName()}";
                continue;
            }

            try {
                $this->completeInspection(
                    $inspection,
                    $result['result'],
                    $result['notes'] ?? $overallNotes,
                    $result['defects'] ?? null,
                    $result['cost'] ?? null,
                    new \DateTime()
                );
                
                $completedInspections[] = $inspection;
            } catch (\Exception $e) {
                $errors[] = [
                    'tool' => $tool,
                    'error' => $e->getMessage()
                ];
            }
        }

        $this->logger->info('Completed tool set inspection', [
            'set_id' => $toolSet->getId(),
            'completed_count' => count($completedInspections),
            'errors_count' => count($errors)
        ]);

        return [
            'completed' => $completedInspections,
            'errors' => $errors
        ];
    }

    /**
     * Get tool sets requiring inspection
     */
    public function getToolSetsRequiringInspection(int $days = 30): array
    {
        $toolSets = $this->toolSetRepository->findActive();
        $requiringInspection = [];

        foreach ($toolSets as $toolSet) {
            $hasUpcomingInspections = false;
            
            foreach ($toolSet->getActiveItems() as $item) {
                $tool = $item->getTool();
                if ($tool->isInspectionUpcoming($days) || $tool->isInspectionDue()) {
                    $hasUpcomingInspections = true;
                    break;
                }
            }
            
            if ($hasUpcomingInspections) {
                $requiringInspection[] = $toolSet;
            }
        }

        return $requiringInspection;
    }

    /**
     * Generate comprehensive tool set inspection report
     */
    public function generateToolSetInspectionReport(ToolSet $toolSet): array
    {
        $report = [
            'tool_set' => $toolSet,
            'items_status' => [],
            'inspection_history' => $toolSet->getInspections(),
            'last_inspection' => $toolSet->getLastInspection(),
            'completion_status' => $toolSet->getCompletionPercentage(),
            'missing_items' => $toolSet->getMissingItems(),
            'inspection_requirements' => []
        ];

        // Analyze each item's inspection status
        foreach ($toolSet->getActiveItems() as $item) {
            $tool = $item->getTool();
            $toolReport = $this->generateInspectionReport($tool);
            
            $report['items_status'][] = [
                'item' => $item,
                'tool_report' => $toolReport,
                'inspection_status' => $this->getToolInspectionStatus($tool),
                'requires_inspection' => $tool->isInspectionDue() || $tool->isInspectionUpcoming(30)
            ];
            
            if ($tool->isInspectionDue() || $tool->isInspectionUpcoming(30)) {
                $report['inspection_requirements'][] = $tool;
            }
        }

        // Calculate overall inspection metrics
        $totalTools = count($report['items_status']);
        $toolsRequiringInspection = count($report['inspection_requirements']);
        $overdueTools = 0;
        
        foreach ($report['items_status'] as $status) {
            if ($status['tool_report']['is_inspection_overdue']) {
                $overdueTools++;
            }
        }

        $report['summary'] = [
            'total_tools' => $totalTools,
            'tools_requiring_inspection' => $toolsRequiringInspection,
            'overdue_tools' => $overdueTools,
            'inspection_compliance' => $totalTools > 0 ? round((($totalTools - $overdueTools) / $totalTools) * 100, 2) : 100
        ];

        return $report;
    }

    /**
     * Find tool inspection in a specific set
     */
    private function findToolInspectionInSet(Tool $tool, ToolSet $toolSet): ?ToolInspection
    {
        $inspections = $this->inspectionRepository->findByTool($tool);
        
        foreach ($inspections as $inspection) {
            if ($inspection->getToolSets()->contains($toolSet)) {
                return $inspection;
            }
        }
        
        return null;
    }

    /**
     * Get tool inspection status description
     */
    private function getToolInspectionStatus(Tool $tool): string
    {
        if ($tool->isInspectionDue()) {
            return 'overdue';
        } elseif ($tool->isInspectionUpcoming(7)) {
            return 'due_soon';
        } elseif ($tool->isInspectionUpcoming(30)) {
            return 'upcoming';
        } else {
            return 'current';
        }
    }

    /**
     * Bulk schedule inspections for tool sets
     */
    public function bulkScheduleToolSetInspections(array $toolSets, \DateTimeInterface $startDate): array
    {
        $scheduled = [];
        $errors = [];

        foreach ($toolSets as $toolSet) {
            if (!$toolSet instanceof ToolSet) {
                continue;
            }

            try {
                $result = $this->createToolSetInspection(
                    $toolSet,
                    $startDate,
                    'Planowanie masowe',
                    'Przegląd zaplanowany w ramach planowania masowego zestawów'
                );
                
                $scheduled[] = [
                    'tool_set' => $toolSet,
                    'inspections' => $result['inspections'],
                    'errors' => $result['errors']
                ];
            } catch (\Exception $e) {
                $errors[] = [
                    'tool_set' => $toolSet,
                    'error' => $e->getMessage()
                ];
            }
        }

        $this->logger->info('Bulk scheduled tool set inspections', [
            'sets_count' => count($scheduled),
            'start_date' => $startDate->format('Y-m-d'),
            'errors_count' => count($errors)
        ]);

        return [
            'scheduled' => $scheduled,
            'errors' => $errors
        ];
    }
}