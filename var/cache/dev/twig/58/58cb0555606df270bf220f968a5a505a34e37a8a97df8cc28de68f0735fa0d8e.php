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

/* reunions/viewCr.html.twig */
class __TwigTemplate_d765f83195acfade771c32847f38dc4f81f520eb68792a8965a3e454febc3454 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reunions/viewCr.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reunions/viewCr.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reunions/viewCr.html.twig", 1);
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

        echo "Détails d'un compte-rendu";
        
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
    <section class=\"py-2 mb-5\">
\t\t<div class=\"card mb-3\">
\t\t    <h2>Compte-rendu complet  </h2>
\t\t  \t<div class=\"card-header\">
\t\t    \t<i class=\"fas fa-table\"></i>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crTrouve"]) || array_key_exists("crTrouve", $context) ? $context["crTrouve"] : (function () { throw new RuntimeError('Variable "crTrouve" does not exist.', 11, $this->source); })()), "getTitre", [], "method", false, false, false, 11), "html", null, true);
        echo "
\t\t    </div>
\t\t  \t<div class=\"card-body\">
\t\t\t    <div class=\"table-responsive\">
\t\t\t      <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
\t\t\t        <thead>
\t\t\t          <tr>
\t\t\t            <th>Intitulé du CR</th>
\t\t\t            <th>Compte-rendu</th>
\t\t\t            <th>Publication <em>et modification</em> </th>
\t\t\t            <th>Redigé par </th>
\t\t\t            <th></th>
\t\t\t          </tr>
\t\t\t        </thead>
\t\t\t        <tbody>
\t\t\t          <tr>
\t\t\t            <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crTrouve"]) || array_key_exists("crTrouve", $context) ? $context["crTrouve"] : (function () { throw new RuntimeError('Variable "crTrouve" does not exist.', 27, $this->source); })()), "getTitre", [], "method", false, false, false, 27), "html", null, true);
        echo " </td>
\t\t\t            <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crTrouve"]) || array_key_exists("crTrouve", $context) ? $context["crTrouve"] : (function () { throw new RuntimeError('Variable "crTrouve" does not exist.', 28, $this->source); })()), "getContenu", [], "method", false, false, false, 28), "html", null, true);
        echo " </td>
\t\t\t            <td>Publié le ";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crTrouve"]) || array_key_exists("crTrouve", $context) ? $context["crTrouve"] : (function () { throw new RuntimeError('Variable "crTrouve" does not exist.', 29, $this->source); })()), "getDatetimePost", [], "method", false, false, false, 29), "d/m/Y"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crTrouve"]) || array_key_exists("crTrouve", $context) ? $context["crTrouve"] : (function () { throw new RuntimeError('Variable "crTrouve" does not exist.', 29, $this->source); })()), "getDatetimePost", [], "method", false, false, false, 29), "H:i"), "html", null, true);
        echo " 
\t\t\t            ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, ($context["crTrouve"] ?? null), "getDatetimeModif", [], "method", true, true, false, 30)) {
            // line 31
            echo "\t\t\t       \t\t \t,<em> modifié le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crTrouve"]) || array_key_exists("crTrouve", $context) ? $context["crTrouve"] : (function () { throw new RuntimeError('Variable "crTrouve" does not exist.', 31, $this->source); })()), "getDatetimeModif", [], "method", false, false, false, 31), "d/m/Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crTrouve"]) || array_key_exists("crTrouve", $context) ? $context["crTrouve"] : (function () { throw new RuntimeError('Variable "crTrouve" does not exist.', 31, $this->source); })()), "getDatetimeModif", [], "method", false, false, false, 31), "H:i"), "html", null, true);
            echo "</em></td>
\t\t\t       \t\t";
        } else {
            // line 33
            echo "\t\t\t       \t\t \t</td>
\t\t\t       \t\t";
        }
        // line 35
        echo "\t\t\t            <td>";
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["crTrouve"] ?? null), "getUser", [], "method", false, true, false, 35), "getPrenom", [], "method", true, true, false, 35) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["crTrouve"] ?? null), "getUser", [], "method", false, true, false, 35), "getPrenom", [], "method", false, false, false, 35)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["crTrouve"] ?? null), "getUser", [], "method", false, true, false, 35), "getPrenom", [], "method", false, false, false, 35), "html", null, true))) : (print ("")));
        echo " </td>
\t\t\t            <td>
\t\t\t            \t<a class=\"btn btn-primary btn-block\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_cr", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["crTrouve"]) || array_key_exists("crTrouve", $context) ? $context["crTrouve"] : (function () { throw new RuntimeError('Variable "crTrouve" does not exist.', 37, $this->source); })()), "getId", [], "method", false, false, false, 37)]), "html", null, true);
        echo "\" role=\"button\">Modifier</a>
