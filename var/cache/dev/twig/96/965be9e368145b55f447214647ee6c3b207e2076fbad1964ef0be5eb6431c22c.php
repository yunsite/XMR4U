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
        $__internal_c636af2832e05e6687bf25477384afc9f9313ea38e0134299b02ed9eec692875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c636af2832e05e6687bf25477384afc9f9313ea38e0134299b02ed9eec692875->enter($__internal_c636af2832e05e6687bf25477384afc9f9313ea38e0134299b02ed9eec692875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_64c79cc2d10eeeb7900bad63ec27a6a5fd16ae3275d8c1c63411b2e77a094c35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64c79cc2d10eeeb7900bad63ec27a6a5fd16ae3275d8c1c63411b2e77a094c35->enter($__internal_64c79cc2d10eeeb7900bad63ec27a6a5fd16ae3275d8c1c63411b2e77a094c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_c636af2832e05e6687bf25477384afc9f9313ea38e0134299b02ed9eec692875->leave($__internal_c636af2832e05e6687bf25477384afc9f9313ea38e0134299b02ed9eec692875_prof);

        
        $__internal_64c79cc2d10eeeb7900bad63ec27a6a5fd16ae3275d8c1c63411b2e77a094c35->leave($__internal_64c79cc2d10eeeb7900bad63ec27a6a5fd16ae3275d8c1c63411b2e77a094c35_prof);

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
