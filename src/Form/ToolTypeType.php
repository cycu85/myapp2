<?php

namespace App\Form;

use App\Entity\ToolType as ToolTypeEntity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ToolTypeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nazwa typu',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Wprowadź nazwę typu narzędzia'
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Nazwa typu jest wymagana']),
                    new Assert\Length([
                        'max' => 255,
                        'maxMessage' => 'Nazwa nie może być dłuższa niż {{ limit }} znaków'
                    ])
                ]
            ])
            
            ->add('description', TextareaType::class, [
                'label' => 'Opis typu',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 3,
                    'placeholder' => 'Opcjonalny opis typu narzędzia'
                ]
            ])
            
            ->add('isMultiQuantity', CheckboxType::class, [
                'label' => 'Wielosztukowy',
                'required' => false,
                'attr' => ['class' => 'form-check-input'],
                'help' => 'Zaznacz jeśli narzędzia tego typu mogą występować w wielu sztukach (np. śrubokręty, klucze). Odznacz dla narzędzi pojedynczych (np. wiertarka, szlifierka).',
                'label_attr' => ['class' => 'form-check-label']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ToolTypeEntity::class,
        ]);
    }
}