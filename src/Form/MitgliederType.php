<?php

namespace App\Form;

use App\Entity\Mitglieder;
use App\Entity\Parzellen;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;





use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MitgliederType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('vorname')
            ->add('nachname')
            ->add('anrede', ChoiceType::class, [
                'label' => 'Anrede',
                'choices' => [
                    'Frau' => 'Frau',
                    'Herr' => 'Herr',
                ]
            ])
            ->add('telefon')
            ->add('plz')
            ->add('ort')
            ->add('strasse')
            ->add('email')
            ->add('beruf')
            ->add('notiz')
            ->add('kaution', MoneyType::class, [
                'currency' => ''
            ])
            ->add('parkplatzanzahl')
            ->add('parkplatz', ChoiceType::class, [
                'choices' => [
                    'nein' => false,
                    'ja' => true,
                ]
            ])

            ->add('parkplatz', ChoiceType::class, [
                'choices' => [
                    'nein' => false,
                    'ja' => true,
                ]
            ])
            ->add('zeitungsbezug', ChoiceType::class, [
                'choices' => [
                    'nein' => false,
                    'ja' => true,
                ]
            ])
            ->add('zb_pflichtstunden')
            ->add('zb_zeitung')
            ->add('zb_mitgliedsbeitrag')
            ->add('mitgliedsnummer', TextType::class, [] )

            ->add('geburtsdatum', DateType::class, [
                'widget' => 'single_text',
                'required' => false
            ])
            ->add('eintrittsdatum', DateType::class, [
                'widget' => 'single_text',
                'required' => false
            ])
            ->add('austrittsdatum', DateType::class, [
                'widget' => 'single_text',
                'required' => false
            ])
            ->add('status', ChoiceType::class, [
                'label' => 'Status',
                'choices' => [
                    'Aktiv (A)' => 'A',
                    'Passiv (P)' =>  'P',
                    'Ehrenmitglied' => 'E',
                    'Gekündigt' => 'G',
                ]
            ])
            ->add('parzelle', EntityType::class, [
                'class' => Parzellen::class,
                'choice_label' => 'nummer',
                'placeholder' => '---',
                'multiple' => false,
            ])
            ->add('funktion', ChoiceType::class, [
                'label' => 'Funktion im Verein',
                'choices' => [
                    'keine' => false,
                    'Vorsitzender' =>  'Vorsitzender',
                    'stellv. Vorsitzender' => 'stellv. Vorsitzender',
                    'Kassierer' => 'Kassierer',
                    'Schriftführer' => 'Schriftführer',
                    'Fachberater' => 'Fachberater',
                    'Reihenwart' => 'Reihenwart',
                    'Elektrokommission' => 'Elektrokommission',
                    'Wasserkommission' => 'Wasserkommission',
                    'Baukommission' => 'Baukommission',
                ]
            ])
            ->add('updatedat', DateType::class, [
                'widget' => 'single_text',
                'data'   => new \DateTime('now'),
                'label'  => 'Bearbeitet'
            ])
            ->add('createdat', DateType::class, [
                'widget' => 'single_text',
                'label'  => 'Erstellt'
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Mitglieder::class,
        ]);
    }
}
