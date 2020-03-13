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

/* default/index.html.twig */
class __TwigTemplate_fcdcfe1bfef35d28e9ae36f2d5598f0912f95eebdf4bf1def733116e7c14b2c2 extends \Twig\Template
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
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAmicale BMW Moto 38
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "<link rel=\"stylesheet\" href=\"/css/stylesaccueil.css\" >
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "\t<div class=\"row d-flex justify-content-center\">
\t\t<img class=\"animated infinite bounce arrow-perso\" src=\"https://img.icons8.com/ios-filled/50/000000/expand-arrow.png\"/>\t\t\t\t\t
\t</div>
\t<section id=\"sect-intro\"class=\"py-2 mb-5\">
\t\t<h2 class=\"pb-5 pt-5\">";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "</h2>
\t\t<div class=\"container \" >
\t\t<h3 class=\"pb-5\">Qui sommes-nous ?</h3>
\t\t\t<p class=\"pb-5\">Amicale de motards de l'Isère, notre objectif est de partager le plaisir de rouler dans un esprit de convivialité et de solidarité avec tous les passionnés de moto.</p>
\t\t\t<div class=\"row justify-content-center\" >
\t\t\t\t<div class=\"col-lg-3 pt-3\">
\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t<div class=\"card-title jumbotron text-center\">
\t\t\t\t\t\t\t<h3>Prochaine balade</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-text mx-1\">
\t\t\t\t\t\t\t";
        // line 27
        if ( !twig_test_empty((isset($context["nextbalade"]) || array_key_exists("nextbalade", $context) ? $context["nextbalade"] : (function () { throw new RuntimeError('Variable "nextbalade" does not exist.', 27, $this->source); })()))) {
            // line 28
            echo "\t\t\t\t\t\t\t\t<p>Partageons ensemble la prochaine balade (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["nextbalade"]) || array_key_exists("nextbalade", $context) ? $context["nextbalade"] : (function () { throw new RuntimeError('Variable "nextbalade" does not exist.', 28, $this->source); })()), "Titre", [], "any", false, false, false, 28), "html", null, true);
            echo "), proposée par ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["nextbalade"]) || array_key_exists("nextbalade", $context) ? $context["nextbalade"] : (function () { throw new RuntimeError('Variable "nextbalade" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "prenom", [], "any", false, false, false, 28) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["nextbalade"]) || array_key_exists("nextbalade", $context) ? $context["nextbalade"] : (function () { throw new RuntimeError('Variable "nextbalade" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "nom", [], "any", false, false, false, 28)), "html", null, true);
            echo ".</p>
\t\t\t\t\t\t\t\t<p>RDV le ";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["nextbalade"]) || array_key_exists("nextbalade", $context) ? $context["nextbalade"] : (function () { throw new RuntimeError('Variable "nextbalade" does not exist.', 29, $this->source); })()), "DateDebut", [], "any", false, false, false, 29), "d/m/Y"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t<p>Pour plus d'informations, c'est par là ! <a class=\"cadre\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_balade", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["nextbalade"]) || array_key_exists("nextbalade", $context) ? $context["nextbalade"] : (function () { throw new RuntimeError('Variable "nextbalade" does not exist.', 30, $this->source); })()), "Id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\">Voir la balade</a></p>
\t\t\t\t\t\t\t";
        } else {
            // line 32
            echo "\t\t\t\t\t\t\t\t<p>Amicaliste, partagez vos idées pour de futures balades ! </p>
\t\t\t\t\t\t\t";
        }
        // line 34
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 pt-3\">
\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t<div class=\"card-title jumbotron text-center\">
\t\t\t\t\t\t\t<h3>Prochaine réunion</h3>\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-text mx-1\">
\t\t\t\t\t\t\t";
        // line 43
        if ( !twig_test_empty((isset($context["reunion"]) || array_key_exists("reunion", $context) ? $context["reunion"] : (function () { throw new RuntimeError('Variable "reunion" does not exist.', 43, $this->source); })()))) {
            // line 44
            echo "\t\t\t\t\t\t\t\t<p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunion"]) || array_key_exists("reunion", $context) ? $context["reunion"] : (function () { throw new RuntimeError('Variable "reunion" does not exist.', 44, $this->source); })()), "Titre", [], "any", false, false, false, 44), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t<p>La prochaine réunion se tiendra le ";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunion"]) || array_key_exists("reunion", $context) ? $context["reunion"] : (function () { throw new RuntimeError('Variable "reunion" does not exist.', 45, $this->source); })()), "datetimeReu", [], "any", false, false, false, 45), "d/m/Y"), "html", null, true);
            echo " (Type de réunion : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunion"]) || array_key_exists("reunion", $context) ? $context["reunion"] : (function () { throw new RuntimeError('Variable "reunion" does not exist.', 45, $this->source); })()), "typereu", [], "any", false, false, false, 45), "html", null, true);
            echo "), proposée par ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reunion"]) || array_key_exists("reunion", $context) ? $context["reunion"] : (function () { throw new RuntimeError('Variable "reunion" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "prenom", [], "any", false, false, false, 45), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reunion"]) || array_key_exists("reunion", $context) ? $context["reunion"] : (function () { throw new RuntimeError('Variable "reunion" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "nom", [], "any", false, false, false, 45), "html", null, true);
            echo " </p>
\t\t\t\t\t\t\t\t<p><a class=\"cadre\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_reunion", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["reunion"]) || array_key_exists("reunion", $context) ? $context["reunion"] : (function () { throw new RuntimeError('Variable "reunion" does not exist.', 46, $this->source); })()), "Id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">+ d'informations</a></p>
\t\t\t\t\t\t\t";
        } else {
            // line 48
            echo "\t\t\t\t\t\t\t\t<p>Nous vous communiquerons très vite la date de la prochaine réunion ! </p>
\t\t\t\t\t\t\t";
        }
        // line 50
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 pt-3 \">
\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t<div class=\"card-title jumbotron text-center\">
\t\t\t\t\t\t\t<h3>Dernière balade</h3>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-text mx-1\">
\t\t\t\t\t\t\t";
        // line 60
        if ( !twig_test_empty((isset($context["lastbalade"]) || array_key_exists("lastbalade", $context) ? $context["lastbalade"] : (function () { throw new RuntimeError('Variable "lastbalade" does not exist.', 60, $this->source); })()))) {
            // line 61
            echo "\t\t\t\t\t\t\t\t<p>Retour sur notre dernière aventure (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastbalade"]) || array_key_exists("lastbalade", $context) ? $context["lastbalade"] : (function () { throw new RuntimeError('Variable "lastbalade" does not exist.', 61, $this->source); })()), "Titre", [], "any", false, false, false, 61), "html", null, true);
            echo ") du ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastbalade"]) || array_key_exists("lastbalade", $context) ? $context["lastbalade"] : (function () { throw new RuntimeError('Variable "lastbalade" does not exist.', 61, $this->source); })()), "DateDebut", [], "any", false, false, false, 61), "d/m/Y"), "html", null, true);
            echo ", amicalement proposée par ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lastbalade"]) || array_key_exists("lastbalade", $context) ? $context["lastbalade"] : (function () { throw new RuntimeError('Variable "lastbalade" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "prenom", [], "any", false, false, false, 61), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lastbalade"]) || array_key_exists("lastbalade", $context) ? $context["lastbalade"] : (function () { throw new RuntimeError('Variable "lastbalade" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "nom", [], "any", false, false, false, 61), "html", null, true);
            echo ".</p>
\t\t\t\t\t\t\t\t<a class=\"cadre\" href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_balade", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lastbalade"]) || array_key_exists("lastbalade", $context) ? $context["lastbalade"] : (function () { throw new RuntimeError('Variable "lastbalade" does not exist.', 62, $this->source); })()), "Id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\">Photos et plus</a>
\t\t\t\t\t\t\t";
        } else {
            // line 64
            echo "\t\t\t\t\t\t\t\t<p>Nous vous raconterons bientôt nos aventures...</p>
\t\t\t\t\t\t\t";
        }
        // line 66
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- section bleue !-->
\t<section id=\"sect-cta\" class=\"py-5 mb-5\">
\t\t";
        // line 74
        if ((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "session", [], "any", false, false, false, 74), "get", [0 => "ranks"], "method", false, false, false, 74))) {
            // line 75
            echo "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col align-self-center py-3\">
\t\t\t\t\t<div class=\"d-flex justify-content-center align-items-center h-100\">
\t\t\t\t\t\t<a href=\"";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription_user");
            echo "\" class=\"subscribe d-flex justify-content-center align-items-center\"><svg><rect></rect></svg>En cliquant ici, vous pouvez vous inscrire !! </a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        } else {
            // line 83
            echo "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 py-3\">
\t\t\t\t\t<div class=\"d-flex justify-content-center align-items-center h-100\">
\t\t\t\t\t\t<div class=\"subscribe d-flex justify-content-center align-items-center\"><svg><rect></rect></svg>Prochainement</div></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 py-3 d-flex align-items-center justify-content-center text-center\">
\t\t\t\t\t<p>Vous pourrez consulter ici l'itinéraire de la prochaine balade</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8 py-3 d-flex justify-content-center\">
\t\t\t\t\t<iframe class=\"map\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2890.8222223636526!2d1.4120306157384406!3d43.56858736591556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aebbc66a0644b1%3A0x92867b7cb6c0d89b!2s244%20Route%20de%20Seysses%2C%2031100%20Toulouse!5e0!3m2!1sfr!2sfr!4v1568884368621!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 99
        echo "\t\t\t\t\t
\t</section>
\t<section id=\"sect-form\" class=\"py-5 mb-5 parallax\" >
\t  \t<div class=\"container\">
\t    \t<div class=\"card card-register mx-auto mt-5 pb-5 mb-5 form-perso\">
        \t\t<div class=\"card-body\">
        \t\t\t<form method=\"post\">
            \t\t\t<div class=\"form-group\">
            \t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t<h3 class=\"pb-3\" id=\"contact\">Contactez nous</h3>\t
            \t\t\t\t</div>
            \t\t\t\t<div class=\"form-row\">
                \t\t\t\t<div class=\"col-md-6\">
                \t\t\t\t\t<div class=\"form-group\">
                    \t\t\t\t\t<label for=\"lastName\">Nom</label>
                    \t\t\t\t\t<input type=\"text\" id=\"lastName\" name=\"lastname\" class=\"form-control\" value=\"";
        // line 114
        (((twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "lastname", [], "any", true, true, false, 114) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "lastname", [], "any", false, false, false, 114)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "lastname", [], "any", false, false, false, 114), "html", null, true))) : (print ("")));
        echo "\" required>
                \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t\t<div class=\"col-md-6\">
                  \t\t\t\t\t<div class=\"form-group\">
                    \t\t\t\t\t<label for=\"firstName\">Prénom</label>
                    \t\t\t\t\t<input type=\"text\" id=\"firstName\" name=\"firstname\" class=\"form-control\" value=\"";
        // line 120
        (((twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "firstname", [], "any", true, true, false, 120) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "firstname", [], "any", false, false, false, 120)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "firstname", [], "any", false, false, false, 120), "html", null, true))) : (print ("")));
        echo "\" required>
                  \t\t\t\t\t</div>
                \t\t\t\t</div>
            \t\t\t\t</div>
            \t\t\t</div>
            \t\t\t<div class=\"form-group\">
              \t\t\t\t<div class=\"form-row\">
                \t\t\t\t<div class=\"col-md-6\">
                \t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t                <label for=\"email\">Adresse email</label>
