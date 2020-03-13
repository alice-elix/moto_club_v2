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

/* users/forgotpassword.html.twig */
class __TwigTemplate_7d2f03ea372dfbe57bb51c8ce9cfe07b2e748702984e384ef1d1b36e45ab3402 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/forgotpassword.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/forgotpassword.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "users/forgotpassword.html.twig", 1);
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

        echo "MDP oublié";
        
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
        echo "  <section class=\"py-2 mb-5\">
    <div class=\"container\">
      <div class=\"card card-register mx-auto mt-5\">
        <div class=\"card-header\">Mot de passe perdu</div>
        <div class=\"card-body\">
          <form method=\"post\">
            <div class=\"form-group\">
              <div class=\"form-row\">
                  <div class=\"form-group\">
                    <label for=\"email\">Adresse email</label>
                    <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" value=\"";
        // line 16
        (((twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "email", [], "any", true, true, false, 16) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "email", [], "any", false, false, false, 16)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "email", [], "any", false, false, false, 16), "html", null, true))) : (print ("")));
        echo "\" required autofocus>
                  </div>
              </div>
            </div>
            ";
        // line 20
        if ( !twig_test_empty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 20, $this->source); })()))) {
            // line 21
            echo "                <div class=\"alert alert-warning\">
                    ";
            // line 22
            echo twig_join_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 22, $this->source); })()), "<br>");
            echo " 
                </div>
            ";
        } elseif ((        // line 24
(isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 24, $this->source); })()) == true)) {
            // line 25
            echo "                <div class=\"alert alert-success\">
                    Un email vient de vous être envoyé.
                </div>
            ";
        }
        // line 29
        echo "            <div class=\"form-group\">
                <input type=\"submit\" class=\"btn btn-primary btn-block\" value=\"Envoyer\">
            </div>
          </form>
          <div class=\"text-center\">
            <a class=\"d-block small mt-3\" href=\"inscription\">S'inscrire</a>
            <a class=\"d-block small mt-3\" href=\"login\">Se connecter</a>
          </div>
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
        return "users/forgotpassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 29,  119 => 25,  117 => 24,  112 => 22,  109 => 21,  107 => 20,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} 

{% block title %}MDP oublié{% endblock %}

{% block content %}
  <section class=\"py-2 mb-5\">
    <div class=\"container\">
      <div class=\"card card-register mx-auto mt-5\">
        <div class=\"card-header\">Mot de passe perdu</div>
        <div class=\"card-body\">
          <form method=\"post\">
            <div class=\"form-group\">
              <div class=\"form-row\">
                  <div class=\"form-group\">
                    <label for=\"email\">Adresse email</label>
                    <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" value=\"{{donnees_saisies.email ?? ''}}\" required autofocus>
                  </div>
              </div>
            </div>
            {% if errors is not empty %}
                <div class=\"alert alert-warning\">
                    {{ errors|join('<br>')|raw }} 
                </div>
            {% elseif success == true %}
                <div class=\"alert alert-success\">
                    Un email vient de vous être envoyé.
                </div>
            {% endif %}
            <div class=\"form-group\">
                <input type=\"submit\" class=\"btn btn-primary btn-block\" value=\"Envoyer\">
            </div>
          </form>
          <div class=\"text-center\">
            <a class=\"d-block small mt-3\" href=\"inscription\">S'inscrire</a>
            <a class=\"d-block small mt-3\" href=\"login\">Se connecter</a>
          </div>
        </div>
      </div>
    </div>
  </section>
{% endblock %}", "users/forgotpassword.html.twig", "C:\\xampp\\htdocs\\moto_club_v2\\moto_club_v2\\templates\\users\\forgotpassword.html.twig");
    }
}
