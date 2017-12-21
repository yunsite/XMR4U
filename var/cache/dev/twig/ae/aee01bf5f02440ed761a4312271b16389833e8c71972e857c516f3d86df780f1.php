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
        $__internal_5a4f55b9a72350813c71660183fb4a5f789b559187b125e8c92c761c8b0aa961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a4f55b9a72350813c71660183fb4a5f789b559187b125e8c92c761c8b0aa961->enter($__internal_5a4f55b9a72350813c71660183fb4a5f789b559187b125e8c92c761c8b0aa961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_f5012cc1ceb5d3cca74d9173c6ca5a20f7f7adec12d0e014e319a2b2934242bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5012cc1ceb5d3cca74d9173c6ca5a20f7f7adec12d0e014e319a2b2934242bd->enter($__internal_f5012cc1ceb5d3cca74d9173c6ca5a20f7f7adec12d0e014e319a2b2934242bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_5a4f55b9a72350813c71660183fb4a5f789b559187b125e8c92c761c8b0aa961->leave($__internal_5a4f55b9a72350813c71660183fb4a5f789b559187b125e8c92c761c8b0aa961_prof);

        
        $__internal_f5012cc1ceb5d3cca74d9173c6ca5a20f7f7adec12d0e014e319a2b2934242bd->leave($__internal_f5012cc1ceb5d3cca74d9173c6ca5a20f7f7adec12d0e014e319a2b2934242bd_prof);

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
