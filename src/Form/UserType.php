<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $isEdit = $options['is_edit'] ?? false;
        $allowUsernameEdit = $options['allow_username_edit'] ?? true;
        $allowPasswordEdit = $options['allow_password_edit'] ?? true;
        $allowStatusEdit = $options['allow_status_edit'] ?? true;
        
        $builder;
        
        if ($allowUsernameEdit) {
            $builder->add('username', TextType::class, [
                'label' => 'Nazwa użytkownika',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Unikalna nazwa użytkownika'
                ]
            ]);
        }
        
        $builder
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'adres@email.com'
                ]
            ])
            ->add('firstName', TextType::class, [
                'label' => 'Imię',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('lastName', TextType::class, [
                'label' => 'Nazwisko',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('employeeNumber', TextType::class, [
                'label' => 'Numer pracownika',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'EMP001'
                ]
            ])
            ->add('position', TextType::class, [
                'label' => 'Stanowisko',
                'required' => false,
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('department', TextType::class, [
                'label' => 'Dział',
                'required' => false,
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('phoneNumber', TextType::class, [
                'label' => 'Telefon',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => '+48 123 456 789'
                ]
            ])
        ;
        
        if ($allowPasswordEdit) {
            $builder->add('plainPassword', PasswordType::class, [
                'label' => $isEdit ? 'Nowe hasło (pozostaw puste, aby nie zmieniać)' : 'Hasło',
                'mapped' => false,
                'required' => !$isEdit,
                'attr' => [
                    'class' => 'form-control',
                    'autocomplete' => 'new-password',
                    'placeholder' => $isEdit ? 'Pozostaw puste, aby nie zmieniać hasła' : ''
                ],
                'constraints' => $isEdit ? [
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Hasło musi mieć co najmniej {{ limit }} znaków',
                        'max' => 4096,
                    ]),
                ] : [
                    new NotBlank([
                        'message' => 'Proszę podać hasło',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Hasło musi mieć co najmniej {{ limit }} znaków',
                        'max' => 4096,
                    ]),
                ],
            ]);
        }
        
        if ($allowStatusEdit) {
            $builder->add('isActive', CheckboxType::class, [
                'label' => 'Konto aktywne',
                'required' => false,
                'attr' => [
                    'class' => 'form-check-input'
                ]
            ]);
        }
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'is_edit' => false,
            'allow_username_edit' => true,
            'allow_password_edit' => true,
            'allow_status_edit' => true,
        ]);
    }
}