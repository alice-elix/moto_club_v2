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

/* reunions/viewBackReu.html.twig */
class __TwigTemplate_5aa8393d011ce745b2d075167d55ee40e925fdb8422d3c459d9b361be8d446ab extends \Twig\Template
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
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reunions/viewBackReu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reunions/viewBackReu.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "reunions/viewBackReu.html.twig", 1);
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

        echo "Détails d'une réunion";
        
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
\t    <div class=\"row \">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_back_reunions");
        echo "\" class=\"btn btn-secondary m-2 float-left\" role=\"button\"><i class=\"fas fa-angle-left\"></i> Gestion des réunions</a>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_reunion", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 12, $this->source); })()), "getId", [], "method", false, false, false, 12)]), "html", null, true);
        echo "\" class=\"btn btn-info m-2 float-right\" title=\"Voir la réunion sur le site\" role=\"button\"><i class=\"fas fa-globe-europe\"></i></a>
\t\t\t</div> 
\t\t</div>
\t\t\t
\t\t<div class=\"row card-deck my-4\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"card mb-3\">
\t\t\t\t    <div class=\"card-header\">
\t\t\t\t    \t<h2>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 20, $this->source); })()), "getTitre", [], "method", false, false, false, 20), "html", null, true);
        echo "</h2>
\t\t\t\t    </div>
\t\t\t        <div class=\"card-title m-3\">
\t\t\t        \t<p class=\"mb-1\">Le ";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 23, $this->source); })()), "getDatetimeReu", [], "method", false, false, false, 23), "d/m/Y"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 23, $this->source); })()), "getDatetimeReu", [], "method", false, false, false, 23), "H:i"), "html", null, true);
        echo " (<em>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 23, $this->source); })()), "getTypeReu", [], "method", false, false, false, 23), "html", null, true);
        echo ")</em>.</p>
\t\t\t        \t<p>Lieu : ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 24, $this->source); })()), "getLieuReu", [], "method", false, false, false, 24), "html", null, true);
        echo "</p> 
\t\t\t\t\t</div>
\t\t  \t\t\t<div class=\"card-body pt-1\">
\t\t  \t\t\t\t<p>Ordre du jour : ";
        // line 27
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 27, $this->source); })()), "getContenu", [], "method", false, false, false, 27), "html", null, true));
        echo "</p>
\t\t\t  \t\t\t<p><em>Proposé par : ";
        // line 28
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reunionTrouvee"] ?? null), "getUser", [], "method", false, true, false, 28), "getPrenom", [], "method", true, true, false, 28) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reunionTrouvee"] ?? null), "getUser", [], "method", false, true, false, 28), "getPrenom", [], "method", false, false, false, 28)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reunionTrouvee"] ?? null), "getUser", [], "method", false, true, false, 28), "getPrenom", [], "method", false, false, false, 28), "html", null, true))) : (print ("")));
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 28, $this->source); })()), "getDatetimePost", [], "method", false, false, false, 28), "d/m/Y"), "html", null, true);
        echo "</em></p>        
\t\t\t\t    </div>\t
\t\t\t\t    ";
        // line 30
        if ( !twig_test_empty((isset($context["crTrouve"]) || array_key_exists("crTrouve", $context) ? $context["crTrouve"] : (function () { throw new RuntimeError('Variable "crTrouve" does not exist.', 30, $this->source); })()))) {
            // line 31
            echo "\t\t\t\t\t    <div class=\"card-header\">
\t\t\t\t\t    \t<h3>Compte Rendu</h3>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"card-body\">
\t\t\t\t    \t\t<p><b>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crTrouve"]) || array_key_exists("crTrouve", $context) ? $context["crTrouve"] : (function () { throw new RuntimeError('Variable "crTrouve" does not exist.', 35, $this->source); })()), "getTitre", [], "method", false, false, false, 35), "html", null, true);
            echo "</b></p>
\t\t\t            \t<p>";
            // line 36
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crTrouve"]) || array_key_exists("crTrouve", $context) ? $context["crTrouve"] : (function () { throw new RuntimeError('Variable "crTrouve" does not exist.', 36, $this->source); })()), "getContenu", [], "method", false, false, false, 36), "html", null, true));
            echo "</p>
\t\t\t           \t\t<p>Publié le ";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crTrouve"]) || array_key_exists("crTrouve", $context) ? $context["crTrouve"] : (function () { throw new RuntimeError('Variable "crTrouve" does not exist.', 37, $this->source); })()), "getDatetimePost", [], "method", false, false, false, 37), "d/m/Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crTrouve"]) || array_key_exists("crTrouve", $context) ? $context["crTrouve"] : (function () { throw new RuntimeError('Variable "crTrouve" does not exist.', 37, $this->source); })()), "getDatetimePost", [], "method", false, false, false, 37), "H:i"), "html", null, true);
            echo "
