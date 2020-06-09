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

/* admin/llistarCategories.html.twig */
class __TwigTemplate_efaab06b392b98a13f555984aa30680612f8a73b78f8a018edb9a91ba2690505 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/llistarCategories.html.twig", 1);
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
\t\t<h1 class=\"titulo\">Llista de categories actuals</h1>

\t\t<div class=\"cat-admin\">

\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 14
            echo "\t\t\t\t";
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 14), "afegir nova categoria")) {
                // line 15
                echo "
\t\t\t\t\t<div class=\"cat-item\">

\t\t\t\t\t\t<img src=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/categories/" . twig_get_attribute($this->env, $this->source, $context["cat"], "logo", [], "any", false, false, false, 18))), "html", null, true);
                echo "\" class=\"categoria_icon\" alt=\"Logotip de la categoria ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 18), "html", null, true);
                echo "\">

\t\t\t\t\t\t<div class=\"cat-admin-info\">
\t\t\t\t\t\t\t";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 21), "html", null, true);
                echo "
\t\t\t\t\t\t\t<a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminEditarCategoria", ["id" => twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 22)]), "html", null, true);
                echo "\" alt\"editar categoria\" title=\"Editar categoria\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-cog\"></i>
\t\t\t\t\t\t\t</a><br>
\t\t\t\t\t\t\t<a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminEliminarCategoria", ["id" => twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 25)]), "html", null, true);
                echo "\" alt\"eliminar categoria\" title=\"Eliminar categoria\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<br/>

\t\t\t\t\t\t\t";
                // line 30
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "articles", [], "any", false, false, false, 30)), "html", null, true);
                echo "
\t\t\t\t\t\t\tArticles publicats
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 35
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t</div>

\t\t<a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminAfegirCategoria");
        echo "\" alt=\"Afegir nova categoria\">Afegir nova categoria</a>

\t</section>

";
    }

    public function getTemplateName()
    {
        return "admin/llistarCategories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 38,  122 => 36,  116 => 35,  108 => 30,  100 => 25,  94 => 22,  90 => 21,  82 => 18,  77 => 15,  74 => 14,  70 => 13,  62 => 7,  58 => 6,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/llistarCategories.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/admin/llistarCategories.html.twig");
    }
}
