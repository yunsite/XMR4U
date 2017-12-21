<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_5e80a67f252834d51fb87410729d2c0006efee1394f04b61eca8b72bf2ea596c extends Twig_Template
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
        $__internal_9184b769a1716e2ad79d599418fcc0f1213ae0fbe4121e6c28353840ac0fa11d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9184b769a1716e2ad79d599418fcc0f1213ae0fbe4121e6c28353840ac0fa11d->enter($__internal_9184b769a1716e2ad79d599418fcc0f1213ae0fbe4121e6c28353840ac0fa11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        $__internal_f9c1f4a37c24578a2ea1a96ef8702453112278828ba28a1685ba5aff6bb8551f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9c1f4a37c24578a2ea1a96ef8702453112278828ba28a1685ba5aff6bb8551f->enter($__internal_f9c1f4a37c24578a2ea1a96ef8702453112278828ba28a1685ba5aff6bb8551f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
        
        $__internal_9184b769a1716e2ad79d599418fcc0f1213ae0fbe4121e6c28353840ac0fa11d->leave($__internal_9184b769a1716e2ad79d599418fcc0f1213ae0fbe4121e6c28353840ac0fa11d_prof);

        
        $__internal_f9c1f4a37c24578a2ea1a96ef8702453112278828ba28a1685ba5aff6bb8551f->leave($__internal_f9c1f4a37c24578a2ea1a96ef8702453112278828ba28a1685ba5aff6bb8551f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
", "@Framework/Form/color_widget.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/color_widget.html.php");
    }
}
