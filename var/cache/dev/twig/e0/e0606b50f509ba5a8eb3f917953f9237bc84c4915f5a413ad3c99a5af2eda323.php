<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_29b729fc597f35925cf40d832daafce1455b5ad069bbb58de42e1756bd159392 extends Twig_Template
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
        $__internal_6f8ac36897e1f98085880d7175f67e41fa959ec2350bb3ba947bf8e20b01ba59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f8ac36897e1f98085880d7175f67e41fa959ec2350bb3ba947bf8e20b01ba59->enter($__internal_6f8ac36897e1f98085880d7175f67e41fa959ec2350bb3ba947bf8e20b01ba59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_f80639f57b98bf85a91b1eccf4fab527601aaf4fbfae3976752f5d8cd24a9319 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f80639f57b98bf85a91b1eccf4fab527601aaf4fbfae3976752f5d8cd24a9319->enter($__internal_f80639f57b98bf85a91b1eccf4fab527601aaf4fbfae3976752f5d8cd24a9319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_6f8ac36897e1f98085880d7175f67e41fa959ec2350bb3ba947bf8e20b01ba59->leave($__internal_6f8ac36897e1f98085880d7175f67e41fa959ec2350bb3ba947bf8e20b01ba59_prof);

        
        $__internal_f80639f57b98bf85a91b1eccf4fab527601aaf4fbfae3976752f5d8cd24a9319->leave($__internal_f80639f57b98bf85a91b1eccf4fab527601aaf4fbfae3976752f5d8cd24a9319_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "/var/www/miner/vendor/symfony/twig-bundle/Resources/views/Exception/exception.rdf.twig");
    }
}
