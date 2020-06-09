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

/* admin/llistarArticles.html.twig */
class __TwigTemplate_487f6d3292e47383e06db46acee8cbcabcf79ae1c0eedfd45567ee4a548db91d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/llistarArticles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/llistarArticles.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/llistarArticles.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 3
        echo "\t";
        echo twig_include($this->env, $context, "admin/menu_admin.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "
\t<section>
\t\t<h1 class=\"titulo\">Llista d'articles</h1>

\t\t<div class=\"accordion\" id=\"accordionExample\">

\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 14
            echo "
\t\t\t\t<div class=\"card\">
\t\t\t\t\t";
            // line 16
            if (twig_get_attribute($this->env, $this->source, $context["article"], "visible", [], "any", false, false, false, 16)) {
                // line 17
                echo "\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t";
            } else {
                // line 19
                echo "\t\t\t\t\t\t\t<div class=\"card-header alert-warning\">
\t\t\t\t\t\t\t";
            }
            // line 21
            echo "\t\t\t\t\t\t\t<div class=\"row no-gutters\">
\t\t\t\t\t\t\t\t<div class=\"col-md-8\">

\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\" data-toggle=\"collapse\" data-target=\"#article_";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titol", [], "any", false, false, false, 25), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 text-right\">
\t\t\t\t\t\t\t\t\t";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["article"], "categories", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 29
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminArticlesCategoria", ["id" => twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                echo "\" alt=\"llistar articles de la categoria ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 29), "html", null, true);
                echo "\" title=\"llistar articles de la categoria ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 29), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"/img/categories/";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["cat"], "logo", [], "any", false, false, false, 30)), "html", null, true);
                echo "\" class=\"cat-article-icon\" alt=\"Logotip del la categoria ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 30), "html", null, true);
                echo "\"></a>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("post/" . twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 32))), "html", null, true);
            echo "\" alt=\"Veure article ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titol", [], "any", false, false, false, 32), "html", null, true);
            echo "\" alt=\"Veure article\">
\t\t\t\t\t\t\t\t\t";
            // line 33
            if (twig_get_attribute($this->env, $this->source, $context["article"], "visible", [], "any", false, false, false, 33)) {
                // line 34
                echo "\t\t\t\t\t\t\t\t\t\t<i class=\"admin-icons fa fa-eye-slash\"></i></a>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 36
                echo "\t\t\t\t\t\t\t\t\t\t<i class=\"admin-icons fa fa-eye\"></i></a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 38
            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminEditarArticle", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" alt=\"Administrar article\" title=\"Administrar article\">
\t\t\t\t\t\t\t\t\t\t<i class=\"admin-icons fa fa-cog\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body collapse\" id=\"article_";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "\" data-parent=\"#accordionExample\">

\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\tResum: ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "resum", [], "any", false, false, false, 48), "html", null, true);
            echo "<br/>
\t\t\t\t\t\t\tSEO: ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "metadescription", [], "any", false, false, false, 49), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\tCreada el ";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "dataPublicacio", [], "any", false, false, false, 51), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t per <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userProfile", ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "autor", [], "any", false, false, false, 52), "username", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\" alt=\"Veure perfil de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "autor", [], "any", false, false, false, 52), "username", [], "any", false, false, false, 52), "html", null, true);
            echo "\" title=\"Veure perfil de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "autor", [], "any", false, false, false, 52), "username", [], "any", false, false, false, 52), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "autor", [], "any", false, false, false, 53), "username", [], "any", false, false, false, 53), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t (<a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articlesAutor", ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "autor", [], "any", false, false, false, 54), "username", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\" 
\t\t\t\t\t\t\t\t alt=\"Enllaç a llista d'articles de ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "autor", [], "any", false, false, false, 55), "username", [], "any", false, false, false, 55), "html", null, true);
            echo "\" 
\t\t\t\t\t\t\t\t title=\"Veure articles de ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "autor", [], "any", false, false, false, 56), "username", [], "any", false, false, false, 56), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "autor", [], "any", false, false, false, 56), "articles", [], "any", false, false, false, 56)), "html", null, true);
            echo " articles</a>)
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t";
            // line 59
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["article"], "dataActualitzacio", [], "any", false, false, false, 59))) {
                // line 60
                echo "\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\tDarrera modificació:
\t\t\t\t\t\t\t\t\t";
                // line 62
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "dataActualitzacio", [], "any", false, false, false, 62), "d/m/Y"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
            }
            // line 65
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminEliminarArticle", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 65), "slug" => twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 65), "autor" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "autor", [], "any", false, false, false, 65), "username", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\" alt=\"eliminar article\">eliminar article</a>
\t\t\t\t\t\t\t";
            // line 66
            if (0 !== twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "comentaris", [], "any", false, false, false, 66)), 0)) {
                // line 67
                echo "\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t";
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["article"], "comentaris", [], "any", false, false, false, 68));
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 69
                    echo "\t\t\t\t\t\t\t\t\t<p class=\"admin-comments\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 70
                    if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["comment"], "tipus", [], "any", false, false, false, 70), 0)) {
                        // line 71
                        echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-frown-o\"></i>
\t\t\t\t\t\t\t\t\t\t";
                    } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 72
