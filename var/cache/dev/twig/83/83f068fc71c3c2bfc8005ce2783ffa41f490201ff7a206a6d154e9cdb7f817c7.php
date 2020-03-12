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

/* back_office/tables.html.twig */
class __TwigTemplate_7a64aa7d76ce858aff8ed5ce4a06897a461b262b53fced30a90a14782264453d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_office/tables.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_office/tables.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "back_office/tables.html.twig", 1);
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
            echo "          
          <tr>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherentTrouve"], "getNom", [], "method", false, false, false, 29), "html", null, true);
            echo " </td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherentTrouve"], "getPrenom", [], "method", false, false, false, 30), "html", null, true);
            echo " </td>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherentTrouve"], "getDateAdhesion", [], "method", false, false, false, 31), "html", null, true);
            echo " </td>
            <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adherentTrouve"], "getEmail", [], "method", false, false, false, 32), "html", null, true);
            echo " </td>
            <td><a class=\"btn btn-secondary\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ed_article", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["articleTrouve"]) || array_key_exists("articleTrouve", $context) ? $context["articleTrouve"] : (function () { throw new RuntimeError('Variable "articleTrouve" does not exist.', 33, $this->source); })()), "getId", [], "method", false, false, false, 33)]), "html", null, true);
            echo "\" role=\"button\">Modifier</a></td>
            <td><a class=\"btn btn-secondary\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_article", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["articleTrouve"]) || array_key_exists("articleTrouve", $context) ? $context["articleTrouve"] : (function () { throw new RuntimeError('Variable "articleTrouve" does not exist.', 34, $this->source); })()), "getId", [], "method", false, false, false, 34)]), "html", null, true);
            echo "\" role=\"button\">Afficher</a></td>
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adherentTrouve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
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
        return "back_office/tables.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 36,  138 => 34,  134 => 33,  130 => 32,  126 => 31,  122 => 30,  118 => 29,  114 => 27,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
            <td><a class=\"btn btn-secondary\" href=\"{{ path('ed_article', {id : articleTrouve.getId()}) }}\" role=\"button\">Modifier</a></td>
            <td><a class=\"btn btn-secondary\" href=\"{{ path('view_article', {id : articleTrouve.getId()}) }}\" role=\"button\">Afficher</a></td>
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

      ", "back_office/tables.html.twig", "C:\\xampp\\htdocs\\moto_club\\templates\\back_office\\tables.html.twig");
    }
}
