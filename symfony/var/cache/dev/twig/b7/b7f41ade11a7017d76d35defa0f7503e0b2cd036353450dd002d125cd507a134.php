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
class __TwigTemplate_d9e1c798cf054100c6593cbdf7ec2e4ddf03031d48deb54bdbb208e26606276d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/ca_section_2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/ca_section_2.html.twig"));

        // line 1
        echo "<section id=\"hard-skills\">
\t<h1 class=\"titulo\">Reconócelo! Si estás en las TIC, eres Nerd!</h1>
\t<div class=\"text\">
\t\t<p>
\t\t\tFuturo se escribe en binario, y el binario ya es obsoleto cuando hablamos de computación cuántica.<br/>
\t\t\tBienvenido al mundo de los Full Stack Developers, esos tontos que para aprender a hacer una cosa tuvieron que aprender muchas otras, y cuando creías que ya lo tenías, apareció otra mejor. 
\t\t</p>
\t\t<p>
\t\t\tDesde el navegador, al servidor, pasando por bases de datos y sistemas.  De frontend a backend mezclando una gran lista de tecnologías e idiomas de programación.<br/>
\t\t\tY es que si algo hemos aprendido, es que no hay ninguno perfecto, cada uno es bueno en lo suyo y el mejor para según que proyecto.
\t\t</p>

\t\t<ul class=\"cat-list\">
\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories_frontend"]) || array_key_exists("categories_frontend", $context) ? $context["categories_frontend"] : (function () { throw new RuntimeError('Variable "categories_frontend" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 15
            echo "\t\t\t\t";
            if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "articles", [], "any", false, false, false, 15)), 0)) {
                // line 16
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_categoria", ["cat_name" => twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 17)]), "html", null, true);
                echo "\" alt\"Enlace a artículos de la categoría ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 17), "html", null, true);
                echo "\" title=\"Ver artículos de ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 17), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<img src=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/categories/" . twig_get_attribute($this->env, $this->source, $context["cat"], "logo", [], "any", false, false, false, 18))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 18), "html", null, true);
                echo " icon\" class=\"cat-icon\">
\t\t\t\t\t\t\t<span class=\"badge badge-secondary cat-length\">";
                // line 19
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "articles", [], "any", false, false, false, 19)), "html", null, true);
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 23
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories_backend"]) || array_key_exists("categories_backend", $context) ? $context["categories_backend"] : (function () { throw new RuntimeError('Variable "categories_backend" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 26
            echo "\t\t\t\t";
            if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "articles", [], "any", false, false, false, 26)), 0)) {
                // line 27
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_categoria", ["cat_name" => twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 28)]), "html", null, true);
                echo "\" alt\"Enlace a artículos de la categoría ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 28), "html", null, true);
                echo "\" title=\"Ver artículos de ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 28), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<img src=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/categories/" . twig_get_attribute($this->env, $this->source, $context["cat"], "logo", [], "any", false, false, false, 29))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 29), "html", null, true);
                echo " icon\" class=\"cat-icon\">
\t\t\t\t\t\t\t<span class=\"badge badge-secondary cat-length\">";
                // line 30
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "articles", [], "any", false, false, false, 30)), "html", null, true);
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 34
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories_sistemes"]) || array_key_exists("categories_sistemes", $context) ? $context["categories_sistemes"] : (function () { throw new RuntimeError('Variable "categories_sistemes" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 37
            echo "\t\t\t\t";
            if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "articles", [], "any", false, false, false, 37)), 0)) {
                // line 38
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_categoria", ["cat_name" => twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 39)]), "html", null, true);
                echo "\" alt\"Enlace a artículos de la categoría ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 39), "html", null, true);
                echo "\" title=\"Ver artículos de ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 39), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<img src=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/categories/" . twig_get_attribute($this->env, $this->source, $context["cat"], "logo", [], "any", false, false, false, 40))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 40), "html", null, true);
                echo " icon\" class=\"cat-icon\">
\t\t\t\t\t\t\t<span class=\"badge badge-secondary cat-length\">";
                // line 41
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "articles", [], "any", false, false, false, 41)), "html", null, true);
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 45
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
\t\t\t\t\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories_altres"]) || array_key_exists("categories_altres", $context) ? $context["categories_altres"] : (function () { throw new RuntimeError('Variable "categories_altres" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 48
            echo "\t\t\t\t";
            if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "articles", [], "any", false, false, false, 48)), 0)) {
                // line 49
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_categoria", ["cat_name" => twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 50)]), "html", null, true);
                echo "\" alt\"Enlace a artículos de la categoría ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 50), "html", null, true);
                echo "\" title=\"Ver artículos de ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 50), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<img src=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/categories/" . twig_get_attribute($this->env, $this->source, $context["cat"], "logo", [], "any", false, false, false, 51))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "nom", [], "any", false, false, false, 51), "html", null, true);
                echo " icon\" class=\"cat-icon\">
