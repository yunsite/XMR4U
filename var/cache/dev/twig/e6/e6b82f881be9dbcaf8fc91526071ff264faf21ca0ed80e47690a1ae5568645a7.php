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
        $__internal_c49fa9c864b2d492d36098e4b259e0d2c9893a24dfabde102d3a283b97c1ab26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c49fa9c864b2d492d36098e4b259e0d2c9893a24dfabde102d3a283b97c1ab26->enter($__internal_c49fa9c864b2d492d36098e4b259e0d2c9893a24dfabde102d3a283b97c1ab26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        $__internal_1e21f31a65873a57fdcfdba3d843901e9f7307dd39a1570089ed8dce3ed4bcd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e21f31a65873a57fdcfdba3d843901e9f7307dd39a1570089ed8dce3ed4bcd9->enter($__internal_1e21f31a65873a57fdcfdba3d843901e9f7307dd39a1570089ed8dce3ed4bcd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
        
        $__internal_c49fa9c864b2d492d36098e4b259e0d2c9893a24dfabde102d3a283b97c1ab26->leave($__internal_c49fa9c864b2d492d36098e4b259e0d2c9893a24dfabde102d3a283b97c1ab26_prof);

        
        $__internal_1e21f31a65873a57fdcfdba3d843901e9f7307dd39a1570089ed8dce3ed4bcd9->leave($__internal_1e21f31a65873a57fdcfdba3d843901e9f7307dd39a1570089ed8dce3ed4bcd9_prof);

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
", "@Framework/Form/color_widget.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/color_widget.html.php");
    }
}
