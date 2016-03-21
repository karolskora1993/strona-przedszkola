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
        $__internal_2cf263a911f0bc5b9ce9b85d948346f5c712cb2e08c4c063c5f1c72a07a54b38 = $this->env->getExtension("native_profiler");
        $__internal_2cf263a911f0bc5b9ce9b85d948346f5c712cb2e08c4c063c5f1c72a07a54b38->enter($__internal_2cf263a911f0bc5b9ce9b85d948346f5c712cb2e08c4c063c5f1c72a07a54b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cf263a911f0bc5b9ce9b85d948346f5c712cb2e08c4c063c5f1c72a07a54b38->leave($__internal_2cf263a911f0bc5b9ce9b85d948346f5c712cb2e08c4c063c5f1c72a07a54b38_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_628b8a8a7ddc0947d59af70f709dc6c669435770b72df06e01235c71063abc15 = $this->env->getExtension("native_profiler");
        $__internal_628b8a8a7ddc0947d59af70f709dc6c669435770b72df06e01235c71063abc15->enter($__internal_628b8a8a7ddc0947d59af70f709dc6c669435770b72df06e01235c71063abc15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_628b8a8a7ddc0947d59af70f709dc6c669435770b72df06e01235c71063abc15->leave($__internal_628b8a8a7ddc0947d59af70f709dc6c669435770b72df06e01235c71063abc15_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_cfeef5ef4fe5e5453a7baa5e6e2bb8fc58460320ae3c7047b5467b3ca6c2a008 = $this->env->getExtension("native_profiler");
        $__internal_cfeef5ef4fe5e5453a7baa5e6e2bb8fc58460320ae3c7047b5467b3ca6c2a008->enter($__internal_cfeef5ef4fe5e5453a7baa5e6e2bb8fc58460320ae3c7047b5467b3ca6c2a008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_cfeef5ef4fe5e5453a7baa5e6e2bb8fc58460320ae3c7047b5467b3ca6c2a008->leave($__internal_cfeef5ef4fe5e5453a7baa5e6e2bb8fc58460320ae3c7047b5467b3ca6c2a008_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_70722a28983d19a0c1b9d1f936531764d63f3942a31db925b2c0ab25ef602c00 = $this->env->getExtension("native_profiler");
        $__internal_70722a28983d19a0c1b9d1f936531764d63f3942a31db925b2c0ab25ef602c00->enter($__internal_70722a28983d19a0c1b9d1f936531764d63f3942a31db925b2c0ab25ef602c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_70722a28983d19a0c1b9d1f936531764d63f3942a31db925b2c0ab25ef602c00->leave($__internal_70722a28983d19a0c1b9d1f936531764d63f3942a31db925b2c0ab25ef602c00_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_f92fb489ceea30a902d1a390155e5a381637c9485853b9140c271073010ca743 = $this->env->getExtension("native_profiler");
        $__internal_f92fb489ceea30a902d1a390155e5a381637c9485853b9140c271073010ca743->enter($__internal_f92fb489ceea30a902d1a390155e5a381637c9485853b9140c271073010ca743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_f92fb489ceea30a902d1a390155e5a381637c9485853b9140c271073010ca743->leave($__internal_f92fb489ceea30a902d1a390155e5a381637c9485853b9140c271073010ca743_prof);

    }

    // line 58
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_d3dc5a991ec5e965d5fe80fcbc370df7707e14dadaf840f361f96b005c1301ce = $this->env->getExtension("native_profiler");
        $__internal_d3dc5a991ec5e965d5fe80fcbc370df7707e14dadaf840f361f96b005c1301ce->enter($__internal_d3dc5a991ec5e965d5fe80fcbc370df7707e14dadaf840f361f96b005c1301ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 59
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_d3dc5a991ec5e965d5fe80fcbc370df7707e14dadaf840f361f96b005c1301ce->leave($__internal_d3dc5a991ec5e965d5fe80fcbc370df7707e14dadaf840f361f96b005c1301ce_prof);

    }

    // line 62
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_d883109b6a788d3484db3329a47f3f57d1d9573134f9ff40114f1385f6081787 = $this->env->getExtension("native_profiler");
        $__internal_d883109b6a788d3484db3329a47f3f57d1d9573134f9ff40114f1385f6081787->enter($__internal_d883109b6a788d3484db3329a47f3f57d1d9573134f9ff40114f1385f6081787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 63
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_d883109b6a788d3484db3329a47f3f57d1d9573134f9ff40114f1385f6081787->leave($__internal_d883109b6a788d3484db3329a47f3f57d1d9573134f9ff40114f1385f6081787_prof);

    }

    // line 66
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_16e7b7551fead884b53ce24752d47607d18c45fc4057aff45021ee3ef51faf99 = $this->env->getExtension("native_profiler");
        $__internal_16e7b7551fead884b53ce24752d47607d18c45fc4057aff45021ee3ef51faf99->enter($__internal_16e7b7551fead884b53ce24752d47607d18c45fc4057aff45021ee3ef51faf99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_16e7b7551fead884b53ce24752d47607d18c45fc4057aff45021ee3ef51faf99->leave($__internal_16e7b7551fead884b53ce24752d47607d18c45fc4057aff45021ee3ef51faf99_prof);

    }

    // line 78
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_310a4eef964c2b76d970e09eb71cfc3938f414e422057783dc9fd2e9dcc9e697 = $this->env->getExtension("native_profiler");
        $__internal_310a4eef964c2b76d970e09eb71cfc3938f414e422057783dc9fd2e9dcc9e697->enter($__internal_310a4eef964c2b76d970e09eb71cfc3938f414e422057783dc9fd2e9dcc9e697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_310a4eef964c2b76d970e09eb71cfc3938f414e422057783dc9fd2e9dcc9e697->leave($__internal_310a4eef964c2b76d970e09eb71cfc3938f414e422057783dc9fd2e9dcc9e697_prof);

    }

    // line 89
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_afcc0b58d2287142c824c87b79c338143bbc00a104f9456c0c5eeb111a034c62 = $this->env->getExtension("native_profiler");
        $__internal_afcc0b58d2287142c824c87b79c338143bbc00a104f9456c0c5eeb111a034c62->enter($__internal_afcc0b58d2287142c824c87b79c338143bbc00a104f9456c0c5eeb111a034c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_afcc0b58d2287142c824c87b79c338143bbc00a104f9456c0c5eeb111a034c62->leave($__internal_afcc0b58d2287142c824c87b79c338143bbc00a104f9456c0c5eeb111a034c62_prof);

    }

    // line 100
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_558cab39307414b8a5d5e9435c1db00c9592d000a543b38485a93c8b9b40e002 = $this->env->getExtension("native_profiler");
        $__internal_558cab39307414b8a5d5e9435c1db00c9592d000a543b38485a93c8b9b40e002->enter($__internal_558cab39307414b8a5d5e9435c1db00c9592d000a543b38485a93c8b9b40e002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 101
        echo "col-sm-10";
        
        $__internal_558cab39307414b8a5d5e9435c1db00c9592d000a543b38485a93c8b9b40e002->leave($__internal_558cab39307414b8a5d5e9435c1db00c9592d000a543b38485a93c8b9b40e002_prof);

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
