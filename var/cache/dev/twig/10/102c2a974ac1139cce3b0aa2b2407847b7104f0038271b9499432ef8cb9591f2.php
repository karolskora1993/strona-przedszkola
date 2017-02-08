<?php

/* ::achievement.html.twig */
class __TwigTemplate_90b040deafea1d8d2ad9e082631ed5f7dce28b9337d7f5a15e8fcfb3548bccff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "::achievement.html.twig", 1);
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
        echo "    <div class=\"row row-green\" id=\"osiagniecia\">
        <div class=\"container animatedParent\">
            <div class=\"col-md-12\">
                <div class=\"panel-body\">
                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title \">nasze osiągnięcia</h3>
                        </div>
                        <div class=\"panel-body animated bounceInRight\" id=\"osiagniecia\">
                                <div class=\"row\">
                                    <h3 id=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["year"]) ? $context["year"] : null), "schoolYear", array()), "html", null, true);
        echo "\">Nasze osiągnięcia ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["year"]) ? $context["year"] : null), "schoolYear", array()), "html", null, true);
        echo " </h3>
                                    <br>
                                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["year"]) ? $context["year"] : null), "achievements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["achievement"]) {
            // line 16
            echo "                                        <div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">
                                            <a href=\"#\" class=\"thumbnail\" target=\"_blank\">
                                                <img src=\"/images/achievements/";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["achievement"], "image", array()), "html", null, true);
            echo "\" alt=\"dyplom\">
                                            </a>
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['achievement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "::achievement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 22,  58 => 18,  54 => 16,  50 => 15,  43 => 13,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig'%}*/
/* {% block content %}*/
/*     <div class="row row-green" id="osiagniecia">*/
/*         <div class="container animatedParent">*/
/*             <div class="col-md-12">*/
/*                 <div class="panel-body">*/
/*                     <div class="panel panel-primary">*/
/*                         <div class="panel-heading">*/
/*                             <h3 class="panel-title ">nasze osiągnięcia</h3>*/
/*                         </div>*/
/*                         <div class="panel-body animated bounceInRight" id="osiagniecia">*/
/*                                 <div class="row">*/
/*                                     <h3 id="{{ year.schoolYear }}">Nasze osiągnięcia {{ year.schoolYear }} </h3>*/
/*                                     <br>*/
/*                                     {% for achievement in year.achievements %}*/
/*                                         <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">*/
/*                                             <a href="#" class="thumbnail" target="_blank">*/
/*                                                 <img src="/images/achievements/{{ achievement.image}}" alt="dyplom">*/
/*                                             </a>*/
/*                                         </div>*/
/*                                     {% endfor %}*/
/*                                 </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
