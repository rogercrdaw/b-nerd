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

/* docs/es/08-casosdus.html.twig */
class __TwigTemplate_2a439a6259eb6ac7a368a6d9938b411c98fad38dcc08b18c79e40eee5e74c12c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "docs/es/08-casosdus.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "docs/es/08-casosdus.html.twig"));

        // line 1
        echo "<section id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 1, $this->source); })()), "linkslug", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
\t<h1 class=\"doc-titol\">Casos de uso</h1>
\t<div class=\"doc-text\">
\t\t<p>
\t\t\tElegímos un producto que a simple vista, no precisaba de gran complejidad. Por ello, las funcionalidades de la página web se podían dividir en 3 grandes grupos diferenciados según el grado de privilegios del usuario (roles)
\t\t</p>

\t\tTodo usuario o visitante anónimo, pensamos que debían....
\t\t<ul>
\t\t\t<li>
\t\t\t\tVer un artículo completo.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tVer el perfil completo del autor de un artículo.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tContactar vía formualario para sugerencias de artículos.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tPoder registrarse.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tConfigurar la temática de colores de contraste de la web (dark Mode).
\t\t\t</li>
\t\t\t<li>
\t\t\t\tInteractuar con las demos.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tProbar código de artículos en un IDE online propio.
\t\t\t</li>
\t\t</ul>

\t\tEn el caso de los usuarios registrados y logueados...
\t\t<ul>
\t\t\t<li>
\t\t\t\tQue su imagen de perfil y nombre de usuario esten siempre visibles en todas la páginas.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tPoder personalizar su perfil de usuario público (imagen de perfil, texto de presentación, enlace a redes sociales,...).
\t\t\t</li>
\t\t\t<li>
\t\t\t\tPoder participar con comentarios en los artículos.
\t\t\t</li>
\t\t</ul>
\t\tLos administradores de la web, deben tener acceso completo a...
\t\t<ul>
\t\t\t<li>
\t\t\t\tPublicar artículos.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tAdministrar y gestionar artículos, categorías, comentarios y usuarios.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tVer estadísticas de acceso y uso de la web.
\t\t\t</li>
\t\t</ul>
\t</div>
\t<img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("docs/docs-img/casos_us.png"), "html", null, true);
        echo "\" class=\"doc-img\">
</section>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "docs/es/08-casosdus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 58,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"{{section.linkslug}}\">
\t<h1 class=\"doc-titol\">Casos de uso</h1>
\t<div class=\"doc-text\">
\t\t<p>
\t\t\tElegímos un producto que a simple vista, no precisaba de gran complejidad. Por ello, las funcionalidades de la página web se podían dividir en 3 grandes grupos diferenciados según el grado de privilegios del usuario (roles)
\t\t</p>

\t\tTodo usuario o visitante anónimo, pensamos que debían....
\t\t<ul>
\t\t\t<li>
\t\t\t\tVer un artículo completo.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tVer el perfil completo del autor de un artículo.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tContactar vía formualario para sugerencias de artículos.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tPoder registrarse.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tConfigurar la temática de colores de contraste de la web (dark Mode).
\t\t\t</li>
\t\t\t<li>
\t\t\t\tInteractuar con las demos.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tProbar código de artículos en un IDE online propio.
\t\t\t</li>
\t\t</ul>

\t\tEn el caso de los usuarios registrados y logueados...
\t\t<ul>
\t\t\t<li>
\t\t\t\tQue su imagen de perfil y nombre de usuario esten siempre visibles en todas la páginas.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tPoder personalizar su perfil de usuario público (imagen de perfil, texto de presentación, enlace a redes sociales,...).
\t\t\t</li>
\t\t\t<li>
\t\t\t\tPoder participar con comentarios en los artículos.
\t\t\t</li>
\t\t</ul>
\t\tLos administradores de la web, deben tener acceso completo a...
\t\t<ul>
\t\t\t<li>
\t\t\t\tPublicar artículos.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tAdministrar y gestionar artículos, categorías, comentarios y usuarios.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tVer estadísticas de acceso y uso de la web.
\t\t\t</li>
\t\t</ul>
\t</div>
\t<img src=\"{{ asset(\"docs/docs-img/casos_us.png\") }}\" class=\"doc-img\">
</section>
", "docs/es/08-casosdus.html.twig", "C:\\xampp\\htdocs\\symfony\\projecte_DAW\\symfony\\templates\\docs\\es\\08-casosdus.html.twig");
    }
}
