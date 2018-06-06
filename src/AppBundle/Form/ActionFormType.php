<?php

namespace AppBundle\Form;

use AppBundle\Constants\ActionReward;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActionFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class, [
            'label' => false,
            'required' => true,
            'attr' => [
                'placeholder' => 'Action name',
            ]
        ]);
        $builder->add('typeReward', ChoiceType::class, [
            'label' => false,
            'choices' => ActionReward::REWARDS,
        ]);
        $builder->add('percentReward', IntegerType::class, [
            'label' => false,
            'attr' => [
                'placeholder' => 'Reward percent'
            ]
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getBlockPrefix()
    {
        return 'app_bundle_action_type';
    }
}
