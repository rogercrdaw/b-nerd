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

/* admin/llistarUsuaris.html.twig */
class __TwigTemplate_0f8784d6e6954d2a733efcb8ffb0edb56414b6472f3b2a4a0c485bb27c4b7c8d extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/llistarUsuaris.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "\t";
        echo twig_include($this->env, $context, "admin/menu_admin.html.twig");
        echo "
";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
\t<section>
\t\t<h1 class=\"titulo\">Llista de usuaris</h1>

\t\t<div class=\"accordion\" id=\"accordionExample\">

\t\t\t<table class=\"table alert-light\">
\t\t\t\t<tr>
\t\t\t\t\t<td style=\"min-width:10em;\">username</td>
\t\t\t\t\t<td>nom</td>
\t\t\t\t\t<td>registre</td>
\t\t\t\t\t<td>ultimlogin</td>
\t\t\t\t\t<td style=\"width:3em;\">
\t\t\t\t\t\t<i class=\"fa fa-book\"></i>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"width:3em;\">
\t\t\t\t\t\t<i class=\"fa fa-commenting-o\"></i>
\t\t\t\t\t</td>
\t\t\t\t\t";
        // line 26
        echo "\t\t\t\t</tr>
\t\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["usuaris"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["usuari"]) {
            // line 28
            echo "
\t\t\t\t\t";
            // line 29
            if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, $context["usuari"], "roles", [], "any", false, false, false, 29))) {
                // line 30
                echo "\t\t\t\t\t\t<tr class=\"alert-primary\">

\t\t\t\t\t\t";
            } elseif (twig_in_filter("ROLE_VALIDATED", twig_get_attribute($this->env, $this->source,             // line 32
$context["usuari"], "roles", [], "any", false, false, false, 32))) {
                // line 33
                echo "\t\t\t\t\t\t\t<tr class=\"alert-success\">

\t\t\t\t\t\t\t";
            } elseif (twig_in_filter("ROLE_USER", twig_get_attribute($this->env, $this->source,             // line 35
$context["usuari"], "roles", [], "any", false, false, false, 35))) {
                // line 36
                echo "
\t\t\t\t\t\t\t\t<tr class=\"alert-warning\">
\t\t\t\t\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div data-toggle=\"collapse\" data-target=\"#usuari_";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuari"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "\" style=\"cursor:pointer;\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-circle-down\"></i>&nbsp;";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuari"], "username", [], "any", false, false, false, 41), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuari"], "nom", [], "any", false, false, false, 45), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuari"], "cognom", [], "any", false, false, false, 45), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuari"], "dataregistre", [], "any", false, false, false, 48), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuari"], "ultimlogin", [], "any", false, false, false, 51), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articlesAutor", ["username" => twig_get_attribute($this->env, $this->source, $context["usuari"], "username", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\" alt=\"Enllaç a la llista d'articles de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuari"], "username", [], "any", false, false, false, 54), "html", null, true);
            echo "\" title=\"Veure articles de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuari"], "username", [], "any", false, false, false, 54), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t";
            // line 55
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuari"], "articles", [], "any", false, false, false, 55)), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminComentarisUsuari", ["username" => twig_get_attribute($this->env, $this->source, $context["usuari"], "username", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\" alt=\"Enllaç a la llista de comentaris de de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuari"], "username", [], "any", false, false, false, 58), "html", null, true);
            echo "\" title=\"Veure comentaris de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuari"], "username", [], "any", false, false, false, 58), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t";
            // line 59
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuari"], "comentaris", [], "any", false, false, false, 59)), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr class=\"alert-light collapse\" id=\"usuari_";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuari"], "id", [], "any", false, false, false, 63), "html", null, true);
            echo "\" data-parent=\"#accordionExample\">
\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuari"], "email", [], "any", false, false, false, 66), "html", null, true);
            echo "<br/>
\t\t\t\t\t\t\t\t\t";
            // line 67
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["usuari"], "github", [], "any", false, false, false, 67), null)) {
                // line 68
                echo "\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-github\"></i>
\t\t\t\t\t\t\t\t\t\t";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuari"], "github", [], "any", false, false, false, 69), "html", null, true);
                echo "<br/>
\t\t\t\t\t\t\t\t\t";
            }
            // line 71
            echo "\t\t\t\t\t\t\t\t\t";
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["usuari"], "linkedin", [], "any", false, false, false, 71), null)) {
                // line 72
                echo "\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-linkedin\"></i>
\t\t\t\t\t\t\t\t\t\t";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuari"], "linkedin", [], "any", false, false, false, 73), "html", null, true);
                echo "<br/>
\t\t\t\t\t\t\t\t\t";
            }
            // line 75
            echo "\t\t\t\t\t\t\t\t\t";
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["usuari"], "twitter", [], "any", false, false, false, 75), null)) {
                // line 76
                echo "\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuari"], "twitter", [], "any", false, false, false, 77), "html", null, true);
                echo "<br/>
\t\t\t\t\t\t\t\t\t";
            }
            // line 79
            echo "\t\t\t\t\t\t\t\t\t";
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["usuari"], "facebook", [], "any", false, false, false, 79), null)) {
                // line 80
                echo "\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook\"></i>
\t\t\t\t\t\t\t\t\t\t";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuari"], "facebook", [], "any", false, false, false, 81), "html", null, true);
                echo "<br/>
\t\t\t\t\t\t\t\t\t";
            }
            // line 83
            echo "\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userProfile", ["username" => twig_get_attribute($this->env, $this->source, $context["usuari"], "username", [], "any", false, false, false, 85)]), "html", null, true);
            echo "\" alt=\"Veure perfil de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuari"], "username", [], "any", false, false, false, 85), "html", null, true);
            echo "\" title=\"Veure perfil de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuari"], "username", [], "any", false, false, false, 85), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i> veure perfil
\t\t\t\t\t\t\t\t\t</a><br/>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminEditarUsuari", ["id" => twig_get_attribute($this->env, $this->source, $context["usuari"], "id", [], "any", false, false, false, 88)]), "html", null, true);
            echo "\" alt=\"Editar l'usuari ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuari"], "username", [], "any", false, false, false, 88), "html", null, true);
            echo "\" title=\"Administrar l'usuari ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuari"], "username", [], "any", false, false, false, 88), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\" fa fa-pencil-square-o\"></i> administrar
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td colspan=\"4\">";
            // line 93
            echo twig_get_attribute($this->env, $this->source, $context["usuari"], "descripcio", [], "any", false, false, false, 93);
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuari'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "\t\t\t\t</table>
\t\t\t</div>
\t\t</section>
\t";
    }

    public function getTemplateName()
    {
        return "admin/llistarUsuaris.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 96,  253 => 93,  241 => 88,  231 => 85,  227 => 83,  222 => 81,  219 => 80,  216 => 79,  211 => 77,  208 => 76,  205 => 75,  200 => 73,  197 => 72,  194 => 71,  189 => 69,  186 => 68,  184 => 67,  180 => 66,  174 => 63,  167 => 59,  159 => 58,  153 => 55,  145 => 54,  139 => 51,  133 => 48,  125 => 45,  118 => 41,  114 => 40,  111 => 39,  106 => 36,  104 => 35,  100 => 33,  98 => 32,  94 => 30,  92 => 29,  89 => 28,  85 => 27,  82 => 26,  62 => 7,  58 => 6,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/llistarUsuaris.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/admin/llistarUsuaris.html.twig");
    }
}
