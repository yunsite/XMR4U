<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_6fdcdbcb49e95c193a36e8e3df15041ac6ca97855a119aab34bdcfa3625d58e7 extends Twig_Template
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
        $__internal_4e34c1dd50f06c7fa3b902dab0cbdc59d5fbaa67ebc917907537614c35ac4909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e34c1dd50f06c7fa3b902dab0cbdc59d5fbaa67ebc917907537614c35ac4909->enter($__internal_4e34c1dd50f06c7fa3b902dab0cbdc59d5fbaa67ebc917907537614c35ac4909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_3fd9250fc0d28bceb8d526ad690ba6b845ac64befe7b441f5029d1fa7c16a299 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fd9250fc0d28bceb8d526ad690ba6b845ac64befe7b441f5029d1fa7c16a299->enter($__internal_3fd9250fc0d28bceb8d526ad690ba6b845ac64befe7b441f5029d1fa7c16a299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_4e34c1dd50f06c7fa3b902dab0cbdc59d5fbaa67ebc917907537614c35ac4909->leave($__internal_4e34c1dd50f06c7fa3b902dab0cbdc59d5fbaa67ebc917907537614c35ac4909_prof);

        
        $__internal_3fd9250fc0d28bceb8d526ad690ba6b845ac64befe7b441f5029d1fa7c16a299->leave($__internal_3fd9250fc0d28bceb8d526ad690ba6b845ac64befe7b441f5029d1fa7c16a299_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
