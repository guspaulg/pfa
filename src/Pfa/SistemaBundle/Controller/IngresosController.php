<?php

namespace Pfa\SistemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;  

use Pfa\SistemaBundle\Form\IngresosType;
use Pfa\SistemaBundle\Entity\Ingresos;

class IngresosController extends Controller 
{
  
        public function buscarAction(Request $request){

            $ingresos = new Ingresos();
            $ingresos->setFechaInicio(new \DateTime('now'));
            $ingresos->setFechaFinal(new \DateTime('now'));
            $form = $this->createForm(new IngresosType(), $ingresos);
            $form->handleRequest($request);
            
            $muay=null;
            $jiu=null;
            $box=null;
            $mma=null;
            $vip=null;
            $yoga=null;
            $entre=null;
            $fechai=null;
            $fechaf=null;

            if ($form->isValid() )
            {
                $muay = $this-> getDoctrine()
                        ->getRepository('Pfa\SistemaBundle\Entity\Muaythai')
                        ->findALL();

                $jiu = $this-> getDoctrine()
                            ->getRepository('Pfa\SistemaBundle\Entity\Bjj')
                            ->findALL();

                $box = $this-> getDoctrine()
                            ->getRepository('Pfa\SistemaBundle\Entity\Box')
                            ->findALL();

                $mma = $this-> getDoctrine()
                            ->getRepository('Pfa\SistemaBundle\Entity\Mma')
                            ->findALL();

                $vip = $this-> getDoctrine()
                            ->getRepository('Pfa\SistemaBundle\Entity\Vip')
                            ->findALL();  

                $yoga = $this-> getDoctrine()
                            ->getRepository('Pfa\SistemaBundle\Entity\Yoga')
                            ->findALL(); 

                $entre = $this-> getDoctrine()
                            ->getRepository('Pfa\SistemaBundle\Entity\Entrenamiento')
                            ->findALL(); 

                $fechai= $ingresos->getFechaInicio();            
                $fechaf= $ingresos->getFechaFinal();    


                return $this->render('PfaSistemaBundle::ingresos.html.twig', array(
                'form' => $form->createView(),'muay'=> $muay,'jiu'=> $jiu, 'box' => $box, 'mma'=>$mma, 
                'fechai'=> $fechai,'fechaf'=> $fechaf,'entre'=>$entre,'yoga'=>$yoga,'vip'=>$vip));
            }
                return $this->render('PfaSistemaBundle::ingresos.html.twig', array(
                'form' => $form->createView(),'muay'=> $muay,'jiu'=> $jiu, 'box' => $box, 'mma'=>$mma, 
                'fechai'=> $fechai,'fechaf'=> $fechaf,'entre'=>$entre,'yoga'=>$yoga,'vip'=>$vip));
        }

    //.................................................................

}