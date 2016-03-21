<?php

/* @EasyAdmin/default/new.html.twig */
class __TwigTemplate_f5aef9d52e38f79bfad6b5cb680288cc3094d8a434a23ec4756d3ce59abe0b3e extends Twig_Template
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
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 6
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/new.html.twig", 6);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9b3acc687434fa37cda8754197fc021b9ceadd6ba6dde82556beb3a9792514b = $this->env->getExtension("native_profiler");
        $__internal_a9b3acc687434fa37cda8754197fc021b9ceadd6ba6dde82556beb3a9792514b->enter($__internal_a9b3acc687434fa37cda8754197fc021b9ceadd6ba6dde82556beb3a9792514b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        // line 1
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array())));
        // line 6
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9b3acc687434fa37cda8754197fc021b9ceadd6ba6dde82556beb3a9792514b->leave($__internal_a9b3acc687434fa37cda8754197fc021b9ceadd6ba6dde82556beb3a9792514b_prof);

    }

    // line 8
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_303f7dd6ebc30d131d7e92ebb8983389e433262b6aa7c92493e7eb4df44712c6 = $this->env->getExtension("native_profiler");
        $__internal_303f7dd6ebc30d131d7e92ebb8983389e433262b6aa7c92493e7eb4df44712c6->enter($__internal_303f7dd6ebc30d131d7e92ebb8983389e433262b6aa7c92493e7eb4df44712c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_303f7dd6ebc30d131d7e92ebb8983389e433262b6aa7c92493e7eb4df44712c6->leave($__internal_303f7dd6ebc30d131d7e92ebb8983389e433262b6aa7c92493e7eb4df44712c6_prof);

    }

    // line 9
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_1f8fe57c9243b33b9661d0ff6641def4e34392b495fa93fa708ca3fdc0ebf9c4 = $this->env->getExtension("native_profiler");
        $__internal_1f8fe57c9243b33b9661d0ff6641def4e34392b495fa93fa708ca3fdc0ebf9c4->enter($__internal_1f8fe57c9243b33b9661d0ff6641def4e34392b495fa93fa708ca3fdc0ebf9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_1f8fe57c9243b33b9661d0ff6641def4e34392b495fa93fa708ca3fdc0ebf9c4->leave($__internal_1f8fe57c9243b33b9661d0ff6641def4e34392b495fa93fa708ca3fdc0ebf9c4_prof);

    }

    // line 11
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_f3ef2194a94a8800c65a285c21abb1b9a8726197fb2e1311f320a37c3e4026ea = $this->env->getExtension("native_profiler");
        $__internal_f3ef2194a94a8800c65a285c21abb1b9a8726197fb2e1311f320a37c3e4026ea->enter($__internal_f3ef2194a94a8800c65a285c21abb1b9a8726197fb2e1311f320a37c3e4026ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 12
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('translator')->trans("new.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "new", array(), "any", false, true), "title", array()), (isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))) : ((isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters"))), "html", null, true);
        echo "
";
        
        $__internal_f3ef2194a94a8800c65a285c21abb1b9a8726197fb2e1311f320a37c3e4026ea->leave($__internal_f3ef2194a94a8800c65a285c21abb1b9a8726197fb2e1311f320a37c3e4026ea_prof);

    }

    // line 16
    public function block_main($context, array $blocks = array())
    {
        $__internal_83cdb78d44b5725148301e5e112ec8d0473459ec7b256cc08054ef9dbcde9777 = $this->env->getExtension("native_profiler");
        $__internal_83cdb78d44b5725148301e5e112ec8d0473459ec7b256cc08054ef9dbcde9777->enter($__internal_83cdb78d44b5725148301e5e112ec8d0473459ec7b256cc08054ef9dbcde9777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 17
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_83cdb78d44b5725148301e5e112ec8d0473459ec7b256cc08054ef9dbcde9777->leave($__internal_83cdb78d44b5725148301e5e112ec8d0473459ec7b256cc08054ef9dbcde9777_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_7124ef078e9256700418b24311864ba8731b46c729ae864ef25c5585561e1e9a = $this->env->getExtension("native_profiler");
        $__internal_7124ef078e9256700418b24311864ba8731b46c729ae864ef25c5585561e1e9a->enter($__internal_7124ef078e9256700418b24311864ba8731b46c729ae864ef25c5585561e1e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 18
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_7124ef078e9256700418b24311864ba8731b46c729ae864ef25c5585561e1e9a->leave($__internal_7124ef078e9256700418b24311864ba8731b46c729ae864ef25c5585561e1e9a_prof);

    }

    // line 22
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_65a152ae81ec6aff0581ad993c1c3f8aad4e3c8c8cd37e08f468f4f859eb2137 = $this->env->getExtension("native_profiler");
        $__internal_65a152ae81ec6aff0581ad993c1c3f8aad4e3c8c8cd37e08f468f4f859eb2137->enter($__internal_65a152ae81ec6aff0581ad993c1c3f8aad4e3c8c8cd37e08f468f4f859eb2137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 23
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/select2-bootstrap.min.css"), "html", null, true);
        echo "\">
    ";
        // line 24
        $this->displayParentBlock("head_stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_65a152ae81ec6aff0581ad993c1c3f8aad4e3c8c8cd37e08f468f4f859eb2137->leave($__internal_65a152ae81ec6aff0581ad993c1c3f8aad4e3c8c8cd37e08f468f4f859eb2137_prof);

    }

    // line 27
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_8950c80944f7009505cebf429c443d69660e6ec1cae8db0b8827b88def9a1f0f = $this->env->getExtension("native_profiler");
        $__internal_8950c80944f7009505cebf429c443d69660e6ec1cae8db0b8827b88def9a1f0f->enter($__internal_8950c80944f7009505cebf429c443d69660e6ec1cae8db0b8827b88def9a1f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 28
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/javascript/jquery.are-you-sure.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': 'You haven\\'t saved the changes made on this form.' });
        });
    </script>

    <script src=\"";
        // line 37
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
        
        $__internal_8950c80944f7009505cebf429c443d69660e6ec1cae8db0b8827b88def9a1f0f->leave($__internal_8950c80944f7009505cebf429c443d69660e6ec1cae8db0b8827b88def9a1f0f_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 37,  150 => 30,  144 => 28,  138 => 27,  129 => 24,  124 => 23,  118 => 22,  108 => 18,  95 => 17,  89 => 16,  79 => 13,  76 => 12,  70 => 11,  58 => 9,  46 => 8,  39 => 6,  37 => 4,  35 => 3,  33 => 1,  24 => 6,);
    }
}
/* {% form_theme form with easyadmin_config('design.form_theme') %}*/
/* */
/* {% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}*/
/* {% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}*/
/* */
/* {% extends _entity_config.templates.layout %}*/
/* */
/* {% block body_id 'easyadmin-new-' ~ _entity_config.name %}*/
/* {% block body_class 'new new-' ~ _entity_config.name|lower %}*/
/* */
/* {% block content_title %}*/
/*     {% set _default_title = 'new.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}*/
/*     {{ _entity_config.new.title|default(_default_title)|trans(_trans_parameters) }}*/
/* {% endblock %}*/
/* */
/* {% block main %}*/
/*     {% block entity_form %}*/
/*         {{ form(form) }}*/
/*     {% endblock entity_form %}*/
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
/*             $('.new-form').areYouSure({ 'message': 'You haven\'t saved the changes made on this form.' });*/
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
