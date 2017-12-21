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
        $__internal_2093de9cbea28d6bae344328054bcbc8340fa14a82e074b2fc2623e98593e990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2093de9cbea28d6bae344328054bcbc8340fa14a82e074b2fc2623e98593e990->enter($__internal_2093de9cbea28d6bae344328054bcbc8340fa14a82e074b2fc2623e98593e990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_3ae0139760f8878955ae12029f8ffed3a9f05dd35830a3bb24465c92dd7952b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ae0139760f8878955ae12029f8ffed3a9f05dd35830a3bb24465c92dd7952b6->enter($__internal_3ae0139760f8878955ae12029f8ffed3a9f05dd35830a3bb24465c92dd7952b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_2093de9cbea28d6bae344328054bcbc8340fa14a82e074b2fc2623e98593e990->leave($__internal_2093de9cbea28d6bae344328054bcbc8340fa14a82e074b2fc2623e98593e990_prof);

        
        $__internal_3ae0139760f8878955ae12029f8ffed3a9f05dd35830a3bb24465c92dd7952b6->leave($__internal_3ae0139760f8878955ae12029f8ffed3a9f05dd35830a3bb24465c92dd7952b6_prof);

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
