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
        $__internal_e09d5268a1fef6dbc7f9bb1ee14e76f6683cdc67227231829ea4dad9406adcff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e09d5268a1fef6dbc7f9bb1ee14e76f6683cdc67227231829ea4dad9406adcff->enter($__internal_e09d5268a1fef6dbc7f9bb1ee14e76f6683cdc67227231829ea4dad9406adcff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_d42df6634664095855b48aa80f8a23012246cf74bbc38fa1e3575c64131fd39d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d42df6634664095855b48aa80f8a23012246cf74bbc38fa1e3575c64131fd39d->enter($__internal_d42df6634664095855b48aa80f8a23012246cf74bbc38fa1e3575c64131fd39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_e09d5268a1fef6dbc7f9bb1ee14e76f6683cdc67227231829ea4dad9406adcff->leave($__internal_e09d5268a1fef6dbc7f9bb1ee14e76f6683cdc67227231829ea4dad9406adcff_prof);

        
        $__internal_d42df6634664095855b48aa80f8a23012246cf74bbc38fa1e3575c64131fd39d->leave($__internal_d42df6634664095855b48aa80f8a23012246cf74bbc38fa1e3575c64131fd39d_prof);

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
