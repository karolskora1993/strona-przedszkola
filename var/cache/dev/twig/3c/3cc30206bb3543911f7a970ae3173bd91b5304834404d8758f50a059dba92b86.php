<?php

/* ::achievement.html.twig */
class __TwigTemplate_28bccff7535df5b1bab7be82a07819062b90adf778628956ab589351a3909d04 extends Twig_Template
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
        $__internal_93243b5256acf319d2eb585ba68bff688252d8afc70765fd3d3f9261a55ba45c = $this->env->getExtension("native_profiler");
        $__internal_93243b5256acf319d2eb585ba68bff688252d8afc70765fd3d3f9261a55ba45c->enter($__internal_93243b5256acf319d2eb585ba68bff688252d8afc70765fd3d3f9261a55ba45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::achievement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93243b5256acf319d2eb585ba68bff688252d8afc70765fd3d3f9261a55ba45c->leave($__internal_93243b5256acf319d2eb585ba68bff688252d8afc70765fd3d3f9261a55ba45c_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_13767841d27a3d259b5e11d2ef62479a90edd0b14f73b8bb4b7232f52c37a8af = $this->env->getExtension("native_profiler");
        $__internal_13767841d27a3d259b5e11d2ef62479a90edd0b14f73b8bb4b7232f52c37a8af->enter($__internal_13767841d27a3d259b5e11d2ef62479a90edd0b14f73b8bb4b7232f52c37a8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")), "schoolYear", array()), "html", null, true);
        echo "\">Nasze osiągnięcia ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")), "schoolYear", array()), "html", null, true);
        echo " </h3>
                                    <br>
                                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")), "achievements", array()));
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
        
        $__internal_13767841d27a3d259b5e11d2ef62479a90edd0b14f73b8bb4b7232f52c37a8af->leave($__internal_13767841d27a3d259b5e11d2ef62479a90edd0b14f73b8bb4b7232f52c37a8af_prof);

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
        return array (  77 => 22,  67 => 18,  63 => 16,  59 => 15,  52 => 13,  40 => 3,  34 => 2,  11 => 1,);
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