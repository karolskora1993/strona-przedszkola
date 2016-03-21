<?php

/* @EasyAdmin/css/easyadmin.css.twig */
class __TwigTemplate_8a8cc5945f69370a1b6af0b0d769148acbc9af119cb0ce01bbf9e384349d95ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d38252f95fb04e0653b0ea6266fdf2c9ab14bdd499ec5e301160801438972f3 = $this->env->getExtension("native_profiler");
        $__internal_0d38252f95fb04e0653b0ea6266fdf2c9ab14bdd499ec5e301160801438972f3->enter($__internal_0d38252f95fb04e0653b0ea6266fdf2c9ab14bdd499ec5e301160801438972f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/css/easyadmin.css.twig"));

        // line 1
        echo "/*! ========================================================================
    EasyAdmin Default Theme | (c) 2015 Javier Eguiluz | MIT License
    ======================================================================== */

";
        // line 5
        $context["color_schemes"] = array("dark" => array("danger" => "#D42124", "success" => "#006B2E", "text" => "#222222", "text_muted" => "#737373", "link" => "#205081", "black" => "#111111", "white" => "#FFFFFF", "gray_darker" => "#252525", "gray_dark" => "#444", "gray" => "#AAA", "gray_light" => "#CCC", "gray_lighter" => "#F5F5F5", "page_background" => "#F5F5F5", "table_header" => "#EEE", "table_border" => "#CCC", "table_row_border" => "#DDD"), "light" => array("danger" => "#D42124", "success" => "#006B2E", "text" => "#444444", "text_muted" => "#737373", "link" => "#205081", "black" => "#333333", "white" => "#FFFFFF", "gray_darker" => "#444", "gray_dark" => "#AAA", "gray" => "#CCC", "gray_light" => "#F5F5F5", "gray_lighter" => "#FAFAFA", "page_background" => "#FFFFFF", "table_header" => "#FAFAFA", "table_border" => "#FFFFFF", "table_row_border" => "#E5E5E5"));
        // line 43
        echo "
";
        // line 44
        $context["colors"] = $this->getAttribute((isset($context["color_schemes"]) ? $context["color_schemes"] : $this->getContext($context, "color_schemes")), (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")), array(), "array");
        // line 45
        echo "
";
        // line 47
        echo "
/* -------------------------------------------------------------------------
   BASIC STYLES
   ------------------------------------------------------------------------- */
body {
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif;
}

/* Links
   ------------------------------------------------------------------------- */
a        { color: ";
        // line 57
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "link", array());
        echo "; }
a:hover  { opacity: 0.9; }
a:active { outline: 0; }

#main a:active {
    position: relative;
    top: 1px;
}

a.text-primary,
a.text-primary:focus {
    color: ";
        // line 68
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "link", array());
        echo ";
}
a.text-danger,
a.text-danger:focus {
    color: ";
        // line 72
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
}
a.text-primary:hover,
a.text-danger:hover {
    opacity: 0.9;
}

/* Lists
   ------------------------------------------------------------------------- */
ul, ol {
    margin: 1em 0 1em 1em;
    padding: 0;
}
li {
    margin-bottom: 1em;
}

/* Flash messages
   ------------------------------------------------------------------------- */
div.flash {
    padding: .5em;
}
div.flash-success {
    background: ";
        // line 95
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "success", array());
        echo ";
    color: ";
        // line 96
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
}
div.flash-error {
    background: ";
        // line 99
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
    color: ";
        // line 100
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
}
div.flash-error strong {
    padding-right: .5em;
}

/* Labels
   ------------------------------------------------------------------------- */
/* this prevents overriding default styles for labels (label-info, label-primary, etc.) */
.label:not([class*=label-]) {
    background: ";
        // line 110
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_darker", array());
        echo ";
}
.label {
    color: ";
        // line 113
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    display: inline-block;
    font-size: 11px;
    padding: 4px;
    text-transform: uppercase;
}

.label-success {
    /* !important is required to override AdminLTE styles */
    background: ";
        // line 122
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "success", array());
        echo " !important;
}
.label-danger {
    /* !important is required to override AdminLTE styles */
    background: ";
        // line 126
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo " !iportant;
}
.label-empty {
    background: transparent;
    border: 2px dotted;
    border-radius: 4px;
    color: ";
        // line 132
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
        echo ";
    padding: 4px 8px;
}

/* this makes boolean labels to be of the same width for most languages */
.boolean .label,
.toggle .label {
    min-width: 33px;
}

/* Switches / toggles
   ------------------------------------------------------------------------- */
.toggle.btn-xs {
 width: 44px;
}
.toggle-group .btn,
.toggle-group .btn:hover {
   border-radius: 3px;
   font-size: 10px;
   font-weight: bold;
   text-transform: uppercase;
}
.toggle-group .btn {
   padding: 4px 6px;
}
.toggle-group .btn:hover {
    border: 0;
}
.toggle-group .btn + .btn {
    margin-left: 0;
}
.toggle-group .toggle-on,
.toggle-group .toggle-on.btn-xs,
.toggle-group .toggle-on:hover,
.toggle-group .toggle-on:active,
.toggle-group .toggle-on:active:hover {
    background: ";
        // line 168
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "success", array());
        echo ";
    border-color: ";
        // line 169
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "success", array());
        echo ";
    color: ";
        // line 170
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    padding: 4px 5px 4px 0;
    border: 0;
}
.toggle-group .toggle-off,
.toggle-group .toggle-off.btn-xs,
.toggle-group .toggle-off:hover,
.toggle-group .toggle-off:active,
.toggle-group .toggle-off:active:hover {
    background: ";
        // line 179
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
    border-color: ";
        // line 180
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
    color: ";
        // line 181
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    padding: 4px 0 4px 5px;
    border: 0;
}
.toggle-group .toggle-handle,
.toggle-group .toggle-handle:hover,
.toggle-group .toggle-handle:active,
.toggle-group .toggle-handle:active:hover {
    background: ";
        // line 189
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_lighter", array());
        echo ";
    border: 0;
    border-radius: 2px;
    height: 19px;
    margin-top: 2px;
    padding: 5px;
}
.toggle .btn-success .toggle-handle {
    box-shadow: -2px 0 1px rgba(0, 0, 0, .2);
}
.toggle .btn-danger .toggle-handle {
    box-shadow: 2px 0 1px rgba(0, 0, 0, .2);
}

/* Badges
   ------------------------------------------------------------------------- */
span.badge {
    background-color: ";
        // line 206
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
}

/* Buttons
   ------------------------------------------------------------------------- */
.btn:focus {
    outline: none;
}
.btn + .btn {
    margin-left: 5px;
}

button.btn:active {
    position: relative;
    top: 1px;
}

.btn,
.btn:hover,
.btn:active,
.btn:focus,
.btn:active:hover  {
";
        // line 228
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 229
            echo "    background: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
            echo ";
";
        } elseif (("light" ==         // line 230
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 231
            echo "    background: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray", array());
            echo ";
";
        }
        // line 233
        echo "    border: 1px solid transparent;
    border-radius: 4px;
    box-shadow: none;
    color: ";
        // line 236
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text", array());
        echo ";
    display: inline-block;
    line-height: 1.42857143;
    opacity: 1;
    outline: none;
    padding: 6px 12px;
    text-align: center;
}

.btn-primary,
.btn-primary:hover,
.btn-primary:active,
.btn-primary:focus,
.btn-primary:active:hover {
    background-color: ";
        // line 250
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
    border-color: transparent;
    color: ";
        // line 252
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
}
.btn-default,
.btn-default:hover,
.btn-default:active,
.btn-default:focus,
.btn-default:active:hover {
    border-color: transparent;
}

.btn-danger,
.btn-danger:hover,
.btn-danger:active,
.btn-danger:focus,
.btn-danger:active:hover {
    background-color: ";
        // line 267
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
    border-color: transparent;
    color: ";
        // line 269
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
}

/* .bnt-secondary is for 'buttons' displayed as text links */
.btn-secondary,
.btn-secondary:hover,
.btn-secondary:active,
.btn-secondary:focus,
.btn-secondary:active:hover{
    background: transparent;
    color: ";
        // line 279
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
    text-decoration: underline;
}
.btn-secondary:hover {
    text-decoration: none;
}

.btn-primary,
.btn-danger {
    font-weight: bold;
}

.btn i {
    font-size: 16px;
    margin-right: 2px;
}

/* Forms
   ------------------------------------------------------------------------- */
