<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_9b5e7eff2c6c6eca942526c9a4780b98141ae4baafe8fec39393a301c28ba299 extends Twig_Template
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
        $__internal_2013e7cdc68505fc84369cff1e5cfe23f5a77771536d4e673536c4de9483b54f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2013e7cdc68505fc84369cff1e5cfe23f5a77771536d4e673536c4de9483b54f->enter($__internal_2013e7cdc68505fc84369cff1e5cfe23f5a77771536d4e673536c4de9483b54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_033963f96f5906ab82022ebabc8018c4c5b1deeed41ec04dfb26fe3e0b2ed543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_033963f96f5906ab82022ebabc8018c4c5b1deeed41ec04dfb26fe3e0b2ed543->enter($__internal_033963f96f5906ab82022ebabc8018c4c5b1deeed41ec04dfb26fe3e0b2ed543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_2013e7cdc68505fc84369cff1e5cfe23f5a77771536d4e673536c4de9483b54f->leave($__internal_2013e7cdc68505fc84369cff1e5cfe23f5a77771536d4e673536c4de9483b54f_prof);

        
        $__internal_033963f96f5906ab82022ebabc8018c4c5b1deeed41ec04dfb26fe3e0b2ed543->leave($__internal_033963f96f5906ab82022ebabc8018c4c5b1deeed41ec04dfb26fe3e0b2ed543_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/hidden_widget.html.php");
    }
}
