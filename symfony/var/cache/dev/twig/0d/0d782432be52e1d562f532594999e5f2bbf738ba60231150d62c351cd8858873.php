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
class __TwigTemplate_2d541c7150257edc0765e2cca28aa2668d16860151f98cc7d33df441b923c6fb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/form_nou_article.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/form_nou_article.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "articles/form_nou_article.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 4
        echo "\t";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "
\t<section id=\"menu_item_section_name_4\">
\t\t<h1 class=\"titulo\">
\t\t\tNou Article
\t\t</h1>

\t\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 14, $this->source); })()), "titol", [], "any", false, false, false, 14), 'errors');
        echo "
\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 15, $this->source); })()), "resum", [], "any", false, false, false, 15), 'errors');
        echo "
\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 16, $this->source); })()), "meta_tag", [], "any", false, false, false, 16), 'errors');
        echo "
\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 17, $this->source); })()), "meta_description", [], "any", false, false, false, 17), 'errors');
        echo "
\t\t";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 18, $this->source); })()), "categoria1", [], "any", false, false, false, 18), 'errors');
        echo "
\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 19, $this->source); })()), "contingut", [], "any", false, false, false, 19), 'errors');
        echo "

\t\t";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 21, $this->source); })()), 'form_start');
        echo "
\t\t<div class=\"form-group\">
\t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 23, $this->source); })()), "titol", [], "any", false, false, false, 23), 'label');
        echo "
\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 24, $this->source); })()), "titol", [], "any", false, false, false, 24), 'widget');
        echo "
\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 25, $this->source); })()), "titol", [], "any", false, false, false, 25), 'help');
        echo "
\t\t\t<p class=\"form-error-text\"></p>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 29, $this->source); })()), "resum", [], "any", false, false, false, 29), 'label');
        echo "
\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 30, $this->source); })()), "resum", [], "any", false, false, false, 30), 'widget');
        echo "
\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 31, $this->source); })()), "resum", [], "any", false, false, false, 31), 'help');
        echo "
\t\t\t<p class=\"form-error-text\"></p>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 35, $this->source); })()), "meta_tag", [], "any", false, false, false, 35), 'label');
        echo "
\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 36, $this->source); })()), "meta_tag", [], "any", false, false, false, 36), 'widget');
        echo "
\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 37, $this->source); })()), "meta_tag", [], "any", false, false, false, 37), 'help');
        echo "
\t\t\t<p class=\"form-error-text\"></p>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 41, $this->source); })()), "meta_description", [], "any", false, false, false, 41), 'label');
        echo "
\t\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 42, $this->source); })()), "meta_description", [], "any", false, false, false, 42), 'widget');
        echo "
\t\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 43, $this->source); })()), "meta_description", [], "any", false, false, false, 43), 'help');
        echo "
\t\t\t<p class=\"form-error-text\"></p>
\t\t</div>

\t\t<div class=\"form-group form-row\" id=\"article_categories\">
\t\t\t<p id=\"article_categories_help\" class=\"form-warning-text\">Si vols afegir una categoria que s'ajusti mes al contingut de l'article, guarda l'article com a esborrany i al panell d'administració afegeix la nova categoria amb el seu nom, logotip, tipus i color corresponent.</p>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 50, $this->source); })()), "categoria1", [], "any", false, false, false, 50), 'label');
        echo "
\t\t\t\t";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 51, $this->source); })()), "categoria1", [], "any", false, false, false, 51), 'widget');
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 54, $this->source); })()), "categoria2", [], "any", false, false, false, 54), 'label');
        echo "
\t\t\t\t";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 55, $this->source); })()), "categoria2", [], "any", false, false, false, 55), 'widget');
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 58, $this->source); })()), "categoria3", [], "any", false, false, false, 58), 'label');
        echo "
\t\t\t\t";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 59, $this->source); })()), "categoria3", [], "any", false, false, false, 59), 'widget');
        echo "
\t\t\t</div>

\t\t</div>
\t\t<div class=\"form-group\" id=\"novaCategoria\" style=\"display:none\">
\t\t\t";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 64, $this->source); })()), "nova_categoria", [], "any", false, false, false, 64), 'label');
        echo "
\t\t\t";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 65, $this->source); })()), "nova_categoria", [], "any", false, false, false, 65), 'widget');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 68, $this->source); })()), "contingut", [], "any", false, false, false, 68), 'label');
        echo "
\t\t\t";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 69, $this->source); })()), "contingut", [], "any", false, false, false, 69), 'widget');
        echo "
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 73, $this->source); })()), "html", [], "any", false, false, false, 73), 'label');
        echo "
\t\t\t";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 74, $this->source); })()), "html", [], "any", false, false, false, 74), 'widget');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 77, $this->source); })()), "css", [], "any", false, false, false, 77), 'label');
        echo "
\t\t\t";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 78, $this->source); })()), "css", [], "any", false, false, false, 78), 'widget');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 81, $this->source); })()), "js", [], "any", false, false, false, 81), 'label');
        echo "
\t\t\t";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 82, $this->source); })()), "js", [], "any", false, false, false, 82), 'widget');
        echo "
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 86, $this->source); })()), "visible", [], "any", false, false, false, 86), 'label');
        echo "
