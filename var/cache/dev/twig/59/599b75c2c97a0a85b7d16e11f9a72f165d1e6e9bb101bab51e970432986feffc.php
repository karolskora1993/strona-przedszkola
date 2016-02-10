<?php

/* @EasyAdmin/default/list.html.twig */
class __TwigTemplate_84d53b999969f6afb758f79b8916faa81afb1cce21b543e518a35e0df29b3966 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'page_title' => array($this, 'block_page_title'),
            'content_title' => array($this, 'block_content_title'),
            'global_actions' => array($this, 'block_global_actions'),
            'search_action' => array($this, 'block_search_action'),
            'new_action' => array($this, 'block_new_action'),
            'main' => array($this, 'block_main'),
            'table_head' => array($this, 'block_table_head'),
            'table_body' => array($this, 'block_table_body'),
            'item_actions' => array($this, 'block_item_actions'),
            'paginator' => array($this, 'block_paginator'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/list.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_678ec023bb451af2cb7ef76e35714ac908df1ecefe153badb6b3033a18c818ac = $this->env->getExtension("native_profiler");
        $__internal_678ec023bb451af2cb7ef76e35714ac908df1ecefe153badb6b3033a18c818ac->enter($__internal_678ec023bb451af2cb7ef76e35714ac908df1ecefe153badb6b3033a18c818ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/list.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 2
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array())));
        // line 6
        $context["_request_parameters"] = twig_array_merge(((array_key_exists("_request_parameters", $context)) ? (_twig_default_filter((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array())) : (array())), array("action" => $this->getAttribute($this->getAttribute(        // line 7
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"), "entity" => $this->getAttribute(        // line 8
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), "sortField" => $this->getAttribute($this->getAttribute(        // line 9
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"), "sortDirection" => $this->getAttribute($this->getAttribute(        // line 10
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method"), "page" => $this->getAttribute($this->getAttribute(        // line 11
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "page", 1 => 1), "method")));
        // line 14
        if (("search" == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 15
            $context["_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("query" => (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : (""))));
        }
        // line 18
        $context["_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("referer" => twig_urlencode_filter($this->env->getExtension('routing')->getPath("easyadmin", (isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters"))))));
        // line 4
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_678ec023bb451af2cb7ef76e35714ac908df1ecefe153badb6b3033a18c818ac->leave($__internal_678ec023bb451af2cb7ef76e35714ac908df1ecefe153badb6b3033a18c818ac_prof);

    }

    // line 20
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_47d0d61ab2990eeb23ca56deaf228163b73deb7a4c4f0a858613f3a36d8b7fea = $this->env->getExtension("native_profiler");
        $__internal_47d0d61ab2990eeb23ca56deaf228163b73deb7a4c4f0a858613f3a36d8b7fea->enter($__internal_47d0d61ab2990eeb23ca56deaf228163b73deb7a4c4f0a858613f3a36d8b7fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-list-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_47d0d61ab2990eeb23ca56deaf228163b73deb7a4c4f0a858613f3a36d8b7fea->leave($__internal_47d0d61ab2990eeb23ca56deaf228163b73deb7a4c4f0a858613f3a36d8b7fea_prof);

    }

    // line 21
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_681514c766eae8c640a3fb1db992c7cf3de86f92be9f3cc6806d02ed2548a753 = $this->env->getExtension("native_profiler");
        $__internal_681514c766eae8c640a3fb1db992c7cf3de86f92be9f3cc6806d02ed2548a753->enter($__internal_681514c766eae8c640a3fb1db992c7cf3de86f92be9f3cc6806d02ed2548a753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("list list-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_681514c766eae8c640a3fb1db992c7cf3de86f92be9f3cc6806d02ed2548a753->leave($__internal_681514c766eae8c640a3fb1db992c7cf3de86f92be9f3cc6806d02ed2548a753_prof);

    }

    // line 23
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_96b993b4dc052203d668934b3318d1fcbb67ad0321955e6eea7be3893d3953ff = $this->env->getExtension("native_profiler");
        $__internal_96b993b4dc052203d668934b3318d1fcbb67ad0321955e6eea7be3893d3953ff->enter($__internal_96b993b4dc052203d668934b3318d1fcbb67ad0321955e6eea7be3893d3953ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 24
        echo "    ";
        $this->displayParentBlock("head_stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap-toggle.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_96b993b4dc052203d668934b3318d1fcbb67ad0321955e6eea7be3893d3953ff->leave($__internal_96b993b4dc052203d668934b3318d1fcbb67ad0321955e6eea7be3893d3953ff_prof);

    }

    // line 28
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_d7deec21fb9f5f7372f6834c52dfdca2d5f2ee4b2e0d31c0110c0c9670fb628d = $this->env->getExtension("native_profiler");
        $__internal_d7deec21fb9f5f7372f6834c52dfdca2d5f2ee4b2e0d31c0110c0c9670fb628d->enter($__internal_d7deec21fb9f5f7372f6834c52dfdca2d5f2ee4b2e0d31c0110c0c9670fb628d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 29
        echo "    ";
        if (("search" == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 30
            echo "        ";
            echo $this->env->getExtension('translator')->transchoice("search.page_title", $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "nbResults", array()), array(), "EasyAdminBundle");
            echo "
    ";
        } else {
            // line 32
            echo "        ";
            $context["_default_title"] = $this->env->getExtension('translator')->trans("list.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
            // line 33
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "list", array(), "any", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "list", array(), "any", false, true), "title", array()), (isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))) : ((isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters"))), "html", null, true);
            echo "
    ";
        }
        
        $__internal_d7deec21fb9f5f7372f6834c52dfdca2d5f2ee4b2e0d31c0110c0c9670fb628d->leave($__internal_d7deec21fb9f5f7372f6834c52dfdca2d5f2ee4b2e0d31c0110c0c9670fb628d_prof);

    }

    // line 37
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_2fb73d02d2e21aa22d48e85accd484f1acf38f751d78bc124479acd4188b2605 = $this->env->getExtension("native_profiler");
        $__internal_2fb73d02d2e21aa22d48e85accd484f1acf38f751d78bc124479acd4188b2605->enter($__internal_2fb73d02d2e21aa22d48e85accd484f1acf38f751d78bc124479acd4188b2605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $this->displayBlock("page_title", $context, $blocks);
        
        $__internal_2fb73d02d2e21aa22d48e85accd484f1acf38f751d78bc124479acd4188b2605->leave($__internal_2fb73d02d2e21aa22d48e85accd484f1acf38f751d78bc124479acd4188b2605_prof);

    }

    // line 39
    public function block_global_actions($context, array $blocks = array())
    {
        $__internal_4eb4e8549aa4f7b6a34fda9c62ad6a2eb38b53ac12118a1125f94ad517694f5d = $this->env->getExtension("native_profiler");
        $__internal_4eb4e8549aa4f7b6a34fda9c62ad6a2eb38b53ac12118a1125f94ad517694f5d->enter($__internal_4eb4e8549aa4f7b6a34fda9c62ad6a2eb38b53ac12118a1125f94ad517694f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_actions"));

        // line 40
        echo "    ";
        if ($this->env->getExtension('easyadmin_extension')->isActionEnabled("list", "search", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))) {
            // line 41
            echo "        ";
            $context["_action"] = $this->env->getExtension('easyadmin_extension')->getActionConfiguration("list", "search", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
            // line 42
            echo "
        ";
            // line 43
            $this->displayBlock('search_action', $context, $blocks);
            // line 72
            echo "    ";
        }
        
        $__internal_4eb4e8549aa4f7b6a34fda9c62ad6a2eb38b53ac12118a1125f94ad517694f5d->leave($__internal_4eb4e8549aa4f7b6a34fda9c62ad6a2eb38b53ac12118a1125f94ad517694f5d_prof);

    }

    // line 43
    public function block_search_action($context, array $blocks = array())
    {
        $__internal_2886d60cba6783443eac2aabf579e9c80025fadbcebf2cac04bfe9faff303031 = $this->env->getExtension("native_profiler");
        $__internal_2886d60cba6783443eac2aabf579e9c80025fadbcebf2cac04bfe9faff303031->enter($__internal_2886d60cba6783443eac2aabf579e9c80025fadbcebf2cac04bfe9faff303031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_action"));

        // line 44
        echo "            <div class=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", array()), "action-search")) : ("action-search")), "html", null, true);
        echo "\">
                <form method=\"get\" action=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("easyadmin");
        echo "\">
                    <input type=\"hidden\" name=\"action\" value=\"search\">
                    <input type=\"hidden\" name=\"entity\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "entity", array()), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"sortField\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "sortField", array()), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"sortDirection\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "sortDirection", array()), "html", null, true);
        echo "\">
                    <div class=\"input-group\">
                        <input class=\"form-control\" type=\"search\" name=\"query\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "html", null, true);
        echo "\">
                        <span class=\"input-group-btn\">
                            <button class=\"btn\" type=\"submit\">
                                <i class=\"fa fa-search\"></i>
                                <span class=\"hidden-xs hidden-sm\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "label", array()), "action.search")) : ("action.search")), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters"))), "html", null, true);
        echo "</span>
                            </button>

                            ";
        // line 58
        if ($this->env->getExtension('easyadmin_extension')->isActionEnabled("list", "new", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))) {
            // line 59
            echo "                                ";
            $context["_action"] = $this->env->getExtension('easyadmin_extension')->getActionConfiguration("list", "new", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
            // line 60
            echo "                                ";
            $this->displayBlock('new_action', $context, $blocks);
            // line 66
            echo "                            ";
        }
        // line 67
        echo "                        </span>
                    </div>
                </form>
            </div>
        ";
        
        $__internal_2886d60cba6783443eac2aabf579e9c80025fadbcebf2cac04bfe9faff303031->leave($__internal_2886d60cba6783443eac2aabf579e9c80025fadbcebf2cac04bfe9faff303031_prof);

    }

    // line 60
    public function block_new_action($context, array $blocks = array())
    {
        $__internal_0dc80d989833dd6b081d798668ff1dfa7a9efdd46a7b50ea081524ab13a34690 = $this->env->getExtension("native_profiler");
        $__internal_0dc80d989833dd6b081d798668ff1dfa7a9efdd46a7b50ea081524ab13a34690->enter($__internal_0dc80d989833dd6b081d798668ff1dfa7a9efdd46a7b50ea081524ab13a34690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "new_action"));

        // line 61
        echo "                                    <a class=\"btn btn-primary ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("action" => $this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "name", array())))), "html", null, true);
        echo "\">
                                        ";
        // line 62
        if ($this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "icon", array())) {
            echo "<i class=\"fa fa-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "icon", array()), "html", null, true);
            echo "\"></i>";
        }
        // line 63
        echo "                                        ";
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "label", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "label", array())))) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "label", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")))) : ("")), "html", null, true);
        echo "
                                    </a>
                                ";
        
        $__internal_0dc80d989833dd6b081d798668ff1dfa7a9efdd46a7b50ea081524ab13a34690->leave($__internal_0dc80d989833dd6b081d798668ff1dfa7a9efdd46a7b50ea081524ab13a34690_prof);

    }

    // line 75
    public function block_main($context, array $blocks = array())
    {
        $__internal_04b200f6477e3437675dccdfa5210a04beebdba22ae8aff14550defdce814c17 = $this->env->getExtension("native_profiler");
        $__internal_04b200f6477e3437675dccdfa5210a04beebdba22ae8aff14550defdce814c17->enter($__internal_04b200f6477e3437675dccdfa5210a04beebdba22ae8aff14550defdce814c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 76
        echo "    ";
        $context["_list_item_actions"] = $this->env->getExtension('easyadmin_extension')->getActionsForItem("list", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
        // line 77
        echo "
    <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
        ";
        // line 81
        $this->displayBlock('table_head', $context, $blocks);
        // line 108
        echo "        </thead>

        <tbody>
        ";
        // line 111
        $this->displayBlock('table_body', $context, $blocks);
        // line 146
        echo "        </tbody>
    </table>
    </div>

    ";
        // line 150
        $this->displayBlock('paginator', $context, $blocks);
        // line 153
        echo "
    ";
        // line 154
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_04b200f6477e3437675dccdfa5210a04beebdba22ae8aff14550defdce814c17->leave($__internal_04b200f6477e3437675dccdfa5210a04beebdba22ae8aff14550defdce814c17_prof);

    }

    // line 81
    public function block_table_head($context, array $blocks = array())
    {
        $__internal_d87f41145b5e10deee1c56fa1e4bebc28101006d8445124f0beb09d78efb328a = $this->env->getExtension("native_profiler");
        $__internal_d87f41145b5e10deee1c56fa1e4bebc28101006d8445124f0beb09d78efb328a->enter($__internal_d87f41145b5e10deee1c56fa1e4bebc28101006d8445124f0beb09d78efb328a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        // line 82
        echo "            <tr>
                ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 84
            echo "                    ";
            $context["isSortingField"] = ($this->getAttribute($context["metadata"], "property", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField"), "method"));
            // line 85
            echo "                    ";
            $context["nextSortDirection"] = (((isset($context["isSortingField"]) ? $context["isSortingField"] : $this->getContext($context, "isSortingField"))) ? (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortDirection"), "method") == "DESC")) ? ("ASC") : ("DESC"))) : ("DESC"));
            // line 86
            echo "                    ";
            $context["_column_label"] = $this->env->getExtension('translator')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getExtension('form')->humanize($context["field"]))), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")));
            // line 87
            echo "                    ";
            $context["_column_icon"] = (((isset($context["isSortingField"]) ? $context["isSortingField"] : $this->getContext($context, "isSortingField"))) ? (((((isset($context["nextSortDirection"]) ? $context["nextSortDirection"] : $this->getContext($context, "nextSortDirection")) == "DESC")) ? ("fa-caret-up") : ("fa-caret-down"))) : ("fa-sort"));
            // line 88
            echo "
                    <th data-property-name=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "property", array()), "html", null, true);
            echo "\" class=\"";
            echo (((isset($context["isSortingField"]) ? $context["isSortingField"] : $this->getContext($context, "isSortingField"))) ? ("sorted") : (""));
            echo " ";
            echo (($this->getAttribute($context["metadata"], "virtual", array())) ? ("virtual") : (""));
            echo " ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["metadata"], "dataType", array())), "html", null, true);
            echo "\">
                        ";
            // line 90
            if ($this->getAttribute($context["metadata"], "sortable", array())) {
                // line 91
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("sortField" => $this->getAttribute($context["metadata"], "property", array()), "sortDirection" => (isset($context["nextSortDirection"]) ? $context["nextSortDirection"] : $this->getContext($context, "nextSortDirection"))))), "html", null, true);
                echo "\">
                                <i class=\"fa ";
                // line 92
                echo twig_escape_filter($this->env, (isset($context["_column_icon"]) ? $context["_column_icon"] : $this->getContext($context, "_column_icon")), "html", null, true);
                echo "\"></i>
                                ";
                // line 93
                echo (isset($context["_column_label"]) ? $context["_column_label"] : $this->getContext($context, "_column_label"));
                echo "
                            </a>
                        ";
            } else {
                // line 96
                echo "                            <span>";
                echo (isset($context["_column_label"]) ? $context["_column_label"] : $this->getContext($context, "_column_label"));
                echo "</span>
                        ";
            }
            // line 98
            echo "                    </th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "
                ";
        // line 101
        if ((twig_length_filter($this->env, (isset($context["_list_item_actions"]) ? $context["_list_item_actions"] : $this->getContext($context, "_list_item_actions"))) > 0)) {
            // line 102
            echo "                    <th>
                        <span>";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list.row_actions", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </th>
                ";
        }
        // line 106
        echo "            </tr>
        ";
        
        $__internal_d87f41145b5e10deee1c56fa1e4bebc28101006d8445124f0beb09d78efb328a->leave($__internal_d87f41145b5e10deee1c56fa1e4bebc28101006d8445124f0beb09d78efb328a_prof);

    }

    // line 111
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_b7fb493e2f58438f43d1ecf3af8e1c2652d026315db25962134755d784bf5577 = $this->env->getExtension("native_profiler");
        $__internal_b7fb493e2f58438f43d1ecf3af8e1c2652d026315db25962134755d784bf5577->enter($__internal_b7fb493e2f58438f43d1ecf3af8e1c2652d026315db25962134755d784bf5577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 112
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPageResults", array()));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 113
            echo "                ";
            $context["_item_id"] = $this->getAttribute($context["item"], $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
            // line 114
            echo "                <tr data-id=\"";
            echo twig_escape_filter($this->env, (isset($context["_item_id"]) ? $context["_item_id"] : $this->getContext($context, "_item_id")), "html", null, true);
            echo "\">
                    ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
            foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
                // line 116
                echo "                        ";
                $context["isSortingField"] = ($this->getAttribute($context["metadata"], "property", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField"), "method"));
                // line 117
                echo "                        ";
                $context["_column_label"] = $this->env->getExtension('translator')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getExtension('form')->humanize($context["field"]))), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")));
                // line 118
                echo "
                        <td data-label=\"";
                // line 119
                echo twig_escape_filter($this->env, (isset($context["_column_label"]) ? $context["_column_label"] : $this->getContext($context, "_column_label")), "html", null, true);
                echo "\" class=\"";
                echo (((isset($context["isSortingField"]) ? $context["isSortingField"] : $this->getContext($context, "isSortingField"))) ? ("sorted") : (""));
                echo " ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["metadata"], "dataType", array())), "html", null, true);
                echo "\">
                            ";
                // line 120
                echo $this->env->getExtension('easyadmin_extension')->renderEntityField($this->env, "list", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), $context["item"], $context["metadata"]);
                echo "
                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "
                    ";
            // line 124
            if ((twig_length_filter($this->env, (isset($context["_list_item_actions"]) ? $context["_list_item_actions"] : $this->getContext($context, "_list_item_actions"))) > 0)) {
                // line 125
                echo "                        ";
                $context["_column_label"] = $this->env->getExtension('translator')->trans("list.row_actions", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
                // line 126
                echo "                        <td data-label=\"";
                echo twig_escape_filter($this->env, (isset($context["_column_label"]) ? $context["_column_label"] : $this->getContext($context, "_column_label")), "html", null, true);
                echo "\" class=\"actions\">
                        ";
                // line 127
                $this->displayBlock('item_actions', $context, $blocks);
                // line 135
                echo "                        </td>
                    ";
            }
            // line 137
            echo "                </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 139
            echo "                <tr>
                    <td class=\"no-results\" colspan=\"";
            // line 140
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, (isset($context["_list_item_actions"]) ? $context["_list_item_actions"] : $this->getContext($context, "_list_item_actions"))) > 0)) ? ((twig_length_filter($this->env, (isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields"))) + 1)) : (twig_length_filter($this->env, (isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields"))))), "html", null, true);
            echo "\">
                        ";
            // line 141
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search.no_results", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle"), "html", null, true);
            echo "
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "        ";
        
        $__internal_b7fb493e2f58438f43d1ecf3af8e1c2652d026315db25962134755d784bf5577->leave($__internal_b7fb493e2f58438f43d1ecf3af8e1c2652d026315db25962134755d784bf5577_prof);

    }

    // line 127
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_03f3e54539162a54d31dae9e5bae006da71268efdba8cd4a81ab13751b50cf81 = $this->env->getExtension("native_profiler");
        $__internal_03f3e54539162a54d31dae9e5bae006da71268efdba8cd4a81ab13751b50cf81->enter($__internal_03f3e54539162a54d31dae9e5bae006da71268efdba8cd4a81ab13751b50cf81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 128
        echo "                            ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 129
(isset($context["_list_item_actions"]) ? $context["_list_item_actions"] : $this->getContext($context, "_list_item_actions")), "request_parameters" =>         // line 130
(isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "trans_parameters" =>         // line 131
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 132
(isset($context["_item_id"]) ? $context["_item_id"] : $this->getContext($context, "_item_id"))), false);
        // line 133
        echo "
                        ";
        
        $__internal_03f3e54539162a54d31dae9e5bae006da71268efdba8cd4a81ab13751b50cf81->leave($__internal_03f3e54539162a54d31dae9e5bae006da71268efdba8cd4a81ab13751b50cf81_prof);

    }

    // line 150
    public function block_paginator($context, array $blocks = array())
    {
        $__internal_120cd30fe423da45dd0c3cadc68fb17116f82b69524b284409269a1ca768340a = $this->env->getExtension("native_profiler");
        $__internal_120cd30fe423da45dd0c3cadc68fb17116f82b69524b284409269a1ca768340a->enter($__internal_120cd30fe423da45dd0c3cadc68fb17116f82b69524b284409269a1ca768340a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paginator"));

        // line 151
        echo "        ";
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "paginator", array()));
        echo "
    ";
        
        $__internal_120cd30fe423da45dd0c3cadc68fb17116f82b69524b284409269a1ca768340a->leave($__internal_120cd30fe423da45dd0c3cadc68fb17116f82b69524b284409269a1ca768340a_prof);

    }

    // line 154
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_e8aec294a7618d5a82a169393483c368ccc30b23a1e9c9523e4b2a719c0cbf5a = $this->env->getExtension("native_profiler");
        $__internal_e8aec294a7618d5a82a169393483c368ccc30b23a1e9c9523e4b2a719c0cbf5a->enter($__internal_e8aec294a7618d5a82a169393483c368ccc30b23a1e9c9523e4b2a719c0cbf5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 155
        echo "        ";
        $context["referer"] = ((((($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()) == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "nbPages", array())) && (1 != $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()))) && (1 == $this->getAttribute($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPageResults", array()), "count", array())))) ? ($this->env->getExtension('routing')->getPath("easyadmin", twig_array_merge($this->getAttribute($this->getAttribute(        // line 156
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), array("page" => ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "page"), "method") - 1))))) : ($this->getAttribute($this->getAttribute(        // line 157
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array())));
        // line 159
        echo "
        ";
        // line 160
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "list", "referer" => twig_urlencode_filter(        // line 162
(isset($context["referer"]) ? $context["referer"] : $this->getContext($context, "referer"))), "delete_form" =>         // line 163
(isset($context["delete_form_template"]) ? $context["delete_form_template"] : $this->getContext($context, "delete_form_template")), "_trans_parameters" =>         // line 164
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 165
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config"))), false);
        // line 166
        echo "
    ";
        
        $__internal_e8aec294a7618d5a82a169393483c368ccc30b23a1e9c9523e4b2a719c0cbf5a->leave($__internal_e8aec294a7618d5a82a169393483c368ccc30b23a1e9c9523e4b2a719c0cbf5a_prof);

    }

    // line 170
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_ca00fe6145d67b0fcc22f21856073efec0d9e10539d773ccc0c6df99a8bad554 = $this->env->getExtension("native_profiler");
        $__internal_ca00fe6145d67b0fcc22f21856073efec0d9e10539d773ccc0c6df99a8bad554->enter($__internal_ca00fe6145d67b0fcc22f21856073efec0d9e10539d773ccc0c6df99a8bad554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 171
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/javascript/bootstrap-toggle.min.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
        \$(function() {
            \$('#main table .toggle input[type=\"checkbox\"]').change(function() {
                var toggle = \$(this);
                var newValue = toggle.prop('checked');
                var oldValue = !newValue;

                var columnIndex = \$(this).closest('td').index() + 1;
                var propertyName = \$('table th.toggle:nth-child(' + columnIndex + ')').data('property-name');

                var toggleUrl = \"";
        // line 185
        echo $this->env->getExtension('routing')->getPath("easyadmin", array("action" => "edit", "entity" => $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), "view" => "list"));
        echo "\"
                              + \"&id=\" + \$(this).closest('tr').data('id')
                              + \"&property=\" + propertyName
                              + \"&newValue=\" + newValue.toString();

                var toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                toggleRequest.done(function(result) {});

                toggleRequest.fail(function(result) {
                    // in case of error, restore the original value and disable the toggle
                    toggle.bootstrapToggle(oldValue == true ? 'on' : 'off');
                    toggle.bootstrapToggle('disable');
                });
            });

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                var id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function (e) {
                        var deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 216
        if (("search" == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 217
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/javascript/jquery.highlight.min.js"), "html", null, true);
            echo "\"></script>

        <script type=\"text/javascript\">
            var _search_query = \"";
            // line 220
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "js"), "html", null, true);
            echo "\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main table tbody').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    ";
        }
        
        $__internal_ca00fe6145d67b0fcc22f21856073efec0d9e10539d773ccc0c6df99a8bad554->leave($__internal_ca00fe6145d67b0fcc22f21856073efec0d9e10539d773ccc0c6df99a8bad554_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  657 => 220,  650 => 217,  648 => 216,  614 => 185,  599 => 173,  593 => 171,  587 => 170,  579 => 166,  577 => 165,  576 => 164,  575 => 163,  574 => 162,  573 => 160,  570 => 159,  568 => 157,  567 => 156,  565 => 155,  559 => 154,  549 => 151,  543 => 150,  535 => 133,  533 => 132,  532 => 131,  531 => 130,  530 => 129,  528 => 128,  522 => 127,  515 => 145,  505 => 141,  501 => 140,  498 => 139,  484 => 137,  480 => 135,  478 => 127,  473 => 126,  470 => 125,  468 => 124,  465 => 123,  456 => 120,  448 => 119,  445 => 118,  442 => 117,  439 => 116,  435 => 115,  430 => 114,  427 => 113,  408 => 112,  402 => 111,  394 => 106,  388 => 103,  385 => 102,  383 => 101,  380 => 100,  373 => 98,  367 => 96,  361 => 93,  357 => 92,  352 => 91,  350 => 90,  340 => 89,  337 => 88,  334 => 87,  331 => 86,  328 => 85,  325 => 84,  321 => 83,  318 => 82,  312 => 81,  305 => 154,  302 => 153,  300 => 150,  294 => 146,  292 => 111,  287 => 108,  285 => 81,  279 => 77,  276 => 76,  270 => 75,  259 => 63,  253 => 62,  246 => 61,  240 => 60,  229 => 67,  226 => 66,  223 => 60,  220 => 59,  218 => 58,  212 => 55,  205 => 51,  200 => 49,  196 => 48,  192 => 47,  187 => 45,  182 => 44,  176 => 43,  168 => 72,  166 => 43,  163 => 42,  160 => 41,  157 => 40,  151 => 39,  139 => 37,  128 => 33,  125 => 32,  119 => 30,  116 => 29,  110 => 28,  101 => 25,  96 => 24,  90 => 23,  78 => 21,  66 => 20,  59 => 4,  57 => 18,  54 => 15,  52 => 14,  50 => 11,  49 => 10,  48 => 9,  47 => 8,  46 => 7,  45 => 6,  43 => 2,  41 => 1,  32 => 4,);
    }
}
/* {% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}*/
/* {% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}*/
/* */
/* {% extends _entity_config.templates.layout %}*/
/* */
/* {% set _request_parameters = _request_parameters|default({})|merge({*/
/*     action: app.request.get('action'),*/
/*     entity: _entity_config.name,*/
/*     sortField: app.request.get('sortField', ''),*/
/*     sortDirection: app.request.get('sortDirection', 'DESC'),*/
/*     page: app.request.get('page', 1)*/
/* }) %}*/
/* */
/* {% if 'search' == app.request.get('action') %}*/
/*     {% set _request_parameters = _request_parameters|merge({ query: app.request.get('query')|default('') }) %}*/
/* {% endif %}*/
/* */
/* {% set _request_parameters = _request_parameters|merge({ referer: path('easyadmin', _request_parameters)|url_encode }) %}*/
/* */
/* {% block body_id 'easyadmin-list-' ~ _entity_config.name %}*/
/* {% block body_class 'list list-' ~ _entity_config.name|lower %}*/
/* */
/* {% block head_stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/easyadmin/stylesheet/bootstrap-toggle.min.css') }}">*/
/* {% endblock %}*/
/* */
/* {% block page_title %}*/
/*     {% if 'search' == app.request.get('action') %}*/
/*         {{ 'search.page_title'|transchoice(count = paginator.nbResults, domain = 'EasyAdminBundle')|raw }}*/
/*     {% else %}*/
/*         {% set _default_title = 'list.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}*/
/*         {{ _entity_config.list.title|default(_default_title)|trans(_trans_parameters) }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content_title %}{{ block('page_title') }}{% endblock %}*/
/* */
/* {% block global_actions %}*/
/*     {% if easyadmin_action_is_enabled_for_list_view('search', _entity_config.name) %}*/
/*         {% set _action = easyadmin_get_action_for_list_view('search', _entity_config.name) %}*/
/* */
/*         {% block search_action %}*/
/*             <div class="{{ _action.css_class|default('action-search') }}">*/
/*                 <form method="get" action="{{ path('easyadmin') }}">*/
/*                     <input type="hidden" name="action" value="search">*/
/*                     <input type="hidden" name="entity" value="{{ _request_parameters.entity }}">*/
/*                     <input type="hidden" name="sortField" value="{{ _request_parameters.sortField }}">*/
/*                     <input type="hidden" name="sortDirection" value="{{ _request_parameters.sortDirection }}">*/
/*                     <div class="input-group">*/
/*                         <input class="form-control" type="search" name="query" value="{{ app.request.get('query')|default('') }}">*/
/*                         <span class="input-group-btn">*/
/*                             <button class="btn" type="submit">*/
/*                                 <i class="fa fa-search"></i>*/
/*                                 <span class="hidden-xs hidden-sm">{{ _action.label|default('action.search')|trans(_trans_parameters) }}</span>*/
/*                             </button>*/
/* */
/*                             {% if easyadmin_action_is_enabled_for_list_view('new', _entity_config.name) %}*/
/*                                 {% set _action = easyadmin_get_action_for_list_view('new', _entity_config.name) %}*/
/*                                 {% block new_action %}*/
/*                                     <a class="btn btn-primary {{ _action.css_class|default('') }}" href="{{ path('easyadmin', _request_parameters|merge({ action: _action.name })) }}">*/
/*                                         {% if _action.icon %}<i class="fa fa-{{ _action.icon }}"></i>{% endif %}*/
/*                                         {{ _action.label is defined and not _action.label is empty ? _action.label|trans(_trans_parameters) }}*/
/*                                     </a>*/
/*                                 {% endblock new_action %}*/
/*                             {% endif %}*/
/*                         </span>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         {% endblock search_action %}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block main %}*/
/*     {% set _list_item_actions = easyadmin_get_actions_for_list_item(_entity_config.name) %}*/
/* */
/*     <div class="table-responsive">*/
/*     <table class="table">*/
/*         <thead>*/
/*         {% block table_head %}*/
/*             <tr>*/
/*                 {% for field, metadata in fields %}*/
/*                     {% set isSortingField = metadata.property == app.request.get('sortField') %}*/
/*                     {% set nextSortDirection = isSortingField ? (app.request.get('sortDirection') == 'DESC' ? 'ASC' : 'DESC') : 'DESC' %}*/
/*                     {% set _column_label = (metadata.label ?: field|humanize)|trans(_trans_parameters) %}*/
/*                     {% set _column_icon = isSortingField ? (nextSortDirection == 'DESC' ? 'fa-caret-up' : 'fa-caret-down') : 'fa-sort' %}*/
/* */
/*                     <th data-property-name="{{ metadata.property }}" class="{{ isSortingField ? 'sorted' }} {{ metadata.virtual ? 'virtual' }} {{ metadata.dataType|lower }}">*/
/*                         {% if metadata.sortable %}*/
/*                             <a href="{{ path('easyadmin', _request_parameters|merge({ sortField: metadata.property, sortDirection: nextSortDirection })) }}">*/
/*                                 <i class="fa {{ _column_icon }}"></i>*/
/*                                 {{ _column_label|raw }}*/
/*                             </a>*/
/*                         {% else %}*/
/*                             <span>{{ _column_label|raw }}</span>*/
/*                         {% endif %}*/
/*                     </th>*/
/*                 {% endfor %}*/
/* */
/*                 {% if _list_item_actions|length > 0 %}*/
/*                     <th>*/
/*                         <span>{{ 'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') }}</span>*/
/*                     </th>*/
/*                 {% endif %}*/
/*             </tr>*/
/*         {% endblock table_head %}*/
/*         </thead>*/
/* */
/*         <tbody>*/
/*         {% block table_body %}*/
/*             {% for item in paginator.currentPageResults %}*/
/*                 {% set _item_id = attribute(item, _entity_config.primary_key_field_name) %}*/
/*                 <tr data-id="{{ _item_id }}">*/
/*                     {% for field, metadata in fields %}*/
/*                         {% set isSortingField = metadata.property == app.request.get('sortField') %}*/
/*                         {% set _column_label =  (metadata.label ?: field|humanize)|trans(_trans_parameters)  %}*/
/* */
/*                         <td data-label="{{ _column_label }}" class="{{ isSortingField ? 'sorted' }} {{ metadata.dataType|lower }}">*/
/*                             {{ easyadmin_render_field_for_list_view(_entity_config.name, item, metadata) }}*/
/*                         </td>*/
/*                     {% endfor %}*/
/* */
/*                     {% if _list_item_actions|length > 0 %}*/
/*                         {% set _column_label =  'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') %}*/
/*                         <td data-label="{{ _column_label }}" class="actions">*/
/*                         {% block item_actions %}*/
/*                             {{ include('@EasyAdmin/default/includes/_actions.html.twig', {*/
/*                                 actions: _list_item_actions,*/
/*                                 request_parameters: _request_parameters,*/
/*                                 trans_parameters: _trans_parameters,*/
/*                                 item_id: _item_id*/
/*                             }, with_context = false) }}*/
/*                         {% endblock item_actions %}*/
/*                         </td>*/
/*                     {% endif %}*/
/*                 </tr>*/
/*             {% else %}*/
/*                 <tr>*/
/*                     <td class="no-results" colspan="{{ _list_item_actions|length > 0 ? fields|length + 1 : fields|length }}">*/
/*                         {{ 'search.no_results'|trans(_trans_parameters, 'EasyAdminBundle') }}*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         {% endblock table_body %}*/
/*         </tbody>*/
/*     </table>*/
/*     </div>*/
/* */
/*     {% block paginator %}*/
/*         {{ include(_entity_config.templates.paginator) }}*/
/*     {% endblock paginator %}*/
/* */
/*     {% block delete_form %}*/
/*         {% set referer = paginator.currentPage == paginator.nbPages and 1 != paginator.currentPage and 1 == paginator.currentPageResults.count*/
/*             ? path('easyadmin', app.request.query|merge({ page: app.request.query.get('page') - 1 }))*/
/*             : app.request.requestUri*/
/*         %}*/
/* */
/*         {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {*/
/*             view: 'list',*/
/*             referer: referer|url_encode,*/
/*             delete_form: delete_form_template,*/
/*             _trans_parameters: _trans_parameters,*/
/*             _entity_config: _entity_config,*/
/*         }, with_context = false) }}*/
/*     {% endblock delete_form %}*/
/* {% endblock main %}*/
/* */
/* {% block body_javascript %}*/
/*     {{ parent() }}*/
/* */
/*     <script src="{{ asset('bundles/easyadmin/javascript/bootstrap-toggle.min.js') }}"></script>*/
/* */
/*     <script type="text/javascript">*/
/*         $(function() {*/
/*             $('#main table .toggle input[type="checkbox"]').change(function() {*/
/*                 var toggle = $(this);*/
/*                 var newValue = toggle.prop('checked');*/
/*                 var oldValue = !newValue;*/
/* */
/*                 var columnIndex = $(this).closest('td').index() + 1;*/
/*                 var propertyName = $('table th.toggle:nth-child(' + columnIndex + ')').data('property-name');*/
/* */
/*                 var toggleUrl = "{{ path('easyadmin', { action: 'edit', entity: _entity_config.name, view: 'list' })|raw }}"*/
/*                               + "&id=" + $(this).closest('tr').data('id')*/
/*                               + "&property=" + propertyName*/
/*                               + "&newValue=" + newValue.toString();*/
/* */
/*                 var toggleRequest = $.ajax({ type: "GET", url: toggleUrl, data: {} });*/
/* */
/*                 toggleRequest.done(function(result) {});*/
/* */
/*                 toggleRequest.fail(function(result) {*/
/*                     // in case of error, restore the original value and disable the toggle*/
/*                     toggle.bootstrapToggle(oldValue == true ? 'on' : 'off');*/
/*                     toggle.bootstrapToggle('disable');*/
/*                 });*/
/*             });*/
/* */
/*             $('.action-delete').on('click', function(e) {*/
/*                 e.preventDefault();*/
/*                 var id = $(this).parents('tr').first().data('id');*/
/* */
/*                 $('#modal-delete').modal({ backdrop: true, keyboard: true })*/
/*                     .off('click', '#modal-delete-button')*/
/*                     .on('click', '#modal-delete-button', function (e) {*/
/*                         var deleteForm = $('#delete-form');*/
/*                         deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));*/
/*                         deleteForm.trigger('submit');*/
/*                     });*/
/*             });*/
/*         });*/
/*     </script>*/
/* */
/*     {% if 'search' == app.request.get('action') %}*/
/*         <script src="{{ asset('bundles/easyadmin/javascript/jquery.highlight.min.js') }}"></script>*/
/* */
/*         <script type="text/javascript">*/
/*             var _search_query = "{{ app.request.get('query')|default('')|e('js') }}";*/
/*             // the original query is prepended to allow matching exact phrases in addition to single words*/
/*             $('#main table tbody').highlight($.merge([_search_query], _search_query.split(' ')));*/
/*         </script>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
