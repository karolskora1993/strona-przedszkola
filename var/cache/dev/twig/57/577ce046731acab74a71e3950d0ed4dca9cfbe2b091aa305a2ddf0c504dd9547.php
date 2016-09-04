<?php

/* layout.html.twig */
class __TwigTemplate_d142bffa656b5ba5d72e1cf28b4581be331dbdd37dc8a99c919c952c27a35825 extends Twig_Template
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
        $__internal_45bafe99d8e5bf9f373c2f97499e3c0f34717cc20897d5b11b7abcc8f7d8f83c = $this->env->getExtension("native_profiler");
        $__internal_45bafe99d8e5bf9f373c2f97499e3c0f34717cc20897d5b11b7abcc8f7d8f83c->enter($__internal_45bafe99d8e5bf9f373c2f97499e3c0f34717cc20897d5b11b7abcc8f7d8f83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45bafe99d8e5bf9f373c2f97499e3c0f34717cc20897d5b11b7abcc8f7d8f83c->leave($__internal_45bafe99d8e5bf9f373c2f97499e3c0f34717cc20897d5b11b7abcc8f7d8f83c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac503208d5411f1cfbdbe6909a2713951961def17ef8618ff789611fe0e7a358 = $this->env->getExtension("native_profiler");
        $__internal_ac503208d5411f1cfbdbe6909a2713951961def17ef8618ff789611fe0e7a358->enter($__internal_ac503208d5411f1cfbdbe6909a2713951961def17ef8618ff789611fe0e7a358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <a class=\"navbar-brand\" href=\"#top\"><img alt=\"Brand\" src=\"images/logomin.png\"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li ><a href=\"";
        // line 20
        echo "/";
        echo "#aktualnosci\">AKTUALNOŚCI <span class=\"sr-only\">(current)</span></a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">O NAS <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 24
        echo "/";
        echo "#o_nas\">INFORMACJE O PLACÓWCE</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=";
        // line 26
        echo "/";
        echo "#\">PRACOWNICY PRZEDSZKOLA</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"";
        // line 28
        echo "/";
        echo "#film\">FILM PROMUJĄCY</a></li>
                        </ul>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">DLA RODZICÓW <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 33
        echo "/";
        echo "#plan_dnia\">PLAN DNIA</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"";
        // line 35
        echo "/";
        echo "#\">MISJA PRZEDSZKOLA</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"";
        // line 37
        echo "/";
        echo "#zywienie\">ŻYWIENIE W NASZYM PRZEDSZKOLU</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"";
        // line 39
        echo "/";
        echo "#pierwszy_dzien\">PIERWSZY DZIEŃ W PRZEDSZKOLU</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">KĄCIK LOGOPEDYCZNY <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 46
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
        // line 49
        echo "                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">OSIĄGNIĘCIA <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["schoolYears"]) ? $context["schoolYears"] : $this->getContext($context, "schoolYears")));
        foreach ($context['_seq'] as $context["_key"] => $context["schoolYear"]) {
            // line 55
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
        // line 58
        echo "                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">GALERIA <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["schoolYears"]) ? $context["schoolYears"] : $this->getContext($context, "schoolYears")));
        foreach ($context['_seq'] as $context["_key"] => $context["schoolYear"]) {
            // line 64
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
        // line 67
        echo "                        </ul>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class=\"container-fluid\">
    <div class=\"row\">
    <img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\"/>
    </div>
    </div>
";
        // line 79
        $this->displayBlock('content', $context, $blocks);
        // line 80
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
        // line 91
        if (((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")) == null)) {
            // line 92
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
                        ";
        } else {
            // line 94
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("easyadmin");
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span>administruj</a></li>
                            <li><a href=\"";
            // line 95
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span>wyloguj</a></li>

                        ";
        }
        // line 98
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
        
        $__internal_ac503208d5411f1cfbdbe6909a2713951961def17ef8618ff789611fe0e7a358->leave($__internal_ac503208d5411f1cfbdbe6909a2713951961def17ef8618ff789611fe0e7a358_prof);

    }

    // line 79
    public function block_content($context, array $blocks = array())
    {
        $__internal_32118cc88810b74a2a9dc8bf1a726248cc04c1850f779d8622854c2a34385de8 = $this->env->getExtension("native_profiler");
        $__internal_32118cc88810b74a2a9dc8bf1a726248cc04c1850f779d8622854c2a34385de8->enter($__internal_32118cc88810b74a2a9dc8bf1a726248cc04c1850f779d8622854c2a34385de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_32118cc88810b74a2a9dc8bf1a726248cc04c1850f779d8622854c2a34385de8->leave($__internal_32118cc88810b74a2a9dc8bf1a726248cc04c1850f779d8622854c2a34385de8_prof);

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
        return array (  241 => 79,  222 => 98,  216 => 95,  211 => 94,  205 => 92,  203 => 91,  190 => 80,  188 => 79,  182 => 76,  171 => 67,  159 => 64,  155 => 63,  148 => 58,  136 => 55,  132 => 54,  125 => 49,  113 => 46,  109 => 45,  100 => 39,  95 => 37,  90 => 35,  85 => 33,  77 => 28,  72 => 26,  67 => 24,  60 => 20,  41 => 3,  35 => 2,  11 => 1,);
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
/*                 <a class="navbar-brand" href="#top"><img alt="Brand" src="images/logomin.png"></a>*/
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
/*                             <li><a href="{{'/' }}#">MISJA PRZEDSZKOLA</a></li>*/
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
