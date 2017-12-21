<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_31d3c6abd2e1ba11468b8ea19fb6ebcd47272e70b0c6ac8632b33410f10a0099 extends Twig_Template
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
        $__internal_8c1ecc694300fb3960cdf67d1718e24f50315bd97b18227758ca63755b061756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c1ecc694300fb3960cdf67d1718e24f50315bd97b18227758ca63755b061756->enter($__internal_8c1ecc694300fb3960cdf67d1718e24f50315bd97b18227758ca63755b061756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_687de7c9405cdb2008e60636b8d2f7d38d77fe069b9c7dac7c5de8903d8d145f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_687de7c9405cdb2008e60636b8d2f7d38d77fe069b9c7dac7c5de8903d8d145f->enter($__internal_687de7c9405cdb2008e60636b8d2f7d38d77fe069b9c7dac7c5de8903d8d145f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8c1ecc694300fb3960cdf67d1718e24f50315bd97b18227758ca63755b061756->leave($__internal_8c1ecc694300fb3960cdf67d1718e24f50315bd97b18227758ca63755b061756_prof);

        
        $__internal_687de7c9405cdb2008e60636b8d2f7d38d77fe069b9c7dac7c5de8903d8d145f->leave($__internal_687de7c9405cdb2008e60636b8d2f7d38d77fe069b9c7dac7c5de8903d8d145f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/textarea_widget.html.php");
    }
}
