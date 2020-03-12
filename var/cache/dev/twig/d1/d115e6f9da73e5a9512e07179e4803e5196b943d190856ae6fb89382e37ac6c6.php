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

/* users/inscription.html.twig */
class __TwigTemplate_2040bef4de8999d1195c41eac8875ec92b15fd33397e32926e33278825f4b6a7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/inscription.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/inscription.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "users/inscription.html.twig", 1);
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

        echo "S'enregistrer";
        
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
    <div class=\"card card-register mx-auto mt-5 pb-5 mb-5\">
      <div class=\"card-header\">S'inscrire</div>
      <div class=\"card-body\">
        <form method=\"post\">
          <div class=\"form-group\">
            <div class=\"form-group\">
              <label for=\"email\">Adresse email</label>
              <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" value=\"";
        // line 14
        (((twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "email", [], "any", true, true, false, 14) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "email", [], "any", false, false, false, 14)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "email", [], "any", false, false, false, 14), "html", null, true))) : (print ("")));
        echo "\" required autofocus>
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"form-row\">
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <label for=\"password\">Mot de passe</label>
                  <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" required>
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <label for=\"confirmpassword\">Confirmer le mot de passe</label>
                  <input type=\"password\" id=\"confirmpassword\" name=\"confirmpassword\" class=\"form-control\" required>
                </div>
              </div>
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"form-row\">
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <label for=\"lastName\">Nom</label>
                  <input type=\"text\" id=\"lastName\" name=\"lastname\" class=\"form-control\" value=\"";
        // line 38
        (((twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "lastname", [], "any", true, true, false, 38) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "lastname", [], "any", false, false, false, 38)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "lastname", [], "any", false, false, false, 38), "html", null, true))) : (print ("")));
        echo "\" required>
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <label for=\"firstName\">Prénom</label>
                  <input type=\"text\" id=\"firstName\" name=\"firstname\" class=\"form-control\" value=\"";
        // line 44
        (((twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "firstname", [], "any", true, true, false, 44) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "firstname", [], "any", false, false, false, 44)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "firstname", [], "any", false, false, false, 44), "html", null, true))) : (print ("")));
        echo "\" required>
                </div>
              </div>
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"form-row\">
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <label for=\"birthday\">Date de Naissance</label>
                  <input type=\"date\" id=\"birthday\" name=\"birthday\" class=\"form-control\" value=\"";
        // line 54
        (((twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "birthday", [], "any", true, true, false, 54) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "birthday", [], "any", false, false, false, 54)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "birthday", [], "any", false, false, false, 54), "html", null, true))) : (print ("")));
        echo "\" required>
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <label for=\"phone\">Numéro de Téléphone</label>
                  <input type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\" value=\"";
        // line 60
        (((twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "phone", [], "any", true, true, false, 60) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "phone", [], "any", false, false, false, 60)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "phone", [], "any", false, false, false, 60), "html", null, true))) : (print ("")));
        echo "\" maxlength=\"10\" required>
                </div>
              </div>
            </div>
          </div>
          <div class=\"form-group\">
              <label for=\"address\">Adresse</label>
              <input type=\"text\" id=\"address\" name=\"address\" class=\"form-control\" value=\"";
        // line 67
        (((twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "address", [], "any", true, true, false, 67) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "address", [], "any", false, false, false, 67)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "address", [], "any", false, false, false, 67), "html", null, true))) : (print ("")));
        echo "\" required>
          </div>
          <div class=\"form-group\">
            <div class=\"form-row\">
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <label for=\"postal_code\">Code Postal</label>
                  <input type=\"text\" id=\"postal_code\" name=\"postal_code\" class=\"form-control\" value=\"";
        // line 74
        (((twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "postal_code", [], "any", true, true, false, 74) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "postal_code", [], "any", false, false, false, 74)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "postal_code", [], "any", false, false, false, 74), "html", null, true))) : (print ("")));
        echo "\" required>
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <label for=\"city\">Ville</label>
                  <input type=\"text\" id=\"city\" name=\"city\" class=\"form-control\" value=\"";
        // line 80
        (((twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "city", [], "any", true, true, false, 80) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "city", [], "any", false, false, false, 80)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "city", [], "any", false, false, false, 80), "html", null, true))) : (print ("")));
        echo "\" required>
                </div>
              </div>
            </div>
          </div>
          ";
        // line 85
        if ( !twig_test_empty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 85, $this->source); })()))) {
            // line 86
            echo "              <div class=\"alert alert-warning\">
                  ";
            // line 87
            echo twig_join_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 87, $this->source); })()), "<br>");
            echo " 
              </div>
          ";
        } elseif ((        // line 89
(isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 89, $this->source); })()) == true)) {
            // line 90
            echo "              <div class=\"alert alert-success\">
                  Bienvenue <strong>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["donnees_saisies"]) || array_key_exists("donnees_saisies", $context) ? $context["donnees_saisies"] : (function () { throw new RuntimeError('Variable "donnees_saisies" does not exist.', 91, $this->source); })()), "firstname", [], "any", false, false, false, 91), "html", null, true);
            echo "</strong>, vous êtes inscrit(e) !
                  Vous allez être redirigé(e) dans quelques secondes.
              </div>
          ";
        }
        // line 95
        echo "          <div class=\"form-group\">
              <input type=\"submit\" class=\"btn btn-primary btn-block\" value=\"S'inscrire\">
          </div>
        </form>
        <div class=\"text-center\">
          <a class=\"d-block small mt-3\" href=\"login\">Se connecter</a>
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
        return "users/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 95,  208 => 91,  205 => 90,  203 => 89,  198 => 87,  195 => 86,  193 => 85,  185 => 80,  176 => 74,  166 => 67,  156 => 60,  147 => 54,  134 => 44,  125 => 38,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} 

