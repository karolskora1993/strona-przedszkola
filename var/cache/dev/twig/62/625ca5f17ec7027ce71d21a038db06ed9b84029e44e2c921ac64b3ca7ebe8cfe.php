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
        $__internal_a063a91e5454cc9b8a59b071ca9a2a54e5402b588b8aff0f12218453269d102d = $this->env->getExtension("native_profiler");
        $__internal_a063a91e5454cc9b8a59b071ca9a2a54e5402b588b8aff0f12218453269d102d->enter($__internal_a063a91e5454cc9b8a59b071ca9a2a54e5402b588b8aff0f12218453269d102d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

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
        
        $__internal_a063a91e5454cc9b8a59b071ca9a2a54e5402b588b8aff0f12218453269d102d->leave($__internal_a063a91e5454cc9b8a59b071ca9a2a54e5402b588b8aff0f12218453269d102d_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_8a970a4667bda667586fbafa5dcf295d2ee0b2c4cfdfc133ff5fbe1e561332be = $this->env->getExtension("native_profiler");
        $__internal_8a970a4667bda667586fbafa5dcf295d2ee0b2c4cfdfc133ff5fbe1e561332be->enter($__internal_8a970a4667bda667586fbafa5dcf295d2ee0b2c4cfdfc133ff5fbe1e561332be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags($this->renderBlock("content_title", $context, $blocks));
        
        $__internal_8a970a4667bda667586fbafa5dcf295d2ee0b2c4cfdfc133ff5fbe1e561332be->leave($__internal_8a970a4667bda667586fbafa5dcf295d2ee0b2c4cfdfc133ff5fbe1e561332be_prof);

    }

    // line 11
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_7b4337d84fbff4e902d024d0793e48e069e4c6e23acec94f5fb751e18121be06 = $this->env->getExtension("native_profiler");
        $__internal_7b4337d84fbff4e902d024d0793e48e069e4c6e23acec94f5fb751e18121be06->enter($__internal_7b4337d84fbff4e902d024d0793e48e069e4c6e23acec94f5fb751e18121be06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/adminlte.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/featherlight.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("_easyadmin_render_css");
        echo "\">
        ";
        
        $__internal_7b4337d84fbff4e902d024d0793e48e069e4c6e23acec94f5fb751e18121be06->leave($__internal_7b4337d84fbff4e902d024d0793e48e069e4c6e23acec94f5fb751e18121be06_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_423d4a98da7d0fb2fab3616357fa8ff180087e05b5f84fb84178d66160e3527c = $this->env->getExtension("native_profiler");
        $__internal_423d4a98da7d0fb2fab3616357fa8ff180087e05b5f84fb84178d66160e3527c->enter($__internal_423d4a98da7d0fb2fab3616357fa8ff180087e05b5f84fb84178d66160e3527c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

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
        
        $__internal_423d4a98da7d0fb2fab3616357fa8ff180087e05b5f84fb84178d66160e3527c->leave($__internal_423d4a98da7d0fb2fab3616357fa8ff180087e05b5f84fb84178d66160e3527c_prof);

    }

    // line 33
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_af2c10c3fcbc358ad3af3aa3821dc9475a5d23a60b83cc13197075c0c719f9c9 = $this->env->getExtension("native_profiler");
        $__internal_af2c10c3fcbc358ad3af3aa3821dc9475a5d23a60b83cc13197075c0c719f9c9->enter($__internal_af2c10c3fcbc358ad3af3aa3821dc9475a5d23a60b83cc13197075c0c719f9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        
        $__internal_af2c10c3fcbc358ad3af3aa3821dc9475a5d23a60b83cc13197075c0c719f9c9->leave($__internal_af2c10c3fcbc358ad3af3aa3821dc9475a5d23a60b83cc13197075c0c719f9c9_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_b39a973da7ee01409a7305eaf545a3c009b45cb6eb6a7394cdf83db3d97ef3f3 = $this->env->getExtension("native_profiler");
        $__internal_b39a973da7ee01409a7305eaf545a3c009b45cb6eb6a7394cdf83db3d97ef3f3->enter($__internal_b39a973da7ee01409a7305eaf545a3c009b45cb6eb6a7394cdf83db3d97ef3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b39a973da7ee01409a7305eaf545a3c009b45cb6eb6a7394cdf83db3d97ef3f3->leave($__internal_b39a973da7ee01409a7305eaf545a3c009b45cb6eb6a7394cdf83db3d97ef3f3_prof);

    }

    // line 37
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_58e69b5558b30a3947de70b61fc43550f2766fb6db301eab0b86be38b1ce5276 = $this->env->getExtension("native_profiler");
        $__internal_58e69b5558b30a3947de70b61fc43550f2766fb6db301eab0b86be38b1ce5276->enter($__internal_58e69b5558b30a3947de70b61fc43550f2766fb6db301eab0b86be38b1ce5276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_58e69b5558b30a3947de70b61fc43550f2766fb6db301eab0b86be38b1ce5276->leave($__internal_58e69b5558b30a3947de70b61fc43550f2766fb6db301eab0b86be38b1ce5276_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_16ace8d17c6a01b2221b0a56db4fcdb3ede9afb03dfab26d81b834bae5b251c5 = $this->env->getExtension("native_profiler");
        $__internal_16ace8d17c6a01b2221b0a56db4fcdb3ede9afb03dfab26d81b834bae5b251c5->enter($__internal_16ace8d17c6a01b2221b0a56db4fcdb3ede9afb03dfab26d81b834bae5b251c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_16ace8d17c6a01b2221b0a56db4fcdb3ede9afb03dfab26d81b834bae5b251c5->leave($__internal_16ace8d17c6a01b2221b0a56db4fcdb3ede9afb03dfab26d81b834bae5b251c5_prof);

    }

    // line 39
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_5bea7a2111578c272d40b24771a70218924bd5710aa5a1488a553671174e15f7 = $this->env->getExtension("native_profiler");
        $__internal_5bea7a2111578c272d40b24771a70218924bd5710aa5a1488a553671174e15f7->enter($__internal_5bea7a2111578c272d40b24771a70218924bd5710aa5a1488a553671174e15f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

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
        
        $__internal_5bea7a2111578c272d40b24771a70218924bd5710aa5a1488a553671174e15f7->leave($__internal_5bea7a2111578c272d40b24771a70218924bd5710aa5a1488a553671174e15f7_prof);

    }

    // line 42
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_5ac0fb10157a509059f9b42def05d17fd4448a2f87e4a985455df974228a2f7d = $this->env->getExtension("native_profiler");
        $__internal_5ac0fb10157a509059f9b42def05d17fd4448a2f87e4a985455df974228a2f7d->enter($__internal_5ac0fb10157a509059f9b42def05d17fd4448a2f87e4a985455df974228a2f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

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
        
        $__internal_5ac0fb10157a509059f9b42def05d17fd4448a2f87e4a985455df974228a2f7d->leave($__internal_5ac0fb10157a509059f9b42def05d17fd4448a2f87e4a985455df974228a2f7d_prof);

    }

    // line 57
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_7a11875b649c57f7dfbd1e08621e5b2ea2a59f17be4668cd718b87c889c005f9 = $this->env->getExtension("native_profiler");
        $__internal_7a11875b649c57f7dfbd1e08621e5b2ea2a59f17be4668cd718b87c889c005f9->enter($__internal_7a11875b649c57f7dfbd1e08621e5b2ea2a59f17be4668cd718b87c889c005f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

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
        
        $__internal_7a11875b649c57f7dfbd1e08621e5b2ea2a59f17be4668cd718b87c889c005f9->leave($__internal_7a11875b649c57f7dfbd1e08621e5b2ea2a59f17be4668cd718b87c889c005f9_prof);

    }

    // line 73
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_b7061cb493456de34c7ef815b19ba5db47b718db216db3695dfc4437b55dc983 = $this->env->getExtension("native_profiler");
        $__internal_b7061cb493456de34c7ef815b19ba5db47b718db216db3695dfc4437b55dc983->enter($__internal_b7061cb493456de34c7ef815b19ba5db47b718db216db3695dfc4437b55dc983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 74
        echo "                <section class=\"sidebar\">
                    ";
        // line 75
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 82
        echo "                </section>
            ";
        
        $__internal_b7061cb493456de34c7ef815b19ba5db47b718db216db3695dfc4437b55dc983->leave($__internal_b7061cb493456de34c7ef815b19ba5db47b718db216db3695dfc4437b55dc983_prof);

    }

    // line 75
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_f038b47babd17b9df554a3ed9579dea51f649bbb2a4a27ab4dd760741e03da3e = $this->env->getExtension("native_profiler");
        $__internal_f038b47babd17b9df554a3ed9579dea51f649bbb2a4a27ab4dd760741e03da3e->enter($__internal_f038b47babd17b9df554a3ed9579dea51f649bbb2a4a27ab4dd760741e03da3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 76
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 77
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 80
        echo "
                    ";
        
        $__internal_f038b47babd17b9df554a3ed9579dea51f649bbb2a4a27ab4dd760741e03da3e->leave($__internal_f038b47babd17b9df554a3ed9579dea51f649bbb2a4a27ab4dd760741e03da3e_prof);

    }

    // line 87
    public function block_content($context, array $blocks = array())
    {
        $__internal_b993e1c0c1de3e34aed6a303552616444350bbd21bde287562dc79843d664530 = $this->env->getExtension("native_profiler");
        $__internal_b993e1c0c1de3e34aed6a303552616444350bbd21bde287562dc79843d664530->enter($__internal_b993e1c0c1de3e34aed6a303552616444350bbd21bde287562dc79843d664530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_b993e1c0c1de3e34aed6a303552616444350bbd21bde287562dc79843d664530->leave($__internal_b993e1c0c1de3e34aed6a303552616444350bbd21bde287562dc79843d664530_prof);

    }

    // line 88
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_cd0f8d72e0a762e10bcc13b6503eb80e40f5421b64480ff9e55d261394b89e44 = $this->env->getExtension("native_profiler");
        $__internal_cd0f8d72e0a762e10bcc13b6503eb80e40f5421b64480ff9e55d261394b89e44->enter($__internal_cd0f8d72e0a762e10bcc13b6503eb80e40f5421b64480ff9e55d261394b89e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 89
        echo "                    ";
        echo ((array_key_exists("_entity_config", $context)) ? (twig_include($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array()))) : (""));
        echo "
                ";
        
        $__internal_cd0f8d72e0a762e10bcc13b6503eb80e40f5421b64480ff9e55d261394b89e44->leave($__internal_cd0f8d72e0a762e10bcc13b6503eb80e40f5421b64480ff9e55d261394b89e44_prof);

    }

    // line 93
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_6e2c7c7fa7e77e5f43e36c4d7f3b5741a51130515ddaffeb0a7b01adf0ac2ff5 = $this->env->getExtension("native_profiler");
        $__internal_6e2c7c7fa7e77e5f43e36c4d7f3b5741a51130515ddaffeb0a7b01adf0ac2ff5->enter($__internal_6e2c7c7fa7e77e5f43e36c4d7f3b5741a51130515ddaffeb0a7b01adf0ac2ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

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
        
        $__internal_6e2c7c7fa7e77e5f43e36c4d7f3b5741a51130515ddaffeb0a7b01adf0ac2ff5->leave($__internal_6e2c7c7fa7e77e5f43e36c4d7f3b5741a51130515ddaffeb0a7b01adf0ac2ff5_prof);

    }

    // line 96
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_06aa94705edab92376f88d772c4f0eab03a82e4e5bdcc36f41e3f64a701d5548 = $this->env->getExtension("native_profiler");
        $__internal_06aa94705edab92376f88d772c4f0eab03a82e4e5bdcc36f41e3f64a701d5548->enter($__internal_06aa94705edab92376f88d772c4f0eab03a82e4e5bdcc36f41e3f64a701d5548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_06aa94705edab92376f88d772c4f0eab03a82e4e5bdcc36f41e3f64a701d5548->leave($__internal_06aa94705edab92376f88d772c4f0eab03a82e4e5bdcc36f41e3f64a701d5548_prof);

    }

    // line 101
    public function block_global_actions($context, array $blocks = array())
    {
        $__internal_cb8489de8e5595ded576e4bbbd766ba460aac0173f0b03177de6f7efafd1f471 = $this->env->getExtension("native_profiler");
        $__internal_cb8489de8e5595ded576e4bbbd766ba460aac0173f0b03177de6f7efafd1f471->enter($__internal_cb8489de8e5595ded576e4bbbd766ba460aac0173f0b03177de6f7efafd1f471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_actions"));

        
        $__internal_cb8489de8e5595ded576e4bbbd766ba460aac0173f0b03177de6f7efafd1f471->leave($__internal_cb8489de8e5595ded576e4bbbd766ba460aac0173f0b03177de6f7efafd1f471_prof);

    }

    // line 109
    public function block_main($context, array $blocks = array())
    {
        $__internal_cca8f0441ad60dfc7adf1375b8bd1bca118694b4a3196912aa7859384a9a3140 = $this->env->getExtension("native_profiler");
        $__internal_cca8f0441ad60dfc7adf1375b8bd1bca118694b4a3196912aa7859384a9a3140->enter($__internal_cca8f0441ad60dfc7adf1375b8bd1bca118694b4a3196912aa7859384a9a3140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_cca8f0441ad60dfc7adf1375b8bd1bca118694b4a3196912aa7859384a9a3140->leave($__internal_cca8f0441ad60dfc7adf1375b8bd1bca118694b4a3196912aa7859384a9a3140_prof);

    }

    // line 116
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_321486df4b648f805ed846b8a7ec39e0d555dfc01be32af97c34f5ae0545a555 = $this->env->getExtension("native_profiler");
        $__internal_321486df4b648f805ed846b8a7ec39e0d555dfc01be32af97c34f5ae0545a555->enter($__internal_321486df4b648f805ed846b8a7ec39e0d555dfc01be32af97c34f5ae0545a555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_321486df4b648f805ed846b8a7ec39e0d555dfc01be32af97c34f5ae0545a555->leave($__internal_321486df4b648f805ed846b8a7ec39e0d555dfc01be32af97c34f5ae0545a555_prof);

    }

    // line 120
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_f22757370eb8a97efd6ac0cc62ed8dfef189ca31cbd0b5dfc7d59ab5023cbf1e = $this->env->getExtension("native_profiler");
        $__internal_f22757370eb8a97efd6ac0cc62ed8dfef189ca31cbd0b5dfc7d59ab5023cbf1e->enter($__internal_f22757370eb8a97efd6ac0cc62ed8dfef189ca31cbd0b5dfc7d59ab5023cbf1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

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
        
        $__internal_f22757370eb8a97efd6ac0cc62ed8dfef189ca31cbd0b5dfc7d59ab5023cbf1e->leave($__internal_f22757370eb8a97efd6ac0cc62ed8dfef189ca31cbd0b5dfc7d59ab5023cbf1e_prof);

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
