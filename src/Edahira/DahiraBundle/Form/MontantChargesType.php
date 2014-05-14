<?php

namespace Edahira\DahiraBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class MontantChargesType extends AbstractType
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
        $builder
            /*->add('charge','entity', array('class'    => 'EdahiraDahiraBundle:Charges',
                                                    'property' => 'objet',
                                                    'multiple' => false,
                                                    'expanded' => false))*/
            ->add('categorie'   ,'entity', array('class'    => 'EdahiraDahiraBundle:Categories',
                                                 'property' => 'nom',
                                                 'multiple' => false,
                                                 'expanded' => false,
                                                 'disabled' => 'desabled',
                                                 'query_builder' => function(EntityRepository $er) use ($dahira) {
                                                        return $er->getCategories($dahira);
                                                 }))
            ->add('montant'     ,'integer')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Edahira\DahiraBundle\Entity\MontantCharges'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'edahira_dahirabundle_montantcharges';
    }
}
