<?php

/* @EasyAdmin/default/field_string.html.twig */
class __TwigTemplate_4d85c52597f463999fba81a5f9eb0b67c993ac5388135883a67d8728b08d2ecc extends Twig_Template
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
        $__internal_f090c51c97a62fec47d2dec811b1788be98b00b7d920476163c19a0635c7513b = $this->env->getExtension("native_profiler");
        $__internal_f090c51c97a62fec47d2dec811b1788be98b00b7d920476163c19a0635c7513b->enter($__internal_f090c51c97a62fec47d2dec811b1788be98b00b7d920476163c19a0635c7513b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_f090c51c97a62fec47d2dec811b1788be98b00b7d920476163c19a0635c7513b->leave($__internal_f090c51c97a62fec47d2dec811b1788be98b00b7d920476163c19a0635c7513b_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if view == 'show' %}*/
/*     {{ value|nl2br }}*/
/* {% else %}*/
/*     {{ value|easyadmin_truncate }}*/
/* {% endif %}*/
/* */
