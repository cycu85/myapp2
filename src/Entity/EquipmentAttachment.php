<?php

namespace App\Entity;

use App\Repository\EquipmentAttachmentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EquipmentAttachmentRepository::class)]
#[ORM\HasLifecycleCallbacks]
class EquipmentAttachment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Equipment::class, inversedBy: 'attachments')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Equipment $equipment = null;

    #[ORM\Column(length: 255)]
    private ?string $filename = null;

    #[ORM\Column(length: 255)]
    private ?string $originalFilename = null;

    #[ORM\Column(length: 100)]
    private ?string $mimeType = null;

    #[ORM\Column]
    private ?int $fileSize = null;

    #[ORM\Column(length: 50)]
    private ?string $type = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $uploadedBy = null;

    public const TYPE_MANUAL = 'manual';
    public const TYPE_WARRANTY = 'warranty';
    public const TYPE_INVOICE = 'invoice';
    public const TYPE_PHOTO = 'photo';
    public const TYPE_CERTIFICATE = 'certificate';
    public const TYPE_OTHER = 'other';

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

    public function getFilename(): ?string
    {
        return $this->filename;
    }

    public function setFilename(string $filename): static
    {
        $this->filename = $filename;
        return $this;
    }

    public function getOriginalFilename(): ?string
    {
        return $this->originalFilename;
    }

    public function setOriginalFilename(string $originalFilename): static
    {
        $this->originalFilename = $originalFilename;
        return $this;
    }

    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    public function setMimeType(string $mimeType): static
    {
        $this->mimeType = $mimeType;
        return $this;
    }

    public function getFileSize(): ?int
    {
        return $this->fileSize;
    }

    public function setFileSize(int $fileSize): static
    {
        $this->fileSize = $fileSize;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;
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

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getUploadedBy(): ?User
    {
        return $this->uploadedBy;
    }

    public function setUploadedBy(?User $uploadedBy): static
    {
        $this->uploadedBy = $uploadedBy;
        return $this;
    }

    public static function getTypeChoices(): array
    {
        return [
            'Instrukcja' => self::TYPE_MANUAL,
            'Gwarancja' => self::TYPE_WARRANTY,
            'Faktura' => self::TYPE_INVOICE,
            'Zdjęcie' => self::TYPE_PHOTO,
            'Certyfikat' => self::TYPE_CERTIFICATE,
            'Inne' => self::TYPE_OTHER,
        ];
    }

    public function getTypeLabel(): string
    {
        $typeLabels = array_flip(self::getTypeChoices());
        return $typeLabels[$this->type] ?? $this->type;
    }

    public function getFileSizeFormatted(): string
    {
        $bytes = $this->fileSize;
        if ($bytes < 1024) {
            return $bytes . ' B';
        } elseif ($bytes < 1048576) {
            return round($bytes / 1024, 2) . ' KB';
        } else {
            return round($bytes / 1048576, 2) . ' MB';
        }
    }

    public function isImage(): bool
    {
        return str_starts_with($this->mimeType, 'image/');
    }

    public function __toString(): string
    {
        return $this->originalFilename ?? '';
    }
}