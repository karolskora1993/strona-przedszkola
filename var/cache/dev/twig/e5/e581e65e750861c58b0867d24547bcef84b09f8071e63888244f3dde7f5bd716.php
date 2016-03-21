<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_0b13f864eb4f821ba41c8357f5f26891c25bcc35829002ccb15a638c8f21082c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_7875cdfc34a02a5f865e1a9b6ed63400a937a276fc104b940db51b7e9db45b71 = $this->env->getExtension("native_profiler");
        $__internal_7875cdfc34a02a5f865e1a9b6ed63400a937a276fc104b940db51b7e9db45b71->enter($__internal_7875cdfc34a02a5f865e1a9b6ed63400a937a276fc104b940db51b7e9db45b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7875cdfc34a02a5f865e1a9b6ed63400a937a276fc104b940db51b7e9db45b71->leave($__internal_7875cdfc34a02a5f865e1a9b6ed63400a937a276fc104b940db51b7e9db45b71_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9c6e1c47265f5cd08c43dbee4a7711ebb515546eb82a4a941d10b5998065c499 = $this->env->getExtension("native_profiler");
        $__internal_9c6e1c47265f5cd08c43dbee4a7711ebb515546eb82a4a941d10b5998065c499->enter($__internal_9c6e1c47265f5cd08c43dbee4a7711ebb515546eb82a4a941d10b5998065c499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9c6e1c47265f5cd08c43dbee4a7711ebb515546eb82a4a941d10b5998065c499->leave($__internal_9c6e1c47265f5cd08c43dbee4a7711ebb515546eb82a4a941d10b5998065c499_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_966a45e1af1d1e5b15de3b7123ea243b1b72c242b4d6a4a5cd5148b0650e0a87 = $this->env->getExtension("native_profiler");
        $__internal_966a45e1af1d1e5b15de3b7123ea243b1b72c242b4d6a4a5cd5148b0650e0a87->enter($__internal_966a45e1af1d1e5b15de3b7123ea243b1b72c242b4d6a4a5cd5148b0650e0a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_966a45e1af1d1e5b15de3b7123ea243b1b72c242b4d6a4a5cd5148b0650e0a87->leave($__internal_966a45e1af1d1e5b15de3b7123ea243b1b72c242b4d6a4a5cd5148b0650e0a87_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e6d0352a15f72240c770090c96f5a9ba1e7c77d1b93cf12767a285083b9a1576 = $this->env->getExtension("native_profiler");
        $__internal_e6d0352a15f72240c770090c96f5a9ba1e7c77d1b93cf12767a285083b9a1576->enter($__internal_e6d0352a15f72240c770090c96f5a9ba1e7c77d1b93cf12767a285083b9a1576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e6d0352a15f72240c770090c96f5a9ba1e7c77d1b93cf12767a285083b9a1576->leave($__internal_e6d0352a15f72240c770090c96f5a9ba1e7c77d1b93cf12767a285083b9a1576_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
