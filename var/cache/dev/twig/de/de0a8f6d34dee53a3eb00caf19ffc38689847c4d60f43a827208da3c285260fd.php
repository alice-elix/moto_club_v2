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
class __TwigTemplate_ad05396b9a0379b286e3078227ac2b88ff76832929cea3c2b90c24b63d768143 extends \Twig\Template
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
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"Site pour l'association de motoclubBMW38 - partie publique\">
        <meta name=\"author\" content=\"MG GD\">

        <title>";
        // line 10
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
\t\t<!-- animation -->
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css\">
\t\t<!-- swiper -->
\t\t<link rel=\"stylesheet\" href=\"/css/swiper.min.css\">
\t\t<!-- styles perso -->
\t\t<link rel=\"stylesheet\" href=\"/css/styles.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/avatars.css\" >
\t\t<link rel=\"icon\" href=\"/images/logo.jpg\" />

        ";
        // line 28
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "
    </head>

    <body>
\t\t<div id=\"top-content\">
\t\t\t<header>
\t\t\t\t<!-- <a class=\"d-flex align-items-center justify-content-center\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\"><img src=\"/images/logo.png\" class=\"img-fluid h-auto img-logo\" style=\"width: 3em;\"></a>
\t\t\t\t\t<div class=\"logo-div\">
\t\t\t\t\t\t<figure class=\"logo\">
\t\t\t\t\t\t\t<img src=\"/images/logo.jpg\" alt=\"logo\">
\t\t\t\t\t\t</figure>
\t\t\t\t\t</div> -->
\t\t\t</header>
\t\t\t
\t\t\t<nav class=\"navbar sticky-top navbar-expand-lg navbar-light py-0 nav-perso \">\t\t\t
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>

\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">

\t\t\t\t\t<div class=\"row w-100 justify-content-between\">
\t\t\t\t\t\t<div class=\"col-md-4 align-middle my-auto d-flex justify-content-start\">
\t\t\t\t\t\t\t<ul class=\"navbar-nav mr-lg-auto\">
\t\t\t\t\t\t\t\t<li class=\"nav-item ";
        // line 53
        if (((isset($context["page_name"]) || array_key_exists("page_name", $context)) && ((isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 53, $this->source); })()) == "Bienvenue"))) {
            echo "active";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link nav-perso \" href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Accueil</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item ";
        // line 56
        if (((isset($context["page_name"]) || array_key_exists("page_name", $context)) && ((isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 56, $this->source); })()) == "Balades"))) {
            echo "active";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link nav-perso\" href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_balades");
        echo "\">Balades</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item ";
        // line 59
        if (((isset($context["page_name"]) || array_key_exists("page_name", $context)) && ((isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 59, $this->source); })()) == "Albums"))) {
            echo "active";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link nav-perso\" href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_albums");
        echo "\">Albums</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item ";
        // line 62
        if (((isset($context["page_name"]) || array_key_exists("page_name", $context)) && ((isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 62, $this->source); })()) == "Réunions"))) {
            echo "active";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link nav-perso\" href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_reunions");
        echo "\">Réunions</a>
\t\t\t\t\t\t\t\t</li>\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 text-center align-middle my-auto d-flex justify-content-center\">
\t\t\t\t\t\t\t<h1 class=\"justify-content-center  d-flex text-uppercase name-asso\">Amicale BMW Moto 38</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 align-middle text-right my-auto d-flex justify-content-end\">
\t\t\t\t\t\t\t<ul class=\"navbar-nav ml-lg-auto d-flex\">

\t\t\t\t\t\t\t\t";
        // line 73
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "session", [], "any", false, false, false, 73), "get", [0 => "ranks"], "method", false, false, false, 73))) {
            // line 74
            echo "\t\t\t\t\t\t\t\t    <li class=\"nav-item dropdown \">
\t\t\t\t\t\t\t\t    \t<a class=\"nav-link dropdown-toggle nav-perso\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t          ";
            // line 76
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "session", [], "any", false, false, false, 76), "get", [0 => "prenom"], "method", false, false, false, 76) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "session", [], "any", false, false, false, 76), "get", [0 => "nom"], "method", false, false, false, 76)), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t    \t</a>
\t\t\t\t\t\t\t\t    \t<div class=\"dropdown-menu  pr-0\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t        \t<a class=\"dropdown-item \" href=\"";
            // line 79
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_accueil");
            echo "\"  aria-disabled=\"true\">Espace Perso</a>
