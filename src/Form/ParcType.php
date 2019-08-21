<?php

namespace App\Form;

use App\Entity\Accessibilities;
use App\Entity\AgeSuitability;
use App\Entity\Amenities;
use App\Entity\Equipments;
use App\Entity\Parc;
use App\Entity\Surfaces;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ParcType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('address')
            ->add('city')
            ->add('zipcode')
            ->add('rating')
            ->add('favoris')
            ->add('surface', EntityType::class, [
                'class' => Surfaces::class,
                'choice_label' => 'name',
            ])
            ->add('amenities', EntityType::class, [
                'class' => Amenities::class,
                'choice_label' => 'name',
            ])
            ->add('equipments', EntityType::class, [
                'class' => Equipments::class,
                'choice_label' => 'name',
            ])
            ->add('accessibility', EntityType::class, [
                'class' => Accessibilities::class,
                'choice_label' => 'name',
            ])
            ->add('age_suitability', EntityType::class, [
                'class' => AgeSuitability::class,
                'choice_label' => 'name',
            ])
            ->add('enregistrer', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Parc::class,
        ]);
    }
}
