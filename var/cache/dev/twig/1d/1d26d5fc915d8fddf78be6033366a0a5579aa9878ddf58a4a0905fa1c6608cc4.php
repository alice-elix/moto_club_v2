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

/* balades/gestion-inscrits.html.twig */
class __TwigTemplate_aaaf88775ed999740aab1796f1392c40e35d9ee84b0204b575b2fa51ec586ef6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "balades/gestion-inscrits.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "balades/gestion-inscrits.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "balades/gestion-inscrits.html.twig", 1);
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

        echo "Gestion Balades";
        
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
        echo "
\t<section class=\"py-2 mb-5 container\">
\t\t<div class=\"d-flex justify-content-between\">
\t\t\t<span>
\t\t\t\t<a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_balades");
        echo "\" class=\"btn btn-secondary\" role=\"button\"><i class=\"fas fa-angle-left\"></i> Retour</a>
\t\t\t</span>
\t\t\t<span>
\t\t\t</span>
\t\t</div>\t
\t\t<div class=\"card-deck my-4\">
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t<span>Liste des inscrits</span>
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t<a title=\"Afficher la balade\" class=\"btn btn-info\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_balade", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 21, $this->source); })()), "getId", [], "method", false, false, false, 21)]), "html", null, true);
        echo "\" role=\"button\"><i class=\"fas fa-globe-europe\"></i></a>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"scrolling-table\">
\t\t\t\t\t\t<table class=\"admin-table-mg\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t<th class=\"text-left\">Participant</th>
\t\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t      \t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inscrits"]) || array_key_exists("inscrits", $context) ? $context["inscrits"] : (function () { throw new RuntimeError('Variable "inscrits" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["inscrit"]) {
            // line 37
            echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t    ";
            // line 39
            $context["i"] = ((((isset($context["i"]) || array_key_exists("i", $context))) ? (_twig_default_filter((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 39, $this->source); })()), 0)) : (0)) + 1);
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 39, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"title font-weight-bold\">";
            // line 42
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrit"], "getUser", [], "method", false, false, false, 42), "getPrenom", [], "method", false, false, false, 42) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrit"], "getUser", [], "method", false, false, false, 42), "getNom", [], "method", false, false, false, 42)), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"font-italic\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["nomsRanks"]) || array_key_exists("nomsRanks", $context) ? $context["nomsRanks"] : (function () { throw new RuntimeError('Variable "nomsRanks" does not exist.', 43, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrit"], "getUser", [], "method", false, false, false, 43), "getAcces", [], "method", false, false, false, 43), [], "array", false, false, false, 43), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"d-flex justify-content-center align-items-center flex-nowrap\">
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<div>

\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrit"], "getUser", [], "method", false, false, false, 49), "getAcces", [], "any", false, false, false, 49) != "admin")) {
                // line 50
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a \ttitle=\"Exclure le participant\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"btn btn-danger\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("exclure_inscrit", ["id" => twig_get_attribute($this->env, $this->source, $context["inscrit"], "getId", [], "method", false, false, false, 52)]), "html", null, true);
                echo "\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"button\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-toggle=\"modal\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-target=\"#modalDelete\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-content=\"Vous êtes sur le point d'exclure <strong>";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrit"], "getUser", [], "method", false, false, false, 56), "getPrenom", [], "method", false, false, false, 56), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inscrit"], "getUser", [], "method", false, false, false, 56), "getNom", [], "method", false, false, false, 56), "html", null, true);
                echo "</strong> de la balade <strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["balade"]) || array_key_exists("balade", $context) ? $context["balade"] : (function () { throw new RuntimeError('Variable "balade" does not exist.', 56, $this->source); })()), "getTitre", [], "method", false, false, false, 56), "html", null, true);
                echo "</strong> de manière irréversible. Êtes-vous sûr(e) de vouloir continuer ?\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 60
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscrit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t      \t
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
        return "balades/gestion-inscrits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 65,  178 => 60,  167 => 56,  160 => 52,  156 => 50,  154 => 49,  145 => 43,  141 => 42,  134 => 39,  130 => 37,  126 => 36,  108 => 21,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block title %}Gestion Balades{% endblock %}

{% block content %}

\t<section class=\"py-2 mb-5 container\">
\t\t<div class=\"d-flex justify-content-between\">
\t\t\t<span>
\t\t\t\t<a href=\"{{ path('gestion_balades') }}\" class=\"btn btn-secondary\" role=\"button\"><i class=\"fas fa-angle-left\"></i> Retour</a>
\t\t\t</span>
\t\t\t<span>
\t\t\t</span>
\t\t</div>\t
\t\t<div class=\"card-deck my-4\">
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t<span>Liste des inscrits</span>
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t<a title=\"Afficher la balade\" class=\"btn btn-info\" href=\"{{ path('view_balade', {id: balade.getId() }) }}\" role=\"button\"><i class=\"fas fa-globe-europe\"></i></a>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"scrolling-table\">
\t\t\t\t\t\t<table class=\"admin-table-mg\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t<th class=\"text-left\">Participant</th>
\t\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t      \t{% for inscrit in inscrits %}
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t    {% set i = ( i | default(0) ) + 1 %}{{i}}
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"title font-weight-bold\">{{ inscrit.getUser().getPrenom() ~ ' ' ~ inscrit.getUser().getNom() }}</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"font-italic\">{{ nomsRanks[inscrit.getUser().getAcces()] }}</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"d-flex justify-content-center align-items-center flex-nowrap\">
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<div>

\t\t\t\t\t\t\t\t\t\t\t\t\t{% if inscrit.getUser().getAcces != 'admin' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a \ttitle=\"Exclure le participant\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"btn btn-danger\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"{{ path('exclure_inscrit', {id: inscrit.getId()}) }}\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"button\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-toggle=\"modal\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-target=\"#modalDelete\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-content=\"Vous êtes sur le point d'exclure <strong>{{inscrit.getUser().getPrenom()}} {{inscrit.getUser().getNom()}}</strong> de la balade <strong>{{ balade.getTitre() }}</strong> de manière irréversible. Êtes-vous sûr(e) de vouloir continuer ?\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t      \t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

{% endblock %}", "balades/gestion-inscrits.html.twig", "C:\\xampp\\htdocs\\moto_club_v2\\moto_club_v2\\templates\\balades\\gestion-inscrits.html.twig");
    }
}
