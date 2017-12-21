<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_9a6c937c6b27ba7a98a64c541bbd51132f812095db519136f7aa17bdc6c9cf94 extends Twig_Template
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
        $__internal_a61d4b507ba2d5454145ddb70cb013d7b0c4c016cf91e34ec0245e762dd27a41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a61d4b507ba2d5454145ddb70cb013d7b0c4c016cf91e34ec0245e762dd27a41->enter($__internal_a61d4b507ba2d5454145ddb70cb013d7b0c4c016cf91e34ec0245e762dd27a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_ff0df17d7a4fa4c7c032c7a9f3b7ff79ea1aecb918586e60724edb8af765dcd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff0df17d7a4fa4c7c032c7a9f3b7ff79ea1aecb918586e60724edb8af765dcd2->enter($__internal_ff0df17d7a4fa4c7c032c7a9f3b7ff79ea1aecb918586e60724edb8af765dcd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_a61d4b507ba2d5454145ddb70cb013d7b0c4c016cf91e34ec0245e762dd27a41->leave($__internal_a61d4b507ba2d5454145ddb70cb013d7b0c4c016cf91e34ec0245e762dd27a41_prof);

        
        $__internal_ff0df17d7a4fa4c7c032c7a9f3b7ff79ea1aecb918586e60724edb8af765dcd2->leave($__internal_ff0df17d7a4fa4c7c032c7a9f3b7ff79ea1aecb918586e60724edb8af765dcd2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/integer_widget.html.php");
    }
}
