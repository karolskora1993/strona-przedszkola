<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_860ffed1c38be530a790f09b1e4a47392022dac25a72ba2a3830dcca03f1c055 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9abfca23a7a173691e0c47cf1b7125a48bb9c12a18af2fc55c893eb856564b0b = $this->env->getExtension("native_profiler");
        $__internal_9abfca23a7a173691e0c47cf1b7125a48bb9c12a18af2fc55c893eb856564b0b->enter($__internal_9abfca23a7a173691e0c47cf1b7125a48bb9c12a18af2fc55c893eb856564b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9abfca23a7a173691e0c47cf1b7125a48bb9c12a18af2fc55c893eb856564b0b->leave($__internal_9abfca23a7a173691e0c47cf1b7125a48bb9c12a18af2fc55c893eb856564b0b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e758778fa0a9cae0bfb4f3ee12cb7055c90ff9fb78e76f780809c598eaeb7a7d = $this->env->getExtension("native_profiler");
        $__internal_e758778fa0a9cae0bfb4f3ee12cb7055c90ff9fb78e76f780809c598eaeb7a7d->enter($__internal_e758778fa0a9cae0bfb4f3ee12cb7055c90ff9fb78e76f780809c598eaeb7a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e758778fa0a9cae0bfb4f3ee12cb7055c90ff9fb78e76f780809c598eaeb7a7d->leave($__internal_e758778fa0a9cae0bfb4f3ee12cb7055c90ff9fb78e76f780809c598eaeb7a7d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae4d1dbb62a3f90b60269e3b7ae6d35419dab241ef8e4c83afef136a65d5b447 = $this->env->getExtension("native_profiler");
        $__internal_ae4d1dbb62a3f90b60269e3b7ae6d35419dab241ef8e4c83afef136a65d5b447->enter($__internal_ae4d1dbb62a3f90b60269e3b7ae6d35419dab241ef8e4c83afef136a65d5b447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ae4d1dbb62a3f90b60269e3b7ae6d35419dab241ef8e4c83afef136a65d5b447->leave($__internal_ae4d1dbb62a3f90b60269e3b7ae6d35419dab241ef8e4c83afef136a65d5b447_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4326bc8677b0478c0be13c592105ee350813f4302c293ca709f8edbc4d54a4a = $this->env->getExtension("native_profiler");
        $__internal_a4326bc8677b0478c0be13c592105ee350813f4302c293ca709f8edbc4d54a4a->enter($__internal_a4326bc8677b0478c0be13c592105ee350813f4302c293ca709f8edbc4d54a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a4326bc8677b0478c0be13c592105ee350813f4302c293ca709f8edbc4d54a4a->leave($__internal_a4326bc8677b0478c0be13c592105ee350813f4302c293ca709f8edbc4d54a4a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
