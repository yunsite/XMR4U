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
        $__internal_bb69f02b04fccb534586d774c4c2bf3a663ad1019cd511b6be2dd4e80d724e48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb69f02b04fccb534586d774c4c2bf3a663ad1019cd511b6be2dd4e80d724e48->enter($__internal_bb69f02b04fccb534586d774c4c2bf3a663ad1019cd511b6be2dd4e80d724e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_25af554654524fa46b14df572b28816207fdd64a29117d0f5f3387b2f4011670 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25af554654524fa46b14df572b28816207fdd64a29117d0f5f3387b2f4011670->enter($__internal_25af554654524fa46b14df572b28816207fdd64a29117d0f5f3387b2f4011670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

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
        
        $__internal_bb69f02b04fccb534586d774c4c2bf3a663ad1019cd511b6be2dd4e80d724e48->leave($__internal_bb69f02b04fccb534586d774c4c2bf3a663ad1019cd511b6be2dd4e80d724e48_prof);

        
        $__internal_25af554654524fa46b14df572b28816207fdd64a29117d0f5f3387b2f4011670->leave($__internal_25af554654524fa46b14df572b28816207fdd64a29117d0f5f3387b2f4011670_prof);

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
