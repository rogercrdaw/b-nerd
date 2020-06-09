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

/* menu.html.twig */
class __TwigTemplate_32b8095785ed7038cc8cd173facf2390f933018709c74d4c754f965217e459c8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "<ul class=\"menu-user\">
\t";
        // line 2
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "user", [], "any", false, false, false, 2)) {
            // line 3
            echo "\t\t<li>
\t\t\t<a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userProfile", ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4), "username", [], "any", false, false, false, 4)]), "html", null, true);
            echo "\" alt=\"ver perfil de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4), "username", [], "any", false, false, false, 4), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 5
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "user", [], "any", false, false, false, 5), "imatge", [], "any", false, false, false, 5) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "user", [], "any", false, false, false, 5), "imatge", [], "any", false, false, false, 5)))) {
                // line 6
                echo "\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/imatges_perfil/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), "imatge", [], "any", false, false, false, 6))), "html", null, true);
                echo "\" alt=\"imagen de perfil\" id=\"img-modif\">
\t\t\t\t";
            } else {
                // line 8
                echo "\t\t\t\t\t<i class=\"menu-icon fa fa-user-circle\"></i>
\t\t\t\t";
            }
            // line 10
            echo "\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"menu-link menu-username\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userProfile", ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "username", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\" alt=\"enlace al perfil de usuario\" title=\"Ver perfil de usuario\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "username", [], "any", false, false, false, 13), "html", null, true);
            echo "</a>
\t\t</li>
\t\t<li>

\t\t\t<a class=\"menu-link logout-link\" href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" alt=\"cerrar la sessión\">
\t\t\t\tsalir
\t\t\t</a>
\t\t</li>
\t";
        } else {
            // line 22
            echo "\t\t<li>
\t\t\t<a href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" alt=\"enlace a formulario de login\">
\t\t\t\t<i class=\"menu-icon fa fa-user-circle\"></i>
\t\t\t</a>
\t\t</li>
\t";
        }
        // line 28
        echo "</ul>

<ul class=\"menu-bottom\">
\t<li>
\t\t<a class=\"menu-link scrollable active\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "#about-us\" alt=\"Pagina de inicio\">b-NERDS</a>
\t</li>
\t<li>
\t\t<a class=\"menu-link scrollable\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "#hard-skills\" alt=\"enlace a la sección de categorias\">HARD SKILLS</a>
\t</li>
\t<li>
\t\t<a class=\"menu-link scrollable\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "#how\" alt=\"enlace a la sección de presentación\">KEEP SAFE</a>
\t</li>
\t<li>
\t\t<a class=\"menu-link scrollable\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "#contact\" alt=\"enlace al formulario de contacto\">CONTACTO</a>
\t</li>

\t<li id=\"hamburgesa\">
\t\t<i class=\"menu-icon fa fa-bars\" alt=\"ver menu de navegació\"></i>
\t</li>
\t<li id=\"dark-mode\">
\t\t<i class=\"menu-icon fa fa-toggle-off\" alt=\"botón para activar o desactivar el tema oscuro\"></i>
\t</li>
\t";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "roles", [], "any", false, false, false, 50)))) {
            // line 51
            echo "\t\t<li>
\t\t\t<a class=\"menu-link\" href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\" alt=\"enlace a zona admin\">admin</a>
\t\t</li>
\t";
        }
        // line 55
        echo "

</ul>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 55,  143 => 52,  140 => 51,  138 => 50,  126 => 41,  120 => 38,  114 => 35,  108 => 32,  102 => 28,  94 => 23,  91 => 22,  83 => 17,  74 => 13,  69 => 10,  65 => 8,  59 => 6,  57 => 5,  51 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"menu-user\">
\t{% if app.user %}
\t\t<li>
\t\t\t<a href=\"{{ path('userProfile', {username: app.user.username}) }}\" alt=\"ver perfil de {{app.user.username}}\">
\t\t\t\t{% if app.user.imatge and app.user.imatge is not empty %}
\t\t\t\t\t<img src=\"{{ asset(\"img/imatges_perfil/\" ~ app.user.imatge) }}\" alt=\"imagen de perfil\" id=\"img-modif\">
\t\t\t\t{% else %}
\t\t\t\t\t<i class=\"menu-icon fa fa-user-circle\"></i>
\t\t\t\t{% endif %}
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"menu-link menu-username\" href=\"{{ path('userProfile', {username: app.user.username}) }}\" alt=\"enlace al perfil de usuario\" title=\"Ver perfil de usuario\">{{app.user.username}}</a>
\t\t</li>
\t\t<li>

\t\t\t<a class=\"menu-link logout-link\" href=\"{{ path('app_logout')}}\" alt=\"cerrar la sessión\">
\t\t\t\tsalir
\t\t\t</a>
\t\t</li>
\t{% else %}
\t\t<li>
\t\t\t<a href=\"{{ path('app_login')}}\" alt=\"enlace a formulario de login\">
\t\t\t\t<i class=\"menu-icon fa fa-user-circle\"></i>
\t\t\t</a>
\t\t</li>
\t{% endif %}
</ul>

<ul class=\"menu-bottom\">
\t<li>
\t\t<a class=\"menu-link scrollable active\" href=\"{{ path('homepage')}}#about-us\" alt=\"Pagina de inicio\">b-NERDS</a>
\t</li>
\t<li>
\t\t<a class=\"menu-link scrollable\" href=\"{{ path('homepage')}}#hard-skills\" alt=\"enlace a la sección de categorias\">HARD SKILLS</a>
\t</li>
\t<li>
\t\t<a class=\"menu-link scrollable\" href=\"{{ path('homepage')}}#how\" alt=\"enlace a la sección de presentación\">KEEP SAFE</a>
\t</li>
\t<li>
\t\t<a class=\"menu-link scrollable\" href=\"{{ path('homepage')}}#contact\" alt=\"enlace al formulario de contacto\">CONTACTO</a>
\t</li>

\t<li id=\"hamburgesa\">
\t\t<i class=\"menu-icon fa fa-bars\" alt=\"ver menu de navegació\"></i>
\t</li>
\t<li id=\"dark-mode\">
\t\t<i class=\"menu-icon fa fa-toggle-off\" alt=\"botón para activar o desactivar el tema oscuro\"></i>
\t</li>
\t{% if app.user and is_granted('ROLE_ADMIN',app.user.roles) %}
\t\t<li>
\t\t\t<a class=\"menu-link\" href=\"{{ path('admin')}}\" alt=\"enlace a zona admin\">admin</a>
\t\t</li>
\t{% endif %}


</ul>
", "menu.html.twig", "C:\\xampp\\htdocs\\symfony\\projecte_DAW\\symfony\\templates\\menu.html.twig");
    }
}
