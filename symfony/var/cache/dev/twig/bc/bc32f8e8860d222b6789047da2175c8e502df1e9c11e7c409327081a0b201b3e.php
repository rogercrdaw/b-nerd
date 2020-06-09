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

/* docs/es/01-portada.html.twig */
class __TwigTemplate_e1d53f25aa033ab1fc9208c80e3818b674c61ed595ba4b0d12b18660fb44d71f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "docs/es/01-portada.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "docs/es/01-portada.html.twig"));

        // line 1
        echo "<section id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 1, $this->source); })()), "linkslug", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
\t<h1 class=\"doc-titol\">Somos Nerds! Full Nerds toDevelop</h1>
\t<div class=\"doc-text\">
\t\t<h3>Proyecto final de CFGS Desarrollo de Aplicaciones Web</h3>
\t\t<h5>Adam JH, Aleix RA y Roger CR</h5>

\t\t<p>
\t\t\tEsta web surge del proyecto de final de curso de tres compañeros de DAW. Ideado principalmente para dar respuesta a un proyecto personal que seguidamente expondremos, junto al interés por desarrollar un producto en el que poder integrar al mismo tiempo, todas o casi todas las cosas que hemos ido aprendiendo a lo largo de nuestra formación.
\t\t</p>
\t\t<p>
\t\t\tElegir la temática no fue tarea fácil, pues encontrar un producto en el que se pudiesen integrar los contenidos académicos trabajados, como demostración de las aptitudes y conocimientos adquiridos, era complejo por la dificultad de conseguir que pudiesen coexisitir las distintas tecnologías de frontend, backend y sistemas trabajadas.
\t\t</p>

\t\t<p>
\t\t\tPor ello elegimos como aplicación web lo que para muchos sería a primera vista un simple blog de artículos (posts). No obstante, desde cero, sin usar ningun CRM o template existente. Permitiéndonos compartir nuestro aprendizaje con artículos sobre los distintos idiomas de programación, frameworks o temas en general. Marcándonos como objetivos principales:
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\tDesarrollar el backend con Symfony5 para una gestión del enrutado de las URL que nos permitiese jugar con las categorías inCSS, inPHP, inApache...
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tAplicar en frontend todos las teorías trabajadas en diseño responsive, User Experience, OpenGraph, SEO...
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tIntegrar un frontend reactivo con VUE, que no conseguimos y terminamos creando nuestro propio Javascript full Modelo Vista Controlador.
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tHacer el Deployment de la web en un entorno de producción real, con configuraciones comunmente aceptadas de accesos, redirecciones, permisos, SSL, mails...
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tUtilizar herramientas de trabajo coordinado como Git, SCRUM y Basecamp, actualmente muy extendidas en la mayoría de empresas.
\t\t\t\t</li>
\t\t\t</ul>
\t\t</p>
\t\t<p>
\t\t\tSólo en 4 semanas y con la complejidad añadida de un confinamiento, que no ha impedido a 3 personas de 3 provincias distintas, comunicarse a diario, organizarse y realizar casi todos los objetivos que nos propusimos, creemos que con éxito.
\t\t</p>
\t</div>
</section>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "docs/es/01-portada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"{{section.linkslug}}\">
\t<h1 class=\"doc-titol\">Somos Nerds! Full Nerds toDevelop</h1>
\t<div class=\"doc-text\">
\t\t<h3>Proyecto final de CFGS Desarrollo de Aplicaciones Web</h3>
\t\t<h5>Adam JH, Aleix RA y Roger CR</h5>

\t\t<p>
\t\t\tEsta web surge del proyecto de final de curso de tres compañeros de DAW. Ideado principalmente para dar respuesta a un proyecto personal que seguidamente expondremos, junto al interés por desarrollar un producto en el que poder integrar al mismo tiempo, todas o casi todas las cosas que hemos ido aprendiendo a lo largo de nuestra formación.
\t\t</p>
\t\t<p>
\t\t\tElegir la temática no fue tarea fácil, pues encontrar un producto en el que se pudiesen integrar los contenidos académicos trabajados, como demostración de las aptitudes y conocimientos adquiridos, era complejo por la dificultad de conseguir que pudiesen coexisitir las distintas tecnologías de frontend, backend y sistemas trabajadas.
\t\t</p>

\t\t<p>
\t\t\tPor ello elegimos como aplicación web lo que para muchos sería a primera vista un simple blog de artículos (posts). No obstante, desde cero, sin usar ningun CRM o template existente. Permitiéndonos compartir nuestro aprendizaje con artículos sobre los distintos idiomas de programación, frameworks o temas en general. Marcándonos como objetivos principales:
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\tDesarrollar el backend con Symfony5 para una gestión del enrutado de las URL que nos permitiese jugar con las categorías inCSS, inPHP, inApache...
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tAplicar en frontend todos las teorías trabajadas en diseño responsive, User Experience, OpenGraph, SEO...
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tIntegrar un frontend reactivo con VUE, que no conseguimos y terminamos creando nuestro propio Javascript full Modelo Vista Controlador.
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tHacer el Deployment de la web en un entorno de producción real, con configuraciones comunmente aceptadas de accesos, redirecciones, permisos, SSL, mails...
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tUtilizar herramientas de trabajo coordinado como Git, SCRUM y Basecamp, actualmente muy extendidas en la mayoría de empresas.
\t\t\t\t</li>
\t\t\t</ul>
\t\t</p>
\t\t<p>
\t\t\tSólo en 4 semanas y con la complejidad añadida de un confinamiento, que no ha impedido a 3 personas de 3 provincias distintas, comunicarse a diario, organizarse y realizar casi todos los objetivos que nos propusimos, creemos que con éxito.
\t\t</p>
\t</div>
</section>
", "docs/es/01-portada.html.twig", "C:\\xampp\\htdocs\\symfony\\projecte_DAW\\symfony\\templates\\docs\\es\\01-portada.html.twig");
    }
}
