<?php

/* EasyAdminBundle:default:field_id.html.twig */
class __TwigTemplate_8f3375a3e0a9f8d00f1febb7f4aa9fbe5d7bca1b280e58162a6581addce329b5 extends Twig_Template
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
        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 2,);
    }
}
/* {# this field template is used to avoid formatting the special ID attribute as a number #}*/
/* {{ value }}*/
/* */
