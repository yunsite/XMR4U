<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_9b5e7eff2c6c6eca942526c9a4780b98141ae4baafe8fec39393a301c28ba299 extends Twig_Template
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
        $__internal_dc383c2b2d4658c5c14219fa86fc2570b805d499056aabf914b3cd00d666f3bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc383c2b2d4658c5c14219fa86fc2570b805d499056aabf914b3cd00d666f3bb->enter($__internal_dc383c2b2d4658c5c14219fa86fc2570b805d499056aabf914b3cd00d666f3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_4b144253628ff1c5dcc58bf8992264e46bbd9de23233ba66366618d81da432c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b144253628ff1c5dcc58bf8992264e46bbd9de23233ba66366618d81da432c5->enter($__internal_4b144253628ff1c5dcc58bf8992264e46bbd9de23233ba66366618d81da432c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_dc383c2b2d4658c5c14219fa86fc2570b805d499056aabf914b3cd00d666f3bb->leave($__internal_dc383c2b2d4658c5c14219fa86fc2570b805d499056aabf914b3cd00d666f3bb_prof);

        
        $__internal_4b144253628ff1c5dcc58bf8992264e46bbd9de23233ba66366618d81da432c5->leave($__internal_4b144253628ff1c5dcc58bf8992264e46bbd9de23233ba66366618d81da432c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/hidden_widget.html.php");
    }
}
