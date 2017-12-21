<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_6fdcdbcb49e95c193a36e8e3df15041ac6ca97855a119aab34bdcfa3625d58e7 extends Twig_Template
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
        $__internal_12d2c15089f3b0ff37866cdb6f08e27a72a0f84c9dfaa3d35d6d7933df19d62a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12d2c15089f3b0ff37866cdb6f08e27a72a0f84c9dfaa3d35d6d7933df19d62a->enter($__internal_12d2c15089f3b0ff37866cdb6f08e27a72a0f84c9dfaa3d35d6d7933df19d62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_38d8bdfe4e3b15cae3b651bfd4e51f4d4751027d46245733ed8bd6cbdc88a5cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38d8bdfe4e3b15cae3b651bfd4e51f4d4751027d46245733ed8bd6cbdc88a5cf->enter($__internal_38d8bdfe4e3b15cae3b651bfd4e51f4d4751027d46245733ed8bd6cbdc88a5cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_12d2c15089f3b0ff37866cdb6f08e27a72a0f84c9dfaa3d35d6d7933df19d62a->leave($__internal_12d2c15089f3b0ff37866cdb6f08e27a72a0f84c9dfaa3d35d6d7933df19d62a_prof);

        
        $__internal_38d8bdfe4e3b15cae3b651bfd4e51f4d4751027d46245733ed8bd6cbdc88a5cf->leave($__internal_38d8bdfe4e3b15cae3b651bfd4e51f4d4751027d46245733ed8bd6cbdc88a5cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
