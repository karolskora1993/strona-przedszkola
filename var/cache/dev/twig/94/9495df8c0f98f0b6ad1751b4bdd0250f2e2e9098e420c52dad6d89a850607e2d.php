<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9b268529824b9039ffd07edaa95bbaa3311f5699e9f38ff99bc9a46812c03969 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6871e7e51e76b23a6bbf611f9aa5d17655268d916052d45cc885c0ef4a2d14c9 = $this->env->getExtension("native_profiler");
        $__internal_6871e7e51e76b23a6bbf611f9aa5d17655268d916052d45cc885c0ef4a2d14c9->enter($__internal_6871e7e51e76b23a6bbf611f9aa5d17655268d916052d45cc885c0ef4a2d14c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6871e7e51e76b23a6bbf611f9aa5d17655268d916052d45cc885c0ef4a2d14c9->leave($__internal_6871e7e51e76b23a6bbf611f9aa5d17655268d916052d45cc885c0ef4a2d14c9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_466fcd8272dfa91a1b2cba186bf4190821c05eb633c7cfd384db34ce47804ced = $this->env->getExtension("native_profiler");
        $__internal_466fcd8272dfa91a1b2cba186bf4190821c05eb633c7cfd384db34ce47804ced->enter($__internal_466fcd8272dfa91a1b2cba186bf4190821c05eb633c7cfd384db34ce47804ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_466fcd8272dfa91a1b2cba186bf4190821c05eb633c7cfd384db34ce47804ced->leave($__internal_466fcd8272dfa91a1b2cba186bf4190821c05eb633c7cfd384db34ce47804ced_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_39cb042124aa36c8c9f46be4738eef1770dacd05cfb46267589272a06d6890f1 = $this->env->getExtension("native_profiler");
        $__internal_39cb042124aa36c8c9f46be4738eef1770dacd05cfb46267589272a06d6890f1->enter($__internal_39cb042124aa36c8c9f46be4738eef1770dacd05cfb46267589272a06d6890f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_39cb042124aa36c8c9f46be4738eef1770dacd05cfb46267589272a06d6890f1->leave($__internal_39cb042124aa36c8c9f46be4738eef1770dacd05cfb46267589272a06d6890f1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ade7afdcebd61214d0e194ce9041f12aca2c4fc717fd7be82f8ab13627c5d191 = $this->env->getExtension("native_profiler");
        $__internal_ade7afdcebd61214d0e194ce9041f12aca2c4fc717fd7be82f8ab13627c5d191->enter($__internal_ade7afdcebd61214d0e194ce9041f12aca2c4fc717fd7be82f8ab13627c5d191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ade7afdcebd61214d0e194ce9041f12aca2c4fc717fd7be82f8ab13627c5d191->leave($__internal_ade7afdcebd61214d0e194ce9041f12aca2c4fc717fd7be82f8ab13627c5d191_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
