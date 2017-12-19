<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_54fe130af33548a8afca0b6f0e60c289d9979414682378d843c3bbb016f4e6fe extends Twig_Template
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
        $__internal_f19b0229c46e3e99f25c96ba283fa5ff62fbd0e1b8c9afe101172dda0b6f0e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f19b0229c46e3e99f25c96ba283fa5ff62fbd0e1b8c9afe101172dda0b6f0e75->enter($__internal_f19b0229c46e3e99f25c96ba283fa5ff62fbd0e1b8c9afe101172dda0b6f0e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_ed3dfb74d9ca58577ed3aef6228c6b1c76b5651340fd23ba9f21243399496ac9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed3dfb74d9ca58577ed3aef6228c6b1c76b5651340fd23ba9f21243399496ac9->enter($__internal_ed3dfb74d9ca58577ed3aef6228c6b1c76b5651340fd23ba9f21243399496ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_f19b0229c46e3e99f25c96ba283fa5ff62fbd0e1b8c9afe101172dda0b6f0e75->leave($__internal_f19b0229c46e3e99f25c96ba283fa5ff62fbd0e1b8c9afe101172dda0b6f0e75_prof);

        
        $__internal_ed3dfb74d9ca58577ed3aef6228c6b1c76b5651340fd23ba9f21243399496ac9->leave($__internal_ed3dfb74d9ca58577ed3aef6228c6b1c76b5651340fd23ba9f21243399496ac9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/var/www/miner/vendor/symfony/twig-bundle/Resources/views/Exception/exception.json.twig");
    }
}
