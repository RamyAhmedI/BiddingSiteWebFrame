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
class __TwigTemplate_d6e2a9f246265e2792b5d9237fe59813 extends Template
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
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_product_index");
        echo "\"  style = \"color:#FFFFFF\">
                    Products Listings
                </a>
            </li>
            <li>
                <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_make_comment_index");
        echo "\"  style = \"color:#FFFFFF\">
                    Forum
                </a>
            </li>
            ";
        // line 78
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 79
            echo "            <li>
                <a href=\"";
            // line 80
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_shipping_details_index");
            echo "\"  style = \"color:#FFFFFF\">
                    Shipping Details
                </a>
            </li>
            ";
        }
        // line 85
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 86
            echo "                <li>
                    <a href=\"";
            // line 87
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_logout");
            echo "\" style = \"color:#FFFFFF\">logout</a>
                ";
        } else {
            // line 89
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_login");
            echo "\" style=\"color:#FFFFFF\">login</a>
                ";
        }
        // line 91
        echo "                </li>

            ";
        // line 93
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 94
            echo "            <li>
                <a href=\"";
            // line 95
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            echo "\" style = \"color:#FFFFFF\">
                    Manage Users
                </a>
            </li>
            ";
        }
        // line 100
        echo "
            ";
        // line 101
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 102
            echo "            <li>
             <p style = \"color:#FFFFFF\">logged in as: ";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103), "username", [], "any", false, false, false, 103), "html", null, true);
            echo "</p>
             </li>
             ";
        }
        // line 106
        echo "
             ";
        // line 107
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SELLER")) {
            // line 108
            echo "            <li>
             <p style = \"color:#FFFFFF\">SELLER</p>
             </li>
             ";
        }
        // line 112
        echo "
             ";
        // line 113
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 114
            echo "            <li>
             <p style = \"color:#FFFFFF\">ADMIN</p>
             </li>
             ";
        }
        // line 118
        echo "
        </ul>
    </nav>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    ";
        // line 124
        $this->displayBlock('body', $context, $blocks);
        // line 125
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

    // line 124
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
        return array (  305 => 124,  295 => 24,  285 => 22,  275 => 20,  265 => 18,  246 => 5,  230 => 125,  228 => 124,  220 => 118,  214 => 114,  212 => 113,  209 => 112,  203 => 108,  201 => 107,  198 => 106,  192 => 103,  189 => 102,  187 => 101,  184 => 100,  176 => 95,  173 => 94,  171 => 93,  167 => 91,  161 => 89,  156 => 87,  153 => 86,  150 => 85,  142 => 80,  139 => 79,  137 => 78,  130 => 74,  122 => 69,  76 => 25,  74 => 22,  71 => 21,  69 => 18,  53 => 5,  47 => 1,);
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
            {% if is_granted('ROLE_USER') %}
            <li>
                <a href=\"{{ url('app_shipping_details_index') }}\"  style = \"color:#FFFFFF\">
                    Shipping Details
                </a>
            </li>
            {%endif%}
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <li>
                    <a href=\"{{ url('app_logout') }}\" style = \"color:#FFFFFF\">logout</a>
                {% else %}
                    <a href=\"{{ url('app_login') }}\" style=\"color:#FFFFFF\">login</a>
                {% endif %}
                </li>

            {% if is_granted('ROLE_ADMIN') %}
            <li>
                <a href=\"{{ path('app_user_index') }}\" style = \"color:#FFFFFF\">
                    Manage Users
                </a>
            </li>
            {% endif %}

            {% if is_granted('ROLE_USER') %}
            <li>
             <p style = \"color:#FFFFFF\">logged in as: {{ app.user.username }}</p>
             </li>
             {%endif%}

             {% if is_granted('ROLE_SELLER') %}
            <li>
             <p style = \"color:#FFFFFF\">SELLER</p>
             </li>
             {%endif%}

             {% if is_granted('ROLE_ADMIN') %}
            <li>
             <p style = \"color:#FFFFFF\">ADMIN</p>
             </li>
             {%endif%}

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
