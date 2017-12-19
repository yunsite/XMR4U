<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_b23fb83eb25e03657d942b4198a1889f393a7831955d8783d4f1a73b59df6de8 extends Twig_Template
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
        $__internal_2351092053783a7bf2de1722b2fdf3239db9fd64d3be4ff8a9607c0121036378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2351092053783a7bf2de1722b2fdf3239db9fd64d3be4ff8a9607c0121036378->enter($__internal_2351092053783a7bf2de1722b2fdf3239db9fd64d3be4ff8a9607c0121036378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_db7c8554d9e4ea297f9b39647d1b9a723ab3247e2c9b35d091d847703c5785eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db7c8554d9e4ea297f9b39647d1b9a723ab3247e2c9b35d091d847703c5785eb->enter($__internal_db7c8554d9e4ea297f9b39647d1b9a723ab3247e2c9b35d091d847703c5785eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_2351092053783a7bf2de1722b2fdf3239db9fd64d3be4ff8a9607c0121036378->leave($__internal_2351092053783a7bf2de1722b2fdf3239db9fd64d3be4ff8a9607c0121036378_prof);

        
        $__internal_db7c8554d9e4ea297f9b39647d1b9a723ab3247e2c9b35d091d847703c5785eb->leave($__internal_db7c8554d9e4ea297f9b39647d1b9a723ab3247e2c9b35d091d847703c5785eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/search_widget.html.php");
    }
}
