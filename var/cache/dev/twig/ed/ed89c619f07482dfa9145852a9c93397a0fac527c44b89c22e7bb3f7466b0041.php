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

/* balades/gestion-balades.html.twig */
class __TwigTemplate_ef671180b5c1c88d74e026e143074390780cac9af06ebce37030731d705d12ab extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "balades/gestion-balades.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "balades/gestion-balades.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "balades/gestion-balades.html.twig", 1);
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
\t<section class=\"py-2 mb-5 container\">\t\t
\t\t<div class=\"card-deck my-4\">
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t<span>Liste des balades</span>
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t<a title=\"Afficher les balades\" class=\"btn btn-info\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_balades");
        echo "\" role=\"button\"><i class=\"fas fa-globe-europe\"></i></a>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"scrolling-table\">
\t\t\t\t\t\t<table class=\"admin-table-mg\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<th class=\"text-left\">Balade</th>
\t\t\t\t\t\t\t\t<th>Statut</th>
\t\t\t\t\t\t\t\t<th>Participants</th>
\t\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t      \t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bal_datas"]) || array_key_exists("bal_datas", $context) ? $context["bal_datas"] : (function () { throw new RuntimeError('Variable "bal_datas" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bal_data"]) {
            // line 31
            echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"title\"><a class=\"text-info\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_balade", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 33), "getId", [], "method", false, false, false, 33)]), "html", null, true);
            echo "\"><strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 33), "getTitre", [], "method", false, false, false, 33), "html", null, true);
            echo "</strong></a></div>
\t\t\t\t\t\t\t\t\t\t\t<div><em>Proposée par :</em> <strong>";
            // line 34
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 34), "getUser", [], "method", false, false, false, 34), "getPrenom", [], "method", false, false, false, 34) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 34), "getUser", [], "method", false, false, false, 34), "getNom", [], "method", false, false, false, 34)), "html", null, true);
            echo "</strong></div>
\t\t\t\t\t\t\t\t\t\t\t<div><em>Date de début :</em> <strong>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 35), "getDateDebut", [], "method", false, false, false, 35), "d/m/Y"), "html", null, true);
            echo "</strong></div>
\t\t\t\t\t\t\t\t\t\t\t<div><em>Posté le :</em> ";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 36), "getDatetimePost", [], "method", false, false, false, 36), "d/m/Y H:i"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 40
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 40), "getBalActive", [], "method", false, false, false, 40)) {
                // line 41
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 41), "getInscActive", [], "method", false, false, false, 41)) {
                    // line 42
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='text-success text-center font-weight-bold'>";
                    echo "Ouvert";
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 44
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='text-danger text-center font-weight-bold'>";
                    echo "Fermé";
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 46
                echo "\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 47
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='text-secondary text-center font-weight-bold font-italic'>";
                echo "En attente<br>de validation";
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 49
            echo "\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-center font-weight-bold\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bal_data"], "nbInscrits", [], "any", false, false, false, 51), "html", null, true);
            if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 51), "getNbMaxPers", [], "method", false, false, false, 51))) {
                echo twig_escape_filter($this->env, (" / " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 51), "getNbMaxPers", [], "method", false, false, false, 51)), "html", null, true);
            }
            echo "</div>
\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t<td class=\"d-flex justify-content-center align-items-center flex-nowrap\">
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 57
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 57), "getBalActive", [], "method", false, false, false, 57)) {
                // line 58
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 58), "getInscActive", [], "method", false, false, false, 58)) {
                    // line 59
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"Clôturer les inscriptions\" class=\"btn btn-warning\" href=\"";
                    // line 60
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cloturer_inscriptions", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 60), "getId", [], "method", false, false, false, 60)]), "html", null, true);
                    echo "\" role=\"button\"><i class=\"fas fa-lock-open\"></i></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 62
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title='Réouvrir les inscriptions'class=\"btn btn-warning\" href=\"";
                    // line 63
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ouvrir_inscriptions", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 63), "getId", [], "method", false, false, false, 63)]), "html", null, true);
                    echo "\" role=\"button\"><i class=\"fas fa-lock\"></i></a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 66
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 67
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"Valider la proposition\" class=\"btn btn-success\" href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("valider_balade", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 68), "getId", [], "method", false, false, false, 68)]), "html", null, true);
                echo "\" role=\"button\"><i class=\"fas fa-check\"></i></a>

\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 71
            echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"Modifier la balade\" class=\"btn btn-dark\" href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_balade", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 72), "getId", [], "method", false, false, false, 72)]), "html", null, true);
            echo "\" role=\"button\"><i class=\"fas fa-edit\"></i></a>

