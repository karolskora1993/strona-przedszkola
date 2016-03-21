<?php

/* ::base.html.twig */
class __TwigTemplate_322b2ffc3a0e81af4ff216eb805d1f5def5945ff2a0db29483ca0f369e04bf82 extends Twig_Template
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
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Strona Przedszkola Miejskiego nr3 w Łańcucie";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
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
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 37,  112 => 36,  108 => 35,  105 => 34,  102 => 33,  97 => 31,  91 => 12,  87 => 11,  82 => 10,  79 => 9,  73 => 7,  67 => 39,  65 => 33,  62 => 32,  60 => 31,  46 => 20,  38 => 14,  36 => 9,  31 => 7,  23 => 1,);
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
