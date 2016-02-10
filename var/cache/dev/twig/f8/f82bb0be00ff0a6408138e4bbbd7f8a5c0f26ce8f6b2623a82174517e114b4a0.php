<?php

/* @EasyAdmin/default/new.html.twig */
class __TwigTemplate_6485d85db55c7fb30335038ffbe99f8103ade4044befa5f73ef95758e3d3cc13 extends Twig_Template
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
        $__internal_45acc624b2a26fc4527eacf94cbbe4c550f8951a83718ef59bcc5a672d5223c0 = $this->env->getExtension("native_profiler");
        $__internal_45acc624b2a26fc4527eacf94cbbe4c550f8951a83718ef59bcc5a672d5223c0->enter($__internal_45acc624b2a26fc4527eacf94cbbe4c550f8951a83718ef59bcc5a672d5223c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        // line 1
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array())));
        // line 6
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45acc624b2a26fc4527eacf94cbbe4c550f8951a83718ef59bcc5a672d5223c0->leave($__internal_45acc624b2a26fc4527eacf94cbbe4c550f8951a83718ef59bcc5a672d5223c0_prof);

    }

    // line 8
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_477c7307a05e2dc663c1a1515ad1a1b0e485f4e1fcdd93c137a9a1900991c67f = $this->env->getExtension("native_profiler");
        $__internal_477c7307a05e2dc663c1a1515ad1a1b0e485f4e1fcdd93c137a9a1900991c67f->enter($__internal_477c7307a05e2dc663c1a1515ad1a1b0e485f4e1fcdd93c137a9a1900991c67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_477c7307a05e2dc663c1a1515ad1a1b0e485f4e1fcdd93c137a9a1900991c67f->leave($__internal_477c7307a05e2dc663c1a1515ad1a1b0e485f4e1fcdd93c137a9a1900991c67f_prof);

    }

    // line 9
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_3ca4d709d816d3105ed535e7be62493250834bce874ac5f6d714ce2ddfc99e31 = $this->env->getExtension("native_profiler");
        $__internal_3ca4d709d816d3105ed535e7be62493250834bce874ac5f6d714ce2ddfc99e31->enter($__internal_3ca4d709d816d3105ed535e7be62493250834bce874ac5f6d714ce2ddfc99e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_3ca4d709d816d3105ed535e7be62493250834bce874ac5f6d714ce2ddfc99e31->leave($__internal_3ca4d709d816d3105ed535e7be62493250834bce874ac5f6d714ce2ddfc99e31_prof);

    }

    // line 11
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_d0507bab6d1acf62c49a9cd15b0fc18fff3932a22fcee49ecbb41d458bd9051f = $this->env->getExtension("native_profiler");
        $__internal_d0507bab6d1acf62c49a9cd15b0fc18fff3932a22fcee49ecbb41d458bd9051f->enter($__internal_d0507bab6d1acf62c49a9cd15b0fc18fff3932a22fcee49ecbb41d458bd9051f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 12
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('translator')->trans("new.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "new", array(), "any", false, true), "title", array()), (isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))) : ((isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters"))), "html", null, true);
        echo "
";
        
        $__internal_d0507bab6d1acf62c49a9cd15b0fc18fff3932a22fcee49ecbb41d458bd9051f->leave($__internal_d0507bab6d1acf62c49a9cd15b0fc18fff3932a22fcee49ecbb41d458bd9051f_prof);

    }

    // line 16
    public function block_main($context, array $blocks = array())
    {
        $__internal_a5ae090576fe1e7a7cbdb361fd132c70e0c7008a5aa37ffc51eb4f1be6aac9c3 = $this->env->getExtension("native_profiler");
        $__internal_a5ae090576fe1e7a7cbdb361fd132c70e0c7008a5aa37ffc51eb4f1be6aac9c3->enter($__internal_a5ae090576fe1e7a7cbdb361fd132c70e0c7008a5aa37ffc51eb4f1be6aac9c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 17
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_a5ae090576fe1e7a7cbdb361fd132c70e0c7008a5aa37ffc51eb4f1be6aac9c3->leave($__internal_a5ae090576fe1e7a7cbdb361fd132c70e0c7008a5aa37ffc51eb4f1be6aac9c3_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_9efa3bc8c4f786c5b38ecdef72c5f5bf578a773dc8decaa44d31453e6fc207c0 = $this->env->getExtension("native_profiler");
        $__internal_9efa3bc8c4f786c5b38ecdef72c5f5bf578a773dc8decaa44d31453e6fc207c0->enter($__internal_9efa3bc8c4f786c5b38ecdef72c5f5bf578a773dc8decaa44d31453e6fc207c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 18
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_9efa3bc8c4f786c5b38ecdef72c5f5bf578a773dc8decaa44d31453e6fc207c0->leave($__internal_9efa3bc8c4f786c5b38ecdef72c5f5bf578a773dc8decaa44d31453e6fc207c0_prof);

    }

    // line 22
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_c88ae8941fd2fb9e366f2f857b9cc8f77a64f58d7482e17931fc841b7ffcb735 = $this->env->getExtension("native_profiler");
        $__internal_c88ae8941fd2fb9e366f2f857b9cc8f77a64f58d7482e17931fc841b7ffcb735->enter($__internal_c88ae8941fd2fb9e366f2f857b9cc8f77a64f58d7482e17931fc841b7ffcb735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 23
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/select2-bootstrap.min.css"), "html", null, true);
        echo "\">
    ";
        // line 24
        $this->displayParentBlock("head_stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_c88ae8941fd2fb9e366f2f857b9cc8f77a64f58d7482e17931fc841b7ffcb735->leave($__internal_c88ae8941fd2fb9e366f2f857b9cc8f77a64f58d7482e17931fc841b7ffcb735_prof);

    }

    // line 27
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_f980426452fca88fa7520e3cc30be90b4a7a41028d5e65794f9917f4c2030c1b = $this->env->getExtension("native_profiler");
        $__internal_f980426452fca88fa7520e3cc30be90b4a7a41028d5e65794f9917f4c2030c1b->enter($__internal_f980426452fca88fa7520e3cc30be90b4a7a41028d5e65794f9917f4c2030c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_f980426452fca88fa7520e3cc30be90b4a7a41028d5e65794f9917f4c2030c1b->leave($__internal_f980426452fca88fa7520e3cc30be90b4a7a41028d5e65794f9917f4c2030c1b_prof);

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
