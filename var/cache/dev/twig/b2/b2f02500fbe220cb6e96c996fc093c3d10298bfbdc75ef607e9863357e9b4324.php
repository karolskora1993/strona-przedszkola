<?php

/* @EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_e713bd03007d3173cf9ee4d4ed0fc69668029b3df06d646e2e628848f65ed6ef extends Twig_Template
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
        $__internal_e4af431117f1de37b0a1de321f53aae44fb0acaee6df4ef850ea4c11a7fb2b2d = $this->env->getExtension("native_profiler");
        $__internal_e4af431117f1de37b0a1de321f53aae44fb0acaee6df4ef850ea4c11a7fb2b2d->enter($__internal_e4af431117f1de37b0a1de321f53aae44fb0acaee6df4ef850ea4c11a7fb2b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4af431117f1de37b0a1de321f53aae44fb0acaee6df4ef850ea4c11a7fb2b2d->leave($__internal_e4af431117f1de37b0a1de321f53aae44fb0acaee6df4ef850ea4c11a7fb2b2d_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_f2a1e673b9162231e7c7012be30807c2794efbcd7e1cee4eb14bb561ea6fdebd = $this->env->getExtension("native_profiler");
        $__internal_f2a1e673b9162231e7c7012be30807c2794efbcd7e1cee4eb14bb561ea6fdebd->enter($__internal_f2a1e673b9162231e7c7012be30807c2794efbcd7e1cee4eb14bb561ea6fdebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_f2a1e673b9162231e7c7012be30807c2794efbcd7e1cee4eb14bb561ea6fdebd->leave($__internal_f2a1e673b9162231e7c7012be30807c2794efbcd7e1cee4eb14bb561ea6fdebd_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_3686fa512b913982ed533971bdf365918b9f991504c552ca2210b5038d70029a = $this->env->getExtension("native_profiler");
        $__internal_3686fa512b913982ed533971bdf365918b9f991504c552ca2210b5038d70029a->enter($__internal_3686fa512b913982ed533971bdf365918b9f991504c552ca2210b5038d70029a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_3686fa512b913982ed533971bdf365918b9f991504c552ca2210b5038d70029a->leave($__internal_3686fa512b913982ed533971bdf365918b9f991504c552ca2210b5038d70029a_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_c4eb1d229bd26fc651bc4105fe6c667f14d31702d4e34d61fbedd9d7ee4fd966 = $this->env->getExtension("native_profiler");
        $__internal_c4eb1d229bd26fc651bc4105fe6c667f14d31702d4e34d61fbedd9d7ee4fd966->enter($__internal_c4eb1d229bd26fc651bc4105fe6c667f14d31702d4e34d61fbedd9d7ee4fd966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_c4eb1d229bd26fc651bc4105fe6c667f14d31702d4e34d61fbedd9d7ee4fd966->leave($__internal_c4eb1d229bd26fc651bc4105fe6c667f14d31702d4e34d61fbedd9d7ee4fd966_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_10aed9d02da25ee9f9075583272f6ef47cc2c3445bb086cbaa8b8e3cc32bc445 = $this->env->getExtension("native_profiler");
        $__internal_10aed9d02da25ee9f9075583272f6ef47cc2c3445bb086cbaa8b8e3cc32bc445->enter($__internal_10aed9d02da25ee9f9075583272f6ef47cc2c3445bb086cbaa8b8e3cc32bc445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_10aed9d02da25ee9f9075583272f6ef47cc2c3445bb086cbaa8b8e3cc32bc445->leave($__internal_10aed9d02da25ee9f9075583272f6ef47cc2c3445bb086cbaa8b8e3cc32bc445_prof);

    }

    // line 58
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_bcb366bb22ee98dbb18d9474832af52d0ab3b3d86a90b390ec57650e5ee6cb41 = $this->env->getExtension("native_profiler");
        $__internal_bcb366bb22ee98dbb18d9474832af52d0ab3b3d86a90b390ec57650e5ee6cb41->enter($__internal_bcb366bb22ee98dbb18d9474832af52d0ab3b3d86a90b390ec57650e5ee6cb41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 59
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_bcb366bb22ee98dbb18d9474832af52d0ab3b3d86a90b390ec57650e5ee6cb41->leave($__internal_bcb366bb22ee98dbb18d9474832af52d0ab3b3d86a90b390ec57650e5ee6cb41_prof);

    }

    // line 62
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_345f75a1b2a5160cb9338558efefcfea72049316d3ca9f1119b3510ec30522c7 = $this->env->getExtension("native_profiler");
        $__internal_345f75a1b2a5160cb9338558efefcfea72049316d3ca9f1119b3510ec30522c7->enter($__internal_345f75a1b2a5160cb9338558efefcfea72049316d3ca9f1119b3510ec30522c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 63
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_345f75a1b2a5160cb9338558efefcfea72049316d3ca9f1119b3510ec30522c7->leave($__internal_345f75a1b2a5160cb9338558efefcfea72049316d3ca9f1119b3510ec30522c7_prof);

    }

    // line 66
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_58a9c9dd3db86460513c46a06b5e38d9ac48adc50882eab1eb0722dc3f681aab = $this->env->getExtension("native_profiler");
        $__internal_58a9c9dd3db86460513c46a06b5e38d9ac48adc50882eab1eb0722dc3f681aab->enter($__internal_58a9c9dd3db86460513c46a06b5e38d9ac48adc50882eab1eb0722dc3f681aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_58a9c9dd3db86460513c46a06b5e38d9ac48adc50882eab1eb0722dc3f681aab->leave($__internal_58a9c9dd3db86460513c46a06b5e38d9ac48adc50882eab1eb0722dc3f681aab_prof);

    }

    // line 78
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_b4b2c689acfe5358ab3e1d964f4f00496094e25c89757493593d204d44032ee9 = $this->env->getExtension("native_profiler");
        $__internal_b4b2c689acfe5358ab3e1d964f4f00496094e25c89757493593d204d44032ee9->enter($__internal_b4b2c689acfe5358ab3e1d964f4f00496094e25c89757493593d204d44032ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_b4b2c689acfe5358ab3e1d964f4f00496094e25c89757493593d204d44032ee9->leave($__internal_b4b2c689acfe5358ab3e1d964f4f00496094e25c89757493593d204d44032ee9_prof);

    }

    // line 89
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_bddba6b619fb5e93cdf5f85e804bcf851b8f25b56ff8c514bd967eb18a87a67f = $this->env->getExtension("native_profiler");
        $__internal_bddba6b619fb5e93cdf5f85e804bcf851b8f25b56ff8c514bd967eb18a87a67f->enter($__internal_bddba6b619fb5e93cdf5f85e804bcf851b8f25b56ff8c514bd967eb18a87a67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_bddba6b619fb5e93cdf5f85e804bcf851b8f25b56ff8c514bd967eb18a87a67f->leave($__internal_bddba6b619fb5e93cdf5f85e804bcf851b8f25b56ff8c514bd967eb18a87a67f_prof);

    }

    // line 100
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_82984b3d9dcc6dd76371978f9d3430f42a968d3ee70eb1e7af0674d758158a5d = $this->env->getExtension("native_profiler");
        $__internal_82984b3d9dcc6dd76371978f9d3430f42a968d3ee70eb1e7af0674d758158a5d->enter($__internal_82984b3d9dcc6dd76371978f9d3430f42a968d3ee70eb1e7af0674d758158a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 101
        echo "col-sm-10";
        
        $__internal_82984b3d9dcc6dd76371978f9d3430f42a968d3ee70eb1e7af0674d758158a5d->leave($__internal_82984b3d9dcc6dd76371978f9d3430f42a968d3ee70eb1e7af0674d758158a5d_prof);

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
