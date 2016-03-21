<?php

/* EasyAdminBundle:default:field_datetimetz.html.twig */
class __TwigTemplate_ff481361bf68beeddd77534ecee08ba4ec6abe8f5e3c97be060d561a14e9bcf9 extends Twig_Template
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
        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : null), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : null), "format", array())), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetimetz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {{ value|date(field_options.format) }}*/
/* */
