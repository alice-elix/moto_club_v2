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

/* reunions/delReu.html.twig */
class __TwigTemplate_5c9cdeb62202d28855ca7e54d7af57bdfebf9041fdb465826453394d119c76e6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reunions/delReu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reunions/delReu.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "reunions/delReu.html.twig", 1);
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

        echo "Suppression d'une réunion";
        
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
<div class=\"card mb-3\">
    <h2>Détails de la réunion à supprimer  </h2>
  \t<div class=\"card-header\">
    \t<i class=\"fas fa-table\"></i>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 10, $this->source); })()), "getTitre", [], "method", false, false, false, 10), "html", null, true);
        echo "
    </div>
  \t<div class=\"card-body\">
\t    <div class=\"table-responsive\">
\t      <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
\t        <thead>
\t          <tr>
\t            <th>Intitulé de la réunion</th>
\t            <th>Type de réunion</th>
\t            <th>Date et heure </th>
\t            <th>Lieux</th>
\t            <th>Contenu de la réunion</th>
\t            <th>Proposé par </th>
\t            <th></th>
\t          </tr>
\t        </thead>
\t        <tbody>
\t          <tr>
\t            <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 28, $this->source); })()), "getTitre", [], "method", false, false, false, 28), "html", null, true);
        echo " </td>
\t            <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 29, $this->source); })()), "getTypeReu", [], "method", false, false, false, 29), "html", null, true);
        echo " </td>
\t            <td>Le ";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 30, $this->source); })()), "getDatetimeReu", [], "method", false, false, false, 30), "d/m/Y"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 30, $this->source); })()), "getDatetimeReu", [], "method", false, false, false, 30), "H:i"), "html", null, true);
        echo " </td>
\t            <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 31, $this->source); })()), "getLieuReu", [], "method", false, false, false, 31), "html", null, true);
        echo " </td>
\t            <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 32, $this->source); })()), "getContenu", [], "method", false, false, false, 32), "html", null, true);
        echo " </td>
\t            <td>";
        // line 33
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reunionTrouvee"] ?? null), "getUser", [], "method", false, true, false, 33), "getPrenom", [], "method", true, true, false, 33) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reunionTrouvee"] ?? null), "getUser", [], "method", false, true, false, 33), "getPrenom", [], "method", false, false, false, 33)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reunionTrouvee"] ?? null), "getUser", [], "method", false, true, false, 33), "getPrenom", [], "method", false, false, false, 33), "html", null, true))) : (print ("")));
        echo " </td>
\t            <td>
\t            \t<a class=\"btn btn-primary btn-block\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_reunion", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 35, $this->source); })()), "getId", [], "method", false, false, false, 35)]), "html", null, true);
        echo "\" role=\"button\">Modifier</a>
\t            \t<a class=\"btn btn-secondary btn-block\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_reunions");
        echo "\" role=\"button\">Liste des réunions</a>
\t            \t<button type=\"button\" class=\"btn btn-danger btn-block\" data-toggle=\"modal\" data-target=\"#delReu\">Supprimer</button>
\t            \t<div class=\"modal fade\" id=\"delReu\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"suppressionReunion\" aria-hidden=\"true\">
\t            \t  <div class=\"modal-dialog\" role=\"document\">
\t            \t    <div class=\"modal-content\">
\t            \t      <div class=\"modal-header\">
\t            \t        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Suppression de \"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 42, $this->source); })()), "getTitre", [], "method", false, false, false, 42), "html", null, true);
        echo "\"</h5>
\t            \t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t            \t          <span aria-hidden=\"true\">&times;</span>
\t            \t        </button>
\t            \t      </div>
\t            \t      <div class=\"modal-body\">
\t            \t        Voulez vous supprimer définitivement cette réunion ?
\t            \t      </div>
\t            \t      <div class=\"modal-footer\">
\t            \t        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Non</button>
\t            \t        <a class=\"btn btn-secondary \" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_reunion", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 52, $this->source); })()), "getId", [], "method", false, false, false, 52)]), "html", null, true);
        echo "\" role=\"button\">Je préfère la modifier</a>
\t            \t        <a class=\"btn btn-danger  \" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("del_conf", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 53, $this->source); })()), "getId", [], "method", false, false, false, 53)]), "html", null, true);
        echo "\" role=\"button\">Oui </a>
