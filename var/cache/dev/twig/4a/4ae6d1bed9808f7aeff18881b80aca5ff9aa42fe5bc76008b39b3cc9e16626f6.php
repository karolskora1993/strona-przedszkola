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
        $__internal_a9506acc0dbc392b51c1a42c2b0df7c03cebad83ab6cf40cb17a10e6bcbd50c7 = $this->env->getExtension("native_profiler");
        $__internal_a9506acc0dbc392b51c1a42c2b0df7c03cebad83ab6cf40cb17a10e6bcbd50c7->enter($__internal_a9506acc0dbc392b51c1a42c2b0df7c03cebad83ab6cf40cb17a10e6bcbd50c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9506acc0dbc392b51c1a42c2b0df7c03cebad83ab6cf40cb17a10e6bcbd50c7->leave($__internal_a9506acc0dbc392b51c1a42c2b0df7c03cebad83ab6cf40cb17a10e6bcbd50c7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7bed5be632f7507764df192577f359340bf08e6af343cdf8b1e0e21cc153549e = $this->env->getExtension("native_profiler");
        $__internal_7bed5be632f7507764df192577f359340bf08e6af343cdf8b1e0e21cc153549e->enter($__internal_7bed5be632f7507764df192577f359340bf08e6af343cdf8b1e0e21cc153549e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7bed5be632f7507764df192577f359340bf08e6af343cdf8b1e0e21cc153549e->leave($__internal_7bed5be632f7507764df192577f359340bf08e6af343cdf8b1e0e21cc153549e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d1ef8adbda8ca870d83d7872bd94aa0f8a2acc739919e8facfd244481c4494a3 = $this->env->getExtension("native_profiler");
        $__internal_d1ef8adbda8ca870d83d7872bd94aa0f8a2acc739919e8facfd244481c4494a3->enter($__internal_d1ef8adbda8ca870d83d7872bd94aa0f8a2acc739919e8facfd244481c4494a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d1ef8adbda8ca870d83d7872bd94aa0f8a2acc739919e8facfd244481c4494a3->leave($__internal_d1ef8adbda8ca870d83d7872bd94aa0f8a2acc739919e8facfd244481c4494a3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c12cfe12aab3120fc53a3b754d07628187b46ab00218a90b9f0cdae13b36568d = $this->env->getExtension("native_profiler");
        $__internal_c12cfe12aab3120fc53a3b754d07628187b46ab00218a90b9f0cdae13b36568d->enter($__internal_c12cfe12aab3120fc53a3b754d07628187b46ab00218a90b9f0cdae13b36568d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c12cfe12aab3120fc53a3b754d07628187b46ab00218a90b9f0cdae13b36568d->leave($__internal_c12cfe12aab3120fc53a3b754d07628187b46ab00218a90b9f0cdae13b36568d_prof);

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
