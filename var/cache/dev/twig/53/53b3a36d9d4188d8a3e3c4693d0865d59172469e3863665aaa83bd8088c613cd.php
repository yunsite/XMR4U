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
        $__internal_053c700bfdb8daa13a13987d827961b7c0bbd3ce110f1d7bfc6b92428fc90cb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_053c700bfdb8daa13a13987d827961b7c0bbd3ce110f1d7bfc6b92428fc90cb3->enter($__internal_053c700bfdb8daa13a13987d827961b7c0bbd3ce110f1d7bfc6b92428fc90cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_cd93ae82ba6b774f9d53e1130396520d8b2ecdb7e64d604f8a1fd5205700e7ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd93ae82ba6b774f9d53e1130396520d8b2ecdb7e64d604f8a1fd5205700e7ac->enter($__internal_cd93ae82ba6b774f9d53e1130396520d8b2ecdb7e64d604f8a1fd5205700e7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_053c700bfdb8daa13a13987d827961b7c0bbd3ce110f1d7bfc6b92428fc90cb3->leave($__internal_053c700bfdb8daa13a13987d827961b7c0bbd3ce110f1d7bfc6b92428fc90cb3_prof);

        
        $__internal_cd93ae82ba6b774f9d53e1130396520d8b2ecdb7e64d604f8a1fd5205700e7ac->leave($__internal_cd93ae82ba6b774f9d53e1130396520d8b2ecdb7e64d604f8a1fd5205700e7ac_prof);

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
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