\t\t\t\t\t\t                <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" value=\"";
        // line 130
        (((twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "email", [], "any", true, true, false, 130) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "email", [], "any", false, false, false, 130)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "email", [], "any", false, false, false, 130), "html", null, true))) : (print ("")));
        echo "\" required>
                  \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t\t<div class=\"col-md-6\">
                  \t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t                    <label for=\"phone\">Numéro de Téléphone</label>
\t\t\t\t\t                    <input type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\" value=\"";
        // line 136
        (((twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "phone", [], "any", true, true, false, 136) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "phone", [], "any", false, false, false, 136)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "phone", [], "any", false, false, false, 136), "html", null, true))) : (print ("")));
        echo "\" maxlength=\"10\" required>
                \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t\t<div class=\"col-md-12\">
    \t            \t\t\t\t<div class=\"form-group\">
\t\t\t\t    \t                <label for=\"message\">Message</label>
\t\t\t\t    \t                <textarea name=\"message\" id=\"message\" class=\"form-control\" required placeholder=\"Votre message ici\" rows=\"5\">";
        // line 142
        (((twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "message", [], "any", true, true, false, 142) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "message", [], "any", false, false, false, 142)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "message", [], "any", false, false, false, 142), "html", null, true))) : (print ("")));
        echo "</textarea>
    \t        \t\t\t\t\t</div>
            \t\t\t\t\t</div>
            \t\t\t\t</div>
            \t\t\t</div>
