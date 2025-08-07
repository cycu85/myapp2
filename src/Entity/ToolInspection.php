<?php

namespace App\Entity;

use App\Repository\ToolInspectionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ToolInspectionRepository::class)]
#[ORM\Table(name: 'tool_inspections')]
#[ORM\Index(name: 'IDX_tool_inspections_tool', columns: ['tool_id'])]
#[ORM\Index(name: 'IDX_tool_inspections_created_by', columns: ['created_by_id'])]
#[ORM\Index(name: 'IDX_tool_inspections_updated_by', columns: ['updated_by_id'])]
#[ORM\Index(name: 'IDX_tool_inspections_inspection_date', columns: ['inspection_date'])]
#[ORM\Index(name: 'IDX_tool_inspections_planned_date', columns: ['planned_date'])]
#[ORM\Index(name: 'IDX_tool_inspections_result', columns: ['result'])]
#[ORM\Index(name: 'IDX_tool_inspections_active', columns: ['is_active'])]
#[ORM\HasLifecycleCallbacks]
class ToolInspection
{
    public const RESULT_PASSED = 'passed';
    public const RESULT_PASSED_WITH_REMARKS = 'passed_with_remarks';
    public const RESULT_FAILED = 'failed';
    public const RESULT_NEEDS_REPAIR = 'needs_repair';
    public const RESULT_OUT_OF_SERVICE = 'out_of_service';

