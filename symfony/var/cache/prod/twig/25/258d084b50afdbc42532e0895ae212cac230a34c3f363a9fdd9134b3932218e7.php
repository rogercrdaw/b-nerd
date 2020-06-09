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

/* admin/adminEditarCategoria.html.twig */
class __TwigTemplate_af39a6d3875ec15a6d4dd97d36ca6f242fa5050342e748da1d174cd5e7366422 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/adminEditarCategoria.html.twig", 1);
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
\t<section class=\"onepage\">
\t\t<h1>Editar Categoria</h1>

\t\t";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["adminEditarCategoria"] ?? null), 'form_start');
        echo "
\t\t<div class=\"form-group\">
\t\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["adminEditarCategoria"] ?? null), "nom", [], "any", false, false, false, 13), 'label');
        echo "
\t\t\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["adminEditarCategoria"] ?? null), "nom", [], "any", false, false, false, 14), 'widget');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["adminEditarCategoria"] ?? null), "tipus", [], "any", false, false, false, 17), 'label');
        echo "
\t\t\t";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["adminEditarCategoria"] ?? null), "tipus", [], "any", false, false, false, 18), 'widget');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["adminEditarCategoria"] ?? null), "logo", [], "any", false, false, false, 21), 'label');
        echo "
\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["adminEditarCategoria"] ?? null), "logo", [], "any", false, false, false, 22), 'widget');
        echo "
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["adminEditarCategoria"] ?? null), "color", [], "any", false, false, false, 25), 'label');
        echo "
\t\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["adminEditarCategoria"] ?? null), "color", [], "any", false, false, false, 26), 'widget');
        echo "
\t\t</div>
\t\t<button class=\"btn btn-outline-secondary\">";
        // line 28
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter(($context["button_label"] ?? null), "guardar canvis")) : ("guardar canvis")), "html", null, true);
        echo "</button>
\t\t<button class=\"btn btn-outline-secondary\" type=\"button\" onclick=\"location.href='";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminCategories");
        echo "'\">Cancel·la</button>

\t\t";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["adminEditarCategoria"] ?? null), 'form_end');
        echo "
\t</section>

";
    }

    public function getTemplateName()
    {
        return "admin/adminEditarCategoria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 31,  116 => 29,  112 => 28,  107 => 26,  103 => 25,  97 => 22,  93 => 21,  87 => 18,  83 => 17,  77 => 14,  73 => 13,  68 => 11,  62 => 7,  58 => 6,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/adminEditarCategoria.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/admin/adminEditarCategoria.html.twig");
    }
}
