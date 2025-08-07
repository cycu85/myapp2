<?php

namespace App\Entity;

use App\Repository\ToolSetItemRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: ToolSetItemRepository::class)]
#[ORM\Table(name: 'tool_set_items')]
#[ORM\Index(name: 'IDX_tool_set_items_set', columns: ['tool_set_id'])]
#[ORM\Index(name: 'IDX_tool_set_items_tool', columns: ['tool_id'])]
#[ORM\Index(name: 'IDX_tool_set_items_active', columns: ['is_active'])]
#[ORM\UniqueConstraint(name: 'UNIQ_tool_set_tool', columns: ['tool_set_id', 'tool_id'])]
#[UniqueEntity(fields: ['toolSet', 'tool'], message: 'To narzędzie już znajduje się w tym zestawie')]
#[ORM\HasLifecycleCallbacks]
class ToolSetItem
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: ToolSet::class, inversedBy: 'items')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    #[Assert\NotNull(message: 'Zestaw narzędzi jest wymagany')]
    private ?ToolSet $toolSet = null;

    #[ORM\ManyToOne(targetEntity: Tool::class)]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    #[Assert\NotNull(message: 'Narzędzie jest wymagane')]
    private ?Tool $tool = null;

    #[ORM\Column(type: Types::INTEGER, options: ['default' => 1])]
    #[Assert\Positive(message: 'Ilość musi być liczbą dodatnią')]
    private int $quantity = 1;

    #[ORM\Column(type: Types::INTEGER, options: ['default' => 1])]
    #[Assert\Positive(message: 'Wymagana ilość musi być liczbą dodatnią')]
    private int $requiredQuantity = 1;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $notes = null;

    #[ORM\Column(type: Types::BOOLEAN, options: ['default' => true])]
    private bool $isActive = true;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE, nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getToolSet(): ?ToolSet
    {
        return $this->toolSet;
    }

    public function setToolSet(?ToolSet $toolSet): static
    {
        $this->toolSet = $toolSet;
        return $this;
    }

    public function getTool(): ?Tool
    {
        return $this->tool;
    }

    public function setTool(?Tool $tool): static
    {
        $this->tool = $tool;
        return $this;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): static
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function getRequiredQuantity(): int
    {
        return $this->requiredQuantity;
    }

    public function setRequiredQuantity(int $requiredQuantity): static
    {
        $this->requiredQuantity = $requiredQuantity;
        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): static
    {
        $this->notes = $notes;
        return $this;
    }

    public function isActive(): bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): static
    {
        $this->isActive = $isActive;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    // Business logic methods

    public function isSufficient(): bool
    {
        return $this->quantity >= $this->requiredQuantity;
    }

    public function getMissingQuantity(): int
    {
        return max(0, $this->requiredQuantity - $this->quantity);
    }

    public function getExcessQuantity(): int
    {
        return max(0, $this->quantity - $this->requiredQuantity);
    }

    public function getCompletionPercentage(): float
    {
        if ($this->requiredQuantity === 0) {
            return 100.0;
        }

        return min(100.0, round(($this->quantity / $this->requiredQuantity) * 100, 2));
    }

    public function getStatusDescription(): string
    {
        if ($this->isSufficient()) {
            return 'Kompletny';
        }

        return sprintf('Brakuje %d %s', 
            $this->getMissingQuantity(), 
            $this->tool?->getUnit() ?? 'szt'
        );
    }

    public function canAdjustQuantity(): bool
    {
        return $this->tool?->isMultiQuantity() ?? false;
    }

    public function getMaxAvailableQuantity(): int
    {
        if (!$this->tool) {
            return 0;
        }

        if ($this->tool->isMultiQuantity()) {
            return $this->tool->getCurrentQuantity();
        }

        return $this->tool->getStatus() === Tool::STATUS_ACTIVE ? 1 : 0;
    }

    public function adjustQuantityFromTool(): bool
    {
        if (!$this->tool || !$this->canAdjustQuantity()) {
            return false;
        }

        $maxAvailable = $this->getMaxAvailableQuantity();
        $this->quantity = min($this->requiredQuantity, $maxAvailable);
        
        return true;
    }

    public function getDisplayName(): string
    {
        if (!$this->tool) {
            return 'Nieznane narzędzie';
        }

        $name = $this->tool->getName();
        
        if ($this->tool->getManufacturer()) {
            $name .= ' (' . $this->tool->getManufacturer();
            if ($this->tool->getModel()) {
                $name .= ' ' . $this->tool->getModel();
            }
            $name .= ')';
        }

        return $name;
    }

    public function getQuantityDisplay(): string
    {
        $unit = $this->tool?->getUnit() ?? 'szt';
        
        if ($this->isSufficient()) {
            return sprintf('%d %s', $this->quantity, $unit);
        }

        return sprintf('%d/%d %s', $this->quantity, $this->requiredQuantity, $unit);
    }

    public function __toString(): string
    {
        return sprintf('%s - %s', 
            $this->toolSet?->getName() ?? 'Zestaw', 
            $this->tool?->getName() ?? 'Narzędzie'
        );
    }

    #[ORM\PreUpdate]
    public function onPreUpdate(): void
    {
        $this->updatedAt = new \DateTimeImmutable();
    }
}