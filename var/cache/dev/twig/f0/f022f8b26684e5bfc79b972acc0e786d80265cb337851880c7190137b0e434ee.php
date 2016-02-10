<?php

/* @EasyAdmin/default/menu.html.twig */
class __TwigTemplate_5bdd0fbca06875fc94827e10252ecd40c65d33d82f1ca8bee13d7e3abd054587 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main_menu' => array($this, 'block_main_menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a877acb65735af0acc7817cf676708eed9bd30de4361995ec120fab5cf25fe86 = $this->env->getExtension("native_profiler");
        $__internal_a877acb65735af0acc7817cf676708eed9bd30de4361995ec120fab5cf25fe86->enter($__internal_a877acb65735af0acc7817cf676708eed9bd30de4361995ec120fab5cf25fe86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/menu.html.twig"));

        // line 20
        echo "
";
        // line 21
        $context["helper"] = $this;
        // line 22
        echo "
<ul class=\"sidebar-menu\">
    ";
        // line 24
        $this->displayBlock('main_menu', $context, $blocks);
        // line 41
        echo "</ul>
";
        
        $__internal_a877acb65735af0acc7817cf676708eed9bd30de4361995ec120fab5cf25fe86->leave($__internal_a877acb65735af0acc7817cf676708eed9bd30de4361995ec120fab5cf25fe86_prof);

    }

    // line 24
    public function block_main_menu($context, array $blocks = array())
    {
        $__internal_a78f7289c60990a11a9f43da0aa5ea9800811b48ec09b8597ccc3f28b6af6f94 = $this->env->getExtension("native_profiler");
        $__internal_a78f7289c60990a11a9f43da0aa5ea9800811b48ec09b8597ccc3f28b6af6f94->enter($__internal_a78f7289c60990a11a9f43da0aa5ea9800811b48ec09b8597ccc3f28b6af6f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu"));

        // line 25
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.menu"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 26
            echo "            <li class=\"";
            echo (( !twig_test_empty($this->getAttribute($context["item"], "children", array()))) ? ("treeview") : (""));
            echo " ";
            echo ((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method"),  -1)) : ( -1)) == $this->getAttribute($context["loop"], "index0", array()))) ? ("active") : (""));
            echo " ";
            echo ((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method"),  -1)) : ( -1)) !=  -1)) ? ("submenu-active") : (""));
            echo "\">
                ";
            // line 27
            echo $context["helper"]->getrender_menu_item($context["item"]);
            echo "

                ";
            // line 29
            if ( !twig_test_empty((($this->getAttribute($context["item"], "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "children", array()), array())) : (array())))) {
                // line 30
                echo "                    <ul class=\"treeview-menu\">
                        ";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "children", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 32
                    echo "                            <li class=\"";
                    echo ((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method"),  -1)) : ( -1)) == $this->getAttribute($context["loop"], "index0", array()))) ? ("active") : (""));
                    echo "\">
                                ";
                    // line 33
                    echo $context["helper"]->getrender_menu_item($context["subitem"]);
                    echo "
                            </li>
                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "                    </ul>
                ";
            }
            // line 38
            echo "            </li>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    ";
        
        $__internal_a78f7289c60990a11a9f43da0aa5ea9800811b48ec09b8597ccc3f28b6af6f94->leave($__internal_a78f7289c60990a11a9f43da0aa5ea9800811b48ec09b8597ccc3f28b6af6f94_prof);

    }

    // line 1
    public function getrender_menu_item($__item__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_d360cb5a3f82bf09ecca092b63602f83911cc4974e1dda008892a207d4144769 = $this->env->getExtension("native_profiler");
            $__internal_d360cb5a3f82bf09ecca092b63602f83911cc4974e1dda008892a207d4144769->enter($__internal_d360cb5a3f82bf09ecca092b63602f83911cc4974e1dda008892a207d4144769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_menu_item"));

            // line 2
            echo "    ";
            if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "empty") && twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "children", array())))) {
                // line 3
                echo "        <li class=\"header\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array())), "html", null, true);
                echo "</li>
    ";
            } else {
                // line 5
                echo "        ";
                $context["menu_params"] = array("menuIndex" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "menu_index", array()), "submenuIndex" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "submenu_index", array()));
                // line 6
                echo "        ";
                $context["path"] = ((($this->getAttribute(                // line 7
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "link")) ? ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "url", array())) : (((($this->getAttribute(                // line 8
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "route")) ? ($this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "route", array()), twig_array_merge((isset($context["menu_params"]) ? $context["menu_params"] : $this->getContext($context, "menu_params")), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "params", array())))) : (((($this->getAttribute(                // line 9
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "entity")) ? ($this->env->getExtension('routing')->getPath("easyadmin", twig_array_merge(twig_array_merge(array("entity" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "entity", array()), "action" => "list"), (isset($context["menu_params"]) ? $context["menu_params"] : $this->getContext($context, "menu_params"))), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "params", array())))) : (((($this->getAttribute(                // line 10
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "empty")) ? ("#") : (""))))))));
                // line 12
                echo "
        <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), "html", null, true);
                echo "\">
            ";
                // line 14
                if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "icon", array()))) {
                    echo "<i class=\"fa ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "icon", array()), "html", null, true);
                    echo "\"></i>";
                }
                // line 15
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array())), "html", null, true);
                echo "
            ";
                // line 16
                if ( !twig_test_empty((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children", array()), array())) : (array())))) {
                    echo "<i class=\"fa fa-angle-left pull-right\"></i>";
                }
                // line 17
                echo "        </a>
    ";
            }
            
            $__internal_d360cb5a3f82bf09ecca092b63602f83911cc4974e1dda008892a207d4144769->leave($__internal_d360cb5a3f82bf09ecca092b63602f83911cc4974e1dda008892a207d4144769_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 17,  202 => 16,  197 => 15,  191 => 14,  187 => 13,  184 => 12,  182 => 10,  181 => 9,  180 => 8,  179 => 7,  177 => 6,  174 => 5,  168 => 3,  165 => 2,  150 => 1,  143 => 40,  128 => 38,  124 => 36,  107 => 33,  102 => 32,  85 => 31,  82 => 30,  80 => 29,  75 => 27,  66 => 26,  48 => 25,  42 => 24,  34 => 41,  32 => 24,  28 => 22,  26 => 21,  23 => 20,);
    }
}
/* {% macro render_menu_item(item) %}*/
/*     {% if item.type == 'empty' and item.children is empty %}*/
/*         <li class="header">{{ item.label|trans }}</li>*/
/*     {% else %}*/
/*         {% set menu_params = { menuIndex: item.menu_index, submenuIndex: item.submenu_index } %}*/
/*         {% set path =*/
/*             item.type == 'link' ? item.url :*/
/*             item.type == 'route' ? path(item.route, menu_params|merge(item.params)) :*/
/*             item.type == 'entity' ? path('easyadmin', { entity: item.entity, action: 'list' }|merge(menu_params)|merge(item.params)) :*/
/*             item.type == 'empty' ? '#' : ''*/
/*         %}*/
/* */
/*         <a href="{{ path }}">*/
/*             {% if item.icon is not empty %}<i class="fa {{ item.icon }}"></i>{% endif %}*/
/*             {{ item.label|trans }}*/
/*             {% if item.children|default([]) is not empty %}<i class="fa fa-angle-left pull-right"></i>{% endif %}*/
/*         </a>*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */
/* {% import _self as helper %}*/
/* */
/* <ul class="sidebar-menu">*/
/*     {% block main_menu %}*/
/*         {% for item in easyadmin_config('design.menu') %}*/
/*             <li class="{{ item.children is not empty ? 'treeview' }} {{ app.request.query.get('menuIndex')|default(-1) == loop.index0 ? 'active' }} {{ app.request.query.get('submenuIndex')|default(-1) != -1 ? 'submenu-active' }}">*/
/*                 {{ helper.render_menu_item(item) }}*/
/* */
/*                 {% if item.children|default([]) is not empty %}*/
/*                     <ul class="treeview-menu">*/
/*                         {% for subitem in item.children %}*/
/*                             <li class="{{ app.request.query.get('submenuIndex')|default(-1) == loop.index0 ? 'active' }}">*/
/*                                 {{ helper.render_menu_item(subitem) }}*/
/*                             </li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 {% endif %}*/
/*             </li>*/
/*         {% endfor %}*/
/*     {% endblock main_menu %}*/
/* </ul>*/
/* */
