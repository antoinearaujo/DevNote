<?php

namespace TestBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SheetType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Titre',  array(
           'label' => 'input comment', 
           'attr' => array('style' => 'width: 200px')
          ))
            ->add('Texte', array(
           'label' => 'input comment', 
           'attr' => array('style' => 'width: 200px')
          ))
            ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TestBundle\Entity\Sheet'
        ));
    }
}
