<?php

namespace Edahira\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
// use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UtilisateursType extends BaseType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('name',    'text', array('label' => 'form.label.nom', 'translation_domain' => 'EdahiraDahiraBundle'))
            ->add('surname', 'text', array('label' => 'form.label.prenom', 'translation_domain' => 'EdahiraDahiraBundle'))
        ;
        parent::buildForm($builder, $options);
    }
    

    /**
     * @return string
     */
    public function getName()
    {
        return 'edahira_userbundle_utilisateurs';
    }
}
