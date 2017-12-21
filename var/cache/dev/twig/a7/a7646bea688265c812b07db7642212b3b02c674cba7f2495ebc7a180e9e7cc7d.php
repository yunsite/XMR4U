<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_0454d05177310d91a484cc99f72384739cc2089308d68774d095ad6f92f88bef extends Twig_Template
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
        $__internal_8737e43314590b57db24152364b3ae4366ad7e01b443e3600a203d6bf7760f8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8737e43314590b57db24152364b3ae4366ad7e01b443e3600a203d6bf7760f8c->enter($__internal_8737e43314590b57db24152364b3ae4366ad7e01b443e3600a203d6bf7760f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_782eb222ca925bd930874642da13a1bd510cbf9de5c2696b599a9b2f728777f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_782eb222ca925bd930874642da13a1bd510cbf9de5c2696b599a9b2f728777f7->enter($__internal_782eb222ca925bd930874642da13a1bd510cbf9de5c2696b599a9b2f728777f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_8737e43314590b57db24152364b3ae4366ad7e01b443e3600a203d6bf7760f8c->leave($__internal_8737e43314590b57db24152364b3ae4366ad7e01b443e3600a203d6bf7760f8c_prof);

        
        $__internal_782eb222ca925bd930874642da13a1bd510cbf9de5c2696b599a9b2f728777f7->leave($__internal_782eb222ca925bd930874642da13a1bd510cbf9de5c2696b599a9b2f728777f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/form_enctype.html.php");
    }
}
