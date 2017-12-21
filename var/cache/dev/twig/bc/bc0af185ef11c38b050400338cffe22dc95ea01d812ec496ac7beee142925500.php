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
        $__internal_b2f7f163bdea2e4354564923abb3d7c762272eec756ec826724ce84473734535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2f7f163bdea2e4354564923abb3d7c762272eec756ec826724ce84473734535->enter($__internal_b2f7f163bdea2e4354564923abb3d7c762272eec756ec826724ce84473734535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_6e8ced67629cbb8a35429204dd559ebd31ed3f8be0caf82b7b2e690d78c57868 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e8ced67629cbb8a35429204dd559ebd31ed3f8be0caf82b7b2e690d78c57868->enter($__internal_6e8ced67629cbb8a35429204dd559ebd31ed3f8be0caf82b7b2e690d78c57868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_b2f7f163bdea2e4354564923abb3d7c762272eec756ec826724ce84473734535->leave($__internal_b2f7f163bdea2e4354564923abb3d7c762272eec756ec826724ce84473734535_prof);

        
        $__internal_6e8ced67629cbb8a35429204dd559ebd31ed3f8be0caf82b7b2e690d78c57868->leave($__internal_6e8ced67629cbb8a35429204dd559ebd31ed3f8be0caf82b7b2e690d78c57868_prof);

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
