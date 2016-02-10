<?php

/* @EasyAdmin/default/field_string.html.twig */
class __TwigTemplate_9f92b2ab174849f0bf73bd87619048caedecff7408cefa4e8b342a50f588587e extends Twig_Template
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
        $__internal_8463d93137732c830de9d9c63579cbaa873a264fcd64fdc9acb6d8b9dcbf7056 = $this->env->getExtension("native_profiler");
        $__internal_8463d93137732c830de9d9c63579cbaa873a264fcd64fdc9acb6d8b9dcbf7056->enter($__internal_8463d93137732c830de9d9c63579cbaa873a264fcd64fdc9acb6d8b9dcbf7056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

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
        
        $__internal_8463d93137732c830de9d9c63579cbaa873a264fcd64fdc9acb6d8b9dcbf7056->leave($__internal_8463d93137732c830de9d9c63579cbaa873a264fcd64fdc9acb6d8b9dcbf7056_prof);

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
