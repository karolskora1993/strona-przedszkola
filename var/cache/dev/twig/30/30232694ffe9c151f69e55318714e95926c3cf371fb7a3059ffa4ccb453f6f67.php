<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_b8b471fc729679fd71c76171989e22777e254264f919da7f66247c015a2cdf33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_678453c76f790f06be2744db6db46158ad32054a3e3f2c7ac030265f53f5257e = $this->env->getExtension("native_profiler");
        $__internal_678453c76f790f06be2744db6db46158ad32054a3e3f2c7ac030265f53f5257e->enter($__internal_678453c76f790f06be2744db6db46158ad32054a3e3f2c7ac030265f53f5257e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_678453c76f790f06be2744db6db46158ad32054a3e3f2c7ac030265f53f5257e->leave($__internal_678453c76f790f06be2744db6db46158ad32054a3e3f2c7ac030265f53f5257e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_da3b049c4f16ea844406f6e501b3a473feaf6545f704d3369079c7848c9fa731 = $this->env->getExtension("native_profiler");
        $__internal_da3b049c4f16ea844406f6e501b3a473feaf6545f704d3369079c7848c9fa731->enter($__internal_da3b049c4f16ea844406f6e501b3a473feaf6545f704d3369079c7848c9fa731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "    <div class=\"container\">
        <div class=\"panel-success\">
            <div class=\"panel-heading\">panel logowania</div>
            <div class=\"panel-body\">
                <form  class=\"login-form\" class=\"form-inline\"  action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                    <div class=\"form-group\">
                        <label for=\"username\" class=\"sr-only\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("nazwa użytkownika", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\" placeholder=\"login\"/>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"password\" class=\"sr-only\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("hasło", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"hasło\"/>
                    </div>
                    <div class=\"checkbox\">
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                        <label for=\"remember_me\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("zapamiętaj", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    </div>
                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("zaloguj", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-default\"/>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_da3b049c4f16ea844406f6e501b3a473feaf6545f704d3369079c7848c9fa731->leave($__internal_da3b049c4f16ea844406f6e501b3a473feaf6545f704d3369079c7848c9fa731_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 27,  82 => 25,  74 => 20,  68 => 17,  64 => 16,  59 => 14,  55 => 13,  49 => 9,  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     {% if error %}*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/*     <div class="container">*/
/*         <div class="panel-success">*/
/*             <div class="panel-heading">panel logowania</div>*/
/*             <div class="panel-body">*/
/*                 <form  class="login-form" class="form-inline"  action="{{ path("fos_user_security_check") }}" method="post">*/
/*                     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                     <div class="form-group">*/
/*                         <label for="username" class="sr-only">{{ 'nazwa użytkownika'|trans }}</label>*/
/*                         <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" class="form-control" placeholder="login"/>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label for="password" class="sr-only">{{ 'hasło'|trans }}</label>*/
/*                         <input type="password" id="password" name="_password" required="required" class="form-control" placeholder="hasło"/>*/
/*                     </div>*/
/*                     <div class="checkbox">*/
/*                         <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*                         <label for="remember_me">{{ 'zapamiętaj'|trans }}</label>*/
/*                     </div>*/
/*                     <input type="submit" id="_submit" name="_submit" value="{{ 'zaloguj'|trans }}" class="btn btn-default"/>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* */
