<?php

namespace Pfa\SistemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FiltroType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('disciplina', 'choice', array(
            'choices' => array('0'=>'todos','1' => 'Muai thay', '1' => 'Mma','3' => 'Box','4' => 'Jiu Jitsu','5'=>'Vip'),
            ))
            ->add('hora','choice',array(
            'choices' => array('0' => 'todos','06:10 am' => '06:10 am', '07:10 am' => '07:10 am',
            '07:10 am' => '07:10 am', '09:00 am' => '09:00 am','10:00 am' => '10:00 am', '11:00 am' => '11:00 am',
            '12:00 pm' => '12:00 pm', '01:15 pm' => '01:15 pm','02:30 pm' => '02:30 pm', '03:30 pm' => '03:30 pm',
            '04:30 pm' => '04:30 pm', '05:30 pm' => '05:30 pm','06:30 pm' => '06:30 pm', '07:30 pm' => '07:30 pm',
            '08:30 pm' => '08:30 pm', '09:35 pm' => '09:35 pm'),
            ))
            ->add('dia','choice',array(
            'choices' => array('0' => 'todos','lunes' => 'lunes', 'martes' => 'martes',
            'miercoles' => 'miercoles', 'jueves' => 'jueves','viernes' => 'viernes', 'sabado' => 'sabado',
            'domingo' => 'domingo'),
            ))

            ->add('vence','choice',array(
            'choices' => array('todos' => 'todos','activos' => 'activos', 'vencidos' => 'vencidos',
            '5' => 'vence en 5 dias o menos','10' => 'vence en 10 dias o menos','20' => 'vence en 20 dias o menos',
            '6'=>'Vence este mes' , '7'=>'Vence el siguiente mes' , '8'=>'Vence el subsiguiente mes'),))

            ->add('buscar', 'submit')
        ;
    }

    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pfa\SistemaBundle\Entity\Filtro'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pfa_sistemabundle_filtro';
    }
}
