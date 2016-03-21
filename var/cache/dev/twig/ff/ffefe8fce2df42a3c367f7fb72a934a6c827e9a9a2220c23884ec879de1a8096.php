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
        $__internal_833e9d023f642234fcf57a7475074d14006b74be69ac6ddbe5345a1f317abb06 = $this->env->getExtension("native_profiler");
        $__internal_833e9d023f642234fcf57a7475074d14006b74be69ac6ddbe5345a1f317abb06->enter($__internal_833e9d023f642234fcf57a7475074d14006b74be69ac6ddbe5345a1f317abb06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_833e9d023f642234fcf57a7475074d14006b74be69ac6ddbe5345a1f317abb06->leave($__internal_833e9d023f642234fcf57a7475074d14006b74be69ac6ddbe5345a1f317abb06_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e5e8abc64748e19a3e9d860fd0779f403bd45e9caa5423fb023ac4e847643f12 = $this->env->getExtension("native_profiler");
        $__internal_e5e8abc64748e19a3e9d860fd0779f403bd45e9caa5423fb023ac4e847643f12->enter($__internal_e5e8abc64748e19a3e9d860fd0779f403bd45e9caa5423fb023ac4e847643f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Strona Przedszkola Miejskiego nr3 w Łańcucie";
        
        $__internal_e5e8abc64748e19a3e9d860fd0779f403bd45e9caa5423fb023ac4e847643f12->leave($__internal_e5e8abc64748e19a3e9d860fd0779f403bd45e9caa5423fb023ac4e847643f12_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_58848ab2bee8131081efc4d7b0b6696218350728cf92088bce993f12db618a58 = $this->env->getExtension("native_profiler");
        $__internal_58848ab2bee8131081efc4d7b0b6696218350728cf92088bce993f12db618a58->enter($__internal_58848ab2bee8131081efc4d7b0b6696218350728cf92088bce993f12db618a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_58848ab2bee8131081efc4d7b0b6696218350728cf92088bce993f12db618a58->leave($__internal_58848ab2bee8131081efc4d7b0b6696218350728cf92088bce993f12db618a58_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5c421775f4fd92be7dd1024e946619dc648933dc32ff873212cbc45b33b7451 = $this->env->getExtension("native_profiler");
        $__internal_c5c421775f4fd92be7dd1024e946619dc648933dc32ff873212cbc45b33b7451->enter($__internal_c5c421775f4fd92be7dd1024e946619dc648933dc32ff873212cbc45b33b7451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c5c421775f4fd92be7dd1024e946619dc648933dc32ff873212cbc45b33b7451->leave($__internal_c5c421775f4fd92be7dd1024e946619dc648933dc32ff873212cbc45b33b7451_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6394d5ca0f311b3bb39e9a5a1c22b6fe6e6d3dc97d8b75a2f15c4025d1774eb5 = $this->env->getExtension("native_profiler");
        $__internal_6394d5ca0f311b3bb39e9a5a1c22b6fe6e6d3dc97d8b75a2f15c4025d1774eb5->enter($__internal_6394d5ca0f311b3bb39e9a5a1c22b6fe6e6d3dc97d8b75a2f15c4025d1774eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_6394d5ca0f311b3bb39e9a5a1c22b6fe6e6d3dc97d8b75a2f15c4025d1774eb5->leave($__internal_6394d5ca0f311b3bb39e9a5a1c22b6fe6e6d3dc97d8b75a2f15c4025d1774eb5_prof);

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
