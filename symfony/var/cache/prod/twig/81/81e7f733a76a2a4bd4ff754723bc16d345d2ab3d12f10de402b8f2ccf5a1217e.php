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

/* user/register.html.twig */
class __TwigTemplate_bdf2067c236371e292a61fb43cb5f9582e2dd9c4478009d834871ecb1449cd6f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "user/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\tB-NERDS! Registre
";
    }

    // line 8
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "\t";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
";
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "\t<section>
\t\t<h1 class=\"titulo\">
\t\t\tFormulari d'alta nou usuari
\t\t</h1>

\t\t";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_start');
        echo "

\t\t";
        // line 21
        echo "\t\t<div class=\"form-alert-errors\">
\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "nom", [], "any", false, false, false, 22), 'errors');
        echo "
\t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "cognom", [], "any", false, false, false, 23), 'errors');
        echo "
\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 24), 'errors');
        echo "
\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "nom_usuari", [], "any", false, false, false, 25), 'errors');
        echo "
\t\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 26), 'errors');
        echo "
\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "agreeTerms", [], "any", false, false, false, 27), 'errors');
        echo "
\t\t</div>
\t\t";
        // line 30
        echo "

\t\t<div class=\"form-group\">
\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "nom", [], "any", false, false, false, 33), 'label');
        echo "
\t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "nom", [], "any", false, false, false, 34), 'widget');
        echo "
\t\t\t<p class=\"help-text\"></p>
\t\t\t<p class=\"form-error-text\"></p>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "cognom", [], "any", false, false, false, 39), 'label');
        echo "
\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "cognom", [], "any", false, false, false, 40), 'widget');
        echo "
\t\t\t<p class=\"help-text\"></p>
\t\t\t<p class=\"form-error-text\"></p>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 46), 'label');
        echo "
\t\t\t";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 47), 'widget');
        echo "
\t\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 48), 'help');
        echo "
\t\t\t<p class=\"form-error-text\"></p>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "nom_usuari", [], "any", false, false, false, 52), 'label');
        echo "
\t\t\t";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "nom_usuari", [], "any", false, false, false, 53), 'widget');
        echo "
\t\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "nom_usuari", [], "any", false, false, false, 54), 'help');
        echo "
\t\t\t<p class=\"form-error-text\"></p>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 58), 'label');
        echo "
\t\t\t";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 59), 'widget');
        echo "
\t\t\t";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 60), 'help');
        echo "
\t\t\t<p class=\"form-error-text\"></p>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "pass2", [], "any", false, false, false, 64), 'label');
        echo "
\t\t\t";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "pass2", [], "any", false, false, false, 65), 'widget');
        echo "
\t\t\t";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "pass2", [], "any", false, false, false, 66), 'help');
        echo "
\t\t\t<p class=\"form-error-text\"></p>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "data_naixament", [], "any", false, false, false, 71), 'label');
        echo "
\t\t\t";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "data_naixament", [], "any", false, false, false, 72), 'widget');
        echo "
\t\t\t";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "data_naixament", [], "any", false, false, false, 73), 'help');
        echo "
\t\t\t<p class=\"form-error-text\"></p>
\t\t</div>

\t\t";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "agreeTerms", [], "any", false, false, false, 77), 'widget');
        echo "
\t\t<label for=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "agreeTerms", [], "any", false, false, false, 78), "vars", [], "any", false, false, false, 78), "id", [], "any", false, false, false, 78), "html", null, true);
        echo "\">Accepto els
\t\t\t<a target=\"_blank\" alt=\"Enllaç a termes i condicions\" href=\"https://www.rocketlawyer.com/es/es/sem/condiciones-generales-de-venta-de-bienes-o-servicios-en-internet?gclid=CjwKCAjw7-P1BRA2EiwAXoPWAzOX8S3UChlVLnffxHLx4KZ-t448B4BqRfwQuCF3WJSpFVgHr3aa-BoCNM4QAvD_BwE\">termes i condicions</a>
\t\t</label>
\t\t<br/>

\t\t<button class=\"btn btn-outline-secondary\">Register</button>
\t\t<button class=\"btn btn-outline-secondary\" type=\"button\" onclick=\"location.href='";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "'\">Cancel·la</button>

\t\t";
        // line 86
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_end');
        echo "
\t</section>
";
    }

    public function getTemplateName()
    {
        return "user/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 86,  231 => 84,  222 => 78,  218 => 77,  211 => 73,  207 => 72,  203 => 71,  195 => 66,  191 => 65,  187 => 64,  180 => 60,  176 => 59,  172 => 58,  165 => 54,  161 => 53,  157 => 52,  150 => 48,  146 => 47,  142 => 46,  133 => 40,  129 => 39,  121 => 34,  117 => 33,  112 => 30,  107 => 27,  103 => 26,  99 => 25,  95 => 24,  91 => 23,  87 => 22,  84 => 21,  79 => 18,  72 => 13,  68 => 12,  61 => 9,  57 => 8,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/register.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/user/register.html.twig");
    }
}
