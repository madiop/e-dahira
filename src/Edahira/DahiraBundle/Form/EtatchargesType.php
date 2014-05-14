<?php

namespace Edahira\DahiraBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;

class EtatchargesType extends AbstractType
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
        $builder->add('charge', 'entity', array('class'         => 'EdahiraDahiraBundle:Charges',
                                                'property'      => 'objet',
                                                'multiple'      => false,
                                                'expanded'      => false,
                                                'query_builder' => function(EntityRepository $er) use ($dahira) {
                                                    return $er->getCharges($dahira);
                                                }))
                ->add('voir', 'submit')
                
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