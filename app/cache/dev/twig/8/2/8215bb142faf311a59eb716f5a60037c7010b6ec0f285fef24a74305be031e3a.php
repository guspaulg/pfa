<?php

/* PfaSistemaBundle::alumno.html.twig */
class __TwigTemplate_8215bb142faf311a59eb716f5a60037c7010b6ec0f285fef24a74305be031e3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc2e6f746d6556c5bf71eca3cc2b0bf06bad03d7bc3ab31ad7d8808a978680d8 = $this->env->getExtension("native_profiler");
        $__internal_fc2e6f746d6556c5bf71eca3cc2b0bf06bad03d7bc3ab31ad7d8808a978680d8->enter($__internal_fc2e6f746d6556c5bf71eca3cc2b0bf06bad03d7bc3ab31ad7d8808a978680d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PfaSistemaBundle::alumno.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>

<title>Peru Fight academy</title>  

\t<Link  href = \"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/detalle_alumno.css"), "html", null, true);
        echo "\" rel = \"stylesheet\" type = \"text/css\"  />

\ttitle>Fight and Fitness</title>


 \t<link href = \"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
\t<link href = \"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/lomio.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" >
\t<link href = \"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" >

\t<script src = \"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://code.jquery.com/jquery.js"), "html", null, true);
        echo "\"></script>
\t<script src = \"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

\t<script type=\"text/javascript\">

\t    function mostrar(){
\t        document.getElementById('rematricula').style.display='block';
\t    }
\t    function mostrar2(){
\t        document.getElementById('rematricula').style.display='none';
\t    }

\t</script>




</head>

<body>

\t<nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container-fluid\">
      \t<a href=\"http://www.incuba.pe\"><img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("imagenes/logo4.png"), "html", null, true);
        echo "\" class=\"logo\"></a>
        <div class=\"navbar-header\">
          <a class=\"navbar-brand\" href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("logout", array("slug" => ""));
        echo "\" >Cerrar Sesión</a>
        </div>
        
      </div>
    </nav>

    <div class=\"container-fluid\">
      \t<div class=\"row\">
\t        <div class=\"col-md-2 sidebar\">
\t\t          <ul class=\"nav nav-sidebar\">
\t\t\t            <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("pfa_sistema_homepage", array("slug" => ""));
        echo "\">Inicio <span class=\"sr-only\">(current)</span></a></li>
\t\t\t            
\t\t\t            <li><a href= \"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("Formulario", array("slug" => ""));
        echo "\"  >Matricular</a></li>

\t\t\t            <li><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("buscar", array("slug" => ""));
        echo "\">Buscar</a></li>

\t\t\t            <li><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("filtrar", array("slug" => ""));
        echo "\">Filtrar</a></li>

\t\t\t            <li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("agentes", array("slug" => ""));
        echo "\">Agentes</a></li>   

\t\t\t            <li><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("ingresos", array("slug" => ""));
        echo "\">Ingresos</a></li>
\t\t          </ul>
\t        
\t        </div>

\t        <div class=\"col-md-5 col-md-offset-2\">

\t        \t<div id=\"cuadro2\">

\t        \t<a title=\"ASISTENCIA\" href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("asistencia", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" class=\"aimagen\">\t
\t    \t\t\t<img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("imagenes/asistencia.png"), "html", null, true);
        echo "\"/>
\t    \t\t</a>
\t\t\t\t
\t\t\t\t<a title=\"EDITAR\" href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editar", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" class=\"aimagen\">\t
\t    \t\t\t<img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("imagenes/actualizar.png"), "html", null, true);
        echo "\"/>
\t    \t\t</a>

\t    \t\t<a title=\"MATRICULAR\" href=\"#\" class=\"aimagen\" onclick=\"mostrar()\">\t
\t    \t\t\t<img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("imagenes/rematricula.png"), "html", null, true);
        echo "\"/>
\t    \t\t</a>

