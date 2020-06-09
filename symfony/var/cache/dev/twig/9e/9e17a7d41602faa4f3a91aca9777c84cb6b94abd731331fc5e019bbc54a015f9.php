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

/* articles/menu_articles.html.twig */
class __TwigTemplate_9453c49292e695eebb950d15a990893d8db7c9494d65ddab4315d35f9c5567ef extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/menu_articles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/menu_articles.html.twig"));

        // line 1
        echo "<ul class=\"menu-user\">
\t<li>
\t\t<a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userProfile", ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 3, $this->source); })()), "autor", [], "any", false, false, false, 3), "username", [], "any", false, false, false, 3)]), "html", null, true);
        echo "\" alt=\"Veure perfil de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 3, $this->source); })()), "autor", [], "any", false, false, false, 3), "username", [], "any", false, false, false, 3), "html", null, true);
        echo "\">
\t\t\t";
        // line 4
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 4, $this->source); })()), "autor", [], "any", false, false, false, 4), "imatge", [], "any", false, false, false, 4) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 4, $this->source); })()), "autor", [], "any", false, false, false, 4), "imatge", [], "any", false, false, false, 4)))) {
            // line 5
            echo "\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/imatges_perfil/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 5, $this->source); })()), "autor", [], "any", false, false, false, 5), "imatge", [], "any", false, false, false, 5))), "html", null, true);
            echo "\" alt=\"imatge de perfil\" id=\"img-modif\">
\t\t\t";
        } else {
            // line 7
            echo "\t\t\t\t<i class=\"menu-icon fa fa-user-circle\"></i>
\t\t\t";
        }
        // line 9
        echo "\t\t</a>
\t</li>
\t<li>
\t\t<a class=\"menu-link menu-username\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userProfile", ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 12, $this->source); })()), "autor", [], "any", false, false, false, 12), "username", [], "any", false, false, false, 12)]), "html", null, true);
        echo "\" alt=\"Veure perfil de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 12, $this->source); })()), "autor", [], "any", false, false, false, 12), "username", [], "any", false, false, false, 12), "html", null, true);
        echo "\" title=\"Veure perfil de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 12, $this->source); })()), "autor", [], "any", false, false, false, 12), "username", [], "any", false, false, false, 12), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 12, $this->source); })()), "autor", [], "any", false, false, false, 12), "username", [], "any", false, false, false, 12), "html", null, true);
        echo "</a>
\t</li>
\t<li class=\"menu-link article-data\">
\t\t";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 15, $this->source); })()), "datapublicacio", [], "any", false, false, false, 15), "d M Y"), "html", null, true);
        echo "
\t</li>

\t";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 18, $this->source); })()), "autor", [], "any", false, false, false, 18)))) {
            // line 19
            echo "\t\t<li>
\t\t\t<a class=\"menu-link logout-link\" href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" alt=\"Tancar la sessió\">
\t\t\t\tsortir
\t\t\t</a>
\t\t</li>
\t";
        }
        // line 25
        echo "</ul>

<ul class=\"menu-bottom\">

\t";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 30
            echo "\t\t<li>
\t\t\t<a class=\"menu-link\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_update", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 31, $this->source); })()), "slug", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\" alt=\"Editar article\">editar article</a>
\t\t</li>
\t";
        }
        // line 34
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 34, $this->source); })()), "categories", [], "any", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 35
            echo "\t\t<li>
\t\t\t<a class=\"menu-link\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_categoria", ["cat_name" => twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" alt=\"Veure articles de la categoria in";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 36), "html", null, true);
            echo "\" title=\"Veure articles de la categoria in";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 36), "html", null, true);
            echo "\">in";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 36), "html", null, true);
            echo "</a>
\t\t</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
\t<li>
\t\t<a class=\"menu-link active\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" alt=\"Pagina d'inici\" title=\"Tornar a la pàgina d'inici\">b-NERD toDEVELOPE</a>
\t</li>
\t<li>
\t\t<a class=\"menu-link\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "#hard-skills\" alt=\"Enllaç a la secció de categories\">ARTICLES</a>
\t</li>

