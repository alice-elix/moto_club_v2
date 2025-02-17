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

/* reunions/editCr.html.twig */
class __TwigTemplate_10bad51cf1d1dfd70d8b7dd148e18985ae6e0a72a0833b9f5bae677c79920581 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reunions/editCr.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reunions/editCr.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "reunions/editCr.html.twig", 1);
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

        echo "Compte-rendu - modification";
        
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

        echo " 
  <section class=\"py-2 mb-1 bg-light bg-section-back\">
    <div class=\"d-flex justify-content-start\">
      <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_back_reunions");
        echo "\" class=\"btn btn-secondary m-2\" role=\"button\">
        <i class=\"fas fa-angle-left\"></i> Retour à la liste des réunions
      </a>
    </div>
    <div class=\"card-header\">Modifier le compte-rendu pour ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 12, $this->source); })()), "getTitre", [], "method", false, false, false, 12), "html", null, true);
        echo "</div>
    
      ";
        // line 14
        if ( !twig_test_empty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 14, $this->source); })()))) {
            // line 15
            echo "        <div class=\"alert alert-danger\">";
            echo (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 15, $this->source); })());
            echo "</div>
      ";
        } elseif ((        // line 16
(isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 16, $this->source); })()) == true)) {
            // line 17
            echo "        <div class=\"alert alert-success\">Votre CR a bien été modifié</div>
      ";
        }
        // line 19
        echo "      
    <div class=\"card-body\">Réunion du ";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 20, $this->source); })()), "getDatetimeReu", [], "method", false, false, false, 20), "Y-m-d"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 20, $this->source); })()), "getDatetimeReu", [], "method", false, false, false, 20), "H:i"), "html", null, true);
        echo "
    </div>
    <div class=\"card-body\">
      <form method=\"post\">
        <div class=\"form-group\">
          <div class=\"form-row\">
            <div class=\"col-md-6\">
              <label for=\"titre\">Nom du compte rendu</label>
              <input type=\"text\" id=\"titre\" name=\"titre\" class=\"form-control\" required=\"required\" autofocus=\"autofocus\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crTrouve"]) || array_key_exists("crTrouve", $context) ? $context["crTrouve"] : (function () { throw new RuntimeError('Variable "crTrouve" does not exist.', 28, $this->source); })()), "getTitre", [], "method", false, false, false, 28), "html", null, true);
        echo "\">
            </div>
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"contenu\">Contenu</label>
          <textarea id=\"contenu\" name=\"contenu\" class=\"form-control\" required=\"required\" >";
        // line 34
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crTrouve"]) || array_key_exists("crTrouve", $context) ? $context["crTrouve"] : (function () { throw new RuntimeError('Variable "crTrouve" does not exist.', 34, $this->source); })()), "getContenu", [], "method", false, false, false, 34), "html", null, true));
        echo "</textarea>
        </div>
          <div class=\"card-body d-flex justify-content-between\">
            <input type=\"submit\" value=\"Modifier\" class=\"btn btn-success\">
            <a class=\"btn btn-primary \" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_back_reunion", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["reunionTrouvee"]) || array_key_exists("reunionTrouvee", $context) ? $context["reunionTrouvee"] : (function () { throw new RuntimeError('Variable "reunionTrouvee" does not exist.', 38, $this->source); })()), "getId", [], "method", false, false, false, 38)]), "html", null, true);
        echo "\" role=\"button\">Afficher</a>
          </div>
      </form>
    </div>
  </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reunions/editCr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 38,  142 => 34,  133 => 28,  120 => 20,  117 => 19,  113 => 17,  111 => 16,  106 => 15,  104 => 14,  99 => 12,  92 => 8,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block title %}Compte-rendu - modification{% endblock %}

{% block content %} 
  <section class=\"py-2 mb-1 bg-light bg-section-back\">
    <div class=\"d-flex justify-content-start\">
      <a href=\"{{ path('index_back_reunions') }}\" class=\"btn btn-secondary m-2\" role=\"button\">
        <i class=\"fas fa-angle-left\"></i> Retour à la liste des réunions
      </a>
    </div>
    <div class=\"card-header\">Modifier le compte-rendu pour {{ reunionTrouvee.getTitre() }}</div>
    
      {% if errors is not empty %}
        <div class=\"alert alert-danger\">{{errors|raw}}</div>
      {% elseif success == true %}
        <div class=\"alert alert-success\">Votre CR a bien été modifié</div>
      {% endif %}
      
    <div class=\"card-body\">Réunion du {{ reunionTrouvee.getDatetimeReu()|date(\"Y-m-d\") }} à {{ reunionTrouvee.getDatetimeReu()|date(\"H:i\") }}
    </div>
    <div class=\"card-body\">
      <form method=\"post\">
        <div class=\"form-group\">
          <div class=\"form-row\">
            <div class=\"col-md-6\">
              <label for=\"titre\">Nom du compte rendu</label>
              <input type=\"text\" id=\"titre\" name=\"titre\" class=\"form-control\" required=\"required\" autofocus=\"autofocus\" value=\"{{ crTrouve.getTitre() }}\">
            </div>
          </div>
        </div>
        <div class=\"form-group\">
          <label for=\"contenu\">Contenu</label>
          <textarea id=\"contenu\" name=\"contenu\" class=\"form-control\" required=\"required\" >{{ crTrouve.getContenu()|nl2br }}</textarea>
        </div>
          <div class=\"card-body d-flex justify-content-between\">
            <input type=\"submit\" value=\"Modifier\" class=\"btn btn-success\">
            <a class=\"btn btn-primary \" href=\"{{ path('view_back_reunion', {id : reunionTrouvee.getId()}) }}\" role=\"button\">Afficher</a>
          </div>
      </form>
    </div>
  </section>
{% endblock %}
", "reunions/editCr.html.twig", "C:\\xampp\\htdocs\\moto_club_v2\\moto_club_v2\\templates\\reunions\\editCr.html.twig");
    }
}
