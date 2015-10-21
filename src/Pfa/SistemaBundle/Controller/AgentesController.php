<?php

namespace Pfa\SistemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session; 

use Pfa\SistemaBundle\Form\IngresosType;
use Pfa\SistemaBundle\Entity\Ingresos;


class AgentesController extends Controller 
{
    
    //****** con este controlador muestro la pantalla principal **********

    public function verAction(Request $request)
    {

        $ingresos = new Ingresos();
        $ingresos->setFechaInicio(new \DateTime('now'));
        $ingresos->setFechaFinal(new \DateTime('now'));
        $form = $this->createForm(new IngresosType(), $ingresos);
        $form->handleRequest($request);
        $resultado=null;
        $fechai=null;
        $fechaf=null;

        if ($form->isValid() )
        {
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery(
                'SELECT p
                FROM PfaSistemaBundle:AlumnoPago p
                WHERE (p.tipo= :ms OR p.tipo= :mn )'
            )->setParameters(array('ms'=>'ms','mn'=>'mn'));
            $resultado= $query->getResult();

            $fechai = $ingresos->getFechaInicio();            
            $fechaf = $ingresos->getFechaFinal();

            return $this->render('PfaSistemaBundle::agentes.html.twig', array(
            'form' => $form->createView(),'resultado' => $resultado,'fechai'=> $fechai,'fechaf'=> $fechaf));
        }

        return $this->render('PfaSistemaBundle::agentes.html.twig', array(
            'form' => $form->createView(),'resultado' => $resultado,'fechai'=> $fechai,'fechaf'=> $fechaf));
    }

}