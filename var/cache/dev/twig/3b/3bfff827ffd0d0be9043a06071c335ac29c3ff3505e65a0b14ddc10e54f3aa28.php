<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_bd822aa52672ef4c988a6e9d9f9c5c857aed4335a0eb961862ac2380cc85d922 extends Twig_Template
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
        $__internal_4d4cefa4e19df9671df725539228acd7cd790527c99d11269179c053ff1b196c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d4cefa4e19df9671df725539228acd7cd790527c99d11269179c053ff1b196c->enter($__internal_4d4cefa4e19df9671df725539228acd7cd790527c99d11269179c053ff1b196c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_8d14910b32fca738391c414b9563015cca212e1a86ed595e64b90e883d104269 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d14910b32fca738391c414b9563015cca212e1a86ed595e64b90e883d104269->enter($__internal_8d14910b32fca738391c414b9563015cca212e1a86ed595e64b90e883d104269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_4d4cefa4e19df9671df725539228acd7cd790527c99d11269179c053ff1b196c->leave($__internal_4d4cefa4e19df9671df725539228acd7cd790527c99d11269179c053ff1b196c_prof);

        
        $__internal_8d14910b32fca738391c414b9563015cca212e1a86ed595e64b90e883d104269->leave($__internal_8d14910b32fca738391c414b9563015cca212e1a86ed595e64b90e883d104269_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/Users/Slote/Desktop/XMR4U/vendor/symfony/twig-bundle/Resources/views/Exception/error.xml.twig");
    }
}
