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
        $__internal_b691ccd63e495dd0ee3910614e747f6d875e36b97518f7983d466c4b594efeeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b691ccd63e495dd0ee3910614e747f6d875e36b97518f7983d466c4b594efeeb->enter($__internal_b691ccd63e495dd0ee3910614e747f6d875e36b97518f7983d466c4b594efeeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_8b26935690807547de5cc10b9b0d433de7c5c3c4131b8523c7a13749c42fb2ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b26935690807547de5cc10b9b0d433de7c5c3c4131b8523c7a13749c42fb2ae->enter($__internal_8b26935690807547de5cc10b9b0d433de7c5c3c4131b8523c7a13749c42fb2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b691ccd63e495dd0ee3910614e747f6d875e36b97518f7983d466c4b594efeeb->leave($__internal_b691ccd63e495dd0ee3910614e747f6d875e36b97518f7983d466c4b594efeeb_prof);

        
        $__internal_8b26935690807547de5cc10b9b0d433de7c5c3c4131b8523c7a13749c42fb2ae->leave($__internal_8b26935690807547de5cc10b9b0d433de7c5c3c4131b8523c7a13749c42fb2ae_prof);

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
