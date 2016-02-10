<?php

/* @EasyAdmin/default/layout.html.twig */
class __TwigTemplate_fa7f5cf8e51fdfb589939bb89894e37e91543e23033c3fefe10ee6b8bba2d409 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header_logo' => array($this, 'block_header_logo'),
            'user_menu' => array($this, 'block_user_menu'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'global_actions' => array($this, 'block_global_actions'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02ac37de9af80e97afac1db5fa53bcf4e3ab6c838510275a4b1c8675a93bb000 = $this->env->getExtension("native_profiler");
        $__internal_02ac37de9af80e97afac1db5fa53bcf4e3ab6c838510275a4b1c8675a93bb000->enter($__internal_02ac37de9af80e97afac1db5fa53bcf4e3ab6c838510275a4b1c8675a93bb000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 9
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 11
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 20
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 27
        echo "
        <!--[if lt IE 9]>
            <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/html5shiv.min.css"), "html", null, true);
        echo "\"</script>
            <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/respond.min.css"), "html", null, true);
        echo "\"></script>
        <![endif]-->

        ";
        // line 33
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 34
        echo "    </head>

    ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 145
        echo "</html>
";
        
        $__internal_02ac37de9af80e97afac1db5fa53bcf4e3ab6c838510275a4b1c8675a93bb000->leave($__internal_02ac37de9af80e97afac1db5fa53bcf4e3ab6c838510275a4b1c8675a93bb000_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_d00d13e2ccac9681e009a14e0638d8b399a526639abfeb380a1d5f89adabcfbc = $this->env->getExtension("native_profiler");
        $__internal_d00d13e2ccac9681e009a14e0638d8b399a526639abfeb380a1d5f89adabcfbc->enter($__internal_d00d13e2ccac9681e009a14e0638d8b399a526639abfeb380a1d5f89adabcfbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags($this->renderBlock("content_title", $context, $blocks));
        
        $__internal_d00d13e2ccac9681e009a14e0638d8b399a526639abfeb380a1d5f89adabcfbc->leave($__internal_d00d13e2ccac9681e009a14e0638d8b399a526639abfeb380a1d5f89adabcfbc_prof);

    }

    // line 11
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_71798991b4b68891f0a887f0afad6b18088a7c9cebea1922a71e0e48e17a0a4f = $this->env->getExtension("native_profiler");
        $__internal_71798991b4b68891f0a887f0afad6b18088a7c9cebea1922a71e0e48e17a0a4f->enter($__internal_71798991b4b68891f0a887f0afad6b18088a7c9cebea1922a71e0e48e17a0a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/font-awesome.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/adminlte.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/featherlight.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("_easyadmin_render_css");
        echo "\">
        ";
        
        $__internal_71798991b4b68891f0a887f0afad6b18088a7c9cebea1922a71e0e48e17a0a4f->leave($__internal_71798991b4b68891f0a887f0afad6b18088a7c9cebea1922a71e0e48e17a0a4f_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_57e757dcad73a4977c160da3c3c3084c9b20a4a3601578e645d3f48ac52b33a0 = $this->env->getExtension("native_profiler");
        $__internal_57e757dcad73a4977c160da3c3c3084c9b20a4a3601578e645d3f48ac52b33a0->enter($__internal_57e757dcad73a4977c160da3c3c3084c9b20a4a3601578e645d3f48ac52b33a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 24
        echo "            ";
        $context["favicon"] = $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.assets.favicon");
        // line 25
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["favicon"]) ? $context["favicon"] : $this->getContext($context, "favicon")), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["favicon"]) ? $context["favicon"] : $this->getContext($context, "favicon")), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_57e757dcad73a4977c160da3c3c3084c9b20a4a3601578e645d3f48ac52b33a0->leave($__internal_57e757dcad73a4977c160da3c3c3084c9b20a4a3601578e645d3f48ac52b33a0_prof);

    }

    // line 33
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_708a167937184bbf058c7a8d822b2321fb452e9898924090b8eefe648bece8e5 = $this->env->getExtension("native_profiler");
        $__internal_708a167937184bbf058c7a8d822b2321fb452e9898924090b8eefe648bece8e5->enter($__internal_708a167937184bbf058c7a8d822b2321fb452e9898924090b8eefe648bece8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        
        $__internal_708a167937184bbf058c7a8d822b2321fb452e9898924090b8eefe648bece8e5->leave($__internal_708a167937184bbf058c7a8d822b2321fb452e9898924090b8eefe648bece8e5_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d1bda1b25e2ec6ac532caaa37f19e0652835e9a2206ce7dbf29ccc544f0ef5c = $this->env->getExtension("native_profiler");
        $__internal_8d1bda1b25e2ec6ac532caaa37f19e0652835e9a2206ce7dbf29ccc544f0ef5c->enter($__internal_8d1bda1b25e2ec6ac532caaa37f19e0652835e9a2206ce7dbf29ccc544f0ef5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini fixed ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 39
        $this->displayBlock('wrapper', $context, $blocks);
        // line 114
        echo "        </div>

        ";
        // line 116
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 139
        echo "
        ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 141
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "    </body>
    ";
        
        $__internal_8d1bda1b25e2ec6ac532caaa37f19e0652835e9a2206ce7dbf29ccc544f0ef5c->leave($__internal_8d1bda1b25e2ec6ac532caaa37f19e0652835e9a2206ce7dbf29ccc544f0ef5c_prof);

    }

    // line 37
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_54bd47543c32565eaac56ce8442a49a4f0a8554e776c02840fb543499a24eae9 = $this->env->getExtension("native_profiler");
        $__internal_54bd47543c32565eaac56ce8442a49a4f0a8554e776c02840fb543499a24eae9->enter($__internal_54bd47543c32565eaac56ce8442a49a4f0a8554e776c02840fb543499a24eae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_54bd47543c32565eaac56ce8442a49a4f0a8554e776c02840fb543499a24eae9->leave($__internal_54bd47543c32565eaac56ce8442a49a4f0a8554e776c02840fb543499a24eae9_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_06e0c588ac511ce912c0fb629a3059a4ed9156e8d6d876868f0782fc32c83237 = $this->env->getExtension("native_profiler");
        $__internal_06e0c588ac511ce912c0fb629a3059a4ed9156e8d6d876868f0782fc32c83237->enter($__internal_06e0c588ac511ce912c0fb629a3059a4ed9156e8d6d876868f0782fc32c83237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_06e0c588ac511ce912c0fb629a3059a4ed9156e8d6d876868f0782fc32c83237->leave($__internal_06e0c588ac511ce912c0fb629a3059a4ed9156e8d6d876868f0782fc32c83237_prof);

    }

    // line 39
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_c20ff2d965c987ffa376581f7998cae4cf0d4f7971264eedbdcbceb1a7011fa5 = $this->env->getExtension("native_profiler");
        $__internal_c20ff2d965c987ffa376581f7998cae4cf0d4f7971264eedbdcbceb1a7011fa5->enter($__internal_c20ff2d965c987ffa376581f7998cae4cf0d4f7971264eedbdcbceb1a7011fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 40
        echo "            <header class=\"main-header\">
                <div id=\"header-logo\">
                    ";
        // line 42
        $this->displayBlock('header_logo', $context, $blocks);
        // line 48
        echo "                </div>

                <nav class=\"navbar navbar-fixed-top\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>
                    <div class=\"navbar-custom-menu\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"user user-menu\">
                                ";
        // line 57
        $this->displayBlock('user_menu', $context, $blocks);
        // line 66
        echo "                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 73
        $this->displayBlock('sidebar', $context, $blocks);
        // line 84
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 87
        $this->displayBlock('content', $context, $blocks);
        // line 112
        echo "            </div>
        ";
        
        $__internal_c20ff2d965c987ffa376581f7998cae4cf0d4f7971264eedbdcbceb1a7011fa5->leave($__internal_c20ff2d965c987ffa376581f7998cae4cf0d4f7971264eedbdcbceb1a7011fa5_prof);

    }

    // line 42
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_cce1340248fb486f3d3a5dd51a1b0a66ff4977c9dd2beba0a905c94e0978c596 = $this->env->getExtension("native_profiler");
        $__internal_cce1340248fb486f3d3a5dd51a1b0a66ff4977c9dd2beba0a905c94e0978c596->enter($__internal_cce1340248fb486f3d3a5dd51a1b0a66ff4977c9dd2beba0a905c94e0978c596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 43
        echo "                        <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getPath("easyadmin");
        echo "\">
                            <span class=\"logo-mini\">";
        // line 44
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_first($this->env, strip_tags($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name")))), "html", null, true);
        echo "</span>
                            <span class=\"logo-lg\">";
        // line 45
        echo $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name");
        echo "</span>
                        </a>
                    ";
        
        $__internal_cce1340248fb486f3d3a5dd51a1b0a66ff4977c9dd2beba0a905c94e0978c596->leave($__internal_cce1340248fb486f3d3a5dd51a1b0a66ff4977c9dd2beba0a905c94e0978c596_prof);

    }

    // line 57
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_16adf26eb4ab94c549ea5ff5e6fb985c2722d15843e7bd60649e26d6d6e0119f = $this->env->getExtension("native_profiler");
        $__internal_16adf26eb4ab94c549ea5ff5e6fb985c2722d15843e7bd60649e26d6d6e0119f->enter($__internal_16adf26eb4ab94c549ea5ff5e6fb985c2722d15843e7bd60649e26d6d6e0119f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 58
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                                    <i class=\"hidden-xs fa fa-user\"></i>
                                    ";
        // line 60
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 61
            echo "                                        ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('translator')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('translator')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 63
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        }
        // line 65
        echo "                                ";
        
        $__internal_16adf26eb4ab94c549ea5ff5e6fb985c2722d15843e7bd60649e26d6d6e0119f->leave($__internal_16adf26eb4ab94c549ea5ff5e6fb985c2722d15843e7bd60649e26d6d6e0119f_prof);

    }

    // line 73
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_f9d3cf1f7b011566e0be171399e23076ccef79f6028f442055ccf3059c6b400f = $this->env->getExtension("native_profiler");
        $__internal_f9d3cf1f7b011566e0be171399e23076ccef79f6028f442055ccf3059c6b400f->enter($__internal_f9d3cf1f7b011566e0be171399e23076ccef79f6028f442055ccf3059c6b400f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 74
        echo "                <section class=\"sidebar\">
                    ";
        // line 75
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 82
        echo "                </section>
            ";
        
        $__internal_f9d3cf1f7b011566e0be171399e23076ccef79f6028f442055ccf3059c6b400f->leave($__internal_f9d3cf1f7b011566e0be171399e23076ccef79f6028f442055ccf3059c6b400f_prof);

    }

    // line 75
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_9d27100bfcdf49405633cb7d57ebc229cf143a041d34cba511405aad655f261a = $this->env->getExtension("native_profiler");
        $__internal_9d27100bfcdf49405633cb7d57ebc229cf143a041d34cba511405aad655f261a->enter($__internal_9d27100bfcdf49405633cb7d57ebc229cf143a041d34cba511405aad655f261a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 76
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 77
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 80
        echo "
                    ";
        
        $__internal_9d27100bfcdf49405633cb7d57ebc229cf143a041d34cba511405aad655f261a->leave($__internal_9d27100bfcdf49405633cb7d57ebc229cf143a041d34cba511405aad655f261a_prof);

    }

    // line 87
    public function block_content($context, array $blocks = array())
    {
        $__internal_f661796a0ac303c2c2c46a1a27701d3afb27cb89eb04da126cfe563abe8a3ada = $this->env->getExtension("native_profiler");
        $__internal_f661796a0ac303c2c2c46a1a27701d3afb27cb89eb04da126cfe563abe8a3ada->enter($__internal_f661796a0ac303c2c2c46a1a27701d3afb27cb89eb04da126cfe563abe8a3ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 88
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 91
        echo "
                <section class=\"content-header\">
                ";
        // line 93
        $this->displayBlock('content_header', $context, $blocks);
        // line 106
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 109
        $this->displayBlock('main', $context, $blocks);
        // line 110
        echo "                </section>
            ";
        
        $__internal_f661796a0ac303c2c2c46a1a27701d3afb27cb89eb04da126cfe563abe8a3ada->leave($__internal_f661796a0ac303c2c2c46a1a27701d3afb27cb89eb04da126cfe563abe8a3ada_prof);

    }

    // line 88
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_6ba8544ac3ce6b63ad4bc50a4203cf60d2d56f04cf7e734d546a9d60ac5c270a = $this->env->getExtension("native_profiler");
        $__internal_6ba8544ac3ce6b63ad4bc50a4203cf60d2d56f04cf7e734d546a9d60ac5c270a->enter($__internal_6ba8544ac3ce6b63ad4bc50a4203cf60d2d56f04cf7e734d546a9d60ac5c270a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 89
        echo "                    ";
        echo ((array_key_exists("_entity_config", $context)) ? (twig_include($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array()))) : (""));
        echo "
                ";
        
        $__internal_6ba8544ac3ce6b63ad4bc50a4203cf60d2d56f04cf7e734d546a9d60ac5c270a->leave($__internal_6ba8544ac3ce6b63ad4bc50a4203cf60d2d56f04cf7e734d546a9d60ac5c270a_prof);

    }

    // line 93
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_0cffe5be111754de5bb30639e1b9b3b2c6e016970c6b631a1cee438da5779576 = $this->env->getExtension("native_profiler");
        $__internal_0cffe5be111754de5bb30639e1b9b3b2c6e016970c6b631a1cee438da5779576->enter($__internal_0cffe5be111754de5bb30639e1b9b3b2c6e016970c6b631a1cee438da5779576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 94
        echo "                    <div class=\"row\">
                        <div class=\"col-sm-5\">
                            <h1 class=\"title\">";
        // line 96
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                        </div>

                        <div class=\"col-sm-7\">
                            <div class=\"global-actions\">
                                ";
        // line 101
        $this->displayBlock('global_actions', $context, $blocks);
        // line 102
        echo "                            </div>
                        </div>
                    </div>
                ";
        
        $__internal_0cffe5be111754de5bb30639e1b9b3b2c6e016970c6b631a1cee438da5779576->leave($__internal_0cffe5be111754de5bb30639e1b9b3b2c6e016970c6b631a1cee438da5779576_prof);

    }

    // line 96
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_a0c6f46e692f6b68728b81033b67fca6ad63b0f1fd83ac717fcf8e0e364cbe2e = $this->env->getExtension("native_profiler");
        $__internal_a0c6f46e692f6b68728b81033b67fca6ad63b0f1fd83ac717fcf8e0e364cbe2e->enter($__internal_a0c6f46e692f6b68728b81033b67fca6ad63b0f1fd83ac717fcf8e0e364cbe2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_a0c6f46e692f6b68728b81033b67fca6ad63b0f1fd83ac717fcf8e0e364cbe2e->leave($__internal_a0c6f46e692f6b68728b81033b67fca6ad63b0f1fd83ac717fcf8e0e364cbe2e_prof);

    }

    // line 101
    public function block_global_actions($context, array $blocks = array())
    {
        $__internal_e03b927002c6a22d061511f82e894a1261eb495042f813434bbc443f31d1043d = $this->env->getExtension("native_profiler");
        $__internal_e03b927002c6a22d061511f82e894a1261eb495042f813434bbc443f31d1043d->enter($__internal_e03b927002c6a22d061511f82e894a1261eb495042f813434bbc443f31d1043d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_actions"));

        
        $__internal_e03b927002c6a22d061511f82e894a1261eb495042f813434bbc443f31d1043d->leave($__internal_e03b927002c6a22d061511f82e894a1261eb495042f813434bbc443f31d1043d_prof);

    }

    // line 109
    public function block_main($context, array $blocks = array())
    {
        $__internal_76dd5735c3955ab7d3550d8592db37e02c4964d9d1b8bd414de00c0c57bae17b = $this->env->getExtension("native_profiler");
        $__internal_76dd5735c3955ab7d3550d8592db37e02c4964d9d1b8bd414de00c0c57bae17b->enter($__internal_76dd5735c3955ab7d3550d8592db37e02c4964d9d1b8bd414de00c0c57bae17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_76dd5735c3955ab7d3550d8592db37e02c4964d9d1b8bd414de00c0c57bae17b->leave($__internal_76dd5735c3955ab7d3550d8592db37e02c4964d9d1b8bd414de00c0c57bae17b_prof);

    }

    // line 116
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_613b4762506cf3da4fd1d72f8fb3d5d86026ea4ed96276b5b97eb808cfc69060 = $this->env->getExtension("native_profiler");
        $__internal_613b4762506cf3da4fd1d72f8fb3d5d86026ea4ed96276b5b97eb808cfc69060->enter($__internal_613b4762506cf3da4fd1d72f8fb3d5d86026ea4ed96276b5b97eb808cfc69060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 117
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/javascript/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/javascript/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

            ";
        // line 120
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 133
        echo "
            <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/javascript/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/javascript/adminlte.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/javascript/jquery.featherlight.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/javascript/easyadmin.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_613b4762506cf3da4fd1d72f8fb3d5d86026ea4ed96276b5b97eb808cfc69060->leave($__internal_613b4762506cf3da4fd1d72f8fb3d5d86026ea4ed96276b5b97eb808cfc69060_prof);

    }

    // line 120
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_82f9284fed8cbcfef037484d07578a4009d5139961e3b05e5a1e922a062262a7 = $this->env->getExtension("native_profiler");
        $__internal_82f9284fed8cbcfef037484d07578a4009d5139961e3b05e5a1e922a062262a7->enter($__internal_82f9284fed8cbcfef037484d07578a4009d5139961e3b05e5a1e922a062262a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 121
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'fast',
                        sidebarExpandOnHover: true,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_82f9284fed8cbcfef037484d07578a4009d5139961e3b05e5a1e922a062262a7->leave($__internal_82f9284fed8cbcfef037484d07578a4009d5139961e3b05e5a1e922a062262a7_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  568 => 121,  562 => 120,  553 => 137,  549 => 136,  545 => 135,  541 => 134,  538 => 133,  536 => 120,  531 => 118,  526 => 117,  520 => 116,  509 => 109,  498 => 101,  487 => 96,  477 => 102,  475 => 101,  467 => 96,  463 => 94,  457 => 93,  447 => 89,  441 => 88,  433 => 110,  431 => 109,  426 => 106,  424 => 93,  420 => 91,  417 => 88,  411 => 87,  403 => 80,  401 => 77,  399 => 76,  393 => 75,  385 => 82,  383 => 75,  380 => 74,  374 => 73,  367 => 65,  361 => 63,  355 => 61,  353 => 60,  347 => 58,  341 => 57,  331 => 45,  327 => 44,  318 => 43,  312 => 42,  304 => 112,  302 => 87,  297 => 84,  295 => 73,  286 => 66,  284 => 57,  276 => 52,  270 => 48,  268 => 42,  264 => 40,  258 => 39,  237 => 37,  229 => 143,  220 => 141,  216 => 140,  213 => 139,  211 => 116,  207 => 114,  205 => 39,  195 => 37,  189 => 36,  178 => 33,  166 => 25,  163 => 24,  157 => 23,  148 => 16,  144 => 15,  140 => 14,  136 => 13,  131 => 12,  125 => 11,  113 => 9,  105 => 145,  103 => 36,  99 => 34,  97 => 33,  91 => 30,  87 => 29,  83 => 27,  81 => 23,  78 => 22,  69 => 20,  65 => 19,  62 => 18,  60 => 11,  55 => 9,  45 => 2,  42 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="{{ app.request.locale|split('_')|first|default('en') }}">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*         <meta name="generator" content="EasyAdmin" />*/
/* */
/*         <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>*/
/* */
/*         {% block head_stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('bundles/easyadmin/stylesheet/bootstrap.min.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('bundles/easyadmin/stylesheet/font-awesome.min.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('bundles/easyadmin/stylesheet/adminlte.min.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('bundles/easyadmin/stylesheet/featherlight.min.css') }}">*/
/*             <link rel="stylesheet" href="{{ path('_easyadmin_render_css') }}">*/
/*         {% endblock %}*/
/* */
/*         {% for css_asset in easyadmin_config('design.assets.css') %}*/
/*             <link rel="stylesheet" href="{{ asset(css_asset) }}">*/
/*         {% endfor %}*/
/* */
/*         {% block head_favicon %}*/
/*             {% set favicon = easyadmin_config('design.assets.favicon') %}*/
/*             <link rel="icon" type="{{ favicon.mime_type }}" href="{{ asset(favicon.path) }}" />*/
/*         {% endblock %}*/
/* */
/*         <!--[if lt IE 9]>*/
/*             <script src="{{ asset('bundles/easyadmin/stylesheet/html5shiv.min.css') }}"</script>*/
/*             <script src="{{ asset('bundles/easyadmin/stylesheet/respond.min.css') }}"></script>*/
/*         <![endif]-->*/
/* */
/*         {% block head_javascript %}{% endblock %}*/
/*     </head>*/
/* */
/*     {% block body %}*/
/*     <body id="{% block body_id %}{% endblock %}" class="easyadmin sidebar-mini fixed {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}">*/
/*         <div class="wrapper">*/
/*         {% block wrapper %}*/
/*             <header class="main-header">*/
/*                 <div id="header-logo">*/
/*                     {% block header_logo %}*/
/*                         <a class="logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}" title="{{ easyadmin_config('site_name')|striptags }}" href="{{ path('easyadmin') }}">*/
/*                             <span class="logo-mini">{{ easyadmin_config('site_name')|striptags|first|upper }}</span>*/
/*                             <span class="logo-lg">{{ easyadmin_config('site_name')|raw }}</span>*/
/*                         </a>*/
/*                     {% endblock header_logo %}*/
/*                 </div>*/
/* */
/*                 <nav class="navbar navbar-fixed-top" role="navigation">*/
/*                     <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*                         <span class="sr-only">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>*/
/*                     </a>*/
/*                     <div class="navbar-custom-menu">*/
/*                         <ul class="nav navbar-nav">*/
/*                             <li class="user user-menu">*/
/*                                 {% block user_menu %}*/
/*                                     <span class="sr-only">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>*/
/*                                     <i class="hidden-xs fa fa-user"></i>*/
/*                                     {% if app.user %}*/
/*                                         {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}*/
/*                                     {% else %}*/
/*                                         {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}*/
/*                                     {% endif %}*/
/*                                 {% endblock user_menu %}*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </nav>*/
/*             </header>*/
/* */
/*             <aside class="main-sidebar">*/
/*             {% block sidebar %}*/
/*                 <section class="sidebar">*/
/*                     {% block main_menu_wrapper %}*/
/*                         {{ include([*/
/*                             _entity_config is defined ? _entity_config.templates.menu,*/
/*                             easyadmin_config('design.templates.menu'),*/
/*                             '@EasyAdmin/default/menu.html.twig'*/
/*                         ]) }}*/
/*                     {% endblock main_menu_wrapper %}*/
/*                 </section>*/
/*             {% endblock sidebar %}*/
/*             </aside>*/
/* */
/*             <div class="content-wrapper">*/
/*             {% block content %}*/
/*                 {% block flash_messages %}*/
/*                     {{ _entity_config is defined ? include(_entity_config.templates.flash_messages) }}*/
/*                 {% endblock flash_messages %}*/
/* */
/*                 <section class="content-header">*/
/*                 {% block content_header %}*/
/*                     <div class="row">*/
/*                         <div class="col-sm-5">*/
/*                             <h1 class="title">{% block content_title %}{% endblock %}</h1>*/
/*                         </div>*/
/* */
/*                         <div class="col-sm-7">*/
/*                             <div class="global-actions">*/
/*                                 {% block global_actions %}{% endblock %}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endblock content_header %}*/
/*                 </section>*/
/* */
/*                 <section id="main" class="content">*/
/*                     {% block main %}{% endblock %}*/
/*                 </section>*/
/*             {% endblock content %}*/
/*             </div>*/
/*         {% endblock wrapper %}*/
/*         </div>*/
/* */
/*         {% block body_javascript %}*/
/*             <script src="{{ asset('bundles/easyadmin/javascript/jquery.min.js') }}"></script>*/
/*             <script src="{{ asset('bundles/easyadmin/javascript/bootstrap.min.js') }}"></script>*/
/* */
/*             {% block adminlte_options %}*/
/*                 <script type="text/javascript">*/
/*                     var AdminLTEOptions = {*/
/*                         animationSpeed: 'fast',*/
/*                         sidebarExpandOnHover: true,*/
/*                         enableBoxRefresh: false,*/
/*                         enableBSToppltip: false,*/
/*                         enableFastclick: false,*/
/*                         enableControlSidebar: false,*/
/*                         enableBoxWidget: false*/
/*                     };*/
/*                 </script>*/
/*             {% endblock %}*/
/* */
/*             <script src="{{ asset('bundles/easyadmin/javascript/jquery.slimscroll.min.js') }}"></script>*/
/*             <script src="{{ asset('bundles/easyadmin/javascript/adminlte.min.js') }}"></script>*/
/*             <script src="{{ asset('bundles/easyadmin/javascript/jquery.featherlight.min.js') }}"></script>*/
/*             <script src="{{ asset('bundles/easyadmin/javascript/easyadmin.js') }}"></script>*/
/*         {% endblock body_javascript %}*/
/* */
/*         {% for js_asset in easyadmin_config('design.assets.js') %}*/
/*             <script src="{{ asset(js_asset) }}"></script>*/
/*         {% endfor %}*/
/*     </body>*/
/*     {% endblock body %}*/
/* </html>*/
/* */
