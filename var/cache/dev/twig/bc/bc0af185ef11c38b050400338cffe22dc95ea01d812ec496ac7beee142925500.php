<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_ea4cfd8b72b985964cdc2c8be66944d8dd86dc4a7f6707cf854b97da8eaf0ce1 extends Twig_Template
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
        $__internal_1f7ed9deba716c73b55c006fb0eff404a65467febcf486ec3177822b5a452b50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f7ed9deba716c73b55c006fb0eff404a65467febcf486ec3177822b5a452b50->enter($__internal_1f7ed9deba716c73b55c006fb0eff404a65467febcf486ec3177822b5a452b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_9325e2039abe19623c342758fbc0a8ff315cd2ccbe251ef60a2261cda60feb21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9325e2039abe19623c342758fbc0a8ff315cd2ccbe251ef60a2261cda60feb21->enter($__internal_9325e2039abe19623c342758fbc0a8ff315cd2ccbe251ef60a2261cda60feb21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_1f7ed9deba716c73b55c006fb0eff404a65467febcf486ec3177822b5a452b50->leave($__internal_1f7ed9deba716c73b55c006fb0eff404a65467febcf486ec3177822b5a452b50_prof);

        
        $__internal_9325e2039abe19623c342758fbc0a8ff315cd2ccbe251ef60a2261cda60feb21->leave($__internal_9325e2039abe19623c342758fbc0a8ff315cd2ccbe251ef60a2261cda60feb21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/number_widget.html.php");
    }
}
