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

/* articles/index.html.twig */
class __TwigTemplate_0a14d0cc653cd719c2cfe6d1af970fc9f4a22322ecf5710edda52643e2db53a5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_description' => [$this, 'block_meta_description'],
            'meta_ogg' => [$this, 'block_meta_ogg'],
            'title' => [$this, 'block_title'],
            'extrastyes' => [$this, 'block_extrastyes'],
            'navbar' => [$this, 'block_navbar'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "articles/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<meta name=\"description\" content=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "metadescription", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
";
    }

    // line 6
    public function block_meta_ogg($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t<!-- Open Graph data -->
\t<meta property=\"og:title\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "titol", [], "any", false, false, false, 8), "html", null, true);
        echo "\"/>
\t<meta property=\"og:type\" content=\"article\"/>
\t<meta property=\"og:url\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 10), "uri", [], "any", false, false, false, 10), "html", null, true);
        echo "\"/>
\t<meta property=\"og:image\" content=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 11), "getSchemeAndHttpHost", [], "method", false, false, false, 11), "html", null, true);
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/categories/" . twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "categories", [], "any", false, false, false, 11)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "logo", [], "any", false, false, false, 11))), "html", null, true);
        echo "\"/>
\t<meta property=\"og:description\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "resum", [], "any", false, false, false, 12), "html", null, true);
        echo "\"/>
\t<meta property=\"og:image:width\" content=\"300\"/>
\t<meta property=\"og:site_name\" content=\"B-NERDS toDEVELOP!\"/>
\t<meta property=\"article:published_time\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "dataPublicacio", [], "any", false, false, false, 15)), "html", null, true);
        echo "\"/>
\t<meta property=\"article:modified_time\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "dataActualitzacio", [], "any", false, false, false, 16)), "html", null, true);
        echo "\"/>
\t<meta property=\"article:author\" content=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "autor", [], "any", false, false, false, 17), "html", null, true);
        echo "\"/>
\t<meta property=\"article:section\" content=\"";
        // line 18
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "categories", [], "any", false, false, false, 18)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "html", null, true);
        echo "\"/>
\t<meta property=\"article:tag\" content=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "metaTag", [], "any", false, false, false, 19), "html", null, true);
        echo "\"/>
";
    }

    // line 22
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "\tb-NERDS!
\t";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "titol", [], "any", false, false, false, 24), "html", null, true);
        echo "
";
    }

    // line 27
    public function block_extrastyes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosckeditor/plugins/codesnippet/lib/highlight/styles/rainbow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosckeditor//plugins/codesnippet/lib/highlight/highlight.pack.js"), "html", null, true);
        echo "\"></script>

\t";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "color", [], "any", true, true, false, 31) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "color", [], "any", false, false, false, 31)))) {
            // line 32
            echo "\t\t<style>
\t\t\tnav {
\t\t\t\tborder-color:";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "color", [], "any", false, false, false, 34), "html", null, true);
            echo ";
\t\t\t}
\t\t\t.menu-username,
\t\t\t.active {
\t\t\t\tcolor: ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "color", [], "any", false, false, false, 38), "html", null, true);
            echo " !important;
\t\t\t}
\t\t\t.menu-bottom a:hover,
\t\t\t.menu-bottom i:hover {
\t\t\t\tcolor: ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "color", [], "any", false, false, false, 42), "html", null, true);
            echo "
\t\t\t\t;
\t\t\t}
\t\t\ta:hover {
\t\t\t\tcolor: ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "color", [], "any", false, false, false, 46), "html", null, true);
            echo "
\t\t\t\t;
\t\t\t}
\t\t</style>
\t";
        }
    }

    // line 54
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "\t";
        echo twig_include($this->env, $context, "articles/menu_articles.html.twig");
        echo "
";
    }

    // line 57
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "
\t<section id=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "slug", [], "any", false, false, false, 59), "html", null, true);
        echo "\">
\t\t<h1 class=\"titulo\">";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "titol", [], "any", false, false, false, 60), "html", null, true);
        echo "</h1>
\t\t<h4 class=\"article_individual_resum\">";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "resum", [], "any", false, false, false, 61), "html", null, true);
        echo "</h4>
\t\t<div class=\"article_individual_content\">
\t\t\t";
        // line 63
        echo twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "contingut", [], "any", false, false, false, 63);
        echo "
