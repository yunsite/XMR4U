<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_f6c54c6fc0805038c5b12fd52290a92a0a625706a1ca5fa23c43fd308ce9040d extends Twig_Template
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
        $__internal_43533a5e0e11b566abb7b78d6834476038289b3121fbfbdaaba4c53e56f8cf0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43533a5e0e11b566abb7b78d6834476038289b3121fbfbdaaba4c53e56f8cf0e->enter($__internal_43533a5e0e11b566abb7b78d6834476038289b3121fbfbdaaba4c53e56f8cf0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_e2556af778faf0d5bf0da4155e0d64daaa50c6273510bca4a731825a3e9bf465 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2556af778faf0d5bf0da4155e0d64daaa50c6273510bca4a731825a3e9bf465->enter($__internal_e2556af778faf0d5bf0da4155e0d64daaa50c6273510bca4a731825a3e9bf465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_43533a5e0e11b566abb7b78d6834476038289b3121fbfbdaaba4c53e56f8cf0e->leave($__internal_43533a5e0e11b566abb7b78d6834476038289b3121fbfbdaaba4c53e56f8cf0e_prof);

        
        $__internal_e2556af778faf0d5bf0da4155e0d64daaa50c6273510bca4a731825a3e9bf465->leave($__internal_e2556af778faf0d5bf0da4155e0d64daaa50c6273510bca4a731825a3e9bf465_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/percent_widget.html.php");
    }
}
