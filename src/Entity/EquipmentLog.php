<?php

namespace App\Entity;

use App\Repository\EquipmentLogRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EquipmentLogRepository::class)]
#[ORM\Table(name: 'equipment_log')]
#[ORM\HasLifecycleCallbacks]
class EquipmentLog
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Equipment::class, inversedBy: 'logs')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Equipment $equipment = null;

    #[ORM\Column(length: 50)]
    private ?string $action = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $previousStatus = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $newStatus = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: true)]
    private ?User $previousAssignee = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: true)]
    private ?User $newAssignee = null;

    #[ORM\Column(type: Types::JSON, nullable: true)]
    private array $additionalData = [];

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $createdBy = null;

    public const ACTION_CREATED = 'created';
    public const ACTION_UPDATED = 'updated';
    public const ACTION_ASSIGNED = 'assigned';
    public const ACTION_UNASSIGNED = 'unassigned';
    public const ACTION_STATUS_CHANGED = 'status_changed';
    public const ACTION_MAINTENANCE = 'maintenance';
    public const ACTION_INSPECTION = 'inspection';
    public const ACTION_REPAIR = 'repair';
    public const ACTION_RETIRED = 'retired';

    public function __construct()
    {
        $this->additionalData = [];
    }

    #[ORM\PrePersist]
    public function setCreatedAtValue(): void
    {
        $this->createdAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEquipment(): ?Equipment
    {
        return $this->equipment;
    }

    public function setEquipment(?Equipment $equipment): static
    {
        $this->equipment = $equipment;
        return $this;
    }

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAction(string $action): static
    {
        $this->action = $action;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getPreviousStatus(): ?string
    {
        return $this->previousStatus;
    }

    public function setPreviousStatus(?string $previousStatus): static
    {
        $this->previousStatus = $previousStatus;
        return $this;
    }

    public function getNewStatus(): ?string
    {
        return $this->newStatus;
    }

    public function setNewStatus(?string $newStatus): static
    {
        $this->newStatus = $newStatus;
        return $this;
    }

    public function getPreviousAssignee(): ?User
    {
        return $this->previousAssignee;
    }

    public function setPreviousAssignee(?User $previousAssignee): static
    {
        $this->previousAssignee = $previousAssignee;
        return $this;
    }

    public function getNewAssignee(): ?User
    {
        return $this->newAssignee;
    }

    public function setNewAssignee(?User $newAssignee): static
    {
        $this->newAssignee = $newAssignee;
        return $this;
    }

    public function getAdditionalData(): array
    {
        return $this->additionalData;
    }

    public function setAdditionalData(?array $additionalData): static
    {
        $this->additionalData = $additionalData ?? [];
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

    public function getCreatedBy(): ?User
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?User $createdBy): static
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    public static function getActionChoices(): array
    {
        return [
            'Utworzony' => self::ACTION_CREATED,
            'Zaktualizowany' => self::ACTION_UPDATED,
            'Przypisany' => self::ACTION_ASSIGNED,
            'Odłączony' => self::ACTION_UNASSIGNED,
            'Zmiana statusu' => self::ACTION_STATUS_CHANGED,
            'Konserwacja' => self::ACTION_MAINTENANCE,
            'Przegląd' => self::ACTION_INSPECTION,
            'Naprawa' => self::ACTION_REPAIR,
            'Wycofany' => self::ACTION_RETIRED,
        ];
    }

    public function getActionLabel(): string
    {
        $actionLabels = array_flip(self::getActionChoices());
        return $actionLabels[$this->action] ?? $this->action;
    }
}