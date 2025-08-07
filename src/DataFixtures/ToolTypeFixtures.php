<?php

namespace App\DataFixtures;

use App\Entity\ToolType;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;

class ToolTypeFixtures extends Fixture implements FixtureGroupInterface
{
    public const DRILL_TYPE = 'tool_type_drill';
    public const GRINDER_TYPE = 'tool_type_grinder';
    public const SAW_TYPE = 'tool_type_saw';
    public const PRESS_TYPE = 'tool_type_press';
    public const JACK_TYPE = 'tool_type_jack';
    public const KEY_TYPE = 'tool_type_key';
    public const SCREWDRIVER_TYPE = 'tool_type_screwdriver';
    public const HAMMER_TYPE = 'tool_type_hammer';
    public const CALIPER_TYPE = 'tool_type_caliper';
    public const MICROMETER_TYPE = 'tool_type_micrometer';
    public const LEVEL_TYPE = 'tool_type_level';
    public const CUTTERS_TYPE = 'tool_type_cutters';
    public const SCISSORS_TYPE = 'tool_type_scissors';
    public const HANDSAW_TYPE = 'tool_type_handsaw';

    public function load(ObjectManager $manager): void
    {
        $types = [
            // Elektronarzędzia (pojedyncze sztuki)
            [
                'name' => 'Wiertarka',
                'description' => 'Wiertarka elektryczna do wykonywania otworów',
                'is_multi_quantity' => false,
                'reference' => self::DRILL_TYPE
            ],
            [
                'name' => 'Szlifierka',
                'description' => 'Szlifierka kątowa do cięcia i szlifowania',
                'is_multi_quantity' => false,
                'reference' => self::GRINDER_TYPE
            ],
            [
                'name' => 'Piła elektryczna',
                'description' => 'Piła tarczowa elektryczna',
                'is_multi_quantity' => false,
                'reference' => self::SAW_TYPE
            ],
            
            // Narzędzia hydrauliczne (pojedyncze sztuki)
            [
                'name' => 'Prasa hydrauliczna',
                'description' => 'Prasa do prasowania i formowania',
                'is_multi_quantity' => false,
                'reference' => self::PRESS_TYPE
            ],
            [
                'name' => 'Podnośnik hydrauliczny',
                'description' => 'Podnośnik samochodowy hydrauliczny',
                'is_multi_quantity' => false,
                'reference' => self::JACK_TYPE
            ],
            
            // Narzędzia ręczne (wielosztuki)
            [
                'name' => 'Klucze',
                'description' => 'Klucze płaskie, oczkowe, nasadowe',
                'is_multi_quantity' => true,
                'reference' => self::KEY_TYPE
            ],
            [
                'name' => 'Śrubokręty',
                'description' => 'Śrubokręty płaskie i krzyżakowe różnych rozmiarów',
                'is_multi_quantity' => true,
                'reference' => self::SCREWDRIVER_TYPE
            ],
            [
                'name' => 'Młotki',
                'description' => 'Młotki o różnym przeznaczeniu i wadze',
                'is_multi_quantity' => false,
                'reference' => self::HAMMER_TYPE
            ],
            
            // Narzędzia pomiarowe (pojedyncze sztuki)
            [
                'name' => 'Suwmiarka',
                'description' => 'Suwmiarka do precyzyjnych pomiarów',
                'is_multi_quantity' => false,
                'reference' => self::CALIPER_TYPE
            ],
            [
                'name' => 'Mikrometr',
                'description' => 'Mikrometr do bardzo precyzyjnych pomiarów',
                'is_multi_quantity' => false,
                'reference' => self::MICROMETER_TYPE
            ],
            [
                'name' => 'Poziomica',
                'description' => 'Poziomica do sprawdzania poziomu',
                'is_multi_quantity' => false,
                'reference' => self::LEVEL_TYPE
            ],
            
            // Narzędzia tnące (wielosztuki)
            [
                'name' => 'Ucinaczki',
                'description' => 'Ucinaczki do drutu, kabli i przewodów',
                'is_multi_quantity' => true,
                'reference' => self::CUTTERS_TYPE
            ],
            [
                'name' => 'Nożyczki',
                'description' => 'Nożyczki do różnych materiałów',
                'is_multi_quantity' => true,
                'reference' => self::SCISSORS_TYPE
            ],
            [
                'name' => 'Piła ręczna',
                'description' => 'Piła ręczna do drewna i metalu',
                'is_multi_quantity' => false,
                'reference' => self::HANDSAW_TYPE
            ],
        ];

        foreach ($types as $typeData) {
            $type = new ToolType();
            $type->setName($typeData['name'])
                 ->setDescription($typeData['description'])
                 ->setIsMultiQuantity($typeData['is_multi_quantity'])
                 ->setIsActive(true);

            $manager->persist($type);
            $this->addReference($typeData['reference'], $type);
        }

        $manager->flush();
    }

    public static function getGroups(): array
    {
        return ['tools', 'sample_data'];
    }
}