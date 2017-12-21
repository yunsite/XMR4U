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
        $__internal_43979f3bdf5413f610c462c76dcf5066eb0c9ae1c38b72a0cbcb736990bee54e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43979f3bdf5413f610c462c76dcf5066eb0c9ae1c38b72a0cbcb736990bee54e->enter($__internal_43979f3bdf5413f610c462c76dcf5066eb0c9ae1c38b72a0cbcb736990bee54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_3453060cc2a75684f2bf21e305523f02ddc7f434f615f9ba4a22f0a71cc386f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3453060cc2a75684f2bf21e305523f02ddc7f434f615f9ba4a22f0a71cc386f6->enter($__internal_3453060cc2a75684f2bf21e305523f02ddc7f434f615f9ba4a22f0a71cc386f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_43979f3bdf5413f610c462c76dcf5066eb0c9ae1c38b72a0cbcb736990bee54e->leave($__internal_43979f3bdf5413f610c462c76dcf5066eb0c9ae1c38b72a0cbcb736990bee54e_prof);

        
        $__internal_3453060cc2a75684f2bf21e305523f02ddc7f434f615f9ba4a22f0a71cc386f6->leave($__internal_3453060cc2a75684f2bf21e305523f02ddc7f434f615f9ba4a22f0a71cc386f6_prof);

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
", "@Framework/Form/hidden_widget.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/hidden_widget.html.php");
    }
}
