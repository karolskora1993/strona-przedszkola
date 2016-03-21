<?php

/* @EasyAdmin/data_collector/easyadmin.html.twig */
class __TwigTemplate_6be5b4636a6299a17a176705e6d954f1dd20d8e5530dabc37f7f1a374994c67d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@EasyAdmin/data_collector/easyadmin.html.twig", 1);
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
        $__internal_1ce667a230288a107d74828d23b6b00d16477cdef7b1dc11dc2d5be1b9fe2191 = $this->env->getExtension("native_profiler");
        $__internal_1ce667a230288a107d74828d23b6b00d16477cdef7b1dc11dc2d5be1b9fe2191->enter($__internal_1ce667a230288a107d74828d23b6b00d16477cdef7b1dc11dc2d5be1b9fe2191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/data_collector/easyadmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ce667a230288a107d74828d23b6b00d16477cdef7b1dc11dc2d5be1b9fe2191->leave($__internal_1ce667a230288a107d74828d23b6b00d16477cdef7b1dc11dc2d5be1b9fe2191_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_798e0b6f5fa85afe02642ec8d1e648242c14b2eb729c1e6bff718f9ba5a70e21 = $this->env->getExtension("native_profiler");
        $__internal_798e0b6f5fa85afe02642ec8d1e648242c14b2eb729c1e6bff718f9ba5a70e21->enter($__internal_798e0b6f5fa85afe02642ec8d1e648242c14b2eb729c1e6bff718f9ba5a70e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 5
        echo "
    ";
        // line 6
        ob_start();
        // line 7
        echo "        ";
        $context["icon_fill_color"] = ((((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")) == 1)) ? ("#222") : ("#AAA"));
        // line 8
        echo "        ";
        $context["icon_height"] = ((((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")) == 1)) ? ("28") : ("24"));
        // line 9
        echo "        <span class=\"icon\">";
        echo twig_include($this->env, $context, "@EasyAdmin/data_collector/icon.svg.twig", array("fill_color" => (isset($context["icon_fill_color"]) ? $context["icon_fill_color"] : $this->getContext($context, "icon_fill_color")), "height" => (isset($context["icon_height"]) ? $context["icon_height"] : $this->getContext($context, "icon_height"))));
        echo "</span>
        <span class=\"sf-toolbar-value sf-toolbar-status\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "numEntities", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "numEntities", array()), "html", null, true);
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
        
        $__internal_798e0b6f5fa85afe02642ec8d1e648242c14b2eb729c1e6bff718f9ba5a70e21->leave($__internal_798e0b6f5fa85afe02642ec8d1e648242c14b2eb729c1e6bff718f9ba5a70e21_prof);

    }

    // line 27
    public function block_menu($context, array $blocks = array())
    {
        $__internal_396fc2e9969f323b223cbf01dd23bbc538e2528b62d6089aef1a7312f839d40c = $this->env->getExtension("native_profiler");
        $__internal_396fc2e9969f323b223cbf01dd23bbc538e2528b62d6089aef1a7312f839d40c->enter($__internal_396fc2e9969f323b223cbf01dd23bbc538e2528b62d6089aef1a7312f839d40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 28
        echo "    <span class=\"label status-";
        echo (( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestParameters", array())) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 29
        echo twig_include($this->env, $context, "@EasyAdmin/data_collector/icon.svg.twig", array("height" => 32));
        echo "</span>
        <strong>EasyAdmin</strong>
    </span>
";
        
        $__internal_396fc2e9969f323b223cbf01dd23bbc538e2528b62d6089aef1a7312f839d40c->leave($__internal_396fc2e9969f323b223cbf01dd23bbc538e2528b62d6089aef1a7312f839d40c_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8ea8cf52d206f4dbcd3429c07e8024cca6acf0b6e8bffbea057235a1a985d846 = $this->env->getExtension("native_profiler");
        $__internal_8ea8cf52d206f4dbcd3429c07e8024cca6acf0b6e8bffbea057235a1a985d846->enter($__internal_8ea8cf52d206f4dbcd3429c07e8024cca6acf0b6e8bffbea057235a1a985d846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 36
        echo "
    <h2>EasyAdmin</h2>

    ";
        // line 39
        if (((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 40
            echo "
        <h3>Request Parameters</h3>
        ";
            // line 42
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestParameters", array())));
            echo "

    ";
        } else {
            // line 45
            echo "
        ";
            // line 46
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestParameters", array())) {
                // line 47
                echo "        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestParameters", array()), "action", array()), "html", null, true);
                echo "</span>
                <span class=\"label\">Action</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestParameters", array()), "entity", array()), "html", null, true);
                echo "</span>
                <span class=\"label\">Entity Name</span>
            </div>

            ";
                // line 58
                if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestParameters", array()), "id", array())) {
                    // line 59
                    echo "                <div class=\"metric\">
                    <span class=\"value\">";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestParameters", array()), "id", array()), "html", null, true);
                    echo "</span>
                    <span class=\"label\">ID</span>
                </div>
            ";
                } else {
                    // line 64
                    echo "                <div class=\"metric\">
                    <span class=\"value\">";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestParameters", array()), "sort_field", array()), "html", null, true);
                    echo " <span class=\"unit\">(";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestParameters", array()), "sort_direction", array()), "html", null, true);
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
        echo $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "dump", array(0 => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "currentEntityConfiguration", array())), "method");
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
        echo $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "dump", array(0 => array("site_name" => $this->getAttribute($this->getAttribute(        // line 90
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "backendConfiguration", array()), "site_name", array(), "array"), "formats" => $this->getAttribute($this->getAttribute(        // line 91
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "backendConfiguration", array()), "formats", array(), "array"))), "method");
        // line 92
        echo "

                <h4>Design Configuration</h4>
                ";
        // line 95
        echo $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "dump", array(0 => array("design" => $this->getAttribute($this->getAttribute(        // line 96
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "backendConfiguration", array()), "design", array(), "array"))), "method");
        // line 97
        echo "

                <h4>Actions Configuration</h4>
                ";
        // line 100
        echo $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "dump", array(0 => array("disabled_actions" => $this->getAttribute($this->getAttribute(        // line 101
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "backendConfiguration", array()), "disabled_actions", array(), "array"), "list" => $this->getAttribute($this->getAttribute(        // line 102
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "backendConfiguration", array()), "list", array(), "array"), "edit" => $this->getAttribute($this->getAttribute(        // line 103
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "backendConfiguration", array()), "edit", array(), "array"), "new" => $this->getAttribute($this->getAttribute(        // line 104
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "backendConfiguration", array()), "new", array(), "array"), "show" => $this->getAttribute($this->getAttribute(        // line 105
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "backendConfiguration", array()), "show", array(), "array"))), "method");
        // line 106
        echo "

                <h4>Entities Configuration</h4>
                ";
        // line 109
        echo $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "dump", array(0 => array("entities" => $this->getAttribute($this->getAttribute(        // line 110
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "backendConfiguration", array()), "entities", array(), "array"))), "method");
        // line 111
        echo "

                <h4>Full Backend Configuration</h4>
                ";
        // line 114
        echo $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "dump", array(0 => array("easy_admin" => $this->getAttribute(        // line 115
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "backendConfiguration", array()))), "method");
        // line 116
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_8ea8cf52d206f4dbcd3429c07e8024cca6acf0b6e8bffbea057235a1a985d846->leave($__internal_8ea8cf52d206f4dbcd3429c07e8024cca6acf0b6e8bffbea057235a1a985d846_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/data_collector/easyadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 116,  259 => 115,  258 => 114,  253 => 111,  251 => 110,  250 => 109,  245 => 106,  243 => 105,  242 => 104,  241 => 103,  240 => 102,  239 => 101,  238 => 100,  233 => 97,  231 => 96,  230 => 95,  225 => 92,  223 => 91,  222 => 90,  221 => 89,  207 => 78,  200 => 73,  196 => 71,  192 => 69,  183 => 65,  180 => 64,  173 => 60,  170 => 59,  168 => 58,  161 => 54,  153 => 49,  149 => 47,  147 => 46,  144 => 45,  138 => 42,  134 => 40,  132 => 39,  127 => 36,  124 => 35,  118 => 34,  107 => 29,  102 => 28,  96 => 27,  87 => 23,  84 => 22,  78 => 19,  71 => 14,  69 => 13,  66 => 12,  61 => 10,  56 => 9,  53 => 8,  50 => 7,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
