<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_1b89c0d4494ee70e516a2cddba7b8ff92c607bd351e7a0dabb4c2f0002ec2853 extends Twig_Template
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
        $__internal_c2e6d716fee4dccb8fefb10cb6ff08f2ef410833e03990428a11a78dd860da36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e6d716fee4dccb8fefb10cb6ff08f2ef410833e03990428a11a78dd860da36->enter($__internal_c2e6d716fee4dccb8fefb10cb6ff08f2ef410833e03990428a11a78dd860da36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_b069cdecac5c0995325a6fd81fd3e5caf4e057a2f714f3f602c98b3e15cc94ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b069cdecac5c0995325a6fd81fd3e5caf4e057a2f714f3f602c98b3e15cc94ad->enter($__internal_b069cdecac5c0995325a6fd81fd3e5caf4e057a2f714f3f602c98b3e15cc94ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_c2e6d716fee4dccb8fefb10cb6ff08f2ef410833e03990428a11a78dd860da36->leave($__internal_c2e6d716fee4dccb8fefb10cb6ff08f2ef410833e03990428a11a78dd860da36_prof);

        
        $__internal_b069cdecac5c0995325a6fd81fd3e5caf4e057a2f714f3f602c98b3e15cc94ad->leave($__internal_b069cdecac5c0995325a6fd81fd3e5caf4e057a2f714f3f602c98b3e15cc94ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/FormTable/form_row.html.php");
    }
}
