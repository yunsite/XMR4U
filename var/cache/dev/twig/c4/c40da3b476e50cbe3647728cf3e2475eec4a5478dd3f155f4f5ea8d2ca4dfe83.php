<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_19b9047997bad8644782caa6bdd44a9b163eedeefd08c4b4c7d255dc849b3495 extends Twig_Template
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
        $__internal_d1047285cd3e741feac0ca97fdb0cb5ccd99916f514344d4d9124ca07e5954c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1047285cd3e741feac0ca97fdb0cb5ccd99916f514344d4d9124ca07e5954c0->enter($__internal_d1047285cd3e741feac0ca97fdb0cb5ccd99916f514344d4d9124ca07e5954c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_6ab83560402c67d733a6abfabd245e32261c1cbc0cbba3d97bc4517eb8155150 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ab83560402c67d733a6abfabd245e32261c1cbc0cbba3d97bc4517eb8155150->enter($__internal_6ab83560402c67d733a6abfabd245e32261c1cbc0cbba3d97bc4517eb8155150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_d1047285cd3e741feac0ca97fdb0cb5ccd99916f514344d4d9124ca07e5954c0->leave($__internal_d1047285cd3e741feac0ca97fdb0cb5ccd99916f514344d4d9124ca07e5954c0_prof);

        
        $__internal_6ab83560402c67d733a6abfabd245e32261c1cbc0cbba3d97bc4517eb8155150->leave($__internal_6ab83560402c67d733a6abfabd245e32261c1cbc0cbba3d97bc4517eb8155150_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/url_widget.html.php");
    }
}
