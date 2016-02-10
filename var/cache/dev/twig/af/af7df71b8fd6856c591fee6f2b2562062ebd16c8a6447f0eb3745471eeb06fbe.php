<?php

/* @EasyAdmin/form/bootstrap_3_layout.html.twig */
class __TwigTemplate_f48a63d7fb4214a9236251f5ba48f3675e7c1ef172540ab63ff5760d6d2baf86 extends Twig_Template
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
        $__internal_67973556a4bafdafd8bb35108cf9a2ef9d11269e2a947bc5372904e9b534cce9 = $this->env->getExtension("native_profiler");
        $__internal_67973556a4bafdafd8bb35108cf9a2ef9d11269e2a947bc5372904e9b534cce9->enter($__internal_67973556a4bafdafd8bb35108cf9a2ef9d11269e2a947bc5372904e9b534cce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_layout.html.twig"));

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
        
        $__internal_67973556a4bafdafd8bb35108cf9a2ef9d11269e2a947bc5372904e9b534cce9->leave($__internal_67973556a4bafdafd8bb35108cf9a2ef9d11269e2a947bc5372904e9b534cce9_prof);

    }

    // line 4
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_7fe932876ac17b8ae742d39e24e708225e32dfbb59c4923f83282bbbd1766a28 = $this->env->getExtension("native_profiler");
        $__internal_7fe932876ac17b8ae742d39e24e708225e32dfbb59c4923f83282bbbd1766a28->enter($__internal_7fe932876ac17b8ae742d39e24e708225e32dfbb59c4923f83282bbbd1766a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 5
        if (("easyadmin" == twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)))) {
            // line 6
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((((($this->getAttribute(            // line 7
(isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " ") . $this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array())) . "-form"), "data-view" => $this->getAttribute(            // line 8
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()), "data-entity" => $this->getAttribute($this->getAttribute(            // line 9
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "data-entity-id" => $this->getAttribute(            // line 10
(isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
            // line 12
            echo "    ";
        }
        // line 14
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_7fe932876ac17b8ae742d39e24e708225e32dfbb59c4923f83282bbbd1766a28->leave($__internal_7fe932876ac17b8ae742d39e24e708225e32dfbb59c4923f83282bbbd1766a28_prof);

    }

    // line 19
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_8efa2eb8427ffbf3dbd790251a70b9e839108769e4d396be721430459b36c6d2 = $this->env->getExtension("native_profiler");
        $__internal_8efa2eb8427ffbf3dbd790251a70b9e839108769e4d396be721430459b36c6d2->enter($__internal_8efa2eb8427ffbf3dbd790251a70b9e839108769e4d396be721430459b36c6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

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
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
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
            echo (isset($context["remove_item_javascript"]) ? $context["remove_item_javascript"] : $this->getContext($context, "remove_item_javascript"));
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
        
        $__internal_8efa2eb8427ffbf3dbd790251a70b9e839108769e4d396be721430459b36c6d2->leave($__internal_8efa2eb8427ffbf3dbd790251a70b9e839108769e4d396be721430459b36c6d2_prof);

    }

    // line 41
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_b740a46393cb9532e53f1ffeda1316023aa6410f973d47545bde40c87173bf0f = $this->env->getExtension("native_profiler");
        $__internal_b740a46393cb9532e53f1ffeda1316023aa6410f973d47545bde40c87173bf0f->enter($__internal_b740a46393cb9532e53f1ffeda1316023aa6410f973d47545bde40c87173bf0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 42
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 43
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 45
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_b740a46393cb9532e53f1ffeda1316023aa6410f973d47545bde40c87173bf0f->leave($__internal_b740a46393cb9532e53f1ffeda1316023aa6410f973d47545bde40c87173bf0f_prof);

    }

    // line 48
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_2f75a741f960455b1f4481f2a20548d97a57730d726198e0c7d8efe363a47e4e = $this->env->getExtension("native_profiler");
        $__internal_2f75a741f960455b1f4481f2a20548d97a57730d726198e0c7d8efe363a47e4e->enter($__internal_2f75a741f960455b1f4481f2a20548d97a57730d726198e0c7d8efe363a47e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 49
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 50
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_2f75a741f960455b1f4481f2a20548d97a57730d726198e0c7d8efe363a47e4e->leave($__internal_2f75a741f960455b1f4481f2a20548d97a57730d726198e0c7d8efe363a47e4e_prof);

    }

    // line 53
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_d6c4f5563293fb09e1648310b0c1fb7f451579e8850e948ebd9b64f2a52563c8 = $this->env->getExtension("native_profiler");
        $__internal_d6c4f5563293fb09e1648310b0c1fb7f451579e8850e948ebd9b64f2a52563c8->enter($__internal_d6c4f5563293fb09e1648310b0c1fb7f451579e8850e948ebd9b64f2a52563c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 54
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 55
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_d6c4f5563293fb09e1648310b0c1fb7f451579e8850e948ebd9b64f2a52563c8->leave($__internal_d6c4f5563293fb09e1648310b0c1fb7f451579e8850e948ebd9b64f2a52563c8_prof);

    }

    // line 58
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_b91706243aa23e5cefedc97f643cea4d442c701e443b592b57e6bb916556862c = $this->env->getExtension("native_profiler");
        $__internal_b91706243aa23e5cefedc97f643cea4d442c701e443b592b57e6bb916556862c->enter($__internal_b91706243aa23e5cefedc97f643cea4d442c701e443b592b57e6bb916556862c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 59
        echo "<div class=\"input-group\">
        ";
        // line 60
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), 0, 2));
        // line 61
        echo "        ";
        if ( !(isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 62
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 64
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 65
        if ((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 66
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 68
        echo "    </div>";
        
        $__internal_b91706243aa23e5cefedc97f643cea4d442c701e443b592b57e6bb916556862c->leave($__internal_b91706243aa23e5cefedc97f643cea4d442c701e443b592b57e6bb916556862c_prof);

    }

    // line 71
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_f33da2c150634f1f8baab37d50986b4dab412eccfc22631c7ea5ab719f2c98e4 = $this->env->getExtension("native_profiler");
        $__internal_f33da2c150634f1f8baab37d50986b4dab412eccfc22631c7ea5ab719f2c98e4->enter($__internal_f33da2c150634f1f8baab37d50986b4dab412eccfc22631c7ea5ab719f2c98e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 72
        echo "<div class=\"input-group\">";
        // line 73
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 74
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_f33da2c150634f1f8baab37d50986b4dab412eccfc22631c7ea5ab719f2c98e4->leave($__internal_f33da2c150634f1f8baab37d50986b4dab412eccfc22631c7ea5ab719f2c98e4_prof);

    }

    // line 78
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_e8f6596aa316c500679502027fff41f1365e448daf54be4d7921490d8ba4d75a = $this->env->getExtension("native_profiler");
        $__internal_e8f6596aa316c500679502027fff41f1365e448daf54be4d7921490d8ba4d75a->enter($__internal_e8f6596aa316c500679502027fff41f1365e448daf54be4d7921490d8ba4d75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 79
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 80
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 82
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 83
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 84
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 85
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 86
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 87
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 88
            echo "</div>";
        }
        
        $__internal_e8f6596aa316c500679502027fff41f1365e448daf54be4d7921490d8ba4d75a->leave($__internal_e8f6596aa316c500679502027fff41f1365e448daf54be4d7921490d8ba4d75a_prof);

    }

    // line 92
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_95184929b8a25d51645b28fc7a7f07e1ec55997451152304142c021e37490c84 = $this->env->getExtension("native_profiler");
        $__internal_95184929b8a25d51645b28fc7a7f07e1ec55997451152304142c021e37490c84->enter($__internal_95184929b8a25d51645b28fc7a7f07e1ec55997451152304142c021e37490c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 93
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 94
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 96
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 97
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 98
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 100
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 101
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 102
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 103
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 105
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 106
                echo "</div>";
            }
        }
        
        $__internal_95184929b8a25d51645b28fc7a7f07e1ec55997451152304142c021e37490c84->leave($__internal_95184929b8a25d51645b28fc7a7f07e1ec55997451152304142c021e37490c84_prof);

    }

    // line 111
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_cf911e93e8f172513af2cc6d7355715d3e446d0dea56c1c9e051caaec675419c = $this->env->getExtension("native_profiler");
        $__internal_cf911e93e8f172513af2cc6d7355715d3e446d0dea56c1c9e051caaec675419c->enter($__internal_cf911e93e8f172513af2cc6d7355715d3e446d0dea56c1c9e051caaec675419c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 112
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 113
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 115
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 116
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 117
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 119
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 120
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 121
                echo "</div>";
            }
        }
        
        $__internal_cf911e93e8f172513af2cc6d7355715d3e446d0dea56c1c9e051caaec675419c->leave($__internal_cf911e93e8f172513af2cc6d7355715d3e446d0dea56c1c9e051caaec675419c_prof);

    }

    // line 126
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_a054c35101330a154d31b82c5f7aea8524f67d62997b2106b9a5682fa350f9c5 = $this->env->getExtension("native_profiler");
        $__internal_a054c35101330a154d31b82c5f7aea8524f67d62997b2106b9a5682fa350f9c5->enter($__internal_a054c35101330a154d31b82c5f7aea8524f67d62997b2106b9a5682fa350f9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 127
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 128
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_a054c35101330a154d31b82c5f7aea8524f67d62997b2106b9a5682fa350f9c5->leave($__internal_a054c35101330a154d31b82c5f7aea8524f67d62997b2106b9a5682fa350f9c5_prof);

    }

    // line 131
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_db0e7ec39d58e27d1ce173a873163869e7d1a9e4e4978f0a7ff240812704694c = $this->env->getExtension("native_profiler");
        $__internal_db0e7ec39d58e27d1ce173a873163869e7d1a9e4e4978f0a7ff240812704694c->enter($__internal_db0e7ec39d58e27d1ce173a873163869e7d1a9e4e4978f0a7ff240812704694c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 132
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 133
            echo "<div class=\"control-group\">";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
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
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
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
        
        $__internal_db0e7ec39d58e27d1ce173a873163869e7d1a9e4e4978f0a7ff240812704694c->leave($__internal_db0e7ec39d58e27d1ce173a873163869e7d1a9e4e4978f0a7ff240812704694c_prof);

    }

    // line 151
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_5887a9c1c3b31e5d3c21441c86f6bf0220699cbfb65e5de98337d3b797931d26 = $this->env->getExtension("native_profiler");
        $__internal_5887a9c1c3b31e5d3c21441c86f6bf0220699cbfb65e5de98337d3b797931d26->enter($__internal_5887a9c1c3b31e5d3c21441c86f6bf0220699cbfb65e5de98337d3b797931d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 152
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 153
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 154
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 156
            echo "<div class=\"checkbox\">";
            // line 157
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 158
            echo "</div>";
        }
        
        $__internal_5887a9c1c3b31e5d3c21441c86f6bf0220699cbfb65e5de98337d3b797931d26->leave($__internal_5887a9c1c3b31e5d3c21441c86f6bf0220699cbfb65e5de98337d3b797931d26_prof);

    }

    // line 162
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_982d047f63cb3a9d2ab1fa7cc6588fe13b08677eacb7cc3eaa094995e0361c36 = $this->env->getExtension("native_profiler");
        $__internal_982d047f63cb3a9d2ab1fa7cc6588fe13b08677eacb7cc3eaa094995e0361c36->enter($__internal_982d047f63cb3a9d2ab1fa7cc6588fe13b08677eacb7cc3eaa094995e0361c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 163
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 164
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 165
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 167
            echo "<div class=\"radio\">";
            // line 168
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 169
            echo "</div>";
        }
        
        $__internal_982d047f63cb3a9d2ab1fa7cc6588fe13b08677eacb7cc3eaa094995e0361c36->leave($__internal_982d047f63cb3a9d2ab1fa7cc6588fe13b08677eacb7cc3eaa094995e0361c36_prof);

    }

    // line 175
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_356939299b724709a0e1c1658c098a5fe4d210e4f7da44a8c71683127e51a9d2 = $this->env->getExtension("native_profiler");
        $__internal_356939299b724709a0e1c1658c098a5fe4d210e4f7da44a8c71683127e51a9d2->enter($__internal_356939299b724709a0e1c1658c098a5fe4d210e4f7da44a8c71683127e51a9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 176
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 177
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_356939299b724709a0e1c1658c098a5fe4d210e4f7da44a8c71683127e51a9d2->leave($__internal_356939299b724709a0e1c1658c098a5fe4d210e4f7da44a8c71683127e51a9d2_prof);

    }

    // line 180
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_f495a9d567d7a233bb59b73a3184899b069a7cf45ca124f667f6a87b6a99fe1e = $this->env->getExtension("native_profiler");
        $__internal_f495a9d567d7a233bb59b73a3184899b069a7cf45ca124f667f6a87b6a99fe1e->enter($__internal_f495a9d567d7a233bb59b73a3184899b069a7cf45ca124f667f6a87b6a99fe1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 182
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 183
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_f495a9d567d7a233bb59b73a3184899b069a7cf45ca124f667f6a87b6a99fe1e->leave($__internal_f495a9d567d7a233bb59b73a3184899b069a7cf45ca124f667f6a87b6a99fe1e_prof);

    }

    // line 186
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_80f672be0b52980e1d1b87f41ccd71d916ecbb90e5965a81460b55eeab1e809c = $this->env->getExtension("native_profiler");
        $__internal_80f672be0b52980e1d1b87f41ccd71d916ecbb90e5965a81460b55eeab1e809c->enter($__internal_80f672be0b52980e1d1b87f41ccd71d916ecbb90e5965a81460b55eeab1e809c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 187
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_80f672be0b52980e1d1b87f41ccd71d916ecbb90e5965a81460b55eeab1e809c->leave($__internal_80f672be0b52980e1d1b87f41ccd71d916ecbb90e5965a81460b55eeab1e809c_prof);

    }

    // line 190
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_d195262254d4ca0ab1cee384be65d83e2a7d57516b6b0f8ab7ec4a1144c5c137 = $this->env->getExtension("native_profiler");
        $__internal_d195262254d4ca0ab1cee384be65d83e2a7d57516b6b0f8ab7ec4a1144c5c137->enter($__internal_d195262254d4ca0ab1cee384be65d83e2a7d57516b6b0f8ab7ec4a1144c5c137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 191
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_d195262254d4ca0ab1cee384be65d83e2a7d57516b6b0f8ab7ec4a1144c5c137->leave($__internal_d195262254d4ca0ab1cee384be65d83e2a7d57516b6b0f8ab7ec4a1144c5c137_prof);

    }

    // line 194
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_fd452d6c4518b28683204ced77cf6caa0309a41dd4f6a77cdf29ea1d0352b2f1 = $this->env->getExtension("native_profiler");
        $__internal_fd452d6c4518b28683204ced77cf6caa0309a41dd4f6a77cdf29ea1d0352b2f1->enter($__internal_fd452d6c4518b28683204ced77cf6caa0309a41dd4f6a77cdf29ea1d0352b2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 195
        echo "    ";
        // line 196
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 197
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 198
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 199
                echo "        ";
            }
            // line 200
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 201
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 202
                echo "        ";
            }
            // line 203
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 204
                echo "            ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 205
                echo "        ";
            }
            // line 206
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
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
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            // line 208
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            // line 209
            echo "</label>
    ";
        }
        
        $__internal_fd452d6c4518b28683204ced77cf6caa0309a41dd4f6a77cdf29ea1d0352b2f1->leave($__internal_fd452d6c4518b28683204ced77cf6caa0309a41dd4f6a77cdf29ea1d0352b2f1_prof);

    }

    // line 215
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9122d9154d2db0fe24407b6164ceaee63608ee2677c6f6ded834ea3ec2311120 = $this->env->getExtension("native_profiler");
        $__internal_9122d9154d2db0fe24407b6164ceaee63608ee2677c6f6ded834ea3ec2311120->enter($__internal_9122d9154d2db0fe24407b6164ceaee63608ee2677c6f6ded834ea3ec2311120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 216
        $context["_field_type"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 217
        echo "    <div class=\"form-group ";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">

        ";
        // line 219
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), array(), "EasyAdminBundle"), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "label", array()), array(), "EasyAdminBundle"));
        // line 220
        echo "        ";
        $context["_field_label"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "array"), null)) : (null));
        // line 222
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans((isset($context["_field_label"]) ? $context["_field_label"] : $this->getContext($context, "_field_label")), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle")) ? array() : array("label" => $_label_)));
        // line 223
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 225
        if ((twig_in_filter((isset($context["_field_type"]) ? $context["_field_type"] : $this->getContext($context, "_field_type")), array(0 => "datetime", 1 => "datetimetz", 2 => "date", 3 => "time")) && (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 226
            echo "            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" ";
            // line 228
            if ((null === (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))) {
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 236
        if (((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 237
            echo "            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), "EasyAdminBundle");
            echo "</span>
        ";
        }
        // line 239
        echo "    </div>";
        
        $__internal_9122d9154d2db0fe24407b6164ceaee63608ee2677c6f6ded834ea3ec2311120->leave($__internal_9122d9154d2db0fe24407b6164ceaee63608ee2677c6f6ded834ea3ec2311120_prof);

    }

    // line 242
    public function block_collection_row($context, array $blocks = array())
    {
        $__internal_d719b850f6471121f01044367c4b3233d5b5776786573b101da6fe71c5ade53c = $this->env->getExtension("native_profiler");
        $__internal_d719b850f6471121f01044367c4b3233d5b5776786573b101da6fe71c5ade53c->enter($__internal_d719b850f6471121f01044367c4b3233d5b5776786573b101da6fe71c5ade53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        // line 243
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 245
        if (((array_key_exists("allow_add", $context)) ? (_twig_default_filter((isset($context["allow_add"]) ? $context["allow_add"] : $this->getContext($context, "allow_add")), false)) : (false))) {
            // line 246
            echo "        ";
            ob_start();
            // line 247
            echo "            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#";
            // line 250
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "');
                var numItems = collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_";
            // line 257
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "___name__/g, '_";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "_' + numItems)
                    .replace(/";
            // line 258
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\\]\\[__name__\\]/g, '";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
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
            echo (isset($context["js_add_item"]) ? $context["js_add_item"] : $this->getContext($context, "js_add_item"));
            echo "\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                ";
            // line 268
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((((twig_length_filter($this->env, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))) == 0)) ? ("action.add_new_item") : ("action.add_another_item")), array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_d719b850f6471121f01044367c4b3233d5b5776786573b101da6fe71c5ade53c->leave($__internal_d719b850f6471121f01044367c4b3233d5b5776786573b101da6fe71c5ade53c_prof);

    }

    // line 274
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_7823344f9b40062a71d4515dd6f81eabc00328f655cfb9817fc00d9abd4a312b = $this->env->getExtension("native_profiler");
        $__internal_7823344f9b40062a71d4515dd6f81eabc00328f655cfb9817fc00d9abd4a312b->enter($__internal_7823344f9b40062a71d4515dd6f81eabc00328f655cfb9817fc00d9abd4a312b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 275
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">";
        // line 276
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 277
        echo "</div>";
        
        $__internal_7823344f9b40062a71d4515dd6f81eabc00328f655cfb9817fc00d9abd4a312b->leave($__internal_7823344f9b40062a71d4515dd6f81eabc00328f655cfb9817fc00d9abd4a312b_prof);

    }

    // line 280
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_93084ec3e24e342492dca400b7bf55f851a97f142486bf4879812021c4eb156d = $this->env->getExtension("native_profiler");
        $__internal_93084ec3e24e342492dca400b7bf55f851a97f142486bf4879812021c4eb156d->enter($__internal_93084ec3e24e342492dca400b7bf55f851a97f142486bf4879812021c4eb156d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 281
        $context["force_error"] = true;
        // line 282
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_93084ec3e24e342492dca400b7bf55f851a97f142486bf4879812021c4eb156d->leave($__internal_93084ec3e24e342492dca400b7bf55f851a97f142486bf4879812021c4eb156d_prof);

    }

    // line 285
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_a26a620f55f24db5e503305a1ead1c353565d9b660ae430607c69d1fc85d35d7 = $this->env->getExtension("native_profiler");
        $__internal_a26a620f55f24db5e503305a1ead1c353565d9b660ae430607c69d1fc85d35d7->enter($__internal_a26a620f55f24db5e503305a1ead1c353565d9b660ae430607c69d1fc85d35d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 286
        $context["force_error"] = true;
        // line 287
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a26a620f55f24db5e503305a1ead1c353565d9b660ae430607c69d1fc85d35d7->leave($__internal_a26a620f55f24db5e503305a1ead1c353565d9b660ae430607c69d1fc85d35d7_prof);

    }

    // line 290
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_c741c7af6b66c8ba789d9123fec3ad899e2d2e5278aa03ba8a56872639448661 = $this->env->getExtension("native_profiler");
        $__internal_c741c7af6b66c8ba789d9123fec3ad899e2d2e5278aa03ba8a56872639448661->enter($__internal_c741c7af6b66c8ba789d9123fec3ad899e2d2e5278aa03ba8a56872639448661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 291
        $context["force_error"] = true;
        // line 292
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c741c7af6b66c8ba789d9123fec3ad899e2d2e5278aa03ba8a56872639448661->leave($__internal_c741c7af6b66c8ba789d9123fec3ad899e2d2e5278aa03ba8a56872639448661_prof);

    }

    // line 295
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_fafd1abd5f2f6589241ba767915e29efb94e3b6029643c5cd0232ba7941b3709 = $this->env->getExtension("native_profiler");
        $__internal_fafd1abd5f2f6589241ba767915e29efb94e3b6029643c5cd0232ba7941b3709->enter($__internal_fafd1abd5f2f6589241ba767915e29efb94e3b6029643c5cd0232ba7941b3709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 296
        $context["force_error"] = true;
        // line 297
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_fafd1abd5f2f6589241ba767915e29efb94e3b6029643c5cd0232ba7941b3709->leave($__internal_fafd1abd5f2f6589241ba767915e29efb94e3b6029643c5cd0232ba7941b3709_prof);

    }

    // line 300
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_5e4957804a625fc2f48bdca9531de2db05b82680c9ba8e2d3882e50d320da148 = $this->env->getExtension("native_profiler");
        $__internal_5e4957804a625fc2f48bdca9531de2db05b82680c9ba8e2d3882e50d320da148->enter($__internal_5e4957804a625fc2f48bdca9531de2db05b82680c9ba8e2d3882e50d320da148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 301
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 302
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 303
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 304
        echo "</div>";
        
        $__internal_5e4957804a625fc2f48bdca9531de2db05b82680c9ba8e2d3882e50d320da148->leave($__internal_5e4957804a625fc2f48bdca9531de2db05b82680c9ba8e2d3882e50d320da148_prof);

    }

    // line 307
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_aa25680ad01b745ec7bd119b119711c1852aa1ed544ce15da842d657d9e3e054 = $this->env->getExtension("native_profiler");
        $__internal_aa25680ad01b745ec7bd119b119711c1852aa1ed544ce15da842d657d9e3e054->enter($__internal_aa25680ad01b745ec7bd119b119711c1852aa1ed544ce15da842d657d9e3e054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 308
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 309
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 310
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 311
        echo "</div>";
        
        $__internal_aa25680ad01b745ec7bd119b119711c1852aa1ed544ce15da842d657d9e3e054->leave($__internal_aa25680ad01b745ec7bd119b119711c1852aa1ed544ce15da842d657d9e3e054_prof);

    }

    // line 315
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_e2d0b8b5919a7e0d1ccc362db3038c639b429c4229ee708fbcbb943850894253 = $this->env->getExtension("native_profiler");
        $__internal_e2d0b8b5919a7e0d1ccc362db3038c639b429c4229ee708fbcbb943850894253->enter($__internal_e2d0b8b5919a7e0d1ccc362db3038c639b429c4229ee708fbcbb943850894253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 316
        echo "    ";
        $context["error_count"] = twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
        // line 317
        echo "    ";
        if (((isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")) >= 1)) {
            // line 318
            echo "        <div class=\"error-block\">
            <span class=\"label label-danger\">";
            // line 319
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("errors", (isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")), array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
            ";
            // line 320
            if (((isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")) == 1)) {
                // line 321
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))), "message", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 323
                echo "                <ul>
                    ";
                // line 324
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
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
        
        $__internal_e2d0b8b5919a7e0d1ccc362db3038c639b429c4229ee708fbcbb943850894253->leave($__internal_e2d0b8b5919a7e0d1ccc362db3038c639b429c4229ee708fbcbb943850894253_prof);

    }

    // line 333
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_912d1bbc13d14fa015c4faab88ba2ba43cb275c687f560876a614bb4de62c03f = $this->env->getExtension("native_profiler");
        $__internal_912d1bbc13d14fa015c4faab88ba2ba43cb275c687f560876a614bb4de62c03f->enter($__internal_912d1bbc13d14fa015c4faab88ba2ba43cb275c687f560876a614bb4de62c03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 334
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
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
        
        $__internal_912d1bbc13d14fa015c4faab88ba2ba43cb275c687f560876a614bb4de62c03f->leave($__internal_912d1bbc13d14fa015c4faab88ba2ba43cb275c687f560876a614bb4de62c03f_prof);

    }

    // line 343
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_a990c584e2302ab58d1ca828e99916afb6b34a91e9cb652a68e903bd4fbb7376 = $this->env->getExtension("native_profiler");
        $__internal_a990c584e2302ab58d1ca828e99916afb6b34a91e9cb652a68e903bd4fbb7376->enter($__internal_a990c584e2302ab58d1ca828e99916afb6b34a91e9cb652a68e903bd4fbb7376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 344
        ob_start();
        // line 345
        echo "    <div class=\"easyadmin-vich-file\">
        ";
        // line 346
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 347
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "/"))) : ($this->env->getExtension('translator')->trans("download", array(), "VichUploaderBundle")));
            // line 348
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["download_title"]) ? $context["download_title"] : $this->getContext($context, "download_title")), "html", null, true);
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
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
            </div>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a990c584e2302ab58d1ca828e99916afb6b34a91e9cb652a68e903bd4fbb7376->leave($__internal_a990c584e2302ab58d1ca828e99916afb6b34a91e9cb652a68e903bd4fbb7376_prof);

    }

    // line 365
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_70c98df03048dbbc96e491d8da8afd6e7e1e9951bfba6a161b7e93ec3bad795c = $this->env->getExtension("native_profiler");
        $__internal_70c98df03048dbbc96e491d8da8afd6e7e1e9951bfba6a161b7e93ec3bad795c->enter($__internal_70c98df03048dbbc96e491d8da8afd6e7e1e9951bfba6a161b7e93ec3bad795c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 366
        ob_start();
        // line 367
        echo "    <div class=\"easyadmin-vich-image\">
        ";
        // line 368
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 369
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 370
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 372
        echo "
        ";
        // line 373
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 374
            echo "            ";
            $context["_lightbox_id"] = ("easyadmin-lightbox-" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
            // line 375
            echo "
            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#";
            // line 376
            echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) ? $context["_lightbox_id"] : $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"";
            // line 377
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">
            </a>

            <div id=\"";
            // line 380
            echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) ? $context["_lightbox_id"] : $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" class=\"easyadmin-lightbox\">
                <img src=\"";
            // line 381
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">
            </div>
        ";
        }
        // line 384
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_70c98df03048dbbc96e491d8da8afd6e7e1e9951bfba6a161b7e93ec3bad795c->leave($__internal_70c98df03048dbbc96e491d8da8afd6e7e1e9951bfba6a161b7e93ec3bad795c_prof);

    }

    // line 389
    public function block_easyadmin_widget($context, array $blocks = array())
    {
        $__internal_568ba2217c091d2a42d4556e1a83c4b7a6b0179efba3be0c85cb761079be3953 = $this->env->getExtension("native_profiler");
        $__internal_568ba2217c091d2a42d4556e1a83c4b7a6b0179efba3be0c85cb761079be3953->enter($__internal_568ba2217c091d2a42d4556e1a83c4b7a6b0179efba3be0c85cb761079be3953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        // line 390
        echo "
    ";
        // line 391
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), array(), "EasyAdminBundle"), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "label", array()), array(), "EasyAdminBundle"));
        // line 392
        echo "
    ";
        // line 393
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
            // line 394
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
    ";
        }
        // line 396
        echo "
    <div class=\"row\">
        <input type=\"hidden\" name=\"referer\" value=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "html", null, true);
        echo "\"/>

        ";
        // line 400
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
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
        
        $__internal_568ba2217c091d2a42d4556e1a83c4b7a6b0179efba3be0c85cb761079be3953->leave($__internal_568ba2217c091d2a42d4556e1a83c4b7a6b0179efba3be0c85cb761079be3953_prof);

    }

    // line 409
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_cee775b9ac66fbbb9d1764f05e0c83a8c3235c21eccef127936d0a4b3499fde4 = $this->env->getExtension("native_profiler");
        $__internal_cee775b9ac66fbbb9d1764f05e0c83a8c3235c21eccef127936d0a4b3499fde4->enter($__internal_cee775b9ac66fbbb9d1764f05e0c83a8c3235c21eccef127936d0a4b3499fde4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 410
        echo "                        ";
        // line 411
        echo "                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fa fa-save\"></i> ";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.save", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "messages"), "html", null, true);
        echo "
                        </button>

                        ";
        // line 415
        $context["_entity_actions"] = ((($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? ($this->env->getExtension('easyadmin_extension')->getActionsForItem("new", $this->getAttribute($this->getAttribute(        // line 416
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))) : ($this->env->getExtension('easyadmin_extension')->getActionsForItem("edit", $this->getAttribute($this->getAttribute(        // line 417
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))));
        // line 418
        echo "
                        ";
        // line 419
        $context["_entity_id"] = ((($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? (null) : ($this->getAttribute($this->getAttribute(        // line 421
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "item", array()), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
        // line 422
        echo "
                        ";
        // line 423
        $context["_request_parameters"] = array("entity" => $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 424
        echo "
                        ";
        // line 425
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 426
(isset($context["_entity_actions"]) ? $context["_entity_actions"] : $this->getContext($context, "_entity_actions")), "request_parameters" =>         // line 427
(isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "trans_parameters" =>         // line 428
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 429
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), false);
        // line 430
        echo "
                    ";
        
        $__internal_cee775b9ac66fbbb9d1764f05e0c83a8c3235c21eccef127936d0a4b3499fde4->leave($__internal_cee775b9ac66fbbb9d1764f05e0c83a8c3235c21eccef127936d0a4b3499fde4_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1336 => 430,  1334 => 429,  1333 => 428,  1332 => 427,  1331 => 426,  1330 => 425,  1327 => 424,  1325 => 423,  1322 => 422,  1320 => 421,  1319 => 419,  1316 => 418,  1314 => 417,  1313 => 416,  1312 => 415,  1306 => 412,  1303 => 411,  1301 => 410,  1295 => 409,  1284 => 432,  1282 => 409,  1276 => 405,  1266 => 402,  1261 => 401,  1256 => 400,  1251 => 398,  1247 => 396,  1241 => 394,  1239 => 393,  1236 => 392,  1234 => 391,  1231 => 390,  1225 => 389,  1216 => 384,  1210 => 381,  1206 => 380,  1200 => 377,  1196 => 376,  1193 => 375,  1190 => 374,  1188 => 373,  1185 => 372,  1179 => 370,  1177 => 369,  1173 => 368,  1170 => 367,  1168 => 366,  1162 => 365,  1149 => 358,  1144 => 357,  1138 => 354,  1135 => 353,  1133 => 352,  1129 => 350,  1121 => 348,  1118 => 347,  1116 => 346,  1113 => 345,  1111 => 344,  1105 => 343,  1098 => 340,  1095 => 339,  1089 => 336,  1086 => 335,  1084 => 334,  1078 => 333,  1069 => 329,  1065 => 327,  1056 => 325,  1052 => 324,  1049 => 323,  1043 => 321,  1041 => 320,  1037 => 319,  1034 => 318,  1031 => 317,  1028 => 316,  1022 => 315,  1015 => 311,  1013 => 310,  1011 => 309,  1003 => 308,  997 => 307,  990 => 304,  988 => 303,  986 => 302,  978 => 301,  972 => 300,  965 => 297,  963 => 296,  957 => 295,  950 => 292,  948 => 291,  942 => 290,  935 => 287,  933 => 286,  927 => 285,  920 => 282,  918 => 281,  912 => 280,  905 => 277,  903 => 276,  897 => 275,  891 => 274,  879 => 268,  874 => 266,  870 => 264,  859 => 258,  853 => 257,  843 => 250,  838 => 247,  835 => 246,  833 => 245,  827 => 243,  821 => 242,  814 => 239,  808 => 237,  806 => 236,  804 => 234,  797 => 229,  791 => 228,  787 => 226,  785 => 225,  783 => 223,  781 => 222,  778 => 220,  776 => 219,  766 => 217,  764 => 216,  758 => 215,  749 => 209,  747 => 208,  745 => 207,  730 => 206,  727 => 205,  724 => 204,  721 => 203,  718 => 202,  715 => 201,  712 => 200,  709 => 199,  706 => 198,  703 => 197,  700 => 196,  698 => 195,  692 => 194,  685 => 191,  679 => 190,  672 => 187,  666 => 186,  659 => 183,  657 => 182,  651 => 180,  644 => 177,  642 => 176,  636 => 175,  628 => 169,  626 => 168,  624 => 167,  621 => 165,  619 => 164,  617 => 163,  611 => 162,  603 => 158,  601 => 157,  599 => 156,  596 => 154,  594 => 153,  592 => 152,  586 => 151,  578 => 147,  572 => 144,  571 => 143,  567 => 142,  563 => 141,  560 => 139,  554 => 136,  553 => 135,  549 => 134,  547 => 133,  545 => 132,  539 => 131,  532 => 128,  530 => 127,  524 => 126,  515 => 121,  512 => 120,  504 => 119,  499 => 117,  497 => 116,  495 => 115,  492 => 113,  490 => 112,  484 => 111,  475 => 106,  473 => 105,  471 => 103,  470 => 102,  469 => 101,  468 => 100,  463 => 98,  461 => 97,  459 => 96,  456 => 94,  454 => 93,  448 => 92,  440 => 88,  438 => 87,  436 => 86,  434 => 85,  432 => 84,  428 => 83,  426 => 82,  423 => 80,  421 => 79,  415 => 78,  407 => 74,  405 => 73,  403 => 72,  397 => 71,  390 => 68,  384 => 66,  382 => 65,  380 => 64,  374 => 62,  371 => 61,  369 => 60,  366 => 59,  360 => 58,  353 => 55,  351 => 54,  345 => 53,  338 => 50,  336 => 49,  330 => 48,  323 => 45,  320 => 43,  318 => 42,  312 => 41,  300 => 35,  295 => 33,  291 => 31,  284 => 27,  279 => 24,  276 => 23,  274 => 22,  272 => 20,  266 => 19,  259 => 14,  256 => 12,  254 => 10,  253 => 9,  252 => 8,  251 => 7,  249 => 6,  247 => 5,  241 => 4,  234 => 389,  231 => 387,  229 => 365,  226 => 364,  224 => 343,  222 => 333,  220 => 315,  217 => 313,  215 => 307,  212 => 306,  210 => 300,  207 => 299,  205 => 295,  202 => 294,  200 => 290,  197 => 289,  195 => 285,  192 => 284,  190 => 280,  187 => 279,  185 => 274,  182 => 273,  180 => 242,  177 => 241,  175 => 215,  172 => 214,  169 => 212,  167 => 194,  164 => 193,  162 => 190,  159 => 189,  157 => 186,  154 => 185,  152 => 180,  149 => 179,  147 => 175,  144 => 174,  141 => 172,  139 => 162,  136 => 161,  134 => 151,  131 => 150,  129 => 131,  126 => 130,  124 => 126,  121 => 125,  119 => 111,  116 => 110,  114 => 92,  111 => 91,  109 => 78,  106 => 77,  104 => 71,  101 => 70,  99 => 58,  96 => 57,  94 => 53,  91 => 52,  89 => 48,  86 => 47,  84 => 41,  81 => 40,  79 => 19,  76 => 18,  73 => 16,  71 => 4,  68 => 3,  14 => 1,);
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
