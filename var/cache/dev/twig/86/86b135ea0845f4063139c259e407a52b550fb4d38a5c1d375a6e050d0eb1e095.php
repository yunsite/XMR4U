<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_1289605fc42f117d5103b198e051e6442afc609a6f345ef5d598c885c7573c30 extends Twig_Template
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
        $__internal_dba21b67ad2cbea2e27b67958b3be798a95bd9d48756551160302335e26c7a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dba21b67ad2cbea2e27b67958b3be798a95bd9d48756551160302335e26c7a2d->enter($__internal_dba21b67ad2cbea2e27b67958b3be798a95bd9d48756551160302335e26c7a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_53801d3fc3e3a698ed1af27e9e1c7d0339042d131648102c3b4aa2316edb888f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53801d3fc3e3a698ed1af27e9e1c7d0339042d131648102c3b4aa2316edb888f->enter($__internal_53801d3fc3e3a698ed1af27e9e1c7d0339042d131648102c3b4aa2316edb888f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_dba21b67ad2cbea2e27b67958b3be798a95bd9d48756551160302335e26c7a2d->leave($__internal_dba21b67ad2cbea2e27b67958b3be798a95bd9d48756551160302335e26c7a2d_prof);

        
        $__internal_53801d3fc3e3a698ed1af27e9e1c7d0339042d131648102c3b4aa2316edb888f->leave($__internal_53801d3fc3e3a698ed1af27e9e1c7d0339042d131648102c3b4aa2316edb888f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/money_widget.html.php");
    }
}
