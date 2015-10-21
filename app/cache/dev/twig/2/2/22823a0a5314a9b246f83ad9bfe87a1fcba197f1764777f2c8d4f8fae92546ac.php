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
        $__internal_9300c9f89b76653144f91e0987c17426b63ec6c4b61a7ebc12a42fcdf6104edc = $this->env->getExtension("native_profiler");
        $__internal_9300c9f89b76653144f91e0987c17426b63ec6c4b61a7ebc12a42fcdf6104edc->enter($__internal_9300c9f89b76653144f91e0987c17426b63ec6c4b61a7ebc12a42fcdf6104edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9300c9f89b76653144f91e0987c17426b63ec6c4b61a7ebc12a42fcdf6104edc->leave($__internal_9300c9f89b76653144f91e0987c17426b63ec6c4b61a7ebc12a42fcdf6104edc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a704ff3541c53e3a7acb23a977360d4c5596fdeab7a7a84aaa8cbd5e9ceb59b5 = $this->env->getExtension("native_profiler");
        $__internal_a704ff3541c53e3a7acb23a977360d4c5596fdeab7a7a84aaa8cbd5e9ceb59b5->enter($__internal_a704ff3541c53e3a7acb23a977360d4c5596fdeab7a7a84aaa8cbd5e9ceb59b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a704ff3541c53e3a7acb23a977360d4c5596fdeab7a7a84aaa8cbd5e9ceb59b5->leave($__internal_a704ff3541c53e3a7acb23a977360d4c5596fdeab7a7a84aaa8cbd5e9ceb59b5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b73ad15bb41055f318726a2fb7d061b68d02b7c12e3787bf017c687c656f3d0 = $this->env->getExtension("native_profiler");
        $__internal_8b73ad15bb41055f318726a2fb7d061b68d02b7c12e3787bf017c687c656f3d0->enter($__internal_8b73ad15bb41055f318726a2fb7d061b68d02b7c12e3787bf017c687c656f3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8b73ad15bb41055f318726a2fb7d061b68d02b7c12e3787bf017c687c656f3d0->leave($__internal_8b73ad15bb41055f318726a2fb7d061b68d02b7c12e3787bf017c687c656f3d0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f2a9fb0232cc068596260c767d67527edc4393a9eb3c54e29e143ae866b62c2 = $this->env->getExtension("native_profiler");
        $__internal_0f2a9fb0232cc068596260c767d67527edc4393a9eb3c54e29e143ae866b62c2->enter($__internal_0f2a9fb0232cc068596260c767d67527edc4393a9eb3c54e29e143ae866b62c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0f2a9fb0232cc068596260c767d67527edc4393a9eb3c54e29e143ae866b62c2->leave($__internal_0f2a9fb0232cc068596260c767d67527edc4393a9eb3c54e29e143ae866b62c2_prof);

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