\t\t\t            \t<a class=\"btn btn-secondary btn-block\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_cr");
        echo "\" role=\"button\">Liste des compte-rendus</a>
\t\t\t            \t<a class=\"btn btn-danger btn-block\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("del_cr", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["crTrouve"]) || array_key_exists("crTrouve", $context) ? $context["crTrouve"] : (function () { throw new RuntimeError('Variable "crTrouve" does not exist.', 39, $this->source); })()), "getId", [], "method", false, false, false, 39)]), "html", null, true);
        echo "\" role=\"button\">Supprimer</a>
\t\t\t            </td>
\t\t\t          </tr>
\t\t\t        </tbody>

\t\t\t      </table>
\t\t\t    </div>
\t\t\t</div>
\t\t\t<div class=\"card-footer small text-muted\">Reunion postée le  ";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crTrouve"]) || array_key_exists("crTrouve", $context) ? $context["crTrouve"] : (function () { throw new RuntimeError('Variable "crTrouve" does not exist.', 47, $this->source); })()), "getDatetimePost", [], "method", false, false, false, 47), "d/m/Y"), "html", null, true);
        echo "</div>
\t\t</div>
\t</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reunions/viewCr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 47,  156 => 39,  152 => 38,  148 => 37,  142 => 35,  138 => 33,  130 => 31,  128 => 30,  122 => 29,  118 => 28,  114 => 27,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails d'un compte-rendu{% endblock %}

{% block content %}
    
    <section class=\"py-2 mb-5\">
\t\t<div class=\"card mb-3\">
\t\t    <h2>Compte-rendu complet  </h2>
\t\t  \t<div class=\"card-header\">
\t\t    \t<i class=\"fas fa-table\"></i>{{ crTrouve.getTitre() }}
\t\t    </div>
\t\t  \t<div class=\"card-body\">
\t\t\t    <div class=\"table-responsive\">
\t\t\t      <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
\t\t\t        <thead>
\t\t\t          <tr>
\t\t\t            <th>Intitulé du CR</th>
\t\t\t            <th>Compte-rendu</th>
\t\t\t            <th>Publication <em>et modification</em> </th>
\t\t\t            <th>Redigé par </th>
\t\t\t            <th></th>
\t\t\t          </tr>
\t\t\t        </thead>
\t\t\t        <tbody>
\t\t\t          <tr>
\t\t\t            <td>{{ crTrouve.getTitre() }} </td>
\t\t\t            <td>{{ crTrouve.getContenu() }} </td>
\t\t\t            <td>Publié le {{ crTrouve.getDatetimePost()|date(\"d/m/Y\") }} à {{ crTrouve.getDatetimePost()|date(\"H:i\") }} 
\t\t\t            {% if crTrouve.getDatetimeModif() is defined %}
\t\t\t       \t\t \t,<em> modifié le {{ crTrouve.getDatetimeModif()|date(\"d/m/Y\") }} à {{ crTrouve.getDatetimeModif()|date(\"H:i\") }}</em></td>
\t\t\t       \t\t{% else %}
\t\t\t       \t\t \t</td>
\t\t\t       \t\t{% endif %}
\t\t\t            <td>{{ crTrouve.getUser().getPrenom() ?? '' }} </td>
\t\t\t            <td>
\t\t\t            \t<a class=\"btn btn-primary btn-block\" href=\"{{ path('edit_cr', {id : crTrouve.getId()}) }}\" role=\"button\">Modifier</a>
\t\t\t            \t<a class=\"btn btn-secondary btn-block\" href=\"{{ path('index_cr') }}\" role=\"button\">Liste des compte-rendus</a>
\t\t\t            \t<a class=\"btn btn-danger btn-block\" href=\"{{ path('del_cr', {id : crTrouve.getId()}) }}\" role=\"button\">Supprimer</a>
\t\t\t            </td>
\t\t\t          </tr>
\t\t\t        </tbody>

\t\t\t      </table>
\t\t\t    </div>
\t\t\t</div>
\t\t\t<div class=\"card-footer small text-muted\">Reunion postée le  {{crTrouve.getDatetimePost()|date(\"d/m/Y\")}}</div>
\t\t</div>
\t</section>
{% endblock %}
", "reunions/viewCr.html.twig", "C:\\xampp\\htdocs\\moto_club\\templates\\reunions\\viewCr.html.twig");
    }
}
