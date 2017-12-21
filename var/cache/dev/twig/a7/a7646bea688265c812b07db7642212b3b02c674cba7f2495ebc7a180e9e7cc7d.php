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
        $__internal_3e14369c94ea1cdb74f4d28c7548d3f88da5e37c70773b8ef7f3608dbcc36c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e14369c94ea1cdb74f4d28c7548d3f88da5e37c70773b8ef7f3608dbcc36c4b->enter($__internal_3e14369c94ea1cdb74f4d28c7548d3f88da5e37c70773b8ef7f3608dbcc36c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_3e4e33d52ef8ce60f63cbbc275dd6faecf64b5507f9c8763db6fe28324d0eaba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e4e33d52ef8ce60f63cbbc275dd6faecf64b5507f9c8763db6fe28324d0eaba->enter($__internal_3e4e33d52ef8ce60f63cbbc275dd6faecf64b5507f9c8763db6fe28324d0eaba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_3e14369c94ea1cdb74f4d28c7548d3f88da5e37c70773b8ef7f3608dbcc36c4b->leave($__internal_3e14369c94ea1cdb74f4d28c7548d3f88da5e37c70773b8ef7f3608dbcc36c4b_prof);

        
        $__internal_3e4e33d52ef8ce60f63cbbc275dd6faecf64b5507f9c8763db6fe28324d0eaba->leave($__internal_3e4e33d52ef8ce60f63cbbc275dd6faecf64b5507f9c8763db6fe28324d0eaba_prof);

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
", "@Framework/Form/form_enctype.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/form_enctype.html.php");
    }
}
