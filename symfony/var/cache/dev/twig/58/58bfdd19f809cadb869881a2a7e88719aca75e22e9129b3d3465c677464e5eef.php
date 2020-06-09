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
class __TwigTemplate_6b2e7769391eb6b8bd473e1584a9a4db809294436948307a73bac733e4df59ef extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/llista_articles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/llista_articles.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "articles/llista_articles.html.twig", 1);
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
        echo "
\t";
        // line 5
        if ((isset($context["categoria"]) || array_key_exists("categoria", $context))) {
            // line 6
            echo "\t\t<meta name=\"description\" content=\"Always Nerds!  Geeks to learn in constant Develoop!  Nerds to be Full Stack Developers in";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), "html", null, true);
            echo ". Aqui nuestros apuntes, ejercicios y ejemplos sobre ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), "html", null, true);
            echo "\">
\t";
        } elseif (        // line 7
(isset($context["autor"]) || array_key_exists("autor", $context))) {
            // line 8
            echo "\t\t<meta name=\"description\" content=\"Always Nerds!  Geeks to learn in constant Develoop!  Nerds to Full Stack Develop in everything. Aqui los apuntes, ejercicios y ejemplos de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["autor"]) || array_key_exists("autor", $context) ? $context["autor"] : (function () { throw new RuntimeError('Variable "autor" does not exist.', 8, $this->source); })()), "username", [], "any", false, false, false, 8), "html", null, true);
            echo "\">
\t";
        }
        // line 10
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_meta_ogg($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_ogg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_ogg"));

        // line 14
        echo "\t<!-- Open Graph data -->

\t";
        // line 16
        if ((isset($context["categoria"]) || array_key_exists("categoria", $context))) {
            // line 17
            echo "\t\t<meta property=\"og:title\" content=\"Articles de la categoria ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), "html", null, true);
            echo "\"/>
\t";
        } elseif (        // line 18
(isset($context["autor"]) || array_key_exists("autor", $context))) {
            // line 19
            echo "\t\t<meta property=\"og:title\" content=\"Articles de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["autor"]) || array_key_exists("autor", $context) ? $context["autor"] : (function () { throw new RuntimeError('Variable "autor" does not exist.', 19, $this->source); })()), "username", [], "any", false, false, false, 19), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "uri", [], "any", false, false, false, 25), "html", null, true);
        echo "\"/>


\t";
        // line 28
        if ((isset($context["categoria"]) || array_key_exists("categoria", $context))) {
            // line 29
            echo "\t\t<meta property=\"og:image\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "getSchemeAndHttpHost", [], "method", false, false, false, 29), "html", null, true);
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/categories/" . twig_get_attribute($this->env, $this->source, (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 29, $this->source); })()), "logo", [], "any", false, false, false, 29))), "html", null, true);
            echo "\"/>
\t";
        } elseif (        // line 30
(isset($context["autor"]) || array_key_exists("autor", $context))) {
            // line 31
            echo "\t\t<meta property=\"og:image\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "request", [], "any", false, false, false, 31), "getSchemeAndHttpHost", [], "method", false, false, false, 31), "html", null, true);
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/imatges_perfil/" . twig_get_attribute($this->env, $this->source, (isset($context["autor"]) || array_key_exists("autor", $context) ? $context["autor"] : (function () { throw new RuntimeError('Variable "autor" does not exist.', 31, $this->source); })()), "imatge", [], "any", false, false, false, 31))), "html", null, true);
            echo "\"/>
\t";
        } else {
            // line 33
            echo "\t\t<meta property=\"og:image\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "getSchemeAndHttpHost", [], "method", false, false, false, 33), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 39, $this->source); })()), "nom", [], "any", false, false, false, 39), "html", null, true);
            echo ". Aqui nuestros apuntes, ejercicios y ejemplos sobre ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 39, $this->source); })()), "nom", [], "any", false, false, false, 39), "html", null, true);
            echo "\"/>
\t";
        } elseif (        // line 40
(isset($context["autor"]) || array_key_exists("autor", $context))) {
            // line 41
            echo "\t\t<meta property=\"og:description\" content=\"Always Nerds!  Geeks to learn in constant Develoop!  Nerds to Full Stack Develop in everything. Aqui los apuntes, ejercicios y ejemplos de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["autor"]) || array_key_exists("autor", $context) ? $context["autor"] : (function () { throw new RuntimeError('Variable "autor" does not exist.', 41, $this->source); })()), "username", [], "any", false, false, false, 41), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 50
        echo "\t";
        if ((isset($context["categoria"]) || array_key_exists("categoria", $context))) {
            // line 51
            echo "\t\tb-NERDS! in";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 51, $this->source); })()), "nom", [], "any", false, false, false, 51), "html", null, true);
            echo "
