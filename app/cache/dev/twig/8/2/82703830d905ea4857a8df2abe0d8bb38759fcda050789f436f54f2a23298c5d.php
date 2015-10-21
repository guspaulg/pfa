<?php

/* PfaSistemaBundle::agentes.html.twig */
class __TwigTemplate_82703830d905ea4857a8df2abe0d8bb38759fcda050789f436f54f2a23298c5d extends Twig_Template
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
        $__internal_e683fdb62876b90650eba79570d0ee84aaa35d2fb3786496a7d33bae0584ff2f = $this->env->getExtension("native_profiler");
        $__internal_e683fdb62876b90650eba79570d0ee84aaa35d2fb3786496a7d33bae0584ff2f->enter($__internal_e683fdb62876b90650eba79570d0ee84aaa35d2fb3786496a7d33bae0584ff2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PfaSistemaBundle::agentes.html.twig"));

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

            <li ><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("buscar", array("buscar" => ""));
        echo "\">Buscar</a></li>

            <li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("filtrar", array("filtrar" => ""));
        echo "\">Filtrar</a></li>

            <li class=\"active\"><a href=\"#\">Agentes</a></li>   

            <li ><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("ingresos", array("slug" => ""));
        echo "\">Ingresos</a></li>

          </ul>
        
        </div>

        <div class=\"col-sm-9 col-sm-offset-3 col-md-4 col-md-offset-2 main\">

            ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
   
            ";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

              ";
        // line 57
        $context["cantidad1"] = 0;
        // line 58
        echo "              ";
        $context["cantidad2"] = 0;
        // line 59
        echo "              ";
        $context["cantidad3"] = 0;
        // line 60
        echo "              ";
        $context["cantidad4"] = 0;
        // line 61
        echo "              ";
        $context["cantidad5"] = 0;
        // line 62
        echo "              ";
        $context["cantidad6"] = 0;
        // line 63
        echo "
              ";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultado"]) ? $context["resultado"] : $this->getContext($context, "resultado")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 65
            echo "                    ";
            if (($this->getAttribute($context["result"], "fechainicio", array()) >= (isset($context["fechai"]) ? $context["fechai"] : $this->getContext($context, "fechai")))) {
                // line 66
                echo "                        ";
                if (($this->getAttribute($context["result"], "fechainicio", array()) <= (isset($context["fechaf"]) ? $context["fechaf"] : $this->getContext($context, "fechaf")))) {
                    // line 67
                    echo "
                                ";
                    // line 68
                    if (($this->getAttribute($context["result"], "agente", array()) == 1)) {
                        // line 69
                        echo "                                      ";
                        $context["cantidad1"] = (1 + (isset($context["cantidad1"]) ? $context["cantidad1"] : $this->getContext($context, "cantidad1")));
                        // line 70
                        echo "                                ";
                    }
                    // line 71
                    echo "
                                ";
                    // line 72
                    if (($this->getAttribute($context["result"], "agente", array()) == 2)) {
                        // line 73
                        echo "                                      ";
                        $context["cantidad2"] = (1 + (isset($context["cantidad2"]) ? $context["cantidad2"] : $this->getContext($context, "cantidad2")));
                        // line 74
                        echo "                                ";
                    }
                    // line 75
                    echo "                                
                                ";
                    // line 76
                    if (($this->getAttribute($context["result"], "agente", array()) == 3)) {
                        // line 77
                        echo "                                      ";
                        $context["cantidad3"] = (1 + (isset($context["cantidad3"]) ? $context["cantidad3"] : $this->getContext($context, "cantidad3")));
                        // line 78
                        echo "                                ";
                    }
                    // line 79
                    echo "                                
                                ";
                    // line 80
                    if (($this->getAttribute($context["result"], "agente", array()) == 4)) {
                        // line 81
                        echo "                                      ";
                        $context["cantidad4"] = (1 + (isset($context["cantidad4"]) ? $context["cantidad4"] : $this->getContext($context, "cantidad4")));
                        // line 82
                        echo "                                ";
                    }
                    // line 83
                    echo "                                
                                ";
                    // line 84
                    if (($this->getAttribute($context["result"], "agente", array()) == 5)) {
                        // line 85
                        echo "                                      ";
                        $context["cantidad5"] = (1 + (isset($context["cantidad5"]) ? $context["cantidad5"] : $this->getContext($context, "cantidad5")));
                        // line 86
                        echo "                                ";
                    }
                    // line 87
                    echo "
                                ";
                    // line 88
                    if (($this->getAttribute($context["result"], "agente", array()) == 6)) {
                        // line 89
                        echo "                                      ";
                        $context["cantidad6"] = (1 + (isset($context["cantidad6"]) ? $context["cantidad6"] : $this->getContext($context, "cantidad6")));
                        // line 90
                        echo "                                ";
                    }
                    // line 91
                    echo "
                        ";
                }
                // line 93
                echo "                    ";
            }
            // line 94
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "            <div class=\"col-md-8\">
                <table class=\"table table-striped\">
                    <thead>
                        <tr>
                          <th> Agente</th>
                          <th>Matriculas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <th>Arturo</th>
                          <th class=\"asul\">";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["cantidad1"]) ? $context["cantidad1"] : $this->getContext($context, "cantidad1")), "html", null, true);
        echo "</th>
                        </tr>

                        <tr>
                          <th>Cristina</th>
                          <th class=\"asul\">";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["cantidad2"]) ? $context["cantidad2"] : $this->getContext($context, "cantidad2")), "html", null, true);
        echo "</th>
                        </tr>

                        <tr>
                          <th>Veronica</th>
                          <th class=\"asul\">";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["cantidad3"]) ? $context["cantidad3"] : $this->getContext($context, "cantidad3")), "html", null, true);
        echo "</th>
                        </tr>

                        <tr>
                          <th>Jose</th>
                          <th class=\"asul\">";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["cantidad4"]) ? $context["cantidad4"] : $this->getContext($context, "cantidad4")), "html", null, true);
        echo "</th>
                        </tr>

                        <tr>
                          <th>Viviane</th>
                          <th class=\"asul\">";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["cantidad5"]) ? $context["cantidad5"] : $this->getContext($context, "cantidad5")), "html", null, true);
        echo "</th>
                        </tr>

                        <tr>
                          <th>Luigi</th>
                          <th class=\"asul\">";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["cantidad6"]) ? $context["cantidad6"] : $this->getContext($context, "cantidad6")), "html", null, true);
        echo "</th>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
        
    </div>
