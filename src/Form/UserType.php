<?php

namespace App\Form;

use App\Entity\User;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', TextType::class, [
                'label' => 'E-Mail',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Bitte geben Sie eine E-Mailadresse ein.',
                    ]),
                ],
            ])
            ->add('firstname', TextType::class, [
                'label' => 'Vorname',
            ])
            ->add('lastname', TextType::class, [
                'label' => 'Nachname',
            ])
            ->add('plainPassword', PasswordType::class, [
                'label' => 'Passwort',
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Bitte geben Sie ein Passwort ein.',
                    ]),
                    new Length([
                        'min' => 10,
                        'minMessage' => 'Ihr Passwort muss mindestens {{ limit }} Zeichen lang sein.',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])
            ->add('role', ChoiceType::class, [
                'label'   => 'Berechtigung',
                'multiple' => false,
                'mapped'  => false,
                'choices' => [
                    'Benutzer' => 'ROLE_USER',
                    'Admin'    => 'ROLE_ADMIN'
                ],
            ])
        ;

        // $builder->get('role')
        //     ->addModelTransformer(new CallbackTransformer(
        //         function ($rolesArray) {
        //              // transform the array to a string
        //              return $rolesArray ? $rolesArray[0]: null;
        //         },
        //         function ($rolesString) {
        //              // transform the string back to an array
        //              return [$rolesString];
        //         }
        //     )
        // );


    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
