<?php

namespace Pfa\SistemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session; 

use Pfa\SistemaBundle\Form\FiltroType;
use Pfa\SistemaBundle\Entity\Filtro;


class FiltroController extends Controller 
{
    
    //****** con este controlador muestro la pantalla principal **********

    public function buscarAction(Request $request)
    {

        $filtro = new Filtro();
        $form = $this->createForm(new FiltroType(), $filtro); 
        $form->handleRequest($request);
        $resultado=null;
        $vence=null;

        if ($form->isValid() )
        {
            $disc=$filtro->getDisciplina();
            $hora=$filtro->getHora();
            $dia=$filtro->getDia();
            $vence=$filtro->getVence();

            // ++++++++++++++++++++++++++++++++++++++++++++
            // ++++++++ V V V +++++++++++++++++++++++++++++
            // ++++++++++++++++++++++++++++++++++++++++++++
             if( ($disc!='0')&&($hora!='0')&&($dia!='0') ){

                // +++++++ Lunes +++++++
                //+++++++++++++++++++++++
                if ($dia=='lunes'){
                    $em = $this->getDoctrine()->getManager();
                    $query = $em->createQuery(
                        'SELECT p
                        FROM PfaSistemaBundle:AlumnoPago p
                        WHERE (p.lunes = :hora) AND (p.disciplina1 = :disc) AND (p.tipo= :ms OR p.tipo= :rs )'
                    )->setParameters(array('hora'=>$hora,'disc'=>$disc,'ms'=>'ms','rs'=>'rs'));
                    $resultado= $query->getResult();
                }
                // +++++++ Martes +++++++
                //+++++++++++++++++++++++
                if ($dia=='martes'){
                    $em = $this->getDoctrine()->getManager();
                    $query = $em->createQuery(
                        'SELECT p
                        FROM PfaSistemaBundle:AlumnoPago p
                        WHERE (p.martes =:hora ) AND (p.disciplina1=:disc) AND (p.tipo= :ms OR p.tipo= :rs )'
                    )->setParameters(array('hora'=>$hora,'disc'=>$disc,'ms'=>'ms','rs'=>'rs'));
                    $resultado= $query->getResult();
                }
                // +++++++ Miercoles +++++++
                //+++++++++++++++++++++++
                if ($dia=='miercoles'){
                    $em = $this->getDoctrine()->getManager();
                    $query = $em->createQuery(
                        'SELECT p
                        FROM PfaSistemaBundle:AlumnoPago p
                        WHERE (p.miercoles = :hora ) AND (p.disciplina1=:disc) AND (p.tipo= :ms OR p.tipo= :rs )'
                    )->setParameters(array('hora'=>$hora,'disc'=>$disc,'ms'=>'ms','rs'=>'rs'));
                    $resultado= $query->getResult();
                }
                // +++++++ Jueves +++++++
                //+++++++++++++++++++++++
                if ($dia=='jueves'){
                    $em = $this->getDoctrine()->getManager();
                    $query = $em->createQuery(
                        'SELECT p
                        FROM PfaSistemaBundle:AlumnoPago p
                        WHERE (p.jueves = :hora )AND  (p.disciplina1 =:disc) AND (p.tipo= :ms OR p.tipo= :rs )'
                    )->setParameters(array('hora'=>$hora,'disc'=>$disc,'ms'=>'ms','rs'=>'rs'));
                    $resultado= $query->getResult();
                }
                // +++++++ Viernes +++++++
                //+++++++++++++++++++++++
                if ($dia=='viernes'){
                    $em = $this->getDoctrine()->getManager();
                    $query = $em->createQuery(
                        'SELECT p
                        FROM PfaSistemaBundle:AlumnoPago p
                        WHERE (p.viernes = :hora) AND (p.disciplina1=:disc) AND (p.tipo= :ms OR p.tipo= :rs )'
                    )->setParameters(array('hora'=>$hora,'disc'=>$disc,'ms'=>'ms','rs'=>'rs'));
                    $resultado= $query->getResult();
                }
                // +++++++ Sabado +++++++
                //+++++++++++++++++++++++
                if ($dia=='sabado'){
                    $em = $this->getDoctrine()->getManager();
                    $query = $em->createQuery(
                        'SELECT p
                        FROM PfaSistemaBundle:AlumnoPago p
                        WHERE (p.sabado = :hora) AND ( p.disciplina1=:disc) AND (p.tipo= :ms OR p.tipo= :rs )'
                    )->setParameters(array('hora'=>$hora,'disc'=>$disc,'ms'=>'ms','rs'=>'rs'));
                    $resultado= $query->getResult();
                }
                // +++++++ Domingo +++++++
                //+++++++++++++++++++++++
                if ($dia=='domingo'){
                    $em = $this->getDoctrine()->getManager();
                    $query = $em->createQuery(
                        'SELECT p
                        FROM PfaSistemaBundle:AlumnoPago p
                        WHERE (p.domingo = :hora) AND (p.disciplina1=:disc) AND (p.tipo= :ms OR p.tipo= :rs )'
                    )->setParameters(array('hora'=>$hora,'disc'=>$disc,'ms'=>'ms','rs'=>'rs'));
                    $resultado= $query->getResult();
                }
            
            }

            // ++++++++++++++++++++++++++++++++++++++++++++
            // ++++++++ V V F +++++++++++++++++++++++++++++
            // ++++++++++++++++++++++++++++++++++++++++++++
             if( ($disc!='0')&&($hora!='0')&&($dia=='0') ){

                    $em = $this->getDoctrine()->getManager();
                    $query = $em->createQuery(
                        'SELECT p
                        FROM PfaSistemaBundle:AlumnoPago p
                        WHERE ( (p.lunes = :hora AND p.disciplina1=:disc) OR
                        (p.martes = :hora AND p.disciplina1=:disc) OR
                        (p.miercoles = :hora AND p.disciplina1=:disc) OR
                        (p.jueves = :hora AND p.disciplina1=:disc) OR
                        (p.viernes = :hora AND p.disciplina1=:disc) OR
                        (p.sabado = :hora AND p.disciplina1=:disc) OR
                        (p.domingo = :hora AND p.disciplina1=:disc) ) AND (p.tipo= :ms OR p.tipo= :rs )'
                    )->setParameters(array('hora'=>$hora,'disc'=>$disc,'ms'=>'ms','rs'=>'rs'));
                    $resultado= $query->getResult();
                
             }

             // ++++++++++++++++++++++++++++++++++++++++++++
            // ++++++++ V F V +++++++++++++++++++++++++++++
            // ++++++++++++++++++++++++++++++++++++++++++++
             if( ($disc!='0')&&($hora=='0')&&($dia!='0') ){

                    // +++++++ Lunes +++++++
                    //+++++++++++++++++++++++
                    if ($dia=='lunes'){
                        $em = $this->getDoctrine()->getManager();
                        $query = $em->createQuery(
                            'SELECT p
                            FROM PfaSistemaBundle:AlumnoPago p
                            WHERE (p.lunes <>:nulo) AND (p.disciplina1 = :disc) AND (p.tipo= :ms OR p.tipo= :rs )'
                        )->setParameters(array('nulo'=>'nulo','disc'=>$disc,'ms'=>'ms','rs'=>'rs'));
                        $resultado= $query->getResult();
                    }
                    // +++++++ Martes +++++++
                    //+++++++++++++++++++++++
                    if ($dia=='martes'){
                        $em = $this->getDoctrine()->getManager();
                        $query = $em->createQuery(
                            'SELECT p
                            FROM PfaSistemaBundle:AlumnoPago p
                            WHERE (p.martes <>:nulo) AND (p.disciplina1=:disc)AND (p.tipo= :ms OR p.tipo= :rs )'
                        )->setParameters(array('nulo'=>'nulo','disc'=>$disc,'ms'=>'ms','rs'=>'rs'));
                        $resultado= $query->getResult();
                    }
                    // +++++++ Miercoles +++++++
                    //+++++++++++++++++++++++
                    if ($dia=='miercoles'){
                        $em = $this->getDoctrine()->getManager();
                        $query = $em->createQuery(
                            'SELECT p
                            FROM PfaSistemaBundle:AlumnoPago p
                            WHERE (p.miercoles <>:nulo ) AND (p.disciplina1=:disc) AND (p.tipo= :ms OR p.tipo= :rs )'
                        )->setParameters(array('nulo'=>'nulo','disc'=>$disc,'ms'=>'ms','rs'=>'rs'));
                        $resultado= $query->getResult();
                    }
                    // +++++++ Jueves +++++++
                    //+++++++++++++++++++++++
                    if ($dia=='jueves'){
                        $em = $this->getDoctrine()->getManager();
                        $query = $em->createQuery(
                            'SELECT p
                            FROM PfaSistemaBundle:AlumnoPago p
                            WHERE (p.jueves<>:nulo )AND  (p.disciplina1 =:disc) AND (p.tipo= :ms OR p.tipo= :rs )'
                        )->setParameters(array('nulo'=>'nulo','disc'=>$disc,'ms'=>'ms','rs'=>'rs'));
                        $resultado= $query->getResult();
                    }
                    // +++++++ Viernes +++++++
                    //+++++++++++++++++++++++
                    if ($dia=='viernes'){
                        $em = $this->getDoctrine()->getManager();
                        $query = $em->createQuery(
                            'SELECT p
                            FROM PfaSistemaBundle:AlumnoPago p
                            WHERE (p.viernes <>:nulo) AND (p.disciplina1=:disc) AND (p.tipo= :ms OR p.tipo= :rs )'
                        )->setParameters(array('nulo'=>'nulo','disc'=>$disc,'ms'=>'ms','rs'=>'rs'));
                        $resultado= $query->getResult();
                    }
                    // +++++++ Sabado +++++++
                    //+++++++++++++++++++++++
                    if ($dia=='sabado'){
                        $em = $this->getDoctrine()->getManager();
                        $query = $em->createQuery(
                            'SELECT p
                            FROM PfaSistemaBundle:AlumnoPago p
                            WHERE (p.sabado <>:nulo) AND ( p.disciplina1=:disc) AND (p.tipo= :ms OR p.tipo= :rs )'
                        )->setParameters(array('nulo'=>'nulo','disc'=>$disc,'ms'=>'ms','rs'=>'rs'));
                        $resultado= $query->getResult();
                    }
                    // +++++++ Domingo +++++++
                    //+++++++++++++++++++++++
                    if ($dia=='domingo'){
                        $em = $this->getDoctrine()->getManager();
                        $query = $em->createQuery(
                            'SELECT p
                            FROM PfaSistemaBundle:AlumnoPago p
                            WHERE (p.domingo <>:nulo) AND (p.disciplina1=:disc) AND (p.tipo= :ms OR p.tipo= :rs )'
                        )->setParameters(array('nulo'=>'nulo','disc'=>$disc,'ms'=>'ms','rs'=>'rs'));
                        $resultado= $query->getResult();
                    }
                
            }

            // ++++++++++++++++++++++++++++++++++++++++++++
            // ++++++++ V F F +++++++++++++++++++++++++++++
            // ++++++++++++++++++++++++++++++++++++++++++++
             if( ($disc!='0')&&($hora=='0')&&($dia=='0') ){

                    $em = $this->getDoctrine()->getManager();
                    $query = $em->createQuery(
                        'SELECT p
                        FROM PfaSistemaBundle:AlumnoPago p
                        WHERE (p.disciplina1 = :disc) AND (p.tipo= :ms OR p.tipo= :rs )'
                    )->setParameters(array('disc'=>$disc,'ms'=>'ms','rs'=>'rs'));
                    $resultado= $query->getResult();
             }

            // ++++++++++++++++++++++++++++++++++++++++++++
            // ++++++++ F V V +++++++++++++++++++++++++++++
            // ++++++++++++++++++++++++++++++++++++++++++++
             if( ($disc=='0')&&($hora!='0')&&($dia!='0') ){

                // +++++++ Lunes +++++++
                //+++++++++++++++++++++++
                if ($dia=='lunes'){
                    $em = $this->getDoctrine()->getManager();
                    $query = $em->createQuery(
                        'SELECT p
                        FROM PfaSistemaBundle:AlumnoPago p
                        WHERE (p.lunes = :hora) AND (p.tipo= :ms OR p.tipo= :rs )'
                    )->setParameters(array('hora'=> $hora,'ms'=>'ms','rs'=>'rs'));
                    $resultado= $query->getResult();
                }
                // +++++++ Martes +++++++
                //+++++++++++++++++++++++
                if ($dia=='martes'){
                    $em = $this->getDoctrine()->getManager();
                    $query = $em->createQuery(
                        'SELECT p
                        FROM PfaSistemaBundle:AlumnoPago p
                        WHERE (p.martes =:hora ) AND (p.tipo= :ms OR p.tipo= :rs )'
                    )->setParameters(array('hora'=> $hora,'ms'=>'ms','rs'=>'rs'));
                    $resultado= $query->getResult();
                }
                // +++++++ Miercoles +++++++
                //+++++++++++++++++++++++
                if ($dia=='miercoles'){
                    $em = $this->getDoctrine()->getManager();
                    $query = $em->createQuery(
                        'SELECT p
                        FROM PfaSistemaBundle:AlumnoPago p
                        WHERE (p.miercoles = :hora ) AND (p.tipo= :ms OR p.tipo= :rs )'
                    )->setParameters(array('hora'=> $hora,'ms'=>'ms','rs'=>'rs'));
                    $resultado= $query->getResult();
                }
                // +++++++ Jueves +++++++
                //+++++++++++++++++++++++
                if ($dia=='jueves'){
                    $em = $this->getDoctrine()->getManager();
                    $query = $em->createQuery(
                        'SELECT p
                        FROM PfaSistemaBundle:AlumnoPago p
                        WHERE (p.jueves = :hora ) AND (p.tipo= :ms OR p.tipo= :rs )'
                    )->setParameters(array('hora'=> $hora,'ms'=>'ms','rs'=>'rs'));
                    $resultado= $query->getResult();
                }
                // +++++++ Viernes +++++++
                //+++++++++++++++++++++++
                if ($dia=='viernes'){
                    $em = $this->getDoctrine()->getManager();
                    $query = $em->createQuery(
                        'SELECT p
                        FROM PfaSistemaBundle:AlumnoPago p
                        WHERE (p.viernes = :hora) AND (p.tipo= :ms OR p.tipo= :rs )'
                    )->setParameters(array('hora'=> $hora,'ms'=>'ms','rs'=>'rs'));
                    $resultado= $query->getResult();
                }
                // +++++++ Sabado +++++++
                //+++++++++++++++++++++++
                if ($dia=='sabado'){
                    $em = $this->getDoctrine()->getManager();
                    $query = $em->createQuery(
                        'SELECT p
                        FROM PfaSistemaBundle:AlumnoPago p
                        WHERE (p.sabado = :hora) AND (p.tipo= :ms OR p.tipo= :rs )'
                    )->setParameters(array('hora'=> $hora,'ms'=>'ms','rs'=>'rs'));
                    $resultado= $query->getResult();
                }
                // +++++++ Domingo +++++++
                //+++++++++++++++++++++++
                if ($dia=='domingo'){
                    $em = $this->getDoctrine()->getManager();
                    $query = $em->createQuery(
                        'SELECT p
                        FROM PfaSistemaBundle:AlumnoPago p
                        WHERE (p.domingo = :hora) AND (p.tipo= :ms OR p.tipo= :rs )'
                    )->setParameters(array('hora'=> $hora,'ms'=>'ms','rs'=>'rs'));
                    $resultado= $query->getResult();
                }
            
            }

            // ++++++++++++++++++++++++++++++++++++++++++++
            // ++++++++ F V F +++++++++++++++++++++++++++++
            // ++++++++++++++++++++++++++++++++++++++++++++
             if( ($disc=='0')&&($hora!='0')&&($dia=='0') ){

                    $em = $this->getDoctrine()->getManager();
                    $query = $em->createQuery(
                        'SELECT p
                        FROM PfaSistemaBundle:AlumnoPago p
                        WHERE ( (p.lunes = :hora ) OR
                        (p.martes = :hora) OR
                        (p.miercoles = :hora) OR
                        (p.jueves = :hora ) OR
                        (p.viernes = :hora) OR
                        (p.sabado = :hora ) OR
                        (p.domingo = :hora) ) AND (p.tipo= :ms OR p.tipo= :rs ) '
                    )->setParameters(array('hora'=> $hora,'ms'=>'ms','rs'=>'rs'));
                    $resultado= $query->getResult();
                
             }

            // ++++++++++++++++++++++++++++++++++++++++++++
            // ++++++++ F F V +++++++++++++++++++++++++++++
            // ++++++++++++++++++++++++++++++++++++++++++++
            if( ($disc=='0')&&($hora=='0')&&($dia!='0') ){

                // +++++++ Lunes +++++++
                //+++++++++++++++++++++++
                if ($dia=='lunes'){
                    $em = $this->getDoctrine()->getManager();
                    $query = $em->createQuery(
                        'SELECT p
                        FROM PfaSistemaBundle:AlumnoPago p
                        WHERE (p.lunes <> :nulo) AND (p.tipo= :ms OR p.tipo= :rs ) '
                    )->setParameters(array('nulo'=> 'nulo','ms'=>'ms','rs'=>'rs'));
                    $resultado= $query->getResult();
                }

                // +++++++ Martes +++++++
                //+++++++++++++++++++++++
                if ($dia=='martes'){
                    $em = $this->getDoctrine()->getManager();
                    $query = $em->createQuery(
                        'SELECT p
                        FROM PfaSistemaBundle:AlumnoPago p
                        WHERE (p.martes <> :nulo) AND (p.tipo= :ms OR p.tipo= :rs ) '
                    )->setParameters(array('nulo'=> 'nulo','ms'=>'ms','rs'=>'rs'));
                    $resultado= $query->getResult();
                }

                 // +++++++ Miercoles +++++++
                //+++++++++++++++++++++++
                if ($dia=='miercoles'){
                    $em = $this->getDoctrine()->getManager();
                    $query = $em->createQuery(
                        'SELECT p
                        FROM PfaSistemaBundle:AlumnoPago p
                        WHERE (p.miercoles <> :nulo) AND (p.tipo= :ms OR p.tipo= :rs ) '
                    )->setParameters(array('nulo'=> 'nulo','ms'=>'ms','rs'=>'rs'));
                    $resultado= $query->getResult();
                }

                // +++++++ Jueves +++++++
                //+++++++++++++++++++++++
                if ($dia=='jueves'){
                    $em = $this->getDoctrine()->getManager();
                    $query = $em->createQuery(
                        'SELECT p
                        FROM PfaSistemaBundle:AlumnoPago p
                        WHERE (p.jueves <> :nulo) AND (p.tipo= :ms OR p.tipo= :rs ) '
                    )->setParameters(array('nulo'=> 'nulo','ms'=>'ms','rs'=>'rs'));
                    $resultado= $query->getResult();
                }

                // +++++++ Viernes +++++++
                //+++++++++++++++++++++++
                if ($dia=='viernes'){
                    $em = $this->getDoctrine()->getManager();
                    $query = $em->createQuery(
                        'SELECT p
                        FROM PfaSistemaBundle:AlumnoPago p
                        WHERE (p.viernes <> :nulo) AND (p.tipo= :ms OR p.tipo= :rs ) '
                    )->setParameters(array('nulo'=> 'nulo','ms'=>'ms','rs'=>'rs'));
                    $resultado= $query->getResult();
                }

                 // +++++++ Sabado+++++++
                //+++++++++++++++++++++++
                if ($dia=='sabado'){
                    $em = $this->getDoctrine()->getManager();
                    $query = $em->createQuery(
                        'SELECT p
                        FROM PfaSistemaBundle:AlumnoPago p
                        WHERE (p.sabado <> :nulo) AND (p.tipo= :ms OR p.tipo= :rs ) '
                    )->setParameters(array('nulo'=> 'nulo','ms'=>'ms','rs'=>'rs'));
                    $resultado= $query->getResult();
                }

                // +++++++ Domingo +++++++
                //+++++++++++++++++++++++
                if ($dia=='jueves'){
                    $em = $this->getDoctrine()->getManager();
                    $query = $em->createQuery(
                        'SELECT p
                        FROM PfaSistemaBundle:AlumnoPago p
                        WHERE (p.domingo<> :nulo) AND (p.tipo= :ms OR p.tipo= :rs ) '
                    )->setParameters(array('nulo'=> 'nulo','ms'=>'ms','rs'=>'rs'));
                    $resultado= $query->getResult();
                }
            
            }

            // ++++++++++++++++++++++++++++++++++++++++++++
            // ++++++++ F F F +++++++++++++++++++++++++++++
            // ++++++++++++++++++++++++++++++++++++++++++++
             if( ($disc=='0')&&($hora=='0')&&($dia=='0') ){

                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery(
                    'SELECT  p 
                    FROM  PfaSistemaBundle:AlumnoPago p 
                    WHERE (p.tipo= :ms OR p.tipo= :rs ) '                
                )->setParameters(array('ms'=>'ms','rs'=>'rs'));
                $resultado= $query->getResult();
            
            }


            return $this->render('PfaSistemaBundle::filtro.html.twig', array(
            'form' => $form->createView(),'resultado' => $resultado,'vence'=> $vence));
        }
        return $this->render('PfaSistemaBundle::filtro.html.twig', array(
            'form' => $form->createView(),'resultado' => $resultado,'vence'=>$vence));
    }

}