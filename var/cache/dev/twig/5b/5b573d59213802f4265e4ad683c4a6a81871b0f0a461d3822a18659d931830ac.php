<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_ad17a1916c7caebad729e6f881c81f07b4d3bd279ad1ff53717277532b5c973f extends Twig_Template
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
        $__internal_81dd7fda6a10f36b38cea2ff428afa5cfa10697ae5c6d6d6871401300644d183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81dd7fda6a10f36b38cea2ff428afa5cfa10697ae5c6d6d6871401300644d183->enter($__internal_81dd7fda6a10f36b38cea2ff428afa5cfa10697ae5c6d6d6871401300644d183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_9cb795083db69ea9364844c564d0aed5bd1956ca9f6e6e7e23a0ce1f51a44ac0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cb795083db69ea9364844c564d0aed5bd1956ca9f6e6e7e23a0ce1f51a44ac0->enter($__internal_9cb795083db69ea9364844c564d0aed5bd1956ca9f6e6e7e23a0ce1f51a44ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_81dd7fda6a10f36b38cea2ff428afa5cfa10697ae5c6d6d6871401300644d183->leave($__internal_81dd7fda6a10f36b38cea2ff428afa5cfa10697ae5c6d6d6871401300644d183_prof);

        
        $__internal_9cb795083db69ea9364844c564d0aed5bd1956ca9f6e6e7e23a0ce1f51a44ac0->leave($__internal_9cb795083db69ea9364844c564d0aed5bd1956ca9f6e6e7e23a0ce1f51a44ac0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/form_errors.html.php");
    }
}
