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
        $__internal_ee4ac55a5bf20492cd1fe840a1103326bf3d5ab021e3ae0cc96e48dde1f8a4e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee4ac55a5bf20492cd1fe840a1103326bf3d5ab021e3ae0cc96e48dde1f8a4e4->enter($__internal_ee4ac55a5bf20492cd1fe840a1103326bf3d5ab021e3ae0cc96e48dde1f8a4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_fcf25a7642daf6d9d378de094801fc544f1f7101a4960677249f794a3cd6ef7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcf25a7642daf6d9d378de094801fc544f1f7101a4960677249f794a3cd6ef7d->enter($__internal_fcf25a7642daf6d9d378de094801fc544f1f7101a4960677249f794a3cd6ef7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ee4ac55a5bf20492cd1fe840a1103326bf3d5ab021e3ae0cc96e48dde1f8a4e4->leave($__internal_ee4ac55a5bf20492cd1fe840a1103326bf3d5ab021e3ae0cc96e48dde1f8a4e4_prof);

        
        $__internal_fcf25a7642daf6d9d378de094801fc544f1f7101a4960677249f794a3cd6ef7d->leave($__internal_fcf25a7642daf6d9d378de094801fc544f1f7101a4960677249f794a3cd6ef7d_prof);

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
", "@Framework/Form/form_errors.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/form_errors.html.php");
    }
}