\t";
        } elseif (        // line 52
(isset($context["autor"]) || array_key_exists("autor", $context))) {
            // line 53
            echo "\t\tb-NERDS! by
\t\t";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["autor"]) || array_key_exists("autor", $context) ? $context["autor"] : (function () { throw new RuntimeError('Variable "autor" does not exist.', 54, $this->source); })()), "username", [], "any", false, false, false, 54), "html", null, true);
            echo "
\t";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_extrastyes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrastyes"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrastyes"));

        // line 58
        echo "\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["categoria"] ?? null), "color", [], "any", true, true, false, 58) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 58, $this->source); })()), "color", [], "any", false, false, false, 58)))) {
            // line 59
            echo "\t\t<style>
\t\t\tnav {
\t\t\t\tborder-color: ";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 61, $this->source); })()), "color", [], "any", false, false, false, 61), "html", null, true);
            echo "
\t\t\t\t;
\t\t\t}
\t\t\t.menu-username,
\t\t\t.active {
\t\t\t\tcolor: ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 66, $this->source); })()), "color", [], "any", false, false, false, 66), "html", null, true);
            echo " !important;
\t\t\t}
\t\t\t.menu-bottom a:hover,
\t\t\t.menu-bottom i:hover {
\t\t\t\tcolor: ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 70, $this->source); })()), "color", [], "any", false, false, false, 70), "html", null, true);
            echo "
\t\t\t\t;
\t\t\t}
\t\t\ta:hover {
\t\t\t\tcolor: ";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new RuntimeError('Variable "categoria" does not exist.', 74, $this->source); })()), "color", [], "any", false, false, false, 74), "html", null, true);
            echo "
\t\t\t\t;
\t\t\t}
\t\t</style>
\t";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 81
        echo "\t";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 84
        echo "
\t<section>
\t\t<div style=\"padding-top:15vh\">

\t\t\t";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 88, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  366 => 96,  357 => 93,  348 => 91,  344 => 89,  340 => 88,  334 => 84,  324 => 83,  311 => 81,  301 => 80,  285 => 74,  278 => 70,  271 => 66,  263 => 61,  259 => 59,  256 => 58,  246 => 57,  233 => 54,  230 => 53,  228 => 52,  223 => 51,  220 => 50,  210 => 49,  197 => 45,  193 => 43,  187 => 41,  185 => 40,  178 => 39,  176 => 38,  171 => 35,  164 => 33,  157 => 31,  155 => 30,  149 => 29,  147 => 28,  141 => 25,  137 => 23,  133 => 21,  127 => 19,  125 => 18,  120 => 17,  118 => 16,  114 => 14,  104 => 13,  93 => 10,  87 => 8,  85 => 7,  78 => 6,  76 => 5,  73 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block meta_description %}

\t{% if categoria is defined %}
\t\t<meta name=\"description\" content=\"Always Nerds!  Geeks to learn in constant Develoop!  Nerds to be Full Stack Developers in{{categoria.nom}}. Aqui nuestros apuntes, ejercicios y ejemplos sobre {{categoria.nom}}\">
\t{% elseif autor is defined %}
\t\t<meta name=\"description\" content=\"Always Nerds!  Geeks to learn in constant Develoop!  Nerds to Full Stack Develop in everything. Aqui los apuntes, ejercicios y ejemplos de {{autor.username}}\">
\t{% endif %}

