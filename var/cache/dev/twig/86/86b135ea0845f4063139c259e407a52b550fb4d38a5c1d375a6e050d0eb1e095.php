<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_1289605fc42f117d5103b198e051e6442afc609a6f345ef5d598c885c7573c30 extends Twig_Template
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
        $__internal_545ce779318a2ba38ec8764edd924668eb86db1c2ef09fe2e58212811a90c940 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_545ce779318a2ba38ec8764edd924668eb86db1c2ef09fe2e58212811a90c940->enter($__internal_545ce779318a2ba38ec8764edd924668eb86db1c2ef09fe2e58212811a90c940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_850ed6dd3cb7863e62c55369e7dc2c62b8a69eb30f382c4da185e77771380e13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_850ed6dd3cb7863e62c55369e7dc2c62b8a69eb30f382c4da185e77771380e13->enter($__internal_850ed6dd3cb7863e62c55369e7dc2c62b8a69eb30f382c4da185e77771380e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_545ce779318a2ba38ec8764edd924668eb86db1c2ef09fe2e58212811a90c940->leave($__internal_545ce779318a2ba38ec8764edd924668eb86db1c2ef09fe2e58212811a90c940_prof);

        
        $__internal_850ed6dd3cb7863e62c55369e7dc2c62b8a69eb30f382c4da185e77771380e13->leave($__internal_850ed6dd3cb7863e62c55369e7dc2c62b8a69eb30f382c4da185e77771380e13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/money_widget.html.php");
    }
}
