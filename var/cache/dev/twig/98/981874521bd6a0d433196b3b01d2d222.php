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

/* product/show.html.twig */
class __TwigTemplate_b15ad4f6548561b026ef7b80d56cba71 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/show.html.twig", 1);
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

        echo "Product";
        
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
        echo "    <h1>Product</h1>

    <table class=\"table\">
        <tbody>
        ";
        // line 10
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 11
            echo "            <tr>
                <th>Id</th>
                <td>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
            echo "</td>
            </tr>
            ";
        }
        // line 16
        echo "            <tr>
                <th>ProductName</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 18, $this->source); })()), "productName", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>ProductMake</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 22, $this->source); })()), "productMake", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>ProductStorageSize</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 26, $this->source); })()), "productStorageSize", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>ProductOS</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 30, $this->source); })()), "productOS", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>BidStatus</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 34, $this->source); })()), "bidStatus", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>BidAmount</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 38, $this->source); })()), "bidAmount", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 42, $this->source); })()), "price", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_index");
        echo "\">back to list</a>

    ";
        // line 49
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 50
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">edit</a>
    ";
        }
        // line 52
        echo "
    <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)]), "html", null, true);
        echo "\">Make A Bid!</a>

    ";
        // line 55
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SELLER")) {
            // line 56
            echo "    ";
            echo twig_include($this->env, $context, "product/_delete_form.html.twig");
            echo "
    ";
        }
        // line 58
        echo "
    ";
        // line 59
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 60
            echo "    ";
            echo twig_include($this->env, $context, "product/_delete_form.html.twig");
            echo "
    ";
        }
        // line 62
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "product/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 62,  194 => 60,  192 => 59,  189 => 58,  183 => 56,  181 => 55,  176 => 53,  173 => 52,  167 => 50,  165 => 49,  160 => 47,  152 => 42,  145 => 38,  138 => 34,  131 => 30,  124 => 26,  117 => 22,  110 => 18,  106 => 16,  100 => 13,  96 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Product{% endblock %}

{% block body %}
    <h1>Product</h1>

    <table class=\"table\">
        <tbody>
        {% if is_granted('ROLE_ADMIN') %}
            <tr>
                <th>Id</th>
                <td>{{ product.id }}</td>
            </tr>
            {%endif%}
            <tr>
                <th>ProductName</th>
                <td>{{ product.productName }}</td>
            </tr>
            <tr>
                <th>ProductMake</th>
                <td>{{ product.productMake }}</td>
            </tr>
            <tr>
                <th>ProductStorageSize</th>
                <td>{{ product.productStorageSize }}</td>
            </tr>
            <tr>
                <th>ProductOS</th>
                <td>{{ product.productOS }}</td>
            </tr>
            <tr>
                <th>BidStatus</th>
                <td>{{ product.bidStatus }}</td>
            </tr>
            <tr>
                <th>BidAmount</th>
                <td>{{ product.bidAmount }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ product.price }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_product_index') }}\">back to list</a>

    {% if is_granted('ROLE_ADMIN') %}
    <a href=\"{{ path('app_product_edit', {'id': product.id}) }}\">edit</a>
    {% endif %}

    <a href=\"{{ path('app_product_edit', {'id': product.id}) }}\">Make A Bid!</a>

    {% if is_granted('ROLE_SELLER') %}
    {{ include('product/_delete_form.html.twig') }}
    {%endif%}

    {% if is_granted('ROLE_ADMIN') %}
    {{ include('product/_delete_form.html.twig') }}
    {%endif%}

{% endblock %}
", "product/show.html.twig", "C:\\Year 3 College\\WebFrame\\crud01_completed\\templates\\product\\show.html.twig");
    }
}
