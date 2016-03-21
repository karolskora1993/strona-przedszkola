<?php

/* :easy_admin:file.html.twig */
class __TwigTemplate_99c21f6c82e5e4bce89d449cafea86c548945eb8ad89bca52d150b2f63eca5e8 extends Twig_Template
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
        echo "\">wyswietl plik (PDF)</a>";
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
/* <a href="{{ field_options.base_path ~ '/' ~ value }}">wyswietl plik (PDF)</a>*/
