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
        $__internal_444ef1552c9e2e8192f7a4e1f7e45a221e0b8e1992469ad04d3dc239688506e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_444ef1552c9e2e8192f7a4e1f7e45a221e0b8e1992469ad04d3dc239688506e5->enter($__internal_444ef1552c9e2e8192f7a4e1f7e45a221e0b8e1992469ad04d3dc239688506e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_089cd59fd8112b9fb9c17c6eaa5b930ac817c8bbc996ea9d495bf468b122c94f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_089cd59fd8112b9fb9c17c6eaa5b930ac817c8bbc996ea9d495bf468b122c94f->enter($__internal_089cd59fd8112b9fb9c17c6eaa5b930ac817c8bbc996ea9d495bf468b122c94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_444ef1552c9e2e8192f7a4e1f7e45a221e0b8e1992469ad04d3dc239688506e5->leave($__internal_444ef1552c9e2e8192f7a4e1f7e45a221e0b8e1992469ad04d3dc239688506e5_prof);

        
        $__internal_089cd59fd8112b9fb9c17c6eaa5b930ac817c8bbc996ea9d495bf468b122c94f->leave($__internal_089cd59fd8112b9fb9c17c6eaa5b930ac817c8bbc996ea9d495bf468b122c94f_prof);

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
", "@Framework/FormTable/form_row.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/FormTable/form_row.html.php");
    }
}
