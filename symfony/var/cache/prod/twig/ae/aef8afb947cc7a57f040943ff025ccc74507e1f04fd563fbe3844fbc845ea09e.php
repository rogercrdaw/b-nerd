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

/* home/ca_section_2.html.twig */
class __TwigTemplate_8f837d4f47dd96d1eb0d74d039239c457d811e489c43ea4b9e5e78aada27500a extends Template
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
        echo "<section id=\"hard-skills\">
\t<h1 class=\"titulo\">Reconocelo! Si estas en las TIC, eres Nerd!</h1>
\t<div class=\"text\">
\t\t<p>
\t\t\tFuturo se escribe en binario, y el binario ya es obseleto cuando hablamos de computación cuántica.<br/>
\t\t\tBienvenido al mundo de los Full Stack Developers, esos tontos que para aprender a hacer una cosa tuviereon que apender muchas otras, y cuando creias que ya lo tenias, apareció otra mejor. 
\t\t</p>
\t\t<p>
\t\t\tDesde el navegador, al servidor, pasando por bases de datos y sistemas.. De frontend a backend mezclando una gran lista de tecnologías y idiomas de programación. Y es que si algo hemos aprendido, es que no hay ninguno perfecto, cada uno es bueno en lo suyo y el mejor para segun  que proyecto.
\t\t</p>

\t\t<ul class=\"cat-list\">
\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories_frontend"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 14
            echo "\t\t\t\t";
            if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "articles", [], "any", false, false, false, 14)), 0)) {
                // line 15
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_categoria", ["cat_name" => twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 16)]), "html", null, true);
                echo "\" alt\"enllaç a articles de la categoria ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 16), "html", null, true);
                echo "\" title=\"Veure articles de ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 16), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<img src=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/categories/" . twig_get_attribute($this->env, $this->source, $context["cat"], "logo", [], "any", false, false, false, 17))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 17), "html", null, true);
                echo " icon\" class=\"cat-icon\">
\t\t\t\t\t\t\t<span class=\"badge badge-secondary cat-length\">";
                // line 18
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "articles", [], "any", false, false, false, 18)), "html", null, true);
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 22
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories_backend"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 25
            echo "\t\t\t\t";
            if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "articles", [], "any", false, false, false, 25)), 0)) {
                // line 26
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_categoria", ["cat_name" => twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 27)]), "html", null, true);
                echo "\" alt\"enllaç a articles de la categoria ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 27), "html", null, true);
                echo "\" title=\"Veure articles de ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 27), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<img src=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/categories/" . twig_get_attribute($this->env, $this->source, $context["cat"], "logo", [], "any", false, false, false, 28))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 28), "html", null, true);
                echo " icon\" class=\"cat-icon\">
\t\t\t\t\t\t\t<span class=\"badge badge-secondary cat-length\">";
                // line 29
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "articles", [], "any", false, false, false, 29)), "html", null, true);
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 33
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
\t\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories_sistemes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 36
            echo "\t\t\t\t";
            if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "articles", [], "any", false, false, false, 36)), 0)) {
                // line 37
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_categoria", ["cat_name" => twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 38)]), "html", null, true);
                echo "\" alt\"enllaç a articles de la categoria ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 38), "html", null, true);
                echo "\" title=\"Veure articles de ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 38), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<img src=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/categories/" . twig_get_attribute($this->env, $this->source, $context["cat"], "logo", [], "any", false, false, false, 39))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 39), "html", null, true);
                echo " icon\" class=\"cat-icon\">
\t\t\t\t\t\t\t<span class=\"badge badge-secondary cat-length\">";
                // line 40
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "articles", [], "any", false, false, false, 40)), "html", null, true);
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 44
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
\t\t\t\t\t\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories_altres"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 47
            echo "\t\t\t\t";
            if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "articles", [], "any", false, false, false, 47)), 0)) {
                // line 48
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_categoria", ["cat_name" => twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 49)]), "html", null, true);
                echo "\" alt\"enllaç a articles de la categoria ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 49), "html", null, true);
                echo "\" title=\"Veure articles de ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 49), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<img src=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/categories/" . twig_get_attribute($this->env, $this->source, $context["cat"], "logo", [], "any", false, false, false, 50))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 50), "html", null, true);
                echo " icon\" class=\"cat-icon\">
\t\t\t\t\t\t\t<span class=\"badge badge-secondary cat-length\">";
                // line 51
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "articles", [], "any", false, false, false, 51)), "html", null, true);
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 55
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t</ul>
\t\t<p>
\t\t\tLa memoria es finita, y para no olvidar, eso que un dia aprendimos, pero ya no usamos con la suficiente frecuencia para recordarlo, aqui queda eso de lo que hablamos. Y si algo no esta aquí, es porque ya tardas en enseñarnoslo.
\t\t</p>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "home/ca_section_2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 56,  202 => 55,  195 => 51,  189 => 50,  181 => 49,  178 => 48,  175 => 47,  171 => 46,  168 => 45,  162 => 44,  155 => 40,  149 => 39,  141 => 38,  138 => 37,  135 => 36,  131 => 35,  128 => 34,  122 => 33,  115 => 29,  109 => 28,  101 => 27,  98 => 26,  95 => 25,  91 => 24,  88 => 23,  82 => 22,  75 => 18,  69 => 17,  61 => 16,  58 => 15,  55 => 14,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/ca_section_2.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/home/ca_section_2.html.twig");
    }
}
