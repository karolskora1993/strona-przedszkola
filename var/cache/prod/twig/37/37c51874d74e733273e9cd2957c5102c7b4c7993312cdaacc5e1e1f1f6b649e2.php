<?php

/* EasyAdminBundle:default:field_simple_array.html.twig */
class __TwigTemplate_0889c56c3433d684fa64dae32f96df190367fe911f4a4e6999c095c020d8853d extends Twig_Template
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
        if (((isset($context["view"]) ? $context["view"] : null) == "show")) {
            // line 2
            echo "    <ul>
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 4
                echo "            <li>";
                echo twig_escape_filter($this->env, $context["element"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "    </ul>
";
        } else {
            // line 8
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, twig_join_filter((isset($context["value"]) ? $context["value"] : null), ", ")), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_simple_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  37 => 6,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if view == 'show' %}*/
/*     <ul>*/
/*         {% for element in value %}*/
/*             <li>{{ element }}</li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* {% else %}*/
/*     {{ value|join(', ')|easyadmin_truncate }}*/
/* {% endif %}*/
/* */
