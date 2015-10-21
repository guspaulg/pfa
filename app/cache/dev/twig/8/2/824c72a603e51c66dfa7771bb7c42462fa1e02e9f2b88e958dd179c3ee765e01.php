<?php

/* PfaSistemaBundle::rematricula.html.twig */
class __TwigTemplate_824c72a603e51c66dfa7771bb7c42462fa1e02e9f2b88e958dd179c3ee765e01 extends Twig_Template
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
        $__internal_823225067d486c29e28afb2bde104d01a6690d164b13b28d9ba031b4e186b6c3 = $this->env->getExtension("native_profiler");
        $__internal_823225067d486c29e28afb2bde104d01a6690d164b13b28d9ba031b4e186b6c3->enter($__internal_823225067d486c29e28afb2bde104d01a6690d164b13b28d9ba031b4e186b6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PfaSistemaBundle::rematricula.html.twig"));

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
            
            <li class=\"active\"><a href=\"#\">Matricular</a></li>

            <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("buscar", array("slug" => ""));
        echo "\">Buscar</a></li>

            <li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("filtrar", array("slug" => ""));
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
        
        ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

        <div class=\"col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-2 main\">
                <h2 class=\"sub-header\">Edicion de matricula de Alumno</h2>
                <div>Datos Personales </div>
                <div>
                    ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidop", array()), 'errors');
        echo "
                    ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidop", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Apellido Paterno")));
        echo "
                </div>

                <div>
                    ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidom", array()), 'errors');
        echo "
                    ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Apellido Materno")));
        echo "
                </div>

                <div>
                    ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo "
                    ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombres Completos")));
        echo "
                </div>

                <div>
                    ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                    ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Correo electronico")));
        echo "
                </div>

                <div>
                    ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dni", array()), 'errors');
        echo "
                    ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dni", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Dni")));
        echo "
                </div>

                 <div>
                    ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonoc", array()), 'errors');
        echo "
                    ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonoc", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Telefono Celular")));
        echo "
                </div>
                 <div>
                    ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonof", array()), 'errors');
        echo "
                    ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonof", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Telefono Fijo")));
        echo "
                </div>


                <div>
                    ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexo", array()), 'errors');
        echo "
                    ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div>
                    <div class=\"\"> Cumpleaños </div>
                    ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cumple", array()), 'errors');
        echo "
                    ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cumple", array()), 'widget', array("attr" => array("class" => "form-group", "type" => "datetime")));
        echo "
                </div>

                <div class=\"\"> Disciplinas </div>

                 <div>
                    <div class=\"col-sm-6\">
                    ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disc1", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-6\">
                    ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disc1", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div>
                    <div class=\"col-sm-6\">
                    ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disc2", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-6\">
                    ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disc2", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div>
                    <div class=\"col-sm-6\">
                    ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disc3", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-6\">
                    ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disc3", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div>
                    <div class=\"col-sm-6\">
                    ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disc4", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-6\">
                    ";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disc4", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
              
                
        </div>

        <div class=\"col-sm-6 col-md-4  main\"> 
                </br></br>
                <div> Datos de la Matricula </div>
                <div class=\"col-sm-12\">
                    <div class=\"col-sm-4\"> 
                    ";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha_inicio", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-8\"> 
                    ";
        // line 153
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha_inicio", array()), 'errors');
        echo "
                    ";
        // line 154
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha_inicio", array()), 'widget', array("attr" => array("class" => "form-group", "type" => "datetime")));
        echo "
                    </div>
                </div>

                <div class=\"col-sm-12\">
                    <div class=\"col-sm-4\">
                    ";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "meses", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-8\">
                    ";
        // line 163
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "meses", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"col-sm-12\">
                <div class=\"col-sm-4\">
                    ";
        // line 169
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "veces", array()), 'label');
        echo "
                </div>
                <div class=\"col-sm-8\">
                    ";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "veces", array()), 'errors');
        echo "
                    ";
        // line 173
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "veces", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                </div>

                <div class=\"col-sm-12\">
                    <div class=\"col-sm-4\">
                    ";
        // line 179
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lunes", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-5\">
                    ";
        // line 182
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lunes", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"col-sm-12\">
                    <div class=\"col-sm-4\">
                    ";
        // line 188
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "martes", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-5\">
                    ";
        // line 191
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "martes", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"col-sm-12\">
                    <div class=\"col-sm-4\">
                    ";
        // line 197
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "miercoles", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-5\">
                    ";
        // line 200
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "miercoles", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"col-sm-12\">
                    <div class=\"col-sm-4\">
                    ";
        // line 206
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jueves", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-5\">
                    ";
        // line 209
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jueves", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"col-sm-12\">
                    <div class=\"col-sm-4\">
                    ";
        // line 215
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "viernes", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-5\">
                    ";
        // line 218
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "viernes", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"col-sm-12\">
                    <div class=\"col-sm-4\">
                    ";
        // line 224
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sabado", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-5\">
                    ";
        // line 227
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sabado", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                 <div class=\"col-sm-12\">
                    <div class=\"col-sm-4\">
                    ";
        // line 233
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "domingo", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-5\">
                    ";
        // line 236
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "domingo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div>
                    ";
        // line 241
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipodepago", array()), 'errors');
        echo "
                    ";
        // line 242
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipodepago", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div>
                    ";
        // line 246
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precio", array()), 'errors');
        echo "
                    ";
        // line 247
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precio", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "S/. Monto en soles")));
        echo "
                </div>

                <div class=\"col-sm-12\">
                    <div class=\"col-sm-4\">
                        ";
        // line 252
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "agente", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-8\">
                        ";
        // line 255
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "agente", array()), 'errors');
        echo "
                        ";
        // line 256
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "agente", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"col-sm-12\">
                 ";
        // line 261
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matricular", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
                </div>
                         
            
       

        </div>
        ";
        // line 268
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    </div>
</div>

</body>


</html>";
        
        $__internal_823225067d486c29e28afb2bde104d01a6690d164b13b28d9ba031b4e186b6c3->leave($__internal_823225067d486c29e28afb2bde104d01a6690d164b13b28d9ba031b4e186b6c3_prof);

    }

    public function getTemplateName()
    {
        return "PfaSistemaBundle::rematricula.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  501 => 268,  491 => 261,  483 => 256,  479 => 255,  473 => 252,  465 => 247,  461 => 246,  454 => 242,  450 => 241,  442 => 236,  436 => 233,  427 => 227,  421 => 224,  412 => 218,  406 => 215,  397 => 209,  391 => 206,  382 => 200,  376 => 197,  367 => 191,  361 => 188,  352 => 182,  346 => 179,  337 => 173,  333 => 172,  327 => 169,  318 => 163,  312 => 160,  303 => 154,  299 => 153,  293 => 150,  278 => 138,  272 => 135,  263 => 129,  257 => 126,  248 => 120,  242 => 117,  233 => 111,  227 => 108,  217 => 101,  213 => 100,  205 => 95,  201 => 94,  193 => 89,  189 => 88,  183 => 85,  179 => 84,  172 => 80,  168 => 79,  161 => 75,  157 => 74,  150 => 70,  146 => 69,  139 => 65,  135 => 64,  128 => 60,  124 => 59,  115 => 53,  104 => 45,  99 => 43,  94 => 41,  89 => 39,  82 => 35,  68 => 24,  63 => 22,  52 => 14,  47 => 12,  43 => 11,  38 => 9,  34 => 8,  30 => 7,  22 => 1,);
    }
}
