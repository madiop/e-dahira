<?php

namespace Edahira\DahiraBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Edahira\DahiraBundle\Entity\ChargesRepository;
use Edahira\DahiraBundle\Entity\Membres;
use Doctrine\ORM\EntityRepository;

class EtatchargemembreType extends AbstractType
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
        $builder->add('charge', 'entity', array('label' => 'form.label.charge', 'translation_domain' => 'EdahiraDahiraBundle',
                                                'class'    => 'EdahiraDahiraBundle:Charges',
                                                'property' => 'objet',
                                                'multiple' => false,
                                                'expanded' => false,
                                                'query_builder' => function(EntityRepository $er) use ($dahira) {
                                                    return $er->getCharges($dahira);
                                                }))
                ->add('membre', 'entity', array('label' => 'form.label.charge', 'translation_domain' => 'EdahiraDahiraBundle',
                                                'class'    => 'EdahiraDahiraBundle:Membres',
                                                'property' => 'affichage',
                                                'multiple' => false,
                                                'expanded' => false,
                                                'query_builder' => function(EntityRepository $er) use ($dahira) {
                                                    return $er->getMembres($dahira);
                                               }))
                ->add('voir', 'submit', array('label' => 'form.bouton.voir', 'translation_domain' => 'EdahiraDahiraBundle'))
                
        ;
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return 'edahira_dahirabundle_etatcharges';
    }
}