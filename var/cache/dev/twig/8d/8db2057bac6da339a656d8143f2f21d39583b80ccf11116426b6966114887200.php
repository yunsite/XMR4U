<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_8f85b68b8eb445766c93e050d7f0bb31d0ca1f8b601ec267fea50b4f3633af11 extends Twig_Template
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
        $__internal_7080f0e430ee15a767ab1f0f77a51d0dbafd34410c8691fb46f5e499b074e5c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7080f0e430ee15a767ab1f0f77a51d0dbafd34410c8691fb46f5e499b074e5c2->enter($__internal_7080f0e430ee15a767ab1f0f77a51d0dbafd34410c8691fb46f5e499b074e5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_91050c7186440494bf8c4759df1f79cef4b64852d2279082dac0e86f4fe4a763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91050c7186440494bf8c4759df1f79cef4b64852d2279082dac0e86f4fe4a763->enter($__internal_91050c7186440494bf8c4759df1f79cef4b64852d2279082dac0e86f4fe4a763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_7080f0e430ee15a767ab1f0f77a51d0dbafd34410c8691fb46f5e499b074e5c2->leave($__internal_7080f0e430ee15a767ab1f0f77a51d0dbafd34410c8691fb46f5e499b074e5c2_prof);

        
        $__internal_91050c7186440494bf8c4759df1f79cef4b64852d2279082dac0e86f4fe4a763->leave($__internal_91050c7186440494bf8c4759df1f79cef4b64852d2279082dac0e86f4fe4a763_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
