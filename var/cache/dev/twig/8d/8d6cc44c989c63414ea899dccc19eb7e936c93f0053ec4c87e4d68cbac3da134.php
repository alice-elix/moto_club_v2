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

/* reunions/viewReu.html.twig */
class __TwigTemplate_af4582775920df2ddd352ac1b59b759d57f7589069a8df15998336403fada19a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reunions/viewReu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reunions/viewReu.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reunions/viewReu.html.twig", 1);
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
\t    <h2 class=\"py-3\">Détails de réunion</h2>
\t    <div class=\"d-flex justify-content-between\">
\t\t\t";
        // line 9
        if (twig_in_filter("bureau", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "session", [], "any", false, false, false, 9), "get", [0 => "ranks"], "method", false, false, false, 9))) {
            // line 10
            echo "\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_reunions");
            echo "\" class=\"btn btn-primary mt-4\" role=\"button\"><i class=\"fas fa-angle-left\"></i> Retour aux réunions</a>
\t\t\t\t";
            // line 11
            if ( !twig_test_empty((isset($context["crTrouve"]) || array_key_exists("crTrouve", $context) ? $context["crTrouve"] : (function () { throw new RuntimeError('Variable "crTrouve" does not exist.', 11, $this->source); })()))) {
                // line 12
                echo "\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_cr", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 12, $this->source); })()), "getId", [], "method", false, false, false, 12)]), "html", null, true);
                echo "\" class=\"btn btn-secondary mt-4\" role=\"button\">Modifier CR</a>
\t\t\t\t";
            } else {
                // line 14
                echo "\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_cr", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 14, $this->source); })()), "getId", [], "method", false, false, false, 14)]), "html", null, true);
                echo "\" class=\"btn btn-secondary mt-4\" role=\"button\">Ajouter CR</a>
\t\t\t\t";
            }
            // line 16
            echo "\t\t\t\t<a title=\"Gestion de cette réunion\"href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_back_reunion", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 16, $this->source); })()), "getId", [], "method", false, false, false, 16)]), "html", null, true);
            echo "\" class=\"btn btn-secondary mt-4 \" role=\"button\"><i class=\"fas fa-cogs\"></i> </a> 
\t\t\t";
        } else {
            // line 18
            echo "\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_reunions");
            echo "\" class=\"btn btn-secondary mt-4\" role=\"button\"><i class=\"fas fa-angle-left\"></i> Retour aux réunions</a>
\t\t\t";
        }
        // line 20
        echo "\t\t</div>
\t\t<div class=\"card-deck my-4\">
\t\t\t<div class=\"card mb-3\">
\t\t\t    <div class=\"card-header\">
\t\t\t    \t<h3><b>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 24, $this->source); })()), "getTitre", [], "method", false, false, false, 24), "html", null, true);
        echo "</b></h3>
\t\t\t    </div>
\t\t        <div class=\"card-title m-3\">
\t\t        \t<p>Le ";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 27, $this->source); })()), "getDatetimeReu", [], "method", false, false, false, 27), "d/m/Y"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 27, $this->source); })()), "getDatetimeReu", [], "method", false, false, false, 27), "H:i"), "html", null, true);
        echo " (<em>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 27, $this->source); })()), "getTypeReu", [], "method", false, false, false, 27), "html", null, true);
        echo ")</em>.</p>
\t\t        \t<p>Lieu : ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 28, $this->source); })()), "getLieuReu", [], "method", false, false, false, 28), "html", null, true);
        echo "</p>
\t\t        \t 
\t\t\t\t</div>
\t  \t\t\t<div class=\"card-body\">
\t  \t\t\t\t<p>Ordre du jour : ";
        // line 32
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 32, $this->source); })()), "getContenu", [], "method", false, false, false, 32), "html", null, true));
        echo "</p>
\t\t  \t\t\t<p><em>Proposé par : ";
        // line 33
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reunionTrouvee"] ?? null), "getUser", [], "method", false, true, false, 33), "getPrenom", [], "method", true, true, false, 33) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reunionTrouvee"] ?? null), "getUser", [], "method", false, true, false, 33), "getPrenom", [], "method", false, false, false, 33)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reunionTrouvee"] ?? null), "getUser", [], "method", false, true, false, 33), "getPrenom", [], "method", false, false, false, 33), "html", null, true))) : (print ("")));
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 33, $this->source); })()), "getDatetimePost", [], "method", false, false, false, 33), "d/m/Y"), "html", null, true);
        echo "</em></p>        
