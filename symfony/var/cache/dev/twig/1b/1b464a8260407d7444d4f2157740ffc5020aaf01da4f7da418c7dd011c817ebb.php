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

/* docs/es/06-planificacion.html.twig */
class __TwigTemplate_e9ea907053242a687ed99310d21258d48d34defccef51fa4fd6a8ddb8ead2a39 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "docs/es/06-planificacion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "docs/es/06-planificacion.html.twig"));

        // line 1
        echo "<section id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 1, $this->source); })()), "linkslug", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
\t<h1 class=\"doc-titol\">Organización y planificación</h1>
\t<div class=\"doc-text\">
\t\t<p>
\t\t\tCon una duración estimada de 300 horas (3 personas x 100h), repartidas en 4 semanas, aprovechamos la metodoloíia Agile de SCRUM, concretamente el entorno JIRA.
\t\t\t<br/>
\t\t\tAsí mismo, el centro nos facilitó acceso a otro entorno de trabajo llamado Basecamp con el que poder comunicarnos e interactuar a diario entre nosotros.<br/>
\t\t\tNo obstante, dada la situación de confinamiento vivido, para incrementar el contacto entre nosotros, acordamos una conexión diaria via Hangouts cada mañana para asegurarnos de que todos seguíamos el ritmo de trabajo planificado.
\t\t\t
\t\t</p>
\t\t<p>
\t\t\tDado que elegimos un producte parecido a un blog, que en principio no aparentaba gran complejidad, estructuramos las cuatro semanas (sprints) de trabajo con unos objetivos globales de:
\t\t</p>
\t\tSemana 1
\t\t<ul>
\t\t\t<li>
\t\t\t\tTest de las arquitecturas e idiomas de programación elegidos en un entorno de producción para comprobar si debíamos redirigir hacia otros.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tDiseños moqup, wireframe y plantillas HTML que servirían de base para las futuras implementaciones del frontend.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tCreación del entorno de trabajo compartido (repositorio Git, Backlog de JIRA, Basecamp, zona de pruebas en labs.iam.cat...).
\t\t\t</li>
\t\t\t<li>
\t\t\t\tCreación de las primeras entidades en Symfony (usuarios y artículos) junto a sus controladores y formularios.
\t\t\t</li>
\t\t</ul>
\t\tSemana 2
\t\t<ul>
\t\t\t<li>
\t\t\t\tTodas las funcionalidades de Usuarios y Artículos debían estar implementadas, en crudo, pero funcionales.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tEnlazar frontend (plantillas que teníamos) con backend (controladores).
\t\t\t</li>
\t\t</ul>
\t\tSemana 3
\t\t<ul>
\t\t\t<li>
\t\t\t\tAñadir contenido de prueba (lorem ipsum).
\t\t\t</li>
\t\t\t<li>
\t\t\t\tAñadir funcionalidades extra (IDE online parecido a codepen).
\t\t\t</li>
\t\t\t<li>
\t\t\t\tAñadir Entidades y Controladores secundarios para comentarios y panel de administración.
\t\t\t</li>
\t\t</ul>
\t\tSemana 4
\t\t<ul>
\t\t\t<li>
\t\t\t\tTest de funcionalidades y corrección de errores.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tRedacción de contenido. Eliminar lorem ipsum de prueba.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tAñadir artículos reales y demos.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tIntegrar las meta tags del posicionamiento SEO y las meta OG del Mobile First.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tDeployment en servidor real con SSL, configuración htacces, imagen corporativa, sitemap, robots.txt...
\t\t\t</li>
\t\t</ul>
\t\tSemana 5 (post entrega proyecto)
\t\t<ul>
\t\t\t<li>
\t\t\t\tDocumentación
\t\t\t</li>
\t\t</ul>
\t</div>
</section>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "docs/es/06-planificacion.html.twig";
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
\t<h1 class=\"doc-titol\">Organización y planificación</h1>
\t<div class=\"doc-text\">
\t\t<p>
\t\t\tCon una duración estimada de 300 horas (3 personas x 100h), repartidas en 4 semanas, aprovechamos la metodoloíia Agile de SCRUM, concretamente el entorno JIRA.
\t\t\t<br/>
\t\t\tAsí mismo, el centro nos facilitó acceso a otro entorno de trabajo llamado Basecamp con el que poder comunicarnos e interactuar a diario entre nosotros.<br/>
\t\t\tNo obstante, dada la situación de confinamiento vivido, para incrementar el contacto entre nosotros, acordamos una conexión diaria via Hangouts cada mañana para asegurarnos de que todos seguíamos el ritmo de trabajo planificado.
\t\t\t
\t\t</p>
\t\t<p>
\t\t\tDado que elegimos un producte parecido a un blog, que en principio no aparentaba gran complejidad, estructuramos las cuatro semanas (sprints) de trabajo con unos objetivos globales de:
\t\t</p>
\t\tSemana 1
\t\t<ul>
\t\t\t<li>
\t\t\t\tTest de las arquitecturas e idiomas de programación elegidos en un entorno de producción para comprobar si debíamos redirigir hacia otros.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tDiseños moqup, wireframe y plantillas HTML que servirían de base para las futuras implementaciones del frontend.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tCreación del entorno de trabajo compartido (repositorio Git, Backlog de JIRA, Basecamp, zona de pruebas en labs.iam.cat...).
\t\t\t</li>
\t\t\t<li>
\t\t\t\tCreación de las primeras entidades en Symfony (usuarios y artículos) junto a sus controladores y formularios.
\t\t\t</li>
\t\t</ul>
\t\tSemana 2
\t\t<ul>
\t\t\t<li>
\t\t\t\tTodas las funcionalidades de Usuarios y Artículos debían estar implementadas, en crudo, pero funcionales.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tEnlazar frontend (plantillas que teníamos) con backend (controladores).
\t\t\t</li>
\t\t</ul>
\t\tSemana 3
\t\t<ul>
\t\t\t<li>
\t\t\t\tAñadir contenido de prueba (lorem ipsum).
\t\t\t</li>
\t\t\t<li>
\t\t\t\tAñadir funcionalidades extra (IDE online parecido a codepen).
\t\t\t</li>
\t\t\t<li>
\t\t\t\tAñadir Entidades y Controladores secundarios para comentarios y panel de administración.
\t\t\t</li>
\t\t</ul>
\t\tSemana 4
\t\t<ul>
\t\t\t<li>
\t\t\t\tTest de funcionalidades y corrección de errores.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tRedacción de contenido. Eliminar lorem ipsum de prueba.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tAñadir artículos reales y demos.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tIntegrar las meta tags del posicionamiento SEO y las meta OG del Mobile First.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tDeployment en servidor real con SSL, configuración htacces, imagen corporativa, sitemap, robots.txt...
\t\t\t</li>
\t\t</ul>
\t\tSemana 5 (post entrega proyecto)
\t\t<ul>
\t\t\t<li>
\t\t\t\tDocumentación
\t\t\t</li>
\t\t</ul>
\t</div>
</section>
", "docs/es/06-planificacion.html.twig", "C:\\xampp\\htdocs\\symfony\\projecte_DAW\\symfony\\templates\\docs\\es\\06-planificacion.html.twig");
    }
}
