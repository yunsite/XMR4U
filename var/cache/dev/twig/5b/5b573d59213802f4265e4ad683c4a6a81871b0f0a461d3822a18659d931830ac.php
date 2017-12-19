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
        $__internal_0a7930589608dc2ac7c699bb687c7fcab14ec612ab9ec9c855df83c460b132a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a7930589608dc2ac7c699bb687c7fcab14ec612ab9ec9c855df83c460b132a8->enter($__internal_0a7930589608dc2ac7c699bb687c7fcab14ec612ab9ec9c855df83c460b132a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_569cf33d956098bb826e9b0ef44fb59b3c9feb74e887967fbcada70743500f4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_569cf33d956098bb826e9b0ef44fb59b3c9feb74e887967fbcada70743500f4c->enter($__internal_569cf33d956098bb826e9b0ef44fb59b3c9feb74e887967fbcada70743500f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_0a7930589608dc2ac7c699bb687c7fcab14ec612ab9ec9c855df83c460b132a8->leave($__internal_0a7930589608dc2ac7c699bb687c7fcab14ec612ab9ec9c855df83c460b132a8_prof);

        
        $__internal_569cf33d956098bb826e9b0ef44fb59b3c9feb74e887967fbcada70743500f4c->leave($__internal_569cf33d956098bb826e9b0ef44fb59b3c9feb74e887967fbcada70743500f4c_prof);

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
