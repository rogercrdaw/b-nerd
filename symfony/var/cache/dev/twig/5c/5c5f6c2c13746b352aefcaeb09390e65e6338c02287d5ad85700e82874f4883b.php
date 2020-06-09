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

/* docs/es/05-tecnologias.html.twig */
class __TwigTemplate_5afc70818ae4f5e749b18414be27c79e799fd6e25c2afa882d4409e3a4e77a11 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "docs/es/05-tecnologias.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "docs/es/05-tecnologias.html.twig"));

        // line 1
        echo "<section id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 1, $this->source); })()), "linkslug", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
\t<h1 class=\"doc-titol\">Tecnologías empleadas</h1>
\t<div class=\"doc-text\">
\t\t<p>
\t\t\tComo mencionamos anteriormente, con el fin de mostrarlo mas gráfica y visualmente, las tecnologías, herramientas, frameworks o lenguajes de programación que se han requerido para el desarrollo de este proyecto han sido las indicadas a continuación:
\t\t</p>

\t\t<ul class=\"doc-cat-list\">
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_categoria", ["cat_name" => "HTML"]);
        echo "\" alt\"enlace a articulos de la categoria html\" title=\"Ver articulos sobre HTML\" target=\"blank\">
\t\t\t\t\t<img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("docs/docs-icons/html5-logo.png"), "html", null, true);
        echo "\" class=\"doc-cat-icon\">
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_categoria", ["cat_name" => "CSS"]);
        echo "\" alt\"enlace a articulos de la categoria css\" title=\"Ver articulos sobre CSS\" target=\"blank\">
\t\t\t\t\t<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("docs/docs-icons/css3-logo.png"), "html", null, true);
        echo "\" class=\"doc-cat-icon\">
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_categoria", ["cat_name" => "JS"]);
        echo "\" alt\"enlace a articulos de la categoria js\" title=\"Ver articulos sobre JS\" target=\"blank\">
\t\t\t\t\t<img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("docs/docs-icons/js-logo.png"), "html", null, true);
        echo "\" class=\"doc-cat-icon\">
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_categoria", ["cat_name" => "TWIG"]);
        echo "\" alt\"enlace a articulos de la categoria twig\" title=\"Ver articulos sobre TWIG\" target=\"blank\">
\t\t\t\t\t<img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("docs/docs-icons/twig-logo.png"), "html", null, true);
        echo "\" class=\"doc-cat-icon\">
\t\t\t\t</a>
\t\t\t</li>

\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_categoria", ["cat_name" => "PHP"]);
        echo "\" alt\"enlace a articulos de la categoria php\" title=\"Ver articulos sobre PHP\" target=\"blank\">
\t\t\t\t\t<img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("docs/docs-icons/php-logo.png"), "html", null, true);
        echo "\" class=\"doc-cat-icon\">
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_categoria", ["cat_name" => "Symfony"]);
        echo "\" alt\"enlace a articulos de la categoria symfony\" title=\"Ver articulos sobre Symfony\" target=\"blank\">
\t\t\t\t\t<img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("docs/docs-icons/symfony-logo.png"), "html", null, true);
        echo "\" class=\"doc-cat-icon\">
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("docs/docs-icons/doctrine-logo.png"), "html", null, true);
        echo "\" class=\"doc-cat-icon\">

\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_categoria", ["cat_name" => "Apache"]);
        echo "\" alt\"enlace a articulos de la categoria apache\" title=\"Ver articulos sobre Apache\" target=\"blank\">
\t\t\t\t\t<img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("docs/docs-icons/apache-logo.png"), "html", null, true);
        echo "\" class=\"doc-cat-icon\">
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("docs/docs-icons/ssl-logo.png"), "html", null, true);
        echo "\" class=\"doc-cat-icon\">
\t\t\t</li>

\t\t\t<li>
\t\t\t\t<img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("docs/docs-icons/atlassian-logo.png"), "html", null, true);
        echo "\" class=\"doc-cat-icon\">
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("docs/docs-icons/basecamp-logo.png"), "html", null, true);
        echo "\" class=\"doc-cat-icon\">
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("docs/docs-icons/open-graph-logo.png"), "html", null, true);
        echo "\" class=\"doc-cat-icon\">
