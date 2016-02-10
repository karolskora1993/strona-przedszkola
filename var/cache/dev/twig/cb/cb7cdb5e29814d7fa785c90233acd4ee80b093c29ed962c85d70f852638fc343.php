<?php

/* @EasyAdmin/default/show.html.twig */
class __TwigTemplate_2c8dda1bdfc203a84e5336e86972e01fc404246688154f4f76dbf1823e5c808d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'item_actions' => array($this, 'block_item_actions'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/show.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1cf1eccc03b1c3eb0536bd23447fa43f74299da9ad3c1fa7a7b62d1d54599e01 = $this->env->getExtension("native_profiler");
        $__internal_1cf1eccc03b1c3eb0536bd23447fa43f74299da9ad3c1fa7a7b62d1d54599e01->enter($__internal_1cf1eccc03b1c3eb0536bd23447fa43f74299da9ad3c1fa7a7b62d1d54599e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/show.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 2
        $context["_entity_id"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 3
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array())), "%entity_id%" => (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id")));
        // line 5
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cf1eccc03b1c3eb0536bd23447fa43f74299da9ad3c1fa7a7b62d1d54599e01->leave($__internal_1cf1eccc03b1c3eb0536bd23447fa43f74299da9ad3c1fa7a7b62d1d54599e01_prof);

    }

    // line 7
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_47e63754957a40f1b3efb0f9641aa5ca9b9e8e74e4de9f34b1951ee20dfef23e = $this->env->getExtension("native_profiler");
        $__internal_47e63754957a40f1b3efb0f9641aa5ca9b9e8e74e4de9f34b1951ee20dfef23e->enter($__internal_47e63754957a40f1b3efb0f9641aa5ca9b9e8e74e4de9f34b1951ee20dfef23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-show-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())) . "-") . (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_47e63754957a40f1b3efb0f9641aa5ca9b9e8e74e4de9f34b1951ee20dfef23e->leave($__internal_47e63754957a40f1b3efb0f9641aa5ca9b9e8e74e4de9f34b1951ee20dfef23e_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_f42f25b1116f83a493050086de76e8f23c3abf7859718066c7746dcf1eb2fbf5 = $this->env->getExtension("native_profiler");
        $__internal_f42f25b1116f83a493050086de76e8f23c3abf7859718066c7746dcf1eb2fbf5->enter($__internal_f42f25b1116f83a493050086de76e8f23c3abf7859718066c7746dcf1eb2fbf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_f42f25b1116f83a493050086de76e8f23c3abf7859718066c7746dcf1eb2fbf5->leave($__internal_f42f25b1116f83a493050086de76e8f23c3abf7859718066c7746dcf1eb2fbf5_prof);

    }

    // line 10
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_d951ad5416413ed43e25184fae4b42dbefa649c9c8f6c0316f5903c8ae82a03f = $this->env->getExtension("native_profiler");
        $__internal_d951ad5416413ed43e25184fae4b42dbefa649c9c8f6c0316f5903c8ae82a03f->enter($__internal_d951ad5416413ed43e25184fae4b42dbefa649c9c8f6c0316f5903c8ae82a03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 11
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('translator')->trans("show.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 12
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "show", array(), "any", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "show", array(), "any", false, true), "title", array()), (isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))) : ((isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters"))), "html", null, true);
        echo "
";
        
        $__internal_d951ad5416413ed43e25184fae4b42dbefa649c9c8f6c0316f5903c8ae82a03f->leave($__internal_d951ad5416413ed43e25184fae4b42dbefa649c9c8f6c0316f5903c8ae82a03f_prof);

    }

    // line 15
    public function block_main($context, array $blocks = array())
    {
        $__internal_b6667661c5951ea55decc6ae29ca2d2b98a00042d96db2fcbcbc710cc1f26596 = $this->env->getExtension("native_profiler");
        $__internal_b6667661c5951ea55decc6ae29ca2d2b98a00042d96db2fcbcbc710cc1f26596->enter($__internal_b6667661c5951ea55decc6ae29ca2d2b98a00042d96db2fcbcbc710cc1f26596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 16
        echo "    <div class=\"form-horizontal\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 18
            echo "            <div class=\"form-group field-";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, (($this->getAttribute($context["metadata"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "type", array()), "default")) : ("default"))), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["metadata"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\">
                <label class=\"col-sm-2 control-label\">
                    ";
            // line 20
            echo twig_escape_filter($this->env, (($this->getAttribute($context["metadata"], "label", array())) ? ($this->env->getExtension('translator')->trans($this->getAttribute($context["metadata"], "label", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")))) : ($this->env->getExtension('form')->humanize($context["field"]))), "html", null, true);
            echo "
                </label>
                <div class=\"col-sm-10\">
                    <div class=\"form-control\">
                        ";
            // line 24
            echo $this->env->getExtension('easyadmin_extension')->renderEntityField($this->env, "show", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $context["metadata"]);
            echo "
                    </div>

                    ";
            // line 27
            if (((($this->getAttribute($context["metadata"], "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "help", array()), "")) : ("")) != "")) {
                // line 28
                echo "                        <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
                echo $this->env->getExtension('translator')->trans($this->getAttribute($context["metadata"], "help", array()));
                echo "</span>
                    ";
            }
            // line 30
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            ";
        // line 36
        $this->displayBlock('item_actions', $context, $blocks);
        // line 47
        echo "            </div>
        </div>
    </div>

    ";
        // line 51
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_b6667661c5951ea55decc6ae29ca2d2b98a00042d96db2fcbcbc710cc1f26596->leave($__internal_b6667661c5951ea55decc6ae29ca2d2b98a00042d96db2fcbcbc710cc1f26596_prof);

    }

    // line 36
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_910ab2a1c1da84a693592385d9611c8cc426f14285bec5982c288022f9569282 = $this->env->getExtension("native_profiler");
        $__internal_910ab2a1c1da84a693592385d9611c8cc426f14285bec5982c288022f9569282->enter($__internal_910ab2a1c1da84a693592385d9611c8cc426f14285bec5982c288022f9569282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 37
        echo "                ";
        $context["_show_actions"] = $this->env->getExtension('easyadmin_extension')->getActionsForItem("show", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
        // line 38
        echo "                ";
        $context["_request_parameters"] = array("entity" => $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 39
        echo "
                ";
        // line 40
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 41
(isset($context["_show_actions"]) ? $context["_show_actions"] : $this->getContext($context, "_show_actions")), "request_parameters" =>         // line 42
(isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "trans_parameters" =>         // line 43
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 44
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), false);
        // line 45
        echo "
            ";
        
        $__internal_910ab2a1c1da84a693592385d9611c8cc426f14285bec5982c288022f9569282->leave($__internal_910ab2a1c1da84a693592385d9611c8cc426f14285bec5982c288022f9569282_prof);

    }

    // line 51
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_3b17048d628c0cbf2883310a45ac968dbe3639a02f74dec43a4807513e554a7e = $this->env->getExtension("native_profiler");
        $__internal_3b17048d628c0cbf2883310a45ac968dbe3639a02f74dec43a4807513e554a7e->enter($__internal_3b17048d628c0cbf2883310a45ac968dbe3639a02f74dec43a4807513e554a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 52
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "show", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 54
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 55
(isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "_trans_parameters" =>         // line 56
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 57
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config"))), false);
        // line 58
        echo "
    ";
        
        $__internal_3b17048d628c0cbf2883310a45ac968dbe3639a02f74dec43a4807513e554a7e->leave($__internal_3b17048d628c0cbf2883310a45ac968dbe3639a02f74dec43a4807513e554a7e_prof);

    }

    // line 62
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_4622746542b6cc3d018d613dc0fa1b48bc2192a0788ceeedaa18bcd57bb601fa = $this->env->getExtension("native_profiler");
        $__internal_4622746542b6cc3d018d613dc0fa1b48bc2192a0788ceeedaa18bcd57bb601fa->enter($__internal_4622746542b6cc3d018d613dc0fa1b48bc2192a0788ceeedaa18bcd57bb601fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 63
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function (e) {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
";
        
        $__internal_4622746542b6cc3d018d613dc0fa1b48bc2192a0788ceeedaa18bcd57bb601fa->leave($__internal_4622746542b6cc3d018d613dc0fa1b48bc2192a0788ceeedaa18bcd57bb601fa_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 63,  209 => 62,  201 => 58,  199 => 57,  198 => 56,  197 => 55,  196 => 54,  194 => 52,  188 => 51,  180 => 45,  178 => 44,  177 => 43,  176 => 42,  175 => 41,  174 => 40,  171 => 39,  168 => 38,  165 => 37,  159 => 36,  152 => 51,  146 => 47,  144 => 36,  139 => 33,  131 => 30,  125 => 28,  123 => 27,  117 => 24,  110 => 20,  102 => 18,  98 => 17,  95 => 16,  89 => 15,  79 => 12,  76 => 11,  70 => 10,  58 => 8,  46 => 7,  39 => 5,  37 => 3,  35 => 2,  33 => 1,  24 => 5,);
    }
}
/* {% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}*/
/* {% set _entity_id = attribute(entity, _entity_config.primary_key_field_name) %}*/
/* {% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}*/
/* */
/* {% extends _entity_config.templates.layout %}*/
/* */
/* {% block body_id 'easyadmin-show-' ~ _entity_config.name ~ '-' ~ _entity_id %}*/
/* {% block body_class 'show show-' ~ _entity_config.name|lower %}*/
/* */
/* {% block content_title %}*/
/*     {% set _default_title = 'show.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}*/
/*     {{ _entity_config.show.title|default(_default_title)|trans(_trans_parameters) }}*/
/* {% endblock %}*/
/* */
/* {% block main %}*/
/*     <div class="form-horizontal">*/
/*         {% for field, metadata in fields %}*/
/*             <div class="form-group field-{{ metadata.type|default('default')|lower }} {{ metadata.css_class|default('') }}">*/
/*                 <label class="col-sm-2 control-label">*/
/*                     {{  metadata.label ? metadata.label|trans(_trans_parameters) : field|humanize }}*/
/*                 </label>*/
/*                 <div class="col-sm-10">*/
/*                     <div class="form-control">*/
/*                         {{ easyadmin_render_field_for_show_view(_entity_config.name, entity, metadata) }}*/
/*                     </div>*/
/* */
/*                     {% if metadata.help|default('') != '' %}*/
/*                         <span class="help-block"><i class="fa fa-info-circle"></i> {{ metadata.help|trans|raw }}</span>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*         <div class="form-group form-actions">*/
/*             <div class="col-sm-10 col-sm-offset-2">*/
/*             {% block item_actions %}*/
/*                 {% set _show_actions = easyadmin_get_actions_for_show_item(_entity_config.name) %}*/
/*                 {% set _request_parameters = { entity: _entity_config.name, referer: app.request.query.get('referer') } %}*/
/* */
/*                 {{ include('@EasyAdmin/default/includes/_actions.html.twig', {*/
/*                     actions: _show_actions,*/
/*                     request_parameters: _request_parameters,*/
/*                     trans_parameters: _trans_parameters,*/
/*                     item_id: _entity_id*/
/*                 }, with_context = false) }}*/
/*             {% endblock item_actions %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% block delete_form %}*/
/*         {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {*/
/*             view: 'show',*/
/*             referer: app.request.query.get('referer', ''),*/
/*             delete_form: delete_form,*/
/*             _trans_parameters: _trans_parameters,*/
/*             _entity_config: _entity_config,*/
/*         }, with_context = false) }}*/
/*     {% endblock delete_form %}*/
/* {% endblock %}*/
/* */
/* {% block body_javascript %}*/
/*     {{ parent() }}*/
/* */
/*     <script type="text/javascript">*/
/*         $(function() {*/
/*             $('a.action-delete').on('click', function(e) {*/
/*                 e.preventDefault();*/
/* */
/*                 $('#modal-delete').modal({ backdrop: true, keyboard: true })*/
/*                     .off('click', '#modal-delete-button')*/
/*                     .on('click', '#modal-delete-button', function (e) {*/
/*                         $('#delete-form').trigger('submit');*/
/*                     });*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
