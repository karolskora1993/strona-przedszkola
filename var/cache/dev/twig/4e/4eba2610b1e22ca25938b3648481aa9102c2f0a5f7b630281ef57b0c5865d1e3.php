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
        $__internal_f2951b3880c5b93bfd7020066616115be5a5533a9753f2b379e04c733db40273 = $this->env->getExtension("native_profiler");
        $__internal_f2951b3880c5b93bfd7020066616115be5a5533a9753f2b379e04c733db40273->enter($__internal_f2951b3880c5b93bfd7020066616115be5a5533a9753f2b379e04c733db40273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/edit.html.twig"));

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
        
        $__internal_f2951b3880c5b93bfd7020066616115be5a5533a9753f2b379e04c733db40273->leave($__internal_f2951b3880c5b93bfd7020066616115be5a5533a9753f2b379e04c733db40273_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_7cbc96afc1c2c8731f6e8293f442ad79527e1a62079de9454e377b6676c6197b = $this->env->getExtension("native_profiler");
        $__internal_7cbc96afc1c2c8731f6e8293f442ad79527e1a62079de9454e377b6676c6197b->enter($__internal_7cbc96afc1c2c8731f6e8293f442ad79527e1a62079de9454e377b6676c6197b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())) . "-") . (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_7cbc96afc1c2c8731f6e8293f442ad79527e1a62079de9454e377b6676c6197b->leave($__internal_7cbc96afc1c2c8731f6e8293f442ad79527e1a62079de9454e377b6676c6197b_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_52391a79ef3869bccbcdd8cc7a8674c2bfd22154e677e8e5f6388ea158aa41dc = $this->env->getExtension("native_profiler");
        $__internal_52391a79ef3869bccbcdd8cc7a8674c2bfd22154e677e8e5f6388ea158aa41dc->enter($__internal_52391a79ef3869bccbcdd8cc7a8674c2bfd22154e677e8e5f6388ea158aa41dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_52391a79ef3869bccbcdd8cc7a8674c2bfd22154e677e8e5f6388ea158aa41dc->leave($__internal_52391a79ef3869bccbcdd8cc7a8674c2bfd22154e677e8e5f6388ea158aa41dc_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_b9e9abfe5f81de6ea906c24b38e3319a96038c6fd67ca5130354377598572403 = $this->env->getExtension("native_profiler");
        $__internal_b9e9abfe5f81de6ea906c24b38e3319a96038c6fd67ca5130354377598572403->enter($__internal_b9e9abfe5f81de6ea906c24b38e3319a96038c6fd67ca5130354377598572403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('translator')->trans("edit.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 14
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "edit", array(), "any", false, true), "title", array()), (isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))) : ((isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters"))), "html", null, true);
        echo "
";
        
        $__internal_b9e9abfe5f81de6ea906c24b38e3319a96038c6fd67ca5130354377598572403->leave($__internal_b9e9abfe5f81de6ea906c24b38e3319a96038c6fd67ca5130354377598572403_prof);

    }

    // line 17
    public function block_main($context, array $blocks = array())
    {
        $__internal_cf6d8119ce3693b456f61895b51705225dd8fdd5d8817b48d86cf6686f25f34f = $this->env->getExtension("native_profiler");
        $__internal_cf6d8119ce3693b456f61895b51705225dd8fdd5d8817b48d86cf6686f25f34f->enter($__internal_cf6d8119ce3693b456f61895b51705225dd8fdd5d8817b48d86cf6686f25f34f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 18
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_cf6d8119ce3693b456f61895b51705225dd8fdd5d8817b48d86cf6686f25f34f->leave($__internal_cf6d8119ce3693b456f61895b51705225dd8fdd5d8817b48d86cf6686f25f34f_prof);

    }

    // line 18
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_f7d657950502d9e4a703365ec1a16c7b8426ccf28bacaee82642b5273dde2efe = $this->env->getExtension("native_profiler");
        $__internal_f7d657950502d9e4a703365ec1a16c7b8426ccf28bacaee82642b5273dde2efe->enter($__internal_f7d657950502d9e4a703365ec1a16c7b8426ccf28bacaee82642b5273dde2efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 19
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_f7d657950502d9e4a703365ec1a16c7b8426ccf28bacaee82642b5273dde2efe->leave($__internal_f7d657950502d9e4a703365ec1a16c7b8426ccf28bacaee82642b5273dde2efe_prof);

    }

    // line 22
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_982dad162dde07fd772a6619502352353edb3fba1d2871184c4d18e82792eda8 = $this->env->getExtension("native_profiler");
        $__internal_982dad162dde07fd772a6619502352353edb3fba1d2871184c4d18e82792eda8->enter($__internal_982dad162dde07fd772a6619502352353edb3fba1d2871184c4d18e82792eda8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

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
        
        $__internal_982dad162dde07fd772a6619502352353edb3fba1d2871184c4d18e82792eda8->leave($__internal_982dad162dde07fd772a6619502352353edb3fba1d2871184c4d18e82792eda8_prof);

    }

    // line 33
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_c7f18527f1a76c442a73d886d90919932c5a68ac3a8df3129b263ca9cff36666 = $this->env->getExtension("native_profiler");
        $__internal_c7f18527f1a76c442a73d886d90919932c5a68ac3a8df3129b263ca9cff36666->enter($__internal_c7f18527f1a76c442a73d886d90919932c5a68ac3a8df3129b263ca9cff36666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 34
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/select2-bootstrap.min.css"), "html", null, true);
        echo "\">
    ";
        // line 35
        $this->displayParentBlock("head_stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_c7f18527f1a76c442a73d886d90919932c5a68ac3a8df3129b263ca9cff36666->leave($__internal_c7f18527f1a76c442a73d886d90919932c5a68ac3a8df3129b263ca9cff36666_prof);

    }

    // line 38
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_2eed51dd2530fee63a99291956a55ce3b600119cdfc2a1510b48fc5d4cf08825 = $this->env->getExtension("native_profiler");
        $__internal_2eed51dd2530fee63a99291956a55ce3b600119cdfc2a1510b48fc5d4cf08825->enter($__internal_2eed51dd2530fee63a99291956a55ce3b600119cdfc2a1510b48fc5d4cf08825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_2eed51dd2530fee63a99291956a55ce3b600119cdfc2a1510b48fc5d4cf08825->leave($__internal_2eed51dd2530fee63a99291956a55ce3b600119cdfc2a1510b48fc5d4cf08825_prof);

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
