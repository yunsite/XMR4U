<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_c647f4f8918e305f2c80c2c4f4824a7e15466ec74778cba3d33877716e346970 extends Twig_Template
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
        $__internal_0a7404de393c5cd8e2c5343935281c65f2433ef20170c78b5926c6bdf4f85bd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a7404de393c5cd8e2c5343935281c65f2433ef20170c78b5926c6bdf4f85bd2->enter($__internal_0a7404de393c5cd8e2c5343935281c65f2433ef20170c78b5926c6bdf4f85bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_85a6f6fb0674a17feb8951aee93d0e3b420d256e85d0bb4b1c26a9af17c047df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85a6f6fb0674a17feb8951aee93d0e3b420d256e85d0bb4b1c26a9af17c047df->enter($__internal_85a6f6fb0674a17feb8951aee93d0e3b420d256e85d0bb4b1c26a9af17c047df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0a7404de393c5cd8e2c5343935281c65f2433ef20170c78b5926c6bdf4f85bd2->leave($__internal_0a7404de393c5cd8e2c5343935281c65f2433ef20170c78b5926c6bdf4f85bd2_prof);

        
        $__internal_85a6f6fb0674a17feb8951aee93d0e3b420d256e85d0bb4b1c26a9af17c047df->leave($__internal_85a6f6fb0674a17feb8951aee93d0e3b420d256e85d0bb4b1c26a9af17c047df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/radio_widget.html.php");
    }
}
