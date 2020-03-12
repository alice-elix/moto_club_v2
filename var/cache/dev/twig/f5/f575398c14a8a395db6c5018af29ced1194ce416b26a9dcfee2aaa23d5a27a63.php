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

/* back_office/liste.html.twig */
class __TwigTemplate_57135a3b554d565958e6ba4c542a04cc90d11d2ae6023a09842b4f46b0f82ee7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_office/liste.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_office/liste.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "back_office/liste.html.twig", 1);
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

        echo "Liste des adhérent·es";
        
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

<!-- DataTables Example -->
<div class=\"card mb-3\">
  <div class=\"card-header\">
    <i class=\"fas fa-table\"></i>
    Liste des adhérent·es</div>
  <div class=\"card-body\">
    <div class=\"table-responsive\">
      <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date adhésion</th>
            <th>Email</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adherentsTrouves"]) || array_key_exists("adherentsTrouves", $context) ? $context["adherentsTrouves"] : (function () { throw new RuntimeError('Variable "adherentsTrouves" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["adherentTrouve"]) {
            // line 27
            echo "          <tr>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherentTrouve"], "getNom", [], "method", false, false, false, 28), "html", null, true);
            echo " </td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherentTrouve"], "getPrenom", [], "method", false, false, false, 29), "html", null, true);
            echo " </td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherentTrouve"], "getDateAdhesion", [], "method", false, false, false, 30), "html", null, true);
            echo " </td>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherentTrouve"], "getEmail", [], "method", false, false, false, 31), "html", null, true);
            echo " </td>
            <td><a class=\"btn btn-secondary\" href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_accueil");
            echo "\" role=\"button\">Modifier</a></td>
            <td><a class=\"btn btn-secondary\" href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_accueil");
            echo "\" role=\"button\">Afficher</a></td>
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adherentTrouve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo " 
        </tbody>

      </table>
    </div>
  </div>
  <div class=\"card-footer small text-muted\">Updated yesterday at 11:59 PM</div>
</div>

<p class=\"small text-center text-muted my-5\">
  <em>More table examples coming soon...</em>
</p>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back_office/liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 35,  137 => 33,  133 => 32,  129 => 31,  125 => 30,  121 => 29,  117 => 28,  114 => 27,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %} 

{% block title %}Liste des adhérent·es{% endblock %}

{% block content %}


<!-- DataTables Example -->
<div class=\"card mb-3\">
  <div class=\"card-header\">
    <i class=\"fas fa-table\"></i>
    Liste des adhérent·es</div>
  <div class=\"card-body\">
    <div class=\"table-responsive\">
      <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date adhésion</th>
            <th>Email</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          {% for adherentTrouve in adherentsTrouves %}
          <tr>
            <td>{{ adherentTrouve.getNom() }} </td>
            <td>{{ adherentTrouve.getPrenom() }} </td>
            <td>{{ adherentTrouve.getDateAdhesion() }} </td>
            <td>{{ adherentTrouve.getEmail() }} </td>
            <td><a class=\"btn btn-secondary\" href=\"{{path('admin_accueil')}}\" role=\"button\">Modifier</a></td>
            <td><a class=\"btn btn-secondary\" href=\"{{path('admin_accueil')}}\" role=\"button\">Afficher</a></td>
          </tr>
          {%  endfor %} 
        </tbody>

      </table>
    </div>
  </div>
  <div class=\"card-footer small text-muted\">Updated yesterday at 11:59 PM</div>
</div>

<p class=\"small text-center text-muted my-5\">
  <em>More table examples coming soon...</em>
</p>

{% endblock %}

      ", "back_office/liste.html.twig", "C:\\xampp\\htdocs\\moto_club\\templates\\back_office\\liste.html.twig");
    }
}
