<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_af5bfc021e1e63783ef587761ff16890998813df14785d95d8ca38979013dcd9 extends Twig_Template
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
        $__internal_4eb687780552d00907bcdc739ace2241a520b747a1b819015012ae8cefcb6a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eb687780552d00907bcdc739ace2241a520b747a1b819015012ae8cefcb6a66->enter($__internal_4eb687780552d00907bcdc739ace2241a520b747a1b819015012ae8cefcb6a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_d45e692e8da545a550756f129137dd127d078b02d703f554e2ebfb645a104a83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d45e692e8da545a550756f129137dd127d078b02d703f554e2ebfb645a104a83->enter($__internal_d45e692e8da545a550756f129137dd127d078b02d703f554e2ebfb645a104a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_4eb687780552d00907bcdc739ace2241a520b747a1b819015012ae8cefcb6a66->leave($__internal_4eb687780552d00907bcdc739ace2241a520b747a1b819015012ae8cefcb6a66_prof);

        
        $__internal_d45e692e8da545a550756f129137dd127d078b02d703f554e2ebfb645a104a83->leave($__internal_d45e692e8da545a550756f129137dd127d078b02d703f554e2ebfb645a104a83_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "/Users/Slote/Desktop/XMR4U/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.css.twig");
    }
}
