<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_22823a0a5314a9b246f83ad9bfe87a1fcba197f1764777f2c8d4f8fae92546ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c06841d4b8bd93539ae1a244d7795674ee0e8e485a815ba7b8c89d1123ed66e7 = $this->env->getExtension("native_profiler");
        $__internal_c06841d4b8bd93539ae1a244d7795674ee0e8e485a815ba7b8c89d1123ed66e7->enter($__internal_c06841d4b8bd93539ae1a244d7795674ee0e8e485a815ba7b8c89d1123ed66e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c06841d4b8bd93539ae1a244d7795674ee0e8e485a815ba7b8c89d1123ed66e7->leave($__internal_c06841d4b8bd93539ae1a244d7795674ee0e8e485a815ba7b8c89d1123ed66e7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cf8a912501255fd3e81c9e95330a3e89ebe53ec14abd0e4b27604bb16dd79751 = $this->env->getExtension("native_profiler");
        $__internal_cf8a912501255fd3e81c9e95330a3e89ebe53ec14abd0e4b27604bb16dd79751->enter($__internal_cf8a912501255fd3e81c9e95330a3e89ebe53ec14abd0e4b27604bb16dd79751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cf8a912501255fd3e81c9e95330a3e89ebe53ec14abd0e4b27604bb16dd79751->leave($__internal_cf8a912501255fd3e81c9e95330a3e89ebe53ec14abd0e4b27604bb16dd79751_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_54f250a83cccd6f63611c899251977cc59fc5ba082ee7130f6d059c3407db602 = $this->env->getExtension("native_profiler");
        $__internal_54f250a83cccd6f63611c899251977cc59fc5ba082ee7130f6d059c3407db602->enter($__internal_54f250a83cccd6f63611c899251977cc59fc5ba082ee7130f6d059c3407db602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_54f250a83cccd6f63611c899251977cc59fc5ba082ee7130f6d059c3407db602->leave($__internal_54f250a83cccd6f63611c899251977cc59fc5ba082ee7130f6d059c3407db602_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b8da22b8641646afef073daccd1185b9d19db439f50480f68802006483e0d97 = $this->env->getExtension("native_profiler");
        $__internal_7b8da22b8641646afef073daccd1185b9d19db439f50480f68802006483e0d97->enter($__internal_7b8da22b8641646afef073daccd1185b9d19db439f50480f68802006483e0d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7b8da22b8641646afef073daccd1185b9d19db439f50480f68802006483e0d97->leave($__internal_7b8da22b8641646afef073daccd1185b9d19db439f50480f68802006483e0d97_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
