<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_b23fb83eb25e03657d942b4198a1889f393a7831955d8783d4f1a73b59df6de8 extends Twig_Template
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
        $__internal_fc7b0a2db36e4f6fa36e693ff1240ca33cdbd7a5476a1847a5639ac761895b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc7b0a2db36e4f6fa36e693ff1240ca33cdbd7a5476a1847a5639ac761895b4c->enter($__internal_fc7b0a2db36e4f6fa36e693ff1240ca33cdbd7a5476a1847a5639ac761895b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_12c9291d4d1ec4e2021f5d621915847742f9328226780f8ee1d031cae50ba969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12c9291d4d1ec4e2021f5d621915847742f9328226780f8ee1d031cae50ba969->enter($__internal_12c9291d4d1ec4e2021f5d621915847742f9328226780f8ee1d031cae50ba969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_fc7b0a2db36e4f6fa36e693ff1240ca33cdbd7a5476a1847a5639ac761895b4c->leave($__internal_fc7b0a2db36e4f6fa36e693ff1240ca33cdbd7a5476a1847a5639ac761895b4c_prof);

        
        $__internal_12c9291d4d1ec4e2021f5d621915847742f9328226780f8ee1d031cae50ba969->leave($__internal_12c9291d4d1ec4e2021f5d621915847742f9328226780f8ee1d031cae50ba969_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/search_widget.html.php");
    }
}
