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
        $__internal_2bc3e395c9839fe5eec4af7f06363f6bbd99b07db042c56a41d277480a0a6edd = $this->env->getExtension("native_profiler");
        $__internal_2bc3e395c9839fe5eec4af7f06363f6bbd99b07db042c56a41d277480a0a6edd->enter($__internal_2bc3e395c9839fe5eec4af7f06363f6bbd99b07db042c56a41d277480a0a6edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bc3e395c9839fe5eec4af7f06363f6bbd99b07db042c56a41d277480a0a6edd->leave($__internal_2bc3e395c9839fe5eec4af7f06363f6bbd99b07db042c56a41d277480a0a6edd_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7e3dbbed28ec10eb540ed18982e374f389bcbfe8f6ed212a48a41dbfe4703f7 = $this->env->getExtension("native_profiler");
        $__internal_e7e3dbbed28ec10eb540ed18982e374f389bcbfe8f6ed212a48a41dbfe4703f7->enter($__internal_e7e3dbbed28ec10eb540ed18982e374f389bcbfe8f6ed212a48a41dbfe4703f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <li><a href=\"";
        // line 42
        echo "/";
        echo "#publikacje\">PUBLIKACJE</a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">OSIĄGNIĘCIA <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["schoolYears"]) ? $context["schoolYears"] : $this->getContext($context, "schoolYears")));
        foreach ($context['_seq'] as $context["_key"] => $context["schoolYear"]) {
            // line 47
            echo "                            <li><a href=\"";
            echo "/";
            echo "#";
            echo twig_escape_filter($this->env, $this->getAttribute($context["schoolYear"], "schoolYear", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["schoolYear"], "schoolYear", array()), "html", null, true);
            echo "</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schoolYear'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">GALERIA <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["schoolYears"]) ? $context["schoolYears"] : $this->getContext($context, "schoolYears")));
        foreach ($context['_seq'] as $context["_key"] => $context["schoolYear"]) {
            // line 56
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
        // line 59
        echo "                        </ul>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class=\"container-fluid\">
    <div class=\"row\">
    <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\"/>
    </div>
    </div>
";
        // line 71
        $this->displayBlock('content', $context, $blocks);
        // line 72
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
        // line 83
        if (((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")) == null)) {
            // line 84
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
                        ";
        } else {
            // line 86
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("easyadmin");
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span>administruj</a></li>
                            <li><a href=\"";
            // line 87
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span>wyloguj</a></li>

                        ";
        }
        // line 90
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
        
        $__internal_e7e3dbbed28ec10eb540ed18982e374f389bcbfe8f6ed212a48a41dbfe4703f7->leave($__internal_e7e3dbbed28ec10eb540ed18982e374f389bcbfe8f6ed212a48a41dbfe4703f7_prof);

    }

    // line 71
    public function block_content($context, array $blocks = array())
    {
        $__internal_73a76728f4477766cdd4124e3c922d777cac964c0e1530c8ede99a269c1beed5 = $this->env->getExtension("native_profiler");
        $__internal_73a76728f4477766cdd4124e3c922d777cac964c0e1530c8ede99a269c1beed5->enter($__internal_73a76728f4477766cdd4124e3c922d777cac964c0e1530c8ede99a269c1beed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_73a76728f4477766cdd4124e3c922d777cac964c0e1530c8ede99a269c1beed5->leave($__internal_73a76728f4477766cdd4124e3c922d777cac964c0e1530c8ede99a269c1beed5_prof);

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
        return array (  224 => 71,  205 => 90,  199 => 87,  194 => 86,  188 => 84,  186 => 83,  173 => 72,  171 => 71,  165 => 68,  154 => 59,  142 => 56,  138 => 55,  131 => 50,  117 => 47,  113 => 46,  106 => 42,  100 => 39,  95 => 37,  90 => 35,  85 => 33,  77 => 28,  72 => 26,  67 => 24,  60 => 20,  41 => 3,  35 => 2,  11 => 1,);
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
/*                     <li><a href="{{'/' }}#publikacje">PUBLIKACJE</a></li>*/
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">OSIĄGNIĘCIA <span class="caret"></span></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             {% for schoolYear in schoolYears %}*/
/*                             <li><a href="{{'/' }}#{{ schoolYear.schoolYear }}">{{ schoolYear.schoolYear }}</a></li>*/
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