\t\t\t            ";
        // line 147
        if ( !twig_test_empty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 147, $this->source); })()))) {
            // line 148
            echo "\t\t\t                <div class=\"alert alert-warning\">
\t\t\t                    ";
            // line 149
            echo twig_join_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 149, $this->source); })()), "<br>");
            echo " 
\t\t\t                </div>
\t\t\t            ";
        } elseif ((        // line 151
(isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 151, $this->source); })()) == true)) {
            // line 152
            echo "\t\t\t                <div class=\"alert alert-success\">
\t\t\t                    Merci pour votre message <strong>";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["donnees_saisies"]) || array_key_exists("donnees_saisies", $context) ? $context["donnees_saisies"] : (function () { throw new RuntimeError('Variable "donnees_saisies" does not exist.', 153, $this->source); })()), "firstname", [], "any", false, false, false, 153), "html", null, true);
            echo "</strong> ! Nous l'avons bien reçu et le traiterons dans les plus brefs délais.
\t\t\t                </div>
\t\t\t            ";
        }
        // line 156
        echo "            \t\t\t<div class=\"form-group\">
                \t\t\t<input type=\"submit\" class=\"btn btn-primary btn-block\" value=\"Envoyer le message\">
            \t\t\t</div>
          \t\t\t</form>
        \t\t</div>
    \t\t</div>
    \t</div>