\t\t\t";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 87, $this->source); })()), "visible", [], "any", false, false, false, 87), 'widget');
        echo "
\t\t</div>


\t\t";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 91, $this->source); })()), 'widget');
        echo "

\t\t<button id=\"articleSubmit\" class=\"btn btn-outline-secondary\">";
        // line 93
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 93, $this->source); })()), "guardar dades")) : ("guardar dades")), "html", null, true);
        echo "</button>
\t\t<button class=\"btn btn-outline-secondary\" type=\"button\" onclick=\"location.href='";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "'\">Cancel·la</button>

\t\t";
        // line 96
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 96, $this->source); })()), 'form_end');
        echo "

\t</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  302 => 96,  297 => 94,  293 => 93,  288 => 91,  281 => 87,  277 => 86,  270 => 82,  266 => 81,  260 => 78,  256 => 77,  250 => 74,  246 => 73,  239 => 69,  235 => 68,  229 => 65,  225 => 64,  217 => 59,  213 => 58,  207 => 55,  203 => 54,  197 => 51,  193 => 50,  183 => 43,  179 => 42,  175 => 41,  168 => 37,  164 => 36,  160 => 35,  153 => 31,  149 => 30,  145 => 29,  138 => 25,  134 => 24,  130 => 23,  125 => 21,  120 => 19,  116 => 18,  112 => 17,  108 => 16,  104 => 15,  100 => 14,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block navbar %}
\t{{ include('menu.html.twig') }}
{% endblock %}

{% block content %}

\t<section id=\"menu_item_section_name_4\">
\t\t<h1 class=\"titulo\">
\t\t\tNou Article
\t\t</h1>

\t\t{{form_errors(formArticle.titol) }}
\t\t{{ form_errors(formArticle.resum) }}
\t\t{{ form_errors(formArticle.meta_tag) }}
\t\t{{ form_errors(formArticle.meta_description) }}
\t\t{{ form_errors(formArticle.categoria1) }}
\t\t{{ form_errors(formArticle.contingut) }}

\t\t{{ form_start(formArticle) }}
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(formArticle.titol) }}
\t\t\t{{ form_widget(formArticle.titol) }}
\t\t\t{{ form_help(formArticle.titol) }}
\t\t\t<p class=\"form-error-text\"></p>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(formArticle.resum) }}
\t\t\t{{ form_widget(formArticle.resum) }}
\t\t\t{{ form_help(formArticle.resum) }}
\t\t\t<p class=\"form-error-text\"></p>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(formArticle.meta_tag) }}
\t\t\t{{ form_widget(formArticle.meta_tag) }}
\t\t\t{{ form_help(formArticle.meta_tag) }}
\t\t\t<p class=\"form-error-text\"></p>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(formArticle.meta_description) }}
\t\t\t{{ form_widget(formArticle.meta_description) }}
\t\t\t{{ form_help(formArticle.meta_description) }}
\t\t\t<p class=\"form-error-text\"></p>
\t\t</div>

\t\t<div class=\"form-group form-row\" id=\"article_categories\">
\t\t\t<p id=\"article_categories_help\" class=\"form-warning-text\">Si vols afegir una categoria que s'ajusti mes al contingut de l'article, guarda l'article com a esborrany i al panell d'administració afegeix la nova categoria amb el seu nom, logotip, tipus i color corresponent.</p>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t{{ form_label(formArticle.categoria1) }}
\t\t\t\t{{ form_widget(formArticle.categoria1) }}
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t{{ form_label(formArticle.categoria2) }}
\t\t\t\t{{ form_widget(formArticle.categoria2) }}
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t{{ form_label(formArticle.categoria3) }}
\t\t\t\t{{ form_widget(formArticle.categoria3) }}
\t\t\t</div>

\t\t</div>
\t\t<div class=\"form-group\" id=\"novaCategoria\" style=\"display:none\">
\t\t\t{{ form_label(formArticle.nova_categoria) }}
\t\t\t{{ form_widget(formArticle.nova_categoria) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(formArticle.contingut) }}
\t\t\t{{ form_widget(formArticle.contingut) }}
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t{{ form_label(formArticle.html) }}
\t\t\t{{ form_widget(formArticle.html) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(formArticle.css) }}
\t\t\t{{ form_widget(formArticle.css) }}
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t{{ form_label(formArticle.js) }}
\t\t\t{{ form_widget(formArticle.js) }}
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t{{ form_label(formArticle.visible) }}
\t\t\t{{ form_widget(formArticle.visible) }}
\t\t</div>


\t\t{{ form_widget(formArticle) }}

\t\t<button id=\"articleSubmit\" class=\"btn btn-outline-secondary\">{{ button_label|default('guardar dades') }}</button>
\t\t<button class=\"btn btn-outline-secondary\" type=\"button\" onclick=\"location.href='{{ path('admin') }}'\">Cancel·la</button>

\t\t{{ form_end(formArticle) }}

\t</section>

{% endblock %}
", "articles/form_nou_article.html.twig", "C:\\xampp\\htdocs\\symfony\\projecte_DAW\\symfony\\templates\\articles\\form_nou_article.html.twig");
    }
}
