<?php
/**
 * Created by PhpStorm.
 * User: jeffreyallen
 * Date: 2/26/18
 * Time: 10:43 AM
 */

namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseRegistrationFormType;

// In order to see this form, need to
// 1) register as service
// 2)
class RegistrationFormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('first_name');
    }


    public function getParent()
    {
        return BaseRegistrationFormType::class;
    }

}