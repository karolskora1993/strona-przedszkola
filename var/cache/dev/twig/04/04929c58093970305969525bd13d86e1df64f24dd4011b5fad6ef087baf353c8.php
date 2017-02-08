<?php

/* layout.html.twig */
class __TwigTemplate_9a261739c4da131eeedbadc5d13d0d0b23d6b57817c02b8bab46ee50d715d2bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"nav\" id=\"top\"></div>
    <nav class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                    <span class=\"sr-only\">główne menu</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li ><a href=\"";
        // line 19
        echo "/";
        echo "#aktualnosci\">AKTUALNOŚCI <span class=\"sr-only\">(current)</span></a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">O NAS <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 23
        echo "/";
        echo "#o_nas\">INFORMACJE O PLACÓWCE</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=";
        // line 25
        echo "/";
        echo "#\">PRACOWNICY PRZEDSZKOLA</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"";
        // line 27
        echo "/";
        echo "#film\">FILM PROMUJĄCY</a></li>
                        </ul>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">DLA RODZICÓW <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 32
        echo "/";
        echo "#plan_dnia\">PLAN DNIA</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"";
        // line 34
        echo "/";
        echo "#program_wychowawczy\">PROGRAM WYCHOWAWCZY</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"";
        // line 36
        echo "/";
        echo "#zywienie\">ŻYWIENIE W NASZYM PRZEDSZKOLU</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"";
        // line 38
        echo "/";
        echo "#pierwszy_dzien\">PIERWSZY DZIEŃ W PRZEDSZKOLU</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">KĄCIK LOGOPEDYCZNY <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 45
            echo "                                <li><a href=\"";
            echo twig_escape_filter($this->env, ("/logopedia/" . $this->getAttribute($context["article"], "id", array())), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">OSIĄGNIĘCIA <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["schoolYears"]) ? $context["schoolYears"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["schoolYear"]) {
            // line 54
            echo "                            <li><a href=\"";
            echo twig_escape_filter($this->env, ("/achievements/" . $this->getAttribute($context["schoolYear"], "id", array())), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["schoolYear"], "schoolYear", array()), "html", null, true);
            echo "</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schoolYear'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">GALERIA <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["schoolYears"]) ? $context["schoolYears"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["schoolYear"]) {
            // line 63
            echo "                                <li><a href=\"";
            echo twig_escape_filter($this->env, ("/gallery/" . $this->getAttribute($context["schoolYear"], "id", array())), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["schoolYear"], "schoolYear", array()), "html", null, true);
            echo "</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schoolYear'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                        </ul>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class=\"container-fluid\">
    <div class=\"row\">
    <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\"/>
    </div>
    </div>
";
        // line 78
        $this->displayBlock('content', $context, $blocks);
        // line 79
        echo "    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <ul class=\"nav nav-tabs\">
                        <li role=\"presentation\" ><a href=\"#\">STRONA GŁÓWNA</a></li>
                        <li role=\"presentation\"><a href=\"#o_nas\">O NAS</a></li>
                        <li role=\"presentation\"><a href=\"#plan_dnia\">DLA RODZICÓW</a></li>
                        <li role=\"presentation\"><a href=\"#publikacje\">PUBLIKACJE</a></li>
                        <li role=\"presentation\"><a href=\"#osiagniecia\">OSIĄGNIĘCIA</a></li>
                        <li role=\"presentation\"><a href=\"#galeria\">GALERIA</a></li>
                        ";
        // line 90
        if (((isset($context["user"]) ? $context["user"] : null) == null)) {
            // line 91
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
                        ";
        } else {
            // line 93
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("easyadmin");
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span>administruj</a></li>
                            <li><a href=\"";
            // line 94
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span>wyloguj</a></li>

                        ";
        }
        // line 97
        echo "                    </ul>
                </div>
            </div><!--end row-->
            <div class=\"row\">
                <div class=\"col-md-12 footer-copy\">
                    Copyright © <a href=\"http://www.przedszkole3lancut.pl\">Przedszkole Miejskie nr3 w Łańcucie</a><br>
                    realizacja: Karol Skóra
                </div>
            </div><!--end row-->
        </div>
    </footer>