$context["comment"], "tipus", [], "any", false, false, false, 72), 1)) {
                        // line 73
                        echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-meh-o\"></i>
\t\t\t\t\t\t\t\t\t\t";
                    } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 74
$context["comment"], "tipus", [], "any", false, false, false, 74), 2)) {
                        // line 75
                        echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-smile-o\"></i>
\t\t\t\t\t\t\t\t\t\t";
                    } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,                     // line 76
$context["comment"], "tipus", [], "any", false, false, false, 76), 3)) {
                        // line 77
                        echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-rocket\"></i>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 79
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 79), "username", [], "any", false, false, false, 79), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                    // line 80
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "dataPublicacio", [], "any", false, false, false, 80), "d/m/Y"), "html", null, true);
                    echo "<br/>
\t\t\t\t\t\t\t\t\t\t\"";
                    // line 81
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "text", [], "any", false, false, false, 81), "html", null, true);
                    echo "\"<br/>
\t\t\t\t\t\t\t\t\t\t";
                    // line 82
                    if (twig_get_attribute($this->env, $this->source, $context["comment"], "visible", [], "any", false, false, false, 82)) {
                        // line 83
                        echo "\t\t\t\t\t\t\t\t\t\t\t✔ Aquest comentari es visible al article (<a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPublicarComentari", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 83)]), "html", null, true);
                        echo "\" alt=\"Publicar comentarí\">amagar</a>
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 85
                        echo "\t\t\t\t\t\t\t\t\t\t\t✖ Comentari no visible al article (<a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPublicarComentari", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 85)]), "html", null, true);
                        echo "\" alt=\"Amagar comentari\">publicar</a>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 87
                    echo "\t\t\t\t\t\t\t\t\t\t, <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminEditarComentari", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 87)]), "html", null, true);
                    echo "\" alt=\"Moderar comentari\">moderar</a>
\t\t\t\t\t\t\t\t\t\t o <a href=\"";
                    // line 88
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminEliminarComentari", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 88), "autor" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 88), "username", [], "any", false, false, false, 88)]), "html", null, true);
                    echo "\" alt=\"Eliminar comentari\">eliminar</a>
\t\t\t\t\t\t\t\t\t\t comentari)
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "\t\t\t\t\t\t\t";
            }
            // line 93
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "\t\t\t</div>

\t\t</section>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/llistarArticles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 96,  326 => 93,  323 => 92,  313 => 88,  308 => 87,  302 => 85,  296 => 83,  294 => 82,  290 => 81,  286 => 80,  281 => 79,  277 => 77,  275 => 76,  272 => 75,  270 => 74,  267 => 73,  265 => 72,  262 => 71,  260 => 70,  257 => 69,  253 => 68,  250 => 67,  248 => 66,  243 => 65,  237 => 62,  233 => 60,  231 => 59,  223 => 56,  219 => 55,  215 => 54,  211 => 53,  203 => 52,  199 => 51,  194 => 49,  190 => 48,  184 => 45,  173 => 38,  169 => 36,  165 => 34,  163 => 33,  156 => 32,  146 => 30,  137 => 29,  133 => 28,  127 => 25,  123 => 24,  118 => 21,  114 => 19,  110 => 17,  108 => 16,  104 => 14,  100 => 13,  92 => 7,  82 => 6,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block navbar %}
\t{{ include('admin/menu_admin.html.twig') }}
{% endblock %}

{% block content %}

\t<section>
\t\t<h1 class=\"titulo\">Llista d'articles</h1>

\t\t<div class=\"accordion\" id=\"accordionExample\">

\t\t\t{% for article in articles %}

\t\t\t\t<div class=\"card\">
\t\t\t\t\t{% if article.visible %}
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<div class=\"card-header alert-warning\">
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<div class=\"row no-gutters\">
\t\t\t\t\t\t\t\t<div class=\"col-md-8\">

