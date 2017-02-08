<?php

/* ::gallery.html.twig */
class __TwigTemplate_31ff721990f73656a4a16aa0a270e17aa2e23eec743c2155184b0c45e03c3c28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "::gallery.html.twig", 1);
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
        echo "    <div class=\"row row-blue\" id=\"galeria\">
        <div class=\"container animatedParent\">
            <div class=\"col-md-12\">
                <div class=\"panel-body\">
                    <div class=\"panel panel-success animated bounceInLeft\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title \">nasze galerie</h3>
                        </div>
                        <div class=\"panel-body\">
                             <div class=\"row\">
                                    <h3 id=\"galeria";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["year"]) ? $context["year"] : null), "schoolYear", array()), "html", null, true);
        echo "\">Nasze galerie ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["year"]) ? $context["year"] : null), "schoolYear", array()), "html", null, true);
        echo " </h3>
                                    <br>
                                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["year"]) ? $context["year"] : null), "galleries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
            // line 16
            echo "                                        <div class=\"col-lg-3 col-md-3 col-sm-4 col-xs-12\">
                                            <div class=\"thumbnail\">
                                                <img src=\"/images/galleries/";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "image", array()), "html", null, true);
            echo "\" alt=\"obrazek galerii\">
                                                <div class=\"caption\">
                                                    <h5>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "name", array()), "html", null, true);
            echo "</h5>
                                                    </br>
                                                    <p><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "href", array()), "html", null, true);
            echo "\" class=\"btn btn-primary\" role=\"button\" target=\"_blank\">wyświetl</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
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
        return "::gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 27,  68 => 22,  63 => 20,  58 => 18,  54 => 16,  50 => 15,  43 => 13,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig'%}*/
/* {% block content %}*/
/*     <div class="row row-blue" id="galeria">*/
/*         <div class="container animatedParent">*/
/*             <div class="col-md-12">*/
/*                 <div class="panel-body">*/
/*                     <div class="panel panel-success animated bounceInLeft">*/
/*                         <div class="panel-heading">*/
/*                             <h3 class="panel-title ">nasze galerie</h3>*/
/*                         </div>*/
/*                         <div class="panel-body">*/
/*                              <div class="row">*/
/*                                     <h3 id="galeria{{ year.schoolYear }}">Nasze galerie {{ year.schoolYear }} </h3>*/
/*                                     <br>*/
/*                                     {% for gallery in year.galleries %}*/
/*                                         <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">*/
/*                                             <div class="thumbnail">*/
/*                                                 <img src="/images/galleries/{{ gallery.image }}" alt="obrazek galerii">*/
/*                                                 <div class="caption">*/
/*                                                     <h5>{{ gallery.name }}</h5>*/
/*                                                     </br>*/
/*                                                     <p><a href="{{ gallery.href }}" class="btn btn-primary" role="button" target="_blank">wyświetl</a></p>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     {% endfor %}*/
/*                                 </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
