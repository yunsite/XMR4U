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
        $__internal_80c32af815312dd5f10ba9299141962c003ff65d3ab33cf77124e07553057f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c32af815312dd5f10ba9299141962c003ff65d3ab33cf77124e07553057f04->enter($__internal_80c32af815312dd5f10ba9299141962c003ff65d3ab33cf77124e07553057f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_6a97658663f312cb116cd942a7a3e3e8ff80f4d6c10cad264864a75cc246f8fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a97658663f312cb116cd942a7a3e3e8ff80f4d6c10cad264864a75cc246f8fe->enter($__internal_6a97658663f312cb116cd942a7a3e3e8ff80f4d6c10cad264864a75cc246f8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_80c32af815312dd5f10ba9299141962c003ff65d3ab33cf77124e07553057f04->leave($__internal_80c32af815312dd5f10ba9299141962c003ff65d3ab33cf77124e07553057f04_prof);

        
        $__internal_6a97658663f312cb116cd942a7a3e3e8ff80f4d6c10cad264864a75cc246f8fe->leave($__internal_6a97658663f312cb116cd942a7a3e3e8ff80f4d6c10cad264864a75cc246f8fe_prof);

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
", "@Framework/Form/url_widget.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/url_widget.html.php");
    }
}