{% block title %}S'enregistrer{% endblock %}

{% block content %}
  <section class=\"py-2 mb-5\">
    <div class=\"card card-register mx-auto mt-5 pb-5 mb-5\">
      <div class=\"card-header\">S'inscrire</div>
      <div class=\"card-body\">
        <form method=\"post\">
          <div class=\"form-group\">
            <div class=\"form-group\">
              <label for=\"email\">Adresse email</label>
              <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" value=\"{{donnees_saisies.email ?? ''}}\" required autofocus>
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"form-row\">
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <label for=\"password\">Mot de passe</label>
                  <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" required>
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <label for=\"confirmpassword\">Confirmer le mot de passe</label>
                  <input type=\"password\" id=\"confirmpassword\" name=\"confirmpassword\" class=\"form-control\" required>
                </div>
              </div>
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"form-row\">
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <label for=\"lastName\">Nom</label>
                  <input type=\"text\" id=\"lastName\" name=\"lastname\" class=\"form-control\" value=\"{{donnees_saisies.lastname ?? ''}}\" required>
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <label for=\"firstName\">Prénom</label>
                  <input type=\"text\" id=\"firstName\" name=\"firstname\" class=\"form-control\" value=\"{{donnees_saisies.firstname ?? ''}}\" required>
                </div>
              </div>
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"form-row\">
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <label for=\"birthday\">Date de Naissance</label>
                  <input type=\"date\" id=\"birthday\" name=\"birthday\" class=\"form-control\" value=\"{{donnees_saisies.birthday ?? ''}}\" required>
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <label for=\"phone\">Numéro de Téléphone</label>
                  <input type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\" value=\"{{donnees_saisies.phone ?? ''}}\" maxlength=\"10\" required>
                </div>
              </div>
            </div>
          </div>
          <div class=\"form-group\">
              <label for=\"address\">Adresse</label>
              <input type=\"text\" id=\"address\" name=\"address\" class=\"form-control\" value=\"{{donnees_saisies.address ?? ''}}\" required>
          </div>
          <div class=\"form-group\">
            <div class=\"form-row\">
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <label for=\"postal_code\">Code Postal</label>
                  <input type=\"text\" id=\"postal_code\" name=\"postal_code\" class=\"form-control\" value=\"{{donnees_saisies.postal_code ?? ''}}\" required>
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <label for=\"city\">Ville</label>
                  <input type=\"text\" id=\"city\" name=\"city\" class=\"form-control\" value=\"{{donnees_saisies.city ?? ''}}\" required>
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
                  Bienvenue <strong>{{donnees_saisies.firstname}}</strong>, vous êtes inscrit(e) !
                  Vous allez être redirigé(e) dans quelques secondes.
              </div>
          {% endif %}
          <div class=\"form-group\">
              <input type=\"submit\" class=\"btn btn-primary btn-block\" value=\"S'inscrire\">
          </div>
        </form>
        <div class=\"text-center\">
          <a class=\"d-block small mt-3\" href=\"login\">Se connecter</a>
          <a class=\"d-block small\" href=\"forgot-password\">Mot de passe oublié ?</a>
        </div>
      </div>
    </div>
  </section>
{% endblock %}", "users/inscription.html.twig", "C:\\xampp\\htdocs\\moto_club\\templates\\users\\inscription.html.twig");
    }
}
