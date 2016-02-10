<?php

/* @EasyAdmin/default/field_id.html.twig */
class __TwigTemplate_ff0a3e6066cbd1e0bb4e14cd352c195179811356c147cb0f50363cbb6bbf7493 extends Twig_Template
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
        $__internal_6f26121c1097ece965f53208d9dc6bfd3286f565aafce3cca3189ad2e418dad8 = $this->env->getExtension("native_profiler");
        $__internal_6f26121c1097ece965f53208d9dc6bfd3286f565aafce3cca3189ad2e418dad8->enter($__internal_6f26121c1097ece965f53208d9dc6bfd3286f565aafce3cca3189ad2e418dad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_6f26121c1097ece965f53208d9dc6bfd3286f565aafce3cca3189ad2e418dad8->leave($__internal_6f26121c1097ece965f53208d9dc6bfd3286f565aafce3cca3189ad2e418dad8_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }
}
/* {# this field template is used to avoid formatting the special ID attribute as a number #}*/
/* {{ value }}*/
/* */
