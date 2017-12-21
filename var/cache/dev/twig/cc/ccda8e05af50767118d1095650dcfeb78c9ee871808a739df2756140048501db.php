<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_9a6c937c6b27ba7a98a64c541bbd51132f812095db519136f7aa17bdc6c9cf94 extends Twig_Template
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
        $__internal_ad9af04638b16d2942cdb5a0bc4b90c6e156f3fca7d67392fed3874970c0d466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad9af04638b16d2942cdb5a0bc4b90c6e156f3fca7d67392fed3874970c0d466->enter($__internal_ad9af04638b16d2942cdb5a0bc4b90c6e156f3fca7d67392fed3874970c0d466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_258f7fefa1a5721ef3fe8f7ea8125abe581d2f48921277d140bea3db213a1f76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_258f7fefa1a5721ef3fe8f7ea8125abe581d2f48921277d140bea3db213a1f76->enter($__internal_258f7fefa1a5721ef3fe8f7ea8125abe581d2f48921277d140bea3db213a1f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_ad9af04638b16d2942cdb5a0bc4b90c6e156f3fca7d67392fed3874970c0d466->leave($__internal_ad9af04638b16d2942cdb5a0bc4b90c6e156f3fca7d67392fed3874970c0d466_prof);

        
        $__internal_258f7fefa1a5721ef3fe8f7ea8125abe581d2f48921277d140bea3db213a1f76->leave($__internal_258f7fefa1a5721ef3fe8f7ea8125abe581d2f48921277d140bea3db213a1f76_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/integer_widget.html.php");
    }
}
