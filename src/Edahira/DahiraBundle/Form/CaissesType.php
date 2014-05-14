<?php

namespace Edahira\DahiraBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CaissesType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',         'text', array('label' => 'form.label.nom', 'translation_domain' => 'EdahiraDahiraBundle')) 
            ->add('description', 'textarea', array('required' => false, 'label' => 'form.label.description', 'translation_domain' => 'EdahiraDahiraBundle'))
            ->add('fond',         'integer', array('required' => false, 'label' => 'form.label.fond', 'translation_domain' => 'EdahiraDahiraBundle'))
            ->add('etat',        'checkbox', array('required' => false, 'label' => 'form.label.etat', 'translation_domain' => 'EdahiraDahiraBundle'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Edahira\DahiraBundle\Entity\Caisses'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'edahira_dahirabundle_caisses';
    }
}