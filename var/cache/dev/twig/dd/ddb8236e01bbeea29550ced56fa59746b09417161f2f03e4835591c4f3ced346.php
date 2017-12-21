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
        $__internal_6fd06f8b9f822da445438f836e5d5770a379ddd677ad13a56e22a7f320f75617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd06f8b9f822da445438f836e5d5770a379ddd677ad13a56e22a7f320f75617->enter($__internal_6fd06f8b9f822da445438f836e5d5770a379ddd677ad13a56e22a7f320f75617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_4e35f1372b385aaa424b4d1fc93f46c83436bbb58f00c73091823b8238c6439d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e35f1372b385aaa424b4d1fc93f46c83436bbb58f00c73091823b8238c6439d->enter($__internal_4e35f1372b385aaa424b4d1fc93f46c83436bbb58f00c73091823b8238c6439d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_6fd06f8b9f822da445438f836e5d5770a379ddd677ad13a56e22a7f320f75617->leave($__internal_6fd06f8b9f822da445438f836e5d5770a379ddd677ad13a56e22a7f320f75617_prof);

        
        $__internal_4e35f1372b385aaa424b4d1fc93f46c83436bbb58f00c73091823b8238c6439d->leave($__internal_4e35f1372b385aaa424b4d1fc93f46c83436bbb58f00c73091823b8238c6439d_prof);

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
