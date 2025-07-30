<?php

namespace App\Form;

use App\Entity\EquipmentCategory;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EquipmentCategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nazwa kategorii',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Narzędzia pneumatyczne'
                ]
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Opis',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 3,
                    'placeholder' => 'Krótki opis kategorii sprzętu'
                ]
            ])
            ->add('color', ColorType::class, [
                'label' => 'Kolor',
                'required' => false,
                'attr' => [
                    'class' => 'form-control form-color'
                ]
            ])
            ->add('icon', TextType::class, [
                'label' => 'Ikona (klasa CSS)',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'ri-tools-line'
                ]
            ])
            ->add('sortOrder', IntegerType::class, [
                'label' => 'Kolejność sortowania',
                'attr' => [
                    'class' => 'form-control',
                    'min' => 0
                ]
            ])
            ->add('isActive', CheckboxType::class, [
                'label' => 'Kategoria aktywna',
                'required' => false,
                'attr' => [
                    'class' => 'form-check-input'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => EquipmentCategory::class,
        ]);
    }
}