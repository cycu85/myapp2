<?php

namespace App\Entity;

use App\Repository\ToolRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ToolRepository::class)]
#[ORM\Table(name: 'tools')]
#[ORM\Index(name: 'IDX_tools_category', columns: ['category_id'])]
#[ORM\Index(name: 'IDX_tools_type', columns: ['type_id'])]
#[ORM\Index(name: 'IDX_tools_created_by', columns: ['created_by_id'])]
#[ORM\Index(name: 'IDX_tools_updated_by', columns: ['updated_by_id'])]
#[ORM\Index(name: 'IDX_tools_status', columns: ['status'])]
#[ORM\Index(name: 'IDX_tools_active', columns: ['is_active'])]
#[ORM\Index(name: 'IDX_tools_serial', columns: ['serial_number'])]
#[ORM\Index(name: 'IDX_tools_inventory', columns: ['inventory_number'])]
#[ORM\Index(name: 'IDX_tools_inspection_date', columns: ['next_inspection_date'])]
#[ORM\Index(name: 'IDX_tools_location', columns: ['location'])]
#[ORM\HasLifecycleCallbacks]
class Tool
{
    public const STATUS_ACTIVE = 'active';
    public const STATUS_INACTIVE = 'inactive';
    public const STATUS_MAINTENANCE = 'maintenance';
    public const STATUS_BROKEN = 'broken';
    public const STATUS_SOLD = 'sold';
    public const STATUS_DISPOSED = 'disposed';

