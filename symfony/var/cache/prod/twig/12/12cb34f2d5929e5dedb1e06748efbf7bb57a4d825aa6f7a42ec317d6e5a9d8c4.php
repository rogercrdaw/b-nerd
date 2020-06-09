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

/* articles/form_nou_article.html.twig */
class __TwigTemplate_592280c5d09c43fc13995eec7be7f01080b647473ae6aef71c2a018a36fb5d08 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "articles/form_nou_article.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
\t<section id=\"menu_item_section_name_4\">
\t\t<h1 class=\"titulo\">
\t\t\tNou Article
\t\t</h1>

\t\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "titol", [], "any", false, false, false, 14), 'errors');
        echo "
\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "resum", [], "any", false, false, false, 15), 'errors');
        echo "
\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "meta_tag", [], "any", false, false, false, 16), 'errors');
        echo "
\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "meta_description", [], "any", false, false, false, 17), 'errors');
        echo "
\t\t";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "categoria1", [], "any", false, false, false, 18), 'errors');
        echo "
\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "contingut", [], "any", false, false, false, 19), 'errors');
        echo "

\t\t";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formArticle"] ?? null), 'form_start');
        echo "
\t\t<div class=\"form-group\">
\t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "titol", [], "any", false, false, false, 23), 'label');
        echo "
\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "titol", [], "any", false, false, false, 24), 'widget');
        echo "
\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "titol", [], "any", false, false, false, 25), 'help');
        echo "
\t\t\t<p class=\"form-error-text\"></p>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "resum", [], "any", false, false, false, 29), 'label');
        echo "
\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "resum", [], "any", false, false, false, 30), 'widget');
        echo "
\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "resum", [], "any", false, false, false, 31), 'help');
        echo "
\t\t\t<p class=\"form-error-text\"></p>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "meta_tag", [], "any", false, false, false, 35), 'label');
        echo "
\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "meta_tag", [], "any", false, false, false, 36), 'widget');
        echo "
\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "meta_tag", [], "any", false, false, false, 37), 'help');
        echo "
\t\t\t<p class=\"form-error-text\"></p>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "meta_description", [], "any", false, false, false, 41), 'label');
        echo "
\t\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "meta_description", [], "any", false, false, false, 42), 'widget');
        echo "
\t\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "meta_description", [], "any", false, false, false, 43), 'help');
        echo "
\t\t\t<p class=\"form-error-text\"></p>
\t\t</div>

\t\t<div class=\"form-group form-row\" id=\"article_categories\">
\t\t\t<p id=\"article_categories_help\" class=\"form-warning-text\">Si vols afegir una categoria que s'ajusti mes al contingut de l'article, guarda l'article com a esborrany i al panell d'administració afegeix la nova categoria amb el seu nom, logotip, tipus i color corresponent.</p>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "categoria1", [], "any", false, false, false, 50), 'label');
        echo "
\t\t\t\t";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "categoria1", [], "any", false, false, false, 51), 'widget');
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "categoria2", [], "any", false, false, false, 54), 'label');
        echo "
\t\t\t\t";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "categoria2", [], "any", false, false, false, 55), 'widget');
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "categoria3", [], "any", false, false, false, 58), 'label');
        echo "
\t\t\t\t";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "categoria3", [], "any", false, false, false, 59), 'widget');
        echo "
\t\t\t</div>

\t\t</div>
\t\t<div class=\"form-group\" id=\"novaCategoria\" style=\"display:none\">
\t\t\t";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "nova_categoria", [], "any", false, false, false, 64), 'label');
        echo "
\t\t\t";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "nova_categoria", [], "any", false, false, false, 65), 'widget');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "contingut", [], "any", false, false, false, 68), 'label');
        echo "
\t\t\t";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "contingut", [], "any", false, false, false, 69), 'widget');
        echo "
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "html", [], "any", false, false, false, 73), 'label');
        echo "
\t\t\t";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "html", [], "any", false, false, false, 74), 'widget');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "css", [], "any", false, false, false, 77), 'label');
        echo "
\t\t\t";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "css", [], "any", false, false, false, 78), 'widget');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "js", [], "any", false, false, false, 81), 'label');
        echo "
\t\t\t";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "js", [], "any", false, false, false, 82), 'widget');
        echo "
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "visible", [], "any", false, false, false, 86), 'label');
        echo "
\t\t\t";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formArticle"] ?? null), "visible", [], "any", false, false, false, 87), 'widget');
        echo "
\t\t</div>


\t\t";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formArticle"] ?? null), 'widget');
        echo "

\t\t<button id=\"articleSubmit\" class=\"btn btn-outline-secondary\">";
        // line 93
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter(($context["button_label"] ?? null), "guardar dades")) : ("guardar dades")), "html", null, true);
        echo "</button>
\t\t<button class=\"btn btn-outline-secondary\" type=\"button\" onclick=\"location.href='";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "'\">Cancel·la</button>

\t\t";
        // line 96
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formArticle"] ?? null), 'form_end');
        echo "

\t</section>

";
    }

    public function getTemplateName()
    {
        return "articles/form_nou_article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 96,  267 => 94,  263 => 93,  258 => 91,  251 => 87,  247 => 86,  240 => 82,  236 => 81,  230 => 78,  226 => 77,  220 => 74,  216 => 73,  209 => 69,  205 => 68,  199 => 65,  195 => 64,  187 => 59,  183 => 58,  177 => 55,  173 => 54,  167 => 51,  163 => 50,  153 => 43,  149 => 42,  145 => 41,  138 => 37,  134 => 36,  130 => 35,  123 => 31,  119 => 30,  115 => 29,  108 => 25,  104 => 24,  100 => 23,  95 => 21,  90 => 19,  86 => 18,  82 => 17,  78 => 16,  74 => 15,  70 => 14,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "articles/form_nou_article.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/articles/form_nou_article.html.twig");
    }
}
