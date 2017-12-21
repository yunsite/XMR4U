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
        $__internal_c1222a3faf1647b96c946bd1d0522e460853c33af1eb9eeb47f58d535edb875c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1222a3faf1647b96c946bd1d0522e460853c33af1eb9eeb47f58d535edb875c->enter($__internal_c1222a3faf1647b96c946bd1d0522e460853c33af1eb9eeb47f58d535edb875c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_5d6889800ac337d1a20086dc5416f10476c86ebfcca274f2af985177bb111419 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d6889800ac337d1a20086dc5416f10476c86ebfcca274f2af985177bb111419->enter($__internal_5d6889800ac337d1a20086dc5416f10476c86ebfcca274f2af985177bb111419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c1222a3faf1647b96c946bd1d0522e460853c33af1eb9eeb47f58d535edb875c->leave($__internal_c1222a3faf1647b96c946bd1d0522e460853c33af1eb9eeb47f58d535edb875c_prof);

        
        $__internal_5d6889800ac337d1a20086dc5416f10476c86ebfcca274f2af985177bb111419->leave($__internal_5d6889800ac337d1a20086dc5416f10476c86ebfcca274f2af985177bb111419_prof);

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
