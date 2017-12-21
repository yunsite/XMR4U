<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_34eb8f9e84b1b3b8bff5219d03a861a35ced100de6cd6c500f94e8bfcef25197 extends Twig_Template
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
        $__internal_ee7bd8983c12a49b753a390bd649e7bdb11e952c91840500c0fb49a1d2ca4ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee7bd8983c12a49b753a390bd649e7bdb11e952c91840500c0fb49a1d2ca4ec3->enter($__internal_ee7bd8983c12a49b753a390bd649e7bdb11e952c91840500c0fb49a1d2ca4ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_1fb53872a5aa24f07a3b9fd446b0f9661eb2bd58de08e297b8ab574c917906b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fb53872a5aa24f07a3b9fd446b0f9661eb2bd58de08e297b8ab574c917906b2->enter($__internal_1fb53872a5aa24f07a3b9fd446b0f9661eb2bd58de08e297b8ab574c917906b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_ee7bd8983c12a49b753a390bd649e7bdb11e952c91840500c0fb49a1d2ca4ec3->leave($__internal_ee7bd8983c12a49b753a390bd649e7bdb11e952c91840500c0fb49a1d2ca4ec3_prof);

        
        $__internal_1fb53872a5aa24f07a3b9fd446b0f9661eb2bd58de08e297b8ab574c917906b2->leave($__internal_1fb53872a5aa24f07a3b9fd446b0f9661eb2bd58de08e297b8ab574c917906b2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "/Users/Slote/Desktop/XMR4U/vendor/symfony/twig-bundle/Resources/views/Exception/traces.xml.twig");
    }
}