{% endblock %}

{% block meta_ogg %}
\t<!-- Open Graph data -->

\t{% if categoria is defined %}
\t\t<meta property=\"og:title\" content=\"Articles de la categoria {{  categoria.nom }}\"/>
\t{% elseif autor is defined %}
\t\t<meta property=\"og:title\" content=\"Articles de {{  autor.username }}\"/>
\t{% else %}
\t\t<meta property=\"og:title\" content=\"Articles b-Nerd\"/>
\t{% endif %}

\t<meta property=\"og:type\" content=\"website\"/>
\t<meta property=\"og:url\" content=\"{{ app.request.uri }}\"/>


\t{% if categoria is defined %}
\t\t<meta property=\"og:image\" content=\"{{ app.request.getSchemeAndHttpHost() }}{{ asset('img/categories/' ~ categoria.logo) }}\"/>
\t{% elseif autor is defined%}
\t\t<meta property=\"og:image\" content=\"{{ app.request.getSchemeAndHttpHost() }}{{ asset('img/imatges_perfil/' ~ autor.imatge) }}\"/>
\t{% else %}
\t\t<meta property=\"og:image\" content=\"{{ app.request.getSchemeAndHttpHost() }}{{ asset('img/brand/logo_bnerd.png') }}\"/>
\t{% endif %}

\t<meta property=\"og:image:width\" content=\"300\"/>

\t{% if categoria is defined %}
\t\t<meta property=\"og:description\" content=\"Always Nerds!  Geeks to learn in constant Develoop!  Nerds to be Full Stack Developers in{{categoria.nom}}. Aqui nuestros apuntes, ejercicios y ejemplos sobre {{categoria.nom}}\"/>
\t{% elseif autor is defined%}
\t\t<meta property=\"og:description\" content=\"Always Nerds!  Geeks to learn in constant Develoop!  Nerds to Full Stack Develop in everything. Aqui los apuntes, ejercicios y ejemplos de {{autor.username}}\"/>
\t{% else %}
\t\t<meta property=\"og:description\" content=\"Always Nerds!  Geeks to learn in constant Develoop!  Nerds to Full Stack Develop in everything. Aqui compartimos apuntes, ejercicios y ejemplos\"/>
\t{% endif %}

\t<meta property=\"og:site_name\" content=\"B-NERDS toDEVELOP!\"/>

{% endblock %}
{% block title %}
\t{% if categoria is defined %}
\t\tb-NERDS! in{{categoria.nom}}
\t{% elseif autor is defined %}
\t\tb-NERDS! by
\t\t{{autor.username}}
\t{% endif %}
{% endblock %}
{% block extrastyes %}
\t{% if (categoria.color is defined) and (categoria.color is not empty) %}
\t\t<style>
\t\t\tnav {
\t\t\t\tborder-color: {{categoria.color}}
\t\t\t\t;
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
\t{{ include('menu.html.twig') }}
{% endblock %}
{% block content %}

\t<section>
\t\t<div style=\"padding-top:15vh\">

\t\t\t{% for article in articles %}

\t\t\t\t<h3 class=\"llista-titol\">
\t\t\t\t\t<a href=\"{{ asset(\"post/\" ~ article.slug) }}\" alt=\"Veure article {{article.titol}}\" alt=\"Veure article\">{{article.titol}}</a>
\t\t\t\t</h3>
\t\t\t\t<p class=\"llista-resum\">{{article.resum}}</p>

\t\t\t{% endfor %}
\t\t</div>

\t</section>
{% endblock %}
", "articles/llista_articles.html.twig", "C:\\xampp\\htdocs\\symfony\\projecte_DAW\\symfony\\templates\\articles\\llista_articles.html.twig");
    }
}
