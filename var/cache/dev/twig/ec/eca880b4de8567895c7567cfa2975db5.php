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

/* header.html.twig */
class __TwigTemplate_f885fa4cc73250961032b25e77788235 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-md navbar-light fixed-top bg-white border-bottom border-dark border-2\">
    <div class=\"container-fluid mx-5\">
        <a class=\"navbar-brand\" href=\"/\">Shop</a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\"
                aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <ul class=\"navbar-nav me-auto mb-2 mb-md-0\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
        echo "\">Cart</a>
                </li>

            </ul>
            <form class=\"d-flex mb-0\" action=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\">

                <div class=\"input-group\">
                    <div class=\"form-outline\">
                        <input id=\"search\" list=\"searchList\" name=\"search\" class=\"form-control\" type=\"search\"
                               placeholder=\"Search\" aria-label=\"Search\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-dark\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"none\" stroke=\"currentColor\"
                             stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"\" role=\"img\"
                             viewbox=\"0 0 24 24\" focusable=\"false\">
                            <title>Search</title>
                            <circle cx=\"10.5\" cy=\"10.5\" r=\"7.5\"></circle>
                            <path d=\"M21 21l-5.2-5.2\"></path>
                        </svg>
                    </button>
                </div>

                <datalist id=\"searchList\"></datalist>
            </form>


        </div>

        <div class=\"col-4 d-flex justify-content-end align-items-center\">


            <a class=\"text-muted\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
        echo "\">
                <svg focusable=\"false\" xmlns=\"http://www.w3.org/2000/svg\" width=\"26\" height=\"26\" fill=\"currentColor\"
                     class=\"bi bi-cart\" viewbox=\"0 0 16 16\">
                    <path stroke=\"black\"
                          d=\"M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\"/>
                </svg>

            </a>
            <a class=\"btn \" id=\"cartQuantity\" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
        echo "\">
                (
                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cartsize"));
        echo "
                )
            </a>


        </div>
        <div class=\"mx-5 d-flex justify-content-end align-items-center \">

            ";
        // line 63
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63)) {
            // line 64
            echo "
                <p class=\"my-2 mx-3\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "email", [], "any", false, false, false, 65), "html", null, true);
            echo "</p>

                <a href=\"";
            // line 67
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">
                    <button type=\"button\" class=\"btn btn-primary me-2\">Deconnexion</button>
                </a>


            ";
        } else {
            // line 73
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">
                    <button type=\"button\" class=\"btn btn-primary me-2\">Connexion</button>
                </a>
                <a href=\"";
            // line 76
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">
                    <button type=\"button\" class=\"btn btn-warning\">
                        Inscription
                    </button>
                </a>
            ";
        }
        // line 82
        echo "        </div>

    </div>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "header.html.twig";
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
        return array (  160 => 82,  151 => 76,  144 => 73,  135 => 67,  130 => 65,  127 => 64,  125 => 63,  114 => 55,  109 => 53,  98 => 45,  68 => 18,  61 => 14,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-md navbar-light fixed-top bg-white border-bottom border-dark border-2\">
    <div class=\"container-fluid mx-5\">
        <a class=\"navbar-brand\" href=\"/\">Shop</a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\"
                aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <ul class=\"navbar-nav me-auto mb-2 mb-md-0\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path(\"home\") }}\">Home</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path(\"cart\") }}\">Cart</a>
                </li>

            </ul>
            <form class=\"d-flex mb-0\" action=\"{{ path('search') }}\">

                <div class=\"input-group\">
                    <div class=\"form-outline\">
                        <input id=\"search\" list=\"searchList\" name=\"search\" class=\"form-control\" type=\"search\"
                               placeholder=\"Search\" aria-label=\"Search\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-dark\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"none\" stroke=\"currentColor\"
                             stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"\" role=\"img\"
                             viewbox=\"0 0 24 24\" focusable=\"false\">
                            <title>Search</title>
                            <circle cx=\"10.5\" cy=\"10.5\" r=\"7.5\"></circle>
                            <path d=\"M21 21l-5.2-5.2\"></path>
                        </svg>
                    </button>
                </div>

                <datalist id=\"searchList\"></datalist>
            </form>


        </div>

        <div class=\"col-4 d-flex justify-content-end align-items-center\">


            <a class=\"text-muted\" href=\"{{ path(\"cart\") }}\">
                <svg focusable=\"false\" xmlns=\"http://www.w3.org/2000/svg\" width=\"26\" height=\"26\" fill=\"currentColor\"
                     class=\"bi bi-cart\" viewbox=\"0 0 16 16\">
                    <path stroke=\"black\"
                          d=\"M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\"/>
                </svg>

            </a>
            <a class=\"btn \" id=\"cartQuantity\" href=\"{{ path('cart') }}\">
                (
                {{ render(path('cartsize')) }}
                )
            </a>


        </div>
        <div class=\"mx-5 d-flex justify-content-end align-items-center \">

            {% if app.user %}

                <p class=\"my-2 mx-3\">{{ app.user.email }}</p>

                <a href=\"{{ path('logout') }}\">
                    <button type=\"button\" class=\"btn btn-primary me-2\">Deconnexion</button>
                </a>


            {% else %}
                <a href=\"{{ path('login') }}\">
                    <button type=\"button\" class=\"btn btn-primary me-2\">Connexion</button>
                </a>
                <a href=\"{{ path('register') }}\">
                    <button type=\"button\" class=\"btn btn-warning\">
                        Inscription
                    </button>
                </a>
            {% endif %}
        </div>

    </div>
</nav>
", "header.html.twig", "/home/hub-grade/Documents/3wa/refacto/jam_back_v1/templates/header.html.twig");
    }
}
