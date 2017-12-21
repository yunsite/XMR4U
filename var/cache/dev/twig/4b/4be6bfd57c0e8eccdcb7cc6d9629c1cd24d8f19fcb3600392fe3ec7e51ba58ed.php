<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_f11648a3ad86d05c7b1c6e0b8ec1a40bfe9061b42130805ff6b2a7f3b829a673 extends Twig_Template
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
        $__internal_90917cd6a5f416730f6f0d89fae7e91ede02007cf1442322293faaeee911c3d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90917cd6a5f416730f6f0d89fae7e91ede02007cf1442322293faaeee911c3d1->enter($__internal_90917cd6a5f416730f6f0d89fae7e91ede02007cf1442322293faaeee911c3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_84b9a076502486bf49ec4ad57cbb2f8e5c41de96e391b890b87a50514bfe2861 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84b9a076502486bf49ec4ad57cbb2f8e5c41de96e391b890b87a50514bfe2861->enter($__internal_84b9a076502486bf49ec4ad57cbb2f8e5c41de96e391b890b87a50514bfe2861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_90917cd6a5f416730f6f0d89fae7e91ede02007cf1442322293faaeee911c3d1->leave($__internal_90917cd6a5f416730f6f0d89fae7e91ede02007cf1442322293faaeee911c3d1_prof);

        
        $__internal_84b9a076502486bf49ec4ad57cbb2f8e5c41de96e391b890b87a50514bfe2861->leave($__internal_84b9a076502486bf49ec4ad57cbb2f8e5c41de96e391b890b87a50514bfe2861_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/form_row.html.php");
    }
}
