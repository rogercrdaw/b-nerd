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
class __TwigTemplate_c7de79ee3fae43c12d5365626eb9588edacbc20f4a5f63652b5d94759c870af6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "docs/es/07-wireframes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "docs/es/07-wireframes.html.twig"));

        // line 1
        echo "<section id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 1, $this->source); })()), "linkslug", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
\t<h1 class=\"doc-titol\">Prototipos iniciales de diseño</h1>
\t<div class=\"doc-text\">
\t\t<p>
\t\t\tElegimos una línea de diseño sencilla y minimalista, sin exceso de elementos no funcionales que distrajeran la atención del usuario.<br>
\t\t\tPreferimos algo simple, donde destacasen los elementos importantes. Basándonos en UX, elegimos un menú de navegación siempre visible pero con un toque personal que nos diferenciase de la mayoría de diseños web.<br/>
\t\t</p>
\t\t<p>
\t\t\tRealizamos 3 prototipos de Wireframe sobre los que ir estructurando el HTML y CSS de base (páginas de contenido texto, páginas de tipo formulario y dos propuestas diferentes de página con los iconos de las categorías).
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
\t\t\tEn el transcuros del proyecto, como era de esperar fueron surgiendo esos pequeños detalles que consideramos diferenciadores y que queríamos implementar para mostrar nuestras habilidades en javascript y añadir dinamismo en el frontend con efectos no recargados pero si visualmente atractivos.
\t\t</p>
\t\t<ul>
\t\t\t<li>Que el botón de login, imagen de usuario o datos del autor de un artículo, ocupasen el mismo sito en la web y se desplazase con el scroll.</li>
\t\t\t<li>Que el menú se desplegase en Responsive y los elementos cambiasen de color con el scroll según el section sobre el que se estuviese.</li>
\t\t\t<li>Somos programadores.... y no hay programador al que no le guste jugar con los temas oscuros de los IDE, así que añadimos el detallito del Dark Mode por divertimento.</li>
\t\t</ul>
\t</div>
</section>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  70 => 15,  66 => 14,  61 => 12,  57 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"{{section.linkslug}}\">
\t<h1 class=\"doc-titol\">Prototipos iniciales de diseño</h1>
\t<div class=\"doc-text\">
\t\t<p>
\t\t\tElegimos una línea de diseño sencilla y minimalista, sin exceso de elementos no funcionales que distrajeran la atención del usuario.<br>
\t\t\tPreferimos algo simple, donde destacasen los elementos importantes. Basándonos en UX, elegimos un menú de navegación siempre visible pero con un toque personal que nos diferenciase de la mayoría de diseños web.<br/>
\t\t</p>
\t\t<p>
\t\t\tRealizamos 3 prototipos de Wireframe sobre los que ir estructurando el HTML y CSS de base (páginas de contenido texto, páginas de tipo formulario y dos propuestas diferentes de página con los iconos de las categorías).
\t\t</p>
\t\t<img src=\"{{ asset(\"docs/docs-img/wireframe_1.png\") }}\" class=\"doc-img\">
\t\t<img src=\"{{ asset(\"docs/docs-img/wireframe_4.png\") }}\" class=\"doc-img\">

\t\t<img src=\"{{ asset(\"docs/docs-img/wireframe_2.png\") }}\" class=\"doc-img\">
\t\t<img src=\"{{ asset(\"docs/docs-img/wireframe_3.png\") }}\" class=\"doc-img\">
\t\t<p>
\t\t\tEn el transcuros del proyecto, como era de esperar fueron surgiendo esos pequeños detalles que consideramos diferenciadores y que queríamos implementar para mostrar nuestras habilidades en javascript y añadir dinamismo en el frontend con efectos no recargados pero si visualmente atractivos.
\t\t</p>
\t\t<ul>
\t\t\t<li>Que el botón de login, imagen de usuario o datos del autor de un artículo, ocupasen el mismo sito en la web y se desplazase con el scroll.</li>
\t\t\t<li>Que el menú se desplegase en Responsive y los elementos cambiasen de color con el scroll según el section sobre el que se estuviese.</li>
\t\t\t<li>Somos programadores.... y no hay programador al que no le guste jugar con los temas oscuros de los IDE, así que añadimos el detallito del Dark Mode por divertimento.</li>
\t\t</ul>
\t</div>
</section>
", "docs/es/07-wireframes.html.twig", "C:\\xampp\\htdocs\\symfony\\projecte_DAW\\symfony\\templates\\docs\\es\\07-wireframes.html.twig");
    }
}
