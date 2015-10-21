<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_1f47a344928fc5ec01ecc59b2da326ee1addaecd0c623f2898755a0f1cddaa67 extends Twig_Template
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
        $__internal_55d7d68475b24a41017144702c1ebf94b3f0eafc0d77157180d2fb24bca593ef = $this->env->getExtension("native_profiler");
        $__internal_55d7d68475b24a41017144702c1ebf94b3f0eafc0d77157180d2fb24bca593ef->enter($__internal_55d7d68475b24a41017144702c1ebf94b3f0eafc0d77157180d2fb24bca593ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_55d7d68475b24a41017144702c1ebf94b3f0eafc0d77157180d2fb24bca593ef->leave($__internal_55d7d68475b24a41017144702c1ebf94b3f0eafc0d77157180d2fb24bca593ef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
