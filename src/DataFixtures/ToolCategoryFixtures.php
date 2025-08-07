<?php

namespace App\DataFixtures;

use App\Entity\ToolCategory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;

class ToolCategoryFixtures extends Fixture implements FixtureGroupInterface
{
    public const ELECTRONICS_CATEGORY = 'tool_category_electronics';
    public const HYDRAULIC_CATEGORY = 'tool_category_hydraulic';
    public const MANUAL_CATEGORY = 'tool_category_manual';
    public const MEASUREMENT_CATEGORY = 'tool_category_measurement';
    public const CUTTING_CATEGORY = 'tool_category_cutting';

    public function load(ObjectManager $manager): void
    {
        $categories = [
            [
                'name' => 'Elektronarzędzia',
                'description' => 'Narzędzia elektryczne: wiertarki, szlifierki, piły elektryczne',
                'icon' => 'ri-flashlight-line',
                'sort_order' => 10,
                'reference' => self::ELECTRONICS_CATEGORY
            ],
            [
                'name' => 'Narzędzia hydrauliczne',
                'description' => 'Narzędzia działające na zasadzie hydrauliki: prasy, podnośniki',
                'icon' => 'ri-oil-line',
                'sort_order' => 20,
                'reference' => self::HYDRAULIC_CATEGORY
            ],
            [
                'name' => 'Narzędzia ręczne',
                'description' => 'Podstawowe narzędzia ręczne: klucze, śrubokręty, młotki',
                'icon' => 'ri-hammer-line',
                'sort_order' => 30,
                'reference' => self::MANUAL_CATEGORY
            ],
            [
                'name' => 'Narzędzia pomiarowe',
                'description' => 'Przyrządy pomiarowe: suwmiarki, mikrometry, poziomica',
                'icon' => 'ri-ruler-2-line',
                'sort_order' => 40,
                'reference' => self::MEASUREMENT_CATEGORY
            ],
            [
                'name' => 'Narzędzia tnące',
                'description' => 'Ucinaczki, nożyczki, piły ręczne, ostrza',
                'icon' => 'ri-scissors-line',
                'sort_order' => 50,
                'reference' => self::CUTTING_CATEGORY
            ]
        ];

        foreach ($categories as $categoryData) {
            $category = new ToolCategory();
            $category->setName($categoryData['name'])
                    ->setDescription($categoryData['description'])
                    ->setIcon($categoryData['icon'])
                    ->setSortOrder($categoryData['sort_order'])
                    ->setIsActive(true);

            $manager->persist($category);
            $this->addReference($categoryData['reference'], $category);
        }

        $manager->flush();
    }

    public static function getGroups(): array
    {
        return ['tools', 'sample_data'];
    }
}