\t\t</div>
\t\t<div>
\t\t\t";
        // line 66
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "html", [], "any", false, false, false, 66))) {
            // line 67
            echo "\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inline_editor", ["slugArticle" => twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "slug", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\">Nerd it</a>
\t\t\t";
        }
        // line 69
        echo "\t\t</div>

\t\t<ul class=\"feedback-list\">
\t\t\t<li class=\"feedback-icons\">
\t\t\t\t<i class=\"fa fa-frown-o\"></i>
\t\t\t</li>
\t\t\t<li class=\"feedback-icons\">
\t\t\t\t<i class=\"fa fa-meh-o\"></i>

\t\t\t</li>
\t\t\t<li class=\"feedback-icons\">
\t\t\t\t<i class=\"fa fa-smile-o\"></i>
\t\t\t</li>
\t\t\t<li class=\"feedback-icons\">
\t\t\t\t<i class=\"fa fa-rocket\"></i>
\t\t\t</li>
\t\t</ul>

\t\t<div>
\t\t\t";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "comentaris", [], "any", false, false, false, 88));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 89
            echo "\t\t\t\t<p class=\"comments\">
\t\t\t\t\t";
            // line 90
            if (twig_get_attribute($this->env, $this->source, $context["comment"], "visible", [], "any", false, false, false, 90)) {
                // line 91
                echo "\t\t\t\t\t\t";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["comment"], "tipus", [], "any", false, false, false, 91), 0)) {
                    // line 92
                    echo "\t\t\t\t\t\t\t<i class=\"fa fa-frown-o\"></i>
\t\t\t\t\t\t";
                } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 93
$context["comment"], "tipus", [], "any", false, false, false, 93), 1)) {
                    // line 94
                    echo "\t\t\t\t\t\t\t<i class=\"fa fa-meh-o\"></i>
\t\t\t\t\t\t";
                } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 95
$context["comment"], "tipus", [], "any", false, false, false, 95), 2)) {
                    // line 96
                    echo "\t\t\t\t\t\t\t<i class=\"fa fa-smile-o\"></i>
\t\t\t\t\t\t";
                } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 97
$context["comment"], "tipus", [], "any", false, false, false, 97), 3)) {
                    // line 98
                    echo "\t\t\t\t\t\t\t<i class=\"fa fa-rocket\"></i>
\t\t\t\t\t\t";
                }
                // line 100
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 100), "username", [], "any", false, false, false, 100), "html", null, true);
                echo "
\t\t\t\t\t\tel
\t\t\t\t\t\t";
                // line 102
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "dataPublicacio", [], "any", false, false, false, 102), "d/m/Y"), "html", null, true);
                echo "<br/>
\t\t\t\t\t\t\"";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "text", [], "any", false, false, false, 103), "html", null, true);
                echo "\"
\t\t\t\t\t";
            }
            // line 105
            echo "\t\t\t\t</p>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "\t\t</div>
\t\t<div id=\"feedback-modal\">
\t\t\t<label for=\"comentari_text\" class=\"feedback-info\"></label>

\t\t\t";
        // line 111
        if (($context["commentSucces"] ?? null)) {
            // line 112
            echo "\t\t\t\t<p>
\t\t\t\t\tGracies pel teu comentari. En breu un moderador hi donarà retroacció
\t\t\t\t</p>
\t\t\t";
        } else {
            // line 116
            echo "\t\t\t\t";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["feedbackForm"] ?? null), 'form_start');
            echo "
\t\t\t\t";
            // line 117
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["feedbackForm"] ?? null), "text", [], "any", false, false, false, 117), 'widget');
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["feedbackForm"] ?? null), "tipus", [], "any", false, false, false, 117), 'widget');
            echo "
\t\t\t\t<p class=\"feedback-footer\">
\t\t\t\t\tSolo los usuarios registrados pueden añadir comentarios</p>
\t\t\t\t<div>
\t\t\t\t\t";
            // line 121
            if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 121) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_VALIDATED"))) {
                // line 122
                echo "\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-outline-secondary\">enviar</button>
\t\t\t\t\t";
            } else {
                // line 124
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                echo "\" type=\"button\" class=\"btn btn-block btn-outline-secondary\" disabled>solo los usuarios registrados pueden hacer comentarios</a>
\t\t\t\t\t";
            }
            // line 126
            echo "\t\t\t\t</div>
\t\t\t\t";
            // line 127
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["feedbackForm"] ?? null), 'form_end');
            echo "
\t\t\t";
        }
        // line 129
        echo "\t\t</div>

\t</section>


";
    }

    // line 136
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 137
        echo "\t<script>
\t\thljs.initHighlightingOnLoad();
\t</script>
";
    }

    public function getTemplateName()
    {
        return "articles/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 137,  351 => 136,  342 => 129,  337 => 127,  334 => 126,  328 => 124,  324 => 122,  322 => 121,  314 => 117,  309 => 116,  303 => 112,  301 => 111,  295 => 107,  288 => 105,  283 => 103,  279 => 102,  273 => 100,  269 => 98,  267 => 97,  264 => 96,  262 => 95,  259 => 94,  257 => 93,  254 => 92,  251 => 91,  249 => 90,  246 => 89,  242 => 88,  221 => 69,  215 => 67,  213 => 66,  207 => 63,  202 => 61,  198 => 60,  194 => 59,  191 => 58,  187 => 57,  180 => 55,  176 => 54,  166 => 46,  159 => 42,  152 => 38,  145 => 34,  141 => 32,  139 => 31,  134 => 29,  129 => 28,  125 => 27,  119 => 24,  116 => 23,  112 => 22,  106 => 19,  102 => 18,  98 => 17,  94 => 16,  90 => 15,  84 => 12,  79 => 11,  75 => 10,  70 => 8,  67 => 7,  63 => 6,  56 => 4,  52 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "articles/index.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/articles/index.html.twig");
    }
}
