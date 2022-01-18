<?php

namespace App\Form;

use App\Entity\Parzellen;
use App\Entity\Mitglieder;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;



use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ParzellenType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nummer')
            ->add('groesse')
            ->add('bereich')
            ->add('trinkwasser')
            ->add('strom')
            ->add('notiz')
            ->add('status', ChoiceType::class, [
                'label' => 'Status',
                'choices' => [
                    'Verpachtet' => 'P',
                    'Frei' =>  'F',
                    'Gekündigt' => 'G',
                    'Vereinsfläche' => 'V',
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



                     //->add('paechter_a')
            //->add('paechter_p')

        //     ->add('paechter_a', EntityType::class, [
        //         'class' => Mitglieder::class,
        //         'choice_label' => 'name',
        //         'placeholder' => '---',
        //         'multiple' => false,
        //     ])
        //     ->add('paechter_p', EntityType::class, [
        //         'class' => Mitglieder::class,
        //         'choice_label' => 'name',
        //         'placeholder' => '---',
        //         'multiple' => false,
        //     ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Parzellen::class,
        ]);
    }
}
