<?php

namespace Edahira\DahiraBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class DepensesType extends AbstractType
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
            ->add('date'   , 'date', array('label' => 'form.label.date', 'translation_domain' => 'EdahiraDahiraBundle'))
            ->add('montant', 'text', array('label' => 'form.label.montant', 'translation_domain' => 'EdahiraDahiraBundle'))
            ->add('objet'  , 'textarea', array('label' => 'form.label.objet', 'translation_domain' => 'EdahiraDahiraBundle'))
            ->add('caisse' , 'entity', array('label' => 'form.label.caisse', 'translation_domain' => 'EdahiraDahiraBundle',
                                             'class'         => 'EdahiraDahiraBundle:Caisses',
                                             'property'      => 'nom',
                                             'multiple'      => false,
                                             'expanded'      => false,
                                             'query_builder' => function(EntityRepository $er) use ($dahira) {
                                                  return $er->getActivesCaisses($dahira);
                                              }))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Edahira\DahiraBundle\Entity\Depenses'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'edahira_dahirabundle_depenses';
    }
}