    public const RESULTS = [
        self::RESULT_PASSED => 'Przegląd zaliczony',
        self::RESULT_PASSED_WITH_REMARKS => 'Zaliczony z uwagami',
        self::RESULT_FAILED => 'Przegląd niezaliczony',
        self::RESULT_NEEDS_REPAIR => 'Wymaga naprawy',
        self::RESULT_OUT_OF_SERVICE => 'Wycofany z użytku',
    ];

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Tool::class, inversedBy: 'inspections')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    #[Assert\NotNull(message: 'Narzędzie jest wymagane')]
    private ?Tool $tool = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'created_by_id', referencedColumnName: 'id', onDelete: 'SET NULL')]
    private ?User $createdBy = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'updated_by_id', referencedColumnName: 'id', onDelete: 'SET NULL')]
    private ?User $updatedBy = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotNull(message: 'Data przeglądu jest wymagana')]
    #[Assert\LessThanOrEqual('today', message: 'Data przeglądu nie może być z przyszłości')]
    private ?\DateTimeInterface $inspectionDate = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotNull(message: 'Planowana data przeglądu jest wymagana')]
    private ?\DateTimeInterface $plannedDate = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Nazwa inspektora jest wymagana')]
    #[Assert\Length(max: 255, maxMessage: 'Nazwa inspektora nie może być dłuższa niż {{ limit }} znaków')]
    private ?string $inspectorName = null;

    #[ORM\Column(length: 50, options: ['default' => self::RESULT_PASSED])]
    private string $result = self::RESULT_PASSED;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $notes = null;

    #[ORM\Column(type: Types::JSON, nullable: true)]
    private ?array $defectsFound = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $nextInspectionDate = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    #[Assert\PositiveOrZero(message: 'Koszt przeglądu musi być liczbą dodatnią')]
    private ?string $cost = null;

    #[ORM\Column(type: Types::BOOLEAN, options: ['default' => true])]
    private bool $isActive = true;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE, nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\ManyToMany(targetEntity: ToolSet::class, mappedBy: 'inspections')]
    private Collection $toolSets;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
        $this->inspectionDate = new \DateTime();
        $this->defectsFound = [];
        $this->toolSets = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getInspectionDate(): ?\DateTimeInterface
    {
        return $this->inspectionDate;
    }

    public function setInspectionDate(\DateTimeInterface $inspectionDate): static
    {
        $this->inspectionDate = $inspectionDate;
        return $this;
    }

    public function getPlannedDate(): ?\DateTimeInterface
    {
        return $this->plannedDate;
    }

    public function setPlannedDate(\DateTimeInterface $plannedDate): static
    {
        $this->plannedDate = $plannedDate;
        return $this;
    }

    public function getInspectorName(): ?string
    {
        return $this->inspectorName;
    }

    public function setInspectorName(string $inspectorName): static
    {
        $this->inspectorName = $inspectorName;
        return $this;
    }

    public function getResult(): string
    {
        return $this->result;
    }

    public function setResult(string $result): static
    {
        if (!array_key_exists($result, self::RESULTS)) {
            throw new \InvalidArgumentException('Invalid inspection result: ' . $result);
        }
        $this->result = $result;
        return $this;
    }

    public function getResultLabel(): string
    {
        return self::RESULTS[$this->result] ?? $this->result;
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

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): static
    {
        $this->notes = $notes;
        return $this;
    }

    public function getDefectsFound(): ?array
    {
        return $this->defectsFound;
    }

    public function setDefectsFound(?array $defectsFound): static
    {
        $this->defectsFound = $defectsFound;
        return $this;
    }

    public function addDefect(string $defect): static
    {
        if (!in_array($defect, $this->defectsFound ?? [])) {
            $this->defectsFound[] = $defect;
        }
        return $this;
    }

    public function removeDefect(string $defect): static
    {
        if (($key = array_search($defect, $this->defectsFound ?? [])) !== false) {
            unset($this->defectsFound[$key]);
            $this->defectsFound = array_values($this->defectsFound);
        }
        return $this;
    }

    public function getNextInspectionDate(): ?\DateTimeInterface
    {
        return $this->nextInspectionDate;
    }

    public function setNextInspectionDate(?\DateTimeInterface $nextInspectionDate): static
    {
        $this->nextInspectionDate = $nextInspectionDate;
        return $this;
    }

    public function getCost(): ?string
    {
        return $this->cost;
    }

    public function setCost(?string $cost): static
    {
        $this->cost = $cost;
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

    public function isPassed(): bool
    {
        return $this->result === self::RESULT_PASSED;
    }

    public function isFailed(): bool
    {
        return in_array($this->result, [self::RESULT_FAILED, self::RESULT_NEEDS_REPAIR, self::RESULT_OUT_OF_SERVICE]);
    }

    public function hasDefects(): bool
    {
        return !empty($this->defectsFound);
    }

    public function isOverdue(): bool
    {
        if (!$this->plannedDate) {
            return false;
        }
        return $this->plannedDate < new \DateTime();
    }

    public function getDaysOverdue(): int
    {
        if (!$this->isOverdue()) {
            return 0;
        }
        $today = new \DateTime();
        return $today->diff($this->plannedDate)->days;
    }

    public function calculateNextInspectionDate(): ?\DateTime
    {
        if (!$this->tool || !$this->tool->getInspectionIntervalMonths()) {
            return null;
        }
        
        return (clone $this->inspectionDate)->modify('+' . $this->tool->getInspectionIntervalMonths() . ' months');
    }

    public function __toString(): string
    {
        return sprintf('Przegląd %s - %s', $this->tool?->getName() ?? '', $this->inspectionDate?->format('Y-m-d') ?? '');
    }

    /**
     * @return Collection<int, ToolSet>
     */
    public function getToolSets(): Collection
    {
        return $this->toolSets;
    }

    public function addToolSet(ToolSet $toolSet): static
    {
        if (!$this->toolSets->contains($toolSet)) {
            $this->toolSets->add($toolSet);
            $toolSet->addInspection($this);
        }

        return $this;
    }

    public function removeToolSet(ToolSet $toolSet): static
    {
        if ($this->toolSets->removeElement($toolSet)) {
            $toolSet->removeInspection($this);
        }

        return $this;
    }

    public function isSetInspection(): bool
    {
        return $this->toolSets->count() > 0;
    }

    public function getInspectedSetsNames(): array
    {
        return $this->toolSets->map(fn(ToolSet $set) => $set->getName())->toArray();
    }

    #[ORM\PreUpdate]
    public function onPreUpdate(): void
    {
        $this->updatedAt = new \DateTimeImmutable();
    }
}