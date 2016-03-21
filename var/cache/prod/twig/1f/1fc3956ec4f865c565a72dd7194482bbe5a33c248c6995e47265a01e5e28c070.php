<?php

/* EasyAdminBundle:data_collector:easyadmin.html.twig */
class __TwigTemplate_7b55db6e6aeaba03b21aef56468fc884ca860eae838c1885dd4f8859da06956f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "EasyAdminBundle:data_collector:easyadmin.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : null), 1)) : (1));
        // line 5
        echo "
    ";
        // line 6
        ob_start();
        // line 7
        echo "        ";
        $context["icon_fill_color"] = ((((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : null) == 1)) ? ("#222") : ("#AAA"));
        // line 8
        echo "        ";
        $context["icon_height"] = ((((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : null) == 1)) ? ("28") : ("24"));
        // line 9
        echo "        <span class=\"icon\">";
        echo twig_include($this->env, $context, "@EasyAdmin/data_collector/icon.svg.twig", array("fill_color" => (isset($context["icon_fill_color"]) ? $context["icon_fill_color"] : null), "height" => (isset($context["icon_height"]) ? $context["icon_height"] : null)));
        echo "</span>
        <span class=\"sf-toolbar-value sf-toolbar-status\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "numEntities", array()), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 12
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "    <div class=\"sf-toolbar-info-piece\">
        <b>EasyAdmin</b>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Managed entities</b>
        <span>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "numEntities", array()), "html", null, true);
        echo "</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 22
        echo "
    ";
        // line 23
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => true));
        echo "