\t\t\t              \t";
            // line 38
            if (twig_get_attribute($this->env, $this->source, ($context["crTrouve"] ?? null), "getDatetimeModif", [], "method", true, true, false, 38)) {
                // line 39
                echo "\t\t\t       \t\t \t\t,<em> modifié le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crTrouve"]) || array_key_exists("crTrouve", $context) ? $context["crTrouve"] : (function () { throw new RuntimeError('Variable "crTrouve" does not exist.', 39, $this->source); })()), "getDatetimeModif", [], "method", false, false, false, 39), "d/m/Y"), "html", null, true);
                echo " à ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crTrouve"]) || array_key_exists("crTrouve", $context) ? $context["crTrouve"] : (function () { throw new RuntimeError('Variable "crTrouve" does not exist.', 39, $this->source); })()), "getDatetimeModif", [], "method", false, false, false, 39), "H:i"), "html", null, true);
                echo "</em> 
\t\t\t       \t\t\t";
            }
            // line 41
            echo "\t\t\t       \t\t\t\t<br> par ";
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["crTrouve"] ?? null), "getUser", [], "method", false, true, false, 41), "getPrenom", [], "method", true, true, false, 41) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["crTrouve"] ?? null), "getUser", [], "method", false, true, false, 41), "getPrenom", [], "method", false, false, false, 41)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["crTrouve"] ?? null), "getUser", [], "method", false, true, false, 41), "getPrenom", [], "method", false, false, false, 41), "html", null, true))) : (print ("")));
            echo ".</p>\t
\t\t\t\t        </div>
\t\t\t\t    ";
        }
        // line 43
        echo "   \t\t              
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>";
        // line 47
        echo "\t\t<div class=\"row \">
\t\t\t";
        // line 48
        if (((isset($context["bouton"]) || array_key_exists("bouton", $context) ? $context["bouton"] : (function () { throw new RuntimeError('Variable "bouton" does not exist.', 48, $this->source); })()) == false)) {
            // line 49
            echo "\t\t\t\t<div class=\"col-md-12 d-flex justify-content-center\">
\t\t\t\t\t";
            // line 50
            if ( !twig_test_empty((isset($context["crTrouve"]) || array_key_exists("crTrouve", $context) ? $context["crTrouve"] : (function () { throw new RuntimeError('Variable "crTrouve" does not exist.', 50, $this->source); })()))) {
                // line 51
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_cr", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 51, $this->source); })()), "getId", [], "method", false, false, false, 51)]), "html", null, true);
                echo "\" class=\"btn btn-primary m-2\" role=\"button\">Modifier le compte rendu</a>
\t\t\t\t\t";
            } else {
                // line 53
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_cr", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 53, $this->source); })()), "getId", [], "method", false, false, false, 53)]), "html", null, true);
                echo "\" class=\"btn btn-success m-2\" role=\"button\">Ajouter un  compte rendu</a>
\t\t\t\t\t";
            }
            // line 55
            echo "\t\t\t\t</div>
\t\t\t";
        } else {
            // line 57
            echo "\t\t\t\t<div class=\"col-md-12 d-flex justify-content-center\">
\t\t\t\t\t<a class=\"btn btn-primary m-2\" href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_reunion", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 58, $this->source); })()), "getId", [], "method", false, false, false, 58)]), "html", null, true);
            echo "\" role=\"button\">Modifier la réunion</a>
\t\t\t\t</div>
\t\t\t";
        }
        // line 61
        echo "\t\t</div>
\t</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reunions/viewBackReu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 61,  214 => 58,  211 => 57,  207 => 55,  201 => 53,  195 => 51,  193 => 50,  190 => 49,  188 => 48,  185 => 47,  180 => 43,  173 => 41,  165 => 39,  163 => 38,  157 => 37,  153 => 36,  149 => 35,  143 => 31,  141 => 30,  134 => 28,  130 => 27,  124 => 24,  116 => 23,  110 => 20,  99 => 12,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block title %}Détails d'une réunion{% endblock %}

