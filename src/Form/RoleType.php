<?php

namespace App\Form;

use App\Entity\Role;
use App\Entity\Module;
use App\Service\PermissionService;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RoleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nazwa roli',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'np. equipment_operator'
                ]
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Opis',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 3,
                    'placeholder' => 'Krótki opis roli i jej uprawnień'
                ]
            ])
            ->add('module', EntityType::class, [
                'class' => Module::class,
                'choice_label' => 'displayName',
                'label' => 'Moduł',
                'attr' => [
                    'class' => 'form-select'
                ],
                'query_builder' => function ($repository) {
                    return $repository->createQueryBuilder('m')
                        ->orderBy('m.displayName', 'ASC');
                }
            ])
            ->add('permissions', ChoiceType::class, [
                'choices' => PermissionService::getAvailablePermissions(),
                'choice_label' => function ($choice, $key, $value) {
                    return $choice;
                },
                'choice_value' => function ($choice) {
                    return is_string($choice) ? array_search($choice, PermissionService::getAvailablePermissions()) : $choice;
                },
                'multiple' => true,
                'expanded' => true,
                'label' => 'Uprawnienia',
                'attr' => [
                    'class' => 'permissions-checkboxes'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Role::class,
        ]);
    }
}