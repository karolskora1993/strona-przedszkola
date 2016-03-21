<?php

/* EasyAdminBundle:default:field_datetime.html.twig */
class __TwigTemplate_965d0e1f88694191b52de3920f85715af61d74160338dd970406ca21de396cd6 extends Twig_Template
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
        return "EasyAdminBundle:default:field_datetime.html.twig";
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