.form-inline .form-control {
    margin-bottom: 5px;
}
.form-control,
.form-inline .form-control {
    border: 1px solid ";
        // line 303
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray", array());
        echo ";
    border-radius: 0;
";
        // line 305
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 306
            echo "    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
";
        }
        // line 308
        echo "    color: ";
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text", array());
        echo ";
    -webkit-transition: none;
    transition: none;
}
.form-control:focus {
";
        // line 313
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 314
            echo "    border-color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_dark", array());
            echo ";
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
";
        } elseif (("light" ==         // line 316
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 317
            echo "    border-color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_darker", array());
            echo ";
";
        }
        // line 319
        echo "}

.has-error .error-block {
    color: ";
        // line 322
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
    font-weight: bold;
    padding-top: 5px;
}
.has-error .error-block .label-danger {
    margin-right: 3px;
}
.has-error .error-block ul {
    margin: .5em 0 .5em 1.5em;
}
.has-error .error-block ul li {
    margin-bottom: .5em;
}

.help-block,
.has-error .help-block {
    color: ";
        // line 338
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text_muted", array());
        echo ";
    font-size: 13px;
}
.nullable-control {
   padding-top: 5px;
}

/* Field: collection
   ------------------------------------------------------------------------- */
.field-collection .collection-empty {
    margin: .5em 0;
}

/* Select2 widget
   ------------------------------------------------------------------------- */
/* these styles must be applied after loading the default select2 styles */
.select2-container {
    width: 100% !important;
}
.select2-container--bootstrap .select2-selection {
    border: 1px solid ";
        // line 358
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray", array());
        echo ";
    border-radius: 0;
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
    color: ";
        // line 361
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text", array());
        echo ";
    -webkit-transition: none;
    transition: none;
}
.select2-container--bootstrap .select2-selection .select2-search--inline {
    margin: 0;
}
.select2-container--bootstrap .select2-selection--single .select2-selection__rendered {
    color: ";
        // line 369
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text", array());
        echo ";
    padding-top: 4px;
}
.select2-container--bootstrap .select2-results__option {
    margin-bottom: 0;
}
.select2-container--bootstrap .select2-results__option[aria-selected=true] {
    background-color: ";
        // line 376
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
        echo ";
    font-weight: bold;
}
.select2-container--bootstrap .select2-results__option--highlighted[aria-selected] {
    background-color: ";
        // line 380
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice {
    color: ";
        // line 383
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text", array());
        echo ";
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice__remove {
    color: ";
        // line 386
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
    font-weight: bold;
    position: relative;
    top: -1px;
}
.select2-container--bootstrap .select2-search--dropdown .select2-search__field {
    border: 1px solid ";
        // line 392
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_dark", array());
        echo ";
    border-radius: 0;
    margin: 5px 10px;
    padding: 6px;
    width: 96%;
}
.select2-search--inline .select2-search__field:focus {
    outline: 0;
    border: 0;
}

/* VichUploaderBundle files and images
   ------------------------------------------------------------------------- */
.easyadmin-vich-image img {
    border: 3px solid ";
        // line 406
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 407
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray", array());
        echo ";
    max-height: 300px;
    max-width: 400px;
}
.easyadmin-vich-image input[type=\"file\"],
.easyadmin-vich-file input[type=\"file\"] {
    padding-top: 7px;
}
.easyadmin-vich-file a {
    display: inline-block;
    padding-top: 7px;
}
/* the checkbox to delete the image/file */
.easyadmin-vich-file .field-checkbox {
    margin-bottom: 0;
}
.easyadmin-vich-file .field-checkbox .col-sm-2,
.easyadmin-vich-image .field-checkbox .col-sm-2 {
    display: none;
}

/* Thumbnails and image lightbox
   ------------------------------------------------------------------------- */
.easyadmin-thumbnail img {
    border: 3px solid ";
        // line 431
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 432
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray", array());
        echo ";
    max-height: 100px;
    max-width: 100%;
}
.easyadmin-thumbnail img:hover {
    cursor: zoom-in;
}
.featherlight .easyadmin-lightbox:hover {
    cursor: zoom-out;
}
.easyadmin-lightbox {
    display: none;
}
.featherlight .easyadmin-lightbox {
    display: block;
}
.easyadmin-lightbox img {
    max-width: 100%;
}

/* Modal windows
   ------------------------------------------------------------------------- */
.modal-dialog .modal-content {
    border-radius: 0;
}
.modal-dialog .modal-content .modal-body h4 {
    font-size: 21px;
    margin: .5em 0;
}
.modal-dialog .modal-footer {
    background: ";
        // line 462
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_lighter", array());
        echo ";
    border-top: 1px solid ";
        // line 463
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
        echo ";
    margin-top: 1.5em;
}

/* -------------------------------------------------------------------------
   LAYOUT
   ------------------------------------------------------------------------- */

/* Wrapper
   ------------------------------------------------------------------------- */
.content-wrapper {
    background: ";
        // line 474
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "page_background", array());
        echo ";
}

/* Header
   ------------------------------------------------------------------------- */
.main-header {
    background: ";
        // line 480
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
}
.main-header .logo {
    background: rgba(0, 0, 0, 0.15);
    color: ";
        // line 484
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif; /* needed to override AdminLTE styles */
    font-weight: bold;
}
.main-header .logo-lg {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.main-header .logo-mini {
    font-weight: bold;
    text-align: center;
}
.main-header .logo-long .logo-lg {
    font-size: 16px;
}
.main-header > img {
    margin-top: -2px;
    max-height: 26px;
    max-width: 94%;
}
.main-header li {
    margin-bottom: 0;
}

.main-header > .navbar {
";
        // line 510
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 511
            echo "    background-color: ";
            echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
            echo ";
    color: ";
            // line 512
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
            echo ";
";
        } elseif (("light" ==         // line 513
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 514
            echo "    background-color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
            echo ";
    color: ";
            // line 515
            echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
            echo ";
";
        }
        // line 517
        echo "    min-height: 40px;
}

.main-header .navbar .sidebar-toggle {
";
        // line 521
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 522
            echo "    color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
            echo ";
";
        } elseif (("light" ==         // line 523
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 524
            echo "    color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text_muted", array());
            echo ";
";
        }
        // line 526
        echo "    padding: 10px;
}
.main-header .navbar .sidebar-toggle:hover {
    background: rgba(0, 0, 0, 0.15);
}

.navbar-custom-menu .user-menu {
";
        // line 533
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 534
            echo "    color: rgba(255, 255, 255, 0.8);
";
        } elseif (("light" ==         // line 535
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 536
            echo "    color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text_muted", array());
            echo ";
";
        }
        // line 538
        echo "    font-size: 13px;
    font-weight: bold;
    padding: 10px;
}

/* Main body
   ------------------------------------------------------------------------- */
#content #main {
    padding-bottom: 3em;
}
.content {
    padding-top: 10px;
}
.content-header {
    padding: 12px 15px 0 15px;
}
.content-header h1 {
    margin: 0;
    font-size: 24px;
}

/* Sidebar
   ------------------------------------------------------------------------- */
.main-sidebar,
.wrapper {
";
        // line 563
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 564
            echo "    background-color: rgb(34, 34, 34);
";
        } elseif (("light" ==         // line 565
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 566
            echo "    background-color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
            echo ";
";
        }
        // line 568
        echo "}
.main-sidebar {
    padding-top: 90px;
}

.sidebar-menu > li.header {
";
        // line 574
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 575
            echo "    color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
            echo ";
";
        } elseif (("light" ==         // line 576
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 577
            echo "    color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "black", array());
            echo ";
";
        }
        // line 579
        echo "    font-size: 12px;
    font-weight: bold;
    opacity: 0.4;
    text-transform: uppercase;
}

.sidebar-menu > li > a,
.sidebar-menu .treeview-menu > li > a {
";
        // line 587
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 588
            echo "    color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
            echo ";
    opacity: 0.8;
";
        } elseif (("light" ==         // line 590
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 591
            echo "    color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_darker", array());
            echo ";
";
        }
        // line 593
        echo "    border-left: 3px solid transparent;
    display: block;
    font-weight: bold;
}
.sidebar-menu .treeview-menu > li > a {
    font-size: 13px;
    padding: 8px 5px 8px 25px;
}
.sidebar-menu > li:hover > a,
.sidebar-menu > li.active > a,
.sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu .treeview-menu > li.active > a {
";
        // line 605
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 606
            echo "    color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
            echo ";
    background: rgb(15, 15, 15);
    border-left-color: rgb(115, 115, 115);
";
        } elseif (("light" ==         // line 609
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 610
            echo "    background: rgb(200, 200, 200);
    border-left-color: rgb(128, 128, 128);
";
        }
        // line 613
        echo "    opacity: 1;
}

.sidebar-menu > li > a > .fa {
    width: 22px;
}

