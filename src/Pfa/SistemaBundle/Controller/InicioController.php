<?php

namespace Pfa\SistemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session; 
use Pfa\SistemaBundle\Entity\Alumno; 
use Pfa\SistemaBundle\Entity\AlumnoPago;

class InicioController extends Controller 
{
    
    //******con este controlador muestro la pantalla principal**********

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT a
               FROM PfaSistemaBundle:Alumno a
               ORDER BY a.apellidop ASC'
        );
         
        $resultado= $query->getResult();
        	
    	if (!$resultado) {
        	throw $this->createNotFoundException(
            	'No se encontraron alumnos'
        	);
    	}


    	return $this->render('PfaSistemaBundle::index.html.twig', array(
            'resultado' => $resultado, ));
    }

//.................................................................

}