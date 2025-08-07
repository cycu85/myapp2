<?php

namespace App\Entity;

use App\Repository\ToolSetRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: ToolSetRepository::class)]
#[ORM\Table(name: 'tool_sets')]
#[ORM\Index(name: 'IDX_tool_sets_created_by', columns: ['created_by_id'])]
#[ORM\Index(name: 'IDX_tool_sets_updated_by', columns: ['updated_by_id'])]
#[ORM\Index(name: 'IDX_tool_sets_status', columns: ['status'])]
#[ORM\Index(name: 'IDX_tool_sets_active', columns: ['is_active'])]
#[ORM\Index(name: 'IDX_tool_sets_location', columns: ['location'])]
#[ORM\UniqueConstraint(name: 'UNIQ_tool_sets_code', columns: ['code'])]
#[UniqueEntity(fields: ['code'], message: 'Kod zestawu już istnieje')]
#[ORM\HasLifecycleCallbacks]
class ToolSet
{
    public const STATUS_ACTIVE = 'active';
    public const STATUS_INACTIVE = 'inactive';
    public const STATUS_MAINTENANCE = 'maintenance';
    public const STATUS_INCOMPLETE = 'incomplete';
    public const STATUS_RETIRED = 'retired';

    public const STATUSES = [
        self::STATUS_ACTIVE => 'Aktywny',
        self::STATUS_INACTIVE => 'Nieaktywny',
        self::STATUS_MAINTENANCE => 'W konserwacji',
        self::STATUS_INCOMPLETE => 'Niekompletny',
        self::STATUS_RETIRED => 'Wycofany',
    ];

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'created_by_id', referencedColumnName: 'id', onDelete: 'SET NULL')]
    private ?User $createdBy = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'updated_by_id', referencedColumnName: 'id', onDelete: 'SET NULL')]
    private ?User $updatedBy = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Nazwa zestawu jest wymagana')]
    #[Assert\Length(max: 255, maxMessage: 'Nazwa zestawu nie może być dłuższa niż {{ limit }} znaków')]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 100, nullable: true)]
    #[Assert\Length(max: 100, maxMessage: 'Kod zestawu nie może być dłuższy niż {{ limit }} znaków')]
    private ?string $code = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $location = null;

    #[ORM\Column(length: 50, options: ['default' => self::STATUS_ACTIVE])]
    private string $status = self::STATUS_ACTIVE;

    #[ORM\Column(type: Types::BOOLEAN, options: ['default' => true])]
    private bool $isActive = true;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE, nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\OneToMany(targetEntity: ToolSetItem::class, mappedBy: 'toolSet', cascade: ['persist', 'remove'], orphanRemoval: true)]
    #[ORM\OrderBy(['id' => 'ASC'])]
    private Collection $items;

    #[ORM\ManyToMany(targetEntity: ToolInspection::class)]
    #[ORM\JoinTable(
        name: 'tool_set_inspections',
        joinColumns: [new ORM\JoinColumn(name: 'tool_set_id', referencedColumnName: 'id', onDelete: 'CASCADE')],
        inverseJoinColumns: [new ORM\JoinColumn(name: 'inspection_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
    )]
    #[ORM\OrderBy(['inspectionDate' => 'DESC'])]
    private Collection $inspections;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
        $this->items = new ArrayCollection();
        $this->inspections = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreatedBy(): ?User
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?User $createdBy): static
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    public function getUpdatedBy(): ?User
    {
        return $this->updatedBy;
    }

    public function setUpdatedBy(?User $updatedBy): static
    {
        $this->updatedBy = $updatedBy;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): static
    {
        $this->code = $code;
        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): static
    {
        $this->location = $location;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        if (!array_key_exists($status, self::STATUSES)) {
            throw new \InvalidArgumentException('Invalid tool set status: ' . $status);
        }
        $this->status = $status;
        return $this;
    }

    public function getStatusLabel(): string
    {
        return self::STATUSES[$this->status] ?? $this->status;
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

    /**
     * @return Collection<int, ToolSetItem>
     */
    public function getItems(): Collection
    {
        return $this->items;
    }

    public function addItem(ToolSetItem $item): static
    {
        if (!$this->items->contains($item)) {
            $this->items->add($item);
            $item->setToolSet($this);
        }

        return $this;
    }

    public function removeItem(ToolSetItem $item): static
    {
        if ($this->items->removeElement($item)) {
            if ($item->getToolSet() === $this) {
                $item->setToolSet(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ToolInspection>
     */
    public function getInspections(): Collection
    {
        return $this->inspections;
    }

    public function addInspection(ToolInspection $inspection): static
    {
        if (!$this->inspections->contains($inspection)) {
            $this->inspections->add($inspection);
        }

        return $this;
    }

    public function removeInspection(ToolInspection $inspection): static
    {
        $this->inspections->removeElement($inspection);

        return $this;
    }

    // Business logic methods

    public function getActiveItems(): Collection
    {
        return $this->items->filter(fn(ToolSetItem $item) => $item->isActive());
    }

    public function getTotalItemsCount(): int
    {
        return $this->getActiveItems()->count();
    }

    public function getTotalRequiredQuantity(): int
    {
        return $this->getActiveItems()
            ->map(fn(ToolSetItem $item) => $item->getRequiredQuantity())
            ->reduce(fn(int $sum, int $quantity) => $sum + $quantity, 0);
    }

    public function getTotalCurrentQuantity(): int
    {
        return $this->getActiveItems()
            ->map(fn(ToolSetItem $item) => $item->getQuantity())
            ->reduce(fn(int $sum, int $quantity) => $sum + $quantity, 0);
    }

    public function isComplete(): bool
    {
        foreach ($this->getActiveItems() as $item) {
            if (!$item->isSufficient()) {
                return false;
            }
        }
        return true;
    }

    public function getCompletionPercentage(): float
    {
        $totalRequired = $this->getTotalRequiredQuantity();
        if ($totalRequired === 0) {
            return 100.0;
        }

        $totalCurrent = $this->getTotalCurrentQuantity();
        return min(100.0, round(($totalCurrent / $totalRequired) * 100, 2));
    }

    public function getMissingItems(): Collection
    {
        return $this->getActiveItems()->filter(fn(ToolSetItem $item) => !$item->isSufficient());
    }

    public function getAvailableTools(): array
    {
        $tools = [];
        foreach ($this->getActiveItems() as $item) {
            if ($item->getTool()->isActive() && $item->getTool()->getStatus() === Tool::STATUS_ACTIVE) {
                $tools[] = $item->getTool();
            }
        }
        return $tools;
    }

    public function getLastInspection(): ?ToolInspection
    {
        return $this->inspections->first() ?: null;
    }

    public function hasInspection(ToolInspection $inspection): bool
    {
        return $this->inspections->contains($inspection);
    }

    public function getInspectionsByResult(string $result): Collection
    {
        return $this->inspections->filter(fn(ToolInspection $inspection) => $inspection->getResult() === $result);
    }

    public function getPassedInspections(): Collection
    {
        return $this->getInspectionsByResult(ToolInspection::RESULT_PASSED);
    }

    public function getFailedInspections(): Collection
    {
        return $this->inspections->filter(fn(ToolInspection $inspection) => $inspection->isFailed());
    }

    public function updateStatusBasedOnCondition(): void
    {
        if (!$this->isComplete()) {
            $this->setStatus(self::STATUS_INCOMPLETE);
        } else {
            // Check if any tools are in maintenance
            $hasMaintenanceTools = false;
            foreach ($this->getActiveItems() as $item) {
                if ($item->getTool()->getStatus() === Tool::STATUS_MAINTENANCE) {
                    $hasMaintenanceTools = true;
                    break;
                }
            }

            if ($hasMaintenanceTools) {
                $this->setStatus(self::STATUS_MAINTENANCE);
            } elseif ($this->status !== self::STATUS_RETIRED) {
                $this->setStatus(self::STATUS_ACTIVE);
            }
        }
    }

    public function generateCode(): string
    {
        if ($this->code) {
            return $this->code;
        }

        // Generate code based on name
        $code = strtoupper(substr(preg_replace('/[^a-zA-Z0-9]/', '', $this->name), 0, 6));
        $code .= str_pad((string) ($this->id ?? rand(1, 999)), 3, '0', STR_PAD_LEFT);
        
        return $code;
    }

    public function __toString(): string
    {
        return $this->name ?? '';
    }

    #[ORM\PreUpdate]
    public function onPreUpdate(): void
    {
        $this->updatedAt = new \DateTimeImmutable();
    }
}