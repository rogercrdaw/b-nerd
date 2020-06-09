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
class __TwigTemplate_ce7faf87c35669661d49d82867f9564f36ee9d47712380a4cdce8e4fb75ccd0e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "articles/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_meta_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_description"));

        // line 4
        echo "\t<meta name=\"description\" content=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 4, $this->source); })()), "metadescription", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_meta_ogg($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_ogg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_ogg"));

        // line 7
        echo "\t<!-- Open Graph data -->
\t<meta property=\"og:title\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "titol", [], "any", false, false, false, 8), "html", null, true);
        echo "\"/>
\t<meta property=\"og:type\" content=\"article\"/>
\t<meta property=\"og:url\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "uri", [], "any", false, false, false, 10), "html", null, true);
        echo "\"/>
\t<meta property=\"og:image\" content=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "getSchemeAndHttpHost", [], "method", false, false, false, 11), "html", null, true);
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/categories/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 11, $this->source); })()), "categories", [], "any", false, false, false, 11), 0, [], "array", false, false, false, 11), "logo", [], "any", false, false, false, 11))), "html", null, true);
        echo "\"/>
\t<meta property=\"og:description\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 12, $this->source); })()), "resum", [], "any", false, false, false, 12), "html", null, true);
        echo "\"/>
\t<meta property=\"og:image:width\" content=\"300\"/>
\t<meta property=\"og:site_name\" content=\"B-NERDS toDEVELOP!\"/>
\t<meta property=\"article:published_time\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 15, $this->source); })()), "dataPublicacio", [], "any", false, false, false, 15)), "html", null, true);
        echo "\"/>
\t<meta property=\"article:modified_time\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 16, $this->source); })()), "dataActualitzacio", [], "any", false, false, false, 16)), "html", null, true);
        echo "\"/>
\t<meta property=\"article:author\" content=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 17, $this->source); })()), "autor", [], "any", false, false, false, 17), "html", null, true);
        echo "\"/>
\t<meta property=\"article:section\" content=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 18, $this->source); })()), "categories", [], "any", false, false, false, 18), 0, [], "array", false, false, false, 18), "html", null, true);
        echo "\"/>
\t<meta property=\"article:tag\" content=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 19, $this->source); })()), "metaTag", [], "any", false, false, false, 19), "html", null, true);
        echo "\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 23
        echo "\tb-NERDS!
\t";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 24, $this->source); })()), "titol", [], "any", false, false, false, 24), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_extrastyes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrastyes"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrastyes"));

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
        if ((twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "color", [], "any", true, true, false, 31) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 31, $this->source); })()), "color", [], "any", false, false, false, 31)))) {
            // line 32
            echo "\t\t<style>
\t\t\tnav {
\t\t\t\tborder-color:";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 34, $this->source); })()), "color", [], "any", false, false, false, 34), "html", null, true);
            echo ";
\t\t\t}
\t\t\t.menu-username,
\t\t\t.active {
\t\t\t\tcolor: ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 38, $this->source); })()), "color", [], "any", false, false, false, 38), "html", null, true);
            echo " !important;
\t\t\t}
\t\t\t.menu-bottom a:hover,
\t\t\t.menu-bottom i:hover {
\t\t\t\tcolor: ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 42, $this->source); })()), "color", [], "any", false, false, false, 42), "html", null, true);
            echo "
\t\t\t\t;
\t\t\t}
\t\t\ta:hover {
\t\t\t\tcolor: ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 46, $this->source); })()), "color", [], "any", false, false, false, 46), "html", null, true);
            echo "
\t\t\t\t;
\t\t\t}
\t\t</style>
\t";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 55
        echo "\t";
        echo twig_include($this->env, $context, "articles/menu_articles.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 58
        echo "
\t<section id=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 59, $this->source); })()), "slug", [], "any", false, false, false, 59), "html", null, true);
        echo "\">
\t\t<h1 class=\"titulo\">";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 60, $this->source); })()), "titol", [], "any", false, false, false, 60), "html", null, true);
        echo "</h1>
\t\t<h4 class=\"article_individual_resum\">";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 61, $this->source); })()), "resum", [], "any", false, false, false, 61), "html", null, true);
        echo "</h4>
\t\t<div class=\"article_individual_content\">
\t\t\t";
        // line 63
        echo twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 63, $this->source); })()), "contingut", [], "any", false, false, false, 63);
        echo "
