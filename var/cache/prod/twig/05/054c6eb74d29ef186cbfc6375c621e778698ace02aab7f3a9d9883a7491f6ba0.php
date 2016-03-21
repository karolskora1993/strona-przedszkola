<?php

/* EasyAdminBundle:default:field_image.html.twig */
class __TwigTemplate_b106502c15f86527dd11db6673d8bb7c37e4577257120b8a6e397a3250e50acf extends Twig_Template
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
        echo "<a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#easyadmin-lightbox-";
        echo twig_escape_filter($this->env, (isset($context["uuid"]) ? $context["uuid"] : null), "html", null, true);
        echo "\" data-featherlight-close-on-click=\"anywhere\">
    <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\">
</a>

<div id=\"easyadmin-lightbox-";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["uuid"]) ? $context["uuid"] : null), "html", null, true);
        echo "\" class=\"easyadmin-lightbox\">
    <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\">
</div>
";
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  30 => 5,  24 => 2,  19 => 1,);
    }
}
/* <a href="#" class="easyadmin-thumbnail" data-featherlight="#easyadmin-lightbox-{{ uuid }}" data-featherlight-close-on-click="anywhere">*/
/*     <img src="{{ value }}">*/
/* </a>*/
/* */
/* <div id="easyadmin-lightbox-{{ uuid }}" class="easyadmin-lightbox">*/
/*     <img src="{{ value }}">*/
/* </div>*/
/* */
