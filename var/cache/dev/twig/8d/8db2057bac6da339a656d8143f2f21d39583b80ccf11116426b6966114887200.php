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
        $__internal_6d43d7f6091a42e82a989d21f9320a7a27f3d83fc9a509de06311882b75326d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d43d7f6091a42e82a989d21f9320a7a27f3d83fc9a509de06311882b75326d5->enter($__internal_6d43d7f6091a42e82a989d21f9320a7a27f3d83fc9a509de06311882b75326d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_80752866148a9b9ac70219d3d7768f83993eb4797341f5cf3d0fe34d0372dd1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80752866148a9b9ac70219d3d7768f83993eb4797341f5cf3d0fe34d0372dd1a->enter($__internal_80752866148a9b9ac70219d3d7768f83993eb4797341f5cf3d0fe34d0372dd1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_6d43d7f6091a42e82a989d21f9320a7a27f3d83fc9a509de06311882b75326d5->leave($__internal_6d43d7f6091a42e82a989d21f9320a7a27f3d83fc9a509de06311882b75326d5_prof);

        
        $__internal_80752866148a9b9ac70219d3d7768f83993eb4797341f5cf3d0fe34d0372dd1a->leave($__internal_80752866148a9b9ac70219d3d7768f83993eb4797341f5cf3d0fe34d0372dd1a_prof);

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
", "@Framework/FormTable/hidden_row.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
