<?php

/* EasyAdminBundle:default:field_toggle.html.twig */
class __TwigTemplate_8557d6b7a7447f4b29788ba7dda84fa3be197023cfb1c23511720badca4619a8 extends Twig_Template
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
        echo "
";
        // line 3
        if (((isset($context["view"]) ? $context["view"] : null) == "show")) {
            // line 4
            echo "    ";
            if (((isset($context["value"]) ? $context["value"] : null) == true)) {
                // line 5
                echo "        <span class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
    ";
            } else {
                // line 7
                echo "        <span class=\"label label-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
    ";
            }
        } else {
            // line 10
            echo "    <input type=\"checkbox\" ";
            echo ((((isset($context["value"]) ? $context["value"] : null) == true)) ? ("checked") : (""));
            echo "
       data-toggle=\"toggle\" data-size=\"mini\"
       data-onstyle=\"success\" data-offstyle=\"danger\"
       data-on=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
            echo "\" data-off=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
            echo "\">
";
        }
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 13,  40 => 10,  33 => 7,  27 => 5,  24 => 4,  22 => 3,  19 => 2,);
    }
}
/* {% trans_default_domain 'EasyAdminBundle' %}*/
/* */
/* {% if view == 'show' %}*/
/*     {% if value == true %}*/
/*         <span class="label label-success">{{ 'label.true'|trans }}</span>*/
/*     {% else %}*/
/*         <span class="label label-danger">{{ 'label.false'|trans }}</span>*/
/*     {% endif %}*/
/* {% else %}*/
/*     <input type="checkbox" {{ value == true ? 'checked' : '' }}*/
/*        data-toggle="toggle" data-size="mini"*/
/*        data-onstyle="success" data-offstyle="danger"*/
/*        data-on="{{ 'label.true'|trans }}" data-off="{{ 'label.false'|trans }}">*/
/* {% endif %}*/
/* */