\t            \t        
\t            \t      </div>
\t            \t    </div>
\t            \t  </div>
\t            \t</div>
\t            </td>
\t          </tr>
\t        </tbody>
\t      </table>
\t    </div>
\t</div>
\t<div class=\"card-footer small text-muted\">Reunion postée le  ";
        // line 65
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 65, $this->source); })()), "getDatetimePost", [], "method", false, false, false, 65), "d/m/Y"), "html", null, true);
        echo "</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reunions/delReu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 65,  172 => 53,  168 => 52,  155 => 42,  146 => 36,  142 => 35,  137 => 33,  133 => 32,  129 => 31,  123 => 30,  119 => 29,  115 => 28,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block title %}Suppression d'une réunion{% endblock %}

{% block content %}
    
<div class=\"card mb-3\">
    <h2>Détails de la réunion à supprimer  </h2>
  \t<div class=\"card-header\">
    \t<i class=\"fas fa-table\"></i>{{ reunionTrouvee.getTitre() }}
    </div>
  \t<div class=\"card-body\">
\t    <div class=\"table-responsive\">
\t      <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
\t        <thead>
\t          <tr>
\t            <th>Intitulé de la réunion</th>
\t            <th>Type de réunion</th>
\t            <th>Date et heure </th>
\t            <th>Lieux</th>
\t            <th>Contenu de la réunion</th>
\t            <th>Proposé par </th>
\t            <th></th>
\t          </tr>
\t        </thead>
\t        <tbody>
\t          <tr>
\t            <td>{{ reunionTrouvee.getTitre() }} </td>
\t            <td>{{ reunionTrouvee.getTypeReu() }} </td>
\t            <td>Le {{ reunionTrouvee.getDatetimeReu()|date(\"d/m/Y\") }} à {{ reunionTrouvee.getDatetimeReu()|date(\"H:i\") }} </td>
\t            <td>{{ reunionTrouvee.getLieuReu() }} </td>
\t            <td>{{ reunionTrouvee.getContenu() }} </td>
\t            <td>{{ reunionTrouvee.getUser().getPrenom() ?? '' }} </td>
\t            <td>
\t            \t<a class=\"btn btn-primary btn-block\" href=\"{{ path('edit_reunion', {id : reunionTrouvee.getId()}) }}\" role=\"button\">Modifier</a>
\t            \t<a class=\"btn btn-secondary btn-block\" href=\"{{ path('index_reunions') }}\" role=\"button\">Liste des réunions</a>
\t            \t<button type=\"button\" class=\"btn btn-danger btn-block\" data-toggle=\"modal\" data-target=\"#delReu\">Supprimer</button>
\t            \t<div class=\"modal fade\" id=\"delReu\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"suppressionReunion\" aria-hidden=\"true\">
\t            \t  <div class=\"modal-dialog\" role=\"document\">
\t            \t    <div class=\"modal-content\">
\t            \t      <div class=\"modal-header\">
\t            \t        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Suppression de \"{{ reunionTrouvee.getTitre() }}\"</h5>
\t            \t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t            \t          <span aria-hidden=\"true\">&times;</span>
\t            \t        </button>
\t            \t      </div>
\t            \t      <div class=\"modal-body\">
\t            \t        Voulez vous supprimer définitivement cette réunion ?
\t            \t      </div>
\t            \t      <div class=\"modal-footer\">
\t            \t        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Non</button>
\t            \t        <a class=\"btn btn-secondary \" href=\"{{ path('edit_reunion', {id : reunionTrouvee.getId()}) }}\" role=\"button\">Je préfère la modifier</a>
\t            \t        <a class=\"btn btn-danger  \" href=\"{{ path('del_conf', {id : reunionTrouvee.getId()}) }}\" role=\"button\">Oui </a>
\t            \t        
\t            \t      </div>
\t            \t    </div>
\t            \t  </div>
\t            \t</div>
\t            </td>
\t          </tr>
\t        </tbody>
\t      </table>
\t    </div>
\t</div>
\t<div class=\"card-footer small text-muted\">Reunion postée le  {{reunionTrouvee.getDatetimePost()|date(\"d/m/Y\")}}</div>
</div>
{% endblock %}
", "reunions/delReu.html.twig", "C:\\xampp\\htdocs\\moto_club\\templates\\reunions\\delReu.html.twig");
    }
}
