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

/* admin/menu_admin.html.twig */
class __TwigTemplate_84f7c8a4a423c8d564c5d042c1c9195f045e47b65fc26f8af193f1430459f9d1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/menu_admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/menu_admin.html.twig"));

        // line 1
        echo "<ul class=\"menu-user\">
\t";
        // line 2
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "user", [], "any", false, false, false, 2)) {
            // line 3
            echo "\t\t<li>
\t\t\t<a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userProfile", ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4), "username", [], "any", false, false, false, 4)]), "html", null, true);
            echo "\" alt=\"Veure perfil de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4), "username", [], "any", false, false, false, 4), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 5
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "user", [], "any", false, false, false, 5), "imatge", [], "any", false, false, false, 5)) {
                // line 6
                echo "\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/imatges_perfil/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), "imatge", [], "any", false, false, false, 6))), "html", null, true);
                echo "\" alt=\"imatge de perfil\" id=\"img-modif\">
\t\t\t\t";
            } else {
                // line 8
                echo "\t\t\t\t\t<i class=\"fa fa-user-circle\"></i>
\t\t\t\t";
            }
            // line 10
            echo "\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"menu-link menu-username\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userProfile", ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "username", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "username", [], "any", false, false, false, 13), "html", null, true);
            echo "</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"menu-link logout-link\" href=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" alt=\"Tancar la sessió\">
\t\t\t\tsortir
\t\t\t</a>
\t\t</li>
\t";
        } else {
            // line 21
            echo "\t\t<li>
\t\t\t<a class=\"menu-icon\" href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" alt=\"Enllaç a formulari de login\">
\t\t\t\t<i class=\"fa fa-user-circle\"></i>
\t\t\t</a>
\t\t</li>
\t";
        }
        // line 27
        echo "</ul>

<ul class=\"menu-bottom\">
\t<li>
\t\t<a class=\"menu-link active\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" añt=\" Pagina d'incici\" title=\"Tornar a la pàgina d'inici\">b-NERD toDEVELOPE</a>
\t</li>

\t<li>
\t\t<a class=\"menu-link\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_new");
        echo "\" alt=\"Formulari de nou article\">NOU ARTICLE</a>
\t</li>
\t<li>
\t\t<a class=\"menu-link\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminArticles");
        echo "\" alt=\"Enllaç a l'administrador d'articles\">ARTICLES</a>
\t</li>
\t<li>
\t\t<a class=\"menu-link\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminCategories");
        echo "\" alt=\"Enllaç a l'administrador de categories\">CATEGORIES</a>
\t</li>
\t<li>
\t\t<a class=\"menu-link\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminComentaris");
        echo "\" alt=\"Enllaç a l'administrador de comentaris\">COMENTARIS</a>
\t</li>
\t<li>
\t\t<a class=\"menu-link\" href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminUsuaris");
        echo "\" alt=\"Enllaç a l'administrador d'usuaris\">USUARIS</a>
\t</li>

\t<li id=\"hamburgesa\">
\t\t<i class=\"menu-icon fa fa-bars\" alt=\"Desplegar el menu de navegació\"></i>
\t</li>
\t<li id=\"dark-mode\">
\t\t<i class=\"menu-icon fa fa-toggle-off\" alt=\"Botó per activar o desactivar el tema fosc\"></i>
\t</li>

</ul>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/menu_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 47,  132 => 44,  126 => 41,  120 => 38,  114 => 35,  107 => 31,  101 => 27,  93 => 22,  90 => 21,  82 => 16,  74 => 13,  69 => 10,  65 => 8,  59 => 6,  57 => 5,  51 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"menu-user\">
\t{% if app.user %}
\t\t<li>
\t\t\t<a href=\"{{ path('userProfile', {username: app.user.username}) }}\" alt=\"Veure perfil de {{app.user.username}}\">
\t\t\t\t{% if app.user.imatge %}
\t\t\t\t\t<img src=\"{{ asset(\"img/imatges_perfil/\" ~ app.user.imatge) }}\" alt=\"imatge de perfil\" id=\"img-modif\">
\t\t\t\t{% else %}
\t\t\t\t\t<i class=\"fa fa-user-circle\"></i>
\t\t\t\t{% endif %}
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"menu-link menu-username\" href=\"{{ path('userProfile', {username: app.user.username}) }}\">{{app.user.username}}</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"menu-link logout-link\" href=\"{{ path('app_logout')}}\" alt=\"Tancar la sessió\">
\t\t\t\tsortir
\t\t\t</a>
\t\t</li>
\t{% else %}
\t\t<li>
\t\t\t<a class=\"menu-icon\" href=\"{{ path('app_login')}}\" alt=\"Enllaç a formulari de login\">
\t\t\t\t<i class=\"fa fa-user-circle\"></i>
\t\t\t</a>
\t\t</li>
\t{% endif %}
</ul>

<ul class=\"menu-bottom\">
\t<li>
\t\t<a class=\"menu-link active\" href=\"{{ path('homepage')}}\" añt=\" Pagina d'incici\" title=\"Tornar a la pàgina d'inici\">b-NERD toDEVELOPE</a>
\t</li>

\t<li>
\t\t<a class=\"menu-link\" href=\"{{ path('article_new')}}\" alt=\"Formulari de nou article\">NOU ARTICLE</a>
\t</li>
\t<li>
\t\t<a class=\"menu-link\" href=\"{{ path('adminArticles')}}\" alt=\"Enllaç a l'administrador d'articles\">ARTICLES</a>
\t</li>
\t<li>
\t\t<a class=\"menu-link\" href=\"{{ path('adminCategories')}}\" alt=\"Enllaç a l'administrador de categories\">CATEGORIES</a>
\t</li>
\t<li>
\t\t<a class=\"menu-link\" href=\"{{ path('adminComentaris')}}\" alt=\"Enllaç a l'administrador de comentaris\">COMENTARIS</a>
\t</li>
\t<li>
\t\t<a class=\"menu-link\" href=\"{{ path('adminUsuaris')}}\" alt=\"Enllaç a l'administrador d'usuaris\">USUARIS</a>
\t</li>

\t<li id=\"hamburgesa\">
\t\t<i class=\"menu-icon fa fa-bars\" alt=\"Desplegar el menu de navegació\"></i>
\t</li>
\t<li id=\"dark-mode\">
\t\t<i class=\"menu-icon fa fa-toggle-off\" alt=\"Botó per activar o desactivar el tema fosc\"></i>
\t</li>

</ul>
", "admin/menu_admin.html.twig", "C:\\xampp\\htdocs\\symfony\\projecte_DAW\\symfony\\templates\\admin\\menu_admin.html.twig");
    }
}
