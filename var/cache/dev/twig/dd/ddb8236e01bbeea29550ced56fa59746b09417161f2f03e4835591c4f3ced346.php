<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_737c10f03f13caf80a9055d96c169c6a6b12e5659e695819cb74454e66d0632e extends Twig_Template
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
        $__internal_81bb1bb6c107adcc83187a8543d292383fb26c3b185a81050ef18e0ea0a8f695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81bb1bb6c107adcc83187a8543d292383fb26c3b185a81050ef18e0ea0a8f695->enter($__internal_81bb1bb6c107adcc83187a8543d292383fb26c3b185a81050ef18e0ea0a8f695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_f861d481e87fe15fbbf1456f073a55647940c59ff22ef70853250bad1bc58e9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f861d481e87fe15fbbf1456f073a55647940c59ff22ef70853250bad1bc58e9a->enter($__internal_f861d481e87fe15fbbf1456f073a55647940c59ff22ef70853250bad1bc58e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_81bb1bb6c107adcc83187a8543d292383fb26c3b185a81050ef18e0ea0a8f695->leave($__internal_81bb1bb6c107adcc83187a8543d292383fb26c3b185a81050ef18e0ea0a8f695_prof);

        
        $__internal_f861d481e87fe15fbbf1456f073a55647940c59ff22ef70853250bad1bc58e9a->leave($__internal_f861d481e87fe15fbbf1456f073a55647940c59ff22ef70853250bad1bc58e9a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/var/www/miner/vendor/symfony/twig-bundle/Resources/views/Exception/error.json.twig");
    }
}
