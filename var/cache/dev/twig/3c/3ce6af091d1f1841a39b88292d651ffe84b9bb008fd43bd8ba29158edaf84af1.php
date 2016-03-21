<?php

/* @EasyAdmin/default/field_date.html.twig */
class __TwigTemplate_c9b1069162575bda039dd77dc3362569b2ee06af2a02d895e2943969e1e860fd extends Twig_Template
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
        $__internal_22a39934281bb3e77f585772e34d372d31086a43d8f39a1cee559366ea85fb2a = $this->env->getExtension("native_profiler");
        $__internal_22a39934281bb3e77f585772e34d372d31086a43d8f39a1cee559366ea85fb2a->enter($__internal_22a39934281bb3e77f585772e34d372d31086a43d8f39a1cee559366ea85fb2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_22a39934281bb3e77f585772e34d372d31086a43d8f39a1cee559366ea85fb2a->leave($__internal_22a39934281bb3e77f585772e34d372d31086a43d8f39a1cee559366ea85fb2a_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ value|date(field_options.format) }}*/
/* */
