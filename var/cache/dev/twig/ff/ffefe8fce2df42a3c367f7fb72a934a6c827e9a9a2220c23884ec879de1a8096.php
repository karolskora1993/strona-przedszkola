<?php

/* base.html.twig */
class __TwigTemplate_6626640f7945d904c3a95da7b03be4950521cf92a9393e0692d7df468f4fced1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_659b80be13ac168405d3367ede4dc469a905ef09f109bbb7985076256ff6cf4c = $this->env->getExtension("native_profiler");
        $__internal_659b80be13ac168405d3367ede4dc469a905ef09f109bbb7985076256ff6cf4c->enter($__internal_659b80be13ac168405d3367ede4dc469a905ef09f109bbb7985076256ff6cf4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pl\">
<head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    <script>
        \$(document).load(function() {
            // Animate loader off screen
            \$(\".se-pre-con\").fadeOut(\"slow\");
        });
    </script>

</head>
<body>
";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "</body>
</html>
";
        
        $__internal_659b80be13ac168405d3367ede4dc469a905ef09f109bbb7985076256ff6cf4c->leave($__internal_659b80be13ac168405d3367ede4dc469a905ef09f109bbb7985076256ff6cf4c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5339885d443ccfc85b6f85ef64c0ec434e89bb6bc0bab4c5d3c80cfcb90aac9 = $this->env->getExtension("native_profiler");
        $__internal_b5339885d443ccfc85b6f85ef64c0ec434e89bb6bc0bab4c5d3c80cfcb90aac9->enter($__internal_b5339885d443ccfc85b6f85ef64c0ec434e89bb6bc0bab4c5d3c80cfcb90aac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Strona Przedszkola Miejskiego nr3 w Łańcucie";
        
        $__internal_b5339885d443ccfc85b6f85ef64c0ec434e89bb6bc0bab4c5d3c80cfcb90aac9->leave($__internal_b5339885d443ccfc85b6f85ef64c0ec434e89bb6bc0bab4c5d3c80cfcb90aac9_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_21bd1eb9b5a1bc836916cc96797b37eecb9101e30d0b28fa10f644150c1cbaf1 = $this->env->getExtension("native_profiler");
        $__internal_21bd1eb9b5a1bc836916cc96797b37eecb9101e30d0b28fa10f644150c1cbaf1->enter($__internal_21bd1eb9b5a1bc836916cc96797b37eecb9101e30d0b28fa10f644150c1cbaf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/theme.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/animations.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_21bd1eb9b5a1bc836916cc96797b37eecb9101e30d0b28fa10f644150c1cbaf1->leave($__internal_21bd1eb9b5a1bc836916cc96797b37eecb9101e30d0b28fa10f644150c1cbaf1_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_dde4c99d93b544f684c4b8f46ebb09c5e77d11e1b6053c355d756bfb036dbd52 = $this->env->getExtension("native_profiler");
        $__internal_dde4c99d93b544f684c4b8f46ebb09c5e77d11e1b6053c355d756bfb036dbd52->enter($__internal_dde4c99d93b544f684c4b8f46ebb09c5e77d11e1b6053c355d756bfb036dbd52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dde4c99d93b544f684c4b8f46ebb09c5e77d11e1b6053c355d756bfb036dbd52->leave($__internal_dde4c99d93b544f684c4b8f46ebb09c5e77d11e1b6053c355d756bfb036dbd52_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d1fa54308e5457ef77fd48eeba4b3676f4be27cb655d669b47ee7652aaf7d5fd = $this->env->getExtension("native_profiler");
        $__internal_d1fa54308e5457ef77fd48eeba4b3676f4be27cb655d669b47ee7652aaf7d5fd->enter($__internal_d1fa54308e5457ef77fd48eeba4b3676f4be27cb655d669b47ee7652aaf7d5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/css3-animate-it.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/smooth-scrolling.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_d1fa54308e5457ef77fd48eeba4b3676f4be27cb655d669b47ee7652aaf7d5fd->leave($__internal_d1fa54308e5457ef77fd48eeba4b3676f4be27cb655d669b47ee7652aaf7d5fd_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 37,  139 => 36,  135 => 35,  132 => 34,  126 => 33,  115 => 31,  106 => 12,  102 => 11,  97 => 10,  91 => 9,  79 => 7,  70 => 39,  68 => 33,  65 => 32,  63 => 31,  49 => 20,  41 => 14,  39 => 9,  34 => 7,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="pl">*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <title>{% block title %}Strona Przedszkola Miejskiego nr3 w Łańcucie{% endblock %}</title>*/
/* */
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="{{ asset('css/theme.min.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('css/custom.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('css/animations.css') }}">*/
/*     {% endblock %}*/
/* */
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* */
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*     <script>*/
/*         $(document).load(function() {*/
/*             // Animate loader off screen*/
/*             $(".se-pre-con").fadeOut("slow");*/
/*         });*/
/*     </script>*/
/* */
/* </head>*/
/* <body>*/
/* {% block body %}{% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*     <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*     <script src="{{ asset('js/css3-animate-it.js') }}"></script>*/
/*     <script src="{{ asset('js/smooth-scrolling.js') }}"></script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
