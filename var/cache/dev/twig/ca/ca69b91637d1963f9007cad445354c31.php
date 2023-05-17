<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* shipping_details/show.html.twig */
class __TwigTemplate_01157ecd5f65905e6d6122cf1c09fb7b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shipping_details/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shipping_details/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "shipping_details/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "ShippingDetails";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>ShippingDetails</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shipping_detail"]) || array_key_exists("shipping_detail", $context) ? $context["shipping_detail"] : (function () { throw new RuntimeError('Variable "shipping_detail" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shipping_detail"]) || array_key_exists("shipping_detail", $context) ? $context["shipping_detail"] : (function () { throw new RuntimeError('Variable "shipping_detail" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shipping_detail"]) || array_key_exists("shipping_detail", $context) ? $context["shipping_detail"] : (function () { throw new RuntimeError('Variable "shipping_detail" does not exist.', 20, $this->source); })()), "phone", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shipping_detail"]) || array_key_exists("shipping_detail", $context) ? $context["shipping_detail"] : (function () { throw new RuntimeError('Variable "shipping_detail" does not exist.', 24, $this->source); })()), "email", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shipping_detail"]) || array_key_exists("shipping_detail", $context) ? $context["shipping_detail"] : (function () { throw new RuntimeError('Variable "shipping_detail" does not exist.', 28, $this->source); })()), "address", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Product</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shipping_detail"]) || array_key_exists("shipping_detail", $context) ? $context["shipping_detail"] : (function () { throw new RuntimeError('Variable "shipping_detail" does not exist.', 32, $this->source); })()), "product", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shipping_detail"]) || array_key_exists("shipping_detail", $context) ? $context["shipping_detail"] : (function () { throw new RuntimeError('Variable "shipping_detail" does not exist.', 36, $this->source); })()), "price", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shipping_details_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shipping_details_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["shipping_detail"]) || array_key_exists("shipping_detail", $context) ? $context["shipping_detail"] : (function () { throw new RuntimeError('Variable "shipping_detail" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 45
        echo twig_include($this->env, $context, "shipping_details/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "shipping_details/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 45,  151 => 43,  146 => 41,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ShippingDetails{% endblock %}

{% block body %}
    <h1>ShippingDetails</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ shipping_detail.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ shipping_detail.name }}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{ shipping_detail.phone }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ shipping_detail.email }}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{ shipping_detail.address }}</td>
            </tr>
            <tr>
                <th>Product</th>
                <td>{{ shipping_detail.product }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ shipping_detail.price }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_shipping_details_index') }}\">back to list</a>

    <a href=\"{{ path('app_shipping_details_edit', {'id': shipping_detail.id}) }}\">edit</a>

    {{ include('shipping_details/_delete_form.html.twig') }}
{% endblock %}
", "shipping_details/show.html.twig", "C:\\Year 3 College\\WebFrame\\crud01_completed\\templates\\shipping_details\\show.html.twig");
    }
}
