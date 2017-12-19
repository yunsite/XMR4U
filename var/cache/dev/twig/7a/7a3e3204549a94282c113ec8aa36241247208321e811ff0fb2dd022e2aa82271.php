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
        $__internal_3abc5ef58e167f0675563b8368aa3f4a89a2c6d6f93a0223a04de6708f6d6214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3abc5ef58e167f0675563b8368aa3f4a89a2c6d6f93a0223a04de6708f6d6214->enter($__internal_3abc5ef58e167f0675563b8368aa3f4a89a2c6d6f93a0223a04de6708f6d6214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_c76237350e11fe834790d027d8e7f555d613f6e338ddea6ad89c1e5600398e1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c76237350e11fe834790d027d8e7f555d613f6e338ddea6ad89c1e5600398e1d->enter($__internal_c76237350e11fe834790d027d8e7f555d613f6e338ddea6ad89c1e5600398e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_3abc5ef58e167f0675563b8368aa3f4a89a2c6d6f93a0223a04de6708f6d6214->leave($__internal_3abc5ef58e167f0675563b8368aa3f4a89a2c6d6f93a0223a04de6708f6d6214_prof);

        
        $__internal_c76237350e11fe834790d027d8e7f555d613f6e338ddea6ad89c1e5600398e1d->leave($__internal_c76237350e11fe834790d027d8e7f555d613f6e338ddea6ad89c1e5600398e1d_prof);

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
