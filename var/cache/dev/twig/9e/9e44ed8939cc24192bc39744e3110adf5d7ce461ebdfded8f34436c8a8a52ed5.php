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
        $__internal_645e8981b8bdb64585b8cc407d826615aab1b271d827b9db3d3bde89d2310421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_645e8981b8bdb64585b8cc407d826615aab1b271d827b9db3d3bde89d2310421->enter($__internal_645e8981b8bdb64585b8cc407d826615aab1b271d827b9db3d3bde89d2310421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_0958fee21a946e94e03ac20d6d3d17a6e26f5a3d90ed2eaef0cf9bec1c5c035e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0958fee21a946e94e03ac20d6d3d17a6e26f5a3d90ed2eaef0cf9bec1c5c035e->enter($__internal_0958fee21a946e94e03ac20d6d3d17a6e26f5a3d90ed2eaef0cf9bec1c5c035e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

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
        
        $__internal_645e8981b8bdb64585b8cc407d826615aab1b271d827b9db3d3bde89d2310421->leave($__internal_645e8981b8bdb64585b8cc407d826615aab1b271d827b9db3d3bde89d2310421_prof);

        
        $__internal_0958fee21a946e94e03ac20d6d3d17a6e26f5a3d90ed2eaef0cf9bec1c5c035e->leave($__internal_0958fee21a946e94e03ac20d6d3d17a6e26f5a3d90ed2eaef0cf9bec1c5c035e_prof);

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
", "@Twig/Exception/traces.xml.twig", "/var/www/miner/vendor/symfony/twig-bundle/Resources/views/Exception/traces.xml.twig");
    }
}
