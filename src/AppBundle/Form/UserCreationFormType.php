<?php

namespace AppBundle\Form;

use AppBundle\Constants\Gender;
use Doctrine\DBAL\Types\BooleanType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use AppBundle\Constants\Role;

class UserCreationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('role',           ChoiceType::class, [
            'label'     => false,
            'required'  => true,
            'choices'   => Role::ALL_ROLES,
        ]);
        $builder->add('first_name',     TextType::class, [
            'label' => false,
            'required' => true,
        ]);
        $builder->add('middle_name',    TextType::class, [
            'label' => false,
        ]);
        $builder->add('second_name',    TextType::class, [
            'label' => false,
        ]);
        $builder->add('login',          TextType::class, [
            'label' => false,
        ]);
        $builder->add('password',       PasswordType::class, [
            'label' => false,
        ]);
        $builder->add('email',          EmailType::class, [
            'label' => false,
        ]);
        $builder->add('gender',         ChoiceType::class, [
            'label' => false,
            'required' => true,
            'choices' => Gender::ALL_GENDERS
        ]);
        $builder->add('birthday',       DateType::class, [
            'label' => false,
            'required' => true
        ]);
        $builder->add('is_distribution', CheckboxType::class, [
            'label' => false,
            'required' => true
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
    }

    public function getBlockPrefix()
    {
        return 'app_bundle_user_creation_form';
    }
}
