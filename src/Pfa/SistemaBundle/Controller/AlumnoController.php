<?php

namespace Pfa\SistemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;  

use Pfa\SistemaBundle\Form\BuscarType;
use Pfa\SistemaBundle\Entity\Buscar;

use Pfa\SistemaBundle\Form\Tarea2Type;
use Pfa\SistemaBundle\Entity\Tarea2;

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

class AlumnoController extends Controller 
{
    
    //******con este controlador muestro detalles de alumno**********

    
        public function mostrarAction(Request $request , $id){


                $alumno = $this-> getDoctrine()
                    ->getRepository('Pfa\SistemaBundle\Entity\Alumno')
                    ->find($id);

                $alumnop = $this-> getDoctrine()
                    ->getRepository('Pfa\SistemaBundle\Entity\AlumnoPago')
                    ->findBy(
                        array('idalumno'  => $id),
                        array('id' => 'DESC')
                    );

                $tarea2 = new Tarea2();
                $tarea2->setFechaInicio(new \DateTime('now'));
                $form = $this->createForm(new Tarea2Type(), $tarea2); 
                $form->handleRequest($request);

                if ($form->isValid())
                {   
                    // **** actualizo la fecha final en alumnos

                    $em= $this->getDoctrine()->getManager();
                    $alumnoaux = $em->getRepository('Pfa\SistemaBundle\Entity\Alumno')->find($id);

                    $meses = $tarea2->getMeses();
                    $fechafinal = $tarea2->getFechaInicio();
                    for ( $i=0; $i<$meses; $i++){
                        date_add($fechafinal, date_interval_create_from_date_string('30 days'));
                    }
                    $alumnoaux->setFechaFinal($fechafinal);
                    $em->flush();

                    // ******* Cambio de estado del pago anterior ******
                            
                    $em1 = $this->getDoctrine()->getManager();
                    $query = $em1->createQuery(
                    'SELECT  MAX(a.id) FROM PfaSistemaBundle:AlumnoPago a WHERE a.idalumno='.$id.'');  

                    $consulta = $query->getResult();
                    $idUltPago=  $consulta[0][1];

                    $em2 = $this->getDoctrine()->getManager();
                    $alumnop1 = $em2->getRepository('Pfa\SistemaBundle\Entity\AlumnoPago')->find($idUltPago);

                    if($alumnop1->getTipo()=='ms' ){$alumnop1->setTipo('mn');}

                    if($alumnop1->getTipo()=='rs' ){$alumnop1->setTipo('rn');}
       
                    $em2->flush();


                    // **** ingreso en AlumnosPagos ***********

                    for ( $i=0; $i<$meses; $i++){
                        date_add($tarea2->getFechaInicio(), date_interval_create_from_date_string('-30 days'));
                    }

                    $vecestotales = (int)( (($meses * 30)/7)*($tarea2->getVeces()) );

                    $pagos= new AlumnoPago();
                    $pagos->setIdalumno($id);
                    $pagos->setPrecio($tarea2->getPrecio());
                    $pagos->setFechaFinal($tarea2->getFechaInicio());
                    $pagos->setFechaInicio($tarea2->getFechaInicio());
                    $pagos->setDisciplina1($tarea2->getDisc1());
                    $pagos->setDisciplina2($tarea2->getDisc2());
                    $pagos->setDisciplina3($tarea2->getDisc3());
                    $pagos->setDisciplina4($tarea2->getDisc4());
                    $pagos->SetTipodepago($tarea2->getTipodepago());
                    $pagos->SetVeces($tarea2->getVeces());
                    $pagos->setVecesasistencia(0);
                    $pagos->setVecestotales($vecestotales);  
                    $pagos->setLunes($tarea2->getLunes());
                    $pagos->setMartes($tarea2->getMartes()); 
                    $pagos->setMiercoles($tarea2->getMiercoles()); 
                    $pagos->setjueves($tarea2->getJueves()); 
                    $pagos->setViernes($tarea2->getViernes()); 
                    $pagos->setSabado($tarea2->getSabado()); 
                    $pagos->setDomingo($tarea2->getDomingo());
                    $pagos->setApellidom($alumnoaux->getApellidom());
                    $pagos->setApellidop($alumnoaux->getApellidop());  
                    $pagos->setNombre($alumnoaux->getNombre());
                    $pagos->setEmail($alumnoaux->getEmail()); 
                    $pagos->setAgente($tarea2->getAgente());
                    $pagos->setMeses($tarea2->getMeses());
                    $pagos->setTipo('rs');          

                    $em_pago = $this->getDoctrine()->getManager();
                    $em_pago->persist($pagos);
                    $em_pago->flush();

                    // ************************************************
                    // ***** Ingreso en la tabla de disciplinas *******
                    // ************************************************

                    if($tarea2->getDisc1()== '1'){ $d = new Muaythai(); }

                    if($tarea2->getDisc1()== '2'){ $d = new Mma();}

                    if($tarea2->getDisc1()== '3'){ $d = new Box();}

                    if($tarea2->getDisc1()== '4'){ $d = new Bjj();}

                    if($tarea2->getDisc1()== '5'){ $d = new Vip();}

                    if($tarea2->getDisc1()== '6'){ $d = new Yoga();}

                    if($tarea2->getDisc1()== '7'){ $d = new Entrenamiento();}

                    $d->setFechaInicio($tarea2->getFechaInicio());
                    $d->setPrecio($tarea2->getPrecio());
                    $d->setSexo(3);
                    $d->SetVeces($tarea2->getVeces());
                    $d->SetIdpago($pagos->getId());
                    $d->setLunes($tarea2->getLunes());
                    $d->setMartes($tarea2->getMartes()); 
                    $d->setMiercoles($tarea2->getMiercoles()); 
                    $d->setjueves($tarea2->getJueves()); 
                    $d->setViernes($tarea2->getViernes()); 
                    $d->setSabado($tarea2->getSabado()); 
                    $d->setDomingo($tarea2->getDomingo()); 

                    $em_d = $this->getDoctrine()->getManager();
                    $em_d->persist($d);
                    $em_d->flush();  

                    if($tarea2->getDisc2()!= '0'){ 

                        if($tarea2->getDisc2()== '1'){ $d = new Muaythai(); }

                        if($tarea2->getDisc2()== '2'){ $d = new Mma();}

                        if($tarea2->getDisc2()== '3'){ $d = new Box();}

                        if($tarea2->getDisc2()== '4'){ $d = new Bjj();}

                        if($tarea2->getDisc2()== '6'){ $d = new Yoga();}

                        if($tarea2->getDisc2()== '7'){ $d = new Entrenamiento();}

                        $d->setFechaInicio($tarea2->getFechaInicio());
                        $d->setPrecio(0);
                        $d->setSexo(3);
                        $d->SetVeces($tarea2->getVeces());
                        $d->SetIdpago($pagos->getId());
                        $d->setLunes($tarea2->getLunes());
                        $d->setMartes($tarea2->getMartes()); 
                        $d->setMiercoles($tarea2->getMiercoles()); 
                        $d->setjueves($tarea2->getJueves()); 
                        $d->setViernes($tarea2->getViernes()); 
                        $d->setSabado($tarea2->getSabado()); 
                        $d->setDomingo($tarea2->getDomingo()); 

                        $em_d = $this->getDoctrine()->getManager();
                        $em_d->persist($d);
                        $em_d->flush();  

                    }

                    if($tarea2->getDisc3()!= '0'){ 

                        if($tarea2->getDisc3()== '1'){ $d = new Muaythai(); }

                        if($tarea2->getDisc3()== '2'){ $d = new Mma();}

                        if($tarea2->getDisc3()== '3'){ $d = new Box();}

                        if($tarea2->getDisc3()== '4'){ $d = new Bjj();}

                        if($tarea2->getDisc3()== '6'){ $d = new Yoga();}

                        if($tarea2->getDisc3()== '7'){ $d = new Entrenamiento();}

                        $d->setFechaInicio($tarea2->getFechaInicio());
                        $d->setPrecio(0);
                        $d->setSexo(3);
                        $d->SetVeces($tarea2->getVeces());
                        $d->SetIdpago($pagos->getId());
                        $d->setLunes($tarea2->getLunes());
                        $d->setMartes($tarea2->getMartes()); 
                        $d->setMiercoles($tarea2->getMiercoles()); 
                        $d->setjueves($tarea2->getJueves()); 
                        $d->setViernes($tarea2->getViernes()); 
                        $d->setSabado($tarea2->getSabado()); 
                        $d->setDomingo($tarea2->getDomingo()); 

                        $em_d = $this->getDoctrine()->getManager();
                        $em_d->persist($d);
                        $em_d->flush();  

                    }

                    if($tarea2->getDisc4()!= '0'){ 

                        if($tarea2->getDisc4()== '1'){ $d = new Muaythai(); }

                        if($tarea2->getDisc4()== '2'){ $d = new Mma();}

                        if($tarea2->getDisc4()== '3'){ $d = new Box();}

                        if($tarea2->getDisc4()== '4'){ $d = new Bjj();}

                        if($tarea2->getDisc4()== '6'){ $d = new Yoga();}

                        if($tarea2->getDisc4()== '7'){ $d = new Entrenamiento();}

                        $d->setFechaInicio($tarea2->getFechaInicio());
                        $d->setPrecio(0);
                        $d->setSexo(3);
                        $d->SetVeces($tarea2->getVeces());
                        $d->SetIdpago($pagos->getId());
                        $d->setLunes($tarea2->getLunes());
                        $d->setMartes($tarea2->getMartes()); 
                        $d->setMiercoles($tarea2->getMiercoles()); 
                        $d->setjueves($tarea2->getJueves()); 
                        $d->setViernes($tarea2->getViernes()); 
                        $d->setSabado($tarea2->getSabado()); 
                        $d->setDomingo($tarea2->getDomingo()); 

                        $em_d = $this->getDoctrine()->getManager();
                        $em_d->persist($d);
                        $em_d->flush();  

                    }
                    


                    // *************************************************************
                    // *********** cambio de la fecha final de la matricula ********
                    // ******************************************************************
                    $fecha=$tarea2->getFechaInicio();
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







                    //*** termino de ingresar los datos *****

                    $alumno = $this-> getDoctrine()
                    ->getRepository('Pfa\SistemaBundle\Entity\Alumno')
                    ->find($id);

                    $alumnop = $this-> getDoctrine()
                        ->getRepository('Pfa\SistemaBundle\Entity\AlumnoPago')
                        ->findBy(
                            array('idalumno'  => $id),
                            array('id' => 'DESC')
                        ); 

                    return $this->render('PfaSistemaBundle::alumno.html.twig', array(
                    'form' => $form->createView(),'alumno' => $alumno,'alumnop' => $alumnop, 'id' => $id));

                }

                return $this->render('PfaSistemaBundle::alumno.html.twig', array(
                'form' => $form->createView(),'alumno' => $alumno,'alumnop' => $alumnop, 'id' => $id));
        }

