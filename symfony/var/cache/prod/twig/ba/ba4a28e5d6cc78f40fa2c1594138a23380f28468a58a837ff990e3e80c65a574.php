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
class __TwigTemplate_8eb3f146be0a8a74adf26ed7e6e3b89e95f008a3d2110782625f343efd8799d0 extends Template
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
        echo "<section id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["section"] ?? null), "linkslug", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
\t<h1 class=\"doc-titol\">Tecnologias utilizadas</h1>
\t<div class=\"doc-text\">
\t\t<p>
\t\t\tComo mencionames anteriormente, con el fin de mostrarloo mas gráfica y visualmente, las tecnologias, herramientas, frameworks o lenguajes de programción que se han requerido para el desarrolo de este proyecto han sido los indicados a continuación
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
        return array (  154 => 60,  148 => 57,  142 => 54,  135 => 50,  128 => 46,  124 => 45,  117 => 41,  110 => 37,  106 => 36,  99 => 32,  95 => 31,  87 => 26,  83 => 25,  76 => 21,  72 => 20,  65 => 16,  61 => 15,  54 => 11,  50 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "docs/es/05-tecnologias.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/docs/es/05-tecnologias.html.twig");
    }
}