\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 74
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 74), "getBalActive", [], "method", false, false, false, 74)) {
                // line 75
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a \ttitle=\"Supprimer la balade\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"btn btn-danger\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("del_balade", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 77), "getId", [], "method", false, false, false, 77)]), "html", null, true);
                echo "\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"button\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-toggle=\"modal\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-target=\"#modalDelete\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-content=\"Vous êtes sur le point de supprimer la balade <strong>";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 81), "getTitre", [], "method", false, false, false, 81), "html", null, true);
                echo "</strong> de manière irréversible. Êtes-vous sûr(e) de vouloir continuer ?\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 85
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a \ttitle=\"Refuser la proposition\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"btn btn-danger\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("del_balade", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 87), "getId", [], "method", false, false, false, 87)]), "html", null, true);
                echo "\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-toggle=\"modal\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-target=\"#modalDelete\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-content=\"Vous êtes sur le point de supprimer la balade <strong>";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 91), "getTitre", [], "method", false, false, false, 91), "html", null, true);
                echo "</strong> proposée par <strong>";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 91), "getUser", [], "method", false, false, false, 91), "getPrenom", [], "method", false, false, false, 91) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 91), "getUser", [], "method", false, false, false, 91), "getNom", [], "method", false, false, false, 91)), "html", null, true);
                echo "</strong>. Cette action est irréversible. Êtes-vous sûr de vouloir continuer ?\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 95
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 97
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 97), "getBalActive", [], "method", false, false, false, 97)) {
                // line 98
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title='Gérer les inscrits'class=\"btn btn-info\" href=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_inscrits", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 100), "getId", [], "method", false, false, false, 100)]), "html", null, true);
                echo "\" role=\"button\"><i class=\"fas fa-users-cog\"></i></a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 102
                if ((twig_get_attribute($this->env, $this->source, $context["bal_data"], "nb_photos", [], "any", false, false, false, 102) > 0)) {
                    // line 103
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title='Gérer les photos' class=\"btn btn-primary\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_photos", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 103), "getId", [], "method", false, false, false, 103)]), "html", null, true);
                    echo "\" role=\"button\"><i class=\"fas fa-images\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 105
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary disabled\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_photos", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bal_data"], "balade", [], "any", false, false, false, 105), "getId", [], "method", false, false, false, 105)]), "html", null, true);
                    echo "\" role=\"button\" disabled><i class=\"fas fa-images\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 107
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 111
            echo "\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bal_data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
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
        return "balades/gestion-balades.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 115,  305 => 111,  299 => 107,  293 => 105,  287 => 103,  285 => 102,  280 => 100,  276 => 98,  274 => 97,  270 => 95,  261 => 91,  254 => 87,  250 => 85,  243 => 81,  236 => 77,  232 => 75,  230 => 74,  225 => 72,  222 => 71,  216 => 68,  213 => 67,  210 => 66,  204 => 63,  201 => 62,  196 => 60,  193 => 59,  190 => 58,  188 => 57,  176 => 51,  172 => 49,  166 => 47,  163 => 46,  157 => 44,  151 => 42,  148 => 41,  146 => 40,  139 => 36,  135 => 35,  131 => 34,  125 => 33,  121 => 31,  117 => 30,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block title %}Gestion Balades{% endblock %}

{% block content %}

