<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_8bf2345ddc2cad11ed3330b26500c45b8b0f6340091b6c803cd359ef18cf2611 extends Twig_Template
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
        $__internal_04a08d2bd999ed751eeb0676b2e92372c20bbb8a03b1a57b6dc6744a7fdf0642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a08d2bd999ed751eeb0676b2e92372c20bbb8a03b1a57b6dc6744a7fdf0642->enter($__internal_04a08d2bd999ed751eeb0676b2e92372c20bbb8a03b1a57b6dc6744a7fdf0642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_b3fbb88049627b3d953c6bace713e52d2bc8bf079ef7ad3e552c58be05190b8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3fbb88049627b3d953c6bace713e52d2bc8bf079ef7ad3e552c58be05190b8a->enter($__internal_b3fbb88049627b3d953c6bace713e52d2bc8bf079ef7ad3e552c58be05190b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_04a08d2bd999ed751eeb0676b2e92372c20bbb8a03b1a57b6dc6744a7fdf0642->leave($__internal_04a08d2bd999ed751eeb0676b2e92372c20bbb8a03b1a57b6dc6744a7fdf0642_prof);

        
        $__internal_b3fbb88049627b3d953c6bace713e52d2bc8bf079ef7ad3e552c58be05190b8a->leave($__internal_b3fbb88049627b3d953c6bace713e52d2bc8bf079ef7ad3e552c58be05190b8a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/button_row.html.php");
    }
}
