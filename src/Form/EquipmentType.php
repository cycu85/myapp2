<?php

namespace App\Form;

use App\Entity\Equipment;
use App\Entity\EquipmentCategory;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EquipmentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('inventoryNumber', TextType::class, [
                'label' => 'Numer inwentarzowy',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'EQ001'
                ]
            ])
            ->add('name', TextType::class, [
                'label' => 'Nazwa sprzętu',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Młotek pneumatyczny'
                ]
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Opis',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 3,
                    'placeholder' => 'Szczegółowy opis sprzętu'
                ]
            ])
            ->add('category', EntityType::class, [
                'class' => EquipmentCategory::class,
                'choice_label' => 'name',
                'label' => 'Kategoria',
                'attr' => [
                    'class' => 'form-select'
                ],
                'query_builder' => function ($repository) {
                    return $repository->createQueryBuilder('c')
                        ->where('c.isActive = :active')
                        ->setParameter('active', true)
                        ->orderBy('c.sortOrder', 'ASC')
                        ->addOrderBy('c.name', 'ASC');
                }
            ])
            ->add('manufacturer', TextType::class, [
                'label' => 'Producent',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Bosch'
                ]
            ])
            ->add('model', TextType::class, [
                'label' => 'Model',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'GSH 11 VC'
                ]
            ])
            ->add('serialNumber', TextType::class, [
                'label' => 'Numer seryjny',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'SN123456789'
                ]
            ])
            ->add('purchaseDate', DateType::class, [
                'label' => 'Data zakupu',
                'required' => false,
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('purchasePrice', MoneyType::class, [
                'label' => 'Cena zakupu',
                'required' => false,
                'currency' => 'PLN',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => '0.00'
                ]
            ])
            ->add('status', ChoiceType::class, [
                'label' => 'Status',
                'choices' => Equipment::getStatusChoices(),
                'attr' => [
                    'class' => 'form-select'
                ]
            ])
            ->add('assignedTo', EntityType::class, [
                'class' => User::class,
                'choice_label' => function (User $user) {
                    return $user->getFirstName() . ' ' . $user->getLastName() . ' (' . $user->getUsername() . ')';
                },
                'label' => 'Przypisany do',
                'required' => false,
                'placeholder' => 'Nie przypisany',
                'attr' => [
                    'class' => 'form-select'
                ],
                'query_builder' => function ($repository) {
                    return $repository->createQueryBuilder('u')
                        ->where('u.isActive = :active')
                        ->setParameter('active', true)
                        ->orderBy('u.firstName', 'ASC')
                        ->addOrderBy('u.lastName', 'ASC');
                }
            ])
            ->add('location', TextType::class, [
                'label' => 'Lokalizacja',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Magazyn A, regał 3'
                ]
            ])
            ->add('warrantyExpiry', DateType::class, [
                'label' => 'Koniec gwarancji',
                'required' => false,
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('nextInspectionDate', DateType::class, [
                'label' => 'Następny przegląd',
                'required' => false,
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('notes', TextareaType::class, [
                'label' => 'Uwagi',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 3,
                    'placeholder' => 'Dodatkowe informacje, uwagi serwisowe itp.'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Equipment::class,
        ]);
    }
}