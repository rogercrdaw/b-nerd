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

/* articles/llista_articles.html.twig */
class __TwigTemplate_dba6ec29f9dab1bde331b91033bcfd93be69b181aa4ca72dff312e3540daf720 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "articles/llista_articles.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
\t";
        // line 5
        if ((isset($context["categoria"]) || array_key_exists("categoria", $context))) {
            // line 6
            echo "\t\t<meta name=\"description\" content=\"Always Nerds!  Geeks to learn in constant Develoop!  Nerds to be Full Stack Developers in";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "nom", [], "any", false, false, false, 6), "html", null, true);
            echo ". Aqui nuestros apuntes, ejercicios y ejemplos sobre ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "nom", [], "any", false, false, false, 6), "html", null, true);
            echo "\">
\t";
        } elseif (        // line 7
(isset($context["autor"]) || array_key_exists("autor", $context))) {
            // line 8
            echo "\t\t<meta name=\"description\" content=\"Always Nerds!  Geeks to learn in constant Develoop!  Nerds to Full Stack Develop in everything. Aqui los apuntes, ejercicios y ejemplos de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["autor"] ?? null), "username", [], "any", false, false, false, 8), "html", null, true);
            echo "\">
\t";
        }
        // line 10
        echo "
";
    }

    // line 13
    public function block_meta_ogg($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "\t<!-- Open Graph data -->

\t";
        // line 16
        if ((isset($context["categoria"]) || array_key_exists("categoria", $context))) {
            // line 17
            echo "\t\t<meta property=\"og:title\" content=\"Articles de la categoria ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "nom", [], "any", false, false, false, 17), "html", null, true);
            echo "\"/>
\t";
        } elseif (        // line 18
(isset($context["autor"]) || array_key_exists("autor", $context))) {
            // line 19
            echo "\t\t<meta property=\"og:title\" content=\"Articles de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["autor"] ?? null), "username", [], "any", false, false, false, 19), "html", null, true);
            echo "\"/>
\t";
        } else {
            // line 21
            echo "\t\t<meta property=\"og:title\" content=\"Articles b-Nerd\"/>
\t";
        }
        // line 23
        echo "
\t<meta property=\"og:type\" content=\"website\"/>
\t<meta property=\"og:url\" content=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 25), "uri", [], "any", false, false, false, 25), "html", null, true);
        echo "\"/>


\t";
        // line 28
        if ((isset($context["categoria"]) || array_key_exists("categoria", $context))) {
            // line 29
            echo "\t\t<meta property=\"og:image\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 29), "getSchemeAndHttpHost", [], "method", false, false, false, 29), "html", null, true);
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/categories/" . twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "logo", [], "any", false, false, false, 29))), "html", null, true);
            echo "\"/>
\t";
        } elseif (        // line 30
(isset($context["autor"]) || array_key_exists("autor", $context))) {
            // line 31
            echo "\t\t<meta property=\"og:image\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 31), "getSchemeAndHttpHost", [], "method", false, false, false, 31), "html", null, true);
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/imatges_perfil/" . twig_get_attribute($this->env, $this->source, ($context["autor"] ?? null), "imatge", [], "any", false, false, false, 31))), "html", null, true);
            echo "\"/>
\t";
        } else {
            // line 33
            echo "\t\t<meta property=\"og:image\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 33), "getSchemeAndHttpHost", [], "method", false, false, false, 33), "html", null, true);
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/brand/logo_bnerd.png"), "html", null, true);
            echo "\"/>
\t";
        }
        // line 35
        echo "
\t<meta property=\"og:image:width\" content=\"300\"/>

\t";
        // line 38
        if ((isset($context["categoria"]) || array_key_exists("categoria", $context))) {
            // line 39
            echo "\t\t<meta property=\"og:description\" content=\"Always Nerds!  Geeks to learn in constant Develoop!  Nerds to be Full Stack Developers in";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "nom", [], "any", false, false, false, 39), "html", null, true);
            echo ". Aqui nuestros apuntes, ejercicios y ejemplos sobre ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "nom", [], "any", false, false, false, 39), "html", null, true);
            echo "\"/>
