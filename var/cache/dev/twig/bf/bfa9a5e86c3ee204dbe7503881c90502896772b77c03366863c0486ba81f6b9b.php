<?php

/* @EasyAdmin/default/edit.html.twig */
class __TwigTemplate_9f6a271ab08cc24c5d839ce61d48c83d966003f09c5964eec22ce62a972e59fc extends Twig_Template
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
        $__internal_396b9d37af9341265de5fd022ddb1d1048f65186f26edb65783d2ea9a22fd5af = $this->env->getExtension("native_profiler");
        $__internal_396b9d37af9341265de5fd022ddb1d1048f65186f26edb65783d2ea9a22fd5af->enter($__internal_396b9d37af9341265de5fd022ddb1d1048f65186f26edb65783d2ea9a22fd5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/edit.html.twig"));

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
        
        $__internal_396b9d37af9341265de5fd022ddb1d1048f65186f26edb65783d2ea9a22fd5af->leave($__internal_396b9d37af9341265de5fd022ddb1d1048f65186f26edb65783d2ea9a22fd5af_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_a831abc07d2bf8de332d2022a67818151d14aa6ad09f190e7ab056a96cde3229 = $this->env->getExtension("native_profiler");
        $__internal_a831abc07d2bf8de332d2022a67818151d14aa6ad09f190e7ab056a96cde3229->enter($__internal_a831abc07d2bf8de332d2022a67818151d14aa6ad09f190e7ab056a96cde3229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())) . "-") . (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_a831abc07d2bf8de332d2022a67818151d14aa6ad09f190e7ab056a96cde3229->leave($__internal_a831abc07d2bf8de332d2022a67818151d14aa6ad09f190e7ab056a96cde3229_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_806a28acb852469af152d06f69f6a5fb7b6fc1dc59f6e8e1f2c816d1b509b2d5 = $this->env->getExtension("native_profiler");
        $__internal_806a28acb852469af152d06f69f6a5fb7b6fc1dc59f6e8e1f2c816d1b509b2d5->enter($__internal_806a28acb852469af152d06f69f6a5fb7b6fc1dc59f6e8e1f2c816d1b509b2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_806a28acb852469af152d06f69f6a5fb7b6fc1dc59f6e8e1f2c816d1b509b2d5->leave($__internal_806a28acb852469af152d06f69f6a5fb7b6fc1dc59f6e8e1f2c816d1b509b2d5_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_6cb588ed3d408612b4f62a4661be6a7a33e180983040037f0fac96de47ce1a89 = $this->env->getExtension("native_profiler");
        $__internal_6cb588ed3d408612b4f62a4661be6a7a33e180983040037f0fac96de47ce1a89->enter($__internal_6cb588ed3d408612b4f62a4661be6a7a33e180983040037f0fac96de47ce1a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('translator')->trans("edit.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 14
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "edit", array(), "any", false, true), "title", array()), (isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))) : ((isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters"))), "html", null, true);
        echo "
";
        
        $__internal_6cb588ed3d408612b4f62a4661be6a7a33e180983040037f0fac96de47ce1a89->leave($__internal_6cb588ed3d408612b4f62a4661be6a7a33e180983040037f0fac96de47ce1a89_prof);

    }

    // line 17
    public function block_main($context, array $blocks = array())
    {
        $__internal_0d158f9235f3160f9b514b99d359ac0f99d60d8b7f7d925dc8b997731b71ebcb = $this->env->getExtension("native_profiler");
        $__internal_0d158f9235f3160f9b514b99d359ac0f99d60d8b7f7d925dc8b997731b71ebcb->enter($__internal_0d158f9235f3160f9b514b99d359ac0f99d60d8b7f7d925dc8b997731b71ebcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 18
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_0d158f9235f3160f9b514b99d359ac0f99d60d8b7f7d925dc8b997731b71ebcb->leave($__internal_0d158f9235f3160f9b514b99d359ac0f99d60d8b7f7d925dc8b997731b71ebcb_prof);

    }

    // line 18
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_fefccc9c20b2e6b56b3929dcba476142227aeba26cfef84a90760db5379ccd6c = $this->env->getExtension("native_profiler");
        $__internal_fefccc9c20b2e6b56b3929dcba476142227aeba26cfef84a90760db5379ccd6c->enter($__internal_fefccc9c20b2e6b56b3929dcba476142227aeba26cfef84a90760db5379ccd6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 19
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_fefccc9c20b2e6b56b3929dcba476142227aeba26cfef84a90760db5379ccd6c->leave($__internal_fefccc9c20b2e6b56b3929dcba476142227aeba26cfef84a90760db5379ccd6c_prof);

    }

    // line 22
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_ace73c4423d5768f1509514dd4388e255750b2f196f7b6dd9b9cd5cd40817567 = $this->env->getExtension("native_profiler");
        $__internal_ace73c4423d5768f1509514dd4388e255750b2f196f7b6dd9b9cd5cd40817567->enter($__internal_ace73c4423d5768f1509514dd4388e255750b2f196f7b6dd9b9cd5cd40817567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

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
        
        $__internal_ace73c4423d5768f1509514dd4388e255750b2f196f7b6dd9b9cd5cd40817567->leave($__internal_ace73c4423d5768f1509514dd4388e255750b2f196f7b6dd9b9cd5cd40817567_prof);

    }

    // line 33
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_0d3fdb9a3f43593c0abc09abe9226d05e4b0754d45d5e6c0891e61f202e9cb92 = $this->env->getExtension("native_profiler");
        $__internal_0d3fdb9a3f43593c0abc09abe9226d05e4b0754d45d5e6c0891e61f202e9cb92->enter($__internal_0d3fdb9a3f43593c0abc09abe9226d05e4b0754d45d5e6c0891e61f202e9cb92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 34
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/select2-bootstrap.min.css"), "html", null, true);
        echo "\">
    ";
        // line 35
        $this->displayParentBlock("head_stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_0d3fdb9a3f43593c0abc09abe9226d05e4b0754d45d5e6c0891e61f202e9cb92->leave($__internal_0d3fdb9a3f43593c0abc09abe9226d05e4b0754d45d5e6c0891e61f202e9cb92_prof);

    }

    // line 38
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_ca4a169fa0c395d8e60a0d13da09356c875ac238ea550ef69fddf59fbd7447eb = $this->env->getExtension("native_profiler");
        $__internal_ca4a169fa0c395d8e60a0d13da09356c875ac238ea550ef69fddf59fbd7447eb->enter($__internal_ca4a169fa0c395d8e60a0d13da09356c875ac238ea550ef69fddf59fbd7447eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_ca4a169fa0c395d8e60a0d13da09356c875ac238ea550ef69fddf59fbd7447eb->leave($__internal_ca4a169fa0c395d8e60a0d13da09356c875ac238ea550ef69fddf59fbd7447eb_prof);

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
