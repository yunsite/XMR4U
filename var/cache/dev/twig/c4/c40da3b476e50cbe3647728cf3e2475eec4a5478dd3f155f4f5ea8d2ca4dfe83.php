<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_19b9047997bad8644782caa6bdd44a9b163eedeefd08c4b4c7d255dc849b3495 extends Twig_Template
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
        $__internal_2246da37dc6b953b313c00f6c2d3f35c889f1e20da18221e0d295f28cca973e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2246da37dc6b953b313c00f6c2d3f35c889f1e20da18221e0d295f28cca973e6->enter($__internal_2246da37dc6b953b313c00f6c2d3f35c889f1e20da18221e0d295f28cca973e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_3385938063115c3bbf3a682cfda00894c637801cb65aae03f2c62eb95727d772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3385938063115c3bbf3a682cfda00894c637801cb65aae03f2c62eb95727d772->enter($__internal_3385938063115c3bbf3a682cfda00894c637801cb65aae03f2c62eb95727d772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_2246da37dc6b953b313c00f6c2d3f35c889f1e20da18221e0d295f28cca973e6->leave($__internal_2246da37dc6b953b313c00f6c2d3f35c889f1e20da18221e0d295f28cca973e6_prof);

        
        $__internal_3385938063115c3bbf3a682cfda00894c637801cb65aae03f2c62eb95727d772->leave($__internal_3385938063115c3bbf3a682cfda00894c637801cb65aae03f2c62eb95727d772_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/url_widget.html.php");
    }
}
