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
        $__internal_4070d3a4c75f0c6bf0c1dbfab00a0482752b5ecde3f64f21f89e94e8d70aeb1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4070d3a4c75f0c6bf0c1dbfab00a0482752b5ecde3f64f21f89e94e8d70aeb1a->enter($__internal_4070d3a4c75f0c6bf0c1dbfab00a0482752b5ecde3f64f21f89e94e8d70aeb1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_d0ed0377156bf685aa1f8804c7917a17c047284d83f28fa42ad2eb34d4c8187e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0ed0377156bf685aa1f8804c7917a17c047284d83f28fa42ad2eb34d4c8187e->enter($__internal_d0ed0377156bf685aa1f8804c7917a17c047284d83f28fa42ad2eb34d4c8187e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_4070d3a4c75f0c6bf0c1dbfab00a0482752b5ecde3f64f21f89e94e8d70aeb1a->leave($__internal_4070d3a4c75f0c6bf0c1dbfab00a0482752b5ecde3f64f21f89e94e8d70aeb1a_prof);

        
        $__internal_d0ed0377156bf685aa1f8804c7917a17c047284d83f28fa42ad2eb34d4c8187e->leave($__internal_d0ed0377156bf685aa1f8804c7917a17c047284d83f28fa42ad2eb34d4c8187e_prof);

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
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