\t\t\t\t\t\t\t\t        \t<a class=\"dropdown-item\" href=\"";
            // line 80
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deconnexion_user");
            echo "\" aria-disabled=\"true\">Déconnexion</a>
\t\t\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t\t\t    </li>
\t\t\t\t\t\t\t\t";
        } else {
            // line 84
            echo "\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle nav-perso connexion-perso\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t      <i class=\"fas fa-user-circle icon-connexion\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-perso\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t    \t<a class=\"dropdown-item\" href=\"";
            // line 89
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion_user");
            echo "\"  aria-disabled=\"true\">Me connecter</a>
\t\t\t\t\t\t\t\t    \t<a class=\"dropdown-item\" href=\"";
            // line 90
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription_user");
            echo "\" aria-disabled=\"true\">M'inscrire</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        // line 94
        echo "
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>

\t\t\t<main class=\"px-0\">
\t\t\t\t<div class=\"container\">

\t\t\t\t\t";
        // line 104
        $this->displayBlock('content', $context, $blocks);
        // line 105
        echo "
\t\t\t\t</div>
\t\t\t</main>
\t\t</div>
 
\t\t<footer class=\"base-footer footer px-5 h-auto\"> <!-- fixed-bottom -->
\t\t\t<div class=\"row\">\t\t\t
\t\t\t\t<div class=\"col-md-4 align-middle my-auto\"><a href =\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("confidentialite");
        echo "\" class=\"colorlink footerlink\">Politique de confidentialité</a></div>
\t\t\t\t<div class=\"col-md-4 text-center align-middle copyright my-auto \">MG GD Copyright &copy; - ";
        // line 113
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</div>
\t\t\t\t<div class=\"col-md-4 align-middle text-right my-auto\"><a href=\"https://www.flickr.com/photos/136404712@N02/albums\" target=\"blank\" class=\"colorlink footerlink\">Site photo de l'Amicale</a></div>
\t\t\t</div>  
\t\t</footer>

\t\t<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
\t\t<!-- // <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"></script> -->
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
\t\t<!-- fancybox -->
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js\"></script>
\t\t<!-- // <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js\"></script> -->
\t\t<script src=\"/js/jquery.cookie.js\"></script>

        ";
        // line 127
        $this->displayBlock('javascripts', $context, $blocks);
        // line 128
        echo "
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue ! ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
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

    // line 104
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

    // line 127
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
        return array (  317 => 127,  299 => 104,  281 => 28,  262 => 10,  249 => 128,  247 => 127,  230 => 113,  226 => 112,  217 => 105,  215 => 104,  203 => 94,  196 => 90,  192 => 89,  185 => 84,  178 => 80,  174 => 79,  168 => 76,  164 => 74,  162 => 73,  149 => 63,  143 => 62,  138 => 60,  132 => 59,  127 => 57,  121 => 56,  116 => 54,  110 => 53,  89 => 35,  81 => 29,  79 => 28,  58 => 10,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"Site pour l'association de motoclubBMW38 - partie publique\">
        <meta name=\"author\" content=\"MG GD\">

        <title>{% block title %}Bienvenue ! {% endblock %}</title>
        \t
\t\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Poppins&display=swap\" >
\t\t<link href=\"https://fonts.googleapis.com/css?family=Alfa+Slab+One&display=swap\" rel=\"stylesheet\">
\t\t<link href=\"https://fonts.googleapis.com/css?family=Philosopher&display=swap\" rel=\"stylesheet\">  
\t\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
     \t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
\t\t<!-- fancybox -->
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css\"/>
\t\t<!-- animation -->
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css\">
\t\t<!-- swiper -->
\t\t<link rel=\"stylesheet\" href=\"/css/swiper.min.css\">
\t\t<!-- styles perso -->
\t\t<link rel=\"stylesheet\" href=\"/css/styles.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/avatars.css\" >
\t\t<link rel=\"icon\" href=\"/images/logo.jpg\" />

        {% block stylesheets %}{% endblock %}

    </head>

    <body>
\t\t<div id=\"top-content\">
\t\t\t<header>
\t\t\t\t<!-- <a class=\"d-flex align-items-center justify-content-center\" href=\"{{ path('accueil') }}\"><img src=\"/images/logo.png\" class=\"img-fluid h-auto img-logo\" style=\"width: 3em;\"></a>
\t\t\t\t\t<div class=\"logo-div\">
\t\t\t\t\t\t<figure class=\"logo\">
\t\t\t\t\t\t\t<img src=\"/images/logo.jpg\" alt=\"logo\">
\t\t\t\t\t\t</figure>
\t\t\t\t\t</div> -->
\t\t\t</header>
\t\t\t
\t\t\t<nav class=\"navbar sticky-top navbar-expand-lg navbar-light py-0 nav-perso \">\t\t\t
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>

\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">

\t\t\t\t\t<div class=\"row w-100 justify-content-between\">
\t\t\t\t\t\t<div class=\"col-md-4 align-middle my-auto d-flex justify-content-start\">
\t\t\t\t\t\t\t<ul class=\"navbar-nav mr-lg-auto\">
\t\t\t\t\t\t\t\t<li class=\"nav-item {% if page_name is defined and page_name == 'Bienvenue' %}active{%endif%}\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link nav-perso \" href=\"{{ path('accueil') }}\">Accueil</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item {% if page_name is defined and page_name == 'Balades' %}active{%endif%}\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link nav-perso\" href=\"{{ path('index_balades') }}\">Balades</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item {% if page_name is defined and page_name == 'Albums' %}active{%endif%}\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link nav-perso\" href=\"{{ path('index_albums') }}\">Albums</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item {% if page_name is defined and page_name == 'Réunions' %}active{%endif%}\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link nav-perso\" href=\"{{ path('index_reunions') }}\">Réunions</a>
\t\t\t\t\t\t\t\t</li>\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 text-center align-middle my-auto d-flex justify-content-center\">
\t\t\t\t\t\t\t<h1 class=\"justify-content-center  d-flex text-uppercase name-asso\">Amicale BMW Moto 38</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 align-middle text-right my-auto d-flex justify-content-end\">
\t\t\t\t\t\t\t<ul class=\"navbar-nav ml-lg-auto d-flex\">

\t\t\t\t\t\t\t\t{% if app.session.get('ranks') is not null %}
\t\t\t\t\t\t\t\t    <li class=\"nav-item dropdown \">
\t\t\t\t\t\t\t\t    \t<a class=\"nav-link dropdown-toggle nav-perso\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t          {{ app.session.get('prenom') ~ ' ' ~ app.session.get('nom') }}
\t\t\t\t\t\t\t\t    \t</a>
\t\t\t\t\t\t\t\t    \t<div class=\"dropdown-menu  pr-0\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t        \t<a class=\"dropdown-item \" href=\"{{ path('admin_accueil') }}\"  aria-disabled=\"true\">Espace Perso</a>
\t\t\t\t\t\t\t\t        \t<a class=\"dropdown-item\" href=\"{{ path('deconnexion_user') }}\" aria-disabled=\"true\">Déconnexion</a>
\t\t\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t\t\t    </li>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle nav-perso connexion-perso\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t      <i class=\"fas fa-user-circle icon-connexion\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-perso\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t    \t<a class=\"dropdown-item\" href=\"{{ path('connexion_user') }}\"  aria-disabled=\"true\">Me connecter</a>
\t\t\t\t\t\t\t\t    \t<a class=\"dropdown-item\" href=\"{{ path('inscription_user') }}\" aria-disabled=\"true\">M'inscrire</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
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
\t\t\t\t<div class=\"col-md-4 text-center align-middle copyright my-auto \">MG GD Copyright &copy; - {{\"now\"|date(\"Y\")}}</div>
\t\t\t\t<div class=\"col-md-4 align-middle text-right my-auto\"><a href=\"https://www.flickr.com/photos/136404712@N02/albums\" target=\"blank\" class=\"colorlink footerlink\">Site photo de l'Amicale</a></div>
\t\t\t</div>  
\t\t</footer>

\t\t<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
\t\t<!-- // <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"></script> -->
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
\t\t<!-- fancybox -->
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js\"></script>
\t\t<!-- // <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js\"></script> -->
\t\t<script src=\"/js/jquery.cookie.js\"></script>

        {% block javascripts %}{% endblock %}

    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\moto_club_v2\\moto_club_v2\\templates\\base.html.twig");
    }
}
