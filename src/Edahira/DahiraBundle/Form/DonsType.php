<?php

namespace Edahira\DahiraBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class DonsType extends AbstractType
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
            ->add('date',      'date', array('label'    => 'form.label.date', 'translation_domain' => 'EdahiraDahiraBundle'))
            ->add('donnateur', 'text', array('label'    => 'form.label.donnateur', 'translation_domain' => 'EdahiraDahiraBundle'))
            ->add('montant',   'integer', array('label' => 'form.label.montant', 'translation_domain' => 'EdahiraDahiraBundle'))
            /*->add('evenement', 'entity', array('class'         => 'EdahiraDahiraBundle:Evenement',
                                                'property'      => 'id',
                                                'multiple'      => false,
                                                'expanded'      => false,
                                                'required'      => false,
                                                'query_builder' => function(EntityRepository $er) use ($dahira) {
                                                    return $er->getEvenements($dahira);
                                                }))
            ->add('charges', 'entity', array('class'         => 'EdahiraDahiraBundle:Charges',
                                                'property'      => 'objet',
                                                'multiple'      => false,
                                                'expanded'      => false,
                                                'required'      => false,
                                                'query_builder' => function(EntityRepository $er) use ($dahira) {
                                                    return $er->getCharges($dahira);
                                                }))*/
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Edahira\DahiraBundle\Entity\Dons'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'edahira_dahirabundle_dons';
    }
}
