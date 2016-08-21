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
        $__internal_913efd20ade0fd96b4cc351a3325337265d2689c41c1f3637a85b14df3332e8a = $this->env->getExtension("native_profiler");
        $__internal_913efd20ade0fd96b4cc351a3325337265d2689c41c1f3637a85b14df3332e8a->enter($__internal_913efd20ade0fd96b4cc351a3325337265d2689c41c1f3637a85b14df3332e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
aaaaa
<html lang=\"";
        // line 3
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 19
        echo "
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 21
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
        ";
        // line 24
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 28
        echo "
        <!--[if lt IE 9]>
            <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/html5shiv.min.css"), "html", null, true);
        echo "\"</script>
            <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/respond.min.css"), "html", null, true);
        echo "\"></script>
        <![endif]-->

        ";
        // line 34
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 35
        echo "    </head>

    ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 145
        echo "</html>
";
        
        $__internal_913efd20ade0fd96b4cc351a3325337265d2689c41c1f3637a85b14df3332e8a->leave($__internal_913efd20ade0fd96b4cc351a3325337265d2689c41c1f3637a85b14df3332e8a_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_41525b72d1548da1376098a0756c788c3cf262e637c203d5db04078941dd08ec = $this->env->getExtension("native_profiler");
        $__internal_41525b72d1548da1376098a0756c788c3cf262e637c203d5db04078941dd08ec->enter($__internal_41525b72d1548da1376098a0756c788c3cf262e637c203d5db04078941dd08ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags($this->renderBlock("content_title", $context, $blocks));
        
        $__internal_41525b72d1548da1376098a0756c788c3cf262e637c203d5db04078941dd08ec->leave($__internal_41525b72d1548da1376098a0756c788c3cf262e637c203d5db04078941dd08ec_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_e784683df76d8b6e4033780fe0e8ae44b9bf018a9b55627a7b2f8c06b3638329 = $this->env->getExtension("native_profiler");
        $__internal_e784683df76d8b6e4033780fe0e8ae44b9bf018a9b55627a7b2f8c06b3638329->enter($__internal_e784683df76d8b6e4033780fe0e8ae44b9bf018a9b55627a7b2f8c06b3638329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/adminlte.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/featherlight.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("_easyadmin_render_css");
        echo "\">
        ";
        
        $__internal_e784683df76d8b6e4033780fe0e8ae44b9bf018a9b55627a7b2f8c06b3638329->leave($__internal_e784683df76d8b6e4033780fe0e8ae44b9bf018a9b55627a7b2f8c06b3638329_prof);

    }

    // line 24
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_5f4b038da049c40b910943d12c8c592933f304df674bd777dd92e49d8d8a5b3d = $this->env->getExtension("native_profiler");
        $__internal_5f4b038da049c40b910943d12c8c592933f304df674bd777dd92e49d8d8a5b3d->enter($__internal_5f4b038da049c40b910943d12c8c592933f304df674bd777dd92e49d8d8a5b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 25
        echo "            ";
        $context["favicon"] = $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.assets.favicon");
        // line 26
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["favicon"]) ? $context["favicon"] : $this->getContext($context, "favicon")), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["favicon"]) ? $context["favicon"] : $this->getContext($context, "favicon")), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_5f4b038da049c40b910943d12c8c592933f304df674bd777dd92e49d8d8a5b3d->leave($__internal_5f4b038da049c40b910943d12c8c592933f304df674bd777dd92e49d8d8a5b3d_prof);

    }

    // line 34
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_ef8619e386207b15e71127e1d65ef9b0e076f2e54c873e620dcb53025a1e36a1 = $this->env->getExtension("native_profiler");
        $__internal_ef8619e386207b15e71127e1d65ef9b0e076f2e54c873e620dcb53025a1e36a1->enter($__internal_ef8619e386207b15e71127e1d65ef9b0e076f2e54c873e620dcb53025a1e36a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        
        $__internal_ef8619e386207b15e71127e1d65ef9b0e076f2e54c873e620dcb53025a1e36a1->leave($__internal_ef8619e386207b15e71127e1d65ef9b0e076f2e54c873e620dcb53025a1e36a1_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_d369765ce89cecd8903be798c4aec5960dc25d94d1d79029f4b228b30ca3cd14 = $this->env->getExtension("native_profiler");
        $__internal_d369765ce89cecd8903be798c4aec5960dc25d94d1d79029f4b228b30ca3cd14->enter($__internal_d369765ce89cecd8903be798c4aec5960dc25d94d1d79029f4b228b30ca3cd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 38
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini fixed ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 40
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
        
        $__internal_d369765ce89cecd8903be798c4aec5960dc25d94d1d79029f4b228b30ca3cd14->leave($__internal_d369765ce89cecd8903be798c4aec5960dc25d94d1d79029f4b228b30ca3cd14_prof);

    }

    // line 38
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_877fea5a2c93a2396232691b1f8ad37b6d7f2a1272ae158be5c079647977afa9 = $this->env->getExtension("native_profiler");
        $__internal_877fea5a2c93a2396232691b1f8ad37b6d7f2a1272ae158be5c079647977afa9->enter($__internal_877fea5a2c93a2396232691b1f8ad37b6d7f2a1272ae158be5c079647977afa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_877fea5a2c93a2396232691b1f8ad37b6d7f2a1272ae158be5c079647977afa9->leave($__internal_877fea5a2c93a2396232691b1f8ad37b6d7f2a1272ae158be5c079647977afa9_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_51a9498a3514e817c7f83a02ae5fc1be09e9bb1e001da2b0d26f9502ac3c8fda = $this->env->getExtension("native_profiler");
        $__internal_51a9498a3514e817c7f83a02ae5fc1be09e9bb1e001da2b0d26f9502ac3c8fda->enter($__internal_51a9498a3514e817c7f83a02ae5fc1be09e9bb1e001da2b0d26f9502ac3c8fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_51a9498a3514e817c7f83a02ae5fc1be09e9bb1e001da2b0d26f9502ac3c8fda->leave($__internal_51a9498a3514e817c7f83a02ae5fc1be09e9bb1e001da2b0d26f9502ac3c8fda_prof);

    }

    // line 40
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_eb9ea3fd43e8ab131bca657e04d8a52dcd7b9e43322d40dffe45acb852fd48a3 = $this->env->getExtension("native_profiler");
        $__internal_eb9ea3fd43e8ab131bca657e04d8a52dcd7b9e43322d40dffe45acb852fd48a3->enter($__internal_eb9ea3fd43e8ab131bca657e04d8a52dcd7b9e43322d40dffe45acb852fd48a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 41
        echo "            <header class=\"main-header\">
                <div id=\"header-logo\">
                    ";
        // line 43
        $this->displayBlock('header_logo', $context, $blocks);
        // line 49
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
        
        $__internal_eb9ea3fd43e8ab131bca657e04d8a52dcd7b9e43322d40dffe45acb852fd48a3->leave($__internal_eb9ea3fd43e8ab131bca657e04d8a52dcd7b9e43322d40dffe45acb852fd48a3_prof);

    }

    // line 43
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_83b4495827331a455d1557bddd47369fa956ce905038936dd530113c0c783068 = $this->env->getExtension("native_profiler");
        $__internal_83b4495827331a455d1557bddd47369fa956ce905038936dd530113c0c783068->enter($__internal_83b4495827331a455d1557bddd47369fa956ce905038936dd530113c0c783068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 44
        echo "                        <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getPath("easyadmin");
        echo "\">
                            <span class=\"logo-mini\">";
        // line 45
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_first($this->env, strip_tags($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name")))), "html", null, true);
        echo "</span>
                            <span class=\"logo-lg\">";
        // line 46
        echo $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name");
        echo "</span>
                        </a>
                    ";
        
        $__internal_83b4495827331a455d1557bddd47369fa956ce905038936dd530113c0c783068->leave($__internal_83b4495827331a455d1557bddd47369fa956ce905038936dd530113c0c783068_prof);

    }

    // line 57
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_57ce182f49ea9998d7f87f77579bdcc370486ffa28ac115e0c1024d2554d0f5a = $this->env->getExtension("native_profiler");
        $__internal_57ce182f49ea9998d7f87f77579bdcc370486ffa28ac115e0c1024d2554d0f5a->enter($__internal_57ce182f49ea9998d7f87f77579bdcc370486ffa28ac115e0c1024d2554d0f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

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
        
        $__internal_57ce182f49ea9998d7f87f77579bdcc370486ffa28ac115e0c1024d2554d0f5a->leave($__internal_57ce182f49ea9998d7f87f77579bdcc370486ffa28ac115e0c1024d2554d0f5a_prof);

    }

    // line 73
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4d0f3192ebd61d0a9aa05428bd60c3a3b4b5f6de25e15d548d324ad6869e3794 = $this->env->getExtension("native_profiler");
        $__internal_4d0f3192ebd61d0a9aa05428bd60c3a3b4b5f6de25e15d548d324ad6869e3794->enter($__internal_4d0f3192ebd61d0a9aa05428bd60c3a3b4b5f6de25e15d548d324ad6869e3794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 74
        echo "                <section class=\"sidebar\">
                    ";
        // line 75
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 82
        echo "                </section>
            ";
        
        $__internal_4d0f3192ebd61d0a9aa05428bd60c3a3b4b5f6de25e15d548d324ad6869e3794->leave($__internal_4d0f3192ebd61d0a9aa05428bd60c3a3b4b5f6de25e15d548d324ad6869e3794_prof);

    }

    // line 75
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_1f902a69667117eb05de9c5f24421d1019bb7ad365751dd2e98bac7befafc5b2 = $this->env->getExtension("native_profiler");
        $__internal_1f902a69667117eb05de9c5f24421d1019bb7ad365751dd2e98bac7befafc5b2->enter($__internal_1f902a69667117eb05de9c5f24421d1019bb7ad365751dd2e98bac7befafc5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 76
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 77
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 80
        echo "
                    ";
        
        $__internal_1f902a69667117eb05de9c5f24421d1019bb7ad365751dd2e98bac7befafc5b2->leave($__internal_1f902a69667117eb05de9c5f24421d1019bb7ad365751dd2e98bac7befafc5b2_prof);

    }

    // line 87
    public function block_content($context, array $blocks = array())
    {
        $__internal_f8e4cfc421498a1ecb4d9e76fb0d72053ab261e2164624d3bece780fa6a098db = $this->env->getExtension("native_profiler");
        $__internal_f8e4cfc421498a1ecb4d9e76fb0d72053ab261e2164624d3bece780fa6a098db->enter($__internal_f8e4cfc421498a1ecb4d9e76fb0d72053ab261e2164624d3bece780fa6a098db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_f8e4cfc421498a1ecb4d9e76fb0d72053ab261e2164624d3bece780fa6a098db->leave($__internal_f8e4cfc421498a1ecb4d9e76fb0d72053ab261e2164624d3bece780fa6a098db_prof);

    }

    // line 88
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_81df8acb2aa6c00a58ad090fc851c7e169064ae004305f9bda9c71f092d6e425 = $this->env->getExtension("native_profiler");
        $__internal_81df8acb2aa6c00a58ad090fc851c7e169064ae004305f9bda9c71f092d6e425->enter($__internal_81df8acb2aa6c00a58ad090fc851c7e169064ae004305f9bda9c71f092d6e425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 89
        echo "                    ";
        echo ((array_key_exists("_entity_config", $context)) ? (twig_include($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array()))) : (""));
        echo "
                ";
        
        $__internal_81df8acb2aa6c00a58ad090fc851c7e169064ae004305f9bda9c71f092d6e425->leave($__internal_81df8acb2aa6c00a58ad090fc851c7e169064ae004305f9bda9c71f092d6e425_prof);

    }

    // line 93
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_dd23ea093e77c82c5639fe4e2227fdf0072b336c9ee625c83f5f4c3b4468691e = $this->env->getExtension("native_profiler");
        $__internal_dd23ea093e77c82c5639fe4e2227fdf0072b336c9ee625c83f5f4c3b4468691e->enter($__internal_dd23ea093e77c82c5639fe4e2227fdf0072b336c9ee625c83f5f4c3b4468691e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

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
        
        $__internal_dd23ea093e77c82c5639fe4e2227fdf0072b336c9ee625c83f5f4c3b4468691e->leave($__internal_dd23ea093e77c82c5639fe4e2227fdf0072b336c9ee625c83f5f4c3b4468691e_prof);

    }

    // line 96
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_eef49c30d4c4a47598dace65b34dec15647d0b2569fcf6580324a597fbb0ff14 = $this->env->getExtension("native_profiler");
        $__internal_eef49c30d4c4a47598dace65b34dec15647d0b2569fcf6580324a597fbb0ff14->enter($__internal_eef49c30d4c4a47598dace65b34dec15647d0b2569fcf6580324a597fbb0ff14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_eef49c30d4c4a47598dace65b34dec15647d0b2569fcf6580324a597fbb0ff14->leave($__internal_eef49c30d4c4a47598dace65b34dec15647d0b2569fcf6580324a597fbb0ff14_prof);

    }

    // line 101
    public function block_global_actions($context, array $blocks = array())
    {
        $__internal_341a55842f55b58b29aa25270590e7a06f22494e8ac49b1cad7b09635a7c3ea8 = $this->env->getExtension("native_profiler");
        $__internal_341a55842f55b58b29aa25270590e7a06f22494e8ac49b1cad7b09635a7c3ea8->enter($__internal_341a55842f55b58b29aa25270590e7a06f22494e8ac49b1cad7b09635a7c3ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_actions"));

        
        $__internal_341a55842f55b58b29aa25270590e7a06f22494e8ac49b1cad7b09635a7c3ea8->leave($__internal_341a55842f55b58b29aa25270590e7a06f22494e8ac49b1cad7b09635a7c3ea8_prof);

    }

    // line 109
    public function block_main($context, array $blocks = array())
    {
        $__internal_30fa5456f8a579048aa4fc61696e649dc75aca055d75044e6b3851fc6e686624 = $this->env->getExtension("native_profiler");
        $__internal_30fa5456f8a579048aa4fc61696e649dc75aca055d75044e6b3851fc6e686624->enter($__internal_30fa5456f8a579048aa4fc61696e649dc75aca055d75044e6b3851fc6e686624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_30fa5456f8a579048aa4fc61696e649dc75aca055d75044e6b3851fc6e686624->leave($__internal_30fa5456f8a579048aa4fc61696e649dc75aca055d75044e6b3851fc6e686624_prof);

    }

    // line 116
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_590a3407eb021eaff0f1c1c9b844d2b76b57b5e0ceb37d65d4b21568f49698e8 = $this->env->getExtension("native_profiler");
        $__internal_590a3407eb021eaff0f1c1c9b844d2b76b57b5e0ceb37d65d4b21568f49698e8->enter($__internal_590a3407eb021eaff0f1c1c9b844d2b76b57b5e0ceb37d65d4b21568f49698e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 117
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>

            ";
        // line 120
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 133
        echo "
            <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/adminlte.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.featherlight.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/easyadmin.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_590a3407eb021eaff0f1c1c9b844d2b76b57b5e0ceb37d65d4b21568f49698e8->leave($__internal_590a3407eb021eaff0f1c1c9b844d2b76b57b5e0ceb37d65d4b21568f49698e8_prof);

    }

    // line 120
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_186eb54cc9adac2b64bc0ea3363ac9f9bda1f71f5264323c4aec001ed7f39940 = $this->env->getExtension("native_profiler");
        $__internal_186eb54cc9adac2b64bc0ea3363ac9f9bda1f71f5264323c4aec001ed7f39940->enter($__internal_186eb54cc9adac2b64bc0ea3363ac9f9bda1f71f5264323c4aec001ed7f39940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

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
        
        $__internal_186eb54cc9adac2b64bc0ea3363ac9f9bda1f71f5264323c4aec001ed7f39940->leave($__internal_186eb54cc9adac2b64bc0ea3363ac9f9bda1f71f5264323c4aec001ed7f39940_prof);

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
        return array (  568 => 121,  562 => 120,  553 => 137,  549 => 136,  545 => 135,  541 => 134,  538 => 133,  536 => 120,  531 => 118,  526 => 117,  520 => 116,  509 => 109,  498 => 101,  487 => 96,  477 => 102,  475 => 101,  467 => 96,  463 => 94,  457 => 93,  447 => 89,  441 => 88,  433 => 110,  431 => 109,  426 => 106,  424 => 93,  420 => 91,  417 => 88,  411 => 87,  403 => 80,  401 => 77,  399 => 76,  393 => 75,  385 => 82,  383 => 75,  380 => 74,  374 => 73,  367 => 65,  361 => 63,  355 => 61,  353 => 60,  347 => 58,  341 => 57,  331 => 46,  327 => 45,  318 => 44,  312 => 43,  304 => 112,  302 => 87,  297 => 84,  295 => 73,  286 => 66,  284 => 57,  276 => 52,  271 => 49,  269 => 43,  265 => 41,  259 => 40,  238 => 38,  230 => 143,  221 => 141,  217 => 140,  214 => 139,  212 => 116,  208 => 114,  206 => 40,  196 => 38,  190 => 37,  179 => 34,  167 => 26,  164 => 25,  158 => 24,  149 => 17,  145 => 16,  141 => 15,  137 => 14,  132 => 13,  126 => 12,  114 => 10,  106 => 145,  104 => 37,  100 => 35,  98 => 34,  92 => 31,  88 => 30,  84 => 28,  82 => 24,  79 => 23,  70 => 21,  66 => 20,  63 => 19,  61 => 12,  56 => 10,  46 => 3,  42 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* aaaaa*/
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
/*             <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('css/featherlight.min.css') }}">*/
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
/*             <script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*             <script src="{{ asset('js/jquery.min.js') }}"></script>*/
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
/*             <script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>*/
/*             <script src="{{ asset('js/adminlte.min.js') }}"></script>*/
/*             <script src="{{ asset('js/jquery.featherlight.min.js') }}"></script>*/
/*             <script src="{{ asset('js/easyadmin.js') }}"></script>*/
/*         {% endblock body_javascript %}*/
/* */
/*         {% for js_asset in easyadmin_config('design.assets.js') %}*/
/*             <script src="{{ asset(js_asset) }}"></script>*/
/*         {% endfor %}*/
/*     </body>*/
/*     {% endblock body %}*/
/* </html>*/
/* */