\t\t\t    </div>\t
\t\t\t    ";
        // line 35
        if ( !twig_test_empty((isset($context["crTrouve"]) || array_key_exists("crTrouve", $context) ? $context["crTrouve"] : (function () { throw new RuntimeError('Variable "crTrouve" does not exist.', 35, $this->source); })()))) {
            // line 36
            echo "\t\t\t\t    <div class=\"card-title m-3\">
\t\t\t\t    \t<h4>Compte Rendu</h4>
\t\t\t\t    </div>
\t\t\t\t    <div class=\"card-body\">
\t\t\t    \t\t<p><b>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crTrouve"]) || array_key_exists("crTrouve", $context) ? $context["crTrouve"] : (function () { throw new RuntimeError('Variable "crTrouve" does not exist.', 40, $this->source); })()), "getTitre", [], "method", false, false, false, 40), "html", null, true);
            echo "</b></p>
\t\t            \t<p>";
            // line 41
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crTrouve"]) || array_key_exists("crTrouve", $context) ? $context["crTrouve"] : (function () { throw new RuntimeError('Variable "crTrouve" does not exist.', 41, $this->source); })()), "getContenu", [], "method", false, false, false, 41), "html", null, true));
            echo "</p>
\t\t           \t\t<p>Publié le ";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crTrouve"]) || array_key_exists("crTrouve", $context) ? $context["crTrouve"] : (function () { throw new RuntimeError('Variable "crTrouve" does not exist.', 42, $this->source); })()), "getDatetimePost", [], "method", false, false, false, 42), "d/m/Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crTrouve"]) || array_key_exists("crTrouve", $context) ? $context["crTrouve"] : (function () { throw new RuntimeError('Variable "crTrouve" does not exist.', 42, $this->source); })()), "getDatetimePost", [], "method", false, false, false, 42), "H:i"), "html", null, true);
            echo "
\t\t              \t";
            // line 43
            if (twig_get_attribute($this->env, $this->source, ($context["crTrouve"] ?? null), "getDatetimeModif", [], "method", true, true, false, 43)) {
                // line 44
                echo "\t\t       \t\t \t\t,<em> modifié le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crTrouve"]) || array_key_exists("crTrouve", $context) ? $context["crTrouve"] : (function () { throw new RuntimeError('Variable "crTrouve" does not exist.', 44, $this->source); })()), "getDatetimeModif", [], "method", false, false, false, 44), "d/m/Y"), "html", null, true);
                echo " à ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crTrouve"]) || array_key_exists("crTrouve", $context) ? $context["crTrouve"] : (function () { throw new RuntimeError('Variable "crTrouve" does not exist.', 44, $this->source); })()), "getDatetimeModif", [], "method", false, false, false, 44), "H:i"), "html", null, true);
                echo "</em> 
\t\t       \t\t\t";
            }
            // line 46
            echo "\t\t       \t\t\t\t- par ";
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["crTrouve"] ?? null), "getUser", [], "method", false, true, false, 46), "getPrenom", [], "method", true, true, false, 46) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["crTrouve"] ?? null), "getUser", [], "method", false, true, false, 46), "getPrenom", [], "method", false, false, false, 46)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["crTrouve"] ?? null), "getUser", [], "method", false, true, false, 46), "getPrenom", [], "method", false, false, false, 46), "html", null, true))) : (print ("")));
            echo ".</p>\t
\t\t\t        </div>
\t\t\t    ";
        }
        // line 48
        echo "   \t\t              
\t\t\t</div>
\t\t</div>
\t</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reunions/viewReu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 48,  196 => 46,  188 => 44,  186 => 43,  180 => 42,  176 => 41,  172 => 40,  166 => 36,  164 => 35,  157 => 33,  153 => 32,  146 => 28,  138 => 27,  132 => 24,  126 => 20,  120 => 18,  114 => 16,  108 => 14,  102 => 12,  100 => 11,  95 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails d'une réunion{% endblock %}

