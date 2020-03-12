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
class __TwigTemplate_10b434e73ca82793871a28dc0717603fb8f004872297e1ac14c13ea38af294b9 extends \Twig\Template
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
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        \t
\t\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Poppins&display=swap\" >
\t\t<link href=\"https://fonts.googleapis.com/css?family=Alfa+Slab+One&display=swap\" rel=\"stylesheet\">
\t\t<link href=\"https://fonts.googleapis.com/css?family=Philosopher&display=swap\" rel=\"stylesheet\">  
\t\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
     \t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
\t\t<!-- fancybox -->
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css\"/>
\t\t<link rel=\"stylesheet\" href=\"/css/swiper.min.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/styles.css\">
\t\t
\t\t<link rel=\"stylesheet\" href=\"/css/avatars.css\" >
\t\t<link rel=\"icon\" href=\"/images/logo.jpg\" />

        ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "    </head>

    <body>
\t\t<div id=\"top-content\">
\t\t\t<header>
\t\t\t\t<!-- <a class=\"d-flex align-items-center justify-content-center\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\"><img src=\"/images/logo.png\" class=\"img-fluid h-auto img-logo\" style=\"width: 3em;\"></a> -->
\t\t\t\t\t<div class=\"logo-div\">
\t\t\t\t\t\t<figure class=\"logo\">
\t\t\t\t\t\t\t<img src=\"/images/logo.jpg\" alt=\"logo\">
\t\t\t\t\t\t</figure>
\t\t\t\t\t</div>
\t\t\t\t\t<h1 class=\"justify-content-center d-flex text-uppercase mx-auto name-asso\">Amicale BMW Moto 38</h1>
\t\t\t</header>
\t\t\t
\t\t\t<nav class=\"navbar sticky-top navbar-expand-lg navbar-light py-0 \">\t\t\t
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>

\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t<ul class=\"navbar-nav mr-lg-auto\">
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link nav-perso\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Accueil</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link nav-perso\" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_balades");
        echo "\">Balades</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link nav-perso\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_albums");
        echo "\">Albums</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link nav-perso\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_reunions");
        echo "\">Réunions</a></li>\t\t\t\t
\t\t\t\t\t\t";
        // line 47
        echo "\t\t\t\t\t\t";
        // line 48
        echo "\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"navbar-nav ml-lg-auto perso-nav-btn d-flex justify-content-end\">
\t\t\t\t\t\t";
        // line 50
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "session", [], "any", false, false, false, 50), "get", [0 => "ranks"], "method", false, false, false, 50))) {
            // line 51
            echo "
\t\t\t\t\t\t\t<li class=\"nav-item my-auto pr-1 \">
\t\t\t\t\t\t\t\t<a title=\"Déconnexion\" class=\"nav-link btn-link-red btn btn-outline-danger\" href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deconnexion_user");
            echo "\"><i class=\"fas fa-power-off\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item my-auto pr-1\">
\t\t\t\t\t\t\t\t<a class=\"nav-link btn-link-grey btn btn-outline-secondary\" href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_accueil");
            echo "\"><i class=\"fas fa-user-edit\"></i> ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "session", [], "any", false, false, false, 56), "get", [0 => "prenom"], "method", false, false, false, 56) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "session", [], "any", false, false, false, 56), "get", [0 => "nom"], "method", false, false, false, 56)), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t";
        } else {
            // line 60
            echo "
\t\t\t\t\t\t\t<li class=\"nav-item my-auto pr-1 \">
\t\t\t\t\t\t\t\t<a title=\"Connexion\" class=\"nav-link btn-link-green btn btn-outline-success \" href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion_user");
            echo "\"><i class=\"fas fa-power-off\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item my-auto pr-1 \">
\t\t\t\t\t\t\t\t<a class=\"nav-link btn-outline-secondary btn btn-link-grey\" href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription_user");
            echo "\">Inscription</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t";
        }
        // line 69
        echo "
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</nav>

\t\t\t<main class=\"px-0\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t";
        // line 77
        $this->displayBlock('content', $context, $blocks);
        // line 78
        echo "\t\t\t\t</div>
\t\t\t</main>
\t\t</div>
 
\t\t<footer class=\"base-footer footer px-5 h-auto\"> <!-- fixed-bottom -->
\t\t\t<div class=\"row\">\t\t\t
\t\t\t\t<div class=\"col-md-4 align-middle my-auto\"><a href =\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("confidentialite");
        echo "\" class=\"colorlink footerlink\">Politique de confidentialité</a></div>
\t\t\t\t<div class=\"col-md-4 text-center align-middle copyright my-auto \">GSM3 Copyright &copy; - ";
        // line 85
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</div>
\t\t\t\t<div class=\"col-md-4 align-middle text-right my-auto\"><a href=\"https://www.flickr.com/photos/136404712@N02/albums\" target=\"blank\" class=\"colorlink footerlink\">Site photo de l'Amicale</a></div>
\t\t\t</div>  
\t\t</footer>

\t\t// <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
\t\t<!-- // <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"></script> -->
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js\"></script>

\t\t<!-- // <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js\"></script> -->
\t\t<script src=\"/js/jquery.cookie.js\"></script>