\t\t</div>
\t\t<div>
\t\t\t";
        // line 66
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 66, $this->source); })()), "html", [], "any", false, false, false, 66))) {
            // line 67
            echo "\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inline_editor", ["slugArticle" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 67, $this->source); })()), "slug", [], "any", false, false, false, 67)]), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 88, $this->source); })()), "comentaris", [], "any", false, false, false, 88));
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
        if ((isset($context["commentSucces"]) || array_key_exists("commentSucces", $context) ? $context["commentSucces"] : (function () { throw new RuntimeError('Variable "commentSucces" does not exist.', 111, $this->source); })())) {
            // line 112
            echo "\t\t\t\t<p>
\t\t\t\t\tGracies pel teu comentari. En breu un moderador hi donarà retroacció
\t\t\t\t</p>
\t\t\t";
        } else {
            // line 116
            echo "\t\t\t\t";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["feedbackForm"]) || array_key_exists("feedbackForm", $context) ? $context["feedbackForm"] : (function () { throw new RuntimeError('Variable "feedbackForm" does not exist.', 116, $this->source); })()), 'form_start');
            echo "
\t\t\t\t";
            // line 117
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["feedbackForm"]) || array_key_exists("feedbackForm", $context) ? $context["feedbackForm"] : (function () { throw new RuntimeError('Variable "feedbackForm" does not exist.', 117, $this->source); })()), "text", [], "any", false, false, false, 117), 'widget');
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["feedbackForm"]) || array_key_exists("feedbackForm", $context) ? $context["feedbackForm"] : (function () { throw new RuntimeError('Variable "feedbackForm" does not exist.', 117, $this->source); })()), "tipus", [], "any", false, false, false, 117), 'widget');
            echo "
\t\t\t\t<p class=\"feedback-footer\">
\t\t\t\t\tSólo los usuarios registrados pueden añadir comentarios</p>
\t\t\t\t<div>
\t\t\t\t\t";
            // line 121
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "user", [], "any", false, false, false, 121) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_VALIDATED"))) {
                // line 122
                echo "\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-outline-secondary\">enviar</button>
\t\t\t\t\t";
            } else {
                // line 124
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                echo "\" type=\"button\" class=\"btn btn-block btn-outline-secondary\" disabled>sólo los usuarios registrados pueden hacer comentarios</a>
\t\t\t\t\t";
            }
            // line 126
            echo "\t\t\t\t</div>
\t\t\t\t";
            // line 127
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["feedbackForm"]) || array_key_exists("feedbackForm", $context) ? $context["feedbackForm"] : (function () { throw new RuntimeError('Variable "feedbackForm" does not exist.', 127, $this->source); })()), 'form_end');
            echo "
\t\t\t";
        }
        // line 129
        echo "\t\t</div>

\t</section>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 136
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 137
        echo "\t<script>
\t\thljs.initHighlightingOnLoad();
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  445 => 137,  435 => 136,  420 => 129,  415 => 127,  412 => 126,  406 => 124,  402 => 122,  400 => 121,  392 => 117,  387 => 116,  381 => 112,  379 => 111,  373 => 107,  366 => 105,  361 => 103,  357 => 102,  351 => 100,  347 => 98,  345 => 97,  342 => 96,  340 => 95,  337 => 94,  335 => 93,  332 => 92,  329 => 91,  327 => 90,  324 => 89,  320 => 88,  299 => 69,  293 => 67,  291 => 66,  285 => 63,  280 => 61,  276 => 60,  272 => 59,  269 => 58,  259 => 57,  246 => 55,  236 => 54,  220 => 46,  213 => 42,  206 => 38,  199 => 34,  195 => 32,  193 => 31,  188 => 29,  183 => 28,  173 => 27,  161 => 24,  158 => 23,  148 => 22,  136 => 19,  132 => 18,  128 => 17,  124 => 16,  120 => 15,  114 => 12,  109 => 11,  105 => 10,  100 => 8,  97 => 7,  87 => 6,  74 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block meta_description %}
\t<meta name=\"description\" content=\"{{article.metadescription}}\">
{% endblock %}
{% block meta_ogg %}
\t<!-- Open Graph data -->
\t<meta property=\"og:title\" content=\"{{ article.titol }}\"/>
\t<meta property=\"og:type\" content=\"article\"/>
\t<meta property=\"og:url\" content=\"{{ app.request.uri }}\"/>
\t<meta property=\"og:image\" content=\"{{ app.request.getSchemeAndHttpHost() }}{{ asset('img/categories/' ~ article.categories[0].logo) }}\"/>
\t<meta property=\"og:description\" content=\"{{article.resum}}\"/>
\t<meta property=\"og:image:width\" content=\"300\"/>
\t<meta property=\"og:site_name\" content=\"B-NERDS toDEVELOP!\"/>
\t<meta property=\"article:published_time\" content=\"{{ article.dataPublicacio|date() }}\"/>
\t<meta property=\"article:modified_time\" content=\"{{ article.dataActualitzacio|date() }}\"/>
\t<meta property=\"article:author\" content=\"{{ article.autor }}\"/>
\t<meta property=\"article:section\" content=\"{{ article.categories[0] }}\"/>
\t<meta property=\"article:tag\" content=\"{{ article.metaTag }}\"/>
{% endblock %}

