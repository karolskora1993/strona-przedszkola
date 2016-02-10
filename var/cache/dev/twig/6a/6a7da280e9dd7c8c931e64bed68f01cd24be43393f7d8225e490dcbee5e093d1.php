<?php

/* @EasyAdmin/default/field_date.html.twig */
class __TwigTemplate_a79aa655c71b9516e969f94f792ca359f3e9b3995af16a3c50da5aed6a7f461c extends Twig_Template
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
        $__internal_e235518a6ca29e123a71ee62aa88ae9026c55307491cf299f8bdd177cb5d779f = $this->env->getExtension("native_profiler");
        $__internal_e235518a6ca29e123a71ee62aa88ae9026c55307491cf299f8bdd177cb5d779f->enter($__internal_e235518a6ca29e123a71ee62aa88ae9026c55307491cf299f8bdd177cb5d779f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_e235518a6ca29e123a71ee62aa88ae9026c55307491cf299f8bdd177cb5d779f->leave($__internal_e235518a6ca29e123a71ee62aa88ae9026c55307491cf299f8bdd177cb5d779f_prof);

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
