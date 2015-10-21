<?php

namespace Pfa\SistemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Pfa\SistemaBundle\Form\TareaType;
use Pfa\SistemaBundle\Entity\Tarea;

use Pfa\SistemaBundle\Entity\Alumno;
use Pfa\SistemaBundle\Entity\AlumnoPago;
use Pfa\SistemaBundle\Entity\Muaythai;
use Pfa\SistemaBundle\Entity\Bjj;
use Pfa\SistemaBundle\Entity\Mma;
use Pfa\SistemaBundle\Entity\Box;
use Pfa\SistemaBundle\Entity\Vip;
use Pfa\SistemaBundle\Entity\Yoga;
use Pfa\SistemaBundle\Entity\Entrenamiento;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;  

class MatriculaController extends Controller 
{


/* ****************************
 *
 * Con este controlador agrego los alumnos nuevos
 * hay ingresos en tres tablas, Alumnos, AlumnosPagos
 * y la tabla de la disciplina
 *
 * ****************************
 */
    public function formularioAction(Request $request) 
    {
    	$tarea = new Tarea();
       
        $tarea->setFechaInicio(new \DateTime('now'));
        
        $form = $this->createForm(new TareaType(), $tarea);	

        $form->handleRequest($request);

        if ($form->isValid())
        {	
            // *****************************************
        	// ***** Insertar datos en la tabla de alumno
            // ***************************************

            $meses = $tarea->getMeses();
            $fechafinal = $tarea->getFechaInicio();
            for ( $i=0; $i<$meses; $i++){
                date_add($fechafinal, date_interval_create_from_date_string('30 days'));
            }

            $alumno = new Alumno();
        	$alumno->setApellidop($tarea->getApellidop());
            $alumno->setApellidom($tarea->getApellidom());
        	$alumno->setNombre($tarea->getNombre());
            $alumno->setEmail($tarea->getEmail());
            $alumno->setCumple($tarea->getCumple());
        	$alumno->setDni($tarea->getDni());
            $alumno->setSexo($tarea->getSexo());
        	$alumno->setTelefonof($tarea->getTelefonof());
            $alumno->setTelefonoc($tarea->getTelefonoc());
            $alumno->setFechaFinal($fechafinal);

            $em_alumno = $this->getDoctrine()->getManager();
            $em_alumno->persist($alumno);
            $em_alumno->flush();

            // ************************************************
            // **********Ingreso en la tabla de pagos *******
            // **********************************************

            for ( $i=0; $i<$meses; $i++){
                date_add($tarea->getFechaInicio(), date_interval_create_from_date_string('-30 days'));
            }

            $vecestotales = (int)( (($meses * 30)/7)*($tarea->getVeces()) );

            $pagos= new AlumnoPago();
            $pagos->setIdalumno($alumno->getId());
            $pagos->setPrecio($tarea->getPrecio());
            $pagos->setFechaFinal($tarea->getFechaInicio());
            $pagos->setFechaInicio($tarea->getFechaInicio());
            $pagos->setDisciplina1($tarea->getDisc1());
            $pagos->setDisciplina2($tarea->getDisc2());
            $pagos->setDisciplina3($tarea->getDisc3());
            $pagos->setDisciplina4($tarea->getDisc4());
            $pagos->SetTipodepago($tarea->getTipodepago());
            $pagos->SetVeces($tarea->getVeces());
            $pagos->setVecesasistencia(0);
            $pagos->setVecestotales($vecestotales);  
            $pagos->setLunes($tarea->getLunes());
            $pagos->setMartes($tarea->getMartes()); 
            $pagos->setMiercoles($tarea->getMiercoles()); 
            $pagos->setjueves($tarea->getJueves()); 
            $pagos->setViernes($tarea->getViernes()); 
            $pagos->setSabado($tarea->getSabado()); 
            $pagos->setDomingo($tarea->getDomingo());
            $pagos->setApellidom($tarea->getApellidom());
            $pagos->setApellidop($tarea->getApellidop());  
            $pagos->setNombre($tarea->getNombre());
            $pagos->setEmail($tarea->getEmail()); 
            $pagos->setAgente($tarea->getAgente()); 
            $pagos->setMeses($tarea->getMeses());
            $pagos->setTipo('ms');            

            $em_pago = $this->getDoctrine()->getManager();
            $em_pago->persist($pagos);
            $em_pago->flush();

            // ************************************************
            // ***** Ingreso en la tabla de disciplinas *******
            // ************************************************

            if($tarea->getDisc1()== '1'){ $d = new Muaythai(); }

            if($tarea->getDisc1()== '2'){ $d = new Mma();}

            if($tarea->getDisc1()== '3'){ $d = new Box();}

            if($tarea->getDisc1()== '4'){ $d = new Bjj();}

            if($tarea->getDisc1()== '5'){ $d = new Vip();}

            if($tarea->getDisc1()== '6'){ $d = new Yoga();}

            if($tarea->getDisc1()== '7'){ $d = new Entrenamiento();}

            $d->setFechaInicio($tarea->getFechaInicio());
            $d->setPrecio($tarea->getPrecio());
            $d->setSexo($tarea->getSexo());
            $d->SetVeces($tarea->getVeces());
            $d->SetIdpago($pagos->getId());
            $d->setLunes($tarea->getLunes());
            $d->setMartes($tarea->getMartes()); 
            $d->setMiercoles($tarea->getMiercoles()); 
            $d->setjueves($tarea->getJueves()); 
            $d->setViernes($tarea->getViernes()); 
            $d->setSabado($tarea->getSabado()); 
            $d->setDomingo($tarea->getDomingo()); 

            $em_d = $this->getDoctrine()->getManager();
            $em_d->persist($d);
            $em_d->flush();  

            if($tarea->getDisc2()!= '0'){ 

                if($tarea->getDisc2()== '1'){ $d = new Muaythai(); }

                if($tarea->getDisc2()== '2'){ $d = new Mma();}

                if($tarea->getDisc2()== '3'){ $d = new Box();}

                if($tarea->getDisc2()== '4'){ $d = new Bjj();}

                if($tarea->getDisc2()== '6'){ $d = new Yoga();}

                if($tarea->getDisc2()== '7'){ $d = new Entrenamiento();}

                $d->setFechaInicio($tarea->getFechaInicio());
                $d->setPrecio(0);
                $d->setSexo($tarea->getSexo());
                $d->SetVeces($tarea->getVeces());
                $d->SetIdpago($pagos->getId());
                $d->setLunes($tarea->getLunes());
                $d->setMartes($tarea->getMartes()); 
                $d->setMiercoles($tarea->getMiercoles()); 
                $d->setjueves($tarea->getJueves()); 
                $d->setViernes($tarea->getViernes()); 
                $d->setSabado($tarea->getSabado()); 
                $d->setDomingo($tarea->getDomingo()); 

                $em_d = $this->getDoctrine()->getManager();
                $em_d->persist($d);
                $em_d->flush();  

            }

            if($tarea->getDisc3()!= '0'){ 

                if($tarea->getDisc3()== '1'){ $d = new Muaythai(); }

                if($tarea->getDisc3()== '2'){ $d = new Mma();}

                if($tarea->getDisc3()== '3'){ $d = new Box();}

                if($tarea->getDisc3()== '4'){ $d = new Bjj();}

                if($tarea->getDisc3()== '6'){ $d = new Yoga();}

                if($tarea->getDisc3()== '7'){ $d = new Entrenamiento();}

                $d->setFechaInicio($tarea->getFechaInicio());
                $d->setPrecio(0);
                $d->setSexo($tarea->getSexo());
                $d->SetVeces($tarea->getVeces());
                $d->SetIdpago($pagos->getId());
                $d->setLunes($tarea->getLunes());
                $d->setMartes($tarea->getMartes()); 
                $d->setMiercoles($tarea->getMiercoles()); 
                $d->setjueves($tarea->getJueves()); 
                $d->setViernes($tarea->getViernes()); 
                $d->setSabado($tarea->getSabado()); 
                $d->setDomingo($tarea->getDomingo()); 

                $em_d = $this->getDoctrine()->getManager();
                $em_d->persist($d);
                $em_d->flush();  

            }

            if($tarea->getDisc4()!= '0'){ 

                if($tarea->getDisc4()== '1'){ $d = new Muaythai(); }

                if($tarea->getDisc4()== '2'){ $d = new Mma();}

                if($tarea->getDisc4()== '3'){ $d = new Box();}

                if($tarea->getDisc4()== '4'){ $d = new Bjj();}

                if($tarea->getDisc4()== '6'){ $d = new Yoga();}

                if($tarea->getDisc4()== '7'){ $d = new Entrenamiento();}

                $d->setFechaInicio($tarea->getFechaInicio());
                $d->setPrecio(0);
                $d->setSexo($tarea->getSexo());
                $d->SetVeces($tarea->getVeces());
                $d->SetIdpago($pagos->getId());
                $d->setLunes($tarea->getLunes());
                $d->setMartes($tarea->getMartes()); 
                $d->setMiercoles($tarea->getMiercoles()); 
                $d->setjueves($tarea->getJueves()); 
                $d->setViernes($tarea->getViernes()); 
                $d->setSabado($tarea->getSabado()); 
                $d->setDomingo($tarea->getDomingo()); 

                $em_d = $this->getDoctrine()->getManager();
                $em_d->persist($d);
                $em_d->flush();  

            }
            


            // *************************************************************
            // *********** cambio de la fecha final de la matricula ********
            // ******************************************************************
            $fecha=$tarea->getFechaInicio();
            for ( $i=0; $i<$meses; $i++){
                date_add($fecha, date_interval_create_from_date_string('30 days'));
            }

            $em = $this->getDoctrine()->getManager();
            $alumno3 = $em->getRepository('PfaSistemaBundle:AlumnoPago')->find($pagos->getId());
         
            $alumno3->setFechaFinal(null);
            $em->flush();

            $em = $this->getDoctrine()->getManager();
            $alumno3 = $em->getRepository('PfaSistemaBundle:AlumnoPago')->find($pagos->getId());
         
            $alumno3->setFechaFinal($fecha);
            $em->flush();

            
            // ***** Resultado Luego de agregar con exito el alumno

            return $this->redirect($this->generateUrl('alumno',array('id' => $alumno->getId())));

        }
       
       return $this->render('PfaSistemaBundle::Formulario.html.twig', array(
            'form' => $form->createView(),));
        
    }


}