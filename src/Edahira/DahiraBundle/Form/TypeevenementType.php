<?php

namespace Edahira\DahiraBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class TypeevenementType extends AbstractType
{
    /**
     * @var integer
     *
     */
    protected $dahira;

    public function __construct($dahira){
        $this->dahira = $dahira;
    }
    
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $dahira = $this->dahira;
        $builder->add('nom'          , 'text', array('label' => 'form.label.nom', 'translation_domain' => 'EdahiraDahiraBundle'))
                ->add('periode'      , 'choice', array(
                        'label' => 'form.label.periode', 
                        'translation_domain' => 'EdahiraDahiraBundle',
                        'choices'   => array(
                            '' => '----------------------',
                            '7' => 'Hebdomadaire',
                            '30' => 'Mensuel',
                            '365' => 'Annuel'),
                        'multiple'  => false))
                ->add('caisse', 'entity', array('label' => 'form.label.caisse', 'translation_domain' => 'EdahiraDahiraBundle',
                                                'class'    => 'EdahiraDahiraBundle:Caisses',
                                                'property' => 'nom',
                                                'multiple' => false,
                                                'expanded' => false,
                                                'query_builder' => function(EntityRepository $er) use ($dahira) {
                                                       return $er->getActivesCaisses($dahira);
                                                }))
                ->add('cotisations', 'collection', array('label' => 'form.label.cotisations', 'translation_domain' => 'EdahiraDahiraBundle',
                                                         'type' => new MontantCotisationsType($dahira)))
                ->add('jourdesemaine', 'choice', array(
                        'label' => 'form.label.jourdesemaine', 
                        'translation_domain' => 'EdahiraDahiraBundle',
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
