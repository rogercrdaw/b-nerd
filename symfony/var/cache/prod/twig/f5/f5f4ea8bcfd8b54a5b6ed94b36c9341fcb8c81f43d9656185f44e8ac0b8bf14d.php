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
class __TwigTemplate_567f501cb78110a28c0805e0a15489965025bda9131adf8c8376fcef4b74e759 extends Template
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
        // line 1
        echo "<ul class=\"menu-user\">
\t";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 2)) {
            // line 3
            echo "\t\t<li>
\t\t\t<a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userProfile", ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 4), "username", [], "any", false, false, false, 4)]), "html", null, true);
            echo "\" alt=\"Veure perfil de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 4), "username", [], "any", false, false, false, 4), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 5
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 5), "imatge", [], "any", false, false, false, 5) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 5), "imatge", [], "any", false, false, false, 5)))) {
                // line 6
                echo "\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/imatges_perfil/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 6), "imatge", [], "any", false, false, false, 6))), "html", null, true);
                echo "\" alt=\"imatge de perfil\" id=\"img-modif\">
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userProfile", ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 13), "username", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\" alt=\"Enllaç al perfil d'usuari\" title=\"Veure perfil d'usuari\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 13), "username", [], "any", false, false, false, 13), "html", null, true);
            echo "</a>
\t\t</li>
\t\t<li>

\t\t\t<a class=\"menu-link logout-link\" href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" alt=\"Tancar la sessió\">
\t\t\t\tsortir
\t\t\t</a>
\t\t</li>
\t";
        } else {
            // line 22
            echo "\t\t<li>
\t\t\t<a href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" alt=\"Enllaç a formulari de login\">
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
        echo "#about-us\" alt=\"Pagina d'inici\">b-NERD toDEVELOPE</a>
\t</li>
\t<li>
\t\t<a class=\"menu-link scrollable\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "#hard-skills\" alt=\"Enllaç a la secció de categories\">HARD SKILLS</a>
\t</li>
\t<li>
\t\t<a class=\"menu-link scrollable\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "#how\" alt=\"Enllaç a la secció de presentació\">MAS</a>
\t</li>
\t<li>
\t\t<a class=\"menu-link scrollable\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "#contact\" alt=\"Enllaç al formulari de contacte\">CONTACTE</a>
\t</li>

\t<li id=\"hamburgesa\">
\t\t<i class=\"menu-icon fa fa-bars\" alt=\"Desplegar el menu de navegació\"></i>
\t</li>
\t<li id=\"dark-mode\">
\t\t<i class=\"menu-icon fa fa-toggle-off\" alt=\"Botó per activar o desactivar el tema fosc\"></i>
\t</li>
\t";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 50) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 50), "roles", [], "any", false, false, false, 50)))) {
            // line 51
            echo "\t\t<li>
\t\t\t<a class=\"menu-link\" href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\" alt=\"Enllaç al zona admin\">admin</a>
\t\t</li>
\t";
        }
        // line 55
        echo "

</ul>
";
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
        return array (  143 => 55,  137 => 52,  134 => 51,  132 => 50,  120 => 41,  114 => 38,  108 => 35,  102 => 32,  96 => 28,  88 => 23,  85 => 22,  77 => 17,  68 => 13,  63 => 10,  59 => 8,  53 => 6,  51 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "menu.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/menu.html.twig");
    }
}
