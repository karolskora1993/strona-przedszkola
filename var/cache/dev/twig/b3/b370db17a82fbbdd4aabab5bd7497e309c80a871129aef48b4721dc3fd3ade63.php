<?php

/* @EasyAdmin/default/layout.html.twig */
class __TwigTemplate_bb23ec65b140e3bafe0a445547f307a376a4922f94f3b45ca20737915c06e8f6 extends Twig_Template
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
        $__internal_14c7f7b7cb6caf2f681ef31cfe558db68af6a5f87697d975d200656d0e760948 = $this->env->getExtension("native_profiler");
        $__internal_14c7f7b7cb6caf2f681ef31cfe558db68af6a5f87697d975d200656d0e760948->enter($__internal_14c7f7b7cb6caf2f681ef31cfe558db68af6a5f87697d975d200656d0e760948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

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
        
        $__internal_14c7f7b7cb6caf2f681ef31cfe558db68af6a5f87697d975d200656d0e760948->leave($__internal_14c7f7b7cb6caf2f681ef31cfe558db68af6a5f87697d975d200656d0e760948_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_56d2cc8998a58aeb3e4d42828038beea048cf5cacac445e4c7de9cb269850474 = $this->env->getExtension("native_profiler");
        $__internal_56d2cc8998a58aeb3e4d42828038beea048cf5cacac445e4c7de9cb269850474->enter($__internal_56d2cc8998a58aeb3e4d42828038beea048cf5cacac445e4c7de9cb269850474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags($this->renderBlock("content_title", $context, $blocks));
        
        $__internal_56d2cc8998a58aeb3e4d42828038beea048cf5cacac445e4c7de9cb269850474->leave($__internal_56d2cc8998a58aeb3e4d42828038beea048cf5cacac445e4c7de9cb269850474_prof);

    }

    // line 11
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_bb6870f006668d541988f1d9211811db2543e5b8f19493083098f9cacef27684 = $this->env->getExtension("native_profiler");
        $__internal_bb6870f006668d541988f1d9211811db2543e5b8f19493083098f9cacef27684->enter($__internal_bb6870f006668d541988f1d9211811db2543e5b8f19493083098f9cacef27684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

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
        
        $__internal_bb6870f006668d541988f1d9211811db2543e5b8f19493083098f9cacef27684->leave($__internal_bb6870f006668d541988f1d9211811db2543e5b8f19493083098f9cacef27684_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_fb8f670e48fd2f11bbf2693fe2206bdb464706a63ccbe1b33c53929fc07c1cb4 = $this->env->getExtension("native_profiler");
        $__internal_fb8f670e48fd2f11bbf2693fe2206bdb464706a63ccbe1b33c53929fc07c1cb4->enter($__internal_fb8f670e48fd2f11bbf2693fe2206bdb464706a63ccbe1b33c53929fc07c1cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

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
        
        $__internal_fb8f670e48fd2f11bbf2693fe2206bdb464706a63ccbe1b33c53929fc07c1cb4->leave($__internal_fb8f670e48fd2f11bbf2693fe2206bdb464706a63ccbe1b33c53929fc07c1cb4_prof);

    }

    // line 33
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_b77b50fc9083b03ff0f13852263a1b62b4d6eb8d5cf02a619d8f13f29bf66dbf = $this->env->getExtension("native_profiler");
        $__internal_b77b50fc9083b03ff0f13852263a1b62b4d6eb8d5cf02a619d8f13f29bf66dbf->enter($__internal_b77b50fc9083b03ff0f13852263a1b62b4d6eb8d5cf02a619d8f13f29bf66dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        
        $__internal_b77b50fc9083b03ff0f13852263a1b62b4d6eb8d5cf02a619d8f13f29bf66dbf->leave($__internal_b77b50fc9083b03ff0f13852263a1b62b4d6eb8d5cf02a619d8f13f29bf66dbf_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_177d4ec7b993e4db2c50fc6f5f2e63d518eea4048fbb514cc60267183e6de20b = $this->env->getExtension("native_profiler");
        $__internal_177d4ec7b993e4db2c50fc6f5f2e63d518eea4048fbb514cc60267183e6de20b->enter($__internal_177d4ec7b993e4db2c50fc6f5f2e63d518eea4048fbb514cc60267183e6de20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_177d4ec7b993e4db2c50fc6f5f2e63d518eea4048fbb514cc60267183e6de20b->leave($__internal_177d4ec7b993e4db2c50fc6f5f2e63d518eea4048fbb514cc60267183e6de20b_prof);

    }

    // line 37
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_1316bb81dbc91b5a65586e9d564e9ab8df08feed1fdb4cb2f640376a58d8a249 = $this->env->getExtension("native_profiler");
        $__internal_1316bb81dbc91b5a65586e9d564e9ab8df08feed1fdb4cb2f640376a58d8a249->enter($__internal_1316bb81dbc91b5a65586e9d564e9ab8df08feed1fdb4cb2f640376a58d8a249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_1316bb81dbc91b5a65586e9d564e9ab8df08feed1fdb4cb2f640376a58d8a249->leave($__internal_1316bb81dbc91b5a65586e9d564e9ab8df08feed1fdb4cb2f640376a58d8a249_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_14a8610c0826ab4d84c438ba3239c3200309f953a2de0afc5612b38f77aa0004 = $this->env->getExtension("native_profiler");
        $__internal_14a8610c0826ab4d84c438ba3239c3200309f953a2de0afc5612b38f77aa0004->enter($__internal_14a8610c0826ab4d84c438ba3239c3200309f953a2de0afc5612b38f77aa0004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_14a8610c0826ab4d84c438ba3239c3200309f953a2de0afc5612b38f77aa0004->leave($__internal_14a8610c0826ab4d84c438ba3239c3200309f953a2de0afc5612b38f77aa0004_prof);

    }

    // line 39
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_6955f0a321d2387423b9a55239f3786aa775b76d78f860be99553da5662c6bc1 = $this->env->getExtension("native_profiler");
        $__internal_6955f0a321d2387423b9a55239f3786aa775b76d78f860be99553da5662c6bc1->enter($__internal_6955f0a321d2387423b9a55239f3786aa775b76d78f860be99553da5662c6bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

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
        
        $__internal_6955f0a321d2387423b9a55239f3786aa775b76d78f860be99553da5662c6bc1->leave($__internal_6955f0a321d2387423b9a55239f3786aa775b76d78f860be99553da5662c6bc1_prof);

    }

    // line 42
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_06f14a35c061db3d1fe6988e35d513d02f0ee42e3047d7ab830a9ca1c4fd9e15 = $this->env->getExtension("native_profiler");
        $__internal_06f14a35c061db3d1fe6988e35d513d02f0ee42e3047d7ab830a9ca1c4fd9e15->enter($__internal_06f14a35c061db3d1fe6988e35d513d02f0ee42e3047d7ab830a9ca1c4fd9e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

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
        
        $__internal_06f14a35c061db3d1fe6988e35d513d02f0ee42e3047d7ab830a9ca1c4fd9e15->leave($__internal_06f14a35c061db3d1fe6988e35d513d02f0ee42e3047d7ab830a9ca1c4fd9e15_prof);

    }

    // line 57
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_d1593d4d951310e7fec2a7b07cbc1d904d9ccaf97b4e8a045c773ce8e454c1d7 = $this->env->getExtension("native_profiler");
        $__internal_d1593d4d951310e7fec2a7b07cbc1d904d9ccaf97b4e8a045c773ce8e454c1d7->enter($__internal_d1593d4d951310e7fec2a7b07cbc1d904d9ccaf97b4e8a045c773ce8e454c1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

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
        
        $__internal_d1593d4d951310e7fec2a7b07cbc1d904d9ccaf97b4e8a045c773ce8e454c1d7->leave($__internal_d1593d4d951310e7fec2a7b07cbc1d904d9ccaf97b4e8a045c773ce8e454c1d7_prof);

    }

    // line 73
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_75849aefef03585e4bb7b777f73a4c633b37316ac2b46f8f381914908d9b2ceb = $this->env->getExtension("native_profiler");
        $__internal_75849aefef03585e4bb7b777f73a4c633b37316ac2b46f8f381914908d9b2ceb->enter($__internal_75849aefef03585e4bb7b777f73a4c633b37316ac2b46f8f381914908d9b2ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 74
        echo "                <section class=\"sidebar\">
                    ";
        // line 75
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 82
        echo "                </section>
            ";
        
        $__internal_75849aefef03585e4bb7b777f73a4c633b37316ac2b46f8f381914908d9b2ceb->leave($__internal_75849aefef03585e4bb7b777f73a4c633b37316ac2b46f8f381914908d9b2ceb_prof);

    }

    // line 75
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_6699713d289ced4bf30a7e0d40d6170996516fda46caae3289469fc80a4b5d00 = $this->env->getExtension("native_profiler");
        $__internal_6699713d289ced4bf30a7e0d40d6170996516fda46caae3289469fc80a4b5d00->enter($__internal_6699713d289ced4bf30a7e0d40d6170996516fda46caae3289469fc80a4b5d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 76
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 77
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 80
        echo "
                    ";
        
        $__internal_6699713d289ced4bf30a7e0d40d6170996516fda46caae3289469fc80a4b5d00->leave($__internal_6699713d289ced4bf30a7e0d40d6170996516fda46caae3289469fc80a4b5d00_prof);

    }

    // line 87
    public function block_content($context, array $blocks = array())
    {
        $__internal_ac9f11047b20e374ff5461f6a8f371dc1b58c08bc12ecfc46391ec54e7555615 = $this->env->getExtension("native_profiler");
        $__internal_ac9f11047b20e374ff5461f6a8f371dc1b58c08bc12ecfc46391ec54e7555615->enter($__internal_ac9f11047b20e374ff5461f6a8f371dc1b58c08bc12ecfc46391ec54e7555615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_ac9f11047b20e374ff5461f6a8f371dc1b58c08bc12ecfc46391ec54e7555615->leave($__internal_ac9f11047b20e374ff5461f6a8f371dc1b58c08bc12ecfc46391ec54e7555615_prof);

    }

    // line 88
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_841f2d735f976c88d603d719eb9ae1111aae489452cedd846f847a98de2ada00 = $this->env->getExtension("native_profiler");
        $__internal_841f2d735f976c88d603d719eb9ae1111aae489452cedd846f847a98de2ada00->enter($__internal_841f2d735f976c88d603d719eb9ae1111aae489452cedd846f847a98de2ada00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 89
        echo "                    ";
        echo ((array_key_exists("_entity_config", $context)) ? (twig_include($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array()))) : (""));
        echo "
                ";
        
        $__internal_841f2d735f976c88d603d719eb9ae1111aae489452cedd846f847a98de2ada00->leave($__internal_841f2d735f976c88d603d719eb9ae1111aae489452cedd846f847a98de2ada00_prof);

    }

    // line 93
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_ddb19ae7a4f91b478693afa816832b7e574b0affb6d03c315d96fafb628e935d = $this->env->getExtension("native_profiler");
        $__internal_ddb19ae7a4f91b478693afa816832b7e574b0affb6d03c315d96fafb628e935d->enter($__internal_ddb19ae7a4f91b478693afa816832b7e574b0affb6d03c315d96fafb628e935d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

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
        
        $__internal_ddb19ae7a4f91b478693afa816832b7e574b0affb6d03c315d96fafb628e935d->leave($__internal_ddb19ae7a4f91b478693afa816832b7e574b0affb6d03c315d96fafb628e935d_prof);

    }

    // line 96
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_8e5a43b56c300d1c8fa562f600fcf8e3b800fb9a667a7be041490e7748974937 = $this->env->getExtension("native_profiler");
        $__internal_8e5a43b56c300d1c8fa562f600fcf8e3b800fb9a667a7be041490e7748974937->enter($__internal_8e5a43b56c300d1c8fa562f600fcf8e3b800fb9a667a7be041490e7748974937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_8e5a43b56c300d1c8fa562f600fcf8e3b800fb9a667a7be041490e7748974937->leave($__internal_8e5a43b56c300d1c8fa562f600fcf8e3b800fb9a667a7be041490e7748974937_prof);

    }

    // line 101
    public function block_global_actions($context, array $blocks = array())
    {
        $__internal_29edbe0f707fbd3497e752f95a2f5676367f836854400521b9d54c309e2fda00 = $this->env->getExtension("native_profiler");
        $__internal_29edbe0f707fbd3497e752f95a2f5676367f836854400521b9d54c309e2fda00->enter($__internal_29edbe0f707fbd3497e752f95a2f5676367f836854400521b9d54c309e2fda00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_actions"));

        
        $__internal_29edbe0f707fbd3497e752f95a2f5676367f836854400521b9d54c309e2fda00->leave($__internal_29edbe0f707fbd3497e752f95a2f5676367f836854400521b9d54c309e2fda00_prof);

    }

    // line 109
    public function block_main($context, array $blocks = array())
    {
        $__internal_21e8c3de18b910e3f764415d3cc8de380b4cff95732bf02063aab1d0165fc239 = $this->env->getExtension("native_profiler");
        $__internal_21e8c3de18b910e3f764415d3cc8de380b4cff95732bf02063aab1d0165fc239->enter($__internal_21e8c3de18b910e3f764415d3cc8de380b4cff95732bf02063aab1d0165fc239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_21e8c3de18b910e3f764415d3cc8de380b4cff95732bf02063aab1d0165fc239->leave($__internal_21e8c3de18b910e3f764415d3cc8de380b4cff95732bf02063aab1d0165fc239_prof);

    }

    // line 116
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_564c1dc2e03367a4f73cd2f6bbf9a6621311cc906d9c49c1bc3aa863776587d9 = $this->env->getExtension("native_profiler");
        $__internal_564c1dc2e03367a4f73cd2f6bbf9a6621311cc906d9c49c1bc3aa863776587d9->enter($__internal_564c1dc2e03367a4f73cd2f6bbf9a6621311cc906d9c49c1bc3aa863776587d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_564c1dc2e03367a4f73cd2f6bbf9a6621311cc906d9c49c1bc3aa863776587d9->leave($__internal_564c1dc2e03367a4f73cd2f6bbf9a6621311cc906d9c49c1bc3aa863776587d9_prof);

    }

    // line 120
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_9c1f019ffcb993d56dbbafa5d8529a62a2d2344ddc5fc7ce49a19714aa0a86d1 = $this->env->getExtension("native_profiler");
        $__internal_9c1f019ffcb993d56dbbafa5d8529a62a2d2344ddc5fc7ce49a19714aa0a86d1->enter($__internal_9c1f019ffcb993d56dbbafa5d8529a62a2d2344ddc5fc7ce49a19714aa0a86d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

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
        
        $__internal_9c1f019ffcb993d56dbbafa5d8529a62a2d2344ddc5fc7ce49a19714aa0a86d1->leave($__internal_9c1f019ffcb993d56dbbafa5d8529a62a2d2344ddc5fc7ce49a19714aa0a86d1_prof);

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
