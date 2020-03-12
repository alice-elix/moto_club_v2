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

/* balades/view.html.twig */
class __TwigTemplate_dc1a0772d11faae6575bbc0a4619259ebbd19e3bd8c6af4ac2ed61ca33cc8d5a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "balades/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "balades/view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "balades/view.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 3, $this->source); })()), "getTitre", [], "method", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "\t<section class=\"py-2 mb-5\">
\t\t<h2 class=\"py-3\">Balade</h2>
\t\t<div class=\"d-flex justify-content-between\">
\t\t\t<span>
\t\t\t\t<a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_balades");
        echo "\" class=\"btn btn-primary\" role=\"button\"><i class=\"fas fa-angle-left\"></i> Retour aux balades</a>
\t\t\t</span>
\t\t\t<span>
\t\t\t\t";
        // line 13
        if (twig_in_filter("bureau", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "session", [], "any", false, false, false, 13), "get", [0 => "ranks"], "method", false, false, false, 13))) {
            // line 14
            echo "\t\t\t\t\t<a title=\"Gérer les balades\" class=\"btn btn-secondary\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_balades");
            echo "\" role=\"button\"><i class=\"fas fa-cogs\"></i></a>
\t\t\t\t";
        }
        // line 16
        echo "\t\t\t\t";
        if (((isset($context["nb_photos"]) || array_key_exists("nb_photos", $context) ? $context["nb_photos"] : (function () { throw new RuntimeError('Variable "nb_photos" does not exist.', 16, $this->source); })()) > 0)) {
            // line 17
            echo "\t\t\t\t\t<a title=\"Afficher la galerie (";
            echo twig_escape_filter($this->env, (isset($context["nb_photos"]) || array_key_exists("nb_photos", $context) ? $context["nb_photos"] : (function () { throw new RuntimeError('Variable "nb_photos" does not exist.', 17, $this->source); })()), "html", null, true);
            echo ")\" class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_album", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 17, $this->source); })()), "getId", [], "method", false, false, false, 17)]), "html", null, true);
            echo "\" role=\"button\"><i class=\"fas fa-images\"></i></a>
\t\t\t\t";
        } else {
            // line 19
            echo "\t\t\t\t\t";
            if (twig_in_filter("adherent", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "session", [], "any", false, false, false, 19), "get", [0 => "ranks"], "method", false, false, false, 19))) {
                // line 20
                echo "\t\t\t\t\t\t<a title=\"Ajouter des photos\" class=\"btn btn-success\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_photos", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 20, $this->source); })()), "getId", [], "method", false, false, false, 20)]), "html", null, true);
                echo "\" role=\"button\"><i class=\"fas fa-images\"></i></a>
\t\t\t\t\t";
            } else {
                // line 22
                echo "\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary disabled\" role=\"button\" disabled><i class=\"fas fa-images\"></i></a>
\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t";
        }
        // line 25
        echo "\t\t\t</span>
\t\t</div>
\t\t
\t\t<div class=\"card-deck my-4\">
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<div class=\"card-title\">

\t\t\t\t\t\t<!-- INSCRIPTION A BALADE -->

\t\t\t\t\t\t";
        // line 35
        if (twig_in_filter("adherent", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "session", [], "any", false, false, false, 35), "get", [0 => "ranks"], "method", false, false, false, 35))) {
            // line 36
            echo "
\t\t\t\t\t\t\t";
            // line 37
            if (twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 37, $this->source); })()), "getInscActive", [], "method", false, false, false, 37)) {
                // line 38
                echo "
\t\t\t\t\t\t\t\t";
                // line 39
                if ( !(isset($context["inscrit"]) || array_key_exists("inscrit", $context) ? $context["inscrit"] : (function () { throw new RuntimeError('Variable "inscrit" does not exist.', 39, $this->source); })())) {
                    // line 40
                    echo "
\t\t\t\t\t\t\t\t\t";
                    // line 41
                    if ( !(isset($context["baladeFull"]) || array_key_exists("baladeFull", $context) ? $context["baladeFull"] : (function () { throw new RuntimeError('Variable "baladeFull" does not exist.', 41, $this->source); })())) {
                        // line 42
                        echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription_balade", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 42, $this->source); })()), "getId", [], "method", false, false, false, 42)]), "html", null, true);
                        echo "\" class=\"btn btn-success float-right ml-4\" role=\"button\">S'inscrire</a>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 44
                        echo "\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-success float-right ml-4 disabled\" role=\"button\">S'inscrire</a>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 45
                    echo "\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t";
                } else {
                    // line 48
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("desinscription_balade", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 48, $this->source); })()), "getId", [], "method", false, false, false, 48)]), "html", null, true);
                    echo "\" class=\"btn btn-danger float-right ml-4\" role=\"button\">Se Désinscrire</a>
