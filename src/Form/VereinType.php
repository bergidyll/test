<?php

namespace App\Form;

use App\Entity\Verein;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VereinType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Name des Vereins'
            ])
            ->add('gruendungsdatum', DateType::class, [
                'widget' => 'single_text',
                'label'  => 'Gründungsdataum',
            ])
            ->add('anschrift', TextType::class, [
                'label' => 'Straße / Nr,'
            ])
            ->add('plz', TextType::class, [
                'label' => 'PLZ'
            ])
            ->add('ort', TextType::class, [
                'label' => 'Ort'
            ])
            ->add('telefon', TextType::class, [
                'label' => 'Telefon'
            ])
            ->add('email', TextType::class, [
                'label' => 'E-Mail'
            ])
            ->add('register', TextType::class, [
                'label' => 'Registereintrag'
            ])
            ->add('registernummer', TextType::class, [
                'label' => 'Registernummer'
            ])
            ->add('registergericht', TextType::class, [
                'label' => 'Registergericht'
            ])
            ->add('gesamtflaeche', TextType::class, [
                'label' => 'Gesamtfläche der Anlage'
            ])
            ->add('bank', TextType::class, [
                'label' => 'Name der Bank'
            ])
            ->add('iban', TextType::class, [
                'label' => 'IBAN'
            ])
            ->add('bic', TextType::class, [
                'label' => 'BIC'
            ])
            ->add('steuernummer', TextType::class, [
                'label' => 'Steuernummer'
            ])
            ->add('mitgliedsbeitrag_aktiv', MoneyType::class, [
                'currency' => ''
            ])
            ->add('mitgliedsbeitrag_passiv', MoneyType::class, [
                'currency' => ''
            ])
            ->add('pflichtstundensoll', TextType::class, [
                'label' => 'Pflichtstunden / Jahr'
            ])
            ->add('pflichtstundenbetrag', MoneyType::class, [
                'currency' => '',
                'label' => 'Betrag / Pflichtstunde'
            ])
            ->add('gartenpacht', MoneyType::class, [
                'currency' => ''
            ])
            ->add('kautionsbetrag', MoneyType::class, [
                'currency' => ''
            ])
            ->add('parkplatzpacht', MoneyType::class, [
                'currency' => ''
            ])
            ->add('beitragbundesverband', MoneyType::class, [
                'currency' => ''
            ])
            ->add('beitraglandesverband', MoneyType::class, [
                'currency' => ''
            ])
            ->add('beitragregionalverband', MoneyType::class, [
                'currency' => ''
            ])
            ->add('beitragregionalverband', MoneyType::class, [
                'currency' => ''
            ])
            ->add('zeitungsbetrag', MoneyType::class, [
                'currency' => ''
            ])
            ->add('grundpreis_strom', MoneyType::class, [
                'currency' => '',
                'label' => 'Grundpreis Strom'
            ])
            ->add('fixkosten_strom', MoneyType::class, [
                'currency' => '',
                'label' => 'Fixkosten Strom'
            ])
            ->add('betrag_stromzaehlertausch', MoneyType::class, [
                'currency' => '',
                'label' => 'Gebühr Zählertausch'
            ])
            ->add('grundpreis_wasser', MoneyType::class, [
                'currency' => '',
                'label' => 'Grundpreis Wasser'
            ])
            ->add('fixkosten_wasser', MoneyType::class, [
                'currency' => '',
                'label' => 'Fixkosten Wasser'
            ])
            ->add('betrag_wasserzaehlertausch', MoneyType::class, [
                'currency' => '',
                'label' => 'Gebühr Wasseruhrtausch'
            ])
            ->add('vers_1_betrag', MoneyType::class, [
                'currency' => '',
                'label' => 'Betrag'
            ])
            ->add('vers_2_betrag', MoneyType::class, [
                'currency' => '',
                'label' => 'Betrag'
            ])
            ->add('vers_3_betrag', MoneyType::class, [
                'currency' => '',
                'label' => 'Betrag'
            ])
            ->add('vers_4_betrag', MoneyType::class, [
                'currency' => '',
                'label' => 'Betrag'
            ])
            ->add('vers_5_betrag', MoneyType::class, [
                'currency' => '',
                'label' => 'Betrag'
            ])
            ->add('vers_1', TextType::class, [
                'label' => 'Versicherung 1'
            ])
            ->add('vers_2', TextType::class, [
                'label' => 'Versicherung 2'
            ])
            ->add('vers_3', TextType::class, [
                'label' => 'Versicherung 3'
            ])
            ->add('vers_4', TextType::class, [
                'label' => 'Versicherung 4'
            ])
            ->add('vers_5', TextType::class, [
                'label' => 'Versicherung 5'
            ])
            ->add('umlage_1_betrag', MoneyType::class, [
                'currency' => '',
                'label' => 'Betrag'
            ])
            ->add('umlage_2_betrag', MoneyType::class, [
                'currency' => '',
                'label' => 'Betrag'
            ])
            ->add('umlage_3_betrag', MoneyType::class, [
                'currency' => '',
                'label' => 'Betrag'
            ])
            ->add('umlage_4_betrag', MoneyType::class, [
                'currency' => '',
                'label' => 'Betrag'
            ])
            ->add('umlage_5_betrag', MoneyType::class, [
                'currency' => '',
                'label' => 'Betrag'
            ])
            ->add('umlage_1', TextType::class, [
                'label' => 'Umlage 1'
            ])
            ->add('umlage_2', TextType::class, [
                'label' => 'Umlage 2'
            ])
            ->add('umlage_3', TextType::class, [
                'label' => 'Umlage 3'
            ])
            ->add('umlage_4', TextType::class, [
                'label' => 'Umlage 4'
            ])
            ->add('umlage_5', TextType::class, [
                'label' => 'Umlage 5'
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Verein::class,
        ]);
    }
}
