<?php

namespace App\Form;

use App\Entity\Pflichtstunden;
use App\Entity\Mitglieder;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PflichtstundenType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('jahr', DateType::class, [
                'widget' => 'single_text',
                'format' => 'yyyy',
                'html5' => false,
                'label'  => 'Abrechnungsjahr',
                'data' => new \DateTime()
            ])
            ->add('anzahl')
            ->add('bemerkung')
            ->add('mitglieder', EntityType::class, [
                'class' => Mitglieder::class,
                'choice_label' => 'name',
                'placeholder' => '---',
                'multiple' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Pflichtstunden::class,
        ]);
    }
}
