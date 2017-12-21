<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_b23fb83eb25e03657d942b4198a1889f393a7831955d8783d4f1a73b59df6de8 extends Twig_Template
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
        $__internal_ecfc52d4394759c68a9e4ce05c1373b4f93d6239e371ca430d9adbe9b2f18b58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecfc52d4394759c68a9e4ce05c1373b4f93d6239e371ca430d9adbe9b2f18b58->enter($__internal_ecfc52d4394759c68a9e4ce05c1373b4f93d6239e371ca430d9adbe9b2f18b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_21580d1bea9d8bc3e3ee4936341456b27d12dcb69758fc929140a0f4b969d0e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21580d1bea9d8bc3e3ee4936341456b27d12dcb69758fc929140a0f4b969d0e0->enter($__internal_21580d1bea9d8bc3e3ee4936341456b27d12dcb69758fc929140a0f4b969d0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_ecfc52d4394759c68a9e4ce05c1373b4f93d6239e371ca430d9adbe9b2f18b58->leave($__internal_ecfc52d4394759c68a9e4ce05c1373b4f93d6239e371ca430d9adbe9b2f18b58_prof);

        
        $__internal_21580d1bea9d8bc3e3ee4936341456b27d12dcb69758fc929140a0f4b969d0e0->leave($__internal_21580d1bea9d8bc3e3ee4936341456b27d12dcb69758fc929140a0f4b969d0e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/Slote/Desktop/XMR4U/vendor/symfony/framework-bundle/Resources/views/Form/search_widget.html.php");
    }
}
