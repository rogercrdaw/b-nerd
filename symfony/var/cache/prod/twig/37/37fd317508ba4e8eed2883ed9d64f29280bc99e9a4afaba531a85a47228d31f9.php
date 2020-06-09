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

/* admin/llistarComentaris.html.twig */
class __TwigTemplate_f1f859b6225a00a44d835ee256130b8c2ea4c46f829202458f4749b36720063a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/llistarComentaris.html.twig", 1);
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
\t\t<h1 class=\"titulo\">Llista de comentaris</h1>


\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comentaris"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 13
            echo "
\t\t\t<p class=\"admin-comments\">

\t\t\t\t";
            // line 16
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["comment"], "tipus", [], "any", false, false, false, 16), 0)) {
                // line 17
                echo "\t\t\t\t\t<i class=\"fa fa-frown-o\"></i>
\t\t\t\t";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 18
$context["comment"], "tipus", [], "any", false, false, false, 18), 1)) {
                // line 19
                echo "\t\t\t\t\t<i class=\"fa fa-meh-o\"></i>
\t\t\t\t";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 20
$context["comment"], "tipus", [], "any", false, false, false, 20), 2)) {
                // line 21
                echo "\t\t\t\t\t<i class=\"fa fa-smile-o\"></i>
\t\t\t\t";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 22
$context["comment"], "tipus", [], "any", false, false, false, 22), 3)) {
                // line 23
                echo "\t\t\t\t\t<i class=\"fa fa-rocket\"></i>
\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 25), "username", [], "any", false, false, false, 25), "html", null, true);
            echo " el ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "dataPublicacio", [], "any", false, false, false, 25), "d/m/Y"), "html", null, true);
            echo " a <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_detall", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "article", [], "any", false, false, false, 25), "slug", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\" alt=\"Veure article ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "article", [], "any", false, false, false, 25), "titol", [], "any", false, false, false, 25), "html", null, true);
            echo "\" title=\"Veure article\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "article", [], "any", false, false, false, 25), "titol", [], "any", false, false, false, 25), "html", null, true);
            echo "</a><br/>
\t\t\t\t\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "text", [], "any", false, false, false, 26), "html", null, true);
            echo "\"<br/>
\t\t\t\t\t";
            // line 27
            if (twig_get_attribute($this->env, $this->source, $context["comment"], "visible", [], "any", false, false, false, 27)) {
                // line 28
                echo "\t\t\t\t\t\t✔ Aquest comentari es visible al article (<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPublicarComentari", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                echo "\" alt=\"Publicar comentarí\">amagar</a>
\t\t\t\t\t\t";
            } else {
                // line 30
                echo "\t\t\t\t\t\t✖ Comentari no visible al article (<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPublicarComentari", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                echo "\" alt=\"Amagar comentari\">publicar</a>
\t\t\t\t\t";
            }
            // line 32
            echo "\t\t\t\t, <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminEditarComentari", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" alt=\"Moderar comentari\">moderar</a>
\t\t\t\t o <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminEliminarComentari", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 33), "autor" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 33), "username", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\" alt=\"Eliminar comentari\">eliminar</a>
\t\t\t\t comentari)
\t\t\t</p>

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
\t</section>
";
    }

    public function getTemplateName()
    {
        return "admin/llistarComentaris.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 38,  135 => 33,  130 => 32,  124 => 30,  118 => 28,  116 => 27,  112 => 26,  99 => 25,  95 => 23,  93 => 22,  90 => 21,  88 => 20,  85 => 19,  83 => 18,  80 => 17,  78 => 16,  73 => 13,  69 => 12,  62 => 7,  58 => 6,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/llistarComentaris.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/admin/llistarComentaris.html.twig");
    }
}
