<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_6ec61fd7bd8b18001a9440563a3671808b00f772ef8197933da4e35a1561a258 extends Twig_Template
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
        $__internal_8ade6de3c2e14d2ad9ca85fb97291bd2bdaecdc14be33a0de7b1526ddab9821f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ade6de3c2e14d2ad9ca85fb97291bd2bdaecdc14be33a0de7b1526ddab9821f->enter($__internal_8ade6de3c2e14d2ad9ca85fb97291bd2bdaecdc14be33a0de7b1526ddab9821f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_cc607c266b8ca7dca1dbbc7ebda08dff9ed40da703991857f370c0d03257db93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc607c266b8ca7dca1dbbc7ebda08dff9ed40da703991857f370c0d03257db93->enter($__internal_cc607c266b8ca7dca1dbbc7ebda08dff9ed40da703991857f370c0d03257db93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8ade6de3c2e14d2ad9ca85fb97291bd2bdaecdc14be33a0de7b1526ddab9821f->leave($__internal_8ade6de3c2e14d2ad9ca85fb97291bd2bdaecdc14be33a0de7b1526ddab9821f_prof);

        
        $__internal_cc607c266b8ca7dca1dbbc7ebda08dff9ed40da703991857f370c0d03257db93->leave($__internal_cc607c266b8ca7dca1dbbc7ebda08dff9ed40da703991857f370c0d03257db93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/collection_widget.html.php");
    }
}
