<?php

/* PfaSistemaBundle::index.html.twig */
class __TwigTemplate_9867148d7feae35458244f959721a3fec061fa6e4a18d0d613cb27703fe3a6dc extends Twig_Template
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
        $__internal_f5b805266483493ead024364cf8cf7690f4926a359706c205b17faed9d4427ca = $this->env->getExtension("native_profiler");
        $__internal_f5b805266483493ead024364cf8cf7690f4926a359706c205b17faed9d4427ca->enter($__internal_f5b805266483493ead024364cf8cf7690f4926a359706c205b17faed9d4427ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PfaSistemaBundle::index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>

\t<title>Peru Fight academy</title>


 \t<link href = \"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
\t<link href = \"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/lomio.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" >
\t<link href = \"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" >

\t<link href = \"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("//cdn.datatables.net/1.10.9/css/jquery.dataTables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" >

\t<script src = \"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://code.jquery.com/jquery.js"), "html", null, true);
        echo "\"></script>
\t<script src = \"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

\t<script src = \"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("//code.jquery.com/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>

\t<script src = \"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("//cdn.datatables.net/1.10.9/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">

\t\$(document).ready( function () {
    \$('#mitabla\t').DataTable({
    \tScrolly: 40,

    });\t
\t} );

</script>

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
      <div class=\"row\">
        <div class=\"col-sm-3 col-md-2 sidebar\">
          <ul class=\"nav nav-sidebar\">
            
            <li class=\"active\"><a href=\"#\">Inicio <span class=\"sr-only\">(current)</span></a></li>
            
            <li><a href= \"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("Formulario", array("slug" => ""));
        echo "\" >Matricular</a></li>

            <li><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("buscar", array("slug" => ""));
        echo "\">Buscar</a></li>

            <li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("filtrar", array("slug" => ""));
        echo "\">Filtrar</a></li>

            <li><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("agentes", array("slug" => ""));
        echo "\">Agentes</a></li>   

            <li><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("ingresos", array("slug" => ""));
        echo "\">Ingresos</a></li>

          </ul>
        
        </div>
        <div class=\"col-sm-9 col-sm-offset-3 col-md-7 col-md-offset-2 main\">

        ";
        // line 70
        $context["haycumple"] = 0;
        // line 71
        echo "
      \t";
        // line 72
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado")));
        foreach ($context['_seq'] as $context["_key"] => $context["cumple"]) {
            // line 73
            echo "\t\t\t\t
\t\t    ";
            // line 74
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["cumple"], "cumple", array()), "m") == twig_date_format_filter($this->env, "now", "m"))) {
                // line 75
                echo "\t\t\t    ";
                if ((twig_date_format_filter($this->env, $this->getAttribute($context["cumple"], "cumple", array()), "d") == twig_date_format_filter($this->env, "now", "d"))) {
                    // line 76
                    echo "
\t\t\t    \t";
                    // line 77
                    $context["haycumple"] = 1;
                    // line 78
                    echo "\t\t\t\t\t
\t\t\t\t";
                }
                // line 80
                echo "\t\t\t";
            }
            // line 81
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cumple'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "
\t\t<div class=\"table-responsive\">
\t\t";
        // line 85
        if (((isset($context["haycumple"]) ? $context["haycumple"] : $this->getContext($context, "haycumple")) == 1)) {
            // line 86
            echo "
          <h2 class=\"sub-header\">Feliz Cumpleaños</h2>
          <table class=\"table\">
                  
                ";
            // line 90
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado")));
            foreach ($context['_seq'] as $context["_key"] => $context["cumple"]) {
                // line 91
                echo "\t\t\t\t\t
\t\t\t\t    ";
                // line 92
                if ((twig_date_format_filter($this->env, $this->getAttribute($context["cumple"], "cumple", array()), "m") == twig_date_format_filter($this->env, "now", "m"))) {
                    // line 93
                    echo "\t\t\t\t\t    ";
                    if ((twig_date_format_filter($this->env, $this->getAttribute($context["cumple"], "cumple", array()), "d") == twig_date_format_filter($this->env, "now", "d"))) {
                        // line 94
                        echo "
\t\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t\t<td class=\"fila_1_c\">";
                        // line 97
                        echo twig_escape_filter($this->env, $this->getAttribute($context["cumple"], "apellidop", array()), "html", null, true);
                        echo " </td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td class=\"fila_1_c\">";
                        // line 99
                        echo twig_escape_filter($this->env, $this->getAttribute($context["cumple"], "apellidom", array()), "html", null, true);
                        echo " </td>

\t\t\t\t\t\t\t\t<td class=\"fila_2_c\">";
                        // line 101
                        echo twig_escape_filter($this->env, $this->getAttribute($context["cumple"], "nombre", array()), "html", null, true);
                        echo " </td>

\t\t\t\t\t\t\t\t<td class=\"\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 104
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("alumno", array("id" => $this->getAttribute($context["cumple"], "id", array()))), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 105
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("imagenes/icon-lupa.png"), "html", null, true);
                        echo "\" width=\"20\" height=\"20\"/> 
\t\t\t\t\t\t\t\t\t</a>\t
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
                    }
                    // line 111
                    echo "\t\t\t\t\t";
                }
                // line 112
                echo "
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cumple'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "
            </table>
        ";
        }
        // line 117
        echo "

         <h2 class=\"sub-header\">Relación de Alumnos</h2>


            <table class=\"table table-striped\" id=\"mitabla\">
              <thead>
                <tr>
                  <th>Codigo</th>
                  <th>Apellido Paterno</th>
                  <th>Apellido Materno</th>
                  <th>Nombres</th>
                  <th>Ver</th>
                </tr>
              </thead>
              <tbody>
                
                  

                \t";
        // line 136
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 137
            echo "\t\t\t\t<tr>