</div>

</body>

";
        
        $__internal_e683fdb62876b90650eba79570d0ee84aaa35d2fb3786496a7d33bae0584ff2f->leave($__internal_e683fdb62876b90650eba79570d0ee84aaa35d2fb3786496a7d33bae0584ff2f_prof);

    }

    public function getTemplateName()
    {
        return "PfaSistemaBundle::agentes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 131,  279 => 126,  271 => 121,  263 => 116,  255 => 111,  247 => 106,  234 => 95,  228 => 94,  225 => 93,  221 => 91,  218 => 90,  215 => 89,  213 => 88,  210 => 87,  207 => 86,  204 => 85,  202 => 84,  199 => 83,  196 => 82,  193 => 81,  191 => 80,  188 => 79,  185 => 78,  182 => 77,  180 => 76,  177 => 75,  174 => 74,  171 => 73,  169 => 72,  166 => 71,  163 => 70,  160 => 69,  158 => 68,  155 => 67,  152 => 66,  149 => 65,  145 => 64,  142 => 63,  139 => 62,  136 => 61,  133 => 60,  130 => 59,  127 => 58,  125 => 57,  120 => 55,  115 => 53,  104 => 45,  97 => 41,  92 => 39,  87 => 37,  82 => 35,  68 => 24,  63 => 22,  52 => 14,  47 => 12,  43 => 11,  38 => 9,  34 => 8,  30 => 7,  22 => 1,);
    }
}
