<?php

namespace App\Form;

use App\Entity\ToolCategory;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ToolCategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nazwa kategorii',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Wprowadź nazwę kategorii'
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Nazwa kategorii jest wymagana']),
                    new Assert\Length([
                        'max' => 255,
                        'maxMessage' => 'Nazwa nie może być dłuższa niż {{ limit }} znaków'
                    ])
                ]
            ])
            
            ->add('description', TextareaType::class, [
                'label' => 'Opis kategorii',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 3,
                    'placeholder' => 'Opcjonalny opis kategorii'
                ]
            ])
            
            ->add('icon', TextType::class, [
                'label' => 'Ikona (RemixIcon)',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'np. ri-hammer-line'
                ],
                'help' => 'Nazwa klasy ikony RemixIcon, np. ri-hammer-line'
            ])
            
            ->add('sortOrder', IntegerType::class, [
                'label' => 'Kolejność sortowania',
                'attr' => [
                    'class' => 'form-control',
                    'min' => 1
                ],
                'help' => 'Liczba określająca kolejność wyświetlania (mniejsza = wyżej)',
                'constraints' => [
                    new Assert\Positive(['message' => 'Kolejność musi być liczbą dodatnią'])
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ToolCategory::class,
        ]);
    }
}