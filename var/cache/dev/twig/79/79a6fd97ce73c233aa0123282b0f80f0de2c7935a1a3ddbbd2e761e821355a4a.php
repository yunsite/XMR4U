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
        $__internal_b52fbda8f84b1fd22b91deb011fcd81667e58fad776082c789678368031c24f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b52fbda8f84b1fd22b91deb011fcd81667e58fad776082c789678368031c24f4->enter($__internal_b52fbda8f84b1fd22b91deb011fcd81667e58fad776082c789678368031c24f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_122d3f96f6f735e37452303c1b388b8ed4679411ac8893305637b43d66ef851a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_122d3f96f6f735e37452303c1b388b8ed4679411ac8893305637b43d66ef851a->enter($__internal_122d3f96f6f735e37452303c1b388b8ed4679411ac8893305637b43d66ef851a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_b52fbda8f84b1fd22b91deb011fcd81667e58fad776082c789678368031c24f4->leave($__internal_b52fbda8f84b1fd22b91deb011fcd81667e58fad776082c789678368031c24f4_prof);

        
        $__internal_122d3f96f6f735e37452303c1b388b8ed4679411ac8893305637b43d66ef851a->leave($__internal_122d3f96f6f735e37452303c1b388b8ed4679411ac8893305637b43d66ef851a_prof);

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
