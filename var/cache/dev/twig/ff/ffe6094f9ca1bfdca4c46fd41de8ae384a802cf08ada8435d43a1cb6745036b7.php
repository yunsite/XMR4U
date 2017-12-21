<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_58482c6193bb308d1945debefda76aadfe9b8b9a4f5e47c98745706c2154006d extends Twig_Template
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
        $__internal_0a7cd7f8a1a2b4f78fbed75ce5814f91f756c4f9b33f5d2e6283074377e1c217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a7cd7f8a1a2b4f78fbed75ce5814f91f756c4f9b33f5d2e6283074377e1c217->enter($__internal_0a7cd7f8a1a2b4f78fbed75ce5814f91f756c4f9b33f5d2e6283074377e1c217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_b93f4a984314475326cad7e228db743bf39c614bd207ac5b893432b54a7d63d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b93f4a984314475326cad7e228db743bf39c614bd207ac5b893432b54a7d63d9->enter($__internal_b93f4a984314475326cad7e228db743bf39c614bd207ac5b893432b54a7d63d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0a7cd7f8a1a2b4f78fbed75ce5814f91f756c4f9b33f5d2e6283074377e1c217->leave($__internal_0a7cd7f8a1a2b4f78fbed75ce5814f91f756c4f9b33f5d2e6283074377e1c217_prof);

        
        $__internal_b93f4a984314475326cad7e228db743bf39c614bd207ac5b893432b54a7d63d9->leave($__internal_b93f4a984314475326cad7e228db743bf39c614bd207ac5b893432b54a7d63d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
