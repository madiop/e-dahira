<?php

namespace Edahira\DahiraBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DahiraType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom'        , 'text', array('label' => 'form.label.nom', 'translation_domain' => 'EdahiraDahiraBundle'))
                ->add('description', 'textarea', array('required' => false, 'label' => 'form.label.description', 'translation_domain' => 'EdahiraDahiraBundle'))
                ->add('president'  , 'text', array('label' => 'form.label.president', 'translation_domain' => 'EdahiraDahiraBundle'))
                ->add('telephone'  , 'text', array('label' => 'form.label.telephone', 'translation_domain' => 'EdahiraDahiraBundle'))
                ->add('email'      , 'email', array('required' => false, 'label' => 'form.label.email', 'translation_domain' => 'EdahiraDahiraBundle'))
                ->add('siege'      , 'textarea', array('required' => false, 'label' => 'form.label.siege', 'translation_domain' => 'EdahiraDahiraBundle'))
                ->add('numcompte'  , 'text', array(
                    'label' => 'form.label.numcompte', 
                    'translation_domain' => 'EdahiraDahiraBundle',
                    'required' => false
                    ));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Edahira\DahiraBundle\Entity\Dahira'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'edahira_dahirabundle_dahira';
    }
}
