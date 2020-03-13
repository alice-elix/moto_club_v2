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

/* back_office/index.html.twig */
class __TwigTemplate_e8079a8c406ae75c9a9cfed92fe74abed000ed4089cfbea2de8da7d410c08755 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_office/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back_office/index.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "back_office/index.html.twig", 1);
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

        echo "Espace Perso";
        
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
        echo "  <ol class=\"breadcrumb\">
      <li class=\"breadcrumb-item\">
          En cliquant sur les onglets de la barre de navigation latérale gauche, vous pouvez gérer : 
      </li>
  </ol>
  <!-- Icon Cards-->
  <div class=\"row\">
    <div class=\"col-xl-3 col-sm-6 mb-3\">
      <div class=\"card text-white bg-danger o-hidden h-100 clearfix small z-1\">
        <div class=\"card-body\">
          <div class=\"card-body-icon\">
            <i class=\"fas fa-fw fa-user-edit\"></i>
          </div>
          <div class=\"mr-5 small-title\">Votre profil</div>
          <p>\"Mon profil\" : vous accederez à la page contenant vos informations personnelles, votre avatar etc.</p>
        </div>
        
      </div>
    </div>

    ";
        // line 26
        if (twig_in_filter("adherent", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "session", [], "any", false, false, false, 26), "get", [0 => "ranks"], "method", false, false, false, 26))) {
            // line 27
            echo "
      <div class=\"col-xl-3 col-sm-6 mb-3\">
        <div class=\"card text-white bg-success o-hidden h-100 clearfix small z-1\">
          <div class=\"card-body\">
            <div class=\"card-body-icon\">
              <i class=\"fas fa-fw fa-road\"></i>
            </div>
            <div class=\"mr-5 small-title\">Les balades</div>
            <p>\"Balades\" : vous pourrez proposer une balade, gérer les balades existantes, mais aussi gérer les photos publiées.
            </p>
          </div>
        </div>
      </div>
     ";
        }
        // line 40
        echo " 

    ";
        // line 42
        if (twig_in_filter("bureau", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "session", [], "any", false, false, false, 42), "get", [0 => "ranks"], "method", false, false, false, 42))) {
            // line 43
            echo "      <div class=\"col-xl-3 col-sm-6 mb-3\">
        <div class=\"card text-white bg-primary o-hidden h-100 clearfix small z-1\">
          <div class=\"card-body\">
            <div class=\"card-body-icon\">
              <i class=\"fas fa-fw fa-copy\"></i>
            </div>
            <div class=\"mr-5 small-title\">Les réunions et les comptes rendus</div>
              <p>\"Réunions\" : vous verrez un menu déroulant vous proposant d'ajouter une réunion ou d'accéder à la liste des réunions.</p>
          </div>
        </div>
      </div>


      <div class=\"col-xl-3 col-sm-6 mb-3\">
        <div class=\"card text-white bg-secondary o-hidden h-100 clearfix small z-1\">
          <div class=\"card-body\">
            <div class=\"card-body-icon\">
              <i class=\"fas fa-fw fa-users-cog\"></i>
            </div>
            <div class=\"mr-5 small-title\">La liste des membres</div>
              <p>\"Utilisateurs\", vous accéderez à la liste de tous les membres inscrits.</p>
          </div>
        </div>
      </div>

    ";
        }
        // line 69
        echo "
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back_office/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 69,  134 => 43,  132 => 42,  128 => 40,  112 => 27,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block title %}Espace Perso{% endblock %}

{% block content %}
  <ol class=\"breadcrumb\">
      <li class=\"breadcrumb-item\">
          En cliquant sur les onglets de la barre de navigation latérale gauche, vous pouvez gérer : 
      </li>
  </ol>
  <!-- Icon Cards-->
  <div class=\"row\">
    <div class=\"col-xl-3 col-sm-6 mb-3\">
      <div class=\"card text-white bg-danger o-hidden h-100 clearfix small z-1\">
        <div class=\"card-body\">
          <div class=\"card-body-icon\">
            <i class=\"fas fa-fw fa-user-edit\"></i>
          </div>
          <div class=\"mr-5 small-title\">Votre profil</div>
          <p>\"Mon profil\" : vous accederez à la page contenant vos informations personnelles, votre avatar etc.</p>
        </div>
        
      </div>
    </div>

    {% if 'adherent' in app.session.get('ranks') %}

      <div class=\"col-xl-3 col-sm-6 mb-3\">
        <div class=\"card text-white bg-success o-hidden h-100 clearfix small z-1\">
          <div class=\"card-body\">
            <div class=\"card-body-icon\">
              <i class=\"fas fa-fw fa-road\"></i>
            </div>
            <div class=\"mr-5 small-title\">Les balades</div>
            <p>\"Balades\" : vous pourrez proposer une balade, gérer les balades existantes, mais aussi gérer les photos publiées.
            </p>
          </div>
        </div>
      </div>
     {% endif %} 

    {% if 'bureau' in app.session.get('ranks') %}
      <div class=\"col-xl-3 col-sm-6 mb-3\">
        <div class=\"card text-white bg-primary o-hidden h-100 clearfix small z-1\">
          <div class=\"card-body\">
            <div class=\"card-body-icon\">
              <i class=\"fas fa-fw fa-copy\"></i>
            </div>
            <div class=\"mr-5 small-title\">Les réunions et les comptes rendus</div>
              <p>\"Réunions\" : vous verrez un menu déroulant vous proposant d'ajouter une réunion ou d'accéder à la liste des réunions.</p>
          </div>
        </div>
      </div>


      <div class=\"col-xl-3 col-sm-6 mb-3\">
        <div class=\"card text-white bg-secondary o-hidden h-100 clearfix small z-1\">
          <div class=\"card-body\">
            <div class=\"card-body-icon\">
              <i class=\"fas fa-fw fa-users-cog\"></i>
            </div>
            <div class=\"mr-5 small-title\">La liste des membres</div>
              <p>\"Utilisateurs\", vous accéderez à la liste de tous les membres inscrits.</p>
          </div>
        </div>
      </div>

    {% endif %}

  </div>
{% endblock %}
", "back_office/index.html.twig", "C:\\xampp\\htdocs\\moto_club_v2\\moto_club_v2\\templates\\back_office\\index.html.twig");
    }
}
