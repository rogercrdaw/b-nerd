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
class __TwigTemplate_42f36d22725e0c0ee7bd2da18f59a4e74397c191b0ab1c2504c8cff609d9ba41 extends Template
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
        echo "<section id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["section"] ?? null), "linkslug", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
\t<h1 class=\"doc-titol\">Casos de uso</h1>
\t<div class=\"doc-text\">
\t\t<p>
\t\t\tElegimos un producto que a simple vista, no precisaba de gran compleja. Por ello, las funcionalidades de la pàgina web se podian dividir en 3 grandes grupos diferenciadossegunel grado de privilegios del usuario (roles)
\t\t</p>

\t\tTodo usuario o visitantes anonimo, pensamos que debian....
\t\t<ul>
\t\t\t<li>
\t\t\t\tVer un articulo completo
\t\t\t</li>
\t\t\t<li>
\t\t\t\tVer el perfil completo del autor de un articulo
\t\t\t</li>
\t\t\t<li>
\t\t\t\tContactar via formualario para sugerencias de articulos
\t\t\t</li>
\t\t\t<li>
\t\t\t\tPoder registrar-se
\t\t\t</li>
\t\t\t<li>
\t\t\t\tConfigurar la tematica de colores de contraste de la web (dark Mode)
\t\t\t</li>
\t\t\t<li>
\t\t\t\tInteractuar con las demos
\t\t\t</li>
\t\t\t<li>
\t\t\t\tProbar codigo de artículos en un IDE online propio
\t\t\t</li>
\t\t</ul>

\t\tEn el caso de usuario registrados y logueados...
\t\t<ul>
\t\t\t<li>
\t\t\t\tQue su imagen de perfil y nombre de usuario esten siempre visibles en todas la pàginas
\t\t\t</li>
\t\t\t<li>
\t\t\t\tPoder personalizar su perfil de usuario público (imagen de perfil, texto de presentacion, enlace a redes sociales)
\t\t\t</li>
\t\t\t<li>
\t\t\t\tPoder participar con comentarios en los articulos
\t\t\t</li>
\t\t</ul>
\t\tLos administradores de la web, deben tener acceso completo a...
\t\t<ul>
\t\t\t<li>
\t\t\t\tPublicar articulos
\t\t\t</li>
\t\t\t<li>
\t\t\t\tAdministrar y gestionar articulos, categorias, comentarios y usuarios
\t\t\t</li>
\t\t\t<li>
\t\t\t\tVer estadisticas de acceso y uso de la web
\t\t\t</li>
\t\t</ul>
\t</div>
</section>
";
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
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "docs/es/08-casosdus.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/docs/es/08-casosdus.html.twig");
    }
}