    public const STATUSES = [
        self::STATUS_ACTIVE => 'Aktywny',
        self::STATUS_INACTIVE => 'Nieaktywny',
        self::STATUS_MAINTENANCE => 'W konserwacji',
        self::STATUS_BROKEN => 'Uszkodzony',
        self::STATUS_SOLD => 'Sprzedany',
        self::STATUS_DISPOSED => 'Zutylizowany',
    ];

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: ToolCategory::class, inversedBy: 'tools')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: 'Kategoria narzędzia jest wymagana')]
    private ?ToolCategory $category = null;

    #[ORM\ManyToOne(targetEntity: ToolType::class, inversedBy: 'tools')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: 'Typ narzędzia jest wymagany')]
    private ?ToolType $type = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'created_by_id', referencedColumnName: 'id')]
    private ?User $createdBy = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'updated_by_id', referencedColumnName: 'id')]
    private ?User $updatedBy = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Nazwa narzędzia jest wymagana')]
    #[Assert\Length(max: 255, maxMessage: 'Nazwa narzędzia nie może być dłuższa niż {{ limit }} znaków')]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 100, nullable: true)]
    #[Assert\Length(max: 100, maxMessage: 'Numer seryjny nie może być dłuższy niż {{ limit }} znaków')]
    private ?string $serialNumber = null;

    #[ORM\Column(length: 100, nullable: true)]
    #[Assert\Length(max: 100, maxMessage: 'Numer inwentarzowy nie może być dłuższy niż {{ limit }} znaków')]
    private ?string $inventoryNumber = null;

    #[ORM\Column(length: 100, nullable: true)]
    #[Assert\Length(max: 100, maxMessage: 'Nazwa producenta nie może być dłuższa niż {{ limit }} znaków')]
    private ?string $manufacturer = null;

    #[ORM\Column(length: 100, nullable: true)]
    #[Assert\Length(max: 100, maxMessage: 'Model nie może być dłuższy niż {{ limit }} znaków')]
    private ?string $model = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $purchaseDate = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    #[Assert\PositiveOrZero(message: 'Cena zakupu musi być liczbą dodatnią')]
    private ?string $purchasePrice = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $warrantyEndDate = null;

    #[ORM\Column(length: 50, options: ['default' => self::STATUS_ACTIVE])]
    private string $status = self::STATUS_ACTIVE;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $location = null;

    #[ORM\Column(type: Types::INTEGER, options: ['default' => 1])]
    #[Assert\Positive(message: 'Aktualna ilość musi być liczbą dodatnią')]
    private int $currentQuantity = 1;

    #[ORM\Column(type: Types::INTEGER, options: ['default' => 1])]
    #[Assert\Positive(message: 'Całkowita ilość musi być liczbą dodatnią')]
    private int $totalQuantity = 1;

    #[ORM\Column(type: Types::INTEGER, nullable: true)]
    #[Assert\PositiveOrZero(message: 'Minimalna ilość musi być liczbą dodatnią lub zerem')]
    private ?int $minQuantity = null;

    #[ORM\Column(length: 50, options: ['default' => 'szt'])]
    private string $unit = 'szt';

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $nextInspectionDate = null;

    #[ORM\Column(type: Types::INTEGER, nullable: true)]
    #[Assert\Positive(message: 'Interwał przeglądów musi być liczbą dodatnią')]
    private ?int $inspectionIntervalMonths = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $notes = null;

    #[ORM\Column(type: Types::BOOLEAN, options: ['default' => true])]
    private bool $isActive = true;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE, nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\OneToMany(targetEntity: ToolInspection::class, mappedBy: 'tool', cascade: ['persist', 'remove'], orphanRemoval: true)]
    #[ORM\OrderBy(['inspectionDate' => 'DESC'])]
    private Collection $inspections;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
        $this->inspections = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategory(): ?ToolCategory
    {
        return $this->category;
    }

    public function setCategory(?ToolCategory $category): static
    {
        $this->category = $category;
        return $this;
    }

    public function getType(): ?ToolType
    {
        return $this->type;
    }

    public function setType(?ToolType $type): static
    {
        $this->type = $type;
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

    public function getSerialNumber(): ?string
    {
        return $this->serialNumber;
    }

    public function setSerialNumber(?string $serialNumber): static
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }

    public function getInventoryNumber(): ?string
    {
        return $this->inventoryNumber;
    }

    public function setInventoryNumber(?string $inventoryNumber): static
    {
        $this->inventoryNumber = $inventoryNumber;
        return $this;
    }

    public function getManufacturer(): ?string
    {
        return $this->manufacturer;
    }

    public function setManufacturer(?string $manufacturer): static
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): static
    {
        $this->model = $model;
        return $this;
    }

    public function getPurchaseDate(): ?\DateTimeInterface
    {
        return $this->purchaseDate;
    }

    public function setPurchaseDate(?\DateTimeInterface $purchaseDate): static
    {
        $this->purchaseDate = $purchaseDate;
        return $this;
    }

    public function getPurchasePrice(): ?string
    {
        return $this->purchasePrice;
    }

    public function setPurchasePrice(?string $purchasePrice): static
    {
        $this->purchasePrice = $purchasePrice;
        return $this;
    }

    public function getWarrantyEndDate(): ?\DateTimeInterface
    {
        return $this->warrantyEndDate;
    }

    public function setWarrantyEndDate(?\DateTimeInterface $warrantyEndDate): static
    {
        $this->warrantyEndDate = $warrantyEndDate;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        if (!array_key_exists($status, self::STATUSES)) {
            throw new \InvalidArgumentException('Invalid status: ' . $status);
        }
        $this->status = $status;
        return $this;
    }

    public function getStatusLabel(): string
    {
        return self::STATUSES[$this->status] ?? $this->status;
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

    public function getCurrentQuantity(): int
    {
        return $this->currentQuantity;
    }

    public function setCurrentQuantity(int $currentQuantity): static
    {
        $this->currentQuantity = $currentQuantity;
        return $this;
    }

    public function getTotalQuantity(): int
    {
        return $this->totalQuantity;
    }

    public function setTotalQuantity(int $totalQuantity): static
    {
        $this->totalQuantity = $totalQuantity;
        return $this;
    }

    public function getMinQuantity(): ?int
    {
        return $this->minQuantity;
    }

    public function setMinQuantity(?int $minQuantity): static
    {
        $this->minQuantity = $minQuantity;
        return $this;
    }

    public function getUnit(): string
    {
        return $this->unit;
    }

    public function setUnit(string $unit): static
    {
        $this->unit = $unit;
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

    public function getInspectionIntervalMonths(): ?int
    {
        return $this->inspectionIntervalMonths;
    }

    public function setInspectionIntervalMonths(?int $inspectionIntervalMonths): static
    {
        $this->inspectionIntervalMonths = $inspectionIntervalMonths;
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

    public function isMultiQuantity(): bool
    {
        return $this->type?->isMultiQuantity() ?? false;
    }

    public function isLowQuantity(): bool
    {
        if (!$this->isMultiQuantity() || $this->minQuantity === null) {
            return false;
        }
        return $this->currentQuantity <= $this->minQuantity;
    }

    public function isInspectionDue(): bool
    {
        if (!$this->nextInspectionDate) {
            return false;
        }
        return $this->nextInspectionDate <= new \DateTime();
    }

    public function isInspectionUpcoming(int $days = 30): bool
    {
        if (!$this->nextInspectionDate) {
            return false;
        }
        $upcomingDate = new \DateTime('+' . $days . ' days');
        return $this->nextInspectionDate <= $upcomingDate;
    }

    public function calculateNextInspectionDate(): ?\DateTime
    {
        if (!$this->inspectionIntervalMonths) {
            return null;
        }
        
        $baseDate = $this->nextInspectionDate ?? new \DateTime();
        return (clone $baseDate)->modify('+' . $this->inspectionIntervalMonths . ' months');
    }

    public function getFullName(): string
    {
        $parts = [$this->name];
        
        if ($this->manufacturer) {
            $parts[] = $this->manufacturer;
        }
        
        if ($this->model) {
            $parts[] = $this->model;
        }
        
        if ($this->serialNumber) {
            $parts[] = 'S/N: ' . $this->serialNumber;
        }
        
        return implode(' - ', $parts);
    }

    public function __toString(): string
    {
        return $this->name ?? '';
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
            $inspection->setTool($this);
        }

        return $this;
    }

    public function removeInspection(ToolInspection $inspection): static
    {
        if ($this->inspections->removeElement($inspection)) {
            if ($inspection->getTool() === $this) {
                $inspection->setTool(null);
            }
        }

        return $this;
    }

    public function getLastInspection(): ?ToolInspection
    {
        return $this->inspections->first() ?: null;
    }

    public function getPassedInspections(): Collection
    {
        return $this->inspections->filter(fn(ToolInspection $inspection) => $inspection->isPassed());
    }

    public function getFailedInspections(): Collection
    {
        return $this->inspections->filter(fn(ToolInspection $inspection) => $inspection->isFailed());
    }

    #[ORM\PreUpdate]
    public function onPreUpdate(): void
    {
        $this->updatedAt = new \DateTimeImmutable();
    }
}