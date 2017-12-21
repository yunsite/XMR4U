<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_f2fa8dff221ace5db95d2bc5968e461c9f9c4ae40c0298727f5d983070c4d738 extends Twig_Template
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
        $__internal_0f35bb4c42dde8a2c16fd4a6ed33657e1223b8be022f2f18f08c2741c01d5cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f35bb4c42dde8a2c16fd4a6ed33657e1223b8be022f2f18f08c2741c01d5cbc->enter($__internal_0f35bb4c42dde8a2c16fd4a6ed33657e1223b8be022f2f18f08c2741c01d5cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_4724f7f2b39f7fbbfdb397bef3e3e5883aff0b3c85313485a33a5342c80fcaf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4724f7f2b39f7fbbfdb397bef3e3e5883aff0b3c85313485a33a5342c80fcaf2->enter($__internal_4724f7f2b39f7fbbfdb397bef3e3e5883aff0b3c85313485a33a5342c80fcaf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_0f35bb4c42dde8a2c16fd4a6ed33657e1223b8be022f2f18f08c2741c01d5cbc->leave($__internal_0f35bb4c42dde8a2c16fd4a6ed33657e1223b8be022f2f18f08c2741c01d5cbc_prof);

        
        $__internal_4724f7f2b39f7fbbfdb397bef3e3e5883aff0b3c85313485a33a5342c80fcaf2->leave($__internal_4724f7f2b39f7fbbfdb397bef3e3e5883aff0b3c85313485a33a5342c80fcaf2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/email_widget.html.php");
    }
}
