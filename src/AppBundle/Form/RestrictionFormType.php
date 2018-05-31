<?php

namespace AppBundle\Form;

use AppBundle\Constants\RestrictionType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RestrictionFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class, [
            'label' => false
        ]);
        $builder->add('type', ChoiceType::class, [
            'label' => false,
            'choices' => RestrictionType::ALL_RESTRICTIONS
        ]);
        $builder->add('percent', NumberType::class, [
            'label'=> false
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getBlockPrefix()
    {
        return 'app_bundle_restriction_form_type';
    }
}
