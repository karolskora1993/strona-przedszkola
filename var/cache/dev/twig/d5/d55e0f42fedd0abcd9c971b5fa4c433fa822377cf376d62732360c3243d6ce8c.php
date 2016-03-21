<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_c85816ece161d4f2e7630f3621807ab0157ed703393b16b443e305e5de45eb36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e0b4168f700397f29df31a98869e2f632f6620b82e56fe36d05aacd48411ed8 = $this->env->getExtension("native_profiler");
        $__internal_1e0b4168f700397f29df31a98869e2f632f6620b82e56fe36d05aacd48411ed8->enter($__internal_1e0b4168f700397f29df31a98869e2f632f6620b82e56fe36d05aacd48411ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "</head>
<body>
<div class=\"container\">
    <br>
";
        // line 13
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 14
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 15
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 16
                    echo "            <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                ";
                    // line 17
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 22
        echo "
<div>
    ";
        // line 24
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 26
        echo "</div>
";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo "</div>
</body>
</html>
";
        
        $__internal_1e0b4168f700397f29df31a98869e2f632f6620b82e56fe36d05aacd48411ed8->leave($__internal_1e0b4168f700397f29df31a98869e2f632f6620b82e56fe36d05aacd48411ed8_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2498a5573b8475be60821d5769d00bff29a738b99bc40d3d16a374cb34e37bc9 = $this->env->getExtension("native_profiler");
        $__internal_2498a5573b8475be60821d5769d00bff29a738b99bc40d3d16a374cb34e37bc9->enter($__internal_2498a5573b8475be60821d5769d00bff29a738b99bc40d3d16a374cb34e37bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/theme.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_2498a5573b8475be60821d5769d00bff29a738b99bc40d3d16a374cb34e37bc9->leave($__internal_2498a5573b8475be60821d5769d00bff29a738b99bc40d3d16a374cb34e37bc9_prof);

    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_03b75ee289815d1754a2399c84381f1992b310d448495675103870acbbfe9a06 = $this->env->getExtension("native_profiler");
        $__internal_03b75ee289815d1754a2399c84381f1992b310d448495675103870acbbfe9a06->enter($__internal_03b75ee289815d1754a2399c84381f1992b310d448495675103870acbbfe9a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 25
        echo "    ";
        
        $__internal_03b75ee289815d1754a2399c84381f1992b310d448495675103870acbbfe9a06->leave($__internal_03b75ee289815d1754a2399c84381f1992b310d448495675103870acbbfe9a06_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0a5cc91d2827c2fabc2560149dd8c269ab6090bb34f47ecffd933f11f6586c94 = $this->env->getExtension("native_profiler");
        $__internal_0a5cc91d2827c2fabc2560149dd8c269ab6090bb34f47ecffd933f11f6586c94->enter($__internal_0a5cc91d2827c2fabc2560149dd8c269ab6090bb34f47ecffd933f11f6586c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_0a5cc91d2827c2fabc2560149dd8c269ab6090bb34f47ecffd933f11f6586c94->leave($__internal_0a5cc91d2827c2fabc2560149dd8c269ab6090bb34f47ecffd933f11f6586c94_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 29,  132 => 28,  126 => 27,  119 => 25,  113 => 24,  104 => 7,  99 => 6,  93 => 5,  83 => 31,  81 => 27,  78 => 26,  76 => 24,  72 => 22,  65 => 20,  56 => 17,  51 => 16,  46 => 15,  41 => 14,  39 => 13,  33 => 9,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="{{ asset('css/theme.min.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('css/custom.css') }}">*/
/*     {% endblock %}*/
/* </head>*/
/* <body>*/
/* <div class="container">*/
/*     <br>*/
/* {% if app.request.hasPreviousSession %}*/
/*     {% for type, messages in app.session.flashbag.all() %}*/
/*         {% for message in messages %}*/
/*             <div class="flash-{{ type }}">*/
/*                 {{ message }}*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% endfor %}*/
/* {% endif %}*/
/* */
/* <div>*/
/*     {% block fos_user_content %}*/
/*     {% endblock fos_user_content %}*/
/* </div>*/
/* {% block javascripts %}*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*     <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/* {% endblock %}*/
/* </div>*/
/* </body>*/
/* </html>*/
/* */
