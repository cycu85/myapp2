<?php

namespace App\Repository;

use App\Entity\Setting;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Setting>
 */
class SettingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Setting::class);
    }

    /**
     * Znajdź ustawienie po kluczu
     */
    public function findByKey(string $key): ?Setting
    {
        return $this->findOneBy(['settingKey' => $key]);
    }

    /**
     * Pobierz wartość ustawienia po kluczu
     */
    public function getValueByKey(string $key, ?string $defaultValue = null): ?string
    {
        $setting = $this->findByKey($key);
        return $setting?->getSettingValue() ?? $defaultValue;
    }

    /**
     * Ustaw wartość ustawienia
     */
    public function setValue(string $key, ?string $value, string $category = 'general', string $type = 'text', ?string $description = null): Setting
    {
        $setting = $this->findByKey($key);
        
        if (!$setting) {
            $setting = new Setting();
            $setting->setSettingKey($key);
            $setting->setCategory($category);
            $setting->setType($type);
            $setting->setDescription($description);
        }
        
        $setting->setSettingValue($value);
        
        $this->getEntityManager()->persist($setting);
        $this->getEntityManager()->flush();
        
        return $setting;
    }

    /**
     * Znajdź wszystkie ustawienia dla kategorii
     */
    public function findByCategory(string $category): array
    {
        return $this->findBy(['category' => $category], ['settingKey' => 'ASC']);
    }

    /**
     * Pobierz wszystkie ustawienia jako tablicę klucz-wartość
     */
    public function getAllAsArray(): array
    {
        $settings = $this->findAll();
        $result = [];
        
        foreach ($settings as $setting) {
            $result[$setting->getSettingKey()] = $setting->getSettingValue();
        }
        
        return $result;
    }

    /**
     * Pobierz ustawienia kategorii jako tablicę klucz-wartość
     */
    public function getCategoryAsArray(string $category): array
    {
        $settings = $this->findByCategory($category);
        $result = [];
        
        foreach ($settings as $setting) {
            $result[$setting->getSettingKey()] = $setting->getSettingValue();
        }
        
        return $result;
    }
}