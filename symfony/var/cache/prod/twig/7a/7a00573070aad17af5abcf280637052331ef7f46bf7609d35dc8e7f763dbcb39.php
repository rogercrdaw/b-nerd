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

/* base.html.twig */
class __TwigTemplate_90fcba2aeae6ed84c73f9943d70e654da275dfd14209b10e1a6274d51449d7f6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta_description' => [$this, 'block_meta_description'],
            'meta_ogg' => [$this, 'block_meta_ogg'],
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'extralinks' => [$this, 'block_extralinks'],
            'extrastyes' => [$this, 'block_extrastyes'],
            'body' => [$this, 'block_body'],
            'navbar' => [$this, 'block_navbar'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">

\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

\t\t<link rel=\"icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/brand/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\"/>
\t\t<link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/brand/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\"/>

\t\t";
        // line 11
        $this->displayBlock('meta_description', $context, $blocks);
        // line 14
        echo "
\t\t";
        // line 15
        $this->displayBlock('meta_ogg', $context, $blocks);
        // line 25
        echo "
\t\t<title>
\t\t\t";
        // line 27
        $this->displayBlock('title', $context, $blocks);
        // line 30
        echo "\t\t</title>

\t\t";
        // line 32
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 49
        echo "\t</head>
\t<body>
\t\t";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "
\t\t";
        // line 63
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "\t</body>
</html></head></html>
";
    }

    // line 11
    public function block_meta_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "\t\t\t<meta name=\"description\" content=\"Somos Nerds! puros Nerds toDevelop! Adictos a la programación, Geeks de las TIC. Aprendimos mucho y no queremos dejar de hacerlo.\">
\t\t";
    }

    // line 15
    public function block_meta_ogg($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "\t\t\t<!-- Open Graph data -->
\t\t\t<meta property=\"og:title\" content=\"Reconocelo! Si estas en las TIC, eres Nerd!\"/>
\t\t\t<meta property=\"og:type\" content=\"website\"/>
\t\t\t<meta property=\"og:url\" content=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 19), "uri", [], "any", false, false, false, 19), "html", null, true);
        echo "\"/>
\t\t\t<meta property=\"og:image\" content=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 20), "getSchemeAndHttpHost", [], "method", false, false, false, 20), "html", null, true);
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/brand/logo_bnerd.png"), "html", null, true);
        echo "\"/>
\t\t\t<meta property=\"og:image:width\" content=\"300\"/>
\t\t\t<meta property=\"og:description\" content=\"Bienvenido al mundo de los Full Stack Developers, esos tontos que para aprender a hacer una cosa tuviereon que apender muchas otras, y cuando creias que ya lo tenias, apareció otra mejor.\"/>
\t\t\t<meta property=\"og:site_name\" content=\"B-NERDS toDEVELOP!\"/>
\t\t";
    }

    // line 27
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "\t\t\t\tB-NERDS! toDevelop
\t\t\t";
    }

    // line 32
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "\t\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\">
\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
\t\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"></script>

\t\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">

\t\t\t<link href=\"https://fonts.googleapis.com/css2?family=Gentium+Basic:ital@0;1&family=Gupter:wght@400;500;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400;1,500&display=swap\" rel=\"stylesheet\">

\t\t\t";
        // line 41
        $this->displayBlock('extralinks', $context, $blocks);
        // line 42
        echo "
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/b-nerd.css"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/b-nerd-print.css"), "html", null, true);
        echo "\" media=\"print\">

\t\t\t<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/b-nerd.js"), "html", null, true);
        echo "\"></script>
\t\t\t";
        // line 47
        $this->displayBlock('extrastyes', $context, $blocks);
        // line 48
        echo "\t\t";
    }

    // line 41
    public function block_extralinks($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 47
    public function block_extrastyes($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 51
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "
\t\t\t<nav class=\"primary-menu\">
\t\t\t\t";
        // line 54
        $this->displayBlock('navbar', $context, $blocks);
        // line 55
        echo "\t\t\t</nav>
\t\t\t<main>
\t\t\t\t<div id=\"fade\"></div>
\t\t\t\t";
        // line 58
        $this->displayBlock('content', $context, $blocks);
        // line 59
        echo "\t\t\t</main>

\t\t";
    }

    // line 54
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 58
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 63
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 63,  221 => 58,  215 => 54,  209 => 59,  207 => 58,  202 => 55,  200 => 54,  196 => 52,  192 => 51,  186 => 47,  180 => 41,  176 => 48,  174 => 47,  170 => 46,  165 => 44,  161 => 43,  158 => 42,  156 => 41,  146 => 33,  142 => 32,  137 => 28,  133 => 27,  123 => 20,  119 => 19,  114 => 16,  110 => 15,  105 => 12,  101 => 11,  95 => 64,  93 => 63,  90 => 62,  88 => 51,  84 => 49,  82 => 32,  78 => 30,  76 => 27,  72 => 25,  70 => 15,  67 => 14,  65 => 11,  60 => 9,  56 => 8,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/base.html.twig");
    }
}
