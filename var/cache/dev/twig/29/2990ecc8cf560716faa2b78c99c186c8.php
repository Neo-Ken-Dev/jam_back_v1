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

/* home/index.html.twig */
class __TwigTemplate_5e4393ca154d17b34bdc03572cb0cf46 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 7
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("filter");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        const minRange = \"";
        // line 13
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["minRange"]) || array_key_exists("minRange", $context) ? $context["minRange"] : (function () { throw new RuntimeError('Variable "minRange" does not exist.', 13, $this->source); })()), "js"), "html", null, true);
        echo "\";
        const maxRange = \"";
        // line 14
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["maxRange"]) || array_key_exists("maxRange", $context) ? $context["maxRange"] : (function () { throw new RuntimeError('Variable "maxRange" does not exist.', 14, $this->source); })()), "js"), "html", null, true);
        echo "\";
        const minChoice = \"";
        // line 15
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["minChoice"]) || array_key_exists("minChoice", $context) ? $context["minChoice"] : (function () { throw new RuntimeError('Variable "minChoice" does not exist.', 15, $this->source); })()), "js"), "html", null, true);
        echo "\";
        const maxChoice = \"";
        // line 16
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["maxChoice"]) || array_key_exists("maxChoice", $context) ? $context["maxChoice"] : (function () { throw new RuntimeError('Variable "maxChoice" does not exist.', 16, $this->source); })()), "js"), "html", null, true);
        echo "\";
    </script>
    ";
        // line 18
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("cart");
        echo "
    ";
        // line 19
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("filter");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "

    <div class=\"row mt-4\">
        <div class=\"col-12 mt-4\" id=\"content\">
            <div class=\"row\">
                <div class=\"col-4\">
                    <form action=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
                        <input id=\"minHidden\" type=\"hidden\" name=\"minPrice\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["minChoice"]) || array_key_exists("minChoice", $context) ? $context["minChoice"] : (function () { throw new RuntimeError('Variable "minChoice" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "\">
                        <input id=\"maxHidden\" type=\"hidden\" name=\"maxPrice\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["maxChoice"]) || array_key_exists("maxChoice", $context) ? $context["maxChoice"] : (function () { throw new RuntimeError('Variable "maxChoice" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "\">

                        <div class=\"my-5\" id=\"slider\"></div>
                        <select name=\"filter\">
                            <option ";
        // line 35
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "request", [], "any", false, false, false, 35), "get", ["filter"], "method", false, false, false, 35) == "price_asc")) {
            echo " selected ";
        }
        // line 36
        echo "                                    value=\"price_asc\">Prix croissant
                            </option>
                            <option ";
        // line 38
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "get", ["filter"], "method", false, false, false, 38) == "price_desc")) {
            echo " selected ";
        }
        // line 39
        echo "                                    value=\"price_desc\">Prix décroissant
                            </option>
                            <option ";
        // line 41
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, false, 41), "get", ["filter"], "method", false, false, false, 41) == "name_asc")) {
            echo " selected ";
        }
        // line 42
        echo "                                    value=\"name_asc\">Alphabétique
                            </option>
                            <option ";
        // line 44
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "request", [], "any", false, false, false, 44), "get", ["filter"], "method", false, false, false, 44) == "name_desc")) {
            echo " selected ";
        }
        // line 45
        echo "                                    value=\"name_desc\">Alphabétique Z->A
                            </option>
                        </select>
                        <br><br>
                        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 49, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 50
            echo "                            <div class=\"form-check\">
                                <input class=\"form-check-input\" ";
            // line 51
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 51), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "request", [], "any", false, false, false, 51), "get", ["category"], "method", false, false, false, 51))) {
                echo " checked ";
            }
            // line 52
            echo "                                       type=\"checkbox\" name=\"category[]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 52), "html", null, true);
            echo "\"
                                       id=\"flexCheckDefault\">
                                <label class=\"form-check-label\" for=\"flexCheckDefault\">
                                    ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 55), "html", null, true);
            echo "
                                </label>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                        <br>
                        <button class=\"btn btn-dark\" type=\"submit\">
                            FILTRER
                        </button>

                    </form>
                </div>
                <div class=\"col-8\">
                    <div class=\"row\">
                        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 68, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 69
            echo "                            <div class=\"m-2 col-3 m-22 card\" product=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 69), "html", null, true);
            echo "\">
                                <img class=\"p-4 card-img-top\" src=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 70))), "html", null, true);
            echo "\">
                                <div class=\"card-body d-flex flex-column justify-content-between\">
                                    <h5 class=\"card-title\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 72), "html", null, true);
            echo "</h5>
                                    <p class=\"card-text\">
                                        ";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 74) / 100), "EUR", array(), "fr"), "html", null, true);
            echo "
                                    </p>
                                    <div
                                            class=\"row\">
                                        <form class=\"col\" action=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addCart", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\">

                                            ";
            // line 80
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 80), "get", ["cart"], "method", false, true, false, 80), twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 80), [], "array", true, true, false, 80)) {
                // line 81
                echo "
                                                <input class=\"quantity form-control\" name=\"quantity\" type=\"number\"
                                                       value=\"1\">
                                                <button data-product=\"";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 84), "html", null, true);
                echo "\"
                                                        class=\"mt-2 addCartButton btn btn-dark\" type=\"submit\">
                                                    AJOUTER
                                                </button>
                                            ";
            } else {
                // line 89
                echo "                                                <input class=\"quantity form-control\" name=\"quantity\" type=\"number\"
                                                       value=\"";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "session", [], "any", false, false, false, 90), "get", ["cart"], "method", false, false, false, 90), twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 90), [], "array", false, false, false, 90), "html", null, true);
                echo "\">
                                                <button data-product=\"";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 91), "html", null, true);
                echo "\"
                                                        class=\"mt-2 addCartButton btn btn-dark\" type=\"submit\">
                                                    MODIFIER
                                                </button>
                                            ";
            }
            // line 96
            echo "                                        </form>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                    </div>
                </div>
            </div>
        </div>

    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  334 => 101,  324 => 96,  316 => 91,  312 => 90,  309 => 89,  301 => 84,  296 => 81,  294 => 80,  289 => 78,  282 => 74,  277 => 72,  272 => 70,  267 => 69,  263 => 68,  252 => 59,  242 => 55,  235 => 52,  231 => 51,  228 => 50,  224 => 49,  218 => 45,  214 => 44,  210 => 42,  206 => 41,  202 => 39,  198 => 38,  194 => 36,  190 => 35,  183 => 31,  179 => 30,  175 => 29,  167 => 23,  157 => 22,  145 => 19,  141 => 18,  136 => 16,  132 => 15,  128 => 14,  124 => 13,  118 => 11,  108 => 10,  96 => 7,  91 => 6,  81 => 5,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Accueil
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {{ encore_entry_link_tags('filter') }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        const minRange = \"{{ minRange|escape('js') }}\";
        const maxRange = \"{{ maxRange|escape('js') }}\";
        const minChoice = \"{{ minChoice|escape('js') }}\";
        const maxChoice = \"{{ maxChoice|escape('js') }}\";
    </script>
    {{ encore_entry_script_tags('cart') }}
    {{ encore_entry_script_tags('filter') }}
{% endblock %}

{% block body %}


    <div class=\"row mt-4\">
        <div class=\"col-12 mt-4\" id=\"content\">
            <div class=\"row\">
                <div class=\"col-4\">
                    <form action=\"{{ path(\"home\") }}\">
                        <input id=\"minHidden\" type=\"hidden\" name=\"minPrice\" value=\"{{ minChoice }}\">
                        <input id=\"maxHidden\" type=\"hidden\" name=\"maxPrice\" value=\"{{ maxChoice }}\">

                        <div class=\"my-5\" id=\"slider\"></div>
                        <select name=\"filter\">
                            <option {% if app.request.get(\"filter\")==\"price_asc\" %} selected {% endif %}
                                    value=\"price_asc\">Prix croissant
                            </option>
                            <option {% if app.request.get(\"filter\")==\"price_desc\" %} selected {% endif %}
                                    value=\"price_desc\">Prix décroissant
                            </option>
                            <option {% if app.request.get(\"filter\")==\"name_asc\" %} selected {% endif %}
                                    value=\"name_asc\">Alphabétique
                            </option>
                            <option {% if app.request.get(\"filter\")==\"name_desc\" %} selected {% endif %}
                                    value=\"name_desc\">Alphabétique Z->A
                            </option>
                        </select>
                        <br><br>
                        {% for category in categories %}
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" {% if category.id in app.request.get(\"category\") %} checked {% endif %}
                                       type=\"checkbox\" name=\"category[]\" value=\"{{ category.id }}\"
                                       id=\"flexCheckDefault\">
                                <label class=\"form-check-label\" for=\"flexCheckDefault\">
                                    {{ category.name }}
                                </label>
                            </div>
                        {% endfor %}
                        <br>
                        <button class=\"btn btn-dark\" type=\"submit\">
                            FILTRER
                        </button>

                    </form>
                </div>
                <div class=\"col-8\">
                    <div class=\"row\">
                        {% for product in products %}
                            <div class=\"m-2 col-3 m-22 card\" product=\"{{ product.id }}\">
                                <img class=\"p-4 card-img-top\" src=\"{{ asset(\"uploads/\"~product.image) }}\">
                                <div class=\"card-body d-flex flex-column justify-content-between\">
                                    <h5 class=\"card-title\">{{ product.name }}</h5>
                                    <p class=\"card-text\">
                                        {{ (product.price/100)|format_currency(\"EUR\", locale=\"fr\") }}
                                    </p>
                                    <div
                                            class=\"row\">
                                        <form class=\"col\" action=\"{{ path(\"addCart\",{ id: product.id }) }}\">

                                            {% if app.session.get(\"cart\")[product.id] is not defined %}

                                                <input class=\"quantity form-control\" name=\"quantity\" type=\"number\"
                                                       value=\"1\">
                                                <button data-product=\"{{ product.id }}\"
                                                        class=\"mt-2 addCartButton btn btn-dark\" type=\"submit\">
                                                    AJOUTER
                                                </button>
                                            {% else %}
                                                <input class=\"quantity form-control\" name=\"quantity\" type=\"number\"
                                                       value=\"{{ app.session.get(\"cart\")[product.id] }}\">
                                                <button data-product=\"{{ product.id }}\"
                                                        class=\"mt-2 addCartButton btn btn-dark\" type=\"submit\">
                                                    MODIFIER
                                                </button>
                                            {% endif %}
                                        </form>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>

    </div>
{% endblock %}
", "home/index.html.twig", "/home/hub-grade/Documents/3wa/refacto/back aymeric/application-jam-test-api-platform/templates/home/index.html.twig");
    }
}
