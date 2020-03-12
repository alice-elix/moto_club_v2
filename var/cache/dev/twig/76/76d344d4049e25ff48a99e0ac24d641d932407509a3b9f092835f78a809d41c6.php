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

/* default/confidentialite.html.twig */
class __TwigTemplate_291ec3741cea7f691920cc65204d54acabfc6f536b3013a48cac12c58272da34 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/confidentialite.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/confidentialite.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/confidentialite.html.twig", 1);
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

        echo "Condientialité";
        
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
        echo "\t<section class=\"py-2 mb-5\">
\t    <div class=\"card card-register mx-auto mt-5\">
\t      \t<div class=\"card-header\"><h2 class=\"policy\">Politique de confidentialité</h2></div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<h3>Qui sommes-nous ?</h3>
\t\t\t\t\t<p>L’adresse de notre site Web est :[mettre ici l'adresse web]. Nous sommes [une amicale de motards]. Le site est hébergé par [nom de l'hébergeur], situé au [adresse de l'hébergeur]. Vous pouvez nous écrire à [adresse mail]. Le [ou la] responsable de publication  est [nom et prénom] .</p>
\t\t\t\t\t<p>Ce site n’a aucune vocation commerciales et aucune des données que vous nous transmettraient ne seront vendues.</p>
\t\t\t\t<h3>Utilisation des données personnelles collectées</h3>
\t\t\t\t<p>Après une publication, votre photo de profil sera visible publiquement en dessous de votre publication.</p>
\t\t\t\t\t<h4>Formulaires de contact</h4>
\t\t\t\t\t\t<p>Les informations que vous nous transmettez dans le formulaire de contact ne servent qu’à pouvoir vous répondre et ne seront pas vendues.</p>
\t\t\t\t\t<h4>Cookies</h4>
\t\t\t\t\t\t<p>Si vous vous rendez sur la page de connexion, un cookie temporaire sera créé afin de déterminer si votre navigateur accepte les cookies. Il ne contient pas de données personnelles et sera supprimé automatiquement à la fermeture de votre navigateur.</p>
\t\t\t\t\t\t<p>En modifiant ou en publiant une publication, un cookie supplémentaire sera enregistré dans votre navigateur. Ce cookie ne comprend aucune donnée personnelle. Il indique simplement l’ID de la publication que vous venez de modifier. Il expire au bout d’un jour.</p>
\t\t\t\t\t<h4>Contenu embarqué depuis d’autres sites</h4>
\t\t\t\t\t\t<p>Les articles de ce site peuvent inclure des contenus intégrés (par exemple des vidéos, images, articles…). Le contenu intégré depuis d’autres sites se comporte de la même manière que si le visiteur se rendait sur cet autre site.</p>
\t\t\t\t\t\t<p>Ces sites web pourraient collecter des données sur vous, utiliser des cookies, embarquer des outils de suivis tiers, suivre vos interactions avec ces contenus embarqués si vous disposez d’un compte connecté sur leur site web.</p>
\t\t\t\t\t<h4>Utilisation et transmission de vos données personnelles</h4>
\t\t\t\t\t\t<h5>Durées de stockage de vos données</h5>
\t\t\t\t\t\t\t<p>Si vous publiez sur le site, la publication et ses métadonnées sont conservées indéfiniment.</p>
\t\t\t\t\t\t<h5>Les droits que vous avez sur vos données</h5>
\t\t\t\t\t\t\t<p>Si vous publiez sur le site, vous pouvez demander à recevoir un fichier contenant toutes les données personnelles que nous possédons à votre sujet, incluant celles que vous nous avez fournies. Vous pouvez également demander la suppression des données personnelles vous concernant. Cela ne prend pas en compte les données stockées à des fins administratives, légales ou pour des raisons de sécurité.</p>

\t\t\t\t\t\t\t<p>Vous pouvez nous contacter pour toutes informations supplémentaires à l'adresse fournie dans le premier paragraphe.</p>
\t\t\t</div>
\t\t</div>
\t</section>



<a class=\"btn btn-success m-2\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\" role=\"button\">Retour au site</a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/confidentialite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 36,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Condientialité{% endblock %}

{% block content %}
\t<section class=\"py-2 mb-5\">
\t    <div class=\"card card-register mx-auto mt-5\">
\t      \t<div class=\"card-header\"><h2 class=\"policy\">Politique de confidentialité</h2></div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<h3>Qui sommes-nous ?</h3>
\t\t\t\t\t<p>L’adresse de notre site Web est :[mettre ici l'adresse web]. Nous sommes [une amicale de motards]. Le site est hébergé par [nom de l'hébergeur], situé au [adresse de l'hébergeur]. Vous pouvez nous écrire à [adresse mail]. Le [ou la] responsable de publication  est [nom et prénom] .</p>
\t\t\t\t\t<p>Ce site n’a aucune vocation commerciales et aucune des données que vous nous transmettraient ne seront vendues.</p>
\t\t\t\t<h3>Utilisation des données personnelles collectées</h3>
\t\t\t\t<p>Après une publication, votre photo de profil sera visible publiquement en dessous de votre publication.</p>
\t\t\t\t\t<h4>Formulaires de contact</h4>
\t\t\t\t\t\t<p>Les informations que vous nous transmettez dans le formulaire de contact ne servent qu’à pouvoir vous répondre et ne seront pas vendues.</p>
\t\t\t\t\t<h4>Cookies</h4>
\t\t\t\t\t\t<p>Si vous vous rendez sur la page de connexion, un cookie temporaire sera créé afin de déterminer si votre navigateur accepte les cookies. Il ne contient pas de données personnelles et sera supprimé automatiquement à la fermeture de votre navigateur.</p>
\t\t\t\t\t\t<p>En modifiant ou en publiant une publication, un cookie supplémentaire sera enregistré dans votre navigateur. Ce cookie ne comprend aucune donnée personnelle. Il indique simplement l’ID de la publication que vous venez de modifier. Il expire au bout d’un jour.</p>
\t\t\t\t\t<h4>Contenu embarqué depuis d’autres sites</h4>
\t\t\t\t\t\t<p>Les articles de ce site peuvent inclure des contenus intégrés (par exemple des vidéos, images, articles…). Le contenu intégré depuis d’autres sites se comporte de la même manière que si le visiteur se rendait sur cet autre site.</p>
\t\t\t\t\t\t<p>Ces sites web pourraient collecter des données sur vous, utiliser des cookies, embarquer des outils de suivis tiers, suivre vos interactions avec ces contenus embarqués si vous disposez d’un compte connecté sur leur site web.</p>
\t\t\t\t\t<h4>Utilisation et transmission de vos données personnelles</h4>
\t\t\t\t\t\t<h5>Durées de stockage de vos données</h5>
\t\t\t\t\t\t\t<p>Si vous publiez sur le site, la publication et ses métadonnées sont conservées indéfiniment.</p>
\t\t\t\t\t\t<h5>Les droits que vous avez sur vos données</h5>
\t\t\t\t\t\t\t<p>Si vous publiez sur le site, vous pouvez demander à recevoir un fichier contenant toutes les données personnelles que nous possédons à votre sujet, incluant celles que vous nous avez fournies. Vous pouvez également demander la suppression des données personnelles vous concernant. Cela ne prend pas en compte les données stockées à des fins administratives, légales ou pour des raisons de sécurité.</p>

\t\t\t\t\t\t\t<p>Vous pouvez nous contacter pour toutes informations supplémentaires à l'adresse fournie dans le premier paragraphe.</p>
\t\t\t</div>
\t\t</div>
\t</section>



<a class=\"btn btn-success m-2\" href=\"{{ path('accueil')}}\" role=\"button\">Retour au site</a>

{% endblock %}
", "default/confidentialite.html.twig", "C:\\xampp\\htdocs\\moto_club\\templates\\default\\confidentialite.html.twig");
    }
}
