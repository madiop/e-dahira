<?php

namespace Edahira\DahiraBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Edahira\DahiraBundle\Entity\ChargesRepository;
use Doctrine\ORM\EntityRepository;

class EtatcaisseType extends AbstractType
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
        $builder->add('caisse', 'entity', array('label' => 'form.label.caisse', 'translation_domain' => 'EdahiraDahiraBundle',
                                                'class'         => 'EdahiraDahiraBundle:Caisses',
                                                'property'      => 'nom',
                                                'multiple'      => false,
                                                'expanded'      => false,
                                                'query_builder' => function(EntityRepository $er) use ($dahira) {
                                                    return $er->getCaisses($dahira);
                                                }))
                ->add('voir', 'submit', array('label' => 'form.bouton.voir', 'translation_domain' => 'EdahiraDahiraBundle'))
                
        ;
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return 'edahira_dahirabundle_etatcaisse';
    }
}