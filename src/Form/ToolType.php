<?php

namespace App\Form;

use App\Entity\Tool;
use App\Entity\ToolCategory;
use App\Entity\ToolType as ToolTypeEntity;
use App\Repository\ToolCategoryRepository;
use App\Repository\ToolTypeRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ToolType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nazwa narzędzia',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Wprowadź nazwę narzędzia'
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Nazwa narzędzia jest wymagana']),
                    new Assert\Length([
                        'max' => 255,
                        'maxMessage' => 'Nazwa nie może być dłuższa niż {{ limit }} znaków'
                    ])
                ]
            ])
            
            ->add('category', EntityType::class, [
                'class' => ToolCategory::class,
                'query_builder' => function (ToolCategoryRepository $repository) {
                    return $repository->createQueryBuilder('tc')
                        ->where('tc.isActive = :active')
                        ->setParameter('active', true)
                        ->orderBy('tc.sortOrder', 'ASC')
                        ->addOrderBy('tc.name', 'ASC');
                },
                'choice_label' => 'name',
                'label' => 'Kategoria',
                'placeholder' => 'Wybierz kategorię',
                'attr' => ['class' => 'form-select'],
                'constraints' => [
                    new Assert\NotNull(['message' => 'Kategoria jest wymagana'])
                ]
            ])
            
            ->add('type', EntityType::class, [
                'class' => ToolTypeEntity::class,
                'query_builder' => function (ToolTypeRepository $repository) {
                    return $repository->createQueryBuilder('tt')
                        ->where('tt.isActive = :active')
                        ->setParameter('active', true)
                        ->orderBy('tt.name', 'ASC');
                },
                'choice_label' => function (ToolTypeEntity $type) {
                    $label = $type->getName();
                    if ($type->isMultiQuantity()) {
                        $label .= ' (wielosztuki)';
                    }
                    return $label;
                },
                'label' => 'Typ narzędzia',
                'placeholder' => 'Wybierz typ narzędzia',
                'attr' => ['class' => 'form-select'],
                'constraints' => [
                    new Assert\NotNull(['message' => 'Typ narzędzia jest wymagany'])
                ]
            ])
            
            ->add('description', TextareaType::class, [
                'label' => 'Opis',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 3,
                    'placeholder' => 'Opcjonalny opis narzędzia'
                ]
            ])
            
            ->add('serialNumber', TextType::class, [
                'label' => 'Numer seryjny',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Numer seryjny producenta'
                ],
                'constraints' => [
                    new Assert\Length([
                        'max' => 100,
                        'maxMessage' => 'Numer seryjny nie może być dłuższy niż {{ limit }} znaków'
                    ])
                ]
            ])
            
            ->add('inventoryNumber', TextType::class, [
                'label' => 'Numer inwentarzowy',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Wewnętrzny numer inwentarzowy'
                ],
                'constraints' => [
                    new Assert\Length([
                        'max' => 100,
                        'maxMessage' => 'Numer inwentarzowy nie może być dłuższy niż {{ limit }} znaków'
                    ])
                ]
            ])
            
            ->add('manufacturer', TextType::class, [
                'label' => 'Producent',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Nazwa producenta'
                ],
                'constraints' => [
                    new Assert\Length([
                        'max' => 100,
                        'maxMessage' => 'Nazwa producenta nie może być dłuższa niż {{ limit }} znaków'
                    ])
                ]
            ])
            
            ->add('model', TextType::class, [
                'label' => 'Model',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Model/typ producenta'
                ],
                'constraints' => [
                    new Assert\Length([
                        'max' => 100,
                        'maxMessage' => 'Model nie może być dłuższy niż {{ limit }} znaków'
                    ])
                ]
            ])
            
            ->add('purchaseDate', DateType::class, [
                'label' => 'Data zakupu',
                'required' => false,
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control']
            ])
            
            ->add('purchasePrice', MoneyType::class, [
                'label' => 'Cena zakupu',
                'required' => false,
                'currency' => 'PLN',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => '0.00'
                ],
                'constraints' => [
                    new Assert\PositiveOrZero(['message' => 'Cena zakupu musi być liczbą dodatnią'])
                ]
            ])
            
            ->add('warrantyEndDate', DateType::class, [
                'label' => 'Koniec gwarancji',
                'required' => false,
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control']
            ])
            
            ->add('status', ChoiceType::class, [
                'label' => 'Status',
                'choices' => array_flip(Tool::STATUSES),
                'attr' => ['class' => 'form-select']
            ])
            
            ->add('location', TextType::class, [
                'label' => 'Lokalizacja',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Miejsce przechowywania'
                ]
            ])
            
            ->add('currentQuantity', IntegerType::class, [
                'label' => 'Aktualna ilość',
                'attr' => [
                    'class' => 'form-control',
                    'min' => 0
                ],
                'constraints' => [
                    new Assert\PositiveOrZero(['message' => 'Aktualna ilość musi być liczbą dodatnią'])
                ]
            ])
            
            ->add('totalQuantity', IntegerType::class, [
                'label' => 'Całkowita ilość',
                'attr' => [
                    'class' => 'form-control',
                    'min' => 1
                ],
                'constraints' => [
                    new Assert\Positive(['message' => 'Całkowita ilość musi być liczbą dodatnią'])
                ]
            ])
            
            ->add('minQuantity', IntegerType::class, [
                'label' => 'Minimalna ilość',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'min' => 0
                ],
                'help' => 'Alert gdy ilość spadnie poniżej tej wartości',
                'constraints' => [
                    new Assert\PositiveOrZero(['message' => 'Minimalna ilość musi być liczbą dodatnią'])
                ]
            ])
            
            ->add('unit', TextType::class, [
                'label' => 'Jednostka',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'szt'
                ]
            ])
            
            ->add('inspectionIntervalMonths', IntegerType::class, [
                'label' => 'Interwał przeglądów (miesiące)',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'min' => 1,
                    'max' => 120
                ],
                'help' => 'Co ile miesięcy należy przeprowadzać przegląd',
                'constraints' => [
                    new Assert\Range([
                        'min' => 1,
                        'max' => 120,
                        'notInRangeMessage' => 'Interwał musi być między {{ min }} a {{ max }} miesięcy'
                    ])
                ]
            ])
            
            ->add('nextInspectionDate', DateType::class, [
                'label' => 'Data następnego przeglądu',
                'required' => false,
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control']
            ])
            
            ->add('notes', TextareaType::class, [
                'label' => 'Uwagi',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 4,
                    'placeholder' => 'Dodatkowe informacje i uwagi'
                ]
            ]);

        // Dynamic form modification based on tool type
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
            $tool = $event->getData();
            $form = $event->getForm();

            // If editing existing tool, adjust fields based on type
            if ($tool && $tool->getType()) {
                if (!$tool->getType()->isMultiQuantity()) {
                    // For single-quantity tools, hide quantity-related fields
                    $form->add('currentQuantity', IntegerType::class, [
                        'label' => 'Dostępny',
                        'data' => 1,
                        'attr' => [
                            'class' => 'form-control',
                            'readonly' => true,
                            'value' => 1
                        ]
                    ]);
                    
                    $form->add('totalQuantity', IntegerType::class, [
                        'label' => 'Całkowita ilość',
                        'data' => 1,
                        'attr' => [
                            'class' => 'form-control',
                            'readonly' => true,
                            'value' => 1
                        ]
                    ]);
                }
            }
        });
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tool::class,
            'attr' => ['novalidate' => 'novalidate'] // Use HTML5 validation
        ]);
    }
}