{% block title %}
\tb-NERDS!
\t{{article.titol}}
{% endblock %}

{% block extrastyes %}
\t<link href=\"{{ asset('bundles/fosckeditor/plugins/codesnippet/lib/highlight/styles/rainbow.css') }}\" rel=\"stylesheet\">
\t<script src=\"{{ asset('bundles/fosckeditor//plugins/codesnippet/lib/highlight/highlight.pack.js') }}\"></script>

\t{% if (categoria.color is defined) and (categoria.color is not empty) %}
\t\t<style>
\t\t\tnav {
\t\t\t\tborder-color:{{categoria.color}};
\t\t\t}
\t\t\t.menu-username,
\t\t\t.active {
\t\t\t\tcolor: {{categoria.color}} !important;
\t\t\t}
\t\t\t.menu-bottom a:hover,
\t\t\t.menu-bottom i:hover {
\t\t\t\tcolor: {{categoria.color}}
\t\t\t\t;
\t\t\t}
\t\t\ta:hover {
\t\t\t\tcolor: {{categoria.color}}
\t\t\t\t;
\t\t\t}
\t\t</style>
\t{% endif %}
{% endblock %}


{% block navbar %}
\t{{ include('articles/menu_articles.html.twig') }}
{% endblock %}
{% block content %}

\t<section id=\"{{article.slug}}\">
\t\t<h1 class=\"titulo\">{{article.titol}}</h1>
\t\t<h4 class=\"article_individual_resum\">{{article.resum}}</h4>
\t\t<div class=\"article_individual_content\">
\t\t\t{{article.contingut|raw}}
\t\t</div>
\t\t<div>
\t\t\t{% if article.html is not null  %}
\t\t\t\t<a href=\"{{ path('inline_editor',{slugArticle:article.slug}) }}\">Nerd it</a>
\t\t\t{% endif %}
\t\t</div>

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
\t\t\t{% for comment in article.comentaris %}
\t\t\t\t<p class=\"comments\">
\t\t\t\t\t{% if comment.visible %}
\t\t\t\t\t\t{% if comment.tipus == 0 %}
\t\t\t\t\t\t\t<i class=\"fa fa-frown-o\"></i>
\t\t\t\t\t\t{% elseif comment.tipus == 1 %}
\t\t\t\t\t\t\t<i class=\"fa fa-meh-o\"></i>
\t\t\t\t\t\t{% elseif comment.tipus == 2 %}
\t\t\t\t\t\t\t<i class=\"fa fa-smile-o\"></i>
\t\t\t\t\t\t{% elseif comment.tipus == 3 %}
\t\t\t\t\t\t\t<i class=\"fa fa-rocket\"></i>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{{comment.user.username}}
\t\t\t\t\t\tel
\t\t\t\t\t\t{{comment.dataPublicacio|date('d/m/Y')}}<br/>
\t\t\t\t\t\t\"{{comment.text}}\"
\t\t\t\t\t{% endif %}
\t\t\t\t</p>
\t\t\t{% endfor %}
\t\t</div>
\t\t<div id=\"feedback-modal\">
\t\t\t<label for=\"comentari_text\" class=\"feedback-info\"></label>

\t\t\t{% if commentSucces %}
\t\t\t\t<p>
\t\t\t\t\tGracies pel teu comentari. En breu un moderador hi donarà retroacció
\t\t\t\t</p>
\t\t\t{% else %}
\t\t\t\t{{ form_start(feedbackForm) }}
\t\t\t\t{{ form_widget(feedbackForm.text) }}{{ form_widget(feedbackForm.tipus) }}
\t\t\t\t<p class=\"feedback-footer\">
\t\t\t\t\tSólo los usuarios registrados pueden añadir comentarios</p>
\t\t\t\t<div>
\t\t\t\t\t{% if app.user and is_granted('ROLE_VALIDATED') %}
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-outline-secondary\">enviar</button>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a href=\"{{path('app_login')}}\" type=\"button\" class=\"btn btn-block btn-outline-secondary\" disabled>sólo los usuarios registrados pueden hacer comentarios</a>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t\t{{ form_end(feedbackForm) }}
\t\t\t{% endif %}
\t\t</div>

\t</section>


{% endblock %}

{% block javascripts %}
\t<script>
\t\thljs.initHighlightingOnLoad();
\t</script>
{% endblock %}
", "articles/index.html.twig", "C:\\xampp\\htdocs\\symfony\\projecte_DAW\\symfony\\templates\\articles\\index.html.twig");
    }
}
