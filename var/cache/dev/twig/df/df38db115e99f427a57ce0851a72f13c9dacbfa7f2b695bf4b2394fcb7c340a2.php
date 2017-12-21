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
        $__internal_81179152ecaafaaf7138f02d744737b9764fa498118a11ce4fc17ac0ef3c43fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81179152ecaafaaf7138f02d744737b9764fa498118a11ce4fc17ac0ef3c43fc->enter($__internal_81179152ecaafaaf7138f02d744737b9764fa498118a11ce4fc17ac0ef3c43fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_ff8c071076b5364aa1b726ab7e97c3500cefbcf57937fab9d788c172231328a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff8c071076b5364aa1b726ab7e97c3500cefbcf57937fab9d788c172231328a3->enter($__internal_ff8c071076b5364aa1b726ab7e97c3500cefbcf57937fab9d788c172231328a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_81179152ecaafaaf7138f02d744737b9764fa498118a11ce4fc17ac0ef3c43fc->leave($__internal_81179152ecaafaaf7138f02d744737b9764fa498118a11ce4fc17ac0ef3c43fc_prof);

        
        $__internal_ff8c071076b5364aa1b726ab7e97c3500cefbcf57937fab9d788c172231328a3->leave($__internal_ff8c071076b5364aa1b726ab7e97c3500cefbcf57937fab9d788c172231328a3_prof);

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
