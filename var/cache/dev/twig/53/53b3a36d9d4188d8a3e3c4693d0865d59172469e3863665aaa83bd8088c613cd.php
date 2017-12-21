<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_bfd9dc55434e259309f43ee7920caf9ba75812124ae1da9ed23a3e5e4a3024b9 extends Twig_Template
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
        $__internal_b2f9f2ab4e5378d7f43c4e72191d3f0437af6ae9f865f2c9568eed97a1bf790f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2f9f2ab4e5378d7f43c4e72191d3f0437af6ae9f865f2c9568eed97a1bf790f->enter($__internal_b2f9f2ab4e5378d7f43c4e72191d3f0437af6ae9f865f2c9568eed97a1bf790f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_16c89176bd90afdae357144d140a3658168a23bc9e0851d0dcf9d00ebd05c6cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16c89176bd90afdae357144d140a3658168a23bc9e0851d0dcf9d00ebd05c6cb->enter($__internal_16c89176bd90afdae357144d140a3658168a23bc9e0851d0dcf9d00ebd05c6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b2f9f2ab4e5378d7f43c4e72191d3f0437af6ae9f865f2c9568eed97a1bf790f->leave($__internal_b2f9f2ab4e5378d7f43c4e72191d3f0437af6ae9f865f2c9568eed97a1bf790f_prof);

        
        $__internal_16c89176bd90afdae357144d140a3658168a23bc9e0851d0dcf9d00ebd05c6cb->leave($__internal_16c89176bd90afdae357144d140a3658168a23bc9e0851d0dcf9d00ebd05c6cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