{% block content %}
\t<section class=\"py-2 mb-5\">
\t    <div class=\"row \">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<a href=\"{{ path('index_back_reunions') }}\" class=\"btn btn-secondary m-2 float-left\" role=\"button\"><i class=\"fas fa-angle-left\"></i> Gestion des réunions</a>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<a href=\"{{ path('view_reunion', {id : reunionTrouvee.getId()}) }}\" class=\"btn btn-info m-2 float-right\" title=\"Voir la réunion sur le site\" role=\"button\"><i class=\"fas fa-globe-europe\"></i></a>
\t\t\t</div> 
\t\t</div>
\t\t\t
\t\t<div class=\"row card-deck my-4\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"card mb-3\">
\t\t\t\t    <div class=\"card-header\">
\t\t\t\t    \t<h2>{{ reunionTrouvee.getTitre() }}</h2>
\t\t\t\t    </div>
\t\t\t        <div class=\"card-title m-3\">
\t\t\t        \t<p class=\"mb-1\">Le {{ reunionTrouvee.getDatetimeReu()|date(\"d/m/Y\") }} à {{ reunionTrouvee.getDatetimeReu()|date(\"H:i\") }} (<em>{{ reunionTrouvee.getTypeReu() }})</em>.</p>
\t\t\t        \t<p>Lieu : {{ reunionTrouvee.getLieuReu() }}</p> 
\t\t\t\t\t</div>
\t\t  \t\t\t<div class=\"card-body pt-1\">
\t\t  \t\t\t\t<p>Ordre du jour : {{ reunionTrouvee.getContenu()|nl2br }}</p>
\t\t\t  \t\t\t<p><em>Proposé par : {{ reunionTrouvee.getUser().getPrenom() ?? '' }}, le {{reunionTrouvee.getDatetimePost()|date(\"d/m/Y\")}}</em></p>        
\t\t\t\t    </div>\t
\t\t\t\t    {% if crTrouve is not empty %}
\t\t\t\t\t    <div class=\"card-header\">
\t\t\t\t\t    \t<h3>Compte Rendu</h3>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"card-body\">
\t\t\t\t    \t\t<p><b>{{ crTrouve.getTitre() }}</b></p>
\t\t\t            \t<p>{{ crTrouve.getContenu()|nl2br }}</p>
\t\t\t           \t\t<p>Publié le {{ crTrouve.getDatetimePost()|date(\"d/m/Y\") }} à {{ crTrouve.getDatetimePost()|date(\"H:i\") }}
\t\t\t              \t{% if crTrouve.getDatetimeModif() is defined %}
\t\t\t       \t\t \t\t,<em> modifié le {{ crTrouve.getDatetimeModif()|date(\"d/m/Y\") }} à {{ crTrouve.getDatetimeModif()|date(\"H:i\") }}</em> 
\t\t\t       \t\t\t{% endif %}
\t\t\t       \t\t\t\t<br> par {{ crTrouve.getUser().getPrenom() ?? '' }}.</p>\t
\t\t\t\t        </div>
\t\t\t\t    {% endif %}   \t\t              
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>{#fin du deck#}
\t\t<div class=\"row \">
\t\t\t{% if bouton == false %}
\t\t\t\t<div class=\"col-md-12 d-flex justify-content-center\">
\t\t\t\t\t{% if crTrouve is not empty  %}
\t\t\t\t\t\t<a href=\"{{ path('edit_cr', {id : reunionTrouvee.getId()}) }}\" class=\"btn btn-primary m-2\" role=\"button\">Modifier le compte rendu</a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a href=\"{{ path('add_cr', {id : reunionTrouvee.getId()}) }}\" class=\"btn btn-success m-2\" role=\"button\">Ajouter un  compte rendu</a>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t{% else %}
\t\t\t\t<div class=\"col-md-12 d-flex justify-content-center\">
\t\t\t\t\t<a class=\"btn btn-primary m-2\" href=\"{{ path('edit_reunion', {id : reunionTrouvee.getId()}) }}\" role=\"button\">Modifier la réunion</a>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t</div>
\t</section>
{% endblock %}
", "reunions/viewBackReu.html.twig", "C:\\xampp\\htdocs\\moto_club_v2\\moto_club_v2\\templates\\reunions\\viewBackReu.html.twig");
    }
}
