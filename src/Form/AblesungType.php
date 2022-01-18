<?php

namespace App\Form;

use App\Entity\Ablesung;
use App\Entity\Parzellen;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AblesungType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // ->add('jahr', DateType::class, [
            //     'widget' => 'single_text',
            //     'format' => 'yyyy',
            //     'html5' => false,
            //     'data' => new \DateTime()
            //
            // ])
            ->add('jahr')

            ->add('stromzaehlertausch', ChoiceType::class, [
                'choices' => [
                    'nein' => false,
                    'ja' => true,
                ]
            ])
            ->add('stromzaehlernummer')
            ->add('stromzaehlernummer_alt')
            ->add('stromzaehlerstand')
            ->add('stromzaehlerstand_alt')
            ->add('stromdiff')
            ->add('wasserzaehlernummer')
            ->add('wasserzaehlernummer_alt')
            ->add('wasserstand')
            ->add('wasserstand_alt')
            ->add('wasserdiff')
            ->add('parzelle', EntityType::class, [
                'class' => Parzellen::class,
                'placeholder' => '---',
                'multiple' => false,
                'choice_label' => 'nummer',
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
