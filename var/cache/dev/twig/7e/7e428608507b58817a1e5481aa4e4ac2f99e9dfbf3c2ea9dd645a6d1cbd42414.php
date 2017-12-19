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
        $__internal_b96ca2df5872d6b8c1e0ef9a7ed5b42c8f0b51db89c220a932e8f1c90b28e9ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b96ca2df5872d6b8c1e0ef9a7ed5b42c8f0b51db89c220a932e8f1c90b28e9ae->enter($__internal_b96ca2df5872d6b8c1e0ef9a7ed5b42c8f0b51db89c220a932e8f1c90b28e9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_85ed6413b0839664b7740a3d093a82069875a138afb822d182b27a68c30cd035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85ed6413b0839664b7740a3d093a82069875a138afb822d182b27a68c30cd035->enter($__internal_85ed6413b0839664b7740a3d093a82069875a138afb822d182b27a68c30cd035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_b96ca2df5872d6b8c1e0ef9a7ed5b42c8f0b51db89c220a932e8f1c90b28e9ae->leave($__internal_b96ca2df5872d6b8c1e0ef9a7ed5b42c8f0b51db89c220a932e8f1c90b28e9ae_prof);

        
        $__internal_85ed6413b0839664b7740a3d093a82069875a138afb822d182b27a68c30cd035->leave($__internal_85ed6413b0839664b7740a3d093a82069875a138afb822d182b27a68c30cd035_prof);

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
