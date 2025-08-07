<?php

namespace App\Form;

use App\Entity\Tool;
use App\Entity\ToolSetItem;
use App\Repository\ToolRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ToolSetItemType extends AbstractType
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
                    if ($tool->getCategory()) {
                        $label .= ' [' . $tool->getCategory()->getName() . ']';
                    }
                    if ($tool->getManufacturer()) {
                        $label .= ' (' . $tool->getManufacturer();
                        if ($tool->getModel()) {
                            $label .= ' ' . $tool->getModel();
                        }
                        $label .= ')';
                    }
                    return $label;
                },
                'label' => 'Narzędzie',
                'placeholder' => 'Wybierz narzędzie',
                'attr' => ['class' => 'form-select tool-select'],
                'constraints' => [
                    new Assert\NotNull(['message' => 'Narzędzie jest wymagane'])
                ]
            ])
            
            ->add('requiredQuantity', IntegerType::class, [
                'label' => 'Wymagana ilość',
                'attr' => [
                    'class' => 'form-control',
                    'min' => 1
                ],
                'constraints' => [
                    new Assert\Positive(['message' => 'Wymagana ilość musi być liczbą dodatnią'])
                ]
            ])
            
            ->add('quantity', IntegerType::class, [
                'label' => 'Aktualna ilość',
                'attr' => [
                    'class' => 'form-control',
                    'min' => 0
                ],
                'constraints' => [
                    new Assert\PositiveOrZero(['message' => 'Aktualna ilość musi być liczbą dodatnią lub zerem'])
                ]
            ])
            
            ->add('notes', TextareaType::class, [
                'label' => 'Uwagi',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 2,
                    'placeholder' => 'Dodatkowe uwagi dotyczące tego narzędzia w zestawie'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ToolSetItem::class,
        ]);
    }
}