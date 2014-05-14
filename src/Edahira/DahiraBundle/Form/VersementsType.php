<?php

namespace Edahira\DahiraBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Edahira\DahiraBundle\Entity\ChargesRepository;
use Doctrine\ORM\EntityRepository;

class VersementsType extends AbstractType
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
     *
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $dahira = $this->dahira;

        $builder
            ->add('date'   , 'date', array('label' => 'form.label.date', 'translation_domain' => 'EdahiraDahiraBundle'))
            ->add('montant', 'integer', array('label' => 'form.label.montant', 'translation_domain' => 'EdahiraDahiraBundle'))
            ->add('charge' , 'entity', array('label' => 'form.label.charge', 'translation_domain' => 'EdahiraDahiraBundle',
                                             'class'          => 'EdahiraDahiraBundle:Charges',
                                             'property'      => 'objet',
                                             'multiple'      => false,
                                             'expanded'      => false,
                                             'query_builder' => function(EntityRepository $er) use ($dahira) {
                                                 return $er->getCharges($dahira);
                                              }))
            ->add('membre' , 'entity', array('label' => 'form.label.membre', 'translation_domain' => 'EdahiraDahiraBundle',
                                             'class'    => 'EdahiraDahiraBundle:Membres',
                                             'property' => 'affichage',
                                             'multiple' => false,
                                             'expanded' => false,
                                             'query_builder' => function(EntityRepository $er) use ($dahira){
                                                 return $er->getMembres($dahira);
                                             }))
            ->add('stay',       'checkbox', array('required' => false, 'label' => 'form.label.stay', 'translation_domain' => 'EdahiraDahiraBundle'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Edahira\DahiraBundle\Entity\Versements'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'edahira_dahirabundle_versements';
    }
}
