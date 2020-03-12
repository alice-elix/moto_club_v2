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

/* reunions/addCr.html.twig */
class __TwigTemplate_6fcb3f73c773a6cb2d92af9b5afd708d80bf49421e8e40f623e4ca857c5559c7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reunions/addCr.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reunions/addCr.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "reunions/addCr.html.twig", 1);
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

        echo "Compte-rendu";
        
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
  <div class=\"card card-register mx-auto mt-5\">
    <div class=\"card-header\">Ajouter un compte-rendu pour ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 10, $this->source); })()), "getTitre", [], "method", false, false, false, 10), "html", null, true);
        echo "</div>
    ";
        // line 11
        if ( !twig_test_empty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 11, $this->source); })()))) {
            // line 12
            echo "      <div class=\"alert alert-danger\">";
            echo (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 12, $this->source); })());
            echo "</div>
    ";
        } elseif ((        // line 13
(isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 13, $this->source); })()) == true)) {
            // line 14
            echo "      <div class=\"alert alert-success\">Votre CR a bien été ajouté</div>
    ";
        }
        // line 16
        echo "    <div class=\"card-body\">Réunion du ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 16, $this->source); })()), "getDatetimeReu", [], "method", false, false, false, 16), "Y-m-d"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 16, $this->source); })()), "getDatetimeReu", [], "method", false, false, false, 16), "H:i"), "html", null, true);
        echo "</div>
    <div class=\"card-body\">
      <form method=\"post\">
        <div class=\"form-group\">
          <div class=\"form-row\">
            <div class=\"col-md-6\">
              <label for=\"titre\">Nom du compte rendu</label>
              <input type=\"text\" id=\"titre\" name=\"titre\" class=\"form-control\" required=\"required\" autofocus=\"autofocus\" value=\"";
        // line 23
        (((twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "titre", [], "any", true, true, false, 23) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "titre", [], "any", false, false, false, 23)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "titre", [], "any", false, false, false, 23), "html", null, true))) : (print ("")));
        echo "\">
            </div>
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"contenu\">Contenu</label>
          <textarea id=\"contenu\" name=\"contenu\" class=\"form-control\" required=\"required\" >";
        // line 29
        (((twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "contenu", [], "any", true, true, false, 29) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "contenu", [], "any", false, false, false, 29)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["donnees_saisies"] ?? null), "contenu", [], "any", false, false, false, 29), "html", null, true))) : (print ("")));
        echo "</textarea>
        </div>
        <div class=\"card-body\">
        ";
        // line 32
        if (((isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 32, $this->source); })()) == true)) {
            // line 33
            echo "          <a class=\"btn btn-primary btn-block\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_cr", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 33, $this->source); })()), "getId", [], "method", false, false, false, 33)]), "html", null, true);
            echo "\" role=\"button\">Modifier ce compte rendu </a>
        ";
        } else {
            // line 35
            echo "          <input type=\"submit\" value=\"Ajouter\" class=\"btn btn-primary btn-block\">
        ";
        }
        // line 37
        echo "        </div>
      </form>
    </div>
  </div>
</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reunions/addCr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 37,  147 => 35,  141 => 33,  139 => 32,  133 => 29,  124 => 23,  111 => 16,  107 => 14,  105 => 13,  100 => 12,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block title %}Compte-rendu{% endblock %}

{% block content %}


<section class=\"py-2 mb-5\">
  <div class=\"card card-register mx-auto mt-5\">
    <div class=\"card-header\">Ajouter un compte-rendu pour {{ reunionTrouvee.getTitre() }}</div>
    {% if errors is not empty %}
      <div class=\"alert alert-danger\">{{errors|raw}}</div>
    {% elseif success == true %}
      <div class=\"alert alert-success\">Votre CR a bien été ajouté</div>
    {% endif %}
    <div class=\"card-body\">Réunion du {{ reunionTrouvee.getDatetimeReu()|date(\"Y-m-d\") }} à {{ reunionTrouvee.getDatetimeReu()|date(\"H:i\") }}</div>
    <div class=\"card-body\">
      <form method=\"post\">
        <div class=\"form-group\">
          <div class=\"form-row\">
            <div class=\"col-md-6\">
              <label for=\"titre\">Nom du compte rendu</label>
              <input type=\"text\" id=\"titre\" name=\"titre\" class=\"form-control\" required=\"required\" autofocus=\"autofocus\" value=\"{{ donnees_saisies.titre ?? '' }}\">
            </div>
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"contenu\">Contenu</label>
          <textarea id=\"contenu\" name=\"contenu\" class=\"form-control\" required=\"required\" >{{ donnees_saisies.contenu ?? '' }}</textarea>
        </div>
        <div class=\"card-body\">
        {% if success == true %}
          <a class=\"btn btn-primary btn-block\" href=\"{{ path('edit_cr', {id : reunionTrouvee.getId()}) }}\" role=\"button\">Modifier ce compte rendu </a>
        {% else %}
          <input type=\"submit\" value=\"Ajouter\" class=\"btn btn-primary btn-block\">
        {% endif %}
        </div>
      </form>
    </div>
  </div>
</section>

{% endblock %}
", "reunions/addCr.html.twig", "C:\\xampp\\htdocs\\moto_club\\templates\\reunions\\addCr.html.twig");
    }
}