\t    \t\t<div class=\"nombre\">
\t    \t\t</br>
\t\t    \t\t
\t\t    \t\t";
        // line 85
        if ((twig_date_converter($this->env, $this->getAttribute($this->getAttribute((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")), 0, array(), "array"), "fechafinal", array())) > twig_date_converter($this->env))) {
            // line 86
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 87
            if ((twig_date_converter($this->env, $this->getAttribute($this->getAttribute((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")), 0, array(), "array"), "fechafinal", array())) < twig_date_converter($this->env, "+10days"))) {
                // line 88
                echo "
\t\t\t\t\t\t\t<div class=\"fila_1_r\"> ";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "apellidop", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "apellidom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "nombre", array()), "html", null, true);
                echo " </div> 

\t\t\t\t\t\t\t";
            } else {
                // line 91
                echo "\t

\t\t\t\t\t\t\t<div class=\"fila_1_v\"> ";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "apellidop", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "apellidom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "nombre", array()), "html", null, true);
                echo " </div> 

\t\t\t\t\t\t\t";
            }
            // line 96
            echo "
\t\t\t\t\t";
        }
        // line 98
        echo "
\t\t\t\t\t";
        // line 99
        if ((twig_date_converter($this->env, $this->getAttribute($this->getAttribute((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")), 0, array(), "array"), "fechafinal", array())) < twig_date_converter($this->env))) {
            // line 100
            echo "
\t\t\t\t\t\t\t<div class=\"fila_1_n\"> ";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "apellidop", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "apellidom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "nombre", array()), "html", null, true);
            echo " </div> 
\t\t\t\t\t
\t\t\t\t\t";
        }
        // line 104
        echo "

\t\t    \t</div>

\t\t    \t<hr>

\t\t    \t<div>
\t\t    \t\t<div id=\"casistencia\">
\t\t    \t\t\t<div  class=\"datos\">
\t\t    \t\t\t\tAsistencias a la fecha
\t\t    \t\t\t</div>
\t\t    \t\t\t<div class=\"asistencia\">
\t\t    \t\t\t\t";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")), 0, array(), "array"), "vecesasistencia", array()), "html", null, true);
        echo "
\t\t    \t\t\t</div>

\t\t    \t\t</div> 

\t\t    \t\t<div id=\"casistencia2\">
\t\t    \t\t\t<div class=\"datos\">
\t\t    \t\t\t\tde un total de:
\t\t    \t\t\t</div>
\t\t    \t\t\t<div class=\"asistencia\">
\t\t    \t\t\t\t";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")), 0, array(), "array"), "vecestotales", array()), "html", null, true);
        echo "
\t\t    \t\t\t</div>

\t\t    \t\t</div> 

\t\t    \t</div>

\t\t    \t<div class=\"datos\">
\t\t\t    \t<p>
\t\t\t    \t\tDni: ";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "dni", array()), "html", null, true);
        echo " <br>
\t\t\t    \t\tTélefono Fijo: ";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "telefonof", array()), "html", null, true);
        echo " <br>
\t\t\t    \t\tTélefono Celular: ";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "telefonoc", array()), "html", null, true);
        echo " <br>
\t\t\t    \t\tCorreo: ";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "email", array()), "html", null, true);
        echo " <br>
\t\t\t    \t\tCumpleaños: ";
        // line 139
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "cumple", array()), "m/d/Y"), "html", null, true);
        echo " <br>
\t\t\t    \t</p> 
\t\t    \t</div>

\t\t    \t<h2 class=\"sub-header\">Horario</h2>
         \t\t<div class=\"table-responsive\">

         \t\t\t<table class=\"table table-striped\">

\t\t              \t<thead>
\t\t\t                <tr>
\t\t\t                  <th>Lunes</th>
\t\t\t                  <th>Martes</th>
\t\t\t                  <th>Miercoles</th>
\t\t\t                  <th>Jueves</th>
\t\t\t                  <th>Viernes</th>
\t\t\t                  <th>Sabado</th>
\t\t\t                  <th>Domingo</th>
\t\t\t                </tr>
\t\t              \t</thead>

\t\t              \t<tbody>
\t               
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td > ";
        // line 163
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")), 0, array(), "array"), "lunes", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t<td > ";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")), 0, array(), "array"), "martes", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t<td > ";
        // line 165
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")), 0, array(), "array"), "miercoles", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t<td > ";
        // line 166
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")), 0, array(), "array"), "jueves", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t<td > ";
        // line 167
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")), 0, array(), "array"), "viernes", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t<td > ";
        // line 168
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")), 0, array(), "array"), "sabado", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t<td > ";
        // line 169
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")), 0, array(), "array"), "domingo", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t              
\t\t              \t</tbody>
\t\t            </table>

\t\t            <h2 class=\"sub-header\">Historial de Matricula</h2>
\t\t\t    \t<table class=\"table table-striped\">

\t\t              \t<thead>
\t\t\t                <tr>
\t\t\t                  <th>F. Inicio</th>
\t\t\t                  <th>F. Final</th>
\t\t\t                  <th>Disciplina</th>
\t\t\t                  <th>Precio</th>
\t\t\t                  <th>Pago</th>
\t\t\t                  <th>Agente</th>
\t\t\t                </tr>
\t\t              \t</thead>

\t\t              \t<tbody>
\t                
\t\t              \t\t";
        // line 191
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alumnop"]) ? $context["alumnop"] : $this->getContext($context, "alumnop")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 192
            echo "
\t\t\t\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t\t\t\t<td > ";
            // line 195
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["result"], "fechainicio", array()), "d/m/Y"), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t\t\t\t<td > ";
            // line 197
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["result"], "fechafinal", array()), "d/m/Y"), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t\t\t\t";
            // line 199
            $context["disc"] = "";
            // line 200
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context["disc2"] = "";
            // line 201
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context["disc3"] = "";
            // line 202
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context["disc4"] = "";
            // line 203
            echo "
