<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5fbf5897842f1da10520651c3a703c5d33dd3a79e7167c94bce893173ce347c6 extends Twig_Template
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
        $__internal_913ab8ee6dd7f1cb65481e69762aad5e0c76466db33a36d1772078178eab1f08 = $this->env->getExtension("native_profiler");
        $__internal_913ab8ee6dd7f1cb65481e69762aad5e0c76466db33a36d1772078178eab1f08->enter($__internal_913ab8ee6dd7f1cb65481e69762aad5e0c76466db33a36d1772078178eab1f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_913ab8ee6dd7f1cb65481e69762aad5e0c76466db33a36d1772078178eab1f08->leave($__internal_913ab8ee6dd7f1cb65481e69762aad5e0c76466db33a36d1772078178eab1f08_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ce95eff448549b45975c305e5f98db19bff10b9168329d47df63fe5a18269f6f = $this->env->getExtension("native_profiler");
        $__internal_ce95eff448549b45975c305e5f98db19bff10b9168329d47df63fe5a18269f6f->enter($__internal_ce95eff448549b45975c305e5f98db19bff10b9168329d47df63fe5a18269f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ce95eff448549b45975c305e5f98db19bff10b9168329d47df63fe5a18269f6f->leave($__internal_ce95eff448549b45975c305e5f98db19bff10b9168329d47df63fe5a18269f6f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_53d7d66587391d6b7944e6480af8db9482d1456d70a065c005e2d651ccdd5fb0 = $this->env->getExtension("native_profiler");
        $__internal_53d7d66587391d6b7944e6480af8db9482d1456d70a065c005e2d651ccdd5fb0->enter($__internal_53d7d66587391d6b7944e6480af8db9482d1456d70a065c005e2d651ccdd5fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_53d7d66587391d6b7944e6480af8db9482d1456d70a065c005e2d651ccdd5fb0->leave($__internal_53d7d66587391d6b7944e6480af8db9482d1456d70a065c005e2d651ccdd5fb0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c895cd8335924ef606cf97761dcf6fbc1a493b08af3d06ee37db0b9fe2804bc0 = $this->env->getExtension("native_profiler");
        $__internal_c895cd8335924ef606cf97761dcf6fbc1a493b08af3d06ee37db0b9fe2804bc0->enter($__internal_c895cd8335924ef606cf97761dcf6fbc1a493b08af3d06ee37db0b9fe2804bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c895cd8335924ef606cf97761dcf6fbc1a493b08af3d06ee37db0b9fe2804bc0->leave($__internal_c895cd8335924ef606cf97761dcf6fbc1a493b08af3d06ee37db0b9fe2804bc0_prof);

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
