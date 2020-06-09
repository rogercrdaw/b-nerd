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

/* admin/admin.html.twig */
class __TwigTemplate_8b83ee6942bc33ef244d17a648d623c2026f2a4e8a72dfd2f5286878638bf751 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/admin.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 4
        echo "\t";
        echo twig_include($this->env, $context, "admin/menu_admin.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "
\t<section>
\t\t<h1 class=\"article_individual_titol\">";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "</h1>
\t\t<p>Aqui hauria de sortir d'entrada una llista resum de novetats. Per exemple:
\t\t</p>
\t\t<ul>
\t\t\t<li>
\t\t\t\tUna llista de totes les categories amb el numero d'articles visibles de cada una d'elles
\t\t\t</li>
\t\t\t<li>
\t\t\t\tUn avis sobre categories que no tenen articles amb enllaç a adminCategories per si es volen eliminar categories
\t\t\t</li>
\t\t\t<li>
\t\t\t\tUn avis sobre quants comentaris s'han afegir l'ultim mes amb enllaç al adminComentaris per poder moderar-los
\t\t\t</li>
\t\t\t<li>
\t\t\t\tUn avis sobre quants usuaris s'han registrat l'ultim mes amb enllaç a adminUsuaris per veure qui son, s'han afegit algun comentari, si han editat el seu perfil....
\t\t\t</li>
\t\t\t<li>
\t\t\t\tUna llista de links de xarxes socials dels usuaris (per veure si algú ha aconseguit colar un link extern no autoritzat)
\t\t\t</li>
\t\t\t<li>
\t\t\t\tJa que encara no ho hem gestionat emb el JS, un espia que indiqui si algú en el seu perfil d'usuari ha escrit una etiqueta html
\t\t\t\t&#706;script&#707;
\t\t\t</li>
\t\t\t<li>
\t\t\t\tEstadistiques de googleAnalitics sobre visites
\t\t\t</li>
\t\t</ul>

\t\t<p>Son exemples a lo bruto, pero estaria bé despres del projecte mirar d'implementar-les</p>

\t</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 10,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block navbar %}
\t{{ include('admin/menu_admin.html.twig') }}
{% endblock %}

{% block content %}

\t<section>
\t\t<h1 class=\"article_individual_titol\">{{controller_name}}</h1>
\t\t<p>Aqui hauria de sortir d'entrada una llista resum de novetats. Per exemple:
\t\t</p>
\t\t<ul>
\t\t\t<li>
\t\t\t\tUna llista de totes les categories amb el numero d'articles visibles de cada una d'elles
\t\t\t</li>
\t\t\t<li>
\t\t\t\tUn avis sobre categories que no tenen articles amb enllaç a adminCategories per si es volen eliminar categories
\t\t\t</li>
\t\t\t<li>
\t\t\t\tUn avis sobre quants comentaris s'han afegir l'ultim mes amb enllaç al adminComentaris per poder moderar-los
\t\t\t</li>
\t\t\t<li>
\t\t\t\tUn avis sobre quants usuaris s'han registrat l'ultim mes amb enllaç a adminUsuaris per veure qui son, s'han afegit algun comentari, si han editat el seu perfil....
\t\t\t</li>
\t\t\t<li>
\t\t\t\tUna llista de links de xarxes socials dels usuaris (per veure si algú ha aconseguit colar un link extern no autoritzat)
\t\t\t</li>
\t\t\t<li>
\t\t\t\tJa que encara no ho hem gestionat emb el JS, un espia que indiqui si algú en el seu perfil d'usuari ha escrit una etiqueta html
\t\t\t\t&#706;script&#707;
\t\t\t</li>
\t\t\t<li>
\t\t\t\tEstadistiques de googleAnalitics sobre visites
\t\t\t</li>
\t\t</ul>

\t\t<p>Son exemples a lo bruto, pero estaria bé despres del projecte mirar d'implementar-les</p>

\t</section>

{% endblock %}
", "admin/admin.html.twig", "C:\\xampp\\htdocs\\symfony\\projecte_DAW\\symfony\\templates\\admin\\admin.html.twig");
    }
}