\t\t\t\t\t\t\t\t\t\t";
            // line 204
            if (($this->getAttribute($context["result"], "disciplina1", array()) == "1")) {
                echo "  ";
                $context["disc"] = "MT";
                echo " ";
            }
            // line 205
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["result"], "disciplina1", array()) == "2")) {
                echo "  ";
                $context["disc"] = "MM";
                echo " ";
            }
            // line 206
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["result"], "disciplina1", array()) == "3")) {
                echo "  ";
                $context["disc"] = "B";
                echo " ";
            }
            // line 207
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["result"], "disciplina1", array()) == "4")) {
                echo "  ";
                $context["disc"] = "J";
                echo " ";
            }
            // line 208
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["result"], "disciplina1", array()) == "5")) {
                echo "  ";
                $context["disc"] = "V";
                echo " ";
            }
            // line 209
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["result"], "disciplina1", array()) == "6")) {
                echo "  ";
                $context["disc"] = "EF";
                echo " ";
            }
            // line 210
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["result"], "disciplina1", array()) == "7")) {
                echo "  ";
                $context["disc"] = "Y";
                echo " ";
            }
            // line 211
            echo "
\t\t\t\t\t\t\t\t\t\t";
            // line 212
            if (($this->getAttribute($context["result"], "disciplina2", array()) == "1")) {
                echo "  ";
                $context["disc2"] = " - MT";
                echo " ";
            }
            // line 213
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["result"], "disciplina2", array()) == "2")) {
                echo "  ";
                $context["disc2"] = " - MM";
                echo " ";
            }
            // line 214
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["result"], "disciplina2", array()) == "3")) {
                echo "  ";
                $context["disc2"] = " - B";
                echo " ";
            }
            // line 215
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["result"], "disciplina2", array()) == "4")) {
                echo "  ";
                $context["disc2"] = " - J";
                echo " ";
            }
            // line 216
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["result"], "disciplina2", array()) == "6")) {
                echo "  ";
                $context["disc2"] = " - EF";
                echo " ";
            }
            // line 217
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["result"], "disciplina2", array()) == "7")) {
                echo "  ";
                $context["disc2"] = " - Y";
                echo " ";
            }
            // line 218
            echo "

