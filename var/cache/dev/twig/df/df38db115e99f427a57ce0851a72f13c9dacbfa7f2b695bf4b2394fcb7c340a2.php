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
        $__internal_b556e5916e1d5c0ce6e7633a726a413d8525154518490502c5efbf02357fd1c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b556e5916e1d5c0ce6e7633a726a413d8525154518490502c5efbf02357fd1c6->enter($__internal_b556e5916e1d5c0ce6e7633a726a413d8525154518490502c5efbf02357fd1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_16ff328bbb495f312cf789fe610ddcc120cba54500aad70a9d94423cbd7d31d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16ff328bbb495f312cf789fe610ddcc120cba54500aad70a9d94423cbd7d31d5->enter($__internal_16ff328bbb495f312cf789fe610ddcc120cba54500aad70a9d94423cbd7d31d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b556e5916e1d5c0ce6e7633a726a413d8525154518490502c5efbf02357fd1c6->leave($__internal_b556e5916e1d5c0ce6e7633a726a413d8525154518490502c5efbf02357fd1c6_prof);

        
        $__internal_16ff328bbb495f312cf789fe610ddcc120cba54500aad70a9d94423cbd7d31d5->leave($__internal_16ff328bbb495f312cf789fe610ddcc120cba54500aad70a9d94423cbd7d31d5_prof);

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
", "@Framework/Form/button_row.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/button_row.html.php");
    }
}
