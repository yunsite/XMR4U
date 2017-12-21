<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_f612ccf58740129a782aa99396d2afd3be21350c887d67fb2e93281251236350 extends Twig_Template
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
        $__internal_9bf2caad07358bf201eb6172830ba8e29ecc312f4ce5560233273d251e2481a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bf2caad07358bf201eb6172830ba8e29ecc312f4ce5560233273d251e2481a3->enter($__internal_9bf2caad07358bf201eb6172830ba8e29ecc312f4ce5560233273d251e2481a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_6894bcf9b2b20dbd0eafdd0aaafbd1e5f93a4dc337e6019f48b919f6e5009e99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6894bcf9b2b20dbd0eafdd0aaafbd1e5f93a4dc337e6019f48b919f6e5009e99->enter($__internal_6894bcf9b2b20dbd0eafdd0aaafbd1e5f93a4dc337e6019f48b919f6e5009e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_9bf2caad07358bf201eb6172830ba8e29ecc312f4ce5560233273d251e2481a3->leave($__internal_9bf2caad07358bf201eb6172830ba8e29ecc312f4ce5560233273d251e2481a3_prof);

        
        $__internal_6894bcf9b2b20dbd0eafdd0aaafbd1e5f93a4dc337e6019f48b919f6e5009e99->leave($__internal_6894bcf9b2b20dbd0eafdd0aaafbd1e5f93a4dc337e6019f48b919f6e5009e99_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/form_widget.html.php");
    }
}