";
    }

    // line 27
    public function block_menu($context, array $blocks = array())
    {
        // line 28
        echo "    <span class=\"label status-";
        echo (( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestParameters", array())) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 29
        echo twig_include($this->env, $context, "@EasyAdmin/data_collector/icon.svg.twig", array("height" => 32));
        echo "</span>
        <strong>EasyAdmin</strong>
    </span>
";
    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : null), 1)) : (1));
        // line 36
        echo "
    <h2>EasyAdmin</h2>

    ";
        // line 39
        if (((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : null) == 1)) {
            // line 40
            echo "
        <h3>Request Parameters</h3>
        ";
            // line 42
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestParameters", array())));
            echo "

    ";
        } else {
            // line 45
            echo "
        ";
            // line 46
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestParameters", array())) {
                // line 47
                echo "        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestParameters", array()), "action", array()), "html", null, true);
                echo "</span>
                <span class=\"label\">Action</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestParameters", array()), "entity", array()), "html", null, true);
                echo "</span>
                <span class=\"label\">Entity Name</span>
            </div>

            ";
                // line 58
                if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestParameters", array()), "id", array())) {
                    // line 59
                    echo "                <div class=\"metric\">
                    <span class=\"value\">";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestParameters", array()), "id", array()), "html", null, true);
                    echo "</span>
                    <span class=\"label\">ID</span>
                </div>
            ";
                } else {
                    // line 64
                    echo "                <div class=\"metric\">
                    <span class=\"value\">";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestParameters", array()), "sort_field", array()), "html", null, true);
                    echo " <span class=\"unit\">(";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestParameters", array()), "sort_direction", array()), "html", null, true);
                    echo ")</span></span>
                    <span class=\"label\">Sorting</span>
                </div>
            ";
                }
                // line 69
                echo "        </div>
        ";
            }
            // line 71
            echo "
    ";
        }
        // line 73
        echo "
    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Current Entity Configuration</h3>
            <div class=\"tab-content\">
                ";
        // line 78
        echo $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "dump", array(0 => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "currentEntityConfiguration", array())), "method");
        echo "
            </div>

            <br>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Full Backend Configuration</h3>
            <div class=\"tab-content\">

                <h4>Basic Configuration</h4>
                ";
        // line 89
        echo $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "dump", array(0 => array("site_name" => $this->getAttribute($this->getAttribute(        // line 90
(isset($context["collector"]) ? $context["collector"] : null), "backendConfiguration", array()), "site_name", array(), "array"), "formats" => $this->getAttribute($this->getAttribute(        // line 91
(isset($context["collector"]) ? $context["collector"] : null), "backendConfiguration", array()), "formats", array(), "array"))), "method");
        // line 92
        echo "

                <h4>Design Configuration</h4>
                ";
        // line 95
        echo $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "dump", array(0 => array("design" => $this->getAttribute($this->getAttribute(        // line 96
(isset($context["collector"]) ? $context["collector"] : null), "backendConfiguration", array()), "design", array(), "array"))), "method");
        // line 97
        echo "

                <h4>Actions Configuration</h4>
                ";
        // line 100
        echo $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "dump", array(0 => array("disabled_actions" => $this->getAttribute($this->getAttribute(        // line 101
(isset($context["collector"]) ? $context["collector"] : null), "backendConfiguration", array()), "disabled_actions", array(), "array"), "list" => $this->getAttribute($this->getAttribute(        // line 102
(isset($context["collector"]) ? $context["collector"] : null), "backendConfiguration", array()), "list", array(), "array"), "edit" => $this->getAttribute($this->getAttribute(        // line 103
(isset($context["collector"]) ? $context["collector"] : null), "backendConfiguration", array()), "edit", array(), "array"), "new" => $this->getAttribute($this->getAttribute(        // line 104
(isset($context["collector"]) ? $context["collector"] : null), "backendConfiguration", array()), "new", array(), "array"), "show" => $this->getAttribute($this->getAttribute(        // line 105
(isset($context["collector"]) ? $context["collector"] : null), "backendConfiguration", array()), "show", array(), "array"))), "method");
        // line 106
        echo "

                <h4>Entities Configuration</h4>
                ";
        // line 109
        echo $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "dump", array(0 => array("entities" => $this->getAttribute($this->getAttribute(        // line 110
(isset($context["collector"]) ? $context["collector"] : null), "backendConfiguration", array()), "entities", array(), "array"))), "method");
        // line 111
        echo "

                <h4>Full Backend Configuration</h4>
                ";
        // line 114
        echo $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "dump", array(0 => array("easy_admin" => $this->getAttribute(        // line 115
(isset($context["collector"]) ? $context["collector"] : null), "backendConfiguration", array()))), "method");
        // line 116
        echo "
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:data_collector:easyadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 116,  238 => 115,  237 => 114,  232 => 111,  230 => 110,  229 => 109,  224 => 106,  222 => 105,  221 => 104,  220 => 103,  219 => 102,  218 => 101,  217 => 100,  212 => 97,  210 => 96,  209 => 95,  204 => 92,  202 => 91,  201 => 90,  200 => 89,  186 => 78,  179 => 73,  175 => 71,  171 => 69,  162 => 65,  159 => 64,  152 => 60,  149 => 59,  147 => 58,  140 => 54,  132 => 49,  128 => 47,  126 => 46,  123 => 45,  117 => 42,  113 => 40,  111 => 39,  106 => 36,  103 => 35,  100 => 34,  92 => 29,  87 => 28,  84 => 27,  78 => 23,  75 => 22,  69 => 19,  62 => 14,  60 => 13,  57 => 12,  52 => 10,  47 => 9,  44 => 8,  41 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/*     {% set profiler_markup_version = profiler_markup_version|default(1) %}*/
/* */
/*     {% set icon %}*/
/*         {% set icon_fill_color = profiler_markup_version == 1 ? '#222' : '#AAA' %}*/
/*         {% set icon_height = profiler_markup_version == 1 ? '28' : '24' %}*/
/*         <span class="icon">{{ include('@EasyAdmin/data_collector/icon.svg.twig', { fill_color: icon_fill_color, height: icon_height }) }}</span>*/
/*         <span class="sf-toolbar-value sf-toolbar-status">{{ collector.numEntities }}</span>*/
/*     {% endset %}*/
/* */
/*     {% set text %}*/
/*     <div class="sf-toolbar-info-piece">*/
/*         <b>EasyAdmin</b>*/
/*     </div>*/
/*     <div class="sf-toolbar-info-piece">*/
/*         <b>Managed entities</b>*/
/*         <span>{{ collector.numEntities }}</span>*/
/*     </div>*/
/*     {% endset %}*/
/* */
/*     {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': true }) }}*/
/* {% endblock %}*/
/* */
/* */
/* {% block menu %}*/
/*     <span class="label status-{{ not collector.requestParameters ? 'disabled' }}">*/
/*         <span class="icon">{{ include('@EasyAdmin/data_collector/icon.svg.twig', { height: 32 }) }}</span>*/
/*         <strong>EasyAdmin</strong>*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {% set profiler_markup_version = profiler_markup_version|default(1) %}*/
/* */
/*     <h2>EasyAdmin</h2>*/
/* */
/*     {% if profiler_markup_version == 1 %}*/
/* */
/*         <h3>Request Parameters</h3>*/
/*         {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.requestParameters }) }}*/
/* */
/*     {% else %}*/
/* */
/*         {% if collector.requestParameters %}*/
/*         <div class="metrics">*/
/*             <div class="metric">*/
/*                 <span class="value">{{ collector.requestParameters.action }}</span>*/
/*                 <span class="label">Action</span>*/
/*             </div>*/
/* */
/*             <div class="metric">*/
/*                 <span class="value">{{ collector.requestParameters.entity }}</span>*/
/*                 <span class="label">Entity Name</span>*/
/*             </div>*/
/* */
/*             {% if collector.requestParameters.id %}*/
/*                 <div class="metric">*/
/*                     <span class="value">{{ collector.requestParameters.id }}</span>*/
/*                     <span class="label">ID</span>*/
/*                 </div>*/
/*             {% else %}*/
/*                 <div class="metric">*/
/*                     <span class="value">{{ collector.requestParameters.sort_field }} <span class="unit">({{ collector.requestParameters.sort_direction }})</span></span>*/
/*                     <span class="label">Sorting</span>*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*     {% endif %}*/
/* */
/*     <div class="sf-tabs">*/
/*         <div class="tab">*/
/*             <h3 class="tab-title">Current Entity Configuration</h3>*/
/*             <div class="tab-content">*/
/*                 {{ collector.dump(collector.currentEntityConfiguration)|raw }}*/
/*             </div>*/
/* */
/*             <br>*/
/*         </div>*/
/* */
/*         <div class="tab">*/
/*             <h3 class="tab-title">Full Backend Configuration</h3>*/
/*             <div class="tab-content">*/
/* */
/*                 <h4>Basic Configuration</h4>*/
/*                 {{ collector.dump({*/
/*                     'site_name': collector.backendConfiguration['site_name'],*/
/*                     'formats': collector.backendConfiguration['formats']*/
/*                 })|raw }}*/
/* */
/*                 <h4>Design Configuration</h4>*/
/*                 {{ collector.dump({*/
/*                     'design': collector.backendConfiguration['design']*/
/*                 })|raw }}*/
/* */
/*                 <h4>Actions Configuration</h4>*/
/*                 {{ collector.dump({*/
/*                     'disabled_actions': collector.backendConfiguration['disabled_actions'],*/
/*                     'list': collector.backendConfiguration['list'],*/
/*                     'edit': collector.backendConfiguration['edit'],*/
/*                     'new': collector.backendConfiguration['new'],*/
/*                     'show': collector.backendConfiguration['show'],*/
/*                 })|raw }}*/
/* */
/*                 <h4>Entities Configuration</h4>*/
/*                 {{ collector.dump({*/
/*                     'entities': collector.backendConfiguration['entities']*/
/*                 })|raw }}*/
/* */
/*                 <h4>Full Backend Configuration</h4>*/
/*                 {{ collector.dump({*/
/*                     'easy_admin': collector.backendConfiguration*/
/*                 })|raw }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
