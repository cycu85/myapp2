<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class GeneralSettingsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('app_name', TextType::class, [
                'label' => 'Nazwa aplikacji',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Wprowadź nazwę aplikacji'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Nazwa aplikacji nie może być pusta']),
                    new Length([
                        'min' => 2,
                        'max' => 100,
                        'minMessage' => 'Nazwa aplikacji musi mieć co najmniej {{ limit }} znaki',
                        'maxMessage' => 'Nazwa aplikacji nie może mieć więcej niż {{ limit }} znaków',
                    ])
                ]
            ])
            ->add('company_logo', FileType::class, [
                'label' => 'Logo firmy',
                'mapped' => false,
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'accept' => 'image/*'
                ],
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/gif',
                            'image/webp'
                        ],
                        'mimeTypesMessage' => 'Proszę wgrać prawidłowy plik obrazu (JPEG, PNG, GIF lub WebP)',
                        'maxSizeMessage' => 'Plik jest za duży ({{ size }} {{ suffix }}). Maksymalny rozmiar to {{ limit }} {{ suffix }}.',
                    ])
                ]
            ])
            ->add('primary_color', ColorType::class, [
                'label' => 'Główny kolor aplikacji',
                'attr' => [
                    'class' => 'form-control form-control-color',
                    'title' => 'Wybierz kolor'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Główny kolor musi być wybrany'])
                ]
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Zapisz ustawienia',
                'attr' => [
                    'class' => 'btn btn-primary'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}