    //.................................................................
    //******con este controlador busco alumno**********

    
        public function buscarAction(Request $request){

            $buscar = new Buscar();
            $form = $this->createForm(new BuscarType(), $buscar); 
            $form->handleRequest($request);
            $resultado=null;

            if ($form->isValid() )
            {
                $dni=$buscar->getDni();
                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery(
                    'SELECT p
                    FROM PfaSistemaBundle:Alumno p
                    WHERE (p.dni = :dni)'
                )->setParameter('dni',$dni);
                $resultado= $query->getResult();

                return $this->render('PfaSistemaBundle::buscar.html.twig', array(
                'form' => $form->createView(),'resultado' => $resultado));
            }
            return $this->render('PfaSistemaBundle::buscar.html.twig', array(
            'form' => $form->createView(),'resultado' => $resultado));
        }

    //.................................................................


    public function asistenciaAction(Request $request ,$id){

            $alumno = $this-> getDoctrine()->getRepository('Pfa\SistemaBundle\Entity\Alumno')->find($id);

            $alumnop = $this-> getDoctrine()->getRepository('Pfa\SistemaBundle\Entity\AlumnoPago')
                    ->findBy(
                        array('idalumno'  => $id),
                        array('id' => 'DESC')
                    );

            /////*****************************************************************
                    
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery(
            'SELECT  MAX(a.id) FROM PfaSistemaBundle:AlumnoPago a WHERE a.idalumno='.$id.'');  

            $consulta = $query->getResult();
            $idUltPago=  $consulta[0][1];
            $em2 = $this->getDoctrine()->getManager();
            $alumnop1 = $em2->getRepository('Pfa\SistemaBundle\Entity\AlumnoPago')->find($idUltPago); 
            $asistencia = $alumnop1->getVecesasistencia();
            $asistencia = $asistencia + 1;
            $alumnop1->setVecesasistencia($asistencia);
            $em2->flush();

            return $this->redirect($this->generateUrl('alumno',array('id' => $id)));
    }