\t\t\t</li>
\t\t</ul>
\t</div>
</section>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "docs/es/05-tecnologias.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 60,  154 => 57,  148 => 54,  141 => 50,  134 => 46,  130 => 45,  123 => 41,  116 => 37,  112 => 36,  105 => 32,  101 => 31,  93 => 26,  89 => 25,  82 => 21,  78 => 20,  71 => 16,  67 => 15,  60 => 11,  56 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"{{section.linkslug}}\">
\t<h1 class=\"doc-titol\">Tecnologías empleadas</h1>
\t<div class=\"doc-text\">
\t\t<p>
\t\t\tComo mencionamos anteriormente, con el fin de mostrarlo mas gráfica y visualmente, las tecnologías, herramientas, frameworks o lenguajes de programación que se han requerido para el desarrollo de este proyecto han sido las indicadas a continuación:
\t\t</p>

\t\t<ul class=\"doc-cat-list\">
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('articles_categoria', {cat_name: 'HTML'}) }}\" alt\"enlace a articulos de la categoria html\" title=\"Ver articulos sobre HTML\" target=\"blank\">
\t\t\t\t\t<img src=\"{{ asset(\"docs/docs-icons/html5-logo.png\") }}\" class=\"doc-cat-icon\">
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('articles_categoria', {cat_name: 'CSS'}) }}\" alt\"enlace a articulos de la categoria css\" title=\"Ver articulos sobre CSS\" target=\"blank\">
\t\t\t\t\t<img src=\"{{ asset(\"docs/docs-icons/css3-logo.png\") }}\" class=\"doc-cat-icon\">
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('articles_categoria', {cat_name: 'JS'}) }}\" alt\"enlace a articulos de la categoria js\" title=\"Ver articulos sobre JS\" target=\"blank\">
\t\t\t\t\t<img src=\"{{ asset(\"docs/docs-icons/js-logo.png\") }}\" class=\"doc-cat-icon\">
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('articles_categoria', {cat_name: 'TWIG'}) }}\" alt\"enlace a articulos de la categoria twig\" title=\"Ver articulos sobre TWIG\" target=\"blank\">
\t\t\t\t\t<img src=\"{{ asset(\"docs/docs-icons/twig-logo.png\") }}\" class=\"doc-cat-icon\">
\t\t\t\t</a>
\t\t\t</li>

\t\t\t<li>
\t\t\t\t<a href=\"{{ path('articles_categoria', {cat_name: 'PHP'}) }}\" alt\"enlace a articulos de la categoria php\" title=\"Ver articulos sobre PHP\" target=\"blank\">
\t\t\t\t\t<img src=\"{{ asset(\"docs/docs-icons/php-logo.png\") }}\" class=\"doc-cat-icon\">
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('articles_categoria', {cat_name: 'Symfony'}) }}\" alt\"enlace a articulos de la categoria symfony\" title=\"Ver articulos sobre Symfony\" target=\"blank\">
\t\t\t\t\t<img src=\"{{ asset(\"docs/docs-icons/symfony-logo.png\") }}\" class=\"doc-cat-icon\">
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<img src=\"{{ asset(\"docs/docs-icons/doctrine-logo.png\") }}\" class=\"doc-cat-icon\">

\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('articles_categoria', {cat_name: 'Apache'}) }}\" alt\"enlace a articulos de la categoria apache\" title=\"Ver articulos sobre Apache\" target=\"blank\">
\t\t\t\t\t<img src=\"{{ asset(\"docs/docs-icons/apache-logo.png\") }}\" class=\"doc-cat-icon\">
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<img src=\"{{ asset(\"docs/docs-icons/ssl-logo.png\") }}\" class=\"doc-cat-icon\">
\t\t\t</li>

\t\t\t<li>
\t\t\t\t<img src=\"{{ asset(\"docs/docs-icons/atlassian-logo.png\") }}\" class=\"doc-cat-icon\">
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<img src=\"{{ asset(\"docs/docs-icons/basecamp-logo.png\") }}\" class=\"doc-cat-icon\">
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<img src=\"{{ asset(\"docs/docs-icons/open-graph-logo.png\") }}\" class=\"doc-cat-icon\">
\t\t\t</li>
\t\t</ul>
\t</div>
</section>
", "docs/es/05-tecnologias.html.twig", "C:\\xampp\\htdocs\\symfony\\projecte_DAW\\symfony\\templates\\docs\\es\\05-tecnologias.html.twig");
    }
}
