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

/* cart/index.html.twig */
class __TwigTemplate_f18535682ccaf337b803728e4ebf360d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        echo "Panier
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 8
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("cart");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    ";
        // line 13
        if ((twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 13, $this->source); })())) > 0)) {
            // line 14
            echo "        <div class=\"row\">
        ";
            // line 15
            $context["total"] = 0;
            // line 16
            echo "        <div class=\"row d-flex justify-content-center align-items-center h-100\">
            <div class=\"col-12\">
                <div class=\"card card-registration card-registration-2\" style=\"border-radius: 15px;\">
                    <div class=\"card-body p-0\">
                        <div class=\"row g-0\">
                            <div class=\"col-lg-8\">
                                <div class=\"p-5\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-5\">
                                        <h1 class=\"fw-bold mb-0 text-black\">Panier</h1>
                                        <h6 class=\"mb-0 text-muted\">";
            // line 25
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 25, $this->source); })())), "html", null, true);
            echo "
                                            produits</h6>
                                    </div>
                                    <hr class=\"my-4\">
                                    ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 30
                echo "                                        <div class=\"row mb-4 d-flex justify-content-between align-items-center\">
                                            <div class=\"col-md-2 col-lg-2 col-xl-2\">
                                                <img src=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 32))), "html", null, true);
                echo "\"
                                                     class=\"img-fluid rounded-3\" alt=\"Cotton T-shirt\">
                                            </div>
                                            <div class=\"col-md-3 col-lg-3 col-xl-3\">
                                                <h6 class=\"text-muted\">";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 36), "html", null, true);
                echo "</h6>
                                                ";
                // line 38
                echo "                                            </div>
                                            <div class=\"col-md-3 col-lg-3 col-xl-2 d-flex\"
                                                 product=\"";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 40), "html", null, true);
                echo "\">
                                                <div>
                                                    <span class=\"quantity fw-bold fs-4\">";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 42), "html", null, true);
                echo "</span>
                                                </div>
                                            </div>
                                            <div class=\"col-md-2 col-lg-2 col-xl-2 \">
                                                <h6 class=\"mb-0\">
                                                    ";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 47) / 100), "EUR", array(), "fr"), "html", null, true);
                echo "
                                                </h6>

                                            </div>
                                            <div class=\"col-md-2 col-lg-2 col-xl-2 \">
                                                <h6 class=\"mb-0\">
                                                    ";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(((twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 53) / 100) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 53)), "EUR", array(), "fr"), "html", null, true);
                echo "
                                                </h6>
                                                ";
                // line 55
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 55, $this->source); })()) + ((twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 55) / 100) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 55)));
                // line 56
                echo "                                            </div>

                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "

                                    <hr class=\"my-4\">
                                </div>
                            </div>
                            <div class=\"col-lg-4 bg-grey\">
                                <div class=\"p-5\">
                                    <h3 class=\"fw-bold mb-5 mt-2 pt-1\">Synthèse</h3>
                                    <hr class=\"my-4\">

                                    <div class=\"d-flex justify-content-between mb-4\">
                                        <h5 class=\"text-uppercase\">Total</h5>
                                        <h5>€
                                            ";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 73, $this->source); })()), "EUR", array(), "fr"), "html", null, true);
            echo "</h5>
                                    </div>
                                    <div class=\"row\">
                                        ";
            // line 76
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76)) {
                // line 77
                echo "                                            <div class=\"d-flex justify-content-between mb-4\">

                                                <p class=\"my-2 mx-3\">Vous devez être connecté pour commander :</p>
                                            </div>
                                            <div class=\"d-flex justify-content-between mb-4\">

                                                <a href=\"";
                // line 83
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
                echo "\">
                                                    <button type=\"button\" class=\"btn btn-primary me-2\">Connexion
                                                    </button>
                                                </a>
                                                <a href=\"";
                // line 87
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
                echo "\">
                                                    <button type=\"button\" class=\"btn btn-warning\">
                                                        Inscription
                                                    </button>
                                                </a>
                                            </div>
                                        ";
            } else {
                // line 94
                echo "                                            <div class=\"d-flex justify-content-between mb-4\">

                                                <a class=\"m-5  btn btn-dark\" ";
                // line 96
                if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "user", [], "any", false, false, false, 96)) {
                    echo " disabled=\"true\" ";
                }
                // line 97
                echo "                                                   href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout");
                echo "\" role=\"button\"> VALIDER LE
                                                    PANIER

                                                </a>
                                            </div>
                                        ";
            }
            // line 103
            echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        } else {
            // line 112
            echo "        <div class=\"row\">
            <p>Le panier est vide.</p>
        </div>
    ";
        }
        // line 116
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "cart/index.html.twig";
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
        return array (  289 => 116,  283 => 112,  272 => 103,  262 => 97,  258 => 96,  254 => 94,  244 => 87,  237 => 83,  229 => 77,  227 => 76,  221 => 73,  206 => 60,  197 => 56,  195 => 55,  190 => 53,  181 => 47,  173 => 42,  168 => 40,  164 => 38,  160 => 36,  153 => 32,  149 => 30,  145 => 29,  138 => 25,  127 => 16,  125 => 15,  122 => 14,  120 => 13,  117 => 12,  107 => 11,  95 => 8,  90 => 7,  80 => 6,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Panier
{% endblock %}


{% block javascripts %}
    {{ parent() }}
    {{ encore_entry_script_tags('cart') }}
{% endblock %}

{% block body %}

    {% if cart|length >0 %}
        <div class=\"row\">
        {% set total = 0 %}
        <div class=\"row d-flex justify-content-center align-items-center h-100\">
            <div class=\"col-12\">
                <div class=\"card card-registration card-registration-2\" style=\"border-radius: 15px;\">
                    <div class=\"card-body p-0\">
                        <div class=\"row g-0\">
                            <div class=\"col-lg-8\">
                                <div class=\"p-5\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-5\">
                                        <h1 class=\"fw-bold mb-0 text-black\">Panier</h1>
                                        <h6 class=\"mb-0 text-muted\">{{ cart|length }}
                                            produits</h6>
                                    </div>
                                    <hr class=\"my-4\">
                                    {% for product in cart %}
                                        <div class=\"row mb-4 d-flex justify-content-between align-items-center\">
                                            <div class=\"col-md-2 col-lg-2 col-xl-2\">
                                                <img src=\"{{ asset(\"uploads/\"~product.image) }}\"
                                                     class=\"img-fluid rounded-3\" alt=\"Cotton T-shirt\">
                                            </div>
                                            <div class=\"col-md-3 col-lg-3 col-xl-3\">
                                                <h6 class=\"text-muted\">{{ product.name }}</h6>
                                                {# <h6 class=\"text-black mb-0\">Cotton T-shirt</h6> #}
                                            </div>
                                            <div class=\"col-md-3 col-lg-3 col-xl-2 d-flex\"
                                                 product=\"{{ product.id }}\">
                                                <div>
                                                    <span class=\"quantity fw-bold fs-4\">{{ product.quantity }}</span>
                                                </div>
                                            </div>
                                            <div class=\"col-md-2 col-lg-2 col-xl-2 \">
                                                <h6 class=\"mb-0\">
                                                    {{ (product.price/100)|format_currency(\"EUR\", locale=\"fr\") }}
                                                </h6>

                                            </div>
                                            <div class=\"col-md-2 col-lg-2 col-xl-2 \">
                                                <h6 class=\"mb-0\">
                                                    {{ (product.price/100* product.quantity)|format_currency(\"EUR\", locale=\"fr\") }}
                                                </h6>
                                                {% set total = total + product.price/100 * product.quantity %}
                                            </div>

                                        </div>
                                    {% endfor %}


                                    <hr class=\"my-4\">
                                </div>
                            </div>
                            <div class=\"col-lg-4 bg-grey\">
                                <div class=\"p-5\">
                                    <h3 class=\"fw-bold mb-5 mt-2 pt-1\">Synthèse</h3>
                                    <hr class=\"my-4\">

                                    <div class=\"d-flex justify-content-between mb-4\">
                                        <h5 class=\"text-uppercase\">Total</h5>
                                        <h5>€
                                            {{ total|format_currency(\"EUR\", locale=\"fr\") }}</h5>
                                    </div>
                                    <div class=\"row\">
                                        {% if not app.user %}
                                            <div class=\"d-flex justify-content-between mb-4\">

                                                <p class=\"my-2 mx-3\">Vous devez être connecté pour commander :</p>
                                            </div>
                                            <div class=\"d-flex justify-content-between mb-4\">

                                                <a href=\"{{ path('login') }}\">
                                                    <button type=\"button\" class=\"btn btn-primary me-2\">Connexion
                                                    </button>
                                                </a>
                                                <a href=\"{{ path('register') }}\">
                                                    <button type=\"button\" class=\"btn btn-warning\">
                                                        Inscription
                                                    </button>
                                                </a>
                                            </div>
                                        {% else %}
                                            <div class=\"d-flex justify-content-between mb-4\">

                                                <a class=\"m-5  btn btn-dark\" {% if not app.user %} disabled=\"true\" {% endif %}
                                                   href=\"{{ path(\"checkout\") }}\" role=\"button\"> VALIDER LE
                                                    PANIER

                                                </a>
                                            </div>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {% else %}
        <div class=\"row\">
            <p>Le panier est vide.</p>
        </div>
    {% endif %}
    </div>
{% endblock %}
", "cart/index.html.twig", "/home/hub-grade/Documents/3wa/refacto/jam_back_v1/templates/cart/index.html.twig");
    }
}
