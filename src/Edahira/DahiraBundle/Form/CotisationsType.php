<?php

namespace Edahira\DahiraBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CotisationsType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        //    ->add('date'     ,'date')
        //    ->add('montant'  ,'text'), array('label' => 'form.label.prenom', 'translation_domain' => 'EdahiraDahiraBundle')
            ->add('evenement','entity', array('label'    => 'form.label.evenement', 'translation_domain' => 'EdahiraDahiraBundle',
                                              'class'    => 'EdahiraDahiraBundle:Evenement',
                                              'property' => 'id',
                                              'multiple' => false,
                                              'expanded' => false))
            ->add('membre'   ,'entity', array('label'    => 'form.label.membre', 'translation_domain' => 'EdahiraDahiraBundle',
                                              'class'    => 'EdahiraDahiraBundle:Membres',
                                              'property' => 'affichage',
                                              'multiple' => false,
                                              'expanded' => false))
            ->add('etat'     ,'checkbox', array('label' => 'form.label.etat', 'translation_domain' => 'EdahiraDahiraBundle'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Edahira\DahiraBundle\Entity\Cotisations'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'edahira_dahirabundle_cotisations';
    }
}
