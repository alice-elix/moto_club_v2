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
        echo "  <!-- Icon Cards-->
  <div class=\"row\">
    ";
        // line 8
        if (twig_in_filter("membre", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "session", [], "any", false, false, false, 8), "get", [0 => "ranks"], "method", false, false, false, 8))) {
            // line 9
            echo "      <div class=\"col-xl-3 col-sm-6 mb-3\">
        <div class=\"card text-white bg-danger o-hidden h-100 clearfix small z-1\">
          <a class=\"nav-link text-white text-decoration-none pl-0\" href=\"";
            // line 11
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_profile");
            echo "\">
            <div class=\"card-body h-100\">
              <div class=\"card-body-icon\">
                <i class=\"fas fa-fw fa-user-edit\"></i>
              </div>
              <div class=\"mr-5 small-title\">Mon profil</div>
              <p>Pour acceder à la page contenant vos informations personnelles, votre avatar etc.</p>
            </div>
          </a>
          
        </div>
      </div>
      ";
        }
        // line 23
        echo "                  

    ";
        // line 25
        if (twig_in_filter("adherent", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "session", [], "any", false, false, false, 25), "get", [0 => "ranks"], "method", false, false, false, 25))) {
            // line 26
            echo "      <div class=\"col-xl-3 col-sm-6 mb-3\">
        <div class=\"card text-white bg-success o-hidden h-100 clearfix small z-1\">
          <div class=\"card-body h-100\">
            <div class=\"card-body-icon\">
              <i class=\"fas fa-fw fa-road\"></i>
            </div>
            <a class=\"nav-link dropdown-toggle text-white text-decoration-none pb-0 pl-0\" href=\"#\" id=\"pages1Dropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <div class=\"mr-5 small-title\">Balades</div>
                <p class=\"mb-0\">Pour accèder... aux balades !</p>
            </a>
            <div class=\"dropdown-menu bg-transparent py-0\" aria-labelledby=\"pages1Dropdown\">
                ";
            // line 37
            if (twig_in_filter("bureau", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "session", [], "any", false, false, false, 37), "get", [0 => "ranks"], "method", false, false, false, 37))) {
                // line 38
                echo "                <a class=\"dropdown-item text-white link-back-perso\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_balade");
                echo "\">Ajouter</a>
                <a class=\"dropdown-item text-white link-back-perso\" href=\"";
                // line 39
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_balades");
                echo "\">Gérer</a>
                ";
            } else {
                // line 41
                echo "                <a class=\"dropdown-item text-white link-back-perso\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_balade");
                echo "\">Proposer</a>
                ";
            }
            // line 43
            echo "            </div>
          </div>
        </div>
      </div>
    ";
        }
        // line 47
        echo " 

    ";
        // line 49
        if (twig_in_filter("bureau", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "session", [], "any", false, false, false, 49), "get", [0 => "ranks"], "method", false, false, false, 49))) {
            // line 50
            echo "      <div class=\"col-xl-3 col-sm-6 mb-3\">
        <div class=\"card text-white bg-primary o-hidden h-100 clearfix small z-1\">
          <div class=\"card-body h-100\">
            <div class=\"card-body-icon\">
              <i class=\"fas fa-fw fa-copy\"></i>
            </div>
            <a class=\"nav-link dropdown-toggle text-white text-decoration-none pb-0 pl-0\" href=\"#\" id=\"pages2Dropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              <div class=\"mr-5 small-title\">Réunions</div>
                <p class=\"mb-0\">Pour accéder ... aux réunions !</p>
            </a>
            <div class=\"dropdown-menu bg-transparent py-0\" aria-labelledby=\"pages2Dropdown\">
              <a class=\"dropdown-item text-white link-back-perso\" href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_reunion");
            echo "\">Ajouter</a>
              <a class=\"dropdown-item text-white link-back-perso\" href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_back_reunions");
            echo "\">Gérer</a>
            </div>

          </div>
        </div>
      </div>
      <div class=\"col-xl-3 col-sm-6 mb-3\">
        <div class=\"card text-white bg-secondary o-hidden h-100 clearfix small z-1\">
          <a class=\"nav-link text-white text-decoration-none pl-0 h-100\" href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_users");
            echo "\">
            <div class=\"card-body h-100\">
              <div class=\"card-body-icon\">
                <i class=\"fas fa-fw fa-users-cog\"></i>
              </div>
              <div class=\"mr-5 small-title\">Utilisateurs</div>
                <p>Pour accéder à la liste de tous les membres inscrits.</p>
            </div>
          </a>
        </div>
      </div>
    ";
        }
        // line 82
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
        return array (  207 => 82,  192 => 70,  181 => 62,  177 => 61,  164 => 50,  162 => 49,  158 => 47,  151 => 43,  145 => 41,  140 => 39,  135 => 38,  133 => 37,  120 => 26,  118 => 25,  114 => 23,  98 => 11,  94 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block title %}Espace Perso{% endblock %}

