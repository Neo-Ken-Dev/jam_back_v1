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

/* search/index.html.twig */
class __TwigTemplate_6c7f66ba8e72b4d33d3dfeea05c54826 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "search/index.html.twig", 1);
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

        echo "Recherche
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
{ encore_entry_script_tags('cart') }}
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "

    <div class=\"row mt-4\">
        <div class=\"col-12 mt-4\" id=\"content\">
            <div class=\"row\">

                <div class=\"col-8\">
                    <div class=\"row\">
                        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 25
            echo "                            <div class=\"m-2 col-3 m-22 card\" product=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "\">
                                <img class=\"p-4 card-img-top\" src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 26))), "html", null, true);
            echo "\">
                                <div class=\"card-body d-flex flex-column justify-content-between\">
                                    <h5 class=\"card-title\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 28), "html", null, true);
            echo "</h5>
                                    <p class=\"card-text\">
                                        ";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 30) / 100), "EUR", array(), "fr"), "html", null, true);
            echo "
                                    </p>
                                    <div
                                            class=\"row\">
                                        <form class=\"col\" action=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addCart", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">

                                            ";
            // line 36
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 36), "get", ["cart"], "method", false, true, false, 36), twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 36), [], "array", true, true, false, 36)) {
                // line 37
                echo "
                                                <input class=\"quantity form-control\" name=\"quantity\" type=\"number\"
                                                       value=\"1\">
                                                <button data-product=\"";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 40), "html", null, true);
                echo "\"
                                                        class=\"mt-2 addCartButton btn btn-dark\" type=\"submit\">
                                                    AJOUTER
                                                </button>
                                            ";
            } else {
                // line 45
                echo "                                                <input class=\"quantity form-control\" name=\"quantity\" type=\"number\"
                                                       value=\"";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "session", [], "any", false, false, false, 46), "get", ["cart"], "method", false, false, false, 46), twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 46), [], "array", false, false, false, 46), "html", null, true);
                echo "\">
                                                <button data-product=\"";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 47), "html", null, true);
                echo "\"
                                                        class=\"mt-2 addCartButton btn btn-dark\" type=\"submit\">
                                                    MODIFIER
                                                </button>
                                            ";
            }
            // line 52
            echo "                                        </form>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
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
        return "search/index.html.twig";
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
        return array (  223 => 57,  213 => 52,  205 => 47,  201 => 46,  198 => 45,  190 => 40,  185 => 37,  183 => 36,  178 => 34,  171 => 30,  166 => 28,  161 => 26,  156 => 25,  152 => 24,  142 => 16,  132 => 15,  118 => 11,  108 => 10,  96 => 7,  91 => 6,  81 => 5,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Recherche
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {{ encore_entry_link_tags('filter') }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{ encore_entry_script_tags('cart') }}
{% endblock %}

{% block body %}


    <div class=\"row mt-4\">
        <div class=\"col-12 mt-4\" id=\"content\">
            <div class=\"row\">

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
", "search/index.html.twig", "/home/hub-grade/Documents/3wa/refacto/jam_back_v1/templates/search/index.html.twig");
    }
}
