<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_951b0599781c1a67ffd41e84ff59c6a0ae2dc2b800eade948fefc6635561c3e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be4ec5451fd8870217ed3e4cae665b2d50d70146b6ddbedb9bca7b6561e2b372 = $this->env->getExtension("native_profiler");
        $__internal_be4ec5451fd8870217ed3e4cae665b2d50d70146b6ddbedb9bca7b6561e2b372->enter($__internal_be4ec5451fd8870217ed3e4cae665b2d50d70146b6ddbedb9bca7b6561e2b372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be4ec5451fd8870217ed3e4cae665b2d50d70146b6ddbedb9bca7b6561e2b372->leave($__internal_be4ec5451fd8870217ed3e4cae665b2d50d70146b6ddbedb9bca7b6561e2b372_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bc8e87c37776c1876ee63e1989608a78066aa9a1a89bb93a37de4ed0cb786ff9 = $this->env->getExtension("native_profiler");
        $__internal_bc8e87c37776c1876ee63e1989608a78066aa9a1a89bb93a37de4ed0cb786ff9->enter($__internal_bc8e87c37776c1876ee63e1989608a78066aa9a1a89bb93a37de4ed0cb786ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bc8e87c37776c1876ee63e1989608a78066aa9a1a89bb93a37de4ed0cb786ff9->leave($__internal_bc8e87c37776c1876ee63e1989608a78066aa9a1a89bb93a37de4ed0cb786ff9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_13d0cfcb971c99751b5e5799501382f6641a6de54b3ff117c0d361f595cafa27 = $this->env->getExtension("native_profiler");
        $__internal_13d0cfcb971c99751b5e5799501382f6641a6de54b3ff117c0d361f595cafa27->enter($__internal_13d0cfcb971c99751b5e5799501382f6641a6de54b3ff117c0d361f595cafa27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_13d0cfcb971c99751b5e5799501382f6641a6de54b3ff117c0d361f595cafa27->leave($__internal_13d0cfcb971c99751b5e5799501382f6641a6de54b3ff117c0d361f595cafa27_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8a7e31d91fb93ddfc72948b15403858c27550568134d468b2498fb1abfc4ac38 = $this->env->getExtension("native_profiler");
        $__internal_8a7e31d91fb93ddfc72948b15403858c27550568134d468b2498fb1abfc4ac38->enter($__internal_8a7e31d91fb93ddfc72948b15403858c27550568134d468b2498fb1abfc4ac38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8a7e31d91fb93ddfc72948b15403858c27550568134d468b2498fb1abfc4ac38->leave($__internal_8a7e31d91fb93ddfc72948b15403858c27550568134d468b2498fb1abfc4ac38_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
