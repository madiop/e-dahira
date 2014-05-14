<?php

namespace Edahira\DahiraBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Edahira\DahiraBundle\Form\MontantChargesType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class ChargesType extends AbstractType
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
            ->add('objet'   , 'text', array('label' => 'form.label.objet', 'translation_domain' => 'EdahiraDahiraBundle'))
            ->add('echeance', 'date', array('label' => 'form.label.echeance', 'translation_domain' => 'EdahiraDahiraBundle'))
            ->add('caisse'  , 'entity', array('label' => 'form.label.caisse', 'translation_domain' => 'EdahiraDahiraBundle',
                                              'class'    => 'EdahiraDahiraBundle:Caisses',
                                              'property' => 'nom',
                                              'multiple' => false,
                                              'expanded' => false,
                                              'query_builder' => function(EntityRepository $er) use ($dahira) {
                                                  return $er->getActivesCaisses($dahira);
                                            }))
            ->add('montants', 'collection', array('label' => 'form.label.montants', 'translation_domain' => 'EdahiraDahiraBundle',
                                                  'type' => new MontantChargesType($dahira)
                                                  ))
            ->add('etat'   , 'checkbox',array('required' => false, 'label' => 'form.label.etat', 'translation_domain' => 'EdahiraDahiraBundle'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Edahira\DahiraBundle\Entity\Charges'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'edahira_dahirabundle_charges';
    }
}
