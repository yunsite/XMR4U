<?php

/* form_table_layout.html.twig */
class __TwigTemplate_ee7f4f5acea3de45239a7b1a2807835fc149f3b128e1d3ccac9d59f0d00a0ad7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_074ba76a53492f1739b701db6925d0adde7311cc8d7612bfba2e7e2d9a8c9cf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_074ba76a53492f1739b701db6925d0adde7311cc8d7612bfba2e7e2d9a8c9cf5->enter($__internal_074ba76a53492f1739b701db6925d0adde7311cc8d7612bfba2e7e2d9a8c9cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_3723d78b0285d916359c0a20d274841a7aac6b5d2e42676952d7faef9aca5878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3723d78b0285d916359c0a20d274841a7aac6b5d2e42676952d7faef9aca5878->enter($__internal_3723d78b0285d916359c0a20d274841a7aac6b5d2e42676952d7faef9aca5878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_074ba76a53492f1739b701db6925d0adde7311cc8d7612bfba2e7e2d9a8c9cf5->leave($__internal_074ba76a53492f1739b701db6925d0adde7311cc8d7612bfba2e7e2d9a8c9cf5_prof);

        
        $__internal_3723d78b0285d916359c0a20d274841a7aac6b5d2e42676952d7faef9aca5878->leave($__internal_3723d78b0285d916359c0a20d274841a7aac6b5d2e42676952d7faef9aca5878_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a8fb8eb645ac2d82638ecf876fa3ab8f294c684e91ae0a04f31538a4f9d893ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8fb8eb645ac2d82638ecf876fa3ab8f294c684e91ae0a04f31538a4f9d893ef->enter($__internal_a8fb8eb645ac2d82638ecf876fa3ab8f294c684e91ae0a04f31538a4f9d893ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_d01244be40052584821026f174ab58b77165f5c5a83316d7052ce15ec959b256 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d01244be40052584821026f174ab58b77165f5c5a83316d7052ce15ec959b256->enter($__internal_d01244be40052584821026f174ab58b77165f5c5a83316d7052ce15ec959b256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_d01244be40052584821026f174ab58b77165f5c5a83316d7052ce15ec959b256->leave($__internal_d01244be40052584821026f174ab58b77165f5c5a83316d7052ce15ec959b256_prof);

        
        $__internal_a8fb8eb645ac2d82638ecf876fa3ab8f294c684e91ae0a04f31538a4f9d893ef->leave($__internal_a8fb8eb645ac2d82638ecf876fa3ab8f294c684e91ae0a04f31538a4f9d893ef_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_5560da2dbd1c699062046a123b4956ca88aabcb5846559f967b4a08a8d1aa7b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5560da2dbd1c699062046a123b4956ca88aabcb5846559f967b4a08a8d1aa7b1->enter($__internal_5560da2dbd1c699062046a123b4956ca88aabcb5846559f967b4a08a8d1aa7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_94e918bf1926cbca77517c247a63e7fd1fcb48bf944b85555e176dcfd12aefa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94e918bf1926cbca77517c247a63e7fd1fcb48bf944b85555e176dcfd12aefa4->enter($__internal_94e918bf1926cbca77517c247a63e7fd1fcb48bf944b85555e176dcfd12aefa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_94e918bf1926cbca77517c247a63e7fd1fcb48bf944b85555e176dcfd12aefa4->leave($__internal_94e918bf1926cbca77517c247a63e7fd1fcb48bf944b85555e176dcfd12aefa4_prof);

        
        $__internal_5560da2dbd1c699062046a123b4956ca88aabcb5846559f967b4a08a8d1aa7b1->leave($__internal_5560da2dbd1c699062046a123b4956ca88aabcb5846559f967b4a08a8d1aa7b1_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_b153a4204d771735980ee7a7ba4a4e8eb2fec3029a1e1ea77ec100ee9e4fdab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b153a4204d771735980ee7a7ba4a4e8eb2fec3029a1e1ea77ec100ee9e4fdab2->enter($__internal_b153a4204d771735980ee7a7ba4a4e8eb2fec3029a1e1ea77ec100ee9e4fdab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_b651f69139fa91d35e15825ac783d3026b067dda35ea7619d8081c1e447b1d54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b651f69139fa91d35e15825ac783d3026b067dda35ea7619d8081c1e447b1d54->enter($__internal_b651f69139fa91d35e15825ac783d3026b067dda35ea7619d8081c1e447b1d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_b651f69139fa91d35e15825ac783d3026b067dda35ea7619d8081c1e447b1d54->leave($__internal_b651f69139fa91d35e15825ac783d3026b067dda35ea7619d8081c1e447b1d54_prof);

        
        $__internal_b153a4204d771735980ee7a7ba4a4e8eb2fec3029a1e1ea77ec100ee9e4fdab2->leave($__internal_b153a4204d771735980ee7a7ba4a4e8eb2fec3029a1e1ea77ec100ee9e4fdab2_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_b295eaee519f1d113af6dd8acfa6066ea2af440c4be79f6a7a39f117be282134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b295eaee519f1d113af6dd8acfa6066ea2af440c4be79f6a7a39f117be282134->enter($__internal_b295eaee519f1d113af6dd8acfa6066ea2af440c4be79f6a7a39f117be282134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_d9919bdbd19fcd665e4e864e7591bf73010f281f0e304a9c64d1d9ac544f60d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9919bdbd19fcd665e4e864e7591bf73010f281f0e304a9c64d1d9ac544f60d8->enter($__internal_d9919bdbd19fcd665e4e864e7591bf73010f281f0e304a9c64d1d9ac544f60d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_d9919bdbd19fcd665e4e864e7591bf73010f281f0e304a9c64d1d9ac544f60d8->leave($__internal_d9919bdbd19fcd665e4e864e7591bf73010f281f0e304a9c64d1d9ac544f60d8_prof);

        
        $__internal_b295eaee519f1d113af6dd8acfa6066ea2af440c4be79f6a7a39f117be282134->leave($__internal_b295eaee519f1d113af6dd8acfa6066ea2af440c4be79f6a7a39f117be282134_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/Users/Slote/Desktop/XMR4U/vendor/symfony/twig-bridge/Resources/views/Form/form_table_layout.html.twig");
    }
}
