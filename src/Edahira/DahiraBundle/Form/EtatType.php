<?php

namespace Edahira\DahiraBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class EtatType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('type', 'entity', array('class'    => 'EdahiraDahiraBundle:TypeEvenement',
                                              'property' => 'nom',
                                              'multiple' => false,
                                              'expanded' => false))
        ;
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return 'edahira_dahirabundle_eatatypeevenement';
    }
}