<?php

namespace AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;



class ArticleType extends AbstractType
{
	
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Titre', array(
           'label' => 'input comment', 
           'attr' => array('style' => 'width: 200px')
          )
            ->add('Texte', array(
           'label' => 'input comment', 
           'attr' => array('style' => 'width: 200px')
          )
            
            ->add('Valider','submit')
        ;
    }

    public function setDefaultOption(OptionResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
           'data_class' => 'TestBundle\Entity\Sheet'
            ));
    }



	public function getName()
	{
	return 'sheet_form';
	}
}