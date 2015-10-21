<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/login')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'Pfa\\SistemaBundle\\Controller\\LoginController::entrarAction',  '_route' => 'login',);
            }

            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

        }

        if (0 === strpos($pathinfo, '/g')) {
            // pfa_sistema_homepage
            if ($pathinfo === '/ginicio') {
                return array (  '_controller' => 'Pfa\\SistemaBundle\\Controller\\InicioController::indexAction',  '_route' => 'pfa_sistema_homepage',);
            }

            // Formulario
            if (rtrim($pathinfo, '/') === '/gformulario') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'Formulario');
                }

                return array (  '_controller' => 'Pfa\\SistemaBundle\\Controller\\MatriculaController::formularioAction',  '_route' => 'Formulario',);
            }

        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        if (0 === strpos($pathinfo, '/g')) {
            // alumno
            if (0 === strpos($pathinfo, '/galumno') && preg_match('#^/galumno/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'alumno')), array (  '_controller' => 'Pfa\\SistemaBundle\\Controller\\AlumnoController::mostrarAction',));
            }

            // filtrar
            if ($pathinfo === '/gfiltrar') {
                return array (  '_controller' => 'Pfa\\SistemaBundle\\Controller\\FiltroController::buscarAction',  '_route' => 'filtrar',);
            }

            // buscar
            if ($pathinfo === '/gbuscar') {
                return array (  '_controller' => 'Pfa\\SistemaBundle\\Controller\\AlumnoController::buscarAction',  '_route' => 'buscar',);
            }

            // ingresos
            if ($pathinfo === '/gingresos') {
                return array (  '_controller' => 'Pfa\\SistemaBundle\\Controller\\IngresosController::buscarAction',  '_route' => 'ingresos',);
            }

            // asistencia
            if (0 === strpos($pathinfo, '/gasistencia') && preg_match('#^/gasistencia/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'asistencia')), array (  '_controller' => 'Pfa\\SistemaBundle\\Controller\\AlumnoController::asistenciaAction',));
            }

            // editar
            if (0 === strpos($pathinfo, '/geditar') && preg_match('#^/geditar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editar')), array (  '_controller' => 'Pfa\\SistemaBundle\\Controller\\AlumnoController::editarAction',));
            }

            // agentes
            if ($pathinfo === '/gagentes') {
                return array (  '_controller' => 'Pfa\\SistemaBundle\\Controller\\AgentesController::verAction',  '_route' => 'agentes',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