\t<section class=\"py-2 mb-5 container\">\t\t
\t\t<div class=\"card-deck my-4\">
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t<span>Liste des balades</span>
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t<a title=\"Afficher les balades\" class=\"btn btn-info\" href=\"{{ path('index_balades') }}\" role=\"button\"><i class=\"fas fa-globe-europe\"></i></a>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"scrolling-table\">
\t\t\t\t\t\t<table class=\"admin-table-mg\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<th class=\"text-left\">Balade</th>
\t\t\t\t\t\t\t\t<th>Statut</th>
\t\t\t\t\t\t\t\t<th>Participants</th>
\t\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t      \t{% for bal_data in bal_datas %}
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"title\"><a class=\"text-info\" href=\"{{path('view_balade', {id: bal_data.balade.getId()})}}\"><strong>{{ bal_data.balade.getTitre() }}</strong></a></div>
\t\t\t\t\t\t\t\t\t\t\t<div><em>Proposée par :</em> <strong>{{ bal_data.balade.getUser().getPrenom() ~ ' ' ~ bal_data.balade.getUser().getNom() }}</strong></div>
\t\t\t\t\t\t\t\t\t\t\t<div><em>Date de début :</em> <strong>{{ bal_data.balade.getDateDebut()|date('d/m/Y') }}</strong></div>
\t\t\t\t\t\t\t\t\t\t\t<div><em>Posté le :</em> {{ bal_data.balade.getDatetimePost()|date('d/m/Y H:i') }}</div>
\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t{% if bal_data.balade.getBalActive() %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if bal_data.balade.getInscActive() %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='text-success text-center font-weight-bold'>{{ 'Ouvert' }}</div>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='text-danger text-center font-weight-bold'>{{ 'Fermé' }}</div>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class='text-secondary text-center font-weight-bold font-italic'>{{ 'En attente<br>de validation' }}</div>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-center font-weight-bold\">{{ bal_data.nbInscrits }}{% if bal_data.balade.getNbMaxPers() is not null %}{{ ' / ' ~ bal_data.balade.getNbMaxPers() }}{% endif %}</div>
\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t<td class=\"d-flex justify-content-center align-items-center flex-nowrap\">
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if bal_data.balade.getBalActive() %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if bal_data.balade.getInscActive() %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"Clôturer les inscriptions\" class=\"btn btn-warning\" href=\"{{path('cloturer_inscriptions', {id: bal_data.balade.getId()})}}\" role=\"button\"><i class=\"fas fa-lock-open\"></i></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title='Réouvrir les inscriptions'class=\"btn btn-warning\" href=\"{{path('ouvrir_inscriptions', {id: bal_data.balade.getId()})}}\" role=\"button\"><i class=\"fas fa-lock\"></i></a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"Valider la proposition\" class=\"btn btn-success\" href=\"{{path('valider_balade', {id: bal_data.balade.getId()})}}\" role=\"button\"><i class=\"fas fa-check\"></i></a>

\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"Modifier la balade\" class=\"btn btn-dark\" href=\"{{ path('edit_balade', {id: bal_data.balade.getId()}) }}\" role=\"button\"><i class=\"fas fa-edit\"></i></a>

\t\t\t\t\t\t\t\t\t\t\t\t\t{% if bal_data.balade.getBalActive() %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a \ttitle=\"Supprimer la balade\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"btn btn-danger\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"{{ path('del_balade', {id: bal_data.balade.getId()}) }}\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"button\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-toggle=\"modal\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-target=\"#modalDelete\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-content=\"Vous êtes sur le point de supprimer la balade <strong>{{ bal_data.balade.getTitre() }}</strong> de manière irréversible. Êtes-vous sûr(e) de vouloir continuer ?\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a \ttitle=\"Refuser la proposition\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"btn btn-danger\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"{{ path('del_balade', {id: bal_data.balade.getId()}) }}\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-toggle=\"modal\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-target=\"#modalDelete\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-content=\"Vous êtes sur le point de supprimer la balade <strong>{{ bal_data.balade.getTitre() }}</strong> proposée par <strong>{{ bal_data.balade.getUser().getPrenom() ~ ' ' ~ bal_data.balade.getUser().getNom() }}</strong>. Cette action est irréversible. Êtes-vous sûr de vouloir continuer ?\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t{% if bal_data.balade.getBalActive() %}

\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title='Gérer les inscrits'class=\"btn btn-info\" href=\"{{path('gestion_inscrits', {id: bal_data.balade.getId()})}}\" role=\"button\"><i class=\"fas fa-users-cog\"></i></a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if bal_data.nb_photos > 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title='Gérer les photos' class=\"btn btn-primary\" href=\"{{path('gestion_photos', {id: bal_data.balade.getId()})}}\" role=\"button\"><i class=\"fas fa-images\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary disabled\" href=\"{{path('gestion_photos', {id: bal_data.balade.getId()})}}\" role=\"button\" disabled><i class=\"fas fa-images\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
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

{% endblock %}", "balades/gestion-balades.html.twig", "C:\\xampp\\htdocs\\moto_club\\templates\\balades\\gestion-balades.html.twig");
    }
}
