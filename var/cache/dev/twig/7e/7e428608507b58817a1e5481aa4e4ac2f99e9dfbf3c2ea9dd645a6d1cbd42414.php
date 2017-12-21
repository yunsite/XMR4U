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
        $__internal_9acb1a6b53d61e33e0eb072bf243d2d879a0d86f1bf6b7858bd41965b39a9813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9acb1a6b53d61e33e0eb072bf243d2d879a0d86f1bf6b7858bd41965b39a9813->enter($__internal_9acb1a6b53d61e33e0eb072bf243d2d879a0d86f1bf6b7858bd41965b39a9813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_8c51dc05bacb86f7411fbfa5bcefc1840bd9779dfd86cc57ab075aac75c01bf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c51dc05bacb86f7411fbfa5bcefc1840bd9779dfd86cc57ab075aac75c01bf1->enter($__internal_8c51dc05bacb86f7411fbfa5bcefc1840bd9779dfd86cc57ab075aac75c01bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_9acb1a6b53d61e33e0eb072bf243d2d879a0d86f1bf6b7858bd41965b39a9813->leave($__internal_9acb1a6b53d61e33e0eb072bf243d2d879a0d86f1bf6b7858bd41965b39a9813_prof);

        
        $__internal_8c51dc05bacb86f7411fbfa5bcefc1840bd9779dfd86cc57ab075aac75c01bf1->leave($__internal_8c51dc05bacb86f7411fbfa5bcefc1840bd9779dfd86cc57ab075aac75c01bf1_prof);

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
", "@Framework/Form/textarea_widget.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/textarea_widget.html.php");
    }
}
