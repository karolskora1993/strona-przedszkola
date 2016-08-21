<?php

/* ::gallery.html.twig */
class __TwigTemplate_05428d3c0abd1f61f51a4ab25543318d7e26b4d0c70a5b63c640e5b40f856e8f extends Twig_Template
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
        $__internal_1548d3a5d99609331fc1c4803d2c4f02fde662b22bf59d716e3999912acddbce = $this->env->getExtension("native_profiler");
        $__internal_1548d3a5d99609331fc1c4803d2c4f02fde662b22bf59d716e3999912acddbce->enter($__internal_1548d3a5d99609331fc1c4803d2c4f02fde662b22bf59d716e3999912acddbce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::gallery.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1548d3a5d99609331fc1c4803d2c4f02fde662b22bf59d716e3999912acddbce->leave($__internal_1548d3a5d99609331fc1c4803d2c4f02fde662b22bf59d716e3999912acddbce_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_60ede81f2a56c03560ba51c86758c5b1e160e18531a82ea7141a64c9e8cd9390 = $this->env->getExtension("native_profiler");
        $__internal_60ede81f2a56c03560ba51c86758c5b1e160e18531a82ea7141a64c9e8cd9390->enter($__internal_60ede81f2a56c03560ba51c86758c5b1e160e18531a82ea7141a64c9e8cd9390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")), "schoolYear", array()), "html", null, true);
        echo "\">Nasze galerie ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")), "schoolYear", array()), "html", null, true);
        echo " </h3>
                                    <br>
                                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")), "galleries", array()));
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
        
        $__internal_60ede81f2a56c03560ba51c86758c5b1e160e18531a82ea7141a64c9e8cd9390->leave($__internal_60ede81f2a56c03560ba51c86758c5b1e160e18531a82ea7141a64c9e8cd9390_prof);

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
        return array (  88 => 27,  77 => 22,  72 => 20,  67 => 18,  63 => 16,  59 => 15,  52 => 13,  40 => 3,  34 => 2,  11 => 1,);
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
