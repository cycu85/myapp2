<?php

namespace App\Form;

use App\Entity\ToolSet;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ToolSetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nazwa zestawu',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Wprowadź nazwę zestawu narzędzi'
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Nazwa zestawu jest wymagana']),
                    new Assert\Length([
                        'max' => 255,
                        'maxMessage' => 'Nazwa nie może być dłuższa niż {{ limit }} znaków'
                    ])
                ]
            ])
            
            ->add('description', TextareaType::class, [
                'label' => 'Opis zestawu',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 3,
                    'placeholder' => 'Opcjonalny opis zestawu narzędzi'
                ]
            ])
            
            ->add('code', TextType::class, [
                'label' => 'Kod zestawu',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Unikalny kod zestawu (zostanie wygenerowany automatycznie)'
                ],
                'help' => 'Pozostaw puste aby wygenerować automatycznie',
                'constraints' => [
                    new Assert\Length([
                        'max' => 100,
                        'maxMessage' => 'Kod nie może być dłuższy niż {{ limit }} znaków'
                    ])
                ]
            ])
            
            ->add('location', TextType::class, [
                'label' => 'Lokalizacja',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Miejsce przechowywania zestawu'
                ]
            ])
            
            ->add('status', ChoiceType::class, [
                'label' => 'Status',
                'choices' => ToolSet::STATUSES,
                'attr' => ['class' => 'form-select']
            ])
            
            ->add('items', CollectionType::class, [
                'label' => 'Narzędzia w zestawie',
                'entry_type' => ToolSetItemType::class,
                'entry_options' => [
                    'label' => false
                ],
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
                'required' => false,
                'attr' => ['class' => 'tool-set-items-collection'],
                'help' => 'Dodaj narzędzia do zestawu'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ToolSet::class,
        ]);
    }
}