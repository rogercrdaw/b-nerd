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
class __TwigTemplate_f873c73601fd8dcbe1fb8fe93bff205d98f5dd1d09c22c52693fc856c53197ab extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tB-NERDS! Login
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 8
        echo "\t";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "\t<section>
\t\t<form method=\"post\">

\t\t\t<h1 class=\"titulo\">
\t\t\t\tIniciar sesión
\t\t\t</h1>

\t\t\t";
        // line 19
        if ((isset($context["tokenPendent"]) || array_key_exists("tokenPendent", $context))) {
            // line 20
            echo "\t\t\t\t";
            if ((isset($context["tokenPendent"]) || array_key_exists("tokenPendent", $context) ? $context["tokenPendent"] : (function () { throw new RuntimeError('Variable "tokenPendent" does not exist.', 20, $this->source); })())) {
                // line 21
                echo "\t\t\t\t\t<div class=\"form-alert-errors\">Te hemos enviado un mail y estas pendiente de verificación</div>
\t\t\t\t";
            } else {
                // line 23
                echo "\t\t\t\t\t<div class=\"alert alert-success\">Grácias por registrarte. Haz login y disfruta</div>
\t\t\t\t";
            }
            // line 25
            echo "\t\t\t";
        }
        // line 26
        echo "

\t\t\t";
        // line 28
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 28, $this->source); })())) {
            // line 29
            echo "\t\t\t\t<div class=\"form-alert-errors\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 29, $this->source); })()), "messageKey", [], "any", false, false, false, 29), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 29, $this->source); })()), "messageData", [], "any", false, false, false, 29), "security"), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 31
        echo "
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"inputEmail\">Email</label>
\t\t\t\t<input type=\"email\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 34, $this->source); })()), "html", null, true);
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
        echo "\t\t<p class=\"text\">Todavía no te has registrado? A que esperas,
\t\t\t<a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" alt=\"Enllaç al formulari de registre\" title=\"Registre't\">Únete al club!</a>
\t\t</p>
\t</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  180 => 52,  177 => 51,  167 => 42,  156 => 34,  151 => 31,  145 => 29,  143 => 28,  139 => 26,  136 => 25,  132 => 23,  128 => 21,  125 => 20,  123 => 19,  114 => 12,  104 => 11,  91 => 8,  81 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\tB-NERDS! Login
{% endblock %}

{% block navbar %}
\t{{ include('menu.html.twig') }}
{% endblock %}

{% block content %}
\t<section>
\t\t<form method=\"post\">

\t\t\t<h1 class=\"titulo\">
\t\t\t\tIniciar sesión
\t\t\t</h1>

\t\t\t{% if tokenPendent is defined %}
\t\t\t\t{% if tokenPendent %}
\t\t\t\t\t<div class=\"form-alert-errors\">Te hemos enviado un mail y estas pendiente de verificación</div>
\t\t\t\t{% else %}
\t\t\t\t\t<div class=\"alert alert-success\">Grácias por registrarte. Haz login y disfruta</div>
\t\t\t\t{% endif %}
\t\t\t{% endif %}


\t\t\t{% if error %}
\t\t\t\t<div class=\"form-alert-errors\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t{% endif %}

\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"inputEmail\">Email</label>
\t\t\t\t<input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"inputPassword\">Password</label>
\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>
\t\t\t</div>

\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

\t\t\t<button class=\"btn btn-block btn-outline-secondary\" type=\"submit\">
\t\t\t\tEntrar !
\t\t\t</button>

\t\t</form>
\t\t{# <button type=\"button\" class=\"btn btn-block btn-outline-secondary\" onclick=\"location.href='{{ path('app_register') }}'\"> Registra`t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button> #}
\t\t<p class=\"text\">Todavía no te has registrado? A que esperas,
\t\t\t<a href=\"{{ path('app_register') }}\" alt=\"Enllaç al formulari de registre\" title=\"Registre't\">Únete al club!</a>
\t\t</p>
\t</section>
{% endblock %}
", "user/login.html.twig", "C:\\xampp\\htdocs\\symfony\\projecte_DAW\\symfony\\templates\\user\\login.html.twig");
    }
}
