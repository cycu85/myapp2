<?php

namespace App\Entity;

use App\Repository\EquipmentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EquipmentRepository::class)]
#[ORM\HasLifecycleCallbacks]
class Equipment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100, unique: true)]
    private ?string $inventoryNumber = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\ManyToOne(targetEntity: EquipmentCategory::class, inversedBy: 'equipment')]
    #[ORM\JoinColumn(nullable: false)]
    private ?EquipmentCategory $category = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $manufacturer = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $model = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $serialNumber = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $purchaseDate = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $purchasePrice = null;

    #[ORM\Column(length: 50)]
    private ?string $status = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: true)]
    private ?User $assignedTo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $location = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $warrantyExpiry = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $nextInspectionDate = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $notes = null;

    #[ORM\Column(type: Types::JSON, nullable: true)]
    private array $customFields = [];

    #[ORM\OneToMany(mappedBy: 'equipment', targetEntity: EquipmentLog::class, cascade: ['persist', 'remove'])]
    private Collection $logs;

    #[ORM\OneToMany(mappedBy: 'equipment', targetEntity: EquipmentAttachment::class, cascade: ['persist', 'remove'])]
    private Collection $attachments;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $updatedAt = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $createdBy = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: true)]
    private ?User $updatedBy = null;

    public const STATUS_AVAILABLE = 'available';
    public const STATUS_IN_USE = 'in_use';
    public const STATUS_MAINTENANCE = 'maintenance';
    public const STATUS_REPAIR = 'repair';
    public const STATUS_RETIRED = 'retired';
    public const STATUS_LOST = 'lost';
    public const STATUS_DAMAGED = 'damaged';

    public function __construct()
    {
        $this->logs = new ArrayCollection();
        $this->attachments = new ArrayCollection();
        $this->customFields = [];
        $this->status = self::STATUS_AVAILABLE;
    }

    #[ORM\PrePersist]
    public function setCreatedAtValue(): void
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }

    #[ORM\PreUpdate]
    public function setUpdatedAtValue(): void
    {
        $this->updatedAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInventoryNumber(): ?string
    {
        return $this->inventoryNumber;
    }

    public function setInventoryNumber(string $inventoryNumber): static
    {
        $this->inventoryNumber = $inventoryNumber;
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

    public function getCategory(): ?EquipmentCategory
    {
        return $this->category;
    }

    public function setCategory(?EquipmentCategory $category): static
    {
        $this->category = $category;
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

    public function getSerialNumber(): ?string
    {
        return $this->serialNumber;
    }

    public function setSerialNumber(?string $serialNumber): static
    {
        $this->serialNumber = $serialNumber;
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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;
        return $this;
    }

    public function getAssignedTo(): ?User
    {
        return $this->assignedTo;
    }

    public function setAssignedTo(?User $assignedTo): static
    {
        $this->assignedTo = $assignedTo;
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

    public function getWarrantyExpiry(): ?\DateTimeInterface
    {
        return $this->warrantyExpiry;
    }

    public function setWarrantyExpiry(?\DateTimeInterface $warrantyExpiry): static
    {
        $this->warrantyExpiry = $warrantyExpiry;
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

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): static
    {
        $this->notes = $notes;
        return $this;
    }

    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): static
    {
        $this->customFields = $customFields ?? [];
        return $this;
    }

    public function getCustomField(string $key): mixed
    {
        return $this->customFields[$key] ?? null;
    }

    public function setCustomField(string $key, mixed $value): static
    {
        $this->customFields[$key] = $value;
        return $this;
    }

    /**
     * @return Collection<int, EquipmentLog>
     */
    public function getLogs(): Collection
    {
        return $this->logs;
    }

    public function addLog(EquipmentLog $log): static
    {
        if (!$this->logs->contains($log)) {
            $this->logs->add($log);
            $log->setEquipment($this);
        }
        return $this;
    }

    public function removeLog(EquipmentLog $log): static
    {
        if ($this->logs->removeElement($log)) {
            if ($log->getEquipment() === $this) {
                $log->setEquipment(null);
            }
        }
        return $this;
    }

    /**
     * @return Collection<int, EquipmentAttachment>
     */
    public function getAttachments(): Collection
    {
        return $this->attachments;
    }

    public function addAttachment(EquipmentAttachment $attachment): static
    {
        if (!$this->attachments->contains($attachment)) {
            $this->attachments->add($attachment);
            $attachment->setEquipment($this);
        }
        return $this;
    }

    public function removeAttachment(EquipmentAttachment $attachment): static
    {
        if ($this->attachments->removeElement($attachment)) {
            if ($attachment->getEquipment() === $this) {
                $attachment->setEquipment(null);
            }
        }
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): static
    {
        $this->updatedAt = $updatedAt;
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

    public static function getStatusChoices(): array
    {
        return [
            'Dostępny' => self::STATUS_AVAILABLE,
            'W użyciu' => self::STATUS_IN_USE,
            'Konserwacja' => self::STATUS_MAINTENANCE,
            'Naprawa' => self::STATUS_REPAIR,
            'Wycofany' => self::STATUS_RETIRED,
            'Zgubiony' => self::STATUS_LOST,
            'Uszkodzony' => self::STATUS_DAMAGED,
        ];
    }

    public function getStatusLabel(): string
    {
        $statusLabels = array_flip(self::getStatusChoices());
        return $statusLabels[$this->status] ?? $this->status;
    }

    public function isAvailable(): bool
    {
        return $this->status === self::STATUS_AVAILABLE;
    }

    public function isInUse(): bool
    {
        return $this->status === self::STATUS_IN_USE;
    }

    public function __toString(): string
    {
        return $this->name . ' (' . $this->inventoryNumber . ')';
    }
}