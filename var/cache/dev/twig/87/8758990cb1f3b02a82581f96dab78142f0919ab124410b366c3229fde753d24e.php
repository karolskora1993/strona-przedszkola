<?php

/* @EasyAdmin/default/field_text.html.twig */
class __TwigTemplate_cdf3e1e6aaba6375b32eea4e7f48d7947617d872a159b972fa26589e46e2049a extends Twig_Template
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
        $__internal_57d1bdb2cf24397788ad51d3ee9f1d4a74f9a2f16ad7a28e50fc5b1432ed2e7d = $this->env->getExtension("native_profiler");
        $__internal_57d1bdb2cf24397788ad51d3ee9f1d4a74f9a2f16ad7a28e50fc5b1432ed2e7d->enter($__internal_57d1bdb2cf24397788ad51d3ee9f1d4a74f9a2f16ad7a28e50fc5b1432ed2e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_text.html.twig"));

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
        
        $__internal_57d1bdb2cf24397788ad51d3ee9f1d4a74f9a2f16ad7a28e50fc5b1432ed2e7d->leave($__internal_57d1bdb2cf24397788ad51d3ee9f1d4a74f9a2f16ad7a28e50fc5b1432ed2e7d_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_text.html.twig";
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
