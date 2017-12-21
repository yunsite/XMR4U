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
        $__internal_90248b1c54ff9f816913d94542f952c1e007ef96f80e1e9e490a69e328b59026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90248b1c54ff9f816913d94542f952c1e007ef96f80e1e9e490a69e328b59026->enter($__internal_90248b1c54ff9f816913d94542f952c1e007ef96f80e1e9e490a69e328b59026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_c59d94f1c09979c9ffeb362fd1fec137bde4664ab8cabf394d2f18c2f22751a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c59d94f1c09979c9ffeb362fd1fec137bde4664ab8cabf394d2f18c2f22751a3->enter($__internal_c59d94f1c09979c9ffeb362fd1fec137bde4664ab8cabf394d2f18c2f22751a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_90248b1c54ff9f816913d94542f952c1e007ef96f80e1e9e490a69e328b59026->leave($__internal_90248b1c54ff9f816913d94542f952c1e007ef96f80e1e9e490a69e328b59026_prof);

        
        $__internal_c59d94f1c09979c9ffeb362fd1fec137bde4664ab8cabf394d2f18c2f22751a3->leave($__internal_c59d94f1c09979c9ffeb362fd1fec137bde4664ab8cabf394d2f18c2f22751a3_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_aef0f0c264de16d486a37f3bbc62ce5205510c9ec4e9a9110177e9f11a6dd702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aef0f0c264de16d486a37f3bbc62ce5205510c9ec4e9a9110177e9f11a6dd702->enter($__internal_aef0f0c264de16d486a37f3bbc62ce5205510c9ec4e9a9110177e9f11a6dd702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_bd9c0c3b13601934fe21eb734a275ce36a2aa980f5471bc9899f04564f3e9886 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd9c0c3b13601934fe21eb734a275ce36a2aa980f5471bc9899f04564f3e9886->enter($__internal_bd9c0c3b13601934fe21eb734a275ce36a2aa980f5471bc9899f04564f3e9886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_bd9c0c3b13601934fe21eb734a275ce36a2aa980f5471bc9899f04564f3e9886->leave($__internal_bd9c0c3b13601934fe21eb734a275ce36a2aa980f5471bc9899f04564f3e9886_prof);

        
        $__internal_aef0f0c264de16d486a37f3bbc62ce5205510c9ec4e9a9110177e9f11a6dd702->leave($__internal_aef0f0c264de16d486a37f3bbc62ce5205510c9ec4e9a9110177e9f11a6dd702_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_18bc33e9c7da4eb022accfedef7316942bc8b1baa7993f1e0ffec2b92649aaf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18bc33e9c7da4eb022accfedef7316942bc8b1baa7993f1e0ffec2b92649aaf4->enter($__internal_18bc33e9c7da4eb022accfedef7316942bc8b1baa7993f1e0ffec2b92649aaf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_8b6ce6575c39bf6fc8582a45f47a6eeb3864cd65a59f15e3d6511867fbd972f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b6ce6575c39bf6fc8582a45f47a6eeb3864cd65a59f15e3d6511867fbd972f9->enter($__internal_8b6ce6575c39bf6fc8582a45f47a6eeb3864cd65a59f15e3d6511867fbd972f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_8b6ce6575c39bf6fc8582a45f47a6eeb3864cd65a59f15e3d6511867fbd972f9->leave($__internal_8b6ce6575c39bf6fc8582a45f47a6eeb3864cd65a59f15e3d6511867fbd972f9_prof);

        
        $__internal_18bc33e9c7da4eb022accfedef7316942bc8b1baa7993f1e0ffec2b92649aaf4->leave($__internal_18bc33e9c7da4eb022accfedef7316942bc8b1baa7993f1e0ffec2b92649aaf4_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_ad4d5cfef7be59c3f1db09f6403fb674035e33106d391bfa13b58e137ed31c8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad4d5cfef7be59c3f1db09f6403fb674035e33106d391bfa13b58e137ed31c8b->enter($__internal_ad4d5cfef7be59c3f1db09f6403fb674035e33106d391bfa13b58e137ed31c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_fc3bac2b65ecc76a126d24a13a3c6a33954a53225f1f53e9c5a407a9e3e14716 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc3bac2b65ecc76a126d24a13a3c6a33954a53225f1f53e9c5a407a9e3e14716->enter($__internal_fc3bac2b65ecc76a126d24a13a3c6a33954a53225f1f53e9c5a407a9e3e14716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_fc3bac2b65ecc76a126d24a13a3c6a33954a53225f1f53e9c5a407a9e3e14716->leave($__internal_fc3bac2b65ecc76a126d24a13a3c6a33954a53225f1f53e9c5a407a9e3e14716_prof);

        
        $__internal_ad4d5cfef7be59c3f1db09f6403fb674035e33106d391bfa13b58e137ed31c8b->leave($__internal_ad4d5cfef7be59c3f1db09f6403fb674035e33106d391bfa13b58e137ed31c8b_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_8abc28e572468556d8179e1a28aa623b973e448cfd00f4c3e5474ccd7220a89b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8abc28e572468556d8179e1a28aa623b973e448cfd00f4c3e5474ccd7220a89b->enter($__internal_8abc28e572468556d8179e1a28aa623b973e448cfd00f4c3e5474ccd7220a89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_5c3b49969dea95b8cb8468e35567320932536b20f0943239a3a391c4f0ab79b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c3b49969dea95b8cb8468e35567320932536b20f0943239a3a391c4f0ab79b0->enter($__internal_5c3b49969dea95b8cb8468e35567320932536b20f0943239a3a391c4f0ab79b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_5c3b49969dea95b8cb8468e35567320932536b20f0943239a3a391c4f0ab79b0->leave($__internal_5c3b49969dea95b8cb8468e35567320932536b20f0943239a3a391c4f0ab79b0_prof);

        
        $__internal_8abc28e572468556d8179e1a28aa623b973e448cfd00f4c3e5474ccd7220a89b->leave($__internal_8abc28e572468556d8179e1a28aa623b973e448cfd00f4c3e5474ccd7220a89b_prof);

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