\t\t\t\t\t\t\t<span class=\"badge badge-secondary cat-length\">";
                // line 52
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "articles", [], "any", false, false, false, 52)), "html", null, true);
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 56
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t\t</ul>
\t\t<p>
\t\t\tLa memoria es finita, y para no olvidar, eso que un día aprendimos, pero ya no usamos con la suficiente frecuencia para recordarlo, aquí queda eso de lo que hablamos. Y si algo no esta aquí, es porque ya tardas en enseñárnoslo.
\t\t</p>
\t</div>
</section>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  215 => 57,  209 => 56,  202 => 52,  196 => 51,  188 => 50,  185 => 49,  182 => 48,  178 => 47,  175 => 46,  169 => 45,  162 => 41,  156 => 40,  148 => 39,  145 => 38,  142 => 37,  138 => 36,  135 => 35,  129 => 34,  122 => 30,  116 => 29,  108 => 28,  105 => 27,  102 => 26,  98 => 25,  95 => 24,  89 => 23,  82 => 19,  76 => 18,  68 => 17,  65 => 16,  62 => 15,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"hard-skills\">
\t<h1 class=\"titulo\">Reconócelo! Si estás en las TIC, eres Nerd!</h1>
\t<div class=\"text\">
\t\t<p>
\t\t\tFuturo se escribe en binario, y el binario ya es obsoleto cuando hablamos de computación cuántica.<br/>
\t\t\tBienvenido al mundo de los Full Stack Developers, esos tontos que para aprender a hacer una cosa tuvieron que aprender muchas otras, y cuando creías que ya lo tenías, apareció otra mejor. 
\t\t</p>
\t\t<p>
\t\t\tDesde el navegador, al servidor, pasando por bases de datos y sistemas.  De frontend a backend mezclando una gran lista de tecnologías e idiomas de programación.<br/>
\t\t\tY es que si algo hemos aprendido, es que no hay ninguno perfecto, cada uno es bueno en lo suyo y el mejor para según que proyecto.
\t\t</p>

\t\t<ul class=\"cat-list\">
\t\t\t{% for cat in categories_frontend %}
\t\t\t\t{% if cat.articles|length > 0 %}
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('articles_categoria', {cat_name: cat.nom}) }}\" alt\"Enlace a artículos de la categoría {{cat.nom}}\" title=\"Ver artículos de {{cat.nom}}\">
\t\t\t\t\t\t\t<img src=\"{{ asset(\"img/categories/\" ~ cat.logo) }}\" alt=\"{{cat.nom}} icon\" class=\"cat-icon\">
\t\t\t\t\t\t\t<span class=\"badge badge-secondary cat-length\">{{cat.articles|length }}</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t{% endfor %}

\t\t\t{% for cat in categories_backend %}
\t\t\t\t{% if cat.articles|length > 0 %}
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('articles_categoria', {cat_name: cat.nom}) }}\" alt\"Enlace a artículos de la categoría {{cat.nom}}\" title=\"Ver artículos de {{cat.nom}}\">
\t\t\t\t\t\t\t<img src=\"{{ asset(\"img/categories/\" ~ cat.logo) }}\" alt=\"{{cat.nom}} icon\" class=\"cat-icon\">
\t\t\t\t\t\t\t<span class=\"badge badge-secondary cat-length\">{{cat.articles|length }}</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t{% endfor %}

\t\t\t{% for cat in categories_sistemes %}
\t\t\t\t{% if cat.articles|length > 0 %}
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('articles_categoria', {cat_name: cat.nom}) }}\" alt\"Enlace a artículos de la categoría {{cat.nom}}\" title=\"Ver artículos de {{cat.nom}}\">
\t\t\t\t\t\t\t<img src=\"{{ asset(\"img/categories/\" ~ cat.logo) }}\" alt=\"{{cat.nom}} icon\" class=\"cat-icon\">
\t\t\t\t\t\t\t<span class=\"badge badge-secondary cat-length\">{{cat.articles|length }}</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t{% endfor %}

\t\t\t\t\t\t{% for cat in categories_altres %}
\t\t\t\t{% if cat.articles|length > 0 %}
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('articles_categoria', {cat_name: cat.nom}) }}\" alt\"Enlace a artículos de la categoría {{cat.nom}}\" title=\"Ver artículos de {{cat.nom}}\">
\t\t\t\t\t\t\t<img src=\"{{ asset(\"img/categories/\" ~ cat.logo) }}\" alt=\"{{cat.nom}} icon\" class=\"cat-icon\">
\t\t\t\t\t\t\t<span class=\"badge badge-secondary cat-length\">{{cat.articles|length }}</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t{% endfor %}
\t\t</ul>
\t\t<p>
\t\t\tLa memoria es finita, y para no olvidar, eso que un día aprendimos, pero ya no usamos con la suficiente frecuencia para recordarlo, aquí queda eso de lo que hablamos. Y si algo no esta aquí, es porque ya tardas en enseñárnoslo.
\t\t</p>
\t</div>
</section>
", "home/ca_section_2.html.twig", "C:\\xampp\\htdocs\\symfony\\projecte_DAW\\symfony\\templates\\home\\ca_section_2.html.twig");
    }
}