";
    }

    // line 78
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 78,  212 => 97,  206 => 94,  201 => 93,  195 => 91,  193 => 90,  180 => 79,  178 => 78,  172 => 75,  161 => 66,  149 => 63,  145 => 62,  138 => 57,  126 => 54,  122 => 53,  115 => 48,  103 => 45,  99 => 44,  90 => 38,  85 => 36,  80 => 34,  75 => 32,  67 => 27,  62 => 25,  57 => 23,  50 => 19,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <div class="nav" id="top"></div>*/
/*     <nav class="navbar navbar-default navbar-fixed-top">*/
/*         <div class="container-fluid">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*                     <span class="sr-only">główne menu</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*             </div>*/
/* */
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li ><a href="{{'/' }}#aktualnosci">AKTUALNOŚCI <span class="sr-only">(current)</span></a></li>*/
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">O NAS <span class="caret"></span></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="{{'/' }}#o_nas">INFORMACJE O PLACÓWCE</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href={{'/' }}#">PRACOWNICY PRZEDSZKOLA</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href="{{'/' }}#film">FILM PROMUJĄCY</a></li>*/
/*                         </ul>*/
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DLA RODZICÓW <span class="caret"></span></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="{{'/' }}#plan_dnia">PLAN DNIA</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href="{{'/' }}#program_wychowawczy">PROGRAM WYCHOWAWCZY</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href="{{'/' }}#zywienie">ŻYWIENIE W NASZYM PRZEDSZKOLU</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href="{{'/' }}#pierwszy_dzien">PIERWSZY DZIEŃ W PRZEDSZKOLU</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">KĄCIK LOGOPEDYCZNY <span class="caret"></span></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             {% for article in articles %}*/
/*                                 <li><a href="{{'/logopedia/'~article.id}}">{{ article.title }}</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">OSIĄGNIĘCIA <span class="caret"></span></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             {% for schoolYear in schoolYears %}*/
/*                             <li><a href="{{'/achievements/'~schoolYear.id}}">{{ schoolYear.schoolYear }}</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">GALERIA <span class="caret"></span></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             {% for schoolYear in schoolYears %}*/
/*                                 <li><a href="{{ '/gallery/'~schoolYear.id}}">{{ schoolYear.schoolYear }}</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                     </li>*/
/* */
/*                 </ul>*/
/*             </div><!-- /.navbar-collapse -->*/
/*         </div><!-- /.container-fluid -->*/
/*     </nav>*/
/*     <div class="container-fluid">*/
/*     <div class="row">*/
/*     <img src="{{ asset('images/logo.jpg') }}" class="img-responsive"/>*/
/*     </div>*/
/*     </div>*/
/* {% block content %}{% endblock %}*/
/*     <footer>*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <ul class="nav nav-tabs">*/
/*                         <li role="presentation" ><a href="#">STRONA GŁÓWNA</a></li>*/
/*                         <li role="presentation"><a href="#o_nas">O NAS</a></li>*/
/*                         <li role="presentation"><a href="#plan_dnia">DLA RODZICÓW</a></li>*/
/*                         <li role="presentation"><a href="#publikacje">PUBLIKACJE</a></li>*/
/*                         <li role="presentation"><a href="#osiagniecia">OSIĄGNIĘCIA</a></li>*/
/*                         <li role="presentation"><a href="#galeria">GALERIA</a></li>*/
/*                         {% if user== null %}*/
/*                             <li><a href="{{ path('fos_user_security_login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>*/
/*                         {% else %}*/
/*                             <li><a href="{{ path('easyadmin') }}"><span class="glyphicon glyphicon-edit"></span>administruj</a></li>*/
/*                             <li><a href="{{ path('fos_user_security_logout') }}"><span class="glyphicon glyphicon-edit"></span>wyloguj</a></li>*/
/* */
/*                         {% endif %}*/
/*                     </ul>*/
/*                 </div>*/
/*             </div><!--end row-->*/
/*             <div class="row">*/
/*                 <div class="col-md-12 footer-copy">*/
/*                     Copyright © <a href="http://www.przedszkole3lancut.pl">Przedszkole Miejskie nr3 w Łańcucie</a><br>*/
/*                     realizacja: Karol Skóra*/
/*                 </div>*/
/*             </div><!--end row-->*/
/*         </div>*/
/*     </footer>*/
/* */
/* {% endblock %}*/
