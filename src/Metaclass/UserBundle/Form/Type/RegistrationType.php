<?php
namespace Metaclass\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function getName()
    {
        return 'registration';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('user', new UserType());
        $builder->add('terms', 'checkbox', array(
                'property_path'  => 'termsAccepted',
            )
        );
        $builder->add('Register', 'submit');
    }
}