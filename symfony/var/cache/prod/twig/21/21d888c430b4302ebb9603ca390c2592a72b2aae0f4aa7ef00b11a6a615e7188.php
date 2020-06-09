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
class __TwigTemplate_c15818b5f332c01cdb4cebdf73b28a6c25e07677944ce18b88d7a93695abf65d extends Template
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
\t";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 2)) {
            // line 3
            echo "\t\t<li>
\t\t\t<a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userProfile", ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 4), "username", [], "any", false, false, false, 4)]), "html", null, true);
            echo "\" alt=\"Veure perfil de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 4), "username", [], "any", false, false, false, 4), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 5
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 5), "imatge", [], "any", false, false, false, 5)) {
                // line 6
                echo "\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/imatges_perfil/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 6), "imatge", [], "any", false, false, false, 6))), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userProfile", ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 13), "username", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 13), "username", [], "any", false, false, false, 13), "html", null, true);
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
        return array (  132 => 47,  126 => 44,  120 => 41,  114 => 38,  108 => 35,  101 => 31,  95 => 27,  87 => 22,  84 => 21,  76 => 16,  68 => 13,  63 => 10,  59 => 8,  53 => 6,  51 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/menu_admin.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/admin/menu_admin.html.twig");
    }
}
