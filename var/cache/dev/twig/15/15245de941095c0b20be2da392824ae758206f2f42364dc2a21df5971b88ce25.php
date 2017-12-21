<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_febc8cd64b2a550f6e79fa8c6f4ffba0cb6db414d472c5269d9a6129cf71b144 extends Twig_Template
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
        $__internal_17dec647aa5901f006e1fb57812e19a76003c463ef4b42a7368333d02623b4ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17dec647aa5901f006e1fb57812e19a76003c463ef4b42a7368333d02623b4ce->enter($__internal_17dec647aa5901f006e1fb57812e19a76003c463ef4b42a7368333d02623b4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_fc8b93ccbb76d2be87fe507a0de42d771b7e892426863c94b28301cab7a776a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc8b93ccbb76d2be87fe507a0de42d771b7e892426863c94b28301cab7a776a7->enter($__internal_fc8b93ccbb76d2be87fe507a0de42d771b7e892426863c94b28301cab7a776a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_17dec647aa5901f006e1fb57812e19a76003c463ef4b42a7368333d02623b4ce->leave($__internal_17dec647aa5901f006e1fb57812e19a76003c463ef4b42a7368333d02623b4ce_prof);

        
        $__internal_fc8b93ccbb76d2be87fe507a0de42d771b7e892426863c94b28301cab7a776a7->leave($__internal_fc8b93ccbb76d2be87fe507a0de42d771b7e892426863c94b28301cab7a776a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/miner/vendor/symfony/framework-bundle/Resources/views/Form/hidden_row.html.php");
    }
}
