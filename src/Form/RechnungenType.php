<?php

namespace App\Form;

use App\Entity\Rechnungen;
use App\Entity\Mitglieder;
use App\Entity\Verein;
use App\Entity\Pflichtstunden;
use App\Entity\Parzellen;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RechnungenType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('rechnungstyp', ChoiceType::class, [
                'label' => 'Art der Rechnung',
                'choices' => [
                    'Jahresabrechnung' => 'J',
                    'Anfangsrechnung' =>  'A',
                    'Entabrechnung' => 'E',
                    'Pflegevereinbarung' => 'PV',
                ]
            ])
            ->add('datum', DateType::class, [
                'widget' => 'single_text',
                'label'  => 'Rechnungsdatum',
            ])
            ->add('faelligkeitsdatum', DateType::class, [
                'widget' => 'single_text',
                'label'  => 'Fälligkeit',
            ])
            ->add('rechnungsstatus', ChoiceType::class, [
                'choices' => [
                    'offen' => 'O',
                    'bezahlt' =>  'B',
                    'teilbezahlt' => 'T',
                    'storniert' => 'S',
                ]
            ])

            ->add('mitglieder', EntityType::class, [
                'class' => Mitglieder::class,
                'placeholder' => '---',
                'multiple' => false,
                'choice_label' => 'name',
            ])
            ->add('rechnungssumme')
            ->add('rechnungsnummer', TextType::class, [
                'label' => 'Rechnungsnummer',
                //'data' =>  $it . '-' . $setyear . 'toto:gartennummer'
            ])
            
            // ->add('pachtzins')

            // ->add('pflichtstunden', EntityType::class, [
            //     'class' => Pflichtstunden::class,
            //     'placeholder' => '---',
            //     'choice_label' => 'jahr'|date('Y'),
            //
            //     'multiple' => false,
            // ])



        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Rechnungen::class,
        ]);
    }
}
