<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_41527d2124c1f07d13364f6da4e155d8b56175dc248b032c41aa1094cc41ffe2 extends Twig_Template
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
        $__internal_70e3a3987a3564a16dca051cf3b1152f2660e561aedd6ab88e06e8ee8b06670f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70e3a3987a3564a16dca051cf3b1152f2660e561aedd6ab88e06e8ee8b06670f->enter($__internal_70e3a3987a3564a16dca051cf3b1152f2660e561aedd6ab88e06e8ee8b06670f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_aee0eb2e1207ed582b2d19352793153b4d542d0d126a8dc711454782e4abe3e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aee0eb2e1207ed582b2d19352793153b4d542d0d126a8dc711454782e4abe3e5->enter($__internal_aee0eb2e1207ed582b2d19352793153b4d542d0d126a8dc711454782e4abe3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_70e3a3987a3564a16dca051cf3b1152f2660e561aedd6ab88e06e8ee8b06670f->leave($__internal_70e3a3987a3564a16dca051cf3b1152f2660e561aedd6ab88e06e8ee8b06670f_prof);

        
        $__internal_aee0eb2e1207ed582b2d19352793153b4d542d0d126a8dc711454782e4abe3e5->leave($__internal_aee0eb2e1207ed582b2d19352793153b4d542d0d126a8dc711454782e4abe3e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/container_attributes.html.php");
    }
}