\t</section>
\t<section id=\"portfolio\" class=\"py-5 mb-5\">
\t\t<h2 class=\"pb-5\">Portfolio</h2>
\t\t<div class=\"content ml-4 pr-4\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\"> 
\t\t\t\t\t<figure>
\t\t\t\t\t\t<a href=\"";
        // line 170
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_albums");
        echo "\">
\t\t\t\t\t\t\t<img src=\"/images/1568232400-trek-dans-le-piemont-sept-2016-067-44723713955-o.jpg\" class=\"figure-img img-fluid rounded img-port h-auto\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</figure>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\"> 
\t\t\t\t\t<figure>
\t\t\t\t\t\t<a href=\"";
        // line 177
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_albums");
        echo "\">
\t\t\t\t\t\t\t<img src=\"/images/1568232508-trek-dans-le-piemont-sept-2016-083-30696778987-o.jpg\" class=\"figure-img img-fluid rounded img-port h-auto\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</figure>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\"> 
\t\t\t\t\t<figure>
\t\t\t\t\t\t<a href=\"";
        // line 184
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_albums");
        echo "\">
\t\t\t\t\t\t\t<img src=\"/images/1568232514-trek-dans-le-piemont-sept-2016-084-30696845677-o.jpg\" class=\"figure-img img-fluid rounded img-port h-auto\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</figure>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12\"> 
\t\t\t\t\t<figure>
\t\t\t\t\t\t<a href=\"";
        // line 191
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_albums");
        echo "\">
\t\t\t\t\t\t\t<img src=\"/images/35875846200_dff261cba6_k.jpg\" class=\"figure-img img-fluid rounded img-port h-auto\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</figure>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 203
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 204
        echo "
