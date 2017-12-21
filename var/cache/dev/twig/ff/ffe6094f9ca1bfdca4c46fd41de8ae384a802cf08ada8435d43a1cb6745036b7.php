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
        $__internal_361b6d53858793f5df6469d1ab62695e3efb96fcb3c493f112ffe119d63ac68b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_361b6d53858793f5df6469d1ab62695e3efb96fcb3c493f112ffe119d63ac68b->enter($__internal_361b6d53858793f5df6469d1ab62695e3efb96fcb3c493f112ffe119d63ac68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_4a3260d688f672b4d71c49cb2a4295b6f2e3adb127c6fe91dec93122d1586fc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a3260d688f672b4d71c49cb2a4295b6f2e3adb127c6fe91dec93122d1586fc8->enter($__internal_4a3260d688f672b4d71c49cb2a4295b6f2e3adb127c6fe91dec93122d1586fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_361b6d53858793f5df6469d1ab62695e3efb96fcb3c493f112ffe119d63ac68b->leave($__internal_361b6d53858793f5df6469d1ab62695e3efb96fcb3c493f112ffe119d63ac68b_prof);

        
        $__internal_4a3260d688f672b4d71c49cb2a4295b6f2e3adb127c6fe91dec93122d1586fc8->leave($__internal_4a3260d688f672b4d71c49cb2a4295b6f2e3adb127c6fe91dec93122d1586fc8_prof);

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
", "@Framework/Form/checkbox_widget.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