\t\t\t\t\t\t\t\t\t\t";
            // line 220
            if (($this->getAttribute($context["result"], "disciplina3", array()) == "1")) {
                echo "  ";
                $context["disc3"] = " - MT";
                echo " ";
            }
            // line 221
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["result"], "disciplina3", array()) == "2")) {
                echo "  ";
                $context["disc3"] = " - MM";
                echo " ";
            }
            // line 222
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["result"], "disciplina3", array()) == "3")) {
                echo "  ";
                $context["disc3"] = " - B";
                echo " ";
            }
            // line 223
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["result"], "disciplina3", array()) == "4")) {
                echo "  ";
                $context["disc3"] = " - J";
                echo " ";
            }
            // line 224
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["result"], "disciplina3", array()) == "6")) {
                echo "  ";
                $context["disc3"] = " - EF";
                echo " ";
            }
            // line 225
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["result"], "disciplina3", array()) == "7")) {
                echo "  ";
                $context["disc3"] = " - Y";
                echo " ";
            }
            // line 226
            echo "

\t\t\t\t\t\t\t\t\t\t";
            // line 228
            if (($this->getAttribute($context["result"], "disciplina4", array()) == "1")) {
                echo "  ";
                $context["disc4"] = " - MT";
                echo " ";
            }
            // line 229
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["result"], "disciplina4", array()) == "2")) {
                echo "  ";
                $context["disc4"] = " - MM";
                echo " ";
            }
            // line 230
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["result"], "disciplina4", array()) == "3")) {
                echo "  ";
                $context["disc4"] = " - B";
                echo " ";
            }
            // line 231
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["result"], "disciplina4", array()) == "4")) {
                echo "  ";
                $context["disc4"] = " - J";
                echo " ";
            }
            // line 232
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["result"], "disciplina4", array()) == "6")) {
                echo "  ";
                $context["disc4"] = "- EF";
                echo " ";
            }
            // line 233
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["result"], "disciplina4", array()) == "7")) {
                echo "  ";
                $context["disc4"] = " - Y";
                echo " ";
            }
            // line 234
            echo "

\t\t\t\t\t\t\t\t\t\t<td>";
            // line 236
            echo twig_escape_filter($this->env, (isset($context["disc"]) ? $context["disc"] : $this->getContext($context, "disc")), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, (isset($context["disc2"]) ? $context["disc2"] : $this->getContext($context, "disc2")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["disc3"]) ? $context["disc3"] : $this->getContext($context, "disc3")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["disc4"]) ? $context["disc4"] : $this->getContext($context, "disc4")), "html", null, true);
            echo " </td>

