<?php

namespace App\Form;

use App\Entity\Notice;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;



use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NoticeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('headline')
            ->add('text')
            ->add('created_at', DateType::class, [
                // 'widget' => 'single_text',
                // 'format' => 'd.m.Y - H:i',
                // 'html5' => false,
                'label'  => 'eratellt am',
                'data' => new \DateTime('@'.strtotime('now'))
            ])
            // ->add('created_at', DateType::class, [
            //     'widget' => 'single_text',
            //     'format' => 'd.m.Y - H:i',
            //     'html5' => false,
            //     'label'  => 'eratellt am',
            //     'data' => new \DateTime('@'.strtotime('now'))
            // ])
            ->add('create_from')
            ->add('status', ChoiceType::class, [
                'label' => 'Status',
                'choices' => [
                    'Info' => 'I',
                    'Wichtig' =>  'W',
                    'Sehr Wichtig' => 'SW',
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Notice::class,
        ]);
    }
}