\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\" data-toggle=\"collapse\" data-target=\"#article_{{article.id}}\">
\t\t\t\t\t\t\t\t\t\t{{article.titol }}</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4 text-right\">
\t\t\t\t\t\t\t\t\t{% for cat in article.categories %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('adminArticlesCategoria', {id: cat.id}) }}\" alt=\"llistar articles de la categoria {{cat.nom}}\" title=\"llistar articles de la categoria {{cat.nom}}\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"/img/categories/{{ asset(cat.logo) }}\" class=\"cat-article-icon\" alt=\"Logotip del la categoria {{cat.nom}}\"></a>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t<a href=\"{{ asset(\"post/\" ~ article.slug) }}\" alt=\"Veure article {{article.titol}}\" alt=\"Veure article\">
\t\t\t\t\t\t\t\t\t{% if article.visible %}
\t\t\t\t\t\t\t\t\t\t<i class=\"admin-icons fa fa-eye-slash\"></i></a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<i class=\"admin-icons fa fa-eye\"></i></a>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('adminEditarArticle', {id: article.id}) }}\" alt=\"Administrar article\" title=\"Administrar article\">
\t\t\t\t\t\t\t\t\t\t<i class=\"admin-icons fa fa-cog\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body collapse\" id=\"article_{{article.id}}\" data-parent=\"#accordionExample\">

\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\tResum: {{article.resum}}<br/>
\t\t\t\t\t\t\tSEO: {{article.metadescription}}
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\tCreada el {{article.dataPublicacio|date('d/m/Y')}}
\t\t\t\t\t\t\t\t per <a href=\"{{ path('userProfile', {username: article.autor.username}) }}\" alt=\"Veure perfil de {{article.autor.username}}\" title=\"Veure perfil de {{article.autor.username}}\">
\t\t\t\t\t\t\t\t{{article.autor.username}}</a>
\t\t\t\t\t\t\t\t (<a href=\"{{path('articlesAutor', {username:article.autor.username}) }}\" 
\t\t\t\t\t\t\t\t alt=\"Enllaç a llista d'articles de {{article.autor.username}}\" 
\t\t\t\t\t\t\t\t title=\"Veure articles de {{article.autor.username}}\">{{article.autor.articles|length}} articles</a>)
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t{% if article.dataActualitzacio is not empty %}
\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\tDarrera modificació:
\t\t\t\t\t\t\t\t\t{{article.dataActualitzacio|date('d/m/Y')}}
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<a href=\"{{path('adminEliminarArticle', {id:article.id, slug:article.slug, autor:article.autor.username}) }}\" alt=\"eliminar article\">eliminar article</a>
\t\t\t\t\t\t\t{% if article.comentaris|length != 0 %}
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t{% for comment in article.comentaris %}
\t\t\t\t\t\t\t\t\t<p class=\"admin-comments\">
\t\t\t\t\t\t\t\t\t\t{% if comment.tipus == 0 %}
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-frown-o\"></i>
\t\t\t\t\t\t\t\t\t\t{% elseif comment.tipus == 1 %}
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-meh-o\"></i>
\t\t\t\t\t\t\t\t\t\t{% elseif comment.tipus == 2 %}
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-smile-o\"></i>
\t\t\t\t\t\t\t\t\t\t{% elseif comment.tipus == 3 %}
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-rocket\"></i>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{{comment.user.username}}
\t\t\t\t\t\t\t\t\t\t{{comment.dataPublicacio|date('d/m/Y')}}<br/>
\t\t\t\t\t\t\t\t\t\t\"{{comment.text}}\"<br/>
\t\t\t\t\t\t\t\t\t\t{% if comment.visible %}
\t\t\t\t\t\t\t\t\t\t\t✔ Aquest comentari es visible al article (<a href=\"{{path('adminPublicarComentari', {id:comment.id}) }}\" alt=\"Publicar comentarí\">amagar</a>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t✖ Comentari no visible al article (<a href=\"{{path('adminPublicarComentari', {id:comment.id}) }}\" alt=\"Amagar comentari\">publicar</a>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t, <a href=\"{{path('adminEditarComentari', {id:comment.id}) }}\" alt=\"Moderar comentari\">moderar</a>
\t\t\t\t\t\t\t\t\t\t o <a href=\"{{path('adminEliminarComentari', {id:comment.id, autor:comment.user.username}) }}\" alt=\"Eliminar comentari\">eliminar</a>
\t\t\t\t\t\t\t\t\t\t comentari)
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>

\t\t</section>
\t{% endblock %}
", "admin/llistarArticles.html.twig", "C:\\xampp\\htdocs\\symfony\\projecte_DAW\\symfony\\templates\\admin\\llistarArticles.html.twig");
    }
}