\t\t\t\t\t
\t\t\t\t";
            // line 139
            if ((twig_date_converter($this->env, $this->getAttribute($context["result"], "fechafinal", array())) > twig_date_converter($this->env))) {
                // line 140
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 141
                if ((twig_date_converter($this->env, $this->getAttribute($context["result"], "fechafinal", array())) < twig_date_converter($this->env, "+14days"))) {
                    // line 142
                    echo "
\t\t\t\t\t\t\t<td class=\"fila_1_r\">";
                    // line 143
                    echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "dni", array()), "html", null, true);
                    echo " </td>
\t\t\t\t\t\t\t<td class=\"fila_1_r\">";
                    // line 144
                    echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "apellidop", array()), "html", null, true);
                    echo " </td>

\t\t\t\t\t\t\t<td class=\"fila_1_r\">";
                    // line 146
                    echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "apellidop", array()), "html", null, true);
                    echo " </td>
\t\t\t\t
\t\t\t\t\t\t\t<td class=\"fila_1_r\">";
                    // line 148
                    echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "apellidom", array()), "html", null, true);
                    echo " </td>

\t\t\t\t\t\t\t<td class=\"fila_2_r\">";
                    // line 150
                    echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "nombre", array()), "html", null, true);
                    echo "</td> 

\t\t\t\t\t\t";
                } else {
                    // line 152
                    echo "\t
\t\t\t\t\t\t\t<td class=\"fila_1_v\">";
                    // line 153
                    echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "dni", array()), "html", null, true);
                    echo " </td>

\t\t\t\t\t\t\t<td class=\"fila_1_v\">";
                    // line 155
                    echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "apellidop", array()), "html", null, true);
                    echo " </td>
\t\t\t\t
\t\t\t\t\t\t\t<td class=\"fila_1_v\">";
                    // line 157
                    echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "apellidom", array()), "html", null, true);
                    echo " </td>

\t\t\t\t\t\t\t<td class=\"fila_2_v\">";
                    // line 159
                    echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "nombre", array()), "html", null, true);
                    echo "</td>

\t\t\t\t\t\t";
                }
                // line 162
                echo "
\t\t\t\t";
            }
            // line 164
            echo "
\t\t\t\t";
            // line 165
            if ((twig_date_converter($this->env, $this->getAttribute($context["result"], "fechafinal", array())) < twig_date_converter($this->env))) {
                // line 166
                echo "\t\t\t\t\t\t\t<td class=\"fila_1_n\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "dni", array()), "html", null, true);
                echo " </td>

\t\t\t\t\t\t\t<td class=\"fila_1_n\">";
                // line 168
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "apellidop", array()), "html", null, true);
                echo " </td>
\t\t\t\t
\t\t\t\t\t\t\t<td class=\"fila_1_n\">";
                // line 170
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "apellidom", array()), "html", null, true);
                echo " </td>

\t\t\t\t\t\t\t<td class=\"fila_2_n\">";
                // line 172
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "nombre", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t
\t\t\t\t";
            }
            // line 175
            echo "




\t\t\t\t\t<td class=\"\">
\t\t\t\t\t\t<a href=\"";
            // line 181
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("alumno", array("id" => $this->getAttribute($context["result"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<img src=\"";
            // line 182
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("imagenes/icon-lupa.png"), "html", null, true);
            echo "\" width=\"20\" height=\"20\"/> 
\t\t\t\t\t\t</a>\t
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "

              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  


</body>
</html>";
        
        $__internal_f5b805266483493ead024364cf8cf7690f4926a359706c205b17faed9d4427ca->leave($__internal_f5b805266483493ead024364cf8cf7690f4926a359706c205b17faed9d4427ca_prof);

    }

    public function getTemplateName()
    {
        return "PfaSistemaBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 188,  378 => 182,  374 => 181,  366 => 175,  360 => 172,  355 => 170,  350 => 168,  344 => 166,  342 => 165,  339 => 164,  335 => 162,  329 => 159,  324 => 157,  319 => 155,  314 => 153,  311 => 152,  305 => 150,  300 => 148,  295 => 146,  290 => 144,  286 => 143,  283 => 142,  281 => 141,  278 => 140,  276 => 139,  272 => 137,  268 => 136,  247 => 117,  242 => 114,  235 => 112,  232 => 111,  223 => 105,  219 => 104,  213 => 101,  208 => 99,  203 => 97,  198 => 94,  195 => 93,  193 => 92,  190 => 91,  186 => 90,  180 => 86,  178 => 85,  174 => 83,  167 => 81,  164 => 80,  160 => 78,  158 => 77,  155 => 76,  152 => 75,  150 => 74,  147 => 73,  143 => 72,  140 => 71,  138 => 70,  128 => 63,  123 => 61,  118 => 59,  113 => 57,  108 => 55,  91 => 41,  86 => 39,  63 => 19,  58 => 17,  53 => 15,  49 => 14,  44 => 12,  39 => 10,  35 => 9,  31 => 8,  22 => 1,);
    }
}
