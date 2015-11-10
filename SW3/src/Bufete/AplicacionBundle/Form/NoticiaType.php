<?php

namespace Bufete\AplicacionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NoticiaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo')
            ->add('noticia')
            ->add('fecha')
            ->add('abogado')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bufete\AplicacionBundle\Entity\Noticia'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bufete_aplicacionbundle_noticia';
    }
}