\t\t\t\t\t\t\t\t";
                }
                // line 50
                echo "
\t\t\t\t\t\t\t";
            }
            // line 52
            echo "
\t\t\t\t\t\t\t<div class=\"float-right\">

\t\t\t\t\t\t\t\t";
            // line 55
            if ( !(null === (isset($context["nbMaxPers"]) || array_key_exists("nbMaxPers", $context) ? $context["nbMaxPers"] : (function () { throw new RuntimeError('Variable "nbMaxPers" does not exist.', 55, $this->source); })()))) {
                // line 56
                echo "\t\t\t\t\t\t\t\t\t<div>Participants : <strong>";
                echo twig_escape_filter($this->env, (((isset($context["nbInscrits"]) || array_key_exists("nbInscrits", $context) ? $context["nbInscrits"] : (function () { throw new RuntimeError('Variable "nbInscrits" does not exist.', 56, $this->source); })()) . " / ") . (isset($context["nbMaxPers"]) || array_key_exists("nbMaxPers", $context) ? $context["nbMaxPers"] : (function () { throw new RuntimeError('Variable "nbMaxPers" does not exist.', 56, $this->source); })())), "html", null, true);
                echo "</strong></div>
\t\t\t\t\t\t\t\t";
            } else {
                // line 58
                echo "\t\t\t\t\t\t\t\t\t<div>Participants : <strong>";
                echo twig_escape_filter($this->env, (isset($context["nbInscrits"]) || array_key_exists("nbInscrits", $context) ? $context["nbInscrits"] : (function () { throw new RuntimeError('Variable "nbInscrits" does not exist.', 58, $this->source); })()), "html", null, true);
                echo "</strong></div>
\t\t\t\t\t\t\t\t";
            }
            // line 60
            echo "
\t\t\t\t\t\t\t\t";
            // line 61
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 61, $this->source); })()), "getInscActive", [], "method", false, false, false, 61)) {
                // line 62
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 63
                if ((isset($context["inscrit"]) || array_key_exists("inscrit", $context) ? $context["inscrit"] : (function () { throw new RuntimeError('Variable "inscrit" does not exist.', 63, $this->source); })())) {
                    // line 64
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-success\"><em>Vous êtes inscrit(e)</em></div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 66
                echo "
\t\t\t\t\t\t\t\t\t<div><em>Les inscriptions sont closes</em></div>

\t\t\t\t\t\t\t\t";
            }
            // line 70
            echo "
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        }
        // line 74
        echo "
\t\t\t\t\t\t<!-- CONTENU 'STATIQUE' -->
\t\t\t\t\t\t<strong>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 76, $this->source); })()), "getTitre", [], "method", false, false, false, 76), "html", null, true);
        echo "</strong>
\t\t\t\t\t\t";
        // line 77
        if ((twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 77, $this->source); })()), "getDateDebut", [], "method", false, false, false, 77) == twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 77, $this->source); })()), "getDateFin", [], "method", false, false, false, 77))) {
            // line 78
            echo "\t\t\t\t\t\t\t<div>le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 78, $this->source); })()), "getDateDebut", [], "method", false, false, false, 78), "d/m/Y"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t";
        } else {
            // line 80
            echo "\t\t\t\t\t\t\t<div>du ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 80, $this->source); })()), "getDateDebut", [], "method", false, false, false, 80), "d/m/Y"), "html", null, true);
            echo " au ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 80, $this->source); })()), "getDateFin", [], "method", false, false, false, 80), "d/m/Y"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 82
        echo "\t\t\t\t   </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">";
        // line 84
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 84, $this->source); })()), "getContenu", [], "method", false, false, false, 84), "html", null, true));
        echo "</div>
\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t<i>Posté par 
\t\t\t\t\t\t";
        // line 87
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 87, $this->source); })()), "getUser", [], "method", false, false, false, 87), "getPrenom", [], "method", false, false, false, 87) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 87, $this->source); })()), "getUser", [], "method", false, false, false, 87), "getNom", [], "method", false, false, false, 87)), "html", null, true);
        echo " 
\t\t\t\t\t\tle 
\t\t\t\t\t\t";
        // line 89
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 89, $this->source); })()), "getDatetimePost", [], "method", false, false, false, 89), "d/m/Y"), "html", null, true);
        echo " 
\t\t\t\t\t\tà 
\t\t\t\t\t\t";
        // line 91
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 91, $this->source); })()), "getDatetimePost", [], "method", false, false, false, 91), "H:i"), "html", null, true);
        echo "
