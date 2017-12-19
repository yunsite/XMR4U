<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_a841fe3e85ce857f92e8a180257e3b004738a9c64fd47444465f93e4e5e12d07 extends Twig_Template
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
        $__internal_7fa6be4c28baf390574ddc930223ba6204e2df5b1ce0c2f595fc0a93b6aed82f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fa6be4c28baf390574ddc930223ba6204e2df5b1ce0c2f595fc0a93b6aed82f->enter($__internal_7fa6be4c28baf390574ddc930223ba6204e2df5b1ce0c2f595fc0a93b6aed82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_889ba52a67b1aa997b45387a878bfe27699729e8d0e643af4d36ba5014f8f8f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_889ba52a67b1aa997b45387a878bfe27699729e8d0e643af4d36ba5014f8f8f2->enter($__internal_889ba52a67b1aa997b45387a878bfe27699729e8d0e643af4d36ba5014f8f8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_7fa6be4c28baf390574ddc930223ba6204e2df5b1ce0c2f595fc0a93b6aed82f->leave($__internal_7fa6be4c28baf390574ddc930223ba6204e2df5b1ce0c2f595fc0a93b6aed82f_prof);

        
        $__internal_889ba52a67b1aa997b45387a878bfe27699729e8d0e643af4d36ba5014f8f8f2->leave($__internal_889ba52a67b1aa997b45387a878bfe27699729e8d0e643af4d36ba5014f8f8f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/submit_widget.html.php");
    }
}
