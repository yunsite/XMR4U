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
        $__internal_c383cf15e745951c154c2202141b83f5eb17d859230a926ec5dd1ff58a497530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c383cf15e745951c154c2202141b83f5eb17d859230a926ec5dd1ff58a497530->enter($__internal_c383cf15e745951c154c2202141b83f5eb17d859230a926ec5dd1ff58a497530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_779d8a4b04eb55f3e3ef1d756c73134f11a147fb9038781d46eb2eb82d07598a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_779d8a4b04eb55f3e3ef1d756c73134f11a147fb9038781d46eb2eb82d07598a->enter($__internal_779d8a4b04eb55f3e3ef1d756c73134f11a147fb9038781d46eb2eb82d07598a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c383cf15e745951c154c2202141b83f5eb17d859230a926ec5dd1ff58a497530->leave($__internal_c383cf15e745951c154c2202141b83f5eb17d859230a926ec5dd1ff58a497530_prof);

        
        $__internal_779d8a4b04eb55f3e3ef1d756c73134f11a147fb9038781d46eb2eb82d07598a->leave($__internal_779d8a4b04eb55f3e3ef1d756c73134f11a147fb9038781d46eb2eb82d07598a_prof);

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
