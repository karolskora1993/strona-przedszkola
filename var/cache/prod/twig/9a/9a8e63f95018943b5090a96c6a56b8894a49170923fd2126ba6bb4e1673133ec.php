<?php

/* @EasyAdmin/form/bootstrap_3_layout.html.twig */
class __TwigTemplate_fe3cf9eda93114727b957a5fd84f000bcbaf5d22c9d8c41a2dd99e84c5ee4096 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "@EasyAdmin/form/bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_widget' => array($this, 'block_form_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'collection_row' => array($this, 'block_collection_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'vich_file_widget' => array($this, 'block_vich_file_widget'),
                'vich_image_widget' => array($this, 'block_vich_image_widget'),
                'easyadmin_widget' => array($this, 'block_easyadmin_widget'),
                'item_actions' => array($this, 'block_item_actions'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('form_start', $context, $blocks);
        // line 16
        echo "
";
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_widget', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 47
        echo "
";
        // line 48
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('button_widget', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('money_widget', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 77
        echo "
";
        // line 78
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 91
        echo "
";
        // line 92
        $this->displayBlock('date_widget', $context, $blocks);
        // line 110
        echo "
";
        // line 111
        $this->displayBlock('time_widget', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 130
        echo "
";
        // line 131
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 150
        echo "
";
        // line 151
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 161
        echo "
";
        // line 162
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 172
        echo "
";
        // line 174
        echo "
";
        // line 175
        $this->displayBlock('form_label', $context, $blocks);
        // line 179
        echo "
";
        // line 180
        $this->displayBlock('choice_label', $context, $blocks);
        // line 185
        echo "
";
        // line 186
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 189
        echo "
";
        // line 190
        $this->displayBlock('radio_label', $context, $blocks);
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 212
        echo "
";
        // line 214
        echo "
";
        // line 215
        $this->displayBlock('form_row', $context, $blocks);
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('collection_row', $context, $blocks);
        // line 273
        echo "
";
        // line 274
        $this->displayBlock('button_row', $context, $blocks);
        // line 279
        echo "
";
        // line 280
        $this->displayBlock('choice_row', $context, $blocks);
        // line 284
        echo "
";
        // line 285
        $this->displayBlock('date_row', $context, $blocks);
        // line 289
        echo "
";
        // line 290
        $this->displayBlock('time_row', $context, $blocks);
        // line 294
        echo "
";
        // line 295
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 299
        echo "
";
        // line 300
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 306
        echo "
";
        // line 307
        $this->displayBlock('radio_row', $context, $blocks);
        // line 313
        echo "
";
        // line 315
        $this->displayBlock('form_errors', $context, $blocks);
        // line 333
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 343
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 364
        echo "
";
        // line 365
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 387
        echo "
";
        // line 389
        $this->displayBlock('easyadmin_widget', $context, $blocks);
    }

    // line 4
    public function block_form_start($context, array $blocks = array())
    {
        // line 5
        if (("easyadmin" == twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : null),  -2)))) {
            // line 6
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => ((((($this->getAttribute(            // line 7
(isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " ") . $this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "view", array())) . "-form"), "data-view" => $this->getAttribute(            // line 8
(isset($context["easyadmin"]) ? $context["easyadmin"] : null), "view", array()), "data-entity" => $this->getAttribute($this->getAttribute(            // line 9
(isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", array()), "name", array()), "data-entity-id" => $this->getAttribute(            // line 10
(isset($context["value"]) ? $context["value"] : null), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", array()), "primary_key_field_name", array()))));
            // line 12
            echo "    ";
        }
        // line 14
        $this->displayParentBlock("form_start", $context, $blocks);
    }

    // line 19
    public function block_form_widget($context, array $blocks = array())
    {
        // line 20
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 22
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 23
            echo "        ";
            ob_start();
            // line 24
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "').parents('.form-group:first');
            containerDiv.remove();
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 31
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 33
            echo (isset($context["remove_item_javascript"]) ? $context["remove_item_javascript"] : null);
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
    }

    // line 41
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 42
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : null), array(0 => "file", 1 => "hidden")))) {
            // line 43
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 45
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 48
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 49
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 50
        $this->displayParentBlock("textarea_widget", $context, $blocks);
    }

    // line 53
    public function block_button_widget($context, array $blocks = array())
    {
        // line 54
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 55
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 58
    public function block_money_widget($context, array $blocks = array())
    {
        // line 59
        echo "<div class=\"input-group\">
        ";
        // line 60
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : null), 0, 2));
        // line 61
        echo "        ";
        if ( !(isset($context["prepend"]) ? $context["prepend"] : null)) {
            // line 62
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : null), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 64
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 65
        if ((isset($context["prepend"]) ? $context["prepend"] : null)) {
            // line 66
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : null), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 68
        echo "    </div>";
    }

    // line 71
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 72
        echo "<div class=\"input-group\">";
        // line 73
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 74
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
    }

    // line 78
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 79
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 80
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 82
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 83
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 84
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'errors');
            // line 85
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", array()), 'errors');
            // line 86
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'widget', array("datetime" => true));
            // line 87
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", array()), 'widget', array("datetime" => true));
            // line 88
            echo "</div>";
        }
    }

    // line 92
    public function block_date_widget($context, array $blocks = array())
    {
        // line 93
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 94
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 96
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 97
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : null))) {
                // line 98
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 100
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : null), array("{{ year }}" =>             // line 101
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "year", array()), 'widget'), "{{ month }}" =>             // line 102
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "month", array()), 'widget'), "{{ day }}" =>             // line 103
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "day", array()), 'widget')));
            // line 105
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : null))) {
                // line 106
                echo "</div>";
            }
        }
    }

    // line 111
    public function block_time_widget($context, array $blocks = array())
    {
        // line 112
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 113
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 115
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 116
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : null)))) {
                // line 117
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 119
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "minute", array()), 'widget');
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : null)) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "second", array()), 'widget');
            }
            // line 120
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : null)))) {
                // line 121
                echo "</div>";
            }
        }
    }

    // line 126
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 127
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 128
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
    }

    // line 131
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 132
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 133
            echo "<div class=\"control-group\">";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 135
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 136
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "</div>";
        } else {
            // line 141
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 143
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 144
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "</div>";
        }
    }

    // line 151
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 152
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : null), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 153
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : null))) {
            // line 154
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 156
            echo "<div class=\"checkbox\">";
            // line 157
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 158
            echo "</div>";
        }
    }

    // line 162
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 163
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : null), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 164
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : null))) {
            // line 165
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 167
            echo "<div class=\"radio\">";
            // line 168
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 169
            echo "</div>";
        }
    }

    // line 175
    public function block_form_label($context, array $blocks = array())
    {
        // line 176
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 177
        $this->displayParentBlock("form_label", $context, $blocks);
    }

    // line 180
    public function block_choice_label($context, array $blocks = array())
    {
        // line 182
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 183
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 186
    public function block_checkbox_label($context, array $blocks = array())
    {
        // line 187
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 190
    public function block_radio_label($context, array $blocks = array())
    {
        // line 191
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 194
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        // line 195
        echo "    ";
        // line 196
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 197
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 198
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 199
                echo "        ";
            }
            // line 200
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 201
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : null)))));
                // line 202
                echo "        ";
            }
            // line 203
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : null) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : null)))) {
                // line 204
                echo "            ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null));
                // line 205
                echo "        ";
            }
            // line 206
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 207
            echo (isset($context["widget"]) ? $context["widget"] : null);
            // line 208
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : null) === false)) ? ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null))) : ("")), "html", null, true);
            // line 209
            echo "</label>
    ";
        }
    }

    // line 215
    public function block_form_row($context, array $blocks = array())
    {
        // line 216
        $context["_field_type"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 217
        echo "    <div class=\"form-group ";
        if ((( !(isset($context["compound"]) ? $context["compound"] : null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : null), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : null))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : null),  -2)), "html", null, true);
        echo "\">

        ";
        // line 219
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", array()), "name", array()), array(), "EasyAdminBundle"), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", array()), "label", array()), array(), "EasyAdminBundle"));
        // line 220
        echo "        ";
        $context["_field_label"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "array"), null)) : (null));
        // line 222
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans((isset($context["_field_label"]) ? $context["_field_label"] : null), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : null), "EasyAdminBundle")) ? array() : array("label" => $_label_)));
        // line 223
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 225
        if ((twig_in_filter((isset($context["_field_type"]) ? $context["_field_type"] : null), array(0 => "datetime", 1 => "datetimetz", 2 => "date", 3 => "time")) && (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 226
            echo "            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" ";
            // line 228
            if ((null === (isset($context["data"]) ? $context["data"] : null))) {
                echo "checked=\"checked\"";
            }
            echo ">
                    ";
            // line 229
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                </label>
            </div>
        ";
        }
        // line 234
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        // line 236
        if (((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 237
            echo "            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array()), "help", array()), array(), "EasyAdminBundle");
            echo "</span>
        ";
        }
        // line 239
        echo "    </div>";
    }

    // line 242
    public function block_collection_row($context, array $blocks = array())
    {
        // line 243
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 245
        if (((array_key_exists("allow_add", $context)) ? (_twig_default_filter((isset($context["allow_add"]) ? $context["allow_add"] : null), false)) : (false))) {
            // line 246
            echo "        ";
            ob_start();
            // line 247
            echo "            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#";
            // line 250
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "');
                var numItems = collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_";
            // line 257
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "___name__/g, '_";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "_' + numItems)
                    .replace(/";
            // line 258
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\\]\\[__name__\\]/g, '";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "][' + numItems + ']')
                ;

                collection.append(newItem);
            });
        ";
            $context["js_add_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 264
            echo "
        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"";
            // line 266
            echo (isset($context["js_add_item"]) ? $context["js_add_item"] : null);
            echo "\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                ";
            // line 268
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((((twig_length_filter($this->env, (isset($context["form"]) ? $context["form"] : null)) == 0)) ? ("action.add_new_item") : ("action.add_another_item")), array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
    }

    // line 274
    public function block_button_row($context, array $blocks = array())
    {
        // line 275
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : null),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">";
        // line 276
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 277
        echo "</div>";
    }

    // line 280
    public function block_choice_row($context, array $blocks = array())
    {
        // line 281
        $context["force_error"] = true;
        // line 282
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 285
    public function block_date_row($context, array $blocks = array())
    {
        // line 286
        $context["force_error"] = true;
        // line 287
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 290
    public function block_time_row($context, array $blocks = array())
    {
        // line 291
        $context["force_error"] = true;
        // line 292
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 295
    public function block_datetime_row($context, array $blocks = array())
    {
        // line 296
        $context["force_error"] = true;
        // line 297
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 300
    public function block_checkbox_row($context, array $blocks = array())
    {
        // line 301
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : null)) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : null),  -2)), "html", null, true);
        echo "\">";
        // line 302
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 303
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        // line 304
        echo "</div>";
    }

    // line 307
    public function block_radio_row($context, array $blocks = array())
    {
        // line 308
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : null)) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : null),  -2)), "html", null, true);
        echo "\">";
        // line 309
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 310
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        // line 311
        echo "</div>";
    }

    // line 315
    public function block_form_errors($context, array $blocks = array())
    {
        // line 316
        echo "    ";
        $context["error_count"] = twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null));
        // line 317
        echo "    ";
        if (((isset($context["error_count"]) ? $context["error_count"] : null) >= 1)) {
            // line 318
            echo "        <div class=\"error-block\">
            <span class=\"label label-danger\">";
            // line 319
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("errors", (isset($context["error_count"]) ? $context["error_count"] : null), array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
            ";
            // line 320
            if (((isset($context["error_count"]) ? $context["error_count"] : null) == 1)) {
                // line 321
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, (isset($context["errors"]) ? $context["errors"] : null)), "message", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 323
                echo "                <ul>
                    ";
                // line 324
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 325
                    echo "                        <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 327
                echo "                </ul>
            ";
            }
            // line 329
            echo "        </div>
    ";
        }
    }

    // line 333
    public function block_form_widget_compound($context, array $blocks = array())
    {
        // line 334
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
            // line 335
            echo "        <div class=\"empty collection-empty\">
            <span class=\"label label-empty\">";
            // line 336
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
        </div>
    ";
        }
        // line 339
        echo "
    ";
        // line 340
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
    }

    // line 343
    public function block_vich_file_widget($context, array $blocks = array())
    {
        // line 344
        ob_start();
        // line 345
        echo "    <div class=\"easyadmin-vich-file\">
        ";
        // line 346
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) ? $context["download_uri"] : null), "")) : ("")))) {
            // line 347
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : null), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : null), "/"))) : ($this->env->getExtension('translator')->trans("download", array(), "VichUploaderBundle")));
            // line 348
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["download_title"]) ? $context["download_title"] : null), "html", null, true);
            echo "</a>
        ";
        }
        // line 350
        echo "
        <div class=\"row\">
            ";
        // line 352
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 353
            echo "            <div class=\"col-sm-3 col-md-2\">
                ";
            // line 354
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array()), 'row');
            echo "
            </div>
            ";
        }
        // line 357
        echo "            <div class=\"";
        echo (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) ? ("col-sm-9 col-md-10") : ("col-sm-12"));
        echo "\">
                ";
        // line 358
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file", array()), 'widget');
        echo "
            </div>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 365
    public function block_vich_image_widget($context, array $blocks = array())
    {
        // line 366
        ob_start();
        // line 367
        echo "    <div class=\"easyadmin-vich-image\">
        ";
        // line 368
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file", array()), 'widget');
        echo "
        ";
        // line 369
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 370
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array()), 'row');
            echo "
        ";
        }
        // line 372
        echo "
        ";
        // line 373
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) ? $context["download_uri"] : null), "")) : ("")))) {
            // line 374
            echo "            ";
            $context["_lightbox_id"] = ("easyadmin-lightbox-" . (isset($context["id"]) ? $context["id"] : null));
            // line 375
            echo "
            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#";
            // line 376
            echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) ? $context["_lightbox_id"] : null), "html", null, true);
            echo "\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"";
            // line 377
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : null), "html", null, true);
            echo "\">
            </a>

            <div id=\"";
            // line 380
            echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) ? $context["_lightbox_id"] : null), "html", null, true);
            echo "\" class=\"easyadmin-lightbox\">
                <img src=\"";
            // line 381
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : null), "html", null, true);
            echo "\">
            </div>
        ";
        }
        // line 384
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 389
    public function block_easyadmin_widget($context, array $blocks = array())
    {
        // line 390
        echo "
    ";
        // line 391
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", array()), "name", array()), array(), "EasyAdminBundle"), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", array()), "label", array()), array(), "EasyAdminBundle"));
        // line 392
        echo "
    ";
        // line 393
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "errors", array())) > 0)) {
            // line 394
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
    ";
        }
        // line 396
        echo "
    <div class=\"row\">
        <input type=\"hidden\" name=\"referer\" value=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "html", null, true);
        echo "\"/>

        ";
        // line 400
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            if (!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array()))) {
                // line 401
                echo "            <div class=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "col-xs-12")) : ("col-xs-12")), "html", null, true);
                echo "\">
                ";
                // line 402
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["field"], 'row');
                echo "
            </div>
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 405
        echo "
        <div class=\"col-xs-12\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">
                    ";
        // line 409
        $this->displayBlock('item_actions', $context, $blocks);
        // line 432
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 409
    public function block_item_actions($context, array $blocks = array())
    {
        // line 410
        echo "                        ";
        // line 411
        echo "                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fa fa-save\"></i> ";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.save", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : null), "messages"), "html", null, true);
        echo "
                        </button>

                        ";
        // line 415
        $context["_entity_actions"] = ((($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "view", array()) == "new")) ? ($this->env->getExtension('easyadmin_extension')->getActionsForItem("new", $this->getAttribute($this->getAttribute(        // line 416
(isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", array()), "name", array()))) : ($this->env->getExtension('easyadmin_extension')->getActionsForItem("edit", $this->getAttribute($this->getAttribute(        // line 417
(isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", array()), "name", array()))));
        // line 418
        echo "
                        ";
        // line 419
        $context["_entity_id"] = ((($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "view", array()) == "new")) ? (null) : ($this->getAttribute($this->getAttribute(        // line 421
(isset($context["easyadmin"]) ? $context["easyadmin"] : null), "item", array()), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", array()), "primary_key_field_name", array()))));
        // line 422
        echo "
                        ";
        // line 423
        $context["_request_parameters"] = array("entity" => $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", array()), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 424
        echo "
                        ";
        // line 425
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 426
(isset($context["_entity_actions"]) ? $context["_entity_actions"] : null), "request_parameters" =>         // line 427
(isset($context["_request_parameters"]) ? $context["_request_parameters"] : null), "trans_parameters" =>         // line 428
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : null), "item_id" =>         // line 429
(isset($context["_entity_id"]) ? $context["_entity_id"] : null)), false);
        // line 430
        echo "
                    ";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1129 => 430,  1127 => 429,  1126 => 428,  1125 => 427,  1124 => 426,  1123 => 425,  1120 => 424,  1118 => 423,  1115 => 422,  1113 => 421,  1112 => 419,  1109 => 418,  1107 => 417,  1106 => 416,  1105 => 415,  1099 => 412,  1096 => 411,  1094 => 410,  1091 => 409,  1083 => 432,  1081 => 409,  1075 => 405,  1065 => 402,  1060 => 401,  1055 => 400,  1050 => 398,  1046 => 396,  1040 => 394,  1038 => 393,  1035 => 392,  1033 => 391,  1030 => 390,  1027 => 389,  1021 => 384,  1015 => 381,  1011 => 380,  1005 => 377,  1001 => 376,  998 => 375,  995 => 374,  993 => 373,  990 => 372,  984 => 370,  982 => 369,  978 => 368,  975 => 367,  973 => 366,  970 => 365,  960 => 358,  955 => 357,  949 => 354,  946 => 353,  944 => 352,  940 => 350,  932 => 348,  929 => 347,  927 => 346,  924 => 345,  922 => 344,  919 => 343,  915 => 340,  912 => 339,  906 => 336,  903 => 335,  901 => 334,  898 => 333,  892 => 329,  888 => 327,  879 => 325,  875 => 324,  872 => 323,  866 => 321,  864 => 320,  860 => 319,  857 => 318,  854 => 317,  851 => 316,  848 => 315,  844 => 311,  842 => 310,  840 => 309,  832 => 308,  829 => 307,  825 => 304,  823 => 303,  821 => 302,  813 => 301,  810 => 300,  806 => 297,  804 => 296,  801 => 295,  797 => 292,  795 => 291,  792 => 290,  788 => 287,  786 => 286,  783 => 285,  779 => 282,  777 => 281,  774 => 280,  770 => 277,  768 => 276,  762 => 275,  759 => 274,  750 => 268,  745 => 266,  741 => 264,  730 => 258,  724 => 257,  714 => 250,  709 => 247,  706 => 246,  704 => 245,  698 => 243,  695 => 242,  691 => 239,  685 => 237,  683 => 236,  681 => 234,  674 => 229,  668 => 228,  664 => 226,  662 => 225,  660 => 223,  658 => 222,  655 => 220,  653 => 219,  643 => 217,  641 => 216,  638 => 215,  632 => 209,  630 => 208,  628 => 207,  613 => 206,  610 => 205,  607 => 204,  604 => 203,  601 => 202,  598 => 201,  595 => 200,  592 => 199,  589 => 198,  586 => 197,  583 => 196,  581 => 195,  578 => 194,  574 => 191,  571 => 190,  567 => 187,  564 => 186,  560 => 183,  558 => 182,  555 => 180,  551 => 177,  549 => 176,  546 => 175,  541 => 169,  539 => 168,  537 => 167,  534 => 165,  532 => 164,  530 => 163,  527 => 162,  522 => 158,  520 => 157,  518 => 156,  515 => 154,  513 => 153,  511 => 152,  508 => 151,  503 => 147,  497 => 144,  496 => 143,  492 => 142,  488 => 141,  485 => 139,  479 => 136,  478 => 135,  474 => 134,  472 => 133,  470 => 132,  467 => 131,  463 => 128,  461 => 127,  458 => 126,  452 => 121,  449 => 120,  441 => 119,  436 => 117,  434 => 116,  432 => 115,  429 => 113,  427 => 112,  424 => 111,  418 => 106,  416 => 105,  414 => 103,  413 => 102,  412 => 101,  411 => 100,  406 => 98,  404 => 97,  402 => 96,  399 => 94,  397 => 93,  394 => 92,  389 => 88,  387 => 87,  385 => 86,  383 => 85,  381 => 84,  377 => 83,  375 => 82,  372 => 80,  370 => 79,  367 => 78,  362 => 74,  360 => 73,  358 => 72,  355 => 71,  351 => 68,  345 => 66,  343 => 65,  341 => 64,  335 => 62,  332 => 61,  330 => 60,  327 => 59,  324 => 58,  320 => 55,  318 => 54,  315 => 53,  311 => 50,  309 => 49,  306 => 48,  302 => 45,  299 => 43,  297 => 42,  294 => 41,  285 => 35,  280 => 33,  276 => 31,  269 => 27,  264 => 24,  261 => 23,  259 => 22,  257 => 20,  254 => 19,  250 => 14,  247 => 12,  245 => 10,  244 => 9,  243 => 8,  242 => 7,  240 => 6,  238 => 5,  235 => 4,  231 => 389,  228 => 387,  226 => 365,  223 => 364,  221 => 343,  219 => 333,  217 => 315,  214 => 313,  212 => 307,  209 => 306,  207 => 300,  204 => 299,  202 => 295,  199 => 294,  197 => 290,  194 => 289,  192 => 285,  189 => 284,  187 => 280,  184 => 279,  182 => 274,  179 => 273,  177 => 242,  174 => 241,  172 => 215,  169 => 214,  166 => 212,  164 => 194,  161 => 193,  159 => 190,  156 => 189,  154 => 186,  151 => 185,  149 => 180,  146 => 179,  144 => 175,  141 => 174,  138 => 172,  136 => 162,  133 => 161,  131 => 151,  128 => 150,  126 => 131,  123 => 130,  121 => 126,  118 => 125,  116 => 111,  113 => 110,  111 => 92,  108 => 91,  106 => 78,  103 => 77,  101 => 71,  98 => 70,  96 => 58,  93 => 57,  91 => 53,  88 => 52,  86 => 48,  83 => 47,  81 => 41,  78 => 40,  76 => 19,  73 => 18,  70 => 16,  68 => 4,  65 => 3,  14 => 1,);
    }
}
/* {% use "form_div_layout.html.twig" %}*/
/* {% trans_default_domain "EasyAdminBundle" %}*/
/* */
/* {% block form_start -%}*/
/*     {% if 'easyadmin' == block_prefixes|slice(-2)|first %}*/
/*         {% set attr = attr|merge({*/
/*             'class': attr.class|default('') ~ ' ' ~ easyadmin.view ~ '-form',*/
/*             'data-view': easyadmin.view,*/
/*             'data-entity': easyadmin.entity.name,*/
/*             'data-entity-id': attribute(value, easyadmin.entity.primary_key_field_name),*/
/*         }) %}*/
/*     {% endif %}*/
/* */
/*     {{- parent() -}}*/
/* {%- endblock form_start %}*/
/* */
/* {# Widgets #}*/
/* */
/* {% block form_widget %}*/
/*     {{- parent() -}}*/
/* */
/*     {% if form.parent.vars.allow_delete|default(false) %}*/
/*         {% set remove_item_javascript %}*/
/*             $(function() {*/
/*             if (event.preventDefault) event.preventDefault(); else event.returnValue = false;*/
/* */
/*             var containerDiv = $('#{{ id }}').parents('.form-group:first');*/
/*             containerDiv.remove();*/
/*             });*/
/*         {% endset %}*/
/* */
/*         <div class="text-right field-collection-item-action">*/
/*             <a href="#" onclick="{{ remove_item_javascript|raw }}" class="text-danger">*/
/*                 <i class="fa fa-remove"></i>*/
/*                 {{ 'action.remove_item'|trans }}*/
/*             </a>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock form_widget %}*/
/* */
/* {% block form_widget_simple -%}*/
/*     {% if type is not defined or type not in ['file', 'hidden'] %}*/
/*         {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}*/
/*     {% endif %}*/
/*     {{- parent() -}}*/
/* {%- endblock form_widget_simple %}*/
/* */
/* {% block textarea_widget -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock textarea_widget %}*/
/* */
/* {% block button_widget -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock %}*/
/* */
/* {% block money_widget -%}*/
/*     <div class="input-group">*/
/*         {% set prepend = '{{' == money_pattern[0:2] %}*/
/*         {% if not prepend %}*/
/*             <span class="input-group-addon">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>*/
/*         {% endif %}*/
/*         {{- block('form_widget_simple') -}}*/
/*         {% if prepend %}*/
/*             <span class="input-group-addon">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>*/
/*         {% endif %}*/
/*     </div>*/
/* {%- endblock money_widget %}*/
/* */
/* {% block percent_widget -%}*/
/*     <div class="input-group">*/
/*         {{- block('form_widget_simple') -}}*/
/*         <span class="input-group-addon">%</span>*/
/*     </div>*/
/* {%- endblock percent_widget %}*/
/* */
/* {% block datetime_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else -%}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{- form_errors(form.date) -}}*/
/*             {{- form_errors(form.time) -}}*/
/*             {{- form_widget(form.date, { datetime: true } ) -}}*/
/*             {{- form_widget(form.time, { datetime: true } ) -}}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock datetime_widget %}*/
/* */
/* {% block date_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else -%}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}*/
/*         {% if datetime is not defined or not datetime -%}*/
/*             <div {{ block('widget_container_attributes') -}}>*/
/*         {%- endif %}*/
/*             {{- date_pattern|replace({*/
/*                 '{{ year }}': form_widget(form.year),*/
/*                 '{{ month }}': form_widget(form.month),*/
/*                 '{{ day }}': form_widget(form.day),*/
/*             })|raw -}}*/
/*         {% if datetime is not defined or not datetime -%}*/
/*             </div>*/
/*         {%- endif -%}*/
/*     {% endif %}*/
/* {%- endblock date_widget %}*/
/* */
/* {% block time_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else -%}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}*/
/*         {% if datetime is not defined or false == datetime -%}*/
/*             <div {{ block('widget_container_attributes') -}}>*/
/*         {%- endif -%}*/
/*         {{- form_widget(form.hour) }}:{{ form_widget(form.minute) }}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}*/
/*         {% if datetime is not defined or false == datetime -%}*/
/*             </div>*/
/*         {%- endif -%}*/
/*     {% endif %}*/
/* {%- endblock time_widget %}*/
/* */
/* {% block choice_widget_collapsed -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock %}*/
/* */
/* {% block choice_widget_expanded -%}*/
/*     {% if '-inline' in label_attr.class|default('') -%}*/
/*         <div class="control-group">*/
/*             {%- for child in form %}*/
/*                 {{- form_widget(child, {*/
/*                     parent_label_class: label_attr.class|default(''),*/
/*                 }) -}}*/
/*             {% endfor -%}*/
/*         </div>*/
/*     {%- else -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {%- for child in form %}*/
/*                 {{- form_widget(child, {*/
/*                     parent_label_class: label_attr.class|default(''),*/
/*                 }) -}}*/
/*             {% endfor -%}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock choice_widget_expanded %}*/
/* */
/* {% block checkbox_widget -%}*/
/*     {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}*/
/*     {% if 'checkbox-inline' in parent_label_class %}*/
/*         {{- form_label(form, null, { widget: parent() }) -}}*/
/*     {% else -%}*/
/*         <div class="checkbox">*/
/*             {{- form_label(form, null, { widget: parent() }) -}}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock checkbox_widget %}*/
/* */
/* {% block radio_widget -%}*/
/*     {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}*/
/*     {% if 'radio-inline' in parent_label_class %}*/
/*         {{- form_label(form, null, { widget: parent() }) -}}*/
/*     {% else -%}*/
/*         <div class="radio">*/
/*             {{- form_label(form, null, { widget: parent() }) -}}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock radio_widget %}*/
/* */
/* {# Labels #}*/
/* */
/* {% block form_label -%}*/
/*     {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}*/
/*     {{- parent() -}}*/
/* {%- endblock form_label %}*/
/* */
/* {% block choice_label -%}*/
/*     {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}*/
/*     {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}*/
/*     {{- block('form_label') -}}*/
/* {% endblock %}*/
/* */
/* {% block checkbox_label -%}*/
/*     {{- block('checkbox_radio_label') -}}*/
/* {%- endblock checkbox_label %}*/
/* */
/* {% block radio_label -%}*/
/*     {{- block('checkbox_radio_label') -}}*/
/* {%- endblock radio_label %}*/
/* */
/* {% block checkbox_radio_label %}*/
/*     {# Do no display the label if widget is not defined in order to prevent double label rendering #}*/
/*     {% if widget is defined %}*/
/*         {% if required %}*/
/*             {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*         {% endif %}*/
/*         {% if parent_label_class is defined %}*/
/*             {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}*/
/*         {% endif %}*/
/*         {% if label is not same as(false) and label is empty %}*/
/*             {% set label = name|humanize %}*/
/*         {% endif %}*/
/*         <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>*/
/*             {{- widget|raw -}}*/
/*             {{- label is not same as(false) ? label|trans({}, translation_domain) -}}*/
/*         </label>*/
/*     {% endif %}*/
/* {% endblock checkbox_radio_label %}*/
/* */
/* {# Rows #}*/
/* */
/* {% block form_row -%}*/
/*     {% set _field_type = easyadmin.field.fieldType|default('default') %}*/
/*     <div class="form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}">*/
/* */
/*         {% set _trans_parameters = { '%entity_name%':  easyadmin.entity.name|trans, '%entity_label%': easyadmin.entity.label|trans } %}*/
/*         {% set _field_label = easyadmin.field['label']|default(null) %}*/
/* */
/*         {{- form_label(form, _field_label|trans(_trans_parameters)) -}}*/
/*         {{- form_widget(form) -}}*/
/* */
/*         {% if _field_type in ['datetime', 'datetimetz', 'date', 'time'] and easyadmin.field.nullable|default(false) %}*/
/*             <div class="nullable-control">*/
/*                 <label>*/
/*                     <input type="checkbox" {% if data is null %}checked="checked"{% endif %}>*/
/*                     {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}*/
/*                 </label>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         {{- form_errors(form) -}}*/
/* */
/*         {% if easyadmin.field.help|default('') != '' %}*/
/*             <span class="help-block"><i class="fa fa-info-circle"></i> {{ easyadmin.field.help|trans|raw }}</span>*/
/*         {% endif %}*/
/*     </div>*/
/* {%- endblock form_row %}*/
/* */
/* {% block collection_row %}*/
/*     {{ block('form_row') }}*/
/* */
/*     {% if allow_add|default(false) %}*/
/*         {% set js_add_item %}*/
/*             $(function() {*/
/*                 if (event.preventDefault) event.preventDefault(); else event.returnValue = false;*/
/* */
/*                 var collection = $('#{{ id }}');*/
/*                 var numItems = collection.children('div.form-group').length;*/
/* */
/*                 collection.prev('.collection-empty').remove();*/
/* */
/*                 var newItem = collection.attr('data-prototype')*/
/*                     .replace(/\>__name__label__\</g, '>' + numItems + '<')*/
/*                     .replace(/_{{ name }}___name__/g, '_{{ name }}_' + numItems)*/
/*                     .replace(/{{ name }}\]\[__name__\]/g, '{{ name }}][' + numItems + ']')*/
/*                 ;*/
/* */
/*                 collection.append(newItem);*/
/*             });*/
/*         {% endset %}*/
/* */
/*         <div class="text-right field-collection-action">*/
/*             <a href="#" onclick="{{ js_add_item|raw }}" class="text-primary">*/
/*                 <i class="fa fa-plus-square"></i>*/
/*                 {{ (form|length == 0 ? 'action.add_new_item' : 'action.add_another_item')|trans({}, 'EasyAdminBundle') }}*/
/*             </a>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock collection_row %}*/
/* */
/* {% block button_row -%}*/
/*     <div class="form-group field-{{ block_prefixes|slice(-2)|first }} {{ easyadmin.field.css_class|default('') }}">*/
/*         {{- form_widget(form) -}}*/
/*     </div>*/
/* {%- endblock button_row %}*/
/* */
/* {% block choice_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock choice_row %}*/
/* */
/* {% block date_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock date_row %}*/
/* */
/* {% block time_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock time_row %}*/
/* */
/* {% block datetime_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock datetime_row %}*/
/* */
/* {% block checkbox_row -%}*/
/*     <div class="form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}">*/
/*         {{- form_widget(form) -}}*/
/*         {{- form_errors(form) -}}*/
/*     </div>*/
/* {%- endblock checkbox_row %}*/
/* */
/* {% block radio_row -%}*/
/*     <div class="form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}">*/
/*         {{- form_widget(form) -}}*/
/*         {{- form_errors(form) -}}*/
/*     </div>*/
/* {%- endblock radio_row %}*/
/* */
/* {# Errors #}*/
/* {% block form_errors %}*/
/*     {% set error_count = errors|length %}*/
/*     {% if error_count >= 1 %}*/
/*         <div class="error-block">*/
/*             <span class="label label-danger">{{ 'errors'|transchoice(error_count) }}</span>*/
/*             {% if error_count == 1 %}*/
/*                 {{ errors|first.message }}*/
/*             {% else %}*/
/*                 <ul>*/
/*                     {% for error in errors %}*/
/*                         <li>{{ error.message }}</li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock form_errors %}*/
/* */
/* {%- block form_widget_compound -%}*/
/*     {% if value is empty %}*/
/*         <div class="empty collection-empty">*/
/*             <span class="label label-empty">{{ 'label.empty'|trans({}, 'EasyAdminBundle') }}</span>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {{ parent() }}*/
/* {%- endblock form_widget_compound -%}*/
/* */
/* {% block vich_file_widget %}*/
/* {% spaceless %}*/
/*     <div class="easyadmin-vich-file">*/
/*         {% if download_uri|default('') is not empty %}*/
/*             {% set download_title = download_uri|split('/')|last ?: 'download'|trans({}, 'VichUploaderBundle') %}*/
/*             <a href="{{ download_uri }}">{{ download_title }}</a>*/
/*         {% endif %}*/
/* */
/*         <div class="row">*/
/*             {% if form.delete is defined %}*/
/*             <div class="col-sm-3 col-md-2">*/
/*                 {{ form_row(form.delete) }}*/
/*             </div>*/
/*             {% endif %}*/
/*             <div class="{{ form.delete is defined ? 'col-sm-9 col-md-10' : 'col-sm-12' }}">*/
/*                 {{ form_widget(form.file) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block vich_image_widget %}*/
/* {% spaceless %}*/
/*     <div class="easyadmin-vich-image">*/
/*         {{ form_widget(form.file) }}*/
/*         {% if form.delete is defined %}*/
/*             {{ form_row(form.delete) }}*/
/*         {% endif %}*/
/* */
/*         {% if download_uri|default('') is not empty %}*/
/*             {% set _lightbox_id = 'easyadmin-lightbox-' ~ id %}*/
/* */
/*             <a href="#" class="easyadmin-thumbnail" data-featherlight="#{{ _lightbox_id }}" data-featherlight-close-on-click="anywhere">*/
/*                 <img src="{{ download_uri }}">*/
/*             </a>*/
/* */
/*             <div id="{{ _lightbox_id }}" class="easyadmin-lightbox">*/
/*                 <img src="{{ download_uri }}">*/
/*             </div>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {# Easy admin form type #}*/
/* {% block easyadmin_widget %}*/
/* */
/*     {% set _trans_parameters = { '%entity_name%':  easyadmin.entity.name|trans, '%entity_label%': easyadmin.entity.label|trans } %}*/
/* */
/*     {% if form.vars.errors|length > 0 %}*/
/*         {{ form_errors(form) }}*/
/*     {% endif %}*/
/* */
/*     <div class="row">*/
/*         <input type="hidden" name="referer" value="{{ app.request.query.get('referer', '') }}"/>*/
/* */
/*         {% for field in form.children if 'hidden' not in field.vars.block_prefixes %}*/
/*             <div class="{{ field.vars.easyadmin.field.css_class|default('col-xs-12') }}">*/
/*                 {{ form_row(field) }}*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*         <div class="col-xs-12">*/
/*             <div class="form-group">*/
/*                 <div id="form-actions-row">*/
/*                     {% block item_actions %}*/
/*                         {# the 'save' action is hardcoded for the 'edit' and 'new' views #}*/
/*                         <button type="submit" class="btn btn-primary">*/
/*                             <i class="fa fa-save"></i> {{ 'action.save'|trans(_trans_parameters, 'messages') }}*/
/*                         </button>*/
/* */
/*                         {% set _entity_actions = (easyadmin.view == 'new')*/
/*                             ? easyadmin_get_actions_for_new_item(easyadmin.entity.name)*/
/*                             : easyadmin_get_actions_for_edit_item(easyadmin.entity.name) %}*/
/* */
/*                         {% set _entity_id = (easyadmin.view == 'new')*/
/*                             ? null*/
/*                             : attribute(easyadmin.item, easyadmin.entity.primary_key_field_name) %}*/
/* */
/*                         {% set _request_parameters = { entity: easyadmin.entity.name, referer: app.request.query.get('referer') } %}*/
/* */
/*                         {{ include('@EasyAdmin/default/includes/_actions.html.twig', {*/
/*                             actions: _entity_actions,*/
/*                             request_parameters: _request_parameters,*/
/*                             trans_parameters: _trans_parameters,*/
/*                             item_id: _entity_id*/
/*                         }, with_context = false) }}*/
/*                     {% endblock item_actions %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock easyadmin_widget %}*/
/* */
