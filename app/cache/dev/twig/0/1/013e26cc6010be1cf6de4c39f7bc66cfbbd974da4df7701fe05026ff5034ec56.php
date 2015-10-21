<?php

/* PfaSistemaBundle::buscar.html.twig */
class __TwigTemplate_013e26cc6010be1cf6de4c39f7bc66cfbbd974da4df7701fe05026ff5034ec56 extends Twig_Template
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
        $__internal_c9d0eab1304e20986db257c129d9953d9963520f2d76aa5cd9e7269305c8ed60 = $this->env->getExtension("native_profiler");
        $__internal_c9d0eab1304e20986db257c129d9953d9963520f2d76aa5cd9e7269305c8ed60->enter($__internal_c9d0eab1304e20986db257c129d9953d9963520f2d76aa5cd9e7269305c8ed60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PfaSistemaBundle::buscar.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>

    <title>Peru Fight academy </title>

    <link href = \"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <link href = \"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/lomio.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" >
    <link href = \"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" >

    <script src = \"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://code.jquery.com/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src = \"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <Link  href = \"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/estilos.css"), "html", null, true);
        echo "\" rel = \"stylesheet\" type = \"text/css\"  />

</head>

<body>

    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
          <div class=\"container-fluid\">
            <a href=\"http://www.incuba.pe\"><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("imagenes/logo4.png"), "html", null, true);
        echo "\" class=\"logo\"></a>
            <div class=\"navbar-header\">
              <a class=\"navbar-brand\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("logout", array("slug" => ""));
        echo "\" >Cerrar Sesión</a>
            </div>
            
          </div>
    </nav>

    <div class=\"container-fluid\">
      <div class=\"row\">
        <div class=\"col-sm-3 col-md-2 sidebar\">
          <ul class=\"nav nav-sidebar\">
            
            <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("pfa_sistema_homepage", array("slug" => ""));
        echo "\">Inicio <span class=\"sr-only\">(current)</span></a></li>
            
            <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("Formulario", array("slug" => ""));
        echo "\">Matricular</a></li>

            <li class=\"active\"><a href=\"#\">Buscar</a></li>

            <li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("filtrar", array("filtrar" => ""));
        echo "\">Filtrar</a></li>

            <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("agentes", array("slug" => ""));
        echo "\">Agentes</a></li>   

            <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("ingresos", array("slug" => ""));
        echo "\">Ingresos</a></li>

          </ul>
        
        </div>

        <div class=\"col-sm-9 col-sm-offset-3 col-md-7 col-md-offset-2 main\">

            ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

                <div class=\"col-md-7 col-sm-7\">
                    
                    <div class=\"col-md-4 col-sm-4\">
                    Ingresar D.N.I.
                    </div>

                    <div class=\"col-md-5 col-sm-5\">
                    ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dni", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>

                    <div class=\"col-md-3 col-sm-3\">
                    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "buscar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo " 
                    </div>

                </div>

               
            ";
        // line 72
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


            <table class=\"table table-striped\">
                <thead>
                    <tr>
                      <th>Apellido P.</th>
                      <th>Apellido M.</th>
                      <th>Nombres</th>
                      <th></th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 85
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 86
            echo "
                    <tr>
                        <td class=\"fila_2_n\">";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "apellidop", array()), "html", null, true);
            echo "</td>

                        <td class=\"fila_2_n\">";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "apellidom", array()), "html", null, true);
            echo "</td>

                        <td class=\"fila_2_n\">";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "nombre", array()), "html", null, true);
            echo "</td>
                
                        <td class=\"\">
                            <a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("alumno", array("id" => $this->getAttribute($context["result"], "id", array()))), "html", null, true);
            echo "\">
                                <img src=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("imagenes/icon-lupa.png"), "html", null, true);
            echo "\" width=\"20\" height=\"20\"/> 
                            </a>    
                        </td>
                    </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                </tbody>
            </table>

        </div>
        
    </div>
</div>

</body>


</html>";
        
        $__internal_c9d0eab1304e20986db257c129d9953d9963520f2d76aa5cd9e7269305c8ed60->leave($__internal_c9d0eab1304e20986db257c129d9953d9963520f2d76aa5cd9e7269305c8ed60_prof);

    }

    public function getTemplateName()
    {
        return "PfaSistemaBundle::buscar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 102,  187 => 96,  183 => 95,  177 => 92,  172 => 90,  167 => 88,  163 => 86,  159 => 85,  143 => 72,  134 => 66,  127 => 62,  115 => 53,  104 => 45,  99 => 43,  94 => 41,  87 => 37,  82 => 35,  68 => 24,  63 => 22,  52 => 14,  47 => 12,  43 => 11,  38 => 9,  34 => 8,  30 => 7,  22 => 1,);
    }
}
