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
        $__internal_10fcff39815dd431c0cfc5b9163b9adb3551332c97ef112acce85fb0ff4cf9b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10fcff39815dd431c0cfc5b9163b9adb3551332c97ef112acce85fb0ff4cf9b1->enter($__internal_10fcff39815dd431c0cfc5b9163b9adb3551332c97ef112acce85fb0ff4cf9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_5554d909422a9131e097536468c78f0509130075d94b6dc7346551afa1b94fbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5554d909422a9131e097536468c78f0509130075d94b6dc7346551afa1b94fbd->enter($__internal_5554d909422a9131e097536468c78f0509130075d94b6dc7346551afa1b94fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_10fcff39815dd431c0cfc5b9163b9adb3551332c97ef112acce85fb0ff4cf9b1->leave($__internal_10fcff39815dd431c0cfc5b9163b9adb3551332c97ef112acce85fb0ff4cf9b1_prof);

        
        $__internal_5554d909422a9131e097536468c78f0509130075d94b6dc7346551afa1b94fbd->leave($__internal_5554d909422a9131e097536468c78f0509130075d94b6dc7346551afa1b94fbd_prof);

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