\t";
        } elseif (        // line 40
(isset($context["autor"]) || array_key_exists("autor", $context))) {
            // line 41
            echo "\t\t<meta property=\"og:description\" content=\"Always Nerds!  Geeks to learn in constant Develoop!  Nerds to Full Stack Develop in everything. Aqui los apuntes, ejercicios y ejemplos de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["autor"] ?? null), "username", [], "any", false, false, false, 41), "html", null, true);
            echo "\"/>
\t";
        } else {
            // line 43
            echo "\t\t<meta property=\"og:description\" content=\"Always Nerds!  Geeks to learn in constant Develoop!  Nerds to Full Stack Develop in everything. Aqui compartimos apuntes, ejercicios y ejemplos\"/>
\t";
        }
        // line 45
        echo "
\t<meta property=\"og:site_name\" content=\"B-NERDS toDEVELOP!\"/>

";
    }

    // line 49
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "\t";
        if ((isset($context["categoria"]) || array_key_exists("categoria", $context))) {
            // line 51
            echo "\t\tb-NERDS! in";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "nom", [], "any", false, false, false, 51), "html", null, true);
            echo "
\t";
        } elseif (        // line 52
(isset($context["autor"]) || array_key_exists("autor", $context))) {
            // line 53
            echo "\t\tb-NERDS! by
\t\t";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["autor"] ?? null), "username", [], "any", false, false, false, 54), "html", null, true);
            echo "
\t";
        }
    }

    // line 57
    public function block_extrastyes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "color", [], "any", true, true, false, 58) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "color", [], "any", false, false, false, 58)))) {
            // line 59
            echo "\t\t<style>
\t\t\tnav {
\t\t\t\tborder-color: ";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "color", [], "any", false, false, false, 61), "html", null, true);
            echo "
\t\t\t\t;
\t\t\t}
\t\t\t.menu-username,
\t\t\t.active {
\t\t\t\tcolor: ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "color", [], "any", false, false, false, 66), "html", null, true);
            echo " !important;
\t\t\t}
\t\t\t.menu-bottom a:hover,
\t\t\t.menu-bottom i:hover {
\t\t\t\tcolor: ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "color", [], "any", false, false, false, 70), "html", null, true);
            echo "
\t\t\t\t;
\t\t\t}
\t\t\ta:hover {
\t\t\t\tcolor: ";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "color", [], "any", false, false, false, 74), "html", null, true);
            echo "
\t\t\t\t;
\t\t\t}
\t\t</style>
\t";
        }
    }

    // line 80
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo "\t";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
";
    }

    // line 83
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 84
        echo "
\t<section>
\t\t<div style=\"padding-top:15vh\">

\t\t\t";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 89
            echo "
\t\t\t\t<h3 class=\"llista-titol\">
\t\t\t\t\t<a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("post/" . twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 91))), "html", null, true);
            echo "\" alt=\"Veure article ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titol", [], "any", false, false, false, 91), "html", null, true);
            echo "\" alt=\"Veure article\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titol", [], "any", false, false, false, 91), "html", null, true);
            echo "</a>
\t\t\t\t</h3>
\t\t\t\t<p class=\"llista-resum\">";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "resum", [], "any", false, false, false, 93), "html", null, true);
            echo "</p>

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "\t\t</div>

\t</section>
";
    }

    public function getTemplateName()
    {
        return "articles/llista_articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 96,  279 => 93,  270 => 91,  266 => 89,  262 => 88,  256 => 84,  252 => 83,  245 => 81,  241 => 80,  231 => 74,  224 => 70,  217 => 66,  209 => 61,  205 => 59,  202 => 58,  198 => 57,  191 => 54,  188 => 53,  186 => 52,  181 => 51,  178 => 50,  174 => 49,  167 => 45,  163 => 43,  157 => 41,  155 => 40,  148 => 39,  146 => 38,  141 => 35,  134 => 33,  127 => 31,  125 => 30,  119 => 29,  117 => 28,  111 => 25,  107 => 23,  103 => 21,  97 => 19,  95 => 18,  90 => 17,  88 => 16,  84 => 14,  80 => 13,  75 => 10,  69 => 8,  67 => 7,  60 => 6,  58 => 5,  55 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "articles/llista_articles.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/articles/llista_articles.html.twig");
    }
}
