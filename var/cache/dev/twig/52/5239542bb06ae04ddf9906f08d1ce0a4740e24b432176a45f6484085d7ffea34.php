<?php

/* @EasyAdmin/default/label_inaccessible.html.twig */
class __TwigTemplate_8131bea50b165b47e45fd1e12aff4befd963e0a5d49c1a46b93ec8c1dcd2e732 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2374815abe66f8e773eec403193f1cda539916af87c084df0a983c1418b40ab = $this->env->getExtension("native_profiler");
        $__internal_f2374815abe66f8e773eec403193f1cda539916af87c084df0a983c1418b40ab->enter($__internal_f2374815abe66f8e773eec403193f1cda539916af87c084df0a983c1418b40ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_inaccessible.html.twig"));

        // line 2
        echo "
<span class=\"label label-danger\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.inaccessible.explanation", array(), "EasyAdminBundle"), "html", null, true);
        echo "\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.inaccessible", array(), "EasyAdminBundle"), "html", null, true);
        echo "
</span>
";
        
        $__internal_f2374815abe66f8e773eec403193f1cda539916af87c084df0a983c1418b40ab->leave($__internal_f2374815abe66f8e773eec403193f1cda539916af87c084df0a983c1418b40ab_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_inaccessible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'EasyAdminBundle' %}*/
/* */
/* <span class="label label-danger" title="{{ 'label.inaccessible.explanation'|trans }}">*/
/*     {{ 'label.inaccessible'|trans }}*/
/* </span>*/
/* */
