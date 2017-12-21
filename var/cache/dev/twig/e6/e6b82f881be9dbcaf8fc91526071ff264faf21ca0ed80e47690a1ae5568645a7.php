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
        $__internal_db0873bd716febe7a3e9086ad2beefb7b55dd478e9ae1ba96cd0ff479f5cd21d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db0873bd716febe7a3e9086ad2beefb7b55dd478e9ae1ba96cd0ff479f5cd21d->enter($__internal_db0873bd716febe7a3e9086ad2beefb7b55dd478e9ae1ba96cd0ff479f5cd21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        $__internal_c8c8d442422e7d794a454e372fea1c82fd906edbe022db8fbe9a65a4c3928bf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8c8d442422e7d794a454e372fea1c82fd906edbe022db8fbe9a65a4c3928bf3->enter($__internal_c8c8d442422e7d794a454e372fea1c82fd906edbe022db8fbe9a65a4c3928bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
        
        $__internal_db0873bd716febe7a3e9086ad2beefb7b55dd478e9ae1ba96cd0ff479f5cd21d->leave($__internal_db0873bd716febe7a3e9086ad2beefb7b55dd478e9ae1ba96cd0ff479f5cd21d_prof);

        
        $__internal_c8c8d442422e7d794a454e372fea1c82fd906edbe022db8fbe9a65a4c3928bf3->leave($__internal_c8c8d442422e7d794a454e372fea1c82fd906edbe022db8fbe9a65a4c3928bf3_prof);

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
