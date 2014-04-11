<?php

namespace Edahira\DahiraBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TypeevenementType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom'          , 'text')
                ->add('periode'      , 'choice', array(
                        'choices'   => array(
                            '' => '----------------------',
                            '7' => 'Hebdomadaire',
                            '30' => 'Mensuel',
                            '365' => 'Annuel'),
                        'multiple'  => false))
                ->add('cotisation'   , 'text')
                ->add('caisse', 'entity', array('class'    => 'EdahiraDahiraBundle:Caisses',
                                                    'property' => 'nom',
                                                    'multiple' => false,
                                                    'expanded' => false))
                ->add('jourdesemaine', 'choice', array(
                        'choices'   => array(
                            '' => '----------------------',
                            'lun' => 'Lundi',
                            'mar' => 'Mardi',
                            'mer' => 'Mercredi',
                            'jeu' => 'Jeudi',
                            'ven' => 'Vendredi',
                            'sam' => 'Samedi',
                            'dim' => 'Dimanche',
                        ),
                        'multiple'  => false,
                        'required' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Edahira\DahiraBundle\Entity\Typeevenement'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'edahira_dahirabundle_typeevenement';
    }
}
