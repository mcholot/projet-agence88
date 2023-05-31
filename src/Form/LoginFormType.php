<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;


class LoginFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => 'Adresse mail :',
                'required' => true,
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez saisir une adresse mail.']),
                ],
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Mot de passe :',
                'required' => true,
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez saisir un mot de passe.']),
                ],
            ]);
    }
}

    // public function configureOptions(OptionsResolver $resolver): void
    // {
    //     $resolver->setDefaults([
    //         'data_class' => User::class,
    //     ]);
    // }

