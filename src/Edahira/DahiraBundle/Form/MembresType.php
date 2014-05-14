<?php

namespace Edahira\DahiraBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class MembresType extends AbstractType
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
            ->add('prenom',     'text', array('label' => 'form.label.prenom', 'translation_domain' => 'EdahiraDahiraBundle'))
            ->add('nom',        'text', array('label' => 'form.label.nom', 'translation_domain' => 'EdahiraDahiraBundle'))
            ->add('categorie', 'entity', array('label' => 'form.label.categorie', 'translation_domain' => 'EdahiraDahiraBundle',
                                               'class'          => 'EdahiraDahiraBundle:Categories',
                                               'property'      => 'nom',
                                               'multiple'      => false,
                                               'expanded'      => false,
                                               'required'      => true,
                                               'query_builder' => function(EntityRepository $er) use ($dahira) {
                                                    return $er->getCategories($dahira);
                                               }))
            ->add('adresse',    'textarea', array('label' => 'form.label.adresse', 'translation_domain' => 'EdahiraDahiraBundle', 'required' => false))
            ->add('email',      'email', array('label' => 'form.label.email', 'translation_domain' => 'EdahiraDahiraBundle', 'required' => false))
            ->add('telephone1', 'text', array('label' => 'form.label.tel1', 'translation_domain' => 'EdahiraDahiraBundle', 'required' => false))
            ->add('telephone2', 'text', array('label' => 'form.label.tel2', 'translation_domain' => 'EdahiraDahiraBundle', 'required' => false))
            ->add('etat',       'checkbox', array('label' => 'form.label.etat', 'translation_domain' => 'EdahiraDahiraBundle', 'required' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Edahira\DahiraBundle\Entity\Membres'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'edahira_dahirabundle_membres';
    }
}
