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
class __TwigTemplate_c121d34883c5190371cc6f7339de81d816e0567ad44d341691eba2689534d5c1 extends Template
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
        // line 1
        echo "<ul class=\"menu-user\">
\t<li>
\t\t<a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userProfile", ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "autor", [], "any", false, false, false, 3), "username", [], "any", false, false, false, 3)]), "html", null, true);
        echo "\" alt=\"Veure perfil de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "autor", [], "any", false, false, false, 3), "username", [], "any", false, false, false, 3), "html", null, true);
        echo "\">
\t\t\t";
        // line 4
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "autor", [], "any", false, false, false, 4), "imatge", [], "any", false, false, false, 4) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "autor", [], "any", false, false, false, 4), "imatge", [], "any", false, false, false, 4)))) {
            // line 5
            echo "\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/imatges_perfil/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "autor", [], "any", false, false, false, 5), "imatge", [], "any", false, false, false, 5))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userProfile", ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "autor", [], "any", false, false, false, 12), "username", [], "any", false, false, false, 12)]), "html", null, true);
        echo "\" alt=\"Veure perfil de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "autor", [], "any", false, false, false, 12), "username", [], "any", false, false, false, 12), "html", null, true);
        echo "\" title=\"Veure perfil de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "autor", [], "any", false, false, false, 12), "username", [], "any", false, false, false, 12), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "autor", [], "any", false, false, false, 12), "username", [], "any", false, false, false, 12), "html", null, true);
        echo "</a>
\t</li>
\t<li class=\"menu-link article-data\">
\t\t";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "datapublicacio", [], "any", false, false, false, 15), "d M Y"), "html", null, true);
        echo "
\t</li>

\t";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 18) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 18), twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "autor", [], "any", false, false, false, 18)))) {
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
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 29) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 30
            echo "\t\t<li>
\t\t\t<a class=\"menu-link\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_update", ["slug" => twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "slug", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\" alt=\"Editar article\">editar article</a>
\t\t</li>
\t";
        }
        // line 34
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "categories", [], "any", false, false, false, 34));
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
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 53) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 53), "roles", [], "any", false, false, false, 53)))) {
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
        return array (  168 => 58,  162 => 55,  159 => 54,  157 => 53,  145 => 44,  139 => 41,  135 => 39,  120 => 36,  117 => 35,  112 => 34,  106 => 31,  103 => 30,  101 => 29,  95 => 25,  87 => 20,  84 => 19,  82 => 18,  76 => 15,  64 => 12,  59 => 9,  55 => 7,  49 => 5,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "articles/menu_articles.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/articles/menu_articles.html.twig");
    }
}