\t<li id=\"hamburgesa\">
\t\t<i class=\"menu-icon fa fa-bars\" alt=\"Desplegar el menu de navegació\"></i>
\t</li>
\t<li id=\"dark-mode\">
\t\t<i class=\"menu-icon fa fa-toggle-off\" alt=\"Botó per activar o desactivar el tema fosc\"></i>
\t</li>
\t";
        // line 53
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "roles", [], "any", false, false, false, 53)))) {
            // line 54
            echo "\t\t<li>
\t\t\t<a class=\"menu-link\" href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\" alt=\"Enllaç al zona admin\">admin</a>
\t\t</li>
\t";
        }
        // line 58
        echo "</ul>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "articles/menu_articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 58,  168 => 55,  165 => 54,  163 => 53,  151 => 44,  145 => 41,  141 => 39,  126 => 36,  123 => 35,  118 => 34,  112 => 31,  109 => 30,  107 => 29,  101 => 25,  93 => 20,  90 => 19,  88 => 18,  82 => 15,  70 => 12,  65 => 9,  61 => 7,  55 => 5,  53 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"menu-user\">
\t<li>
\t\t<a href=\"{{ path('userProfile', {username: article.autor.username}) }}\" alt=\"Veure perfil de {{article.autor.username}}\">
\t\t\t{% if(article.autor.imatge) and (article.autor.imatge is not empty) %}
\t\t\t\t<img src=\"{{ asset(\"img/imatges_perfil/\" ~ article.autor.imatge) }}\" alt=\"imatge de perfil\" id=\"img-modif\">
\t\t\t{% else %}
\t\t\t\t<i class=\"menu-icon fa fa-user-circle\"></i>
\t\t\t{% endif %}
\t\t</a>
\t</li>
\t<li>
\t\t<a class=\"menu-link menu-username\" href=\"{{ path('userProfile', {username: article.autor.username}) }}\" alt=\"Veure perfil de {{article.autor.username}}\" title=\"Veure perfil de {{article.autor.username}}\">{{article.autor.username}}</a>
\t</li>
\t<li class=\"menu-link article-data\">
\t\t{{article.datapublicacio|date(\"d M Y\")}}
\t</li>

\t{% if app.user and (app.user == article.autor) %}
\t\t<li>
\t\t\t<a class=\"menu-link logout-link\" href=\"{{ path('app_logout')}}\" alt=\"Tancar la sessió\">
\t\t\t\tsortir
\t\t\t</a>
\t\t</li>
\t{% endif %}
</ul>

<ul class=\"menu-bottom\">

\t{% if app.user and is_granted('ROLE_ADMIN') %}
\t\t<li>
\t\t\t<a class=\"menu-link\" href=\"{{ path('article_update', {slug:article.slug}) }}\" alt=\"Editar article\">editar article</a>
\t\t</li>
\t{% endif %}
\t{% for cat in article.categories %}
\t\t<li>
\t\t\t<a class=\"menu-link\" href=\"{{ path('articles_categoria', {cat_name: cat.nom})}}\" alt=\"Veure articles de la categoria in{{cat.nom}}\" title=\"Veure articles de la categoria in{{cat.nom}}\">in{{cat.nom}}</a>
\t\t</li>
\t{% endfor %}

\t<li>
\t\t<a class=\"menu-link active\" href=\"{{ path('homepage')}}\" alt=\"Pagina d'inici\" title=\"Tornar a la pàgina d'inici\">b-NERD toDEVELOPE</a>
\t</li>
\t<li>
\t\t<a class=\"menu-link\" href=\"{{ path('homepage')}}#hard-skills\" alt=\"Enllaç a la secció de categories\">ARTICLES</a>
\t</li>

\t<li id=\"hamburgesa\">
\t\t<i class=\"menu-icon fa fa-bars\" alt=\"Desplegar el menu de navegació\"></i>
\t</li>
\t<li id=\"dark-mode\">
\t\t<i class=\"menu-icon fa fa-toggle-off\" alt=\"Botó per activar o desactivar el tema fosc\"></i>
\t</li>
\t{% if app.user and is_granted('ROLE_ADMIN',app.user.roles) %}
\t\t<li>
\t\t\t<a class=\"menu-link\" href=\"{{ path('admin')}}\" alt=\"Enllaç al zona admin\">admin</a>
\t\t</li>
\t{% endif %}
</ul>
", "articles/menu_articles.html.twig", "C:\\xampp\\htdocs\\symfony\\projecte_DAW\\symfony\\templates\\articles\\menu_articles.html.twig");
    }
}
