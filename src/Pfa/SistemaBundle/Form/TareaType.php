<?php

namespace Pfa\SistemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TareaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('apellidop',null, array('label' =>'Apellido Paterno',))
            ->add('apellidom',null, array('label' =>'Apellido Materno',))
            ->add('nombre',null, array('label' =>'Nombre Completo',))
            ->add('email',null,array('label' =>'Correo Electronico',))
            ->add('cumple','birthday')
            ->add('dni')
            ->add('telefonoc',null, array('label' =>' Numero Celular',))
            ->add('telefonof',null, array('label' =>'Numero Fijo',))

            ->add('sexo', 'choice', array(
            'choices' => array('1' => 'Mujer', '2' => 'Hombre'),
            ))

            ->add('disc1', 'choice', array(
            'choices' => array('1' => 'Muay thai' ,'2' => 'Mma', '3' => 'Box',
             '4'=> 'Jiu Jitsu','6'=>'Entren funcional','7'=>'Yoga','5'=>'Vip'
             ),'label'=>'Disciplina principal',
            ))

            ->add('disc2', 'choice', array(
            'choices' => array('0' => 'nulo', '1' => 'Muay thai' ,'2' => 'Mma', '3' => 'Box',
             '4'=> 'Jiu Jitsu','6'=>'Entren funcional','7'=>'Yoga'),'label'=>'Segunda disciplina',
            ))
            ->add('disc3', 'choice', array(
            'choices' => array('0' => 'nulo', '1' => 'Muay thai' ,'2' => 'Mma', '3' => 'Box',
             '4'=> 'Jiu Jitsu','6'=>'Entren funcional','7'=>'Yoga'),'label'=>'Tercera disciplina ',
            ))
            ->add('disc4', 'choice', array(
            'choices' => array('0' => 'nulo', '1' => 'Muay thai' ,'2' => 'Mma', '3' => 'Box',
             '4'=> 'Jiu Jitsu','6'=>'Entren funcional','7'=>'Yoga' ),'label'=>'Cuarta disciplina',
            ))
            
            ->add('agente', 'choice', array(
            'choices' => array('1' => 'Arturo', '2' => 'Cristina' ,'3' => 'Veronica', '4' => 'Jose',
             '5'=> 'Viviane','6'=>'Luigi' ),'label'=>'Agente',
            ))

            ->add('fecha_inicio','date')


            ->add('meses' , 
                  'choice', 
                   array('choices' => array('1' => '1 mes','2' => '2 meses', '3' => '3 meses',
                   '4' => '4 meses', '5' => '5 meses','6' => '6 meses', '7' => '7 meses',
                   '8' => '8 meses', '9' => '9 meses','10' => '10 meses', '11' => '11 meses',
                   '12' => '12 meses',),'label'=>'meses',
            ))

            ->add('lunes' , 
                  'choice', 
                   array('choices' => array('nulo' => 'nulo','06:10 am' => '06:10 am', '07:10 am' => '07:10 am',
                   '08:00 am' => '08:00 am', '09:00 am' => '09:00 am','10:00 am' => '10:00 am', '11:00 am' => '11:00 am',
                   '12:00 pm' => '12:00 pm', '01:10 pm' => '01:10 pm','02:30 pm' => '02:30 pm', '03:30 pm' => '03:30 pm',
                   '04:30 pm' => '04:30 pm', '05:30 pm' => '05:30 pm','06:30 pm' => '06:30 pm', '07:30 pm' => '07:30 pm',
                   '08:30 pm' => '08:30 pm', '09:35 pm' => '09:35 pm','10:35 pm'=>'10:35 pm'),'label'=>'Lunes',
            ))

            ->add('martes' , 
                  'choice', 
                   array('choices' => array('nulo' => 'nulo','06:10 am' => '06:10 am', '07:10 am' => '07:10 am',
                   '08:00 am' => '08:00 am', '09:00 am' => '09:00 am','10:00 am' => '10:00 am', '11:00 am' => '11:00 am',
                   '12:00 pm' => '12:00 pm', '01:10 pm' => '01:10 pm','02:30 pm' => '02:30 pm', '03:30 pm' => '03:30 pm',
                   '04:30 pm' => '04:30 pm', '05:30 pm' => '05:30 pm','06:30 pm' => '06:30 pm', '07:30 pm' => '07:30 pm',
                   '08:30 pm' => '08:30 pm', '09:35 pm' => '09:35 pm','10:35 pm'=>'10:35 pm'),'label'=>'Martes',
            ))

            ->add('miercoles' , 
                  'choice', 
                   array('choices' => array('nulo' => 'nulo','06:10 am' => '06:10 am', '07:10 am' => '07:10 am',
                   '08:00 am' => '08:00 am', '09:00 am' => '09:00 am','10:00 am' => '10:00 am', '11:00 am' => '11:00 am',
                   '12:00 pm' => '12:00 pm', '01:10 pm' => '01:10 pm','02:30 pm' => '02:30 pm', '03:30 pm' => '03:30 pm',
                   '04:30 pm' => '04:30 pm', '05:30 pm' => '05:30 pm','06:30 pm' => '06:30 pm', '07:30 pm' => '07:30 pm',
                   '08:30 pm' => '08:30 pm', '09:35 pm' => '09:35 pm','10:35 pm'=>'10:35 pm'),'label'=>'Miercoles',
            ))

            ->add('jueves' , 
                  'choice', 
                   array('choices' => array('nulo' => 'nulo','06:10 am' => '06:10 am', '07:10 am' => '07:10 am',
                   '08:00 am' => '08:00 am', '09:00 am' => '09:00 am','10:00 am' => '10:00 am', '11:00 am' => '11:00 am',
                   '12:00 pm' => '12:00 pm', '01:10 pm' => '01:10 pm','02:30 pm' => '02:30 pm', '03:30 pm' => '03:30 pm',
                   '04:30 pm' => '04:30 pm', '05:30 pm' => '05:30 pm','06:30 pm' => '06:30 pm', '07:30 pm' => '07:30 pm',
                   '08:30 pm' => '08:30 pm', '09:35 pm' => '09:35 pm','10:35 pm'=>'10:35 pm'),'label'=>'Jueves',
            ))

            ->add('viernes' , 
                  'choice', 
                   array('choices' => array('nulo' => 'nulo','06:10 am' => '06:10 am', '07:10 am' => '07:10 am',
                   '08:00 am' => '08:00 am', '09:00 am' => '09:00 am','10:00 am' => '10:00 am', '11:00 am' => '11:00 am',
                   '12:00 pm' => '12:00 pm', '01:10 pm' => '01:10 pm','02:30 pm' => '02:30 pm', '03:30 pm' => '03:30 pm',
                   '04:30 pm' => '04:30 pm', '05:30 pm' => '05:30 pm','06:30 pm' => '06:30 pm', '07:30 pm' => '07:30 pm',
                   '08:30 pm' => '08:30 pm', '09:35 pm' => '09:35 pm','10:35 pm'=>'10:35 pm'),'label'=>'Viernes',
            ))

            ->add('sabado' , 
                  'choice', 
                   array('choices' => array('nulo' => 'nulo','06:10 am' => '06:10 am', '07:10 am' => '07:10 am',
                   '08:00 am' => '08:00 am', '09:00 am' => '09:00 am','10:00 am' => '10:00 am', '11:00 am' => '11:00 am',
                   '12:00 pm' => '12:00 pm', '01:10 pm' => '01:10 pm','02:30 pm' => '02:30 pm', '03:30 pm' => '03:30 pm',
                   '04:30 pm' => '04:30 pm', '05:30 pm' => '05:30 pm','06:30 pm' => '06:30 pm', '07:30 pm' => '07:30 pm',
                   '08:30 pm' => '08:30 pm', '09:35 pm' => '09:35 pm','10:35 pm'=>'10:35 pm'),'label'=>'Sabado',
            ))

            ->add('domingo' , 
                  'choice', 
                   array('choices' => array('nulo' => 'nulo','06:10 am' => '06:10 am', '07:10 am' => '07:10 am',
                   '08:00 am' => '08:00 am', '09:00 am' => '09:00 am','10:00 am' => '10:00 am', '11:00 am' => '11:00 am',
                   '12:00 pm' => '12:00 pm', '01:10 pm' => '01:10 pm','02:30 pm' => '02:30 pm', '03:30 pm' => '03:30 pm',
                   '04:30 pm' => '04:30 pm', '05:30 pm' => '05:30 pm','06:30 pm' => '06:30 pm', '07:30 pm' => '07:30 pm',
                   '08:30 pm' => '08:30 pm', '09:35 pm' => '09:35 pm','10:35 pm'=>'10:35 pm'),'label'=>'Domingo',
            ))


            ->add('tipodepago' , 
                  'choice', 
                   array('choices' => array('1' => 'efectivo', '2' => 'tarjeta',),'label'=>'Tipo de Pago',
            ))

            ->add('veces', 'choice', array(
            'choices' => array('1' => '1 día por semana', '2' => '2 días por semanas' , '3' => '3 días por semanas', 
              '4' => '4 días por semanas', '5' => '5 días por semanas', '6' => '6días por semanas',),'label'=>'Dias por semana',
            ))

            ->add('precio')


            ->add('matricular', 'submit')


        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pfa\SistemaBundle\Entity\Tarea'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pfa_sistemabundle_tarea';
    }
}
