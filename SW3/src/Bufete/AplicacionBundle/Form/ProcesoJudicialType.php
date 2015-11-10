<?php

namespace Bufete\AplicacionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProcesoJudicialType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo')
            ->add('descripcion')
            ->add('estado')
            ->add('codigoConsulta')
            ->add('fechaIn')
            ->add('fechaVencimiento')
            ->add('prioridad')
            ->add('abogado')
            ->add('cliente')
                
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bufete\AplicacionBundle\Entity\ProcesoJudicial'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bufete_aplicacionbundle_procesojudicial';
    }
}
