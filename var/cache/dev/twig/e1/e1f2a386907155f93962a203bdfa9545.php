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

/* base.html.twig */
class __TwigTemplate_2b2256620d7014165dfbb5b3d05446ba extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\"
              rel=\"stylesheet\" integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\"
              crossorigin=\"anonymous\" >

        <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js\"
                integrity=\"sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU\"
                crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js\"
                integrity=\"sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj\"
                crossorigin=\"anonymous\"></script>

        ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "
        ";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "    </head>
    <body>

<nav class = \"navbar navbar-expand-sm navbar-dark bg-primary mb-3\">
        <div class = \"collapse navbar-collapse\" id=\"mobile.nav\">
            <ul clas=\"navbar-nav ml-auto\">

            <style>
                nav {
                    text-align: center;
                    margin: 0px 0 0 ;
                    padding: 10px 0;
                }

                nav ul{
                    list-style: none;
                    margin: 0 2px;
                    padding: 0;
                }

                nav li {
                    display: inline-block;
                    padding: 10px 65px;
                }

                nav a {
                    font-weight: normal;
                    padding: 10px 10px;
                    font-size: 1.5em;
                }

            </style>


        <ul>
            <li>
                <a href=\"/\" style = \"color:#FFFFFF\">
                    Home
                </a>
            </li>
            <li>
                <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_product_index");
        echo "\"  style = \"color:#FFFFFF\">
                    Products Listings
                </a>
            </li>
            <li>
                <a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_make_comment_index");
        echo "\"  style = \"color:#FFFFFF\">
                    Forum
                </a>
            </li>
            <li>
                <a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_shipping_details_index");
        echo "\"  style = \"color:#FFFFFF\">
                    Shipping Details
                </a>
            </li>
            <li>
                <a href=\"/user\"  style = \"color:#FFFFFF\">
                    Login
                </a>
            </li>
            <li>
                <a href=\"/logout\"  style = \"color:#FFFFFF\">
                    Logout
                </a>
            </li>
        </ul>
    </nav>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    ";
        // line 95
        $this->displayBlock('body', $context, $blocks);
        // line 96
        echo "                </div>
            </div>
        </div>

    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 95
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 95,  224 => 24,  214 => 22,  204 => 20,  194 => 18,  175 => 5,  159 => 96,  157 => 95,  135 => 76,  127 => 71,  119 => 66,  76 => 25,  74 => 22,  71 => 21,  69 => 18,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>

        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\"
              rel=\"stylesheet\" integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\"
              crossorigin=\"anonymous\" >

        <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js\"
                integrity=\"sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU\"
                crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js\"
                integrity=\"sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj\"
                crossorigin=\"anonymous\"></script>

        {% block stylesheets %}
{#            {{ encore_entry_link_tags('app') }}#}
        {% endblock %}

        {% block javascripts %}
{#            {{ encore_entry_script_tags('app') }}#}
        {% endblock %}
    </head>
    <body>

<nav class = \"navbar navbar-expand-sm navbar-dark bg-primary mb-3\">
        <div class = \"collapse navbar-collapse\" id=\"mobile.nav\">
            <ul clas=\"navbar-nav ml-auto\">

            <style>
                nav {
                    text-align: center;
                    margin: 0px 0 0 ;
                    padding: 10px 0;
                }

                nav ul{
                    list-style: none;
                    margin: 0 2px;
                    padding: 0;
                }

                nav li {
                    display: inline-block;
                    padding: 10px 65px;
                }

                nav a {
                    font-weight: normal;
                    padding: 10px 10px;
                    font-size: 1.5em;
                }

            </style>


        <ul>
            <li>
                <a href=\"/\" style = \"color:#FFFFFF\">
                    Home
                </a>
            </li>
            <li>
                <a href=\"{{ url('app_product_index') }}\"  style = \"color:#FFFFFF\">
                    Products Listings
                </a>
            </li>
            <li>
                <a href=\"{{ url('app_make_comment_index') }}\"  style = \"color:#FFFFFF\">
                    Forum
                </a>
            </li>
            <li>
                <a href=\"{{ url('app_shipping_details_index') }}\"  style = \"color:#FFFFFF\">
                    Shipping Details
                </a>
            </li>
            <li>
                <a href=\"/user\"  style = \"color:#FFFFFF\">
                    Login
                </a>
            </li>
            <li>
                <a href=\"/logout\"  style = \"color:#FFFFFF\">
                    Logout
                </a>
            </li>
        </ul>
    </nav>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    {% block body %}{% endblock %}
                </div>
            </div>
        </div>

    </body>
</html>
", "base.html.twig", "C:\\Year 3 College\\WebFrame\\crud01_completed\\templates\\base.html.twig");
    }
}
