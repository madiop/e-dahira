<?php

namespace Edahira\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Edahira\DahiraBundle\Entity\Dahira;
use Edahira\UserBundle\Entity\UtilisateursRepository;
use Doctrine\ORM\EntityRepository;

class PartagerType extends AbstractType
{
    /**
     * @var \Edahira\DahiraBundle\Entity\Dahira
     *
     */
    protected $dahira;

    public function __construct(\Edahira\DahiraBundle\Entity\Dahira $dahira){
        $this->dahira = $dahira;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $idDahira = $this->dahira->getId();
        $builder->add('utilisateur', 'entity', array('label'    => 'form.label.utilisateur', 'translation_domain' => 'EdahiraDahiraBundle',
                                                     'class'    => 'EdahiraUserBundle:Utilisateurs',
                                                     'property' => 'affichage',
                                                     'multiple' => false,
                                                     'expanded' => false,
                                                     'query_builder' => function(EntityRepository $er)  use ($idDahira) {
                                                         return $er->getOtherUsers($idDahira);
                                                     }))
                ->add('dahira', 'hidden', array('attr'  => array('value' => $idDahira)))
                
        ;
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return 'edahira_userbundle_partager';
    }
}