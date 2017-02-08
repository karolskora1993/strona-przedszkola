<?php

/* ::logopedia.html.twig */
class __TwigTemplate_f1c08334f7eaad29bb1aea51b0c5e151be5b7a7ce6e4c4e3cf23f16187aba1a2 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"row row-green\">
        <div class=\"container animatedParent\">
            <div class=\"col-md-12\">
                <div class=\"panel-body\">
                        <div class=\"panel panel-success animated bounceInLeft\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "html", null, true);
        echo "</h3>
                            </div>
                            <div class=\"panel-body\">
                                ";
        // line 12
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "article", array());
        echo "
                            </div>
                            <div class=\"panel-footer\"><p style=\"text-align:right\">Autor:";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "author", array()), "html", null, true);
        echo "</p></div>
                        </div>
    </div>
    </div>
    </div>
    </div>
";
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
        return array (  50 => 14,  45 => 12,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
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