{% block content %}
  <!-- Icon Cards-->
  <div class=\"row\">
    {% if 'membre' in app.session.get('ranks') %}
      <div class=\"col-xl-3 col-sm-6 mb-3\">
        <div class=\"card text-white bg-danger o-hidden h-100 clearfix small z-1\">
          <a class=\"nav-link text-white text-decoration-none pl-0\" href=\"{{path('view_profile')}}\">
            <div class=\"card-body h-100\">
              <div class=\"card-body-icon\">
                <i class=\"fas fa-fw fa-user-edit\"></i>
              </div>
              <div class=\"mr-5 small-title\">Mon profil</div>
              <p>Pour acceder à la page contenant vos informations personnelles, votre avatar etc.</p>
            </div>
          </a>
          
        </div>
      </div>
      {% endif %}                  

    {% if 'adherent' in app.session.get('ranks') %}
      <div class=\"col-xl-3 col-sm-6 mb-3\">
        <div class=\"card text-white bg-success o-hidden h-100 clearfix small z-1\">
          <div class=\"card-body h-100\">
            <div class=\"card-body-icon\">
              <i class=\"fas fa-fw fa-road\"></i>
            </div>
            <a class=\"nav-link dropdown-toggle text-white text-decoration-none pb-0 pl-0\" href=\"#\" id=\"pages1Dropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <div class=\"mr-5 small-title\">Balades</div>
                <p class=\"mb-0\">Pour accèder... aux balades !</p>
            </a>
            <div class=\"dropdown-menu bg-transparent py-0\" aria-labelledby=\"pages1Dropdown\">
                {% if 'bureau' in app.session.get('ranks') %}
                <a class=\"dropdown-item text-white link-back-perso\" href=\"{{path('add_balade')}}\">Ajouter</a>
                <a class=\"dropdown-item text-white link-back-perso\" href=\"{{path('gestion_balades')}}\">Gérer</a>
                {% else %}
                <a class=\"dropdown-item text-white link-back-perso\" href=\"{{path('add_balade')}}\">Proposer</a>
                {% endif %}
            </div>
          </div>
        </div>
      </div>
    {% endif %} 

    {% if 'bureau' in app.session.get('ranks') %}
      <div class=\"col-xl-3 col-sm-6 mb-3\">
        <div class=\"card text-white bg-primary o-hidden h-100 clearfix small z-1\">
          <div class=\"card-body h-100\">
            <div class=\"card-body-icon\">
              <i class=\"fas fa-fw fa-copy\"></i>
            </div>
            <a class=\"nav-link dropdown-toggle text-white text-decoration-none pb-0 pl-0\" href=\"#\" id=\"pages2Dropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              <div class=\"mr-5 small-title\">Réunions</div>
                <p class=\"mb-0\">Pour accéder ... aux réunions !</p>
            </a>
            <div class=\"dropdown-menu bg-transparent py-0\" aria-labelledby=\"pages2Dropdown\">
              <a class=\"dropdown-item text-white link-back-perso\" href=\"{{path('add_reunion')}}\">Ajouter</a>
              <a class=\"dropdown-item text-white link-back-perso\" href=\"{{path('index_back_reunions')}}\">Gérer</a>
            </div>

          </div>
        </div>
      </div>
      <div class=\"col-xl-3 col-sm-6 mb-3\">
        <div class=\"card text-white bg-secondary o-hidden h-100 clearfix small z-1\">
          <a class=\"nav-link text-white text-decoration-none pl-0 h-100\" href=\"{{path('liste_users')}}\">
            <div class=\"card-body h-100\">
              <div class=\"card-body-icon\">
                <i class=\"fas fa-fw fa-users-cog\"></i>
              </div>
              <div class=\"mr-5 small-title\">Utilisateurs</div>
                <p>Pour accéder à la liste de tous les membres inscrits.</p>
            </div>
          </a>
        </div>
      </div>
    {% endif %}

  </div>
{% endblock %}
", "back_office/index.html.twig", "C:\\xampp\\htdocs\\moto_club_v2\\moto_club_v2\\templates\\back_office\\index.html.twig");
    }
}
