<?php

namespace Edahira\DahiraBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;

class EtatmembreType extends EtatType
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

        parent::buildForm($builder, $options);
        $builder
              ->add('membre', 'entity', array('label'         => 'form.label.membre', 'translation_domain' => 'EdahiraDahiraBundle',
                                              'class'         => 'EdahiraDahiraBundle:Membres',
                                              'property'      => 'affichage',
                                              'multiple'      => false,
                                              'expanded'      => false,
                                              'required'      => true,
                                              'query_builder' => function(EntityRepository $er) use ($dahira) {
                                                  return $er->getMembres($dahira);
                                               }))
              ->add('type', 'entity', array('label'         => 'form.label.type', 'translation_domain' => 'EdahiraDahiraBundle',
                                            'class'         => 'EdahiraDahiraBundle:Typeevenement',
                                            'property'      => 'nom',
                                            'multiple'      => false,
                                            'expanded'      => false,
                                            'required'      => true,
                                            'query_builder' => function(EntityRepository $er) use ($dahira) {
                                                return $er->getTypes($dahira);
                                            }))
              ->add('voir', 'submit', array('label' => 'form.bouton.voir', 'translation_domain' => 'EdahiraDahiraBundle'))
        ;
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return 'edahira_dahirabundle_eatamembre';
    }
}