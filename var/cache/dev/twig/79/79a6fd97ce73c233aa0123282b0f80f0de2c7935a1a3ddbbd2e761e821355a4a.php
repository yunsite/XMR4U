<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_c0f052e2fbd2206ae02dc09377ee51b1711006e5834ec6b822b62e7ab0cad557 extends Twig_Template
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
        $__internal_ca9bdbc54c76bd91bf7ee4bc2f1d8a80650a47ba6bbf2a3622fcaf120302e03b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca9bdbc54c76bd91bf7ee4bc2f1d8a80650a47ba6bbf2a3622fcaf120302e03b->enter($__internal_ca9bdbc54c76bd91bf7ee4bc2f1d8a80650a47ba6bbf2a3622fcaf120302e03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_9e85c6567858e0926359d87aaecb1f3d4155005613b59dbe7a51ad3ee6a829fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e85c6567858e0926359d87aaecb1f3d4155005613b59dbe7a51ad3ee6a829fb->enter($__internal_9e85c6567858e0926359d87aaecb1f3d4155005613b59dbe7a51ad3ee6a829fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_ca9bdbc54c76bd91bf7ee4bc2f1d8a80650a47ba6bbf2a3622fcaf120302e03b->leave($__internal_ca9bdbc54c76bd91bf7ee4bc2f1d8a80650a47ba6bbf2a3622fcaf120302e03b_prof);

        
        $__internal_9e85c6567858e0926359d87aaecb1f3d4155005613b59dbe7a51ad3ee6a829fb->leave($__internal_9e85c6567858e0926359d87aaecb1f3d4155005613b59dbe7a51ad3ee6a829fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/choice_attributes.html.php");
    }
}
