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

/* user/login.html.twig */
class __TwigTemplate_63f9efe58aaa520e5b1402d27575ef647ca49abe2d40752d00593b841ac2d3ff extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "user/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\tB-NERDS! Login
";
    }

    // line 7
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "\t";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "\t<section>
\t\t<form method=\"post\">

\t\t\t<h1 class=\"titulo\">
\t\t\t\tRegistre d'usuaris
\t\t\t</h1>

\t\t\t";
        // line 19
        if ((isset($context["tokenPendent"]) || array_key_exists("tokenPendent", $context))) {
            // line 20
            echo "\t\t\t\t";
            if (($context["tokenPendent"] ?? null)) {
                // line 21
                echo "\t\t\t\t\t<div class=\"form-alert-errors\">T'hem enviat un mail i estas pendent de verificació</div>
\t\t\t\t";
            } else {
                // line 23
                echo "\t\t\t\t\t<div class=\"alert alert-success\">Gracies per registrar-te. Fes login i disfruta</div>
\t\t\t\t";
            }
            // line 25
            echo "\t\t\t";
        }
        // line 26
        echo "

\t\t\t";
        // line 28
        if (($context["error"] ?? null)) {
            // line 29
            echo "\t\t\t\t<div class=\"form-alert-errors\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 29), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 29), "security"), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 31
        echo "
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"inputEmail\">Email</label>
\t\t\t\t<input type=\"email\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"inputPassword\">Password</label>
\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>
\t\t\t</div>

\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

\t\t\t<button class=\"btn btn-block btn-outline-secondary\" type=\"submit\">
\t\t\t\tEntrar !
\t\t\t</button>

\t\t</form>
\t\t";
        // line 51
        echo "\t\t<p class=\"text\">Encara no t'has registrar? a que esperas,
\t\t\t<a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" alt=\"Enllaç al formulari de registre\" title=\"Registre't\">Uneixte al club !</a>
\t\t</p>
\t</section>
";
    }

    public function getTemplateName()
    {
        return "user/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 52,  135 => 51,  125 => 42,  114 => 34,  109 => 31,  103 => 29,  101 => 28,  97 => 26,  94 => 25,  90 => 23,  86 => 21,  83 => 20,  81 => 19,  72 => 12,  68 => 11,  61 => 8,  57 => 7,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/login.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/user/login.html.twig");
    }
}
