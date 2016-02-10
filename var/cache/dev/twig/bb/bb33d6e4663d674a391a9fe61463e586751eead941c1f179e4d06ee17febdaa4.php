<?php

/* @EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_f57da6a6fbb14871024ec161fc40f27856f5674f23da040ea3f5df8a03ca0dff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@EasyAdmin/form/bootstrap_3_layout.html.twig", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig", 1);
        $this->blocks = array(
            'form_start' => array($this, 'block_form_start'),
            'form_label' => array($this, 'block_form_label'),
            'form_label_class' => array($this, 'block_form_label_class'),
            'form_row' => array($this, 'block_form_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
            'submit_row' => array($this, 'block_submit_row'),
            'reset_row' => array($this, 'block_reset_row'),
            'form_group_class' => array($this, 'block_form_group_class'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@EasyAdmin/form/bootstrap_3_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8fd626b8d32bfd432c38aa0377876afc0e2cc61a69a8fdac162060563b79a91 = $this->env->getExtension("native_profiler");
        $__internal_a8fd626b8d32bfd432c38aa0377876afc0e2cc61a69a8fdac162060563b79a91->enter($__internal_a8fd626b8d32bfd432c38aa0377876afc0e2cc61a69a8fdac162060563b79a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8fd626b8d32bfd432c38aa0377876afc0e2cc61a69a8fdac162060563b79a91->leave($__internal_a8fd626b8d32bfd432c38aa0377876afc0e2cc61a69a8fdac162060563b79a91_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_1d30d7d7fb86602991c048a9fa9758e8c22e9dbea3be763b5137944dc34bcaf4 = $this->env->getExtension("native_profiler");
        $__internal_1d30d7d7fb86602991c048a9fa9758e8c22e9dbea3be763b5137944dc34bcaf4->enter($__internal_1d30d7d7fb86602991c048a9fa9758e8c22e9dbea3be763b5137944dc34bcaf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_1d30d7d7fb86602991c048a9fa9758e8c22e9dbea3be763b5137944dc34bcaf4->leave($__internal_1d30d7d7fb86602991c048a9fa9758e8c22e9dbea3be763b5137944dc34bcaf4_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_c8ad665b46da04d45d961764c877f4b3e865bd03a67c7626c461bb62d71c0433 = $this->env->getExtension("native_profiler");
        $__internal_c8ad665b46da04d45d961764c877f4b3e865bd03a67c7626c461bb62d71c0433->enter($__internal_c8ad665b46da04d45d961764c877f4b3e865bd03a67c7626c461bb62d71c0433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c8ad665b46da04d45d961764c877f4b3e865bd03a67c7626c461bb62d71c0433->leave($__internal_c8ad665b46da04d45d961764c877f4b3e865bd03a67c7626c461bb62d71c0433_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_f3de04a299d31b6d86be8d7f74a4e7fb9342f7c2f25c4cdd9f922a59cc57f624 = $this->env->getExtension("native_profiler");
        $__internal_f3de04a299d31b6d86be8d7f74a4e7fb9342f7c2f25c4cdd9f922a59cc57f624->enter($__internal_f3de04a299d31b6d86be8d7f74a4e7fb9342f7c2f25c4cdd9f922a59cc57f624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_f3de04a299d31b6d86be8d7f74a4e7fb9342f7c2f25c4cdd9f922a59cc57f624->leave($__internal_f3de04a299d31b6d86be8d7f74a4e7fb9342f7c2f25c4cdd9f922a59cc57f624_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a91ff4549cc8dd96ec01a3dc5162a67a7e1ff7a70633393a18d3bed9c5d4b55d = $this->env->getExtension("native_profiler");
        $__internal_a91ff4549cc8dd96ec01a3dc5162a67a7e1ff7a70633393a18d3bed9c5d4b55d->enter($__internal_a91ff4549cc8dd96ec01a3dc5162a67a7e1ff7a70633393a18d3bed9c5d4b55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        ob_start();
        // line 29
        echo "    ";
        $context["_field_type"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 30
        echo "    <div class=\"form-group ";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">

        ";
        // line 32
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array())), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "label", array())));
        // line 33
        echo "        ";
        $context["_field_label"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "array"), null)) : (null));
        // line 34
        echo "
        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans((isset($context["_field_label"]) ? $context["_field_label"] : $this->getContext($context, "_field_label")), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")))) ? array() : array("label" => $_label_)));
        echo "
        <div class=\"";
        // line 36
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

            ";
        // line 39
        if ((twig_in_filter((isset($context["_field_type"]) ? $context["_field_type"] : $this->getContext($context, "_field_type")), array(0 => "datetime", 1 => "datetimetz", 2 => "date", 3 => "time")) && (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 40
            echo "                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" ";
            // line 42
            if ((null === (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))) {
                echo "checked=\"checked\"";
            }
            echo ">
                        ";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                    </label>
                </div>
            ";
        }
        // line 47
        echo "
            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 50
        if (((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 51
            echo "                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "help", array()));
            echo "</span>
            ";
        }
        // line 53
        echo "        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a91ff4549cc8dd96ec01a3dc5162a67a7e1ff7a70633393a18d3bed9c5d4b55d->leave($__internal_a91ff4549cc8dd96ec01a3dc5162a67a7e1ff7a70633393a18d3bed9c5d4b55d_prof);

    }

    // line 58
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_151723f9f15b675b83b09f217c28d6e358a791e637303565c7cbdcaf445b0485 = $this->env->getExtension("native_profiler");
        $__internal_151723f9f15b675b83b09f217c28d6e358a791e637303565c7cbdcaf445b0485->enter($__internal_151723f9f15b675b83b09f217c28d6e358a791e637303565c7cbdcaf445b0485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 59
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_151723f9f15b675b83b09f217c28d6e358a791e637303565c7cbdcaf445b0485->leave($__internal_151723f9f15b675b83b09f217c28d6e358a791e637303565c7cbdcaf445b0485_prof);

    }

    // line 62
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_074395e07dc0f7ba304af181a6a9df2fe5d0bced3eb60f5cb8b88c0397caa286 = $this->env->getExtension("native_profiler");
        $__internal_074395e07dc0f7ba304af181a6a9df2fe5d0bced3eb60f5cb8b88c0397caa286->enter($__internal_074395e07dc0f7ba304af181a6a9df2fe5d0bced3eb60f5cb8b88c0397caa286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 63
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_074395e07dc0f7ba304af181a6a9df2fe5d0bced3eb60f5cb8b88c0397caa286->leave($__internal_074395e07dc0f7ba304af181a6a9df2fe5d0bced3eb60f5cb8b88c0397caa286_prof);

    }

    // line 66
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_942396aa189d439e8c2fb6c39175a3807a1df33d12f78be491354f4b47dbc5a8 = $this->env->getExtension("native_profiler");
        $__internal_942396aa189d439e8c2fb6c39175a3807a1df33d12f78be491354f4b47dbc5a8->enter($__internal_942396aa189d439e8c2fb6c39175a3807a1df33d12f78be491354f4b47dbc5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 67
        ob_start();
        // line 68
        echo "    <div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 69
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 70
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_942396aa189d439e8c2fb6c39175a3807a1df33d12f78be491354f4b47dbc5a8->leave($__internal_942396aa189d439e8c2fb6c39175a3807a1df33d12f78be491354f4b47dbc5a8_prof);

    }

    // line 78
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_a53efcd2d6f116d2d4c8650979251f077e74e0f2f33bf83f1b7b2c69ab57c431 = $this->env->getExtension("native_profiler");
        $__internal_a53efcd2d6f116d2d4c8650979251f077e74e0f2f33bf83f1b7b2c69ab57c431->enter($__internal_a53efcd2d6f116d2d4c8650979251f077e74e0f2f33bf83f1b7b2c69ab57c431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 79
        ob_start();
        // line 80
        echo "    <div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 81
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 82
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a53efcd2d6f116d2d4c8650979251f077e74e0f2f33bf83f1b7b2c69ab57c431->leave($__internal_a53efcd2d6f116d2d4c8650979251f077e74e0f2f33bf83f1b7b2c69ab57c431_prof);

    }

    // line 89
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_6653293e831d07940e4a3a0b5b9fd82c4dbe5a8583ad5e20f310f3f9fedc085d = $this->env->getExtension("native_profiler");
        $__internal_6653293e831d07940e4a3a0b5b9fd82c4dbe5a8583ad5e20f310f3f9fedc085d->enter($__internal_6653293e831d07940e4a3a0b5b9fd82c4dbe5a8583ad5e20f310f3f9fedc085d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 90
        ob_start();
        // line 91
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 92
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 93
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6653293e831d07940e4a3a0b5b9fd82c4dbe5a8583ad5e20f310f3f9fedc085d->leave($__internal_6653293e831d07940e4a3a0b5b9fd82c4dbe5a8583ad5e20f310f3f9fedc085d_prof);

    }

    // line 100
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_c06675f844e1d5547c27f9fafadde3bed5cb7004cd530245a49b14c782c2904a = $this->env->getExtension("native_profiler");
        $__internal_c06675f844e1d5547c27f9fafadde3bed5cb7004cd530245a49b14c782c2904a->enter($__internal_c06675f844e1d5547c27f9fafadde3bed5cb7004cd530245a49b14c782c2904a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 101
        echo "col-sm-10";
        
        $__internal_c06675f844e1d5547c27f9fafadde3bed5cb7004cd530245a49b14c782c2904a->leave($__internal_c06675f844e1d5547c27f9fafadde3bed5cb7004cd530245a49b14c782c2904a_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 101,  318 => 100,  306 => 94,  302 => 93,  298 => 92,  295 => 91,  293 => 90,  287 => 89,  275 => 83,  271 => 82,  267 => 81,  262 => 80,  260 => 79,  254 => 78,  242 => 72,  238 => 71,  234 => 70,  230 => 69,  221 => 68,  219 => 67,  213 => 66,  206 => 63,  200 => 62,  193 => 59,  187 => 58,  177 => 53,  171 => 51,  169 => 50,  164 => 48,  161 => 47,  154 => 43,  148 => 42,  144 => 40,  142 => 39,  137 => 37,  133 => 36,  129 => 35,  126 => 34,  123 => 33,  121 => 32,  111 => 30,  108 => 29,  106 => 28,  100 => 27,  93 => 22,  87 => 21,  78 => 16,  75 => 15,  69 => 13,  66 => 12,  64 => 11,  58 => 10,  51 => 5,  49 => 4,  43 => 3,  11 => 1,);
    }
}
/* {% extends "@EasyAdmin/form/bootstrap_3_layout.html.twig" %}*/
/* */
/* {% block form_start -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock form_start %}*/
/* */
/* {# Labels #}*/
/* */
/* {% block form_label -%}*/
/* {% spaceless %}*/
/*     {% if label is same as(false) %}*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*     {% else %}*/
/*         {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}*/
/*         {{- parent() -}}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {%- endblock form_label %}*/
/* */
/* {% block form_label_class -%}*/
/* col-sm-2*/
/* {%- endblock form_label_class %}*/
/* */
/* {# Rows #}*/
/* */
/* {% block form_row -%}*/
/* {% spaceless %}*/
/*     {% set _field_type = easyadmin.field.fieldType|default('default') %}*/
/*     <div class="form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}">*/
/* */
/*         {% set _trans_parameters = { '%entity_name%':  easyadmin.entity.name|trans, '%entity_label%': easyadmin.entity.label|trans } %}*/
/*         {% set _field_label = easyadmin.field['label']|default(null) %}*/
/* */
/*         {{ form_label(form, _field_label|trans(_trans_parameters)) }}*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/* */
/*             {% if _field_type in ['datetime', 'datetimetz', 'date', 'time'] and easyadmin.field.nullable|default(false) %}*/
/*                 <div class="nullable-control">*/
/*                     <label>*/
/*                         <input type="checkbox" {% if data is null %}checked="checked"{% endif %}>*/
/*                         {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}*/
/*                     </label>*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             {{ form_errors(form) }}*/
/* */
/*             {% if easyadmin.field.help|default('') != '' %}*/
/*                 <span class="help-block"><i class="fa fa-info-circle"></i> {{ easyadmin.field.help|trans|raw }}</span>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {%- endblock form_row %}*/
/* */
/* {% block checkbox_row -%}*/
/*     {{- block('checkbox_radio_row') -}}*/
/* {%- endblock checkbox_row %}*/
/* */
/* {% block radio_row -%}*/
/*     {{- block('checkbox_radio_row') -}}*/
/* {%- endblock radio_row %}*/
/* */
/* {% block checkbox_radio_row -%}*/
/* {% spaceless %}*/
/*     <div class="form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}">*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/*             {{ form_errors(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {%- endblock checkbox_radio_row %}*/
/* */
/* {% block submit_row -%}*/
/* {% spaceless %}*/
/*     <div class="form-group field-{{ block_prefixes|slice(-2)|first }}">*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock submit_row %}*/
/* */
/* {% block reset_row -%}*/
/* {% spaceless %}*/
/*     <div class="form-group">*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock reset_row %}*/
/* */
/* {% block form_group_class -%}*/
/* col-sm-10*/
/* {%- endblock form_group_class %}*/
/* */