.sidebar-menu .treeview-menu {
";
        // line 621
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 622
            echo "    background: rgb(60, 60, 60);
";
        } elseif (("light" ==         // line 623
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 624
            echo "    background: rgb(220, 220, 220);
";
        }
        // line 626
        echo "    margin: 0;
    padding: 0;
}

/* applied to the menu item which is active and has its submenu revealed */
.sidebar-menu > li.active.submenu-active > a {
";
        // line 632
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 633
            echo "    background: rgb(34, 34, 34);
";
        } elseif (("light" ==         // line 634
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 635
            echo "    background: rgb(220, 220, 220);
";
        }
        // line 637
        echo "    border-left-color: transparent;
}
/* icon displayed for collapsed submenus */
.sidebar-menu li > a > .pull-right {
    font-weight: bold;
    text-align: right;
}
/* icon displayed for revealed submenus */
.sidebar-menu li.active > a > .fa-angle-left {
    top: 30px;
    right: 0;
}
/* when the sidebar is collapsed, make the icons wider to just display them and not the labels */
.sidebar-collapse .sidebar-menu > li > a > .fa {
    width: 28px;
}

/* -------------------------------------------------------------------------
   COMMON ADMIN PAGES
   ------------------------------------------------------------------------- */
body.easyadmin h1.title {
    margin-bottom: 10px;
}

/* -------------------------------------------------------------------------
   LIST PAGE
   ------------------------------------------------------------------------- */
body.list .global-actions {
    text-align: right;
}
body.list .global-actions .form-control {
    box-shadow: none;
}
body.list .global-actions .input-group-btn > button.btn:not(:last-child) {
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
}
body.list .global-actions .input-group-btn a.btn {
    border-radius: 3px;
    margin-left: 10px;
}

/* Responsive tables
   ------------------------------------------------------------------------- */
body.list table {
    background: transparent;
    border: 0;
}
body.list table thead {
    display: none;
}
body.list .table tbody {
    background: transparent;
    border: 0;
}
body.list table tbody tr {
    background: ";
        // line 693
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
";
        // line 694
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 695
            echo "    border: 1px solid ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
            echo ";
";
        } elseif (("light" ==         // line 696
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 697
            echo "    border: 1px solid ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray", array());
            echo ";
";
        }
        // line 699
        echo "    display: block;
    margin-bottom: 1em;
}
body.list table tbody td {
    border-bottom: 1px solid ";
        // line 703
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "table_row_border", array());
        echo ";
    border-top: 0;
    display: block;
    text-align: right;
    vertical-align: middle;
}
body.list table tbody td:last-child {
    border-bottom: 0;
}
table td:before {
    content: attr(data-label);
    float: left;
    font-weight: bold;
}
table td:after {
    clear: both;
    content: \"\";
    display: block;
}

body.list table tbody td.image .easyadmin-thumbnail img {
    border-width: 2px;
    max-height: 50px;
    max-width: 150px;
}
body.list table tbody td.association .badge {
    font-size: 13px;
}
body.list table tbody td.actions a {
    font-weight: bold;
    margin-left: 10px;
}

/* Search results
   ------------------------------------------------------------------------- */
body.list .table tbody span.highlight {
    background: #FF9;
    border-radius: 2px;
    padding: 1px;
}
body.list .table tbody .no-results span.highlight,
body.list .table tbody .actions span.highlight {
    background: 0;
    border-radius: 0;
}

/* Pagination
   ------------------------------------------------------------------------- */
body.list .pagination {
    float: right;
    margin: 0;
}
body.list .pagination > .disabled > span {
    background: transparent;
    border: 1px solid transparent;
";
        // line 758
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 759
            echo "    color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text_muted", array());
            echo ";
";
        } elseif (("light" ==         // line 760
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 761
            echo "    color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray", array());
            echo ";
";
        }
        // line 763
        echo "}
body.list .pagination > li > a {
    background: ";
        // line 765
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    border-color: ";
        // line 766
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
        echo ";
    border-radius: 0;
    color: ";
        // line 768
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text", array());
        echo ";
}
body.list .pagination > li > a:hover {
    background: ";
        // line 771
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
    color: ";
        // line 772
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
}
.pagination > li > a,
.pagination > li > span {
    padding: 6px 8px;
}
body.list .pagination > li i {
    padding: 0 3px;
}
/* this hack is needed to avoid the last pagination page from showing wrong
   borders for the second pagination element (we need to put this element above
   the third element) */
body.list .pagination.last-page li:nth-child(2) {
    position: relative;
    z-index: 1;
}

/* -------------------------------------------------------------------------
   FORM PAGE
   ------------------------------------------------------------------------- */
form label.control-label.required:after {
    content: \"\\00a0*\";
    color: ";
        // line 794
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
    font-size: 16px;
    position: absolute;
}

/* -------------------------------------------------------------------------
   NEW PAGE
   ------------------------------------------------------------------------- */
body.new textarea {
    min-height: 250px;
}
body.new .field-collection-action {
    margin: -15px 0 10px;
}
body.new .field-collection-item-action {
    margin: 5px 0 0;
}

body.new #form-actions-row button,
body.new #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.new .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

/* -------------------------------------------------------------------------
   EDIT PAGE
   ------------------------------------------------------------------------- */
body.edit textarea {
    min-height: 250px;
}
body.edit .field-collection-action {
    margin: -15px 0 10px;
}
body.edit .field-collection-item-action {
    margin: 5px 0 0;
}

body.edit #form-actions-row button,
body.edit #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.edit .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

/* -------------------------------------------------------------------------
   SHOW PAGE
   ------------------------------------------------------------------------- */
body.show .form-control {
";
        // line 847
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 848
            echo "    background: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
            echo ";
";
        } elseif (("light" ==         // line 849
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 850
            echo "    background: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_lighter", array());
            echo ";
";
        }
        // line 852
        echo "    border: 0;
    border-radius: 0;
    box-shadow: none;
    height: auto;
}
body.show .form-control.text {
    min-height: 34px;
    max-height: 250px;
    overflow-y: auto;
}

/* -------------------------------------------------------------------------
   ERROR PAGES
   ------------------------------------------------------------------------- */
body.error .error-description {
    background: ";
        // line 867
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    border: 1px solid ";
        // line 868
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_lighter", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 869
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
        echo ";
    margin: 2em auto 2em;
    max-width: 90%;
    min-height: 150px;
    padding: 0;
}
body.error .error-description h1 {
    background: ";
        // line 876
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "danger", array());
        echo ";
    color: ";
        // line 877
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
    font-size: 18px;
    font-weight: bold;
    margin-top: 0;
    padding: 10px;
    text-transform: uppercase;
}
body.error .error-message {
    font-size: 16px;
    padding: 15px;
}

/* =========================================================================
   RESPONSIVE
   ========================================================================= */

/* -------------------------------------------------------------------------
   VERTICAL TABLETS and LANDSCAPE SMARTPHONES
   ------------------------------------------------------------------------- */
@media (min-width: 768px) {
    ul, ol {
        margin-left: 2em;
    }

    .main-header > .navbar {
      min-height: 50px;
    }
    .main-header .logo {
        text-align: left;
    }
    .main-header .logo img {
        max-height: 48px;
    }

    .main-header .navbar .sidebar-toggle {
        padding: 15px;
    }
    .navbar-custom-menu .user-menu {
        padding: 17px 15px 13px;
    }
    .navbar-custom-menu .user-menu i {
        padding-right: 4px;
    }

    .main-sidebar {
        padding-top: 50px;
    }

    /* these table styles are needed to override the \"responsive tables\" styles */
    body.list table {
        background: ";
        // line 927
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
        echo ";
        border: 1px solid ";
        // line 928
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "table_border", array());
        echo ";
    }
    body.list table thead {
        display: table-header-group;
    }
    body.list table thead th {
        background: ";
        // line 934
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "table_header", array());
        echo ";
        padding: 0;
    }
    body.list table thead th i {
        color: ";
        // line 938
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray", array());
        echo ";
        padding: 0 3px;
    }
    body.list table thead th a,
    body.list table thead th span {
        color: ";
        // line 943
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "text", array());
        echo ";
        display: block;
        padding: 10px 6px;
        white-space: nowrap;
    }
    body.list table thead th a:hover {
        background: ";
        // line 949
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
        echo ";
        text-decoration: none;
    }
    body.list table thead th.sorted,
    body.list table thead th.sorted a {
";
        // line 954
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 955
            echo "        background: ";
            echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
            echo ";
        color: ";
            // line 956
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
            echo ";
";
        }
        // line 958
        echo "    }
    body.list table thead th.sorted a:hover i,
    body.list table thead th.sorted i {
";
        // line 961
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 962
            echo "        color: ";
            echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "white", array());
            echo ";
