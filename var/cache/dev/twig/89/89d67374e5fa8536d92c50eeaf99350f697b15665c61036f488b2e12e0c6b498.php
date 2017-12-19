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
        $__internal_6194cf7dad812b59cf4c2e31715fdaed6fbb4179315a27e7f64b4279fd958801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6194cf7dad812b59cf4c2e31715fdaed6fbb4179315a27e7f64b4279fd958801->enter($__internal_6194cf7dad812b59cf4c2e31715fdaed6fbb4179315a27e7f64b4279fd958801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_7c43a7ab2115990fd8323921f234c76f5bc5e96ed78be588ad9da9f943b9fb35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c43a7ab2115990fd8323921f234c76f5bc5e96ed78be588ad9da9f943b9fb35->enter($__internal_7c43a7ab2115990fd8323921f234c76f5bc5e96ed78be588ad9da9f943b9fb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_6194cf7dad812b59cf4c2e31715fdaed6fbb4179315a27e7f64b4279fd958801->leave($__internal_6194cf7dad812b59cf4c2e31715fdaed6fbb4179315a27e7f64b4279fd958801_prof);

        
        $__internal_7c43a7ab2115990fd8323921f234c76f5bc5e96ed78be588ad9da9f943b9fb35->leave($__internal_7c43a7ab2115990fd8323921f234c76f5bc5e96ed78be588ad9da9f943b9fb35_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c85ca9e4c731b397fdb0d6f1d23cffd64d96e9695ecb2855a790d2b407ce21c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c85ca9e4c731b397fdb0d6f1d23cffd64d96e9695ecb2855a790d2b407ce21c7->enter($__internal_c85ca9e4c731b397fdb0d6f1d23cffd64d96e9695ecb2855a790d2b407ce21c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_44687f4266e285047ec13677bed059c8863bac6c389b5c03d7aed970bcaf4f2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44687f4266e285047ec13677bed059c8863bac6c389b5c03d7aed970bcaf4f2d->enter($__internal_44687f4266e285047ec13677bed059c8863bac6c389b5c03d7aed970bcaf4f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_44687f4266e285047ec13677bed059c8863bac6c389b5c03d7aed970bcaf4f2d->leave($__internal_44687f4266e285047ec13677bed059c8863bac6c389b5c03d7aed970bcaf4f2d_prof);

        
        $__internal_c85ca9e4c731b397fdb0d6f1d23cffd64d96e9695ecb2855a790d2b407ce21c7->leave($__internal_c85ca9e4c731b397fdb0d6f1d23cffd64d96e9695ecb2855a790d2b407ce21c7_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_451499c4771c1bf1e7941aed36acc1b07378245fd0ee72a8df61a53b5ac11e64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_451499c4771c1bf1e7941aed36acc1b07378245fd0ee72a8df61a53b5ac11e64->enter($__internal_451499c4771c1bf1e7941aed36acc1b07378245fd0ee72a8df61a53b5ac11e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_bd344c4b7d022d9693314e0e12a116b49f99ce4bac2d81ddabbae1481896fae7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd344c4b7d022d9693314e0e12a116b49f99ce4bac2d81ddabbae1481896fae7->enter($__internal_bd344c4b7d022d9693314e0e12a116b49f99ce4bac2d81ddabbae1481896fae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_bd344c4b7d022d9693314e0e12a116b49f99ce4bac2d81ddabbae1481896fae7->leave($__internal_bd344c4b7d022d9693314e0e12a116b49f99ce4bac2d81ddabbae1481896fae7_prof);

        
        $__internal_451499c4771c1bf1e7941aed36acc1b07378245fd0ee72a8df61a53b5ac11e64->leave($__internal_451499c4771c1bf1e7941aed36acc1b07378245fd0ee72a8df61a53b5ac11e64_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_7a019e23749594ea6fa3009fbfdeb72764d635855ba49b2131226515e29bb0e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a019e23749594ea6fa3009fbfdeb72764d635855ba49b2131226515e29bb0e4->enter($__internal_7a019e23749594ea6fa3009fbfdeb72764d635855ba49b2131226515e29bb0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_25ad21d9df8b171dc30b7c14dc9463b0fe46d318488b56714ad3f8f2a27e38a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25ad21d9df8b171dc30b7c14dc9463b0fe46d318488b56714ad3f8f2a27e38a6->enter($__internal_25ad21d9df8b171dc30b7c14dc9463b0fe46d318488b56714ad3f8f2a27e38a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_25ad21d9df8b171dc30b7c14dc9463b0fe46d318488b56714ad3f8f2a27e38a6->leave($__internal_25ad21d9df8b171dc30b7c14dc9463b0fe46d318488b56714ad3f8f2a27e38a6_prof);

        
        $__internal_7a019e23749594ea6fa3009fbfdeb72764d635855ba49b2131226515e29bb0e4->leave($__internal_7a019e23749594ea6fa3009fbfdeb72764d635855ba49b2131226515e29bb0e4_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_3511a09b3ee8152837efea5d3bfd30928217049164d62fce09cbb515e91fd6e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3511a09b3ee8152837efea5d3bfd30928217049164d62fce09cbb515e91fd6e9->enter($__internal_3511a09b3ee8152837efea5d3bfd30928217049164d62fce09cbb515e91fd6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_9dc2e89a5b4a5020d05007709ae782c5cfaabf90d1acf3ef92005b67c1aa5483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dc2e89a5b4a5020d05007709ae782c5cfaabf90d1acf3ef92005b67c1aa5483->enter($__internal_9dc2e89a5b4a5020d05007709ae782c5cfaabf90d1acf3ef92005b67c1aa5483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_9dc2e89a5b4a5020d05007709ae782c5cfaabf90d1acf3ef92005b67c1aa5483->leave($__internal_9dc2e89a5b4a5020d05007709ae782c5cfaabf90d1acf3ef92005b67c1aa5483_prof);

        
        $__internal_3511a09b3ee8152837efea5d3bfd30928217049164d62fce09cbb515e91fd6e9->leave($__internal_3511a09b3ee8152837efea5d3bfd30928217049164d62fce09cbb515e91fd6e9_prof);

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
", "form_table_layout.html.twig", "/var/www/miner/vendor/symfony/twig-bridge/Resources/views/Form/form_table_layout.html.twig");
    }
}
