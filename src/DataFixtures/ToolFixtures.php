<?php

namespace App\DataFixtures;

use App\Entity\Tool;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ToolFixtures extends Fixture implements FixtureGroupInterface, DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $tools = [
            // Elektronarzędzia
            [
                'category' => ToolCategoryFixtures::ELECTRONICS_CATEGORY,
                'type' => ToolTypeFixtures::DRILL_TYPE,
                'name' => 'Wiertarka udarowa Makita HP2050',
                'description' => 'Wiertarka udarowa z funkcją młotka pneumatycznego',
                'serial_number' => 'MAK2050001',
                'inventory_number' => 'ELE001',
                'manufacturer' => 'Makita',
                'model' => 'HP2050',
                'purchase_price' => '450.00',
                'location' => 'Warsztat - Stanowisko 1',
                'current_quantity' => 1,
                'total_quantity' => 1,
                'inspection_interval_months' => 12,
                'next_inspection_date' => new \DateTime('+10 months'),
                'status' => Tool::STATUS_ACTIVE
            ],
            [
                'category' => ToolCategoryFixtures::ELECTRONICS_CATEGORY,
                'type' => ToolTypeFixtures::GRINDER_TYPE,
                'name' => 'Szlifierka kątowa Bosch GWS 750',
                'description' => 'Szlifierka kątowa 115mm do cięcia i szlifowania',
                'serial_number' => 'BOSCH750001',
                'inventory_number' => 'ELE002',
                'manufacturer' => 'Bosch',
                'model' => 'GWS 750',
                'purchase_price' => '280.00',
                'location' => 'Warsztat - Stanowisko 2',
                'current_quantity' => 1,
                'total_quantity' => 1,
                'inspection_interval_months' => 6,
                'next_inspection_date' => new \DateTime('+5 months'),
                'status' => Tool::STATUS_ACTIVE
            ],
            [
                'category' => ToolCategoryFixtures::ELECTRONICS_CATEGORY,
                'type' => ToolTypeFixtures::SAW_TYPE,
                'name' => 'Piła tarczowa DeWalt DWE560',
                'description' => 'Piła tarczowa ręczna 184mm',
                'serial_number' => 'DW560001',
                'inventory_number' => 'ELE003',
                'manufacturer' => 'DeWalt',
                'model' => 'DWE560',
                'purchase_price' => '520.00',
                'location' => 'Magazyn narzędzi',
                'current_quantity' => 1,
                'total_quantity' => 1,
                'inspection_interval_months' => 12,
                'next_inspection_date' => new \DateTime('+11 months'),
                'status' => Tool::STATUS_MAINTENANCE
            ],

            // Narzędzia hydrauliczne
            [
                'category' => ToolCategoryFixtures::HYDRAULIC_CATEGORY,
                'type' => ToolTypeFixtures::PRESS_TYPE,
                'name' => 'Prasa hydrauliczna 50T',
                'description' => 'Prasa hydrauliczna warsztatowa 50 ton',
                'serial_number' => 'PRESS50T001',
                'inventory_number' => 'HYD001',
                'manufacturer' => 'Unicraft',
                'model' => 'WPP 50 E',
                'purchase_price' => '2800.00',
                'location' => 'Warsztat - Strefa prasy',
                'current_quantity' => 1,
                'total_quantity' => 1,
                'inspection_interval_months' => 12,
                'next_inspection_date' => new \DateTime('+8 months'),
                'status' => Tool::STATUS_ACTIVE
            ],
            [
                'category' => ToolCategoryFixtures::HYDRAULIC_CATEGORY,
                'type' => ToolTypeFixtures::JACK_TYPE,
                'name' => 'Podnośnik hydrauliczny 3T',
                'description' => 'Podnośnik samochodowy hydrauliczny 3 tony',
                'serial_number' => 'JACK3T001',
                'inventory_number' => 'HYD002',
                'manufacturer' => 'Vigor',
                'model' => 'V2592',
                'purchase_price' => '450.00',
                'location' => 'Warsztat - Kanał obsługowy',
                'current_quantity' => 1,
                'total_quantity' => 1,
                'inspection_interval_months' => 6,
                'next_inspection_date' => new \DateTime('+2 months'),
                'status' => Tool::STATUS_ACTIVE
            ],

            // Narzędzia ręczne (wielosztuki)
            [
                'category' => ToolCategoryFixtures::MANUAL_CATEGORY,
                'type' => ToolTypeFixtures::KEY_TYPE,
                'name' => 'Klucze płaskie 6-32mm',
                'description' => 'Zestaw kluczy płaskich od 6mm do 32mm',
                'inventory_number' => 'MAN001',
                'manufacturer' => 'Gedore',
                'model' => 'Red R09005012',
                'purchase_price' => '320.00',
                'location' => 'Szafka narzędziowa A1',
                'current_quantity' => 12,
                'total_quantity' => 15,
                'min_quantity' => 10,
                'unit' => 'szt',
                'status' => Tool::STATUS_ACTIVE
            ],
            [
                'category' => ToolCategoryFixtures::MANUAL_CATEGORY,
                'type' => ToolTypeFixtures::SCREWDRIVER_TYPE,
                'name' => 'Śrubokręty izolowane',
                'description' => 'Zestaw śrubokrętów izolowanych 1000V',
                'inventory_number' => 'MAN002',
                'manufacturer' => 'Wera',
                'model' => '160 i/7 Rack',
                'purchase_price' => '180.00',
                'location' => 'Szafka narzędziowa A2',
                'current_quantity' => 7,
                'total_quantity' => 10,
                'min_quantity' => 5,
                'unit' => 'szt',
                'status' => Tool::STATUS_ACTIVE
            ],
            [
                'category' => ToolCategoryFixtures::MANUAL_CATEGORY,
                'type' => ToolTypeFixtures::HAMMER_TYPE,
                'name' => 'Młotek ślusarski 500g',
                'description' => 'Młotek ślusarski z rączką fiberglass',
                'serial_number' => 'HAM500001',
                'inventory_number' => 'MAN003',
                'manufacturer' => 'Stanley',
                'model' => 'STHT0-51310',
                'purchase_price' => '45.00',
                'location' => 'Szafka narzędziowa B1',
                'current_quantity' => 1,
                'total_quantity' => 1,
                'status' => Tool::STATUS_ACTIVE
            ],

            // Narzędzia pomiarowe
            [
                'category' => ToolCategoryFixtures::MEASUREMENT_CATEGORY,
                'type' => ToolTypeFixtures::CALIPER_TYPE,
                'name' => 'Suwmiarka cyfrowa 150mm',
                'description' => 'Suwmiarka elektroniczna z wyświetlaczem LCD',
                'serial_number' => 'CAL150001',
                'inventory_number' => 'MEA001',
                'manufacturer' => 'Mitutoyo',
                'model' => '500-196-30',
                'purchase_price' => '180.00',
                'location' => 'Kontrola jakości - Szafka pomiarowa',
                'current_quantity' => 1,
                'total_quantity' => 1,
                'inspection_interval_months' => 12,
                'next_inspection_date' => new \DateTime('+6 months'),
                'status' => Tool::STATUS_ACTIVE
            ],
            [
                'category' => ToolCategoryFixtures::MEASUREMENT_CATEGORY,
                'type' => ToolTypeFixtures::MICROMETER_TYPE,
                'name' => 'Mikrometr zewnętrzny 0-25mm',
                'description' => 'Mikrometr zewnętrzny klasy dokładności I',
                'serial_number' => 'MIC025001',
                'inventory_number' => 'MEA002',
                'manufacturer' => 'Mitutoyo',
                'model' => '103-137',
                'purchase_price' => '320.00',
                'location' => 'Kontrola jakości - Szafka pomiarowa',
                'current_quantity' => 1,
                'total_quantity' => 1,
                'inspection_interval_months' => 12,
                'next_inspection_date' => new \DateTime('+7 months'),
                'status' => Tool::STATUS_ACTIVE
            ],
            [
                'category' => ToolCategoryFixtures::MEASUREMENT_CATEGORY,
                'type' => ToolTypeFixtures::LEVEL_TYPE,
                'name' => 'Poziomica aluminiowa 800mm',
                'description' => 'Poziomica aluminiowa z 3 libellami',
                'serial_number' => 'LEV800001',
                'inventory_number' => 'MEA003',
                'manufacturer' => 'Stabila',
                'model' => '70-80',
                'purchase_price' => '85.00',
                'location' => 'Warsztat - Ściana narzędzi',
                'current_quantity' => 1,
                'total_quantity' => 1,
                'status' => Tool::STATUS_ACTIVE
            ],

            // Narzędzia tnące (wielosztuki)
            [
                'category' => ToolCategoryFixtures::CUTTING_CATEGORY,
                'type' => ToolTypeFixtures::CUTTERS_TYPE,
                'name' => 'Ucinaczki boczne',
                'description' => 'Ucinaczki boczne do drutu i kabli',
                'inventory_number' => 'CUT001',
                'manufacturer' => 'Knipex',
                'model' => '70 06 160',
                'purchase_price' => '120.00',
                'location' => 'Dział elektryczny - Szafka E1',
                'current_quantity' => 8,
                'total_quantity' => 10,
                'min_quantity' => 5,
                'unit' => 'szt',
                'status' => Tool::STATUS_ACTIVE
            ],
            [
                'category' => ToolCategoryFixtures::CUTTING_CATEGORY,
                'type' => ToolTypeFixtures::SCISSORS_TYPE,
                'name' => 'Nożyczki do blachy',
                'description' => 'Nożyczki prawe do blachy do 1,2mm',
                'inventory_number' => 'CUT002',
                'manufacturer' => 'Bessey',
                'model' => 'D216-280R',
                'purchase_price' => '95.00',
                'location' => 'Warsztat - Stanowisko blacharski',
                'current_quantity' => 3,
                'total_quantity' => 5,
                'min_quantity' => 2,
                'unit' => 'szt',
                'status' => Tool::STATUS_ACTIVE
            ],
            [
                'category' => ToolCategoryFixtures::CUTTING_CATEGORY,
                'type' => ToolTypeFixtures::HANDSAW_TYPE,
                'name' => 'Piła ręczna uniwersalna 500mm',
                'description' => 'Piła ręczna z ostrzem hartowanym',
                'serial_number' => 'SAW500001',
                'inventory_number' => 'CUT003',
                'manufacturer' => 'Bahco',
                'model' => '2600-20-XT-HP',
                'purchase_price' => '65.00',
                'location' => 'Warsztat - Ściana narzędzi',
                'current_quantity' => 1,
                'total_quantity' => 1,
                'status' => Tool::STATUS_ACTIVE
            ],
        ];

        foreach ($tools as $toolData) {
            $tool = new Tool();
            
            $category = $this->getReference($toolData['category']);
            $type = $this->getReference($toolData['type']);
            
            $tool->setCategory($category)
                 ->setType($type)
                 ->setName($toolData['name'])
                 ->setDescription($toolData['description'])
                 ->setStatus($toolData['status'])
                 ->setCurrentQuantity($toolData['current_quantity'])
                 ->setTotalQuantity($toolData['total_quantity'])
                 ->setLocation($toolData['location'])
                 ->setIsActive(true);

            if (isset($toolData['serial_number'])) {
                $tool->setSerialNumber($toolData['serial_number']);
            }

            if (isset($toolData['inventory_number'])) {
                $tool->setInventoryNumber($toolData['inventory_number']);
            }

            if (isset($toolData['manufacturer'])) {
                $tool->setManufacturer($toolData['manufacturer']);
            }

            if (isset($toolData['model'])) {
                $tool->setModel($toolData['model']);
            }

            if (isset($toolData['purchase_price'])) {
                $tool->setPurchasePrice($toolData['purchase_price']);
                $tool->setPurchaseDate(new \DateTime('-' . rand(6, 24) . ' months'));
            }

            if (isset($toolData['min_quantity'])) {
                $tool->setMinQuantity($toolData['min_quantity']);
            }

            if (isset($toolData['unit'])) {
                $tool->setUnit($toolData['unit']);
            }

            if (isset($toolData['inspection_interval_months'])) {
                $tool->setInspectionIntervalMonths($toolData['inspection_interval_months']);
            }

            if (isset($toolData['next_inspection_date'])) {
                $tool->setNextInspectionDate($toolData['next_inspection_date']);
            }

            $manager->persist($tool);
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            ToolCategoryFixtures::class,
            ToolTypeFixtures::class,
        ];
    }

    public static function getGroups(): array
    {
        return ['tools', 'sample_data'];
    }
}