\t\t
        ";
        // line 103
        $this->displayBlock('javascripts', $context, $blocks);
        // line 104
        echo "
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 103
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  274 => 103,  256 => 77,  238 => 20,  219 => 5,  206 => 104,  204 => 103,  183 => 85,  179 => 84,  171 => 78,  169 => 77,  159 => 69,  152 => 65,  146 => 62,  142 => 60,  133 => 56,  127 => 53,  123 => 51,  121 => 50,  117 => 48,  115 => 47,  111 => 45,  107 => 44,  103 => 43,  99 => 42,  80 => 26,  73 => 21,  71 => 20,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        \t
\t\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Poppins&display=swap\" >
\t\t<link href=\"https://fonts.googleapis.com/css?family=Alfa+Slab+One&display=swap\" rel=\"stylesheet\">
\t\t<link href=\"https://fonts.googleapis.com/css?family=Philosopher&display=swap\" rel=\"stylesheet\">  
\t\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
     \t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
\t\t<!-- fancybox -->
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css\"/>
\t\t<link rel=\"stylesheet\" href=\"/css/swiper.min.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/styles.css\">
\t\t
\t\t<link rel=\"stylesheet\" href=\"/css/avatars.css\" >
\t\t<link rel=\"icon\" href=\"/images/logo.jpg\" />

        {% block stylesheets %}{% endblock %}
    </head>

    <body>
\t\t<div id=\"top-content\">
\t\t\t<header>
\t\t\t\t<!-- <a class=\"d-flex align-items-center justify-content-center\" href=\"{{ path('accueil') }}\"><img src=\"/images/logo.png\" class=\"img-fluid h-auto img-logo\" style=\"width: 3em;\"></a> -->
\t\t\t\t\t<div class=\"logo-div\">
\t\t\t\t\t\t<figure class=\"logo\">
\t\t\t\t\t\t\t<img src=\"/images/logo.jpg\" alt=\"logo\">
\t\t\t\t\t\t</figure>
\t\t\t\t\t</div>
\t\t\t\t\t<h1 class=\"justify-content-center d-flex text-uppercase mx-auto name-asso\">Amicale BMW Moto 38</h1>
\t\t\t</header>
\t\t\t
\t\t\t<nav class=\"navbar sticky-top navbar-expand-lg navbar-light py-0 \">\t\t\t
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>

\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t<ul class=\"navbar-nav mr-lg-auto\">
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link nav-perso\" href=\"{{ path('accueil') }}\">Accueil</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link nav-perso\" href=\"{{ path('index_balades') }}\">Balades</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link nav-perso\" href=\"{{ path('index_albums') }}\">Albums</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link nav-perso\" href=\"{{ path('index_reunions') }}\">Réunions</a></li>\t\t\t\t
\t\t\t\t\t\t{#{% if 'bureau' in app.session.get('ranks') %}#}
\t\t\t\t\t\t{#{% endif %}#}
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"navbar-nav ml-lg-auto perso-nav-btn d-flex justify-content-end\">
\t\t\t\t\t\t{% if app.session.get('ranks') is not null %}

\t\t\t\t\t\t\t<li class=\"nav-item my-auto pr-1 \">
\t\t\t\t\t\t\t\t<a title=\"Déconnexion\" class=\"nav-link btn-link-red btn btn-outline-danger\" href=\"{{ path('deconnexion_user') }}\"><i class=\"fas fa-power-off\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item my-auto pr-1\">
\t\t\t\t\t\t\t\t<a class=\"nav-link btn-link-grey btn btn-outline-secondary\" href=\"{{ path('admin_accueil') }}\"><i class=\"fas fa-user-edit\"></i> {{ app.session.get('prenom') ~ ' ' ~ app.session.get('nom') }}</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t{% else %}

\t\t\t\t\t\t\t<li class=\"nav-item my-auto pr-1 \">
\t\t\t\t\t\t\t\t<a title=\"Connexion\" class=\"nav-link btn-link-green btn btn-outline-success \" href=\"{{ path('connexion_user') }}\"><i class=\"fas fa-power-off\"></i></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item my-auto pr-1 \">
\t\t\t\t\t\t\t\t<a class=\"nav-link btn-outline-secondary btn btn-link-grey\" href=\"{{ path('inscription_user') }}\">Inscription</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t{% endif %}

\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</nav>

\t\t\t<main class=\"px-0\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t{% block content %}{% endblock %}
\t\t\t\t</div>
\t\t\t</main>
\t\t</div>
 
\t\t<footer class=\"base-footer footer px-5 h-auto\"> <!-- fixed-bottom -->
\t\t\t<div class=\"row\">\t\t\t
\t\t\t\t<div class=\"col-md-4 align-middle my-auto\"><a href =\"{{ path('confidentialite') }}\" class=\"colorlink footerlink\">Politique de confidentialité</a></div>
\t\t\t\t<div class=\"col-md-4 text-center align-middle copyright my-auto \">GSM3 Copyright &copy; - {{\"now\"|date(\"Y\")}}</div>
\t\t\t\t<div class=\"col-md-4 align-middle text-right my-auto\"><a href=\"https://www.flickr.com/photos/136404712@N02/albums\" target=\"blank\" class=\"colorlink footerlink\">Site photo de l'Amicale</a></div>
\t\t\t</div>  
\t\t</footer>

\t\t// <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
\t\t<!-- // <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"></script> -->
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js\"></script>

\t\t<!-- // <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js\"></script> -->
\t\t<script src=\"/js/jquery.cookie.js\"></script>




\t\t
        {% block javascripts %}{% endblock %}

    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\moto_club\\templates\\base.html.twig");
    }
}
