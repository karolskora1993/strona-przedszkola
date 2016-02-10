<?php

/* base.html.twig */
class __TwigTemplate_b9bea69393b1aa8e9556057ac22a176a9236e9d22ac61a692b51a0913435184e extends Twig_Template
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
        $__internal_315f9522925c33ba036bfa23779703aec6d296f4e0303f7e0b876302ac775462 = $this->env->getExtension("native_profiler");
        $__internal_315f9522925c33ba036bfa23779703aec6d296f4e0303f7e0b876302ac775462->enter($__internal_315f9522925c33ba036bfa23779703aec6d296f4e0303f7e0b876302ac775462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_315f9522925c33ba036bfa23779703aec6d296f4e0303f7e0b876302ac775462->leave($__internal_315f9522925c33ba036bfa23779703aec6d296f4e0303f7e0b876302ac775462_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c6dae2515cc2bb7f05d89dbbe956dc77a1383f16bc330a04aedfed93ecea9c2 = $this->env->getExtension("native_profiler");
        $__internal_8c6dae2515cc2bb7f05d89dbbe956dc77a1383f16bc330a04aedfed93ecea9c2->enter($__internal_8c6dae2515cc2bb7f05d89dbbe956dc77a1383f16bc330a04aedfed93ecea9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Strona Przedszkola Miejskiego nr3 w Łańcucie";
        
        $__internal_8c6dae2515cc2bb7f05d89dbbe956dc77a1383f16bc330a04aedfed93ecea9c2->leave($__internal_8c6dae2515cc2bb7f05d89dbbe956dc77a1383f16bc330a04aedfed93ecea9c2_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6f1fdf06c83750573a8baac3604f67c74eaa000e0db0ffe51e115b4c3e33901a = $this->env->getExtension("native_profiler");
        $__internal_6f1fdf06c83750573a8baac3604f67c74eaa000e0db0ffe51e115b4c3e33901a->enter($__internal_6f1fdf06c83750573a8baac3604f67c74eaa000e0db0ffe51e115b4c3e33901a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6f1fdf06c83750573a8baac3604f67c74eaa000e0db0ffe51e115b4c3e33901a->leave($__internal_6f1fdf06c83750573a8baac3604f67c74eaa000e0db0ffe51e115b4c3e33901a_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_db157667670d085fa61395f9ff4ba4e2c3cbe2f0ae03ce34917cf8b8995b5b4d = $this->env->getExtension("native_profiler");
        $__internal_db157667670d085fa61395f9ff4ba4e2c3cbe2f0ae03ce34917cf8b8995b5b4d->enter($__internal_db157667670d085fa61395f9ff4ba4e2c3cbe2f0ae03ce34917cf8b8995b5b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_db157667670d085fa61395f9ff4ba4e2c3cbe2f0ae03ce34917cf8b8995b5b4d->leave($__internal_db157667670d085fa61395f9ff4ba4e2c3cbe2f0ae03ce34917cf8b8995b5b4d_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bcf0b70c3563391202bb5f3a2a7020822d1ef5d4544ad5ba042f434ab63c52e0 = $this->env->getExtension("native_profiler");
        $__internal_bcf0b70c3563391202bb5f3a2a7020822d1ef5d4544ad5ba042f434ab63c52e0->enter($__internal_bcf0b70c3563391202bb5f3a2a7020822d1ef5d4544ad5ba042f434ab63c52e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_bcf0b70c3563391202bb5f3a2a7020822d1ef5d4544ad5ba042f434ab63c52e0->leave($__internal_bcf0b70c3563391202bb5f3a2a7020822d1ef5d4544ad5ba042f434ab63c52e0_prof);

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
