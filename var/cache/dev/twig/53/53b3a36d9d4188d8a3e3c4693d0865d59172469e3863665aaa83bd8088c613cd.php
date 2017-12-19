<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_bfd9dc55434e259309f43ee7920caf9ba75812124ae1da9ed23a3e5e4a3024b9 extends Twig_Template
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
        $__internal_a6318b39f1bc14fbf300959d75d38b64bd7d6b5e6075d0d7a57d46dc4a32fc27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6318b39f1bc14fbf300959d75d38b64bd7d6b5e6075d0d7a57d46dc4a32fc27->enter($__internal_a6318b39f1bc14fbf300959d75d38b64bd7d6b5e6075d0d7a57d46dc4a32fc27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_faf42e43be31bb70cdfcf11bf967e99c2ce65896c8eb3161cc38897390b9bfb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faf42e43be31bb70cdfcf11bf967e99c2ce65896c8eb3161cc38897390b9bfb6->enter($__internal_faf42e43be31bb70cdfcf11bf967e99c2ce65896c8eb3161cc38897390b9bfb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a6318b39f1bc14fbf300959d75d38b64bd7d6b5e6075d0d7a57d46dc4a32fc27->leave($__internal_a6318b39f1bc14fbf300959d75d38b64bd7d6b5e6075d0d7a57d46dc4a32fc27_prof);

        
        $__internal_faf42e43be31bb70cdfcf11bf967e99c2ce65896c8eb3161cc38897390b9bfb6->leave($__internal_faf42e43be31bb70cdfcf11bf967e99c2ce65896c8eb3161cc38897390b9bfb6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
