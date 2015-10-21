<?php

/* PfaSistemaBundle::login.html.twig */
class __TwigTemplate_a3b53dddc1fc7d4274dcade68ac6cde5d95e76f68332b93a2c55bcefae794456 extends Twig_Template
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
        $__internal_84786b6e57f417775c98ba0b6ad51e127c539abba9861c377d7cc610c159cda5 = $this->env->getExtension("native_profiler");
        $__internal_84786b6e57f417775c98ba0b6ad51e127c539abba9861c377d7cc610c159cda5->enter($__internal_84786b6e57f417775c98ba0b6ad51e127c539abba9861c377d7cc610c159cda5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PfaSistemaBundle::login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">

    <head>

        <title>Peru Fight academy</title>

        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <link href = \"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
\t    <link href = \"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/lomio.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" >\t
\t    <script src = \"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://code.jquery.com/jquery.js"), "html", null, true);
        echo "\"></script>
\t    <script src = \"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
 
    </head>



<body>

     <div class=\"container\">
         <div class=\"user\">

         \t<a href=\"http://www.incuba.pe\"><img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("imagenes/logo3.png"), "html", null, true);
        echo "\" class=\"logo2\"></a>

\t\t\t";
        // line 28
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 29
            echo "\t\t\t    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 31
        echo "\t\t\t 
\t\t\t<form action=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" class=\"form-signin\">
\t\t\t\t<h2 class=\"bienvenida\">Sistema de Administración</h2>


                <input type=\"text\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Usuario\" required=\"\" autofocus=\"\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" name=\"_username\">


                <input type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required=\"\" name=\"_password\">
                
                <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Entar</button>


\t\t\t</form>

\t\t\t<p> </br>© Copyright 2015 - Desarrollado por Incuba - Todos los derechos reservados - Soporte : RPM 968525633</p>

\t\t</div>
\t</div>\t\t

</body>
</html>";
        
        $__internal_84786b6e57f417775c98ba0b6ad51e127c539abba9861c377d7cc610c159cda5->leave($__internal_84786b6e57f417775c98ba0b6ad51e127c539abba9861c377d7cc610c159cda5_prof);

    }

    public function getTemplateName()
    {
        return "PfaSistemaBundle::login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 36,  77 => 32,  74 => 31,  68 => 29,  66 => 28,  61 => 26,  47 => 15,  43 => 14,  39 => 13,  35 => 12,  22 => 1,);
    }
}