\t\t\t\t\t\t\t\t\t\t<td> S/. ";
            // line 238
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "precio", array()), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t\t\t\t";
            // line 240
            if (($this->getAttribute($context["result"], "tipodepago", array()) == "1")) {
                // line 241
                echo "\t\t\t\t\t\t\t\t\t\t<td>Efec</td>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 243
            echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
            // line 244
            if (($this->getAttribute($context["result"], "tipodepago", array()) == "2")) {
                // line 245
                echo "\t\t\t\t\t\t\t\t\t\t<td> Tar</td>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 247
            echo "
\t\t\t\t\t\t\t\t\t\t";
            // line 248
            if (($this->getAttribute($context["result"], "agente", array()) == "1")) {
                // line 249
                echo "\t\t\t\t\t\t\t\t\t\t<td>Arturo</td>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 251
            echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
            // line 252
            if (($this->getAttribute($context["result"], "agente", array()) == "2")) {
                // line 253
                echo "\t\t\t\t\t\t\t\t\t\t<td> Cristina</td>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 255
            echo "
\t\t\t\t\t\t\t\t\t\t";
            // line 256
            if (($this->getAttribute($context["result"], "agente", array()) == "3")) {
                // line 257
                echo "\t\t\t\t\t\t\t\t\t\t<td>Veronica</td>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 259
            echo "
\t\t\t\t\t\t\t\t\t\t";
            // line 260
            if (($this->getAttribute($context["result"], "agente", array()) == "4")) {
                // line 261
                echo "\t\t\t\t\t\t\t\t\t\t<td> Jose</td>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 263
            echo "
\t\t\t\t\t\t\t\t\t\t";
            // line 264
            if (($this->getAttribute($context["result"], "agente", array()) == "5")) {
                // line 265
                echo "\t\t\t\t\t\t\t\t\t\t<td>Viviane</td>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 267
            echo "
\t\t\t\t\t\t\t\t\t\t";
            // line 268
            if (($this->getAttribute($context["result"], "agente", array()) == "6")) {
                // line 269
                echo "\t\t\t\t\t\t\t\t\t\t<td> Luigi</td>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 271
            echo "
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 274
        echo "\t\t\t                
\t\t              \t</tbody>
\t\t            </table>

\t\t        </div>


      \t\t</div>
    \t</div> 


        <div class=\"col-md-3 nuevamatricula\" id=\"rematricula\">

            ";
        // line 287
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 288
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
         
            <div class=\"nuevamatriculatext\"> Nueva Matricula del Alumno: </div>

            <div>
            \t</br>
            \t<div>
                    <div class=\"col-sm-4\"> 
                    Inicio
                    </div>
                    <div class=\"col-sm-8\"> 
                    ";
        // line 299
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha_inicio", array()), 'errors');
        echo "
                    ";
        // line 300
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha_inicio", array()), 'widget', array("attr" => array("class" => "form-group", "type" => "datetime")));
        echo "
                    </div>
                </div>
                </br></br>

                <div>
                    <div class=\"col-sm-6\">
                    ";
        // line 307
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "meses", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-6\">
                    ";
        // line 310
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "meses", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                </br></br>

                <div>
\t                <div class=\"col-sm-6\">
\t                    ";
        // line 317
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "veces", array()), 'label');
        echo "
\t                </div>
\t                <div class=\"col-sm-6\">
\t                    ";
        // line 320
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "veces", array()), 'errors');
        echo "
\t                    ";
        // line 321
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "veces", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t                </div>
                </div>
                </br></br></br></br>
                <div>
                \t<div class=\"col-sm-6\">
                    Disciplina 1
                    </div>
                    <div class=\"col-sm-6\">
                    ";
        // line 330
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disc1", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                </br> </br>
                <div>
                    <div class=\"col-sm-6\">
                    Disciplina 2
                    </div>
                    <div class=\"col-sm-6\">
                    ";
        // line 339
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disc2", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                </br></br>
                <div>
                    <div class=\"col-sm-6\">
                    Disciplina 3
                    </div>
                    <div class=\"col-sm-6\">
                    ";
        // line 348
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disc3", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                </br></br>
                <div>
                    <div class=\"col-sm-6\">
                    Disciplina 4
                    </div>
                    <div class=\"col-sm-6\">
                    ";
        // line 357
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disc4", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                </br></br>



                 </br></br>
                <div>
                    <div class=\"col-sm-6\">
                    ";
        // line 367
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lunes", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-6\">
                    ";
        // line 370
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lunes", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                </br></br>
                <div>
                    <div class=\"col-sm-6\">
                    ";
        // line 376
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "martes", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-6\">
                    ";
        // line 379
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "martes", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                </br></br>
                <div>
                    <div class=\"col-sm-6\">
                    ";
        // line 385
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "miercoles", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-6\">
                    ";
        // line 388
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "miercoles", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                </br></br>
                <div>
                    <div class=\"col-sm-6\">
                    ";
        // line 394
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jueves", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-6\">
                    ";
        // line 397
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jueves", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                </br></br>
                <div>
                    <div class=\"col-sm-6\">
                    ";
        // line 403
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "viernes", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-6\">
                    ";
        // line 406
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "viernes", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                </br></br>
                <div>
                    <div class=\"col-sm-6\">
                    ";
        // line 412
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sabado", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-6\">
                    ";
        // line 415
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sabado", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                </br></br>
                 <div>
                    <div class=\"col-sm-6\">
                    ";
        // line 421
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "domingo", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-6\">
                    ";
        // line 424
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "domingo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                </br></br>

                <div>
                    <div class=\"col-sm-6\">
                        ¿ Quien matricula?
                    </div>
                    <div class=\"col-sm-6\">
                        ";
        // line 434
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "agente", array()), 'errors');
        echo "
                        ";
        // line 435
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "agente", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                </br></br></br>

                <div>
                    ";
        // line 442
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipodepago", array()), 'errors');
        echo "
                    ";
        // line 443
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipodepago", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
\t\t\t\t</br>                
                <div>
                    ";
        // line 447
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precio", array()), 'errors');
        echo "
                    ";
        // line 448
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precio", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "S/. Monto en soles")));
        echo "
                </div>
                </br>
                <div class=\"col-sm-5\">
                 ";
        // line 452
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matricular", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
                </div> 

                <div class=\"col-sm-5 btn btn-primary rojop\" onclick=\"mostrar2()\">
                 Cancelar
                </div>  

            </div>
                     
            ";
        // line 461
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

        </div>

    </div>\t  
    </br></br></br></br>

 </div> 
  
  

</body>
</html>";
        
        $__internal_fc2e6f746d6556c5bf71eca3cc2b0bf06bad03d7bc3ab31ad7d8808a978680d8->leave($__internal_fc2e6f746d6556c5bf71eca3cc2b0bf06bad03d7bc3ab31ad7d8808a978680d8_prof);

    }

    public function getTemplateName()
    {
        return "PfaSistemaBundle::alumno.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  955 => 461,  943 => 452,  936 => 448,  932 => 447,  925 => 443,  921 => 442,  911 => 435,  907 => 434,  894 => 424,  888 => 421,  879 => 415,  873 => 412,  864 => 406,  858 => 403,  849 => 397,  843 => 394,  834 => 388,  828 => 385,  819 => 379,  813 => 376,  804 => 370,  798 => 367,  785 => 357,  773 => 348,  761 => 339,  749 => 330,  737 => 321,  733 => 320,  727 => 317,  717 => 310,  711 => 307,  701 => 300,  697 => 299,  683 => 288,  679 => 287,  664 => 274,  656 => 271,  652 => 269,  650 => 268,  647 => 267,  643 => 265,  641 => 264,  638 => 263,  634 => 261,  632 => 260,  629 => 259,  625 => 257,  623 => 256,  620 => 255,  616 => 253,  614 => 252,  611 => 251,  607 => 249,  605 => 248,  602 => 247,  598 => 245,  596 => 244,  593 => 243,  589 => 241,  587 => 240,  582 => 238,  571 => 236,  567 => 234,  560 => 233,  553 => 232,  546 => 231,  539 => 230,  532 => 229,  526 => 228,  522 => 226,  515 => 225,  508 => 224,  501 => 223,  494 => 222,  487 => 221,  481 => 220,  477 => 218,  470 => 217,  463 => 216,  456 => 215,  449 => 214,  442 => 213,  436 => 212,  433 => 211,  426 => 210,  419 => 209,  412 => 208,  405 => 207,  398 => 206,  391 => 205,  385 => 204,  382 => 203,  379 => 202,  376 => 201,  373 => 200,  371 => 199,  366 => 197,  361 => 195,  356 => 192,  352 => 191,  327 => 169,  323 => 168,  319 => 167,  315 => 166,  311 => 165,  307 => 164,  303 => 163,  276 => 139,  272 => 138,  268 => 137,  264 => 136,  260 => 135,  248 => 126,  235 => 116,  221 => 104,  211 => 101,  208 => 100,  206 => 99,  203 => 98,  199 => 96,  189 => 93,  185 => 91,  175 => 89,  172 => 88,  170 => 87,  167 => 86,  165 => 85,  156 => 79,  149 => 75,  145 => 74,  139 => 71,  135 => 70,  123 => 61,  118 => 59,  113 => 57,  108 => 55,  103 => 53,  98 => 51,  85 => 41,  80 => 39,  55 => 17,  51 => 16,  46 => 14,  42 => 13,  38 => 12,  30 => 7,  22 => 1,);
    }
}
