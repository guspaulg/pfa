<?php

/* PfaSistemaBundle::Formulario.html.twig */
class __TwigTemplate_5131bade43c5ed5f8a8a9ad63da04beec972461be6bc8c57d6fcaeffeb74e53b extends Twig_Template
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
        $__internal_fa41850a77a07820f8e4c9a0c2bfa2319f7f2299ab09c13b246cf4febedb5bab = $this->env->getExtension("native_profiler");
        $__internal_fa41850a77a07820f8e4c9a0c2bfa2319f7f2299ab09c13b246cf4febedb5bab->enter($__internal_fa41850a77a07820f8e4c9a0c2bfa2319f7f2299ab09c13b246cf4febedb5bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PfaSistemaBundle::Formulario.html.twig"));

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
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

        <div class=\"col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-2 main\">
                <h2 class=\"sub-header\">Matrícula de Alumno</h2>
                <div>Datos Personales </div>
                <div>
                    ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidop", array()), 'errors');
        echo "
                    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidop", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Apellido Paterno")));
        echo "
                </div>

                <div>
                    ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidom", array()), 'errors');
        echo "
                    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Apellido Materno")));
        echo "
                </div>

                <div>
                    ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo "
                    ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombres Completos")));
        echo "
                </div>

                <div>
                    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                    ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Correo electronico")));
        echo "
                </div>

                <div>
                    ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dni", array()), 'errors');
        echo "
                    ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dni", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Dni")));
        echo "
                </div>

                 <div>
                    ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonoc", array()), 'errors');
        echo "
                    ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonoc", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Telefono Celular")));
        echo "
                </div>
                 <div>
                    ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonof", array()), 'errors');
        echo "
                    ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonof", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Telefono Fijo")));
        echo "
                </div>


                <div>
                    ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexo", array()), 'errors');
        echo "
                    ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div>
                    <div class=\"\"> Cumpleaños </div>
                    ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cumple", array()), 'errors');
        echo "
                    ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cumple", array()), 'widget', array("attr" => array("class" => "form-group", "type" => "datetime")));
        echo "
                </div>

                <div class=\"\"> Disciplinas </div>

                 <div>
                    <div class=\"col-sm-6\">
                    ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disc1", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-6\">
                    ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disc1", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div>
                    <div class=\"col-sm-6\">
                    ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disc2", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-6\">
                    ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disc2", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div>
                    <div class=\"col-sm-6\">
                    ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disc3", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-6\">
                    ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disc3", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div>
                    <div class=\"col-sm-6\">
                    ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disc4", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-6\">
                    ";
        // line 136
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
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha_inicio", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-8\"> 
                    ";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha_inicio", array()), 'errors');
        echo "
                    ";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha_inicio", array()), 'widget', array("attr" => array("class" => "form-group", "type" => "datetime")));
        echo "
                    </div>
                </div>

                <div class=\"col-sm-12\">
                    <div class=\"col-sm-4\">
                    ";
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "meses", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-8\">
                    ";
        // line 161
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "meses", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"col-sm-12\">
                <div class=\"col-sm-4\">
                    ";
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "veces", array()), 'label');
        echo "
                </div>
                <div class=\"col-sm-8\">
                    ";
        // line 170
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "veces", array()), 'errors');
        echo "
                    ";
        // line 171
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "veces", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                </div>

                <div class=\"col-sm-12\">
                    <div class=\"col-sm-4\">
                    ";
        // line 177
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lunes", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-5\">
                    ";
        // line 180
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lunes", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"col-sm-12\">
                    <div class=\"col-sm-4\">
                    ";
        // line 186
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "martes", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-5\">
                    ";
        // line 189
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "martes", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"col-sm-12\">
                    <div class=\"col-sm-4\">
                    ";
        // line 195
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "miercoles", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-5\">
                    ";
        // line 198
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "miercoles", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"col-sm-12\">
                    <div class=\"col-sm-4\">
                    ";
        // line 204
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jueves", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-5\">
                    ";
        // line 207
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jueves", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"col-sm-12\">
                    <div class=\"col-sm-4\">
                    ";
        // line 213
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "viernes", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-5\">
                    ";
        // line 216
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "viernes", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"col-sm-12\">
                    <div class=\"col-sm-4\">
                    ";
        // line 222
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sabado", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-5\">
                    ";
        // line 225
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sabado", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                 <div class=\"col-sm-12\">
                    <div class=\"col-sm-4\">
                    ";
        // line 231
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "domingo", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-5\">
                    ";
        // line 234
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "domingo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div>
                    ";
        // line 239
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipodepago", array()), 'errors');
        echo "
                    ";
        // line 240
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipodepago", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div>
                    ";
        // line 244
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precio", array()), 'errors');
        echo "
                    ";
        // line 245
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precio", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "S/. Monto en soles")));
        echo "
                </div>

                <div class=\"col-sm-12\">
                    <div class=\"col-sm-4\">
                        ";
        // line 250
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "agente", array()), 'label');
        echo "
                    </div>
                    <div class=\"col-sm-8\">
                        ";
        // line 253
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "agente", array()), 'errors');
        echo "
                        ";
        // line 254
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "agente", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"col-sm-12\">
                 ";
        // line 259
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matricular", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
                </div>
                         
            
       

        </div>
        ";
        // line 266
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    </div>
</div>

</body>


</html>";
        
        $__internal_fa41850a77a07820f8e4c9a0c2bfa2319f7f2299ab09c13b246cf4febedb5bab->leave($__internal_fa41850a77a07820f8e4c9a0c2bfa2319f7f2299ab09c13b246cf4febedb5bab_prof);

    }

    public function getTemplateName()
    {
        return "PfaSistemaBundle::Formulario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  499 => 266,  489 => 259,  481 => 254,  477 => 253,  471 => 250,  463 => 245,  459 => 244,  452 => 240,  448 => 239,  440 => 234,  434 => 231,  425 => 225,  419 => 222,  410 => 216,  404 => 213,  395 => 207,  389 => 204,  380 => 198,  374 => 195,  365 => 189,  359 => 186,  350 => 180,  344 => 177,  335 => 171,  331 => 170,  325 => 167,  316 => 161,  310 => 158,  301 => 152,  297 => 151,  291 => 148,  276 => 136,  270 => 133,  261 => 127,  255 => 124,  246 => 118,  240 => 115,  231 => 109,  225 => 106,  215 => 99,  211 => 98,  203 => 93,  199 => 92,  191 => 87,  187 => 86,  181 => 83,  177 => 82,  170 => 78,  166 => 77,  159 => 73,  155 => 72,  148 => 68,  144 => 67,  137 => 63,  133 => 62,  126 => 58,  122 => 57,  113 => 51,  104 => 45,  99 => 43,  94 => 41,  89 => 39,  82 => 35,  68 => 24,  63 => 22,  52 => 14,  47 => 12,  43 => 11,  38 => 9,  34 => 8,  30 => 7,  22 => 1,);
    }
}