     public function editarAction(Request $request ,$id){

            $em = $this->getDoctrine()->getManager();
            $alumno = $em->getRepository('Pfa\SistemaBundle\Entity\Alumno')->find($id);
                    
            $em1 = $this->getDoctrine()->getManager();
            $query = $em1->createQuery(
            'SELECT  MAX(a.id) FROM PfaSistemaBundle:AlumnoPago a WHERE a.idalumno='.$id.'');  

            $consulta = $query->getResult();
            $idUltPago=  $consulta[0][1];


            $em2 = $this->getDoctrine()->getManager();
            $alumnop1 = $em2->getRepository('Pfa\SistemaBundle\Entity\AlumnoPago')->find($idUltPago);
                

            //*********************************************************************** 

            $tarea = new Tarea();

            $tarea->setNombre($alumno->getNombre());
            $tarea->setApellidop($alumno->getApellidop());
            $tarea->setApellidom($alumno->getApellidom());
            $tarea->setDni($alumno->getDni());
            $tarea->setTelefonoc($alumno->getTelefonoc());
            $tarea->setTelefonof($alumno->getTelefonof()); 
            $tarea->setEmail($alumno->getEmail()); 
            $tarea->setCumple($alumno->getCumple()); 
            $tarea->setSexo($alumno->getSexo());
            $tarea->setPrecio($alumnop1->getPrecio());
            $tarea->setMeses($alumnop1->getMeses());
            $tarea->setFechaInicio($alumnop1->getFechaInicio());
            $tarea->setDisc1($alumnop1->getDisciplina1());
            $tarea->setDisc2($alumnop1->getDisciplina2());
            $tarea->setDisc3($alumnop1->getDisciplina3());
            $tarea->setDisc4($alumnop1->getDisciplina4());
            $tarea->SetTipodepago($alumnop1->getTipodepago());
            $tarea->SetVeces($alumnop1->getVeces());
            $tarea->setLunes($alumnop1->getLunes());
            $tarea->setMartes($alumnop1->getMartes()); 
            $tarea->setMiercoles($alumnop1->getMiercoles()); 
            $tarea->setjueves($alumnop1->getJueves()); 
            $tarea->setViernes($alumnop1->getViernes()); 
            $tarea->setSabado($alumnop1->getSabado()); 
            $tarea->setDomingo($alumnop1->getDomingo());
            $tarea->setAgente($alumnop1->getAgente());
            
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
                    $em->flush();

                    // ************************************************
                    // **********Ingreso en la tabla de pagos *******
                    // **********************************************

                    for ( $i=0; $i<$meses; $i++){
                        date_add($tarea->getFechaInicio(), date_interval_create_from_date_string('-30 days'));
                    }

                    $vecestotales = (int)( (($meses * 30)/7)*($tarea->getVeces()) );

                    $alumnop1->setIdalumno($alumno->getId());
                    $alumnop1->setPrecio($tarea->getPrecio());
                    $alumnop1->setFechaFinal($tarea->getFechaInicio());
                    $alumnop1->setFechaInicio($tarea->getFechaInicio());
                    $alumnop1->setDisciplina1($tarea->getDisc1());
                    $alumnop1->setDisciplina2($tarea->getDisc2());
                    $alumnop1->setDisciplina3($tarea->getDisc3());
                    $alumnop1->setDisciplina4($tarea->getDisc4());
                    $alumnop1->SetTipodepago($tarea->getTipodepago());
                    $alumnop1->SetVeces($tarea->getVeces());
                    $alumnop1->setVecestotales($vecestotales);  
                    $alumnop1->setLunes($tarea->getLunes());
                    $alumnop1->setMartes($tarea->getMartes()); 
                    $alumnop1->setMiercoles($tarea->getMiercoles()); 
                    $alumnop1->setjueves($tarea->getJueves()); 
                    $alumnop1->setViernes($tarea->getViernes()); 
                    $alumnop1->setSabado($tarea->getSabado()); 
                    $alumnop1->setDomingo($tarea->getDomingo());
                    $alumnop1->setApellidom($tarea->getApellidom());
                    $alumnop1->setApellidop($tarea->getApellidop());  
                    $alumnop1->setNombre($tarea->getNombre());
                    $alumnop1->setEmail($tarea->getEmail()); 
                    $alumnop1->setAgente($tarea->getAgente()); 
                    $alumnop1->setMeses($tarea->getMeses());         

                    $em2->flush();

                    // *************************************************************
                    // *********** cambio de la fecha final de la matricula ********
                    // ******************************************************************
                    $fecha=$tarea->getFechaInicio();
                    for ( $i=0; $i<$meses; $i++){
                        date_add($fecha, date_interval_create_from_date_string('30 days'));
                    }

                    $em = $this->getDoctrine()->getManager();
                    $alumno3 = $em->getRepository('PfaSistemaBundle:AlumnoPago')->find($alumnop1->getId());
                 
                    $alumno3->setFechaFinal(null);
                    $em->flush();

                    $em = $this->getDoctrine()->getManager();
                    $alumno3 = $em->getRepository('PfaSistemaBundle:AlumnoPago')->find($alumnop1->getId());
                 
                    $alumno3->setFechaFinal($fecha);
                    $em->flush();

                    
                    // ***** Resultado Luego de agregar con exito el alumno

                    return $this->redirect($this->generateUrl('alumno',array('id' => $alumno->getId())));

            }

            return $this->render('PfaSistemaBundle::rematricula.html.twig', array(
            'form' => $form->createView(),));
    }

}