<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9b268529824b9039ffd07edaa95bbaa3311f5699e9f38ff99bc9a46812c03969 extends Twig_Template
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
        $__internal_3f38afa903dc1a8e2f14de7e31b8787ba4bd8e3af0e3610f0a2a97a33c23b5b4 = $this->env->getExtension("native_profiler");
        $__internal_3f38afa903dc1a8e2f14de7e31b8787ba4bd8e3af0e3610f0a2a97a33c23b5b4->enter($__internal_3f38afa903dc1a8e2f14de7e31b8787ba4bd8e3af0e3610f0a2a97a33c23b5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f38afa903dc1a8e2f14de7e31b8787ba4bd8e3af0e3610f0a2a97a33c23b5b4->leave($__internal_3f38afa903dc1a8e2f14de7e31b8787ba4bd8e3af0e3610f0a2a97a33c23b5b4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bce62b6ea3267b47ea2821b07bcb041b3cdd83a0e408060ac5bb152d77effa99 = $this->env->getExtension("native_profiler");
        $__internal_bce62b6ea3267b47ea2821b07bcb041b3cdd83a0e408060ac5bb152d77effa99->enter($__internal_bce62b6ea3267b47ea2821b07bcb041b3cdd83a0e408060ac5bb152d77effa99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bce62b6ea3267b47ea2821b07bcb041b3cdd83a0e408060ac5bb152d77effa99->leave($__internal_bce62b6ea3267b47ea2821b07bcb041b3cdd83a0e408060ac5bb152d77effa99_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_542ec15ed136cd7047085d71d4561925ddac7e30a10c69ee1fcbfe0b58a3b905 = $this->env->getExtension("native_profiler");
        $__internal_542ec15ed136cd7047085d71d4561925ddac7e30a10c69ee1fcbfe0b58a3b905->enter($__internal_542ec15ed136cd7047085d71d4561925ddac7e30a10c69ee1fcbfe0b58a3b905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_542ec15ed136cd7047085d71d4561925ddac7e30a10c69ee1fcbfe0b58a3b905->leave($__internal_542ec15ed136cd7047085d71d4561925ddac7e30a10c69ee1fcbfe0b58a3b905_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ec9855520ba185741c935043cde4e3ac7b708a54aa74690d7c676d9c2c0630e = $this->env->getExtension("native_profiler");
        $__internal_4ec9855520ba185741c935043cde4e3ac7b708a54aa74690d7c676d9c2c0630e->enter($__internal_4ec9855520ba185741c935043cde4e3ac7b708a54aa74690d7c676d9c2c0630e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4ec9855520ba185741c935043cde4e3ac7b708a54aa74690d7c676d9c2c0630e->leave($__internal_4ec9855520ba185741c935043cde4e3ac7b708a54aa74690d7c676d9c2c0630e_prof);

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
