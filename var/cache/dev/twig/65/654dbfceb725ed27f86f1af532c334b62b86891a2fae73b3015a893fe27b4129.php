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

/* users/login.html.twig */
class __TwigTemplate_b80409b482227b6e0c1849ac1282a511db051542676d0816c16e6bafcdf677d4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "users/login.html.twig", 1);
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

        echo "Se connecter";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "  <section class=\"py-2 mb-5\">
    <div class=\"card card-register mx-auto mt-5\">
      <div class=\"card-header\">Se connecter</div>
      <div class=\"card-body\">
        <form method=\"post\">
          <div class=\"form-group\">
            <div class=\"form-row\">
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <label for=\"email\">Adresse email</label>
                  <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" value=\"";
        // line 17
        (((twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "email", [], "any", true, true, false, 17) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "email", [], "any", false, false, false, 17)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "email", [], "any", false, false, false, 17), "html", null, true))) : (print ("")));
        echo "\" required autofocus>
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <label for=\"password\">Mot de passe</label>
                  <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" required>
                </div>
              </div>
            </div>
          </div>
          ";
        // line 28
        if ( !twig_test_empty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 28, $this->source); })()))) {
            // line 29
            echo "              <div class=\"alert alert-warning\">
                  ";
            // line 30
            echo twig_join_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 30, $this->source); })()), "<br>");
            echo " 
              </div>
          ";
        } elseif ((        // line 32
(isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 32, $this->source); })()) == true)) {
            // line 33
            echo "              <div class=\"alert alert-success\">
                  Bienvenue <strong>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "getPrenom", [], "any", false, false, false, 34), "html", null, true);
            echo "</strong>, vous allez être redirigé(e) dans quelques secondes.
              </div>
          ";
        }
        // line 37
        echo "          <div class=\"form-group\">
              <input type=\"submit\" class=\"btn btn-primary btn-block\" value=\"Se connecter\">
          </div>
        </form>
        <div class=\"text-center\">
          <a class=\"d-block small mt-3\" href=\"inscription\">S'inscrire</a>
          <a class=\"d-block small\" href=\"forgot-password\">Mot de passe oublié ?</a>
        </div>
      </div>
    </div>
  </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "users/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 37,  129 => 34,  126 => 33,  124 => 32,  119 => 30,  116 => 29,  114 => 28,  100 => 17,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} 

{% block title %}Se connecter{% endblock %}


{% block content %}
  <section class=\"py-2 mb-5\">
    <div class=\"card card-register mx-auto mt-5\">
      <div class=\"card-header\">Se connecter</div>
      <div class=\"card-body\">
        <form method=\"post\">
          <div class=\"form-group\">
            <div class=\"form-row\">
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <label for=\"email\">Adresse email</label>
                  <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" value=\"{{donnees_saisies.email ?? ''}}\" required autofocus>
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <label for=\"password\">Mot de passe</label>
                  <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" required>
                </div>
              </div>
            </div>
          </div>
          {% if errors is not empty %}
              <div class=\"alert alert-warning\">
                  {{ errors|join('<br>')|raw }} 
              </div>
          {% elseif success == true %}
              <div class=\"alert alert-success\">
                  Bienvenue <strong>{{user.getPrenom}}</strong>, vous allez être redirigé(e) dans quelques secondes.
              </div>
          {% endif %}
          <div class=\"form-group\">
              <input type=\"submit\" class=\"btn btn-primary btn-block\" value=\"Se connecter\">
          </div>
        </form>
        <div class=\"text-center\">
          <a class=\"d-block small mt-3\" href=\"inscription\">S'inscrire</a>
          <a class=\"d-block small\" href=\"forgot-password\">Mot de passe oublié ?</a>
        </div>
      </div>
    </div>
  </section>
{% endblock %}", "users/login.html.twig", "C:\\xampp\\htdocs\\moto_club_v2\\moto_club_v2\\templates\\users\\login.html.twig");
    }
}
