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
        $__internal_82417a241c84ae60ab975fd308c34fdce6e22787387beb16da640097dc4fd7ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82417a241c84ae60ab975fd308c34fdce6e22787387beb16da640097dc4fd7ca->enter($__internal_82417a241c84ae60ab975fd308c34fdce6e22787387beb16da640097dc4fd7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_eefdc92c92a6c43b1e44a91e5f7110d9dafc010716aedc427337b7d59e152eaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eefdc92c92a6c43b1e44a91e5f7110d9dafc010716aedc427337b7d59e152eaa->enter($__internal_eefdc92c92a6c43b1e44a91e5f7110d9dafc010716aedc427337b7d59e152eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_82417a241c84ae60ab975fd308c34fdce6e22787387beb16da640097dc4fd7ca->leave($__internal_82417a241c84ae60ab975fd308c34fdce6e22787387beb16da640097dc4fd7ca_prof);

        
        $__internal_eefdc92c92a6c43b1e44a91e5f7110d9dafc010716aedc427337b7d59e152eaa->leave($__internal_eefdc92c92a6c43b1e44a91e5f7110d9dafc010716aedc427337b7d59e152eaa_prof);

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
", "@Framework/Form/money_widget.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/money_widget.html.php");
    }
}
