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
        $__internal_e87446285b2131f4efcbaca0f2949287ce19096b9e203fa5724b1f2f941b6c77 = $this->env->getExtension("native_profiler");
        $__internal_e87446285b2131f4efcbaca0f2949287ce19096b9e203fa5724b1f2f941b6c77->enter($__internal_e87446285b2131f4efcbaca0f2949287ce19096b9e203fa5724b1f2f941b6c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e87446285b2131f4efcbaca0f2949287ce19096b9e203fa5724b1f2f941b6c77->leave($__internal_e87446285b2131f4efcbaca0f2949287ce19096b9e203fa5724b1f2f941b6c77_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ff0f20bb99d6e31185c535b7646949ddd95ab9fdceabb0533e226fe5c2ac4449 = $this->env->getExtension("native_profiler");
        $__internal_ff0f20bb99d6e31185c535b7646949ddd95ab9fdceabb0533e226fe5c2ac4449->enter($__internal_ff0f20bb99d6e31185c535b7646949ddd95ab9fdceabb0533e226fe5c2ac4449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ff0f20bb99d6e31185c535b7646949ddd95ab9fdceabb0533e226fe5c2ac4449->leave($__internal_ff0f20bb99d6e31185c535b7646949ddd95ab9fdceabb0533e226fe5c2ac4449_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a170c1ebccac2594c91674f66b332dc28f1c6a6d8b679cb1619e56a5210bdc6c = $this->env->getExtension("native_profiler");
        $__internal_a170c1ebccac2594c91674f66b332dc28f1c6a6d8b679cb1619e56a5210bdc6c->enter($__internal_a170c1ebccac2594c91674f66b332dc28f1c6a6d8b679cb1619e56a5210bdc6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a170c1ebccac2594c91674f66b332dc28f1c6a6d8b679cb1619e56a5210bdc6c->leave($__internal_a170c1ebccac2594c91674f66b332dc28f1c6a6d8b679cb1619e56a5210bdc6c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_223b696ddc021f75948bba64ee73c82ef13fc2ab55040fb51a59a2a65044318c = $this->env->getExtension("native_profiler");
        $__internal_223b696ddc021f75948bba64ee73c82ef13fc2ab55040fb51a59a2a65044318c->enter($__internal_223b696ddc021f75948bba64ee73c82ef13fc2ab55040fb51a59a2a65044318c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_223b696ddc021f75948bba64ee73c82ef13fc2ab55040fb51a59a2a65044318c->leave($__internal_223b696ddc021f75948bba64ee73c82ef13fc2ab55040fb51a59a2a65044318c_prof);

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
