<?php

/* ::logopedia.html.twig */
class __TwigTemplate_62241a316f46cc288fcf9c9d4114fe424f912db2b9e5df3700d9f89112939a81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "::logopedia.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0153db12f4489a652d0fb744b8099d848a9904203476009d96c36afdde36cfd = $this->env->getExtension("native_profiler");
        $__internal_c0153db12f4489a652d0fb744b8099d848a9904203476009d96c36afdde36cfd->enter($__internal_c0153db12f4489a652d0fb744b8099d848a9904203476009d96c36afdde36cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::logopedia.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0153db12f4489a652d0fb744b8099d848a9904203476009d96c36afdde36cfd->leave($__internal_c0153db12f4489a652d0fb744b8099d848a9904203476009d96c36afdde36cfd_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_199665cdeabc234e7d7f9511822adf5194171a72f10c9919b329a8a3af05ede8 = $this->env->getExtension("native_profiler");
        $__internal_199665cdeabc234e7d7f9511822adf5194171a72f10c9919b329a8a3af05ede8->enter($__internal_199665cdeabc234e7d7f9511822adf5194171a72f10c9919b329a8a3af05ede8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<div class=\"row row-green\">
        <div class=\"container animatedParent\">
            <div class=\"col-md-12\">
                <div class=\"panel-body\">
                        <div class=\"panel panel-success animated bounceInLeft\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</h3>
                            </div>
                            <div class=\"panel-body\">
                                ";
        // line 12
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "article", array());
        echo "
                            </div>
                            <div class=\"panel-footer\"><p style=\"text-align:right\">Autor:";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "author", array()), "html", null, true);
        echo "</p></div>
                        </div>
    </div>
    </div>
    </div>
    </div>
";
        
        $__internal_199665cdeabc234e7d7f9511822adf5194171a72f10c9919b329a8a3af05ede8->leave($__internal_199665cdeabc234e7d7f9511822adf5194171a72f10c9919b329a8a3af05ede8_prof);

    }

    public function getTemplateName()
    {
        return "::logopedia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 14,  54 => 12,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig'%}*/
/* {% block content %}*/
/* <div class="row row-green">*/
/*         <div class="container animatedParent">*/
/*             <div class="col-md-12">*/
/*                 <div class="panel-body">*/
/*                         <div class="panel panel-success animated bounceInLeft">*/
/*                             <div class="panel-heading">*/
/*                                 <h3 class="panel-title">{{ article.title }}</h3>*/
/*                             </div>*/
/*                             <div class="panel-body">*/
/*                                 {{ article.article | raw }}*/
/*                             </div>*/
/*                             <div class="panel-footer"><p style="text-align:right">Autor:{{ article.author }}</p></div>*/
/*                         </div>*/
/*     </div>*/
/*     </div>*/
/*     </div>*/
/*     </div>*/
/* {% endblock %}*/