\t<script src=\"/js/swiper.min.js\"></script>
\t<script>
\t\tvar swiper = new Swiper('.swiper-container', {
\t      effect: 'coverflow',
\t      grabCursor: true,
\t      centeredSlides: true,
\t      slidesPerView: 'auto',
\t      coverflowEffect: {
\t        rotate: 30,
\t        stretch: 0,
\t        depth: 200,
\t        modifier: 1,
\t        slideShadows : true,
\t      },
\t      pagination: {
\t        el: '.swiper-pagination',
\t      },
\t    });
\t</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  432 => 204,  422 => 203,  401 => 191,  391 => 184,  381 => 177,  371 => 170,  355 => 156,  349 => 153,  346 => 152,  344 => 151,  339 => 149,  336 => 148,  334 => 147,  326 => 142,  317 => 136,  308 => 130,  295 => 120,  286 => 114,  269 => 99,  251 => 83,  243 => 78,  238 => 75,  236 => 74,  226 => 66,  222 => 64,  217 => 62,  206 => 61,  204 => 60,  192 => 50,  188 => 48,  183 => 46,  173 => 45,  168 => 44,  166 => 43,  155 => 34,  151 => 32,  146 => 30,  142 => 29,  135 => 28,  133 => 27,  119 => 16,  113 => 12,  103 => 11,  92 => 8,  82 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\tAmicale BMW Moto 38
{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"/css/stylesaccueil.css\" >
{% endblock %}

{% block content %}
\t<div class=\"row d-flex justify-content-center\">
\t\t<img class=\"animated infinite bounce arrow-perso\" src=\"https://img.icons8.com/ios-filled/50/000000/expand-arrow.png\"/>\t\t\t\t\t
\t</div>
\t<section id=\"sect-intro\"class=\"py-2 mb-5\">
\t\t<h2 class=\"pb-5 pt-5\">{{page_name}}</h2>
\t\t<div class=\"container \" >
\t\t<h3 class=\"pb-5\">Qui sommes-nous ?</h3>
\t\t\t<p class=\"pb-5\">Amicale de motards de l'Isère, notre objectif est de partager le plaisir de rouler dans un esprit de convivialité et de solidarité avec tous les passionnés de moto.</p>
\t\t\t<div class=\"row justify-content-center\" >
\t\t\t\t<div class=\"col-lg-3 pt-3\">
\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t<div class=\"card-title jumbotron text-center\">
\t\t\t\t\t\t\t<h3>Prochaine balade</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-text mx-1\">
\t\t\t\t\t\t\t{% if nextbalade is not empty %}
\t\t\t\t\t\t\t\t<p>Partageons ensemble la prochaine balade ({{nextbalade.Titre}}), proposée par {{nextbalade.user.prenom ~ ' ' ~ nextbalade.user.nom }}.</p>
\t\t\t\t\t\t\t\t<p>RDV le {{nextbalade.DateDebut|date(\"d/m/Y\")}}</p>
\t\t\t\t\t\t\t\t<p>Pour plus d'informations, c'est par là ! <a class=\"cadre\" href=\"{{ path('view_balade', {id : nextbalade.Id}) }}\">Voir la balade</a></p>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<p>Amicaliste, partagez vos idées pour de futures balades ! </p>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 pt-3\">
\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t<div class=\"card-title jumbotron text-center\">
\t\t\t\t\t\t\t<h3>Prochaine réunion</h3>\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-text mx-1\">
\t\t\t\t\t\t\t{% if reunion is not empty %}
\t\t\t\t\t\t\t\t<p>{{reunion.Titre}}</p>
\t\t\t\t\t\t\t\t<p>La prochaine réunion se tiendra le {{reunion.datetimeReu|date(\"d/m/Y\")}} (Type de réunion : {{reunion.typereu}}), proposée par {{reunion.user.prenom}} {{reunion.user.nom}} </p>
\t\t\t\t\t\t\t\t<p><a class=\"cadre\" href=\"{{ path('view_reunion', {id : reunion.Id}) }}\">+ d'informations</a></p>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<p>Nous vous communiquerons très vite la date de la prochaine réunion ! </p>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 pt-3 \">
\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t<div class=\"card-title jumbotron text-center\">
\t\t\t\t\t\t\t<h3>Dernière balade</h3>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-text mx-1\">
\t\t\t\t\t\t\t{% if lastbalade is not empty %}
\t\t\t\t\t\t\t\t<p>Retour sur notre dernière aventure ({{lastbalade.Titre}}) du {{lastbalade.DateDebut|date(\"d/m/Y\")}}, amicalement proposée par {{lastbalade.user.prenom}} {{lastbalade.user.nom}}.</p>
\t\t\t\t\t\t\t\t<a class=\"cadre\" href=\"{{ path('view_balade', {id : lastbalade.Id}) }}\">Photos et plus</a>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<p>Nous vous raconterons bientôt nos aventures...</p>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- section bleue !-->
\t<section id=\"sect-cta\" class=\"py-5 mb-5\">
\t\t{% if app.session.get('ranks') is  null %}
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col align-self-center py-3\">
\t\t\t\t\t<div class=\"d-flex justify-content-center align-items-center h-100\">
\t\t\t\t\t\t<a href=\"{{ path('inscription_user') }}\" class=\"subscribe d-flex justify-content-center align-items-center\"><svg><rect></rect></svg>En cliquant ici, vous pouvez vous inscrire !! </a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% else %}
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 py-3\">
\t\t\t\t\t<div class=\"d-flex justify-content-center align-items-center h-100\">
\t\t\t\t\t\t<div class=\"subscribe d-flex justify-content-center align-items-center\"><svg><rect></rect></svg>Prochainement</div></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 py-3 d-flex align-items-center justify-content-center text-center\">
\t\t\t\t\t<p>Vous pourrez consulter ici l'itinéraire de la prochaine balade</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8 py-3 d-flex justify-content-center\">
\t\t\t\t\t<iframe class=\"map\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2890.8222223636526!2d1.4120306157384406!3d43.56858736591556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aebbc66a0644b1%3A0x92867b7cb6c0d89b!2s244%20Route%20de%20Seysses%2C%2031100%20Toulouse!5e0!3m2!1sfr!2sfr!4v1568884368621!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}
\t\t\t\t\t
\t</section>
\t<section id=\"sect-form\" class=\"py-5 mb-5 parallax\" >
\t  \t<div class=\"container\">
\t    \t<div class=\"card card-register mx-auto mt-5 pb-5 mb-5 form-perso\">
        \t\t<div class=\"card-body\">
        \t\t\t<form method=\"post\">
            \t\t\t<div class=\"form-group\">
            \t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t<h3 class=\"pb-3\" id=\"contact\">Contactez nous</h3>\t
            \t\t\t\t</div>
            \t\t\t\t<div class=\"form-row\">
                \t\t\t\t<div class=\"col-md-6\">
                \t\t\t\t\t<div class=\"form-group\">
                    \t\t\t\t\t<label for=\"lastName\">Nom</label>
                    \t\t\t\t\t<input type=\"text\" id=\"lastName\" name=\"lastname\" class=\"form-control\" value=\"{{donnees_saisies.lastname ?? ''}}\" required>
                \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t\t<div class=\"col-md-6\">
                  \t\t\t\t\t<div class=\"form-group\">
                    \t\t\t\t\t<label for=\"firstName\">Prénom</label>
                    \t\t\t\t\t<input type=\"text\" id=\"firstName\" name=\"firstname\" class=\"form-control\" value=\"{{donnees_saisies.firstname ?? ''}}\" required>
                  \t\t\t\t\t</div>
                \t\t\t\t</div>
            \t\t\t\t</div>
            \t\t\t</div>
            \t\t\t<div class=\"form-group\">
              \t\t\t\t<div class=\"form-row\">
                \t\t\t\t<div class=\"col-md-6\">
                \t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t                <label for=\"email\">Adresse email</label>
\t\t\t\t\t\t                <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" value=\"{{donnees_saisies.email ?? ''}}\" required>
                  \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t\t<div class=\"col-md-6\">
                  \t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t                    <label for=\"phone\">Numéro de Téléphone</label>
\t\t\t\t\t                    <input type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\" value=\"{{donnees_saisies.phone ?? ''}}\" maxlength=\"10\" required>
                \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t\t<div class=\"col-md-12\">
    \t            \t\t\t\t<div class=\"form-group\">
\t\t\t\t    \t                <label for=\"message\">Message</label>
\t\t\t\t    \t                <textarea name=\"message\" id=\"message\" class=\"form-control\" required placeholder=\"Votre message ici\" rows=\"5\">{{donnees_saisies.message ?? ''}}</textarea>
    \t        \t\t\t\t\t</div>
            \t\t\t\t\t</div>
            \t\t\t\t</div>
            \t\t\t</div>
\t\t\t            {% if errors is not empty %}
\t\t\t                <div class=\"alert alert-warning\">
\t\t\t                    {{ errors|join('<br>')|raw }} 
\t\t\t                </div>
\t\t\t            {% elseif success == true %}
\t\t\t                <div class=\"alert alert-success\">
\t\t\t                    Merci pour votre message <strong>{{donnees_saisies.firstname}}</strong> ! Nous l'avons bien reçu et le traiterons dans les plus brefs délais.
\t\t\t                </div>
\t\t\t            {% endif %}
            \t\t\t<div class=\"form-group\">
                \t\t\t<input type=\"submit\" class=\"btn btn-primary btn-block\" value=\"Envoyer le message\">
            \t\t\t</div>
          \t\t\t</form>
        \t\t</div>
    \t\t</div>
    \t</div>
\t</section>
\t<section id=\"portfolio\" class=\"py-5 mb-5\">
\t\t<h2 class=\"pb-5\">Portfolio</h2>
\t\t<div class=\"content ml-4 pr-4\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\"> 
\t\t\t\t\t<figure>
\t\t\t\t\t\t<a href=\"{{ path('index_albums') }}\">
\t\t\t\t\t\t\t<img src=\"/images/1568232400-trek-dans-le-piemont-sept-2016-067-44723713955-o.jpg\" class=\"figure-img img-fluid rounded img-port h-auto\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</figure>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\"> 
\t\t\t\t\t<figure>
\t\t\t\t\t\t<a href=\"{{ path('index_albums') }}\">
\t\t\t\t\t\t\t<img src=\"/images/1568232508-trek-dans-le-piemont-sept-2016-083-30696778987-o.jpg\" class=\"figure-img img-fluid rounded img-port h-auto\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</figure>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\"> 
\t\t\t\t\t<figure>
\t\t\t\t\t\t<a href=\"{{ path('index_albums') }}\">
\t\t\t\t\t\t\t<img src=\"/images/1568232514-trek-dans-le-piemont-sept-2016-084-30696845677-o.jpg\" class=\"figure-img img-fluid rounded img-port h-auto\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</figure>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12\"> 
\t\t\t\t\t<figure>
\t\t\t\t\t\t<a href=\"{{ path('index_albums') }}\">
\t\t\t\t\t\t\t<img src=\"/images/35875846200_dff261cba6_k.jpg\" class=\"figure-img img-fluid rounded img-port h-auto\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</figure>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>


{% endblock %}

{% block javascripts %}

\t<script src=\"/js/swiper.min.js\"></script>
\t<script>
\t\tvar swiper = new Swiper('.swiper-container', {
\t      effect: 'coverflow',
\t      grabCursor: true,
\t      centeredSlides: true,
\t      slidesPerView: 'auto',
\t      coverflowEffect: {
\t        rotate: 30,
\t        stretch: 0,
\t        depth: 200,
\t        modifier: 1,
\t        slideShadows : true,
\t      },
\t      pagination: {
\t        el: '.swiper-pagination',
\t      },
\t    });
\t</script>

{% endblock %}
", "default/index.html.twig", "C:\\xampp\\htdocs\\moto_club_v2\\moto_club_v2\\templates\\default\\index.html.twig");
    }
}
