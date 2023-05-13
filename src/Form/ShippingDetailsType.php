<?php

namespace App\Form;

<<<<<<<< HEAD:src/Form/PurchaseDetailsType.php
use App\Entity\PurchaseDetails;
========
use App\Entity\ShippingDetails;
>>>>>>>> 37a5ef554987307b34576f141c9208980cfd5716:src/Form/ShippingDetailsType.php
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

<<<<<<<< HEAD:src/Form/PurchaseDetailsType.php
class PurchaseDetailsType extends AbstractType
========
class ShippingDetailsType extends AbstractType
>>>>>>>> 37a5ef554987307b34576f141c9208980cfd5716:src/Form/ShippingDetailsType.php
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('phone')
            ->add('email')
            ->add('address')
<<<<<<<< HEAD:src/Form/PurchaseDetailsType.php
========
            ->add('product')
            ->add('price')
>>>>>>>> 37a5ef554987307b34576f141c9208980cfd5716:src/Form/ShippingDetailsType.php
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
<<<<<<<< HEAD:src/Form/PurchaseDetailsType.php
            'data_class' => PurchaseDetails::class,
========
            'data_class' => ShippingDetails::class,
>>>>>>>> 37a5ef554987307b34576f141c9208980cfd5716:src/Form/ShippingDetailsType.php
        ]);
    }
}
