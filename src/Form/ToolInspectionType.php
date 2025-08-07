<?php

namespace App\Form;

use App\Entity\Tool;
use App\Entity\ToolInspection;
use App\Repository\ToolRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ToolInspectionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('tool', EntityType::class, [
                'class' => Tool::class,
                'query_builder' => function (ToolRepository $repository) {
                    return $repository->createQueryBuilder('t')
                        ->where('t.isActive = :active')
                        ->setParameter('active', true)
                        ->orderBy('t.name', 'ASC');
                },
                'choice_label' => function (Tool $tool) {
                    $label = $tool->getName();
                    if ($tool->getManufacturer()) {
                        $label .= ' (' . $tool->getManufacturer();
                        if ($tool->getModel()) {
                            $label .= ' ' . $tool->getModel();
                        }
                        $label .= ')';
                    }
                    if ($tool->getSerialNumber()) {
                        $label .= ' - S/N: ' . $tool->getSerialNumber();
                    }
                    return $label;
                },
                'label' => 'Narzędzie',
                'placeholder' => 'Wybierz narzędzie do przeglądu',
                'attr' => ['class' => 'form-select'],
                'constraints' => [
                    new Assert\NotNull(['message' => 'Narzędzie jest wymagane'])
                ],
                'disabled' => $options['tool_locked'] ?? false
            ])
            
            ->add('plannedDate', DateType::class, [
                'label' => 'Planowana data przeglądu',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new Assert\NotNull(['message' => 'Planowana data przeglądu jest wymagana'])
                ]
            ])
            
            ->add('inspectionDate', DateType::class, [
                'label' => 'Data wykonania przeglądu',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new Assert\NotNull(['message' => 'Data przeglądu jest wymagana']),
                    new Assert\LessThanOrEqual([
                        'value' => 'today',
                        'message' => 'Data przeglądu nie może być z przyszłości'
                    ])
                ]
            ])
            
            ->add('inspectorName', TextType::class, [
                'label' => 'Inspektor',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Imię i nazwisko inspektora'
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Nazwa inspektora jest wymagana']),
                    new Assert\Length([
                        'max' => 255,
                        'maxMessage' => 'Nazwa inspektora nie może być dłuższa niż {{ limit }} znaków'
                    ])
                ]
            ])
            
            ->add('result', ChoiceType::class, [
                'label' => 'Wynik przeglądu',
                'choices' => ToolInspection::RESULTS,
                'attr' => ['class' => 'form-select'],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Wynik przeglądu jest wymagany'])
                ]
            ])
            
            ->add('description', TextareaType::class, [
                'label' => 'Opis przeglądu',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 3,
                    'placeholder' => 'Opis przeprowadzonego przeglądu'
                ]
            ])
            
            ->add('notes', TextareaType::class, [
                'label' => 'Uwagi',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 4,
                    'placeholder' => 'Dodatkowe uwagi i spostrzeżenia'
                ]
            ])
            
            ->add('defectsFound', CollectionType::class, [
                'label' => 'Wykryte usterki',
                'entry_type' => TextType::class,
                'entry_options' => [
                    'attr' => [
                        'class' => 'form-control mb-2',
                        'placeholder' => 'Opis usterki'
                    ]
                ],
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
                'required' => false,
                'attr' => ['class' => 'defects-collection'],
                'help' => 'Dodaj usterki wykryte podczas przeglądu'
            ])
            
            ->add('nextInspectionDate', DateType::class, [
                'label' => 'Data następnego przeglądu',
                'required' => false,
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
                'help' => 'Zostanie automatycznie obliczona na podstawie interwału narzędzia'
            ])
            
            ->add('cost', MoneyType::class, [
                'label' => 'Koszt przeglądu',
                'required' => false,
                'currency' => 'PLN',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => '0.00'
                ],
                'constraints' => [
                    new Assert\PositiveOrZero(['message' => 'Koszt przeglądu musi być liczbą dodatnią'])
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ToolInspection::class,
            'tool_locked' => false,
        ]);
    }
}