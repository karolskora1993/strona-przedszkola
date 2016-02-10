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
        $__internal_0270a5e5be7dcd3013c0d4dc0da807db60e30d4a086f07370aa8b73175681721 = $this->env->getExtension("native_profiler");
        $__internal_0270a5e5be7dcd3013c0d4dc0da807db60e30d4a086f07370aa8b73175681721->enter($__internal_0270a5e5be7dcd3013c0d4dc0da807db60e30d4a086f07370aa8b73175681721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        // line 1
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array())));
        // line 6
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0270a5e5be7dcd3013c0d4dc0da807db60e30d4a086f07370aa8b73175681721->leave($__internal_0270a5e5be7dcd3013c0d4dc0da807db60e30d4a086f07370aa8b73175681721_prof);

    }

    // line 8
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_f1b4948820a82a2d76ea3e6d877b70eefdbe8b1b67e8106e901c8df42fb3aad1 = $this->env->getExtension("native_profiler");
        $__internal_f1b4948820a82a2d76ea3e6d877b70eefdbe8b1b67e8106e901c8df42fb3aad1->enter($__internal_f1b4948820a82a2d76ea3e6d877b70eefdbe8b1b67e8106e901c8df42fb3aad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_f1b4948820a82a2d76ea3e6d877b70eefdbe8b1b67e8106e901c8df42fb3aad1->leave($__internal_f1b4948820a82a2d76ea3e6d877b70eefdbe8b1b67e8106e901c8df42fb3aad1_prof);

    }

    // line 9
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_3b256949cef12de84475303a42310cf83613376b4a8ac52c0a755e7a9d8a3e8c = $this->env->getExtension("native_profiler");
        $__internal_3b256949cef12de84475303a42310cf83613376b4a8ac52c0a755e7a9d8a3e8c->enter($__internal_3b256949cef12de84475303a42310cf83613376b4a8ac52c0a755e7a9d8a3e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_3b256949cef12de84475303a42310cf83613376b4a8ac52c0a755e7a9d8a3e8c->leave($__internal_3b256949cef12de84475303a42310cf83613376b4a8ac52c0a755e7a9d8a3e8c_prof);

    }

    // line 11
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_4b81f63a9201de57ebf5dbfd19983f20a8ae051c1f59d5012bd03fbc8b6c6de3 = $this->env->getExtension("native_profiler");
        $__internal_4b81f63a9201de57ebf5dbfd19983f20a8ae051c1f59d5012bd03fbc8b6c6de3->enter($__internal_4b81f63a9201de57ebf5dbfd19983f20a8ae051c1f59d5012bd03fbc8b6c6de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 12
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('translator')->trans("new.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "new", array(), "any", false, true), "title", array()), (isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))) : ((isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters"))), "html", null, true);
        echo "
";
        
        $__internal_4b81f63a9201de57ebf5dbfd19983f20a8ae051c1f59d5012bd03fbc8b6c6de3->leave($__internal_4b81f63a9201de57ebf5dbfd19983f20a8ae051c1f59d5012bd03fbc8b6c6de3_prof);

    }

    // line 16
    public function block_main($context, array $blocks = array())
    {
        $__internal_d43c01db663421a77259299ab48fb37ffe7011299c17f1f0cbc426f7cbbcc92d = $this->env->getExtension("native_profiler");
        $__internal_d43c01db663421a77259299ab48fb37ffe7011299c17f1f0cbc426f7cbbcc92d->enter($__internal_d43c01db663421a77259299ab48fb37ffe7011299c17f1f0cbc426f7cbbcc92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 17
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_d43c01db663421a77259299ab48fb37ffe7011299c17f1f0cbc426f7cbbcc92d->leave($__internal_d43c01db663421a77259299ab48fb37ffe7011299c17f1f0cbc426f7cbbcc92d_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_532fef5a04a3d630c3e08b66312fb40f0c5ce8847e1bdd3bccd2026eeae7014a = $this->env->getExtension("native_profiler");
        $__internal_532fef5a04a3d630c3e08b66312fb40f0c5ce8847e1bdd3bccd2026eeae7014a->enter($__internal_532fef5a04a3d630c3e08b66312fb40f0c5ce8847e1bdd3bccd2026eeae7014a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 18
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_532fef5a04a3d630c3e08b66312fb40f0c5ce8847e1bdd3bccd2026eeae7014a->leave($__internal_532fef5a04a3d630c3e08b66312fb40f0c5ce8847e1bdd3bccd2026eeae7014a_prof);

    }

    // line 22
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_54356aaa1a4328c1ebd37bd64168b69d1a9b36015424f6be62efe73342b6a738 = $this->env->getExtension("native_profiler");
        $__internal_54356aaa1a4328c1ebd37bd64168b69d1a9b36015424f6be62efe73342b6a738->enter($__internal_54356aaa1a4328c1ebd37bd64168b69d1a9b36015424f6be62efe73342b6a738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 23
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/select2-bootstrap.min.css"), "html", null, true);
        echo "\">
    ";
        // line 24
        $this->displayParentBlock("head_stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_54356aaa1a4328c1ebd37bd64168b69d1a9b36015424f6be62efe73342b6a738->leave($__internal_54356aaa1a4328c1ebd37bd64168b69d1a9b36015424f6be62efe73342b6a738_prof);

    }

    // line 27
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_0969d2f69dba106a26a5d5647637db9e146deaa0498c2e02e81973651662b96a = $this->env->getExtension("native_profiler");
        $__internal_0969d2f69dba106a26a5d5647637db9e146deaa0498c2e02e81973651662b96a->enter($__internal_0969d2f69dba106a26a5d5647637db9e146deaa0498c2e02e81973651662b96a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_0969d2f69dba106a26a5d5647637db9e146deaa0498c2e02e81973651662b96a->leave($__internal_0969d2f69dba106a26a5d5647637db9e146deaa0498c2e02e81973651662b96a_prof);

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
