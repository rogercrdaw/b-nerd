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

/* docs/es/07-wireframes.html.twig */
class __TwigTemplate_230088d22f4a2daa9f131211cb7e2599d736465fe8d969e3bf1066a8bd393596 extends Template
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
\t<h1 class=\"doc-titol\">Prototipos iniciales de diseño</h1>
\t<div class=\"doc-text\">
\t\t<p>
\t\t\tElejimos una linia de diseño sencilla y minimalista, sin exceso de elementos no funcionales que distrajeran la atención del usuario.<br>
\t\t\tPreferimos algo simple, donde destacasen los elementos importantes. Basandones en UX, elegimos un menu de navegación siempre visible pero con un toque personal que nos diferenciase de la mayoria de diseños web<br/>
\t\t</p>
\t\t<p>
\t\t\tRealizamos 3 prototipos de Wireframe sobre los que ir estructurando el HTML y CSS de base (páginas de contenido texto, páginas de tipo formulario y dos propuestas diferentes de página con los iconos de las categorias)
\t\t</p>
\t\t<img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("docs/docs-img/wireframe_1.png"), "html", null, true);
        echo "\" class=\"doc-img\">
\t\t<img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("docs/docs-img/wireframe_4.png"), "html", null, true);
        echo "\" class=\"doc-img\">

\t\t<img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("docs/docs-img/wireframe_2.png"), "html", null, true);
        echo "\" class=\"doc-img\">
\t\t<img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("docs/docs-img/wireframe_3.png"), "html", null, true);
        echo "\" class=\"doc-img\">
\t\t<p>
\t\t\tEn el transcuros del proyecto, como era de esperar fueron surgiendo esos pequeños detalles que consideramos diferenciadores y que queriamos implementado para dentro de lo simple, mostrar nuestras habilidades en javascript para el dinamismo del frontend con efectos no recargados pero si visualmente atractivos
\t\t</p>
\t\t<ul>
\t\t\t<li>Que el boton de login, imagen de usuario o datos del autor de un articulo, ocupasen el mismo sito en la web y se desplazase con el scroll</li>
\t\t\t<li>Que el menu se desplegase en Responsive y los elementos bambiase de color con el scroll segun el section sobre el que se estubiese</li>
\t\t\t<li>Que los formularios no mostrasen la ayuda ni los errores de inicio, sino on focusin focusout y keyup</li>
\t\t\t<li>Somos programadores.... y no hay programador al que no le guste jugar con los temas oscuros de los IDE, asi que añadimos el detallito del Dark Mode por divertimento</li>
\t\t</ul>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "docs/es/07-wireframes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 15,  60 => 14,  55 => 12,  51 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "docs/es/07-wireframes.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/docs/es/07-wireframes.html.twig");
    }
}
