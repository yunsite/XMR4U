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
        $__internal_01ccb0cb5daa593885e7f0f4e1d8418be326f2313c225f3aef495eb3e256343c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01ccb0cb5daa593885e7f0f4e1d8418be326f2313c225f3aef495eb3e256343c->enter($__internal_01ccb0cb5daa593885e7f0f4e1d8418be326f2313c225f3aef495eb3e256343c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_ccfe6305a9e11904d44e30b8b59420634de74f24b1b6b6f10b1f065efd2ff7ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccfe6305a9e11904d44e30b8b59420634de74f24b1b6b6f10b1f065efd2ff7ba->enter($__internal_ccfe6305a9e11904d44e30b8b59420634de74f24b1b6b6f10b1f065efd2ff7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_01ccb0cb5daa593885e7f0f4e1d8418be326f2313c225f3aef495eb3e256343c->leave($__internal_01ccb0cb5daa593885e7f0f4e1d8418be326f2313c225f3aef495eb3e256343c_prof);

        
        $__internal_ccfe6305a9e11904d44e30b8b59420634de74f24b1b6b6f10b1f065efd2ff7ba->leave($__internal_ccfe6305a9e11904d44e30b8b59420634de74f24b1b6b6f10b1f065efd2ff7ba_prof);

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
