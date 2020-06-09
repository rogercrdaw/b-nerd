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

/* admin/adminEditarArticle.html.twig */
class __TwigTemplate_d3c833c64c5b72faa057106b08230f2f2a25db46a1d679c4f1a5987fe07d6e73 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/adminEditarArticle.html.twig", 1);
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
\t\t<h1 class=\"titulo\">Editar Article</h1>

\t\t";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["adminEditarArticle"] ?? null), 'form_start');
        echo "
\t\t<div class=\"form-group form-row\">

\t\t\t<div class=\"col-md-6\">
\t\t\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["adminEditarArticle"] ?? null), "data_publicacio", [], "any", false, false, false, 15), 'label');
        echo "
\t\t\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["adminEditarArticle"] ?? null), "data_publicacio", [], "any", false, false, false, 16), 'widget');
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["adminEditarArticle"] ?? null), "data_actualitzacio", [], "any", false, false, false, 19), 'label');
        echo "
\t\t\t\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["adminEditarArticle"] ?? null), "data_actualitzacio", [], "any", false, false, false, 20), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group form-row\">
\t\t\t<div class=\"col-md-6\">

\t\t\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["adminEditarArticle"] ?? null), "autor", [], "any", false, false, false, 26), 'label');
        echo "
\t\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["adminEditarArticle"] ?? null), "autor", [], "any", false, false, false, 27), 'widget');
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["adminEditarArticle"] ?? null), "visible", [], "any", false, false, false, 30), 'label');
        echo "
\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["adminEditarArticle"] ?? null), "visible", [], "any", false, false, false, 31), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<button type=\"submit\" class=\"btn btn-outline-secondary\" alt=\"Confirmar l'actualització de dades\">guardar</button>
\t\t<a class=\"btn btn-outline-secondary\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_detall", ["slug" => twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "slug", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\" alt=\"Enllaç a la pàgina del article\">Veure article</button>
\t\t<a class=\"btn btn-outline-secondary\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminArticles");
        echo "\"  alt=\"Tornar a l'administrador d'articles\">Cancelar</button>

\t\t";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["adminEditarArticle"] ?? null), 'form_end');
        echo "

\t</section>

";
    }

    public function getTemplateName()
    {
        return "admin/adminEditarArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 38,  123 => 36,  119 => 35,  112 => 31,  108 => 30,  102 => 27,  98 => 26,  89 => 20,  85 => 19,  79 => 16,  75 => 15,  68 => 11,  62 => 7,  58 => 6,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/adminEditarArticle.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/admin/adminEditarArticle.html.twig");
    }
}
