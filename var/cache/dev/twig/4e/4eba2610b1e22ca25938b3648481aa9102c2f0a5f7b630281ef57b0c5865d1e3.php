<?php

/* @EasyAdmin/default/edit.html.twig */
class __TwigTemplate_48caf0d95ae4a459e8c7a921dfd3b02af8d169fb6b6ecd28502d906c80bac9c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'delete_form' => array($this, 'block_delete_form'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/edit.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e754723a8763a2e11dd34a061b3ac2a27a32916e9fd720eb9ceebdd642410c6 = $this->env->getExtension("native_profiler");
        $__internal_9e754723a8763a2e11dd34a061b3ac2a27a32916e9fd720eb9ceebdd642410c6->enter($__internal_9e754723a8763a2e11dd34a061b3ac2a27a32916e9fd720eb9ceebdd642410c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/edit.html.twig"));

        // line 1
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array())), "%entity_id%" => (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id")));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e754723a8763a2e11dd34a061b3ac2a27a32916e9fd720eb9ceebdd642410c6->leave($__internal_9e754723a8763a2e11dd34a061b3ac2a27a32916e9fd720eb9ceebdd642410c6_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_912f7c1feed1fad5e22cdafc376e7ee047ec493304bcd630c93dde28789f161c = $this->env->getExtension("native_profiler");
        $__internal_912f7c1feed1fad5e22cdafc376e7ee047ec493304bcd630c93dde28789f161c->enter($__internal_912f7c1feed1fad5e22cdafc376e7ee047ec493304bcd630c93dde28789f161c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())) . "-") . (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_912f7c1feed1fad5e22cdafc376e7ee047ec493304bcd630c93dde28789f161c->leave($__internal_912f7c1feed1fad5e22cdafc376e7ee047ec493304bcd630c93dde28789f161c_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_1ca9b8c9e6e9e470939fa91edc4c240346d5f984d7519dc7d3514aa86f5bcfe6 = $this->env->getExtension("native_profiler");
        $__internal_1ca9b8c9e6e9e470939fa91edc4c240346d5f984d7519dc7d3514aa86f5bcfe6->enter($__internal_1ca9b8c9e6e9e470939fa91edc4c240346d5f984d7519dc7d3514aa86f5bcfe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_1ca9b8c9e6e9e470939fa91edc4c240346d5f984d7519dc7d3514aa86f5bcfe6->leave($__internal_1ca9b8c9e6e9e470939fa91edc4c240346d5f984d7519dc7d3514aa86f5bcfe6_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_7f6c04e854e0176e5e81dcb3803f1d6e340b4072623832d6adabdaa6f5dbaaef = $this->env->getExtension("native_profiler");
        $__internal_7f6c04e854e0176e5e81dcb3803f1d6e340b4072623832d6adabdaa6f5dbaaef->enter($__internal_7f6c04e854e0176e5e81dcb3803f1d6e340b4072623832d6adabdaa6f5dbaaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('translator')->trans("edit.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 14
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "edit", array(), "any", false, true), "title", array()), (isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))) : ((isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters"))), "html", null, true);
        echo "
";
        
        $__internal_7f6c04e854e0176e5e81dcb3803f1d6e340b4072623832d6adabdaa6f5dbaaef->leave($__internal_7f6c04e854e0176e5e81dcb3803f1d6e340b4072623832d6adabdaa6f5dbaaef_prof);

    }

    // line 17
    public function block_main($context, array $blocks = array())
    {
        $__internal_c2fe9d3f7db517791f5ad951bfe9e0b43f963264861da2d9b09cbbb27652ccb7 = $this->env->getExtension("native_profiler");
        $__internal_c2fe9d3f7db517791f5ad951bfe9e0b43f963264861da2d9b09cbbb27652ccb7->enter($__internal_c2fe9d3f7db517791f5ad951bfe9e0b43f963264861da2d9b09cbbb27652ccb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 18
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_c2fe9d3f7db517791f5ad951bfe9e0b43f963264861da2d9b09cbbb27652ccb7->leave($__internal_c2fe9d3f7db517791f5ad951bfe9e0b43f963264861da2d9b09cbbb27652ccb7_prof);

    }

    // line 18
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_3a9906389fd968d8e9583665402c7e76c5f83e2f87fa6fef2ff6290a5ebee38e = $this->env->getExtension("native_profiler");
        $__internal_3a9906389fd968d8e9583665402c7e76c5f83e2f87fa6fef2ff6290a5ebee38e->enter($__internal_3a9906389fd968d8e9583665402c7e76c5f83e2f87fa6fef2ff6290a5ebee38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 19
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_3a9906389fd968d8e9583665402c7e76c5f83e2f87fa6fef2ff6290a5ebee38e->leave($__internal_3a9906389fd968d8e9583665402c7e76c5f83e2f87fa6fef2ff6290a5ebee38e_prof);

    }

    // line 22
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_2765654d6b9cc201ce7a270ea225d3d68681580c0dbb0f774f3d621b9578793e = $this->env->getExtension("native_profiler");
        $__internal_2765654d6b9cc201ce7a270ea225d3d68681580c0dbb0f774f3d621b9578793e->enter($__internal_2765654d6b9cc201ce7a270ea225d3d68681580c0dbb0f774f3d621b9578793e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 23
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "edit", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 25
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 26
(isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "_trans_parameters" =>         // line 27
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 28
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config"))), false);
        // line 29
        echo "
    ";
        
        $__internal_2765654d6b9cc201ce7a270ea225d3d68681580c0dbb0f774f3d621b9578793e->leave($__internal_2765654d6b9cc201ce7a270ea225d3d68681580c0dbb0f774f3d621b9578793e_prof);

    }

    // line 33
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_806503c9f44134cfbff23ea9bdc86d02db5952512c5e0fcdc337edd60b1b2daa = $this->env->getExtension("native_profiler");
        $__internal_806503c9f44134cfbff23ea9bdc86d02db5952512c5e0fcdc337edd60b1b2daa->enter($__internal_806503c9f44134cfbff23ea9bdc86d02db5952512c5e0fcdc337edd60b1b2daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 34
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/select2-bootstrap.min.css"), "html", null, true);
        echo "\">
    ";
        // line 35
        $this->displayParentBlock("head_stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_806503c9f44134cfbff23ea9bdc86d02db5952512c5e0fcdc337edd60b1b2daa->leave($__internal_806503c9f44134cfbff23ea9bdc86d02db5952512c5e0fcdc337edd60b1b2daa_prof);

    }

    // line 38
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_97e2c9616e142d4b2bba51d2877ec63c5c494dd7cc25dae79265cac0eeeb2d2b = $this->env->getExtension("native_profiler");
        $__internal_97e2c9616e142d4b2bba51d2877ec63c5c494dd7cc25dae79265cac0eeeb2d2b->enter($__internal_97e2c9616e142d4b2bba51d2877ec63c5c494dd7cc25dae79265cac0eeeb2d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 39
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/javascript/jquery.are-you-sure.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': 'You haven\\'t saved the changes made on this form.' });

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

    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/javascript/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(function() {
            // Select2 widget is only enabled for the <select> elements which explicitly ask for it
            \$('#main form select[data-widget=\"select2\"]').select2({
                theme: 'bootstrap'
            });
        });
    </script>
";
        
        $__internal_97e2c9616e142d4b2bba51d2877ec63c5c494dd7cc25dae79265cac0eeeb2d2b->leave($__internal_97e2c9616e142d4b2bba51d2877ec63c5c494dd7cc25dae79265cac0eeeb2d2b_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 58,  180 => 41,  174 => 39,  168 => 38,  159 => 35,  154 => 34,  148 => 33,  140 => 29,  138 => 28,  137 => 27,  136 => 26,  135 => 25,  133 => 23,  127 => 22,  117 => 19,  111 => 18,  104 => 22,  101 => 21,  98 => 18,  92 => 17,  82 => 14,  79 => 13,  73 => 12,  61 => 10,  49 => 9,  42 => 7,  40 => 5,  38 => 4,  36 => 3,  34 => 1,  25 => 7,);
    }
}
/* {% form_theme form with easyadmin_config('design.form_theme') %}*/
/* */
/* {% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}*/
/* {% set _entity_id = attribute(entity, _entity_config.primary_key_field_name) %}*/
/* {% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}*/
/* */
/* {% extends _entity_config.templates.layout %}*/
/* */
/* {% block body_id 'easyadmin-edit-' ~ _entity_config.name ~ '-' ~ _entity_id %}*/
/* {% block body_class 'edit edit-' ~ _entity_config.name|lower %}*/
/* */
/* {% block content_title %}*/
/*     {% set _default_title = 'edit.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}*/
/*     {{ _entity_config.edit.title|default(_default_title)|trans(_trans_parameters) }}*/
/* {% endblock %}*/
/* */
/* {% block main %}*/
/*     {% block entity_form %}*/
/*         {{ form(form) }}*/
/*     {% endblock entity_form %}*/
/* */
/*     {% block delete_form %}*/
/*         {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {*/
/*             view: 'edit',*/
/*             referer: app.request.query.get('referer', ''),*/
/*             delete_form: delete_form,*/
/*             _trans_parameters: _trans_parameters,*/
/*             _entity_config: _entity_config,*/
/*         }, with_context = false) }}*/
/*     {% endblock delete_form %}*/
/* {% endblock %}*/
/* */
/* {% block head_stylesheets %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/easyadmin/stylesheet/select2-bootstrap.min.css') }}">*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body_javascript %}*/
/*     {{ parent() }}*/
/* */
/*     <script src="{{ asset('bundles/easyadmin/javascript/jquery.are-you-sure.min.js') }}"></script>*/
/*     <script type="text/javascript">*/
/*         $(function() {*/
/*             $('.edit-form').areYouSure({ 'message': 'You haven\'t saved the changes made on this form.' });*/
/* */
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
/* */
/*     <script src="{{ asset('bundles/easyadmin/javascript/select2.full.min.js') }}"></script>*/
/*     <script type="text/javascript">*/
/*         $(function() {*/
/*             // Select2 widget is only enabled for the <select> elements which explicitly ask for it*/
/*             $('#main form select[data-widget="select2"]').select2({*/
/*                 theme: 'bootstrap'*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
