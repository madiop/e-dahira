<?php

namespace Edahira\DahiraBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EvenementType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('date'         , 'date')/*
                ->add('typeevenement', 'entity', array('class'    => 'EdahiraDahiraBundle:Typeevenement',
                                                    'property' => 'nom',
                                                    'multiple' => false,
                                                    'expanded' => false))**/
                ->add('membre'       ,'entity', array('class'    => 'EdahiraDahiraBundle:Membres',
                                                    'property' => 'affichage',
                                                    'multiple' => false,
                                                    'expanded' => false));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Edahira\DahiraBundle\Entity\Evenement'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'edahira_dahirabundle_evenement';
    }
}