";
        } elseif (("light" ==         // line 963
(isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 964
            echo "        color: ";
            echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
            echo ";
";
        }
        // line 966
        echo "    }
    body.list th.boolean, body.list td.boolean,
    body.list th.toggle, body.list td.toggle,
    body.list td.image {
        text-align: center;
    }

    body.list .table thead tr th {
        border-bottom: 2px solid ";
        // line 974
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
        echo ";
    }
    body.list .table thead tr th.sorted {
        border-bottom: 2px outset ";
        // line 977
        echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
        echo ";
    }
    /* these styles are needed to fix some visual glitches when the sort field is the first column */
    body.list .table thead tr th:first-child.sorted {
";
        // line 981
        if (("dark" == (isset($context["color_scheme"]) ? $context["color_scheme"] : $this->getContext($context, "color_scheme")))) {
            // line 982
            echo "        border-left: 1px solid ";
            echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
            echo ";
        border-top: 1px solid ";
            // line 983
            echo (isset($context["brand_color"]) ? $context["brand_color"] : $this->getContext($context, "brand_color"));
            echo ";
";
        }
        // line 985
        echo "    }
    body.list .table tbody {
        border-bottom: 2px double ";
        // line 987
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_light", array());
        echo ";
    }
    body.list table tbody tr {
        border: 0;
        display: table-row;
        margin-bottom: 0;
    }
    body.list table tbody td {
        border-bottom: 0;
        border-top: 1px solid ";
        // line 996
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "table_row_border", array());
        echo ";
        display: table-cell;
        text-align: left;
    }
    table td:before {
        content: none;
        float: none;
    }
    body.list table tbody td.sorted {
        background: ";
        // line 1005
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_lighter", array());
        echo ";
        border-color: ";
        // line 1006
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "table_row_border", array());
        echo ";
    }
    body.list .table tbody tr:hover td {
        background: ";
        // line 1009
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "gray_lighter", array());
        echo ";
    }
    body.list table tbody td.actions a {
        margin-left: 0;
        margin-right: 10px;
    }

    .field-date select + select,
    .field-time select + select,
    .field-datetime select + select {
        margin-left: 2px;
    }

    body.error .error-description {
        max-width: 70%;
    }

    .pagination > li > a,
    .pagination > li > span {
        padding: 6px 12px;
    }

    .form-inline .form-control {
        margin-bottom: 0;
    }

    body.new .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }

    body.edit .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }
}
";
        
        $__internal_0d38252f95fb04e0653b0ea6266fdf2c9ab14bdd499ec5e301160801438972f3->leave($__internal_0d38252f95fb04e0653b0ea6266fdf2c9ab14bdd499ec5e301160801438972f3_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/css/easyadmin.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1414 => 1009,  1408 => 1006,  1404 => 1005,  1392 => 996,  1380 => 987,  1376 => 985,  1371 => 983,  1366 => 982,  1364 => 981,  1357 => 977,  1351 => 974,  1341 => 966,  1335 => 964,  1333 => 963,  1328 => 962,  1326 => 961,  1321 => 958,  1316 => 956,  1311 => 955,  1309 => 954,  1301 => 949,  1292 => 943,  1284 => 938,  1277 => 934,  1268 => 928,  1264 => 927,  1211 => 877,  1207 => 876,  1197 => 869,  1193 => 868,  1189 => 867,  1172 => 852,  1166 => 850,  1164 => 849,  1159 => 848,  1157 => 847,  1101 => 794,  1076 => 772,  1072 => 771,  1066 => 768,  1061 => 766,  1057 => 765,  1053 => 763,  1047 => 761,  1045 => 760,  1040 => 759,  1038 => 758,  980 => 703,  974 => 699,  968 => 697,  966 => 696,  961 => 695,  959 => 694,  955 => 693,  897 => 637,  893 => 635,  891 => 634,  888 => 633,  886 => 632,  878 => 626,  874 => 624,  872 => 623,  869 => 622,  867 => 621,  857 => 613,  852 => 610,  850 => 609,  843 => 606,  841 => 605,  827 => 593,  821 => 591,  819 => 590,  813 => 588,  811 => 587,  801 => 579,  795 => 577,  793 => 576,  788 => 575,  786 => 574,  778 => 568,  772 => 566,  770 => 565,  767 => 564,  765 => 563,  738 => 538,  732 => 536,  730 => 535,  727 => 534,  725 => 533,  716 => 526,  710 => 524,  708 => 523,  703 => 522,  701 => 521,  695 => 517,  690 => 515,  685 => 514,  683 => 513,  679 => 512,  674 => 511,  672 => 510,  643 => 484,  636 => 480,  627 => 474,  613 => 463,  609 => 462,  576 => 432,  572 => 431,  545 => 407,  541 => 406,  524 => 392,  515 => 386,  509 => 383,  503 => 380,  496 => 376,  486 => 369,  475 => 361,  469 => 358,  446 => 338,  427 => 322,  422 => 319,  416 => 317,  414 => 316,  408 => 314,  406 => 313,  397 => 308,  393 => 306,  391 => 305,  386 => 303,  359 => 279,  346 => 269,  341 => 267,  323 => 252,  318 => 250,  301 => 236,  296 => 233,  290 => 231,  288 => 230,  283 => 229,  281 => 228,  256 => 206,  236 => 189,  225 => 181,  221 => 180,  217 => 179,  205 => 170,  201 => 169,  197 => 168,  158 => 132,  149 => 126,  142 => 122,  130 => 113,  124 => 110,  111 => 100,  107 => 99,  101 => 96,  97 => 95,  71 => 72,  64 => 68,  50 => 57,  38 => 47,  35 => 45,  33 => 44,  30 => 43,  28 => 5,  22 => 1,);
    }
}
/* /*! ========================================================================*/
/*     EasyAdmin Default Theme | (c) 2015 Javier Eguiluz | MIT License*/
/*     ======================================================================== *//* */
/* */
/* {% set color_schemes = {*/
/*     'dark': {*/
/*         danger: '#D42124',*/
/*         success: '#006B2E',*/
/*         text: '#222222',*/
/*         text_muted: '#737373',*/
/*         link: '#205081',*/
/*         black: '#111111',*/
/*         white: '#FFFFFF',*/
/*         gray_darker: '#252525',*/
/*         gray_dark: '#444',*/
/*         gray: '#AAA',*/
/*         gray_light: '#CCC',*/
/*         gray_lighter: '#F5F5F5',*/
/*         page_background: '#F5F5F5',*/
/*         table_header: '#EEE',*/
/*         table_border: '#CCC',*/
/*         table_row_border: '#DDD',*/
/*     },*/
/*     'light': {*/
/*         danger: '#D42124',*/
/*         success: '#006B2E',*/
/*         text: '#444444',*/
/*         text_muted: '#737373',*/
/*         link: '#205081',*/
/*         black: '#333333',*/
/*         white: '#FFFFFF',*/
/*         gray_darker: '#444',*/
/*         gray_dark: '#AAA',*/
/*         gray: '#CCC',*/
/*         gray_light: '#F5F5F5',*/
/*         gray_lighter: '#FAFAFA',*/
/*         page_background: '#FFFFFF',*/
/*         table_header: '#FAFAFA',*/
/*         table_border: '#FFFFFF',*/
/*         table_row_border: '#E5E5E5',*/
/*     }*/
/* } %}*/
/* */
/* {% set colors = color_schemes[color_scheme] %}*/
/* */
/* {% autoescape false %}*/
/* */
/* /* -------------------------------------------------------------------------*/
/*    BASIC STYLES*/
/*    ------------------------------------------------------------------------- *//* */
/* body {*/
/*     font-family: Helvetica, "Helvetica Neue", Arial, sans-serif;*/
/* }*/
/* */
/* /* Links*/
/*    ------------------------------------------------------------------------- *//* */
/* a        { color: {{ colors.link }}; }*/
/* a:hover  { opacity: 0.9; }*/
/* a:active { outline: 0; }*/
/* */
/* #main a:active {*/
/*     position: relative;*/
/*     top: 1px;*/
/* }*/
/* */
/* a.text-primary,*/
/* a.text-primary:focus {*/
/*     color: {{ colors.link }};*/
/* }*/
/* a.text-danger,*/
/* a.text-danger:focus {*/
/*     color: {{ colors.danger }};*/
/* }*/
/* a.text-primary:hover,*/
/* a.text-danger:hover {*/
/*     opacity: 0.9;*/
/* }*/
/* */
/* /* Lists*/
/*    ------------------------------------------------------------------------- *//* */
/* ul, ol {*/
/*     margin: 1em 0 1em 1em;*/
/*     padding: 0;*/
/* }*/
/* li {*/
/*     margin-bottom: 1em;*/
/* }*/
/* */
/* /* Flash messages*/
/*    ------------------------------------------------------------------------- *//* */
/* div.flash {*/
/*     padding: .5em;*/
/* }*/
/* div.flash-success {*/
/*     background: {{ colors.success }};*/
/*     color: {{ colors.white }};*/
/* }*/
/* div.flash-error {*/
/*     background: {{ colors.danger }};*/
/*     color: {{ colors.white }};*/
/* }*/
/* div.flash-error strong {*/
/*     padding-right: .5em;*/
/* }*/
/* */
/* /* Labels*/
/*    ------------------------------------------------------------------------- *//* */
/* /* this prevents overriding default styles for labels (label-info, label-primary, etc.) *//* */
/* .label:not([class*=label-]) {*/
/*     background: {{ colors.gray_darker }};*/
/* }*/
/* .label {*/
/*     color: {{ colors.white }};*/
/*     display: inline-block;*/
/*     font-size: 11px;*/
/*     padding: 4px;*/
/*     text-transform: uppercase;*/
/* }*/
/* */
/* .label-success {*/
/*     /* !important is required to override AdminLTE styles *//* */
/*     background: {{ colors.success }} !important;*/
/* }*/
/* .label-danger {*/
/*     /* !important is required to override AdminLTE styles *//* */
/*     background: {{ colors.danger }} !iportant;*/
/* }*/
/* .label-empty {*/
/*     background: transparent;*/
/*     border: 2px dotted;*/
/*     border-radius: 4px;*/
/*     color: {{ colors.gray_light }};*/
/*     padding: 4px 8px;*/
/* }*/
/* */
/* /* this makes boolean labels to be of the same width for most languages *//* */
/* .boolean .label,*/
/* .toggle .label {*/
/*     min-width: 33px;*/
/* }*/
/* */
/* /* Switches / toggles*/
/*    ------------------------------------------------------------------------- *//* */
/* .toggle.btn-xs {*/
/*  width: 44px;*/
/* }*/
/* .toggle-group .btn,*/
/* .toggle-group .btn:hover {*/
/*    border-radius: 3px;*/
/*    font-size: 10px;*/
/*    font-weight: bold;*/
/*    text-transform: uppercase;*/
/* }*/
/* .toggle-group .btn {*/
/*    padding: 4px 6px;*/
/* }*/
/* .toggle-group .btn:hover {*/
/*     border: 0;*/
/* }*/
/* .toggle-group .btn + .btn {*/
/*     margin-left: 0;*/
/* }*/
/* .toggle-group .toggle-on,*/
/* .toggle-group .toggle-on.btn-xs,*/
/* .toggle-group .toggle-on:hover,*/
/* .toggle-group .toggle-on:active,*/
/* .toggle-group .toggle-on:active:hover {*/
/*     background: {{ colors.success }};*/
/*     border-color: {{ colors.success }};*/
/*     color: {{ colors.white }};*/
/*     padding: 4px 5px 4px 0;*/
/*     border: 0;*/
/* }*/
/* .toggle-group .toggle-off,*/
/* .toggle-group .toggle-off.btn-xs,*/
/* .toggle-group .toggle-off:hover,*/
/* .toggle-group .toggle-off:active,*/
/* .toggle-group .toggle-off:active:hover {*/
/*     background: {{ colors.danger }};*/
/*     border-color: {{ colors.danger }};*/
/*     color: {{ colors.white }};*/
/*     padding: 4px 0 4px 5px;*/
/*     border: 0;*/
/* }*/
/* .toggle-group .toggle-handle,*/
/* .toggle-group .toggle-handle:hover,*/
/* .toggle-group .toggle-handle:active,*/
/* .toggle-group .toggle-handle:active:hover {*/
/*     background: {{ colors.gray_lighter }};*/
/*     border: 0;*/
/*     border-radius: 2px;*/
/*     height: 19px;*/
/*     margin-top: 2px;*/
/*     padding: 5px;*/
/* }*/
/* .toggle .btn-success .toggle-handle {*/
/*     box-shadow: -2px 0 1px rgba(0, 0, 0, .2);*/
/* }*/
/* .toggle .btn-danger .toggle-handle {*/
/*     box-shadow: 2px 0 1px rgba(0, 0, 0, .2);*/
/* }*/
/* */
/* /* Badges*/
/*    ------------------------------------------------------------------------- *//* */
/* span.badge {*/
/*     background-color: {{ brand_color }};*/
/* }*/
/* */
/* /* Buttons*/
/*    ------------------------------------------------------------------------- *//* */
/* .btn:focus {*/
/*     outline: none;*/
/* }*/
/* .btn + .btn {*/
/*     margin-left: 5px;*/
/* }*/
/* */
/* button.btn:active {*/
/*     position: relative;*/
/*     top: 1px;*/
/* }*/
/* */
/* .btn,*/
/* .btn:hover,*/
/* .btn:active,*/
/* .btn:focus,*/
/* .btn:active:hover  {*/
/* {% if 'dark' == color_scheme %}*/
/*     background: {{ colors.gray_light }};*/
/* {% elseif 'light' == color_scheme %}*/
/*     background: {{ colors.gray }};*/
/* {% endif %}*/
/*     border: 1px solid transparent;*/
/*     border-radius: 4px;*/
/*     box-shadow: none;*/
/*     color: {{ colors.text }};*/
/*     display: inline-block;*/
/*     line-height: 1.42857143;*/
/*     opacity: 1;*/
/*     outline: none;*/
/*     padding: 6px 12px;*/
/*     text-align: center;*/
/* }*/
/* */
/* .btn-primary,*/
/* .btn-primary:hover,*/
/* .btn-primary:active,*/
/* .btn-primary:focus,*/
/* .btn-primary:active:hover {*/
/*     background-color: {{ brand_color }};*/
/*     border-color: transparent;*/
/*     color: {{ colors.white }};*/
/* }*/
/* .btn-default,*/
/* .btn-default:hover,*/
/* .btn-default:active,*/
/* .btn-default:focus,*/
/* .btn-default:active:hover {*/
/*     border-color: transparent;*/
/* }*/
/* */
/* .btn-danger,*/
/* .btn-danger:hover,*/
/* .btn-danger:active,*/
/* .btn-danger:focus,*/
/* .btn-danger:active:hover {*/
/*     background-color: {{ colors.danger }};*/
/*     border-color: transparent;*/
/*     color: {{ colors.white }};*/
/* }*/
/* */
/* /* .bnt-secondary is for 'buttons' displayed as text links *//* */
/* .btn-secondary,*/
/* .btn-secondary:hover,*/
/* .btn-secondary:active,*/
/* .btn-secondary:focus,*/
/* .btn-secondary:active:hover{*/
/*     background: transparent;*/
/*     color: {{ brand_color }};*/
/*     text-decoration: underline;*/
/* }*/
/* .btn-secondary:hover {*/
/*     text-decoration: none;*/
/* }*/
/* */
/* .btn-primary,*/
/* .btn-danger {*/
/*     font-weight: bold;*/
/* }*/
/* */
/* .btn i {*/
/*     font-size: 16px;*/
/*     margin-right: 2px;*/
/* }*/
/* */
/* /* Forms*/
/*    ------------------------------------------------------------------------- *//* */
/* .form-inline .form-control {*/
/*     margin-bottom: 5px;*/
/* }*/
/* .form-control,*/
/* .form-inline .form-control {*/
/*     border: 1px solid {{ colors.gray }};*/
/*     border-radius: 0;*/
/* {% if 'dark' == color_scheme %}*/
/*     box-shadow: 0 0 3px rgba(0, 0, 0, .15);*/
/* {% endif %}*/
/*     color: {{ colors.text }};*/
/*     -webkit-transition: none;*/
/*     transition: none;*/
/* }*/
/* .form-control:focus {*/
/* {% if 'dark' == color_scheme %}*/
/*     border-color: {{ colors.gray_dark }};*/
/*     box-shadow: 0 0 3px rgba(0, 0, 0, .15);*/
/* {% elseif 'light' == color_scheme %}*/
/*     border-color: {{ colors.gray_darker }};*/
/* {% endif %}*/
/* }*/
/* */
/* .has-error .error-block {*/
/*     color: {{ colors.danger }};*/
/*     font-weight: bold;*/
/*     padding-top: 5px;*/
/* }*/
/* .has-error .error-block .label-danger {*/
/*     margin-right: 3px;*/
/* }*/
/* .has-error .error-block ul {*/
/*     margin: .5em 0 .5em 1.5em;*/
/* }*/
/* .has-error .error-block ul li {*/
/*     margin-bottom: .5em;*/
/* }*/
/* */
/* .help-block,*/
/* .has-error .help-block {*/
/*     color: {{ colors.text_muted }};*/
/*     font-size: 13px;*/
/* }*/
/* .nullable-control {*/
/*    padding-top: 5px;*/
/* }*/
/* */
/* /* Field: collection*/
/*    ------------------------------------------------------------------------- *//* */
/* .field-collection .collection-empty {*/
/*     margin: .5em 0;*/
/* }*/
/* */
/* /* Select2 widget*/
/*    ------------------------------------------------------------------------- *//* */
/* /* these styles must be applied after loading the default select2 styles *//* */
/* .select2-container {*/
/*     width: 100% !important;*/
/* }*/
/* .select2-container--bootstrap .select2-selection {*/
/*     border: 1px solid {{ colors.gray }};*/
/*     border-radius: 0;*/
/*     box-shadow: 0 0 3px rgba(0, 0, 0, .15);*/
/*     color: {{ colors.text }};*/
/*     -webkit-transition: none;*/
/*     transition: none;*/
/* }*/
/* .select2-container--bootstrap .select2-selection .select2-search--inline {*/
/*     margin: 0;*/
/* }*/
/* .select2-container--bootstrap .select2-selection--single .select2-selection__rendered {*/
/*     color: {{ colors.text }};*/
/*     padding-top: 4px;*/
/* }*/
/* .select2-container--bootstrap .select2-results__option {*/
/*     margin-bottom: 0;*/
/* }*/
/* .select2-container--bootstrap .select2-results__option[aria-selected=true] {*/
/*     background-color: {{ colors.gray_light }};*/
/*     font-weight: bold;*/
/* }*/
/* .select2-container--bootstrap .select2-results__option--highlighted[aria-selected] {*/
/*     background-color: {{ brand_color }};*/
/* }*/
/* .select2-container--bootstrap .select2-selection--multiple .select2-selection__choice {*/
/*     color: {{ colors.text }};*/
/* }*/
/* .select2-container--bootstrap .select2-selection--multiple .select2-selection__choice__remove {*/
/*     color: {{ colors.danger }};*/
/*     font-weight: bold;*/
/*     position: relative;*/
/*     top: -1px;*/
/* }*/
/* .select2-container--bootstrap .select2-search--dropdown .select2-search__field {*/
/*     border: 1px solid {{ colors.gray_dark }};*/
/*     border-radius: 0;*/
/*     margin: 5px 10px;*/
/*     padding: 6px;*/
/*     width: 96%;*/
/* }*/
/* .select2-search--inline .select2-search__field:focus {*/
/*     outline: 0;*/
/*     border: 0;*/
/* }*/
/* */
/* /* VichUploaderBundle files and images*/
/*    ------------------------------------------------------------------------- *//* */
/* .easyadmin-vich-image img {*/
/*     border: 3px solid {{ colors.white }};*/
/*     box-shadow: 0 0 3px {{ colors.gray }};*/
/*     max-height: 300px;*/
/*     max-width: 400px;*/
/* }*/
/* .easyadmin-vich-image input[type="file"],*/
/* .easyadmin-vich-file input[type="file"] {*/
/*     padding-top: 7px;*/
/* }*/
/* .easyadmin-vich-file a {*/
/*     display: inline-block;*/
/*     padding-top: 7px;*/
/* }*/
/* /* the checkbox to delete the image/file *//* */
/* .easyadmin-vich-file .field-checkbox {*/
/*     margin-bottom: 0;*/
/* }*/
/* .easyadmin-vich-file .field-checkbox .col-sm-2,*/
/* .easyadmin-vich-image .field-checkbox .col-sm-2 {*/
/*     display: none;*/
/* }*/
/* */
/* /* Thumbnails and image lightbox*/
/*    ------------------------------------------------------------------------- *//* */
/* .easyadmin-thumbnail img {*/
/*     border: 3px solid {{ colors.white }};*/
/*     box-shadow: 0 0 3px {{ colors.gray }};*/
/*     max-height: 100px;*/
/*     max-width: 100%;*/
/* }*/
/* .easyadmin-thumbnail img:hover {*/
/*     cursor: zoom-in;*/
/* }*/
/* .featherlight .easyadmin-lightbox:hover {*/
/*     cursor: zoom-out;*/
/* }*/
/* .easyadmin-lightbox {*/
/*     display: none;*/
/* }*/
/* .featherlight .easyadmin-lightbox {*/
/*     display: block;*/
/* }*/
/* .easyadmin-lightbox img {*/
/*     max-width: 100%;*/
/* }*/
/* */
/* /* Modal windows*/
/*    ------------------------------------------------------------------------- *//* */
/* .modal-dialog .modal-content {*/
/*     border-radius: 0;*/
/* }*/
/* .modal-dialog .modal-content .modal-body h4 {*/
/*     font-size: 21px;*/
/*     margin: .5em 0;*/
/* }*/
/* .modal-dialog .modal-footer {*/
/*     background: {{ colors.gray_lighter }};*/
/*     border-top: 1px solid {{ colors.gray_light }};*/
/*     margin-top: 1.5em;*/
/* }*/
/* */
/* /* -------------------------------------------------------------------------*/
/*    LAYOUT*/
/*    ------------------------------------------------------------------------- *//* */
/* */
/* /* Wrapper*/
/*    ------------------------------------------------------------------------- *//* */
/* .content-wrapper {*/
/*     background: {{ colors.page_background }};*/
/* }*/
/* */
/* /* Header*/
/*    ------------------------------------------------------------------------- *//* */
/* .main-header {*/
/*     background: {{ brand_color }};*/
/* }*/
/* .main-header .logo {*/
/*     background: rgba(0, 0, 0, 0.15);*/
/*     color: {{ colors.white }};*/
/*     font-family: Helvetica, "Helvetica Neue", Arial, sans-serif; /* needed to override AdminLTE styles *//* */
/*     font-weight: bold;*/
/* }*/
/* .main-header .logo-lg {*/
/*     overflow: hidden;*/
/*     text-overflow: ellipsis;*/
/*     white-space: nowrap;*/
/* }*/
/* .main-header .logo-mini {*/
/*     font-weight: bold;*/
/*     text-align: center;*/
/* }*/
/* .main-header .logo-long .logo-lg {*/
/*     font-size: 16px;*/
/* }*/
/* .main-header > img {*/
/*     margin-top: -2px;*/
/*     max-height: 26px;*/
/*     max-width: 94%;*/
/* }*/
/* .main-header li {*/
/*     margin-bottom: 0;*/
/* }*/
/* */
/* .main-header > .navbar {*/
/* {% if 'dark' == color_scheme %}*/
/*     background-color: {{ brand_color }};*/
/*     color: {{ colors.white }};*/
/* {% elseif 'light' == color_scheme %}*/
/*     background-color: {{ colors.gray_light }};*/
/*     color: {{ brand_color }};*/
/* {% endif %}*/
/*     min-height: 40px;*/
/* }*/
/* */
/* .main-header .navbar .sidebar-toggle {*/
/* {% if 'dark' == color_scheme %}*/
/*     color: {{ colors.white }};*/
/* {% elseif 'light' == color_scheme %}*/
/*     color: {{ colors.text_muted }};*/
/* {% endif %}*/
/*     padding: 10px;*/
/* }*/
/* .main-header .navbar .sidebar-toggle:hover {*/
/*     background: rgba(0, 0, 0, 0.15);*/
/* }*/
/* */
/* .navbar-custom-menu .user-menu {*/
/* {% if 'dark' == color_scheme %}*/
/*     color: rgba(255, 255, 255, 0.8);*/
/* {% elseif 'light' == color_scheme %}*/
/*     color: {{ colors.text_muted }};*/
/* {% endif %}*/
/*     font-size: 13px;*/
/*     font-weight: bold;*/
/*     padding: 10px;*/
/* }*/
/* */
/* /* Main body*/
/*    ------------------------------------------------------------------------- *//* */
/* #content #main {*/
/*     padding-bottom: 3em;*/
/* }*/
/* .content {*/
/*     padding-top: 10px;*/
/* }*/
/* .content-header {*/
/*     padding: 12px 15px 0 15px;*/
/* }*/
/* .content-header h1 {*/
/*     margin: 0;*/
/*     font-size: 24px;*/
/* }*/
/* */
/* /* Sidebar*/
/*    ------------------------------------------------------------------------- *//* */
/* .main-sidebar,*/
/* .wrapper {*/
/* {% if 'dark' == color_scheme %}*/
/*     background-color: rgb(34, 34, 34);*/
/* {% elseif 'light' == color_scheme %}*/
/*     background-color: {{ colors.gray_light }};*/
/* {% endif %}*/
/* }*/
/* .main-sidebar {*/
/*     padding-top: 90px;*/
/* }*/
/* */
/* .sidebar-menu > li.header {*/
/* {% if 'dark' == color_scheme %}*/
/*     color: {{ colors.white }};*/
/* {% elseif 'light' == color_scheme %}*/
/*     color: {{ colors.black }};*/
/* {% endif %}*/
/*     font-size: 12px;*/
/*     font-weight: bold;*/
/*     opacity: 0.4;*/
/*     text-transform: uppercase;*/
/* }*/
/* */
/* .sidebar-menu > li > a,*/
/* .sidebar-menu .treeview-menu > li > a {*/
/* {% if 'dark' == color_scheme %}*/
/*     color: {{ colors.white }};*/
/*     opacity: 0.8;*/
/* {% elseif 'light' == color_scheme %}*/
/*     color: {{ colors.gray_darker }};*/
/* {% endif %}*/
/*     border-left: 3px solid transparent;*/
/*     display: block;*/
/*     font-weight: bold;*/
/* }*/
/* .sidebar-menu .treeview-menu > li > a {*/
/*     font-size: 13px;*/
/*     padding: 8px 5px 8px 25px;*/
/* }*/
/* .sidebar-menu > li:hover > a,*/
/* .sidebar-menu > li.active > a,*/
/* .sidebar-menu .treeview-menu > li:hover > a,*/
/* .sidebar-menu .treeview-menu > li.active > a {*/
/* {% if 'dark' == color_scheme %}*/
/*     color: {{ colors.white }};*/
/*     background: rgb(15, 15, 15);*/
/*     border-left-color: rgb(115, 115, 115);*/
/* {% elseif 'light' == color_scheme %}*/
/*     background: rgb(200, 200, 200);*/
/*     border-left-color: rgb(128, 128, 128);*/
/* {% endif %}*/
/*     opacity: 1;*/
/* }*/
/* */
/* .sidebar-menu > li > a > .fa {*/
/*     width: 22px;*/
/* }*/
/* */
/* .sidebar-menu .treeview-menu {*/
/* {% if 'dark' == color_scheme %}*/
/*     background: rgb(60, 60, 60);*/
/* {% elseif 'light' == color_scheme %}*/
/*     background: rgb(220, 220, 220);*/
/* {% endif %}*/
/*     margin: 0;*/
/*     padding: 0;*/
/* }*/
/* */
/* /* applied to the menu item which is active and has its submenu revealed *//* */
/* .sidebar-menu > li.active.submenu-active > a {*/
/* {% if 'dark' == color_scheme %}*/
/*     background: rgb(34, 34, 34);*/
/* {% elseif 'light' == color_scheme %}*/
/*     background: rgb(220, 220, 220);*/
/* {% endif %}*/
/*     border-left-color: transparent;*/
/* }*/
/* /* icon displayed for collapsed submenus *//* */
/* .sidebar-menu li > a > .pull-right {*/
/*     font-weight: bold;*/
/*     text-align: right;*/
/* }*/
/* /* icon displayed for revealed submenus *//* */
/* .sidebar-menu li.active > a > .fa-angle-left {*/
/*     top: 30px;*/
/*     right: 0;*/
/* }*/
/* /* when the sidebar is collapsed, make the icons wider to just display them and not the labels *//* */
/* .sidebar-collapse .sidebar-menu > li > a > .fa {*/
/*     width: 28px;*/
/* }*/
/* */
/* /* -------------------------------------------------------------------------*/
/*    COMMON ADMIN PAGES*/
/*    ------------------------------------------------------------------------- *//* */
/* body.easyadmin h1.title {*/
/*     margin-bottom: 10px;*/
/* }*/
/* */
/* /* -------------------------------------------------------------------------*/
/*    LIST PAGE*/
/*    ------------------------------------------------------------------------- *//* */
/* body.list .global-actions {*/
/*     text-align: right;*/
/* }*/
/* body.list .global-actions .form-control {*/
/*     box-shadow: none;*/
/* }*/
/* body.list .global-actions .input-group-btn > button.btn:not(:last-child) {*/
/*     border-bottom-right-radius: 3px;*/
/*     border-top-right-radius: 3px;*/
/* }*/
/* body.list .global-actions .input-group-btn a.btn {*/
/*     border-radius: 3px;*/
/*     margin-left: 10px;*/
/* }*/
/* */
/* /* Responsive tables*/
/*    ------------------------------------------------------------------------- *//* */
/* body.list table {*/
/*     background: transparent;*/
/*     border: 0;*/
/* }*/
/* body.list table thead {*/
/*     display: none;*/
/* }*/
/* body.list .table tbody {*/
/*     background: transparent;*/
/*     border: 0;*/
/* }*/
/* body.list table tbody tr {*/
/*     background: {{ colors.white }};*/
/* {% if 'dark' == color_scheme %}*/
/*     border: 1px solid {{ colors.gray_light }};*/
/* {% elseif 'light' == color_scheme %}*/
/*     border: 1px solid {{ colors.gray }};*/
/* {% endif %}*/
/*     display: block;*/
/*     margin-bottom: 1em;*/
/* }*/
/* body.list table tbody td {*/
/*     border-bottom: 1px solid {{ colors.table_row_border }};*/
/*     border-top: 0;*/
/*     display: block;*/
/*     text-align: right;*/
/*     vertical-align: middle;*/
/* }*/
/* body.list table tbody td:last-child {*/
/*     border-bottom: 0;*/
/* }*/
/* table td:before {*/
/*     content: attr(data-label);*/
/*     float: left;*/
/*     font-weight: bold;*/
/* }*/
/* table td:after {*/
/*     clear: both;*/
/*     content: "";*/
/*     display: block;*/
/* }*/
/* */
/* body.list table tbody td.image .easyadmin-thumbnail img {*/
/*     border-width: 2px;*/
/*     max-height: 50px;*/
/*     max-width: 150px;*/
/* }*/
/* body.list table tbody td.association .badge {*/
/*     font-size: 13px;*/
/* }*/
/* body.list table tbody td.actions a {*/
/*     font-weight: bold;*/
/*     margin-left: 10px;*/
/* }*/
/* */
/* /* Search results*/
/*    ------------------------------------------------------------------------- *//* */
/* body.list .table tbody span.highlight {*/
/*     background: #FF9;*/
/*     border-radius: 2px;*/
/*     padding: 1px;*/
/* }*/
/* body.list .table tbody .no-results span.highlight,*/
/* body.list .table tbody .actions span.highlight {*/
/*     background: 0;*/
/*     border-radius: 0;*/
/* }*/
/* */
/* /* Pagination*/
/*    ------------------------------------------------------------------------- *//* */
/* body.list .pagination {*/
/*     float: right;*/
/*     margin: 0;*/
/* }*/
/* body.list .pagination > .disabled > span {*/
/*     background: transparent;*/
/*     border: 1px solid transparent;*/
/* {% if 'dark' == color_scheme %}*/
/*     color: {{ colors.text_muted }};*/
/* {% elseif 'light' == color_scheme %}*/
/*     color: {{ colors.gray }};*/
/* {% endif %}*/
/* }*/
/* body.list .pagination > li > a {*/
/*     background: {{ colors.white }};*/
/*     border-color: {{ colors.gray_light }};*/
/*     border-radius: 0;*/
/*     color: {{ colors.text }};*/
/* }*/
/* body.list .pagination > li > a:hover {*/
/*     background: {{ brand_color }};*/
/*     color: {{ colors.white }};*/
/* }*/
/* .pagination > li > a,*/
/* .pagination > li > span {*/
/*     padding: 6px 8px;*/
/* }*/
/* body.list .pagination > li i {*/
/*     padding: 0 3px;*/
/* }*/
/* /* this hack is needed to avoid the last pagination page from showing wrong*/
/*    borders for the second pagination element (we need to put this element above*/
/*    the third element) *//* */
/* body.list .pagination.last-page li:nth-child(2) {*/
/*     position: relative;*/
/*     z-index: 1;*/
/* }*/
/* */
/* /* -------------------------------------------------------------------------*/
/*    FORM PAGE*/
/*    ------------------------------------------------------------------------- *//* */
/* form label.control-label.required:after {*/
/*     content: "\00a0*";*/
/*     color: {{ colors.danger }};*/
/*     font-size: 16px;*/
/*     position: absolute;*/
/* }*/
/* */
/* /* -------------------------------------------------------------------------*/
/*    NEW PAGE*/
/*    ------------------------------------------------------------------------- *//* */
/* body.new textarea {*/
/*     min-height: 250px;*/
/* }*/
/* body.new .field-collection-action {*/
/*     margin: -15px 0 10px;*/
/* }*/
/* body.new .field-collection-item-action {*/
/*     margin: 5px 0 0;*/
/* }*/
/* */
/* body.new #form-actions-row button,*/
/* body.new #form-actions-row a.btn {*/
/*     margin-bottom: 10px;*/
/* }*/
/* body.new .form-horizontal #form-actions-row {*/
/*     padding-left: 15px;*/
/*     padding-right: 15px;*/
/* }*/
/* */
/* /* -------------------------------------------------------------------------*/
/*    EDIT PAGE*/
/*    ------------------------------------------------------------------------- *//* */
/* body.edit textarea {*/
/*     min-height: 250px;*/
/* }*/
/* body.edit .field-collection-action {*/
/*     margin: -15px 0 10px;*/
/* }*/
/* body.edit .field-collection-item-action {*/
/*     margin: 5px 0 0;*/
/* }*/
/* */
/* body.edit #form-actions-row button,*/
/* body.edit #form-actions-row a.btn {*/
/*     margin-bottom: 10px;*/
/* }*/
/* body.edit .form-horizontal #form-actions-row {*/
/*     padding-left: 15px;*/
/*     padding-right: 15px;*/
/* }*/
/* */
/* /* -------------------------------------------------------------------------*/
/*    SHOW PAGE*/
/*    ------------------------------------------------------------------------- *//* */
/* body.show .form-control {*/
/* {% if 'dark' == color_scheme %}*/
/*     background: {{ colors.white }};*/
/* {% elseif 'light' == color_scheme %}*/
/*     background: {{ colors.gray_lighter }};*/
/* {% endif %}*/
/*     border: 0;*/
/*     border-radius: 0;*/
/*     box-shadow: none;*/
/*     height: auto;*/
/* }*/
/* body.show .form-control.text {*/
/*     min-height: 34px;*/
/*     max-height: 250px;*/
/*     overflow-y: auto;*/
/* }*/
/* */
/* /* -------------------------------------------------------------------------*/
/*    ERROR PAGES*/
/*    ------------------------------------------------------------------------- *//* */
/* body.error .error-description {*/
/*     background: {{ colors.white }};*/
/*     border: 1px solid {{ colors.gray_lighter }};*/
/*     box-shadow: 0 0 3px {{ colors.gray_light }};*/
/*     margin: 2em auto 2em;*/
/*     max-width: 90%;*/
/*     min-height: 150px;*/
/*     padding: 0;*/
/* }*/
/* body.error .error-description h1 {*/
/*     background: {{ colors.danger }};*/
/*     color: {{ colors.white }};*/
/*     font-size: 18px;*/
/*     font-weight: bold;*/
/*     margin-top: 0;*/
/*     padding: 10px;*/
/*     text-transform: uppercase;*/
/* }*/
/* body.error .error-message {*/
/*     font-size: 16px;*/
/*     padding: 15px;*/
/* }*/
/* */
/* /* =========================================================================*/
/*    RESPONSIVE*/
/*    ========================================================================= *//* */
/* */
/* /* -------------------------------------------------------------------------*/
/*    VERTICAL TABLETS and LANDSCAPE SMARTPHONES*/
/*    ------------------------------------------------------------------------- *//* */
/* @media (min-width: 768px) {*/
/*     ul, ol {*/
/*         margin-left: 2em;*/
/*     }*/
/* */
/*     .main-header > .navbar {*/
/*       min-height: 50px;*/
/*     }*/
/*     .main-header .logo {*/
/*         text-align: left;*/
/*     }*/
/*     .main-header .logo img {*/
/*         max-height: 48px;*/
/*     }*/
/* */
/*     .main-header .navbar .sidebar-toggle {*/
/*         padding: 15px;*/
/*     }*/
/*     .navbar-custom-menu .user-menu {*/
/*         padding: 17px 15px 13px;*/
/*     }*/
/*     .navbar-custom-menu .user-menu i {*/
/*         padding-right: 4px;*/
/*     }*/
/* */
/*     .main-sidebar {*/
/*         padding-top: 50px;*/
/*     }*/
/* */
/*     /* these table styles are needed to override the "responsive tables" styles *//* */
/*     body.list table {*/
/*         background: {{ colors.white }};*/
/*         border: 1px solid {{ colors.table_border }};*/
/*     }*/
/*     body.list table thead {*/
/*         display: table-header-group;*/
/*     }*/
/*     body.list table thead th {*/
/*         background: {{ colors.table_header }};*/
/*         padding: 0;*/
/*     }*/
/*     body.list table thead th i {*/
/*         color: {{ colors.gray }};*/
/*         padding: 0 3px;*/
/*     }*/
/*     body.list table thead th a,*/
/*     body.list table thead th span {*/
/*         color: {{ colors.text }};*/
/*         display: block;*/
/*         padding: 10px 6px;*/
/*         white-space: nowrap;*/
/*     }*/
/*     body.list table thead th a:hover {*/
/*         background: {{ colors.gray_light }};*/
/*         text-decoration: none;*/
/*     }*/
/*     body.list table thead th.sorted,*/
/*     body.list table thead th.sorted a {*/
/* {% if 'dark' == color_scheme %}*/
/*         background: {{ brand_color }};*/
/*         color: {{ colors.white }};*/
/* {% endif %}*/
/*     }*/
/*     body.list table thead th.sorted a:hover i,*/
/*     body.list table thead th.sorted i {*/
/* {% if 'dark' == color_scheme %}*/
/*         color: {{ colors.white }};*/
/* {% elseif 'light' == color_scheme %}*/
/*         color: {{ brand_color }};*/
/* {% endif %}*/
/*     }*/
/*     body.list th.boolean, body.list td.boolean,*/
/*     body.list th.toggle, body.list td.toggle,*/
/*     body.list td.image {*/
/*         text-align: center;*/
/*     }*/
/* */
/*     body.list .table thead tr th {*/
/*         border-bottom: 2px solid {{ colors.gray_light }};*/
/*     }*/
/*     body.list .table thead tr th.sorted {*/
/*         border-bottom: 2px outset {{ brand_color }};*/
/*     }*/
/*     /* these styles are needed to fix some visual glitches when the sort field is the first column *//* */
/*     body.list .table thead tr th:first-child.sorted {*/
/* {% if 'dark' == color_scheme %}*/
/*         border-left: 1px solid {{ brand_color }};*/
/*         border-top: 1px solid {{ brand_color }};*/
/* {% endif %}*/
/*     }*/
/*     body.list .table tbody {*/
/*         border-bottom: 2px double {{ colors.gray_light }};*/
/*     }*/
/*     body.list table tbody tr {*/
/*         border: 0;*/
/*         display: table-row;*/
/*         margin-bottom: 0;*/
/*     }*/
/*     body.list table tbody td {*/
/*         border-bottom: 0;*/
/*         border-top: 1px solid {{ colors.table_row_border }};*/
/*         display: table-cell;*/
/*         text-align: left;*/
/*     }*/
/*     table td:before {*/
/*         content: none;*/
/*         float: none;*/
/*     }*/
/*     body.list table tbody td.sorted {*/
/*         background: {{ colors.gray_lighter }};*/
/*         border-color: {{ colors.table_row_border }};*/
/*     }*/
/*     body.list .table tbody tr:hover td {*/
/*         background: {{ colors.gray_lighter }};*/
/*     }*/
/*     body.list table tbody td.actions a {*/
/*         margin-left: 0;*/
/*         margin-right: 10px;*/
/*     }*/
/* */
/*     .field-date select + select,*/
/*     .field-time select + select,*/
/*     .field-datetime select + select {*/
/*         margin-left: 2px;*/
/*     }*/
/* */
/*     body.error .error-description {*/
/*         max-width: 70%;*/
/*     }*/
/* */
/*     .pagination > li > a,*/
/*     .pagination > li > span {*/
/*         padding: 6px 12px;*/
/*     }*/
/* */
/*     .form-inline .form-control {*/
/*         margin-bottom: 0;*/
/*     }*/
/* */
/*     body.new .form-horizontal #form-actions-row {*/
/*         margin-left: 16.66666667%;*/
/*     }*/
/* */
/*     body.edit .form-horizontal #form-actions-row {*/
/*         margin-left: 16.66666667%;*/
/*     }*/
/* }*/
/* {% endautoescape %}*/
/* */