{% block content %}
\t<section class=\"py-2 mb-5\">
\t    <h2 class=\"py-3\">Détails de réunion</h2>
\t    <div class=\"d-flex justify-content-between\">
\t\t\t{% if 'bureau' in app.session.get('ranks') %}
\t\t\t\t<a href=\"{{ path('index_reunions') }}\" class=\"btn btn-primary mt-4\" role=\"button\"><i class=\"fas fa-angle-left\"></i> Retour aux réunions</a>
\t\t\t\t{% if crTrouve is not empty %}
\t\t\t\t\t<a href=\"{{ path('edit_cr', {id : reunionTrouvee.getId()}) }}\" class=\"btn btn-secondary mt-4\" role=\"button\">Modifier CR</a>
\t\t\t\t{%else  %}
\t\t\t\t\t<a href=\"{{ path('add_cr', {id : reunionTrouvee.getId()}) }}\" class=\"btn btn-secondary mt-4\" role=\"button\">Ajouter CR</a>
\t\t\t\t{% endif %}
\t\t\t\t<a title=\"Gestion de cette réunion\"href=\"{{ path('view_back_reunion', {id :reunionTrouvee.getId()}) }}\" class=\"btn btn-secondary mt-4 \" role=\"button\"><i class=\"fas fa-cogs\"></i> </a> 
\t\t\t{% else %}
\t\t\t\t<a href=\"{{ path('index_reunions') }}\" class=\"btn btn-secondary mt-4\" role=\"button\"><i class=\"fas fa-angle-left\"></i> Retour aux réunions</a>
\t\t\t{% endif %}
\t\t</div>
\t\t<div class=\"card-deck my-4\">
\t\t\t<div class=\"card mb-3\">
\t\t\t    <div class=\"card-header\">
\t\t\t    \t<h3><b>{{ reunionTrouvee.getTitre() }}</b></h3>
\t\t\t    </div>
\t\t        <div class=\"card-title m-3\">
\t\t        \t<p>Le {{ reunionTrouvee.getDatetimeReu()|date(\"d/m/Y\") }} à {{ reunionTrouvee.getDatetimeReu()|date(\"H:i\") }} (<em>{{ reunionTrouvee.getTypeReu() }})</em>.</p>
\t\t        \t<p>Lieu : {{ reunionTrouvee.getLieuReu() }}</p>
\t\t        \t 
\t\t\t\t</div>
\t  \t\t\t<div class=\"card-body\">
\t  \t\t\t\t<p>Ordre du jour : {{ reunionTrouvee.getContenu()|nl2br }}</p>
\t\t  \t\t\t<p><em>Proposé par : {{ reunionTrouvee.getUser().getPrenom() ?? '' }}, le {{reunionTrouvee.getDatetimePost()|date(\"d/m/Y\")}}</em></p>        
\t\t\t    </div>\t
\t\t\t    {% if crTrouve is not empty %}
\t\t\t\t    <div class=\"card-title m-3\">
\t\t\t\t    \t<h4>Compte Rendu</h4>
\t\t\t\t    </div>
\t\t\t\t    <div class=\"card-body\">
\t\t\t    \t\t<p><b>{{ crTrouve.getTitre() }}</b></p>
\t\t            \t<p>{{ crTrouve.getContenu()|nl2br }}</p>
\t\t           \t\t<p>Publié le {{ crTrouve.getDatetimePost()|date(\"d/m/Y\") }} à {{ crTrouve.getDatetimePost()|date(\"H:i\") }}
\t\t              \t{% if crTrouve.getDatetimeModif() is defined %}
\t\t       \t\t \t\t,<em> modifié le {{ crTrouve.getDatetimeModif()|date(\"d/m/Y\") }} à {{ crTrouve.getDatetimeModif()|date(\"H:i\") }}</em> 
\t\t       \t\t\t{% endif %}
\t\t       \t\t\t\t- par {{ crTrouve.getUser().getPrenom() ?? '' }}.</p>\t
\t\t\t        </div>
\t\t\t    {% endif %}   \t\t              
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}
", "reunions/viewReu.html.twig", "C:\\xampp\\htdocs\\moto_club_v2\\moto_club_v2\\templates\\reunions\\viewReu.html.twig");
    }
}
