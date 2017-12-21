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
        $__internal_e44ba6d94f9c7886fa28324563c807ad8694cd10d4ed88c4a6071cfaba9412ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e44ba6d94f9c7886fa28324563c807ad8694cd10d4ed88c4a6071cfaba9412ec->enter($__internal_e44ba6d94f9c7886fa28324563c807ad8694cd10d4ed88c4a6071cfaba9412ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_011e1a7ed5ab617f3d2a251c417bbf4cc0198bc9fd632094ee2ec2a05252af7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_011e1a7ed5ab617f3d2a251c417bbf4cc0198bc9fd632094ee2ec2a05252af7a->enter($__internal_011e1a7ed5ab617f3d2a251c417bbf4cc0198bc9fd632094ee2ec2a05252af7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_e44ba6d94f9c7886fa28324563c807ad8694cd10d4ed88c4a6071cfaba9412ec->leave($__internal_e44ba6d94f9c7886fa28324563c807ad8694cd10d4ed88c4a6071cfaba9412ec_prof);

        
        $__internal_011e1a7ed5ab617f3d2a251c417bbf4cc0198bc9fd632094ee2ec2a05252af7a->leave($__internal_011e1a7ed5ab617f3d2a251c417bbf4cc0198bc9fd632094ee2ec2a05252af7a_prof);

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
", "@Framework/Form/search_widget.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/search_widget.html.php");
    }
}
