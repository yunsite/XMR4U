<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_b53d970f784cc8e0c6648fcd918ff06e251c70f1cf256c875dfd152320ae181c extends Twig_Template
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
        $__internal_2a333515a95253df78a7e6f3921d979542fa422d3c24ed8c5ce5a40560a4baf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a333515a95253df78a7e6f3921d979542fa422d3c24ed8c5ce5a40560a4baf5->enter($__internal_2a333515a95253df78a7e6f3921d979542fa422d3c24ed8c5ce5a40560a4baf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_56828615ef510518d96ab784d79204f7c696f94c5ca930c4911948de1bff8c82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56828615ef510518d96ab784d79204f7c696f94c5ca930c4911948de1bff8c82->enter($__internal_56828615ef510518d96ab784d79204f7c696f94c5ca930c4911948de1bff8c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_2a333515a95253df78a7e6f3921d979542fa422d3c24ed8c5ce5a40560a4baf5->leave($__internal_2a333515a95253df78a7e6f3921d979542fa422d3c24ed8c5ce5a40560a4baf5_prof);

        
        $__internal_56828615ef510518d96ab784d79204f7c696f94c5ca930c4911948de1bff8c82->leave($__internal_56828615ef510518d96ab784d79204f7c696f94c5ca930c4911948de1bff8c82_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/reset_widget.html.php");
    }
}