\t\t\t\t\t</i>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "balades/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 91,  273 => 89,  268 => 87,  262 => 84,  258 => 82,  250 => 80,  244 => 78,  242 => 77,  238 => 76,  234 => 74,  228 => 70,  222 => 66,  218 => 64,  216 => 63,  213 => 62,  211 => 61,  208 => 60,  202 => 58,  196 => 56,  194 => 55,  189 => 52,  185 => 50,  179 => 48,  174 => 45,  170 => 44,  164 => 42,  162 => 41,  159 => 40,  157 => 39,  154 => 38,  152 => 37,  149 => 36,  147 => 35,  135 => 25,  132 => 24,  128 => 22,  122 => 20,  119 => 19,  111 => 17,  108 => 16,  102 => 14,  100 => 13,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ balade.getTitre() }}{% endblock %}

{% block content %}
\t<section class=\"py-2 mb-5\">
\t\t<h2 class=\"py-3\">Balade</h2>
\t\t<div class=\"d-flex justify-content-between\">
\t\t\t<span>
\t\t\t\t<a href=\"{{ path('index_balades') }}\" class=\"btn btn-primary\" role=\"button\"><i class=\"fas fa-angle-left\"></i> Retour aux balades</a>
\t\t\t</span>
\t\t\t<span>
\t\t\t\t{% if 'bureau' in app.session.get('ranks') %}
\t\t\t\t\t<a title=\"Gérer les balades\" class=\"btn btn-secondary\" href=\"{{ path('gestion_balades') }}\" role=\"button\"><i class=\"fas fa-cogs\"></i></a>
\t\t\t\t{% endif %}
\t\t\t\t{% if nb_photos > 0 %}
\t\t\t\t\t<a title=\"Afficher la galerie ({{nb_photos}})\" class=\"btn btn-primary\" href=\"{{ path('view_album', {id: balade.getId()}) }}\" role=\"button\"><i class=\"fas fa-images\"></i></a>
\t\t\t\t{% else %}
\t\t\t\t\t{% if 'adherent' in app.session.get('ranks') %}
\t\t\t\t\t\t<a title=\"Ajouter des photos\" class=\"btn btn-success\" href=\"{{ path('gestion_photos', {id: balade.getId()}) }}\" role=\"button\"><i class=\"fas fa-images\"></i></a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary disabled\" role=\"button\" disabled><i class=\"fas fa-images\"></i></a>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endif %}
\t\t\t</span>
\t\t</div>
\t\t
\t\t<div class=\"card-deck my-4\">
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<div class=\"card-title\">

\t\t\t\t\t\t<!-- INSCRIPTION A BALADE -->

\t\t\t\t\t\t{% if 'adherent' in app.session.get('ranks') %}

\t\t\t\t\t\t\t{% if balade.getInscActive() %}

\t\t\t\t\t\t\t\t{% if not inscrit %}

\t\t\t\t\t\t\t\t\t{% if not baladeFull %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('inscription_balade', {id: balade.getId()}) }}\" class=\"btn btn-success float-right ml-4\" role=\"button\">S'inscrire</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-success float-right ml-4 disabled\" role=\"button\">S'inscrire</a>
\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('desinscription_balade', {id: balade.getId()}) }}\" class=\"btn btn-danger float-right ml-4\" role=\"button\">Se Désinscrire</a>
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t<div class=\"float-right\">

\t\t\t\t\t\t\t\t{% if nbMaxPers is not null %}
\t\t\t\t\t\t\t\t\t<div>Participants : <strong>{{ nbInscrits ~ ' / ' ~ nbMaxPers }}</strong></div>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<div>Participants : <strong>{{ nbInscrits }}</strong></div>
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t{% if not balade.getInscActive() %}

\t\t\t\t\t\t\t\t\t{% if inscrit %}
\t\t\t\t\t\t\t\t\t\t<div class=\"text-success\"><em>Vous êtes inscrit(e)</em></div>
\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t<div><em>Les inscriptions sont closes</em></div>

\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t<!-- CONTENU 'STATIQUE' -->
\t\t\t\t\t\t<strong>{{ balade.getTitre() }}</strong>
\t\t\t\t\t\t{% if balade.getDateDebut() == balade.getDateFin() %}
\t\t\t\t\t\t\t<div>le {{ balade.getDateDebut()|date('d/m/Y') }}</div>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<div>du {{ balade.getDateDebut()|date('d/m/Y') }} au {{ balade.getDateFin()|date('d/m/Y') }}</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t   </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">{{ balade.getContenu()|nl2br }}</div>
\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t<i>Posté par 
\t\t\t\t\t\t{{ balade.getUser().getPrenom() ~ ' ' ~ balade.getUser().getNom() }} 
\t\t\t\t\t\tle 
\t\t\t\t\t\t{{ balade.getDatetimePost()|date('d/m/Y') }} 
\t\t\t\t\t\tà 
\t\t\t\t\t\t{{ balade.getDatetimePost()|date('H:i') }}
\t\t\t\t\t</i>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}
", "balades/view.html.twig", "C:\\xampp\\htdocs\\moto_club_v2\\moto_club_v2\\templates\\balades\\view.html.twig");
    }
}
