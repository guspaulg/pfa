<?php

/* AcmeDemoBundle::layout.html.twig */
class __TwigTemplate_d4e916875cdaf19b9814ee3538c1f1a348648f6d9473d65b41940e601ea4956a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "AcmeDemoBundle::layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f05435e825bea1846a2fe3d3f46f05d350b4ba8d2529f32bdce03aa78cfa5c3f = $this->env->getExtension("native_profiler");
        $__internal_f05435e825bea1846a2fe3d3f46f05d350b4ba8d2529f32bdce03aa78cfa5c3f->enter($__internal_f05435e825bea1846a2fe3d3f46f05d350b4ba8d2529f32bdce03aa78cfa5c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f05435e825bea1846a2fe3d3f46f05d350b4ba8d2529f32bdce03aa78cfa5c3f->leave($__internal_f05435e825bea1846a2fe3d3f46f05d350b4ba8d2529f32bdce03aa78cfa5c3f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f99bd3874879061b6472870c24a7f1ded2e7248a90327f4a50ff1786d4bb5d04 = $this->env->getExtension("native_profiler");
        $__internal_f99bd3874879061b6472870c24a7f1ded2e7248a90327f4a50ff1786d4bb5d04->enter($__internal_f99bd3874879061b6472870c24a7f1ded2e7248a90327f4a50ff1786d4bb5d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_f99bd3874879061b6472870c24a7f1ded2e7248a90327f4a50ff1786d4bb5d04->leave($__internal_f99bd3874879061b6472870c24a7f1ded2e7248a90327f4a50ff1786d4bb5d04_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_62dc5b9857ae6031cb2ecc35d264194977cd5c76bdc5e39ad41b5884c38a72a2 = $this->env->getExtension("native_profiler");
        $__internal_62dc5b9857ae6031cb2ecc35d264194977cd5c76bdc5e39ad41b5884c38a72a2->enter($__internal_62dc5b9857ae6031cb2ecc35d264194977cd5c76bdc5e39ad41b5884c38a72a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Demo Bundle";
        
        $__internal_62dc5b9857ae6031cb2ecc35d264194977cd5c76bdc5e39ad41b5884c38a72a2->leave($__internal_62dc5b9857ae6031cb2ecc35d264194977cd5c76bdc5e39ad41b5884c38a72a2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ecec2ed75e81be2e80af32d7b3d86c04ec3dfacea3cc9a9937c4f7fa1fbdc10 = $this->env->getExtension("native_profiler");
        $__internal_7ecec2ed75e81be2e80af32d7b3d86c04ec3dfacea3cc9a9937c4f7fa1fbdc10->enter($__internal_7ecec2ed75e81be2e80af32d7b3d86c04ec3dfacea3cc9a9937c4f7fa1fbdc10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"flash-message\">
            <em>Notice</em>: ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('content_header', $context, $blocks);
        // line 26
        echo "
    <div class=\"block\">
        ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "    </div>

    ";
        // line 31
        if (array_key_exists("code", $context)) {
            // line 32
            echo "        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">";
            // line 34
            echo (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_7ecec2ed75e81be2e80af32d7b3d86c04ec3dfacea3cc9a9937c4f7fa1fbdc10->leave($__internal_7ecec2ed75e81be2e80af32d7b3d86c04ec3dfacea3cc9a9937c4f7fa1fbdc10_prof);

    }

    // line 17
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_1795847792230b1984baf546341ee4d467975427348057f27523886d415df8a8 = $this->env->getExtension("native_profiler");
        $__internal_1795847792230b1984baf546341ee4d467975427348057f27523886d415df8a8->enter($__internal_1795847792230b1984baf546341ee4d467975427348057f27523886d415df8a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 18
        echo "        <ul id=\"menu\">
            ";
        // line 19
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 22
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
        
        $__internal_1795847792230b1984baf546341ee4d467975427348057f27523886d415df8a8->leave($__internal_1795847792230b1984baf546341ee4d467975427348057f27523886d415df8a8_prof);

    }

    // line 19
    public function block_content_header_more($context, array $blocks = array())
    {
        $__internal_9257666942681d7e47f527a87cf5e0307c0681367e4c329df71c23e44cdd9517 = $this->env->getExtension("native_profiler");
        $__internal_9257666942681d7e47f527a87cf5e0307c0681367e4c329df71c23e44cdd9517->enter($__internal_9257666942681d7e47f527a87cf5e0307c0681367e4c329df71c23e44cdd9517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_more"));

        // line 20
        echo "                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo");
        echo "\">Demo Home</a></li>
            ";
        
        $__internal_9257666942681d7e47f527a87cf5e0307c0681367e4c329df71c23e44cdd9517->leave($__internal_9257666942681d7e47f527a87cf5e0307c0681367e4c329df71c23e44cdd9517_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_e5dd66927dda04e614d91a1c2058c810633d81ddef35416167897a3d9296f123 = $this->env->getExtension("native_profiler");
        $__internal_e5dd66927dda04e614d91a1c2058c810633d81ddef35416167897a3d9296f123->enter($__internal_e5dd66927dda04e614d91a1c2058c810633d81ddef35416167897a3d9296f123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_e5dd66927dda04e614d91a1c2058c810633d81ddef35416167897a3d9296f123->leave($__internal_e5dd66927dda04e614d91a1c2058c810633d81ddef35416167897a3d9296f123_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 28,  153 => 20,  147 => 19,  137 => 22,  135 => 19,  132 => 18,  126 => 17,  115 => 34,  111 => 32,  109 => 31,  105 => 29,  103 => 28,  99 => 26,  97 => 17,  94 => 16,  85 => 13,  82 => 12,  77 => 11,  71 => 10,  59 => 8,  50 => 5,  45 => 4,  39 => 3,  11 => 1,);
    }
}
