<?php

/* @IvoryCKEditor/Form/ckeditor_widget.html.php */
class __TwigTemplate_6f05c88dcd7b638e97ed032d3f2aeda7250ab2007c3e7ba2c6336eba36394291 extends Twig_Template
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
        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable) : ?>
    <?php if (\$autoload) : ?>
        <script type=\"text/javascript\">
            var CKEDITOR_BASEPATH = \"<?php echo \$view['ivory_ckeditor']->renderBasePath(\$base_path); ?>\";
        </script>
        <script type=\"text/javascript\" src=\"<?php echo \$view['ivory_ckeditor']->renderJsPath(\$js_path); ?>\"></script>
        <?php if (\$jquery) : ?>
            <script type=\"text/javascript\" src=\"<?php echo \$view['ivory_ckeditor']->renderJsPath(\$jquery_path); ?>\"></script>
        <?php endif; ?>
    <?php endif; ?>
    <script type=\"text/javascript\">
        <?php if (\$jquery) : ?>
            \$(function () {
        <?php endif; ?>

        <?php echo \$view['ivory_ckeditor']->renderDestroy(\$id); ?>

        <?php foreach (\$plugins as \$pluginName => \$plugin): ?>
            <?php echo \$view['ivory_ckeditor']->renderPlugin(\$pluginName, \$plugin); ?>
        <?php endforeach; ?>

        <?php foreach (\$styles as \$styleName => \$style): ?>
            <?php echo \$view['ivory_ckeditor']->renderStylesSet(\$styleName, \$style); ?>
        <?php endforeach; ?>

        <?php foreach (\$templates as \$templateName => \$template): ?>
            <?php echo \$view['ivory_ckeditor']->renderTemplate(\$templateName, \$template); ?>
        <?php endforeach; ?>

        <?php echo \$view['ivory_ckeditor']->renderWidget(\$id, \$config, array('auto_inline' => \$auto_inline, 'inline' => \$inline, 'input_sync' => \$input_sync)); ?>

        <?php if (\$jquery) : ?>
            });
        <?php endif; ?>
    </script>
<?php endif; ?>
";
    }

    public function getTemplateName()
    {
        return "@IvoryCKEditor/Form/ckeditor_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'attributes') ?>><?php echo htmlspecialchars($value) ?></textarea>*/
/* */
/* <?php if ($enable) : ?>*/
/*     <?php if ($autoload) : ?>*/
/*         <script type="text/javascript">*/
/*             var CKEDITOR_BASEPATH = "<?php echo $view['ivory_ckeditor']->renderBasePath($base_path); ?>";*/
/*         </script>*/
/*         <script type="text/javascript" src="<?php echo $view['ivory_ckeditor']->renderJsPath($js_path); ?>"></script>*/
/*         <?php if ($jquery) : ?>*/
/*             <script type="text/javascript" src="<?php echo $view['ivory_ckeditor']->renderJsPath($jquery_path); ?>"></script>*/
/*         <?php endif; ?>*/
/*     <?php endif; ?>*/
/*     <script type="text/javascript">*/
/*         <?php if ($jquery) : ?>*/
/*             $(function () {*/
/*         <?php endif; ?>*/
/* */
/*         <?php echo $view['ivory_ckeditor']->renderDestroy($id); ?>*/
/* */
/*         <?php foreach ($plugins as $pluginName => $plugin): ?>*/
/*             <?php echo $view['ivory_ckeditor']->renderPlugin($pluginName, $plugin); ?>*/
/*         <?php endforeach; ?>*/
/* */
/*         <?php foreach ($styles as $styleName => $style): ?>*/
/*             <?php echo $view['ivory_ckeditor']->renderStylesSet($styleName, $style); ?>*/
/*         <?php endforeach; ?>*/
/* */
/*         <?php foreach ($templates as $templateName => $template): ?>*/
/*             <?php echo $view['ivory_ckeditor']->renderTemplate($templateName, $template); ?>*/
/*         <?php endforeach; ?>*/
/* */
/*         <?php echo $view['ivory_ckeditor']->renderWidget($id, $config, array('auto_inline' => $auto_inline, 'inline' => $inline, 'input_sync' => $input_sync)); ?>*/
/* */
/*         <?php if ($jquery) : ?>*/
/*             });*/
/*         <?php endif; ?>*/
/*     </script>*/
/* <?php endif; ?>*/
/* */
