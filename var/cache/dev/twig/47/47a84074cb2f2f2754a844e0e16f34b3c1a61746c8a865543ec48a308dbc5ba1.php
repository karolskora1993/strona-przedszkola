<?php

/* :easy_admin:file.html.twig */
class __TwigTemplate_f77a71c39eeb0927daabe7cc0c2cd70110e48f6d8f284f008a1814ba1c254e54 extends Twig_Template
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
        echo "<a href=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : null), "base_path", array()) . "/") . (isset($context["value"]) ? $context["value"] : null)), "html", null, true);
        echo "\">wyswietl plik (pdf)</a>";
    }

    public function getTemplateName()
    {
        return ":easy_admin:file.html.twig";
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
/* <a href="{{ field_options.base_path ~ '/' ~ value }}">wyswietl plik (pdf)</a>*/
