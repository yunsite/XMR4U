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
        $__internal_43bc268bf70d3af4656a3b63b5e1dd3745ab237c63f3b14d68c38e3622c10026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43bc268bf70d3af4656a3b63b5e1dd3745ab237c63f3b14d68c38e3622c10026->enter($__internal_43bc268bf70d3af4656a3b63b5e1dd3745ab237c63f3b14d68c38e3622c10026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_24d36ed2f12c55e59b5024acdd383329705faccea78cabc4217287c8c8d8a56f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24d36ed2f12c55e59b5024acdd383329705faccea78cabc4217287c8c8d8a56f->enter($__internal_24d36ed2f12c55e59b5024acdd383329705faccea78cabc4217287c8c8d8a56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

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
        
        $__internal_43bc268bf70d3af4656a3b63b5e1dd3745ab237c63f3b14d68c38e3622c10026->leave($__internal_43bc268bf70d3af4656a3b63b5e1dd3745ab237c63f3b14d68c38e3622c10026_prof);

        
        $__internal_24d36ed2f12c55e59b5024acdd383329705faccea78cabc4217287c8c8d8a56f->leave($__internal_24d36ed2f12c55e59b5024acdd383329705faccea78cabc4217287c8c8d8a56f_prof);

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
