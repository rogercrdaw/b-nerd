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
class __TwigTemplate_09fd2bdd7dc46f63cb447da915ab9f78e02f1e36c2fcbf271dcf14d037580711 extends Template
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
\t<h1 class=\"doc-titol\">Organización y planificación</h1>
\t<div class=\"doc-text\">
\t\t<p>
\t\t\tCon una duración estimada de 300 horas (3 personas x 100h), repartidas en 4 semanas, aprovechamos la metodològia Agile de SCRUM, concretamente el entorno JIRA.
\t\t\t<br/>
\t\t\tAsi mismo, el instituto nos facilitó acceso a otro entorno de trabajo llamado Basecamp con el que poder comunicar-nos e interactuar a diaro entre nosotros.<br/>
\t\t\tNo obstante, dada la situación de confinamiento sufrido, para incrementar el contacto entre nosotros, acordamos una conexión diaria via Hangouts cada mañana para garantizar que si en algun momento algun miembro del grupo se estancaba o atrasaba en alguna tarea, pudiese comunicarlo y asi, todos estubiesemos informados y al mismo tiempo disponibles para poder ayudar si era necessario.
\t\t</p>
\t\t<p>
\t\t\tDado que elegimos un producte parecido a un blog, que en principio no mostraba gran complejidad, estructuramos las cuatro semanas (sprints) de trabajo con unos objetivos globales de:
\t\t</p>
\t\tSemana 1
\t\t<ul>
\t\t\t<li>
\t\t\t\tTest de las arquitecturas y idiomas de programación elegidos en un entorno de produccion para comprobar si debiamos redirigir hacia otros.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tBocetos de moqups, wireframes y plantillas html que serian la base para las futuras implementacions del frontend
\t\t\t</li>
\t\t\t<li>
\t\t\t\tCreacion del entorno de trabajo compartido (Repositorio Git, Backlog de JIRA, Drive, zona de pruebas en labs.iam.cat...)
\t\t\t</li>
\t\t\t<li>
\t\t\t\tCreacion de las entidades bàsicas en Symfony (usuarios y articulos) junto a controladores y formularios.
\t\t\t</li>
\t\t</ul>
\t\tSemana 2
\t\t<ul>
\t\t\t<li>
\t\t\t\tTodas las funcionalidades de Usuario y Articulos debian estar implementades, en crudo, pero funcionales
\t\t\t</li>
\t\t\t<li>
\t\t\t\tEnlazar frontend (plantillas que teniamos) con backend (controlladores)
\t\t\t</li>
\t\t\t<li>
\t\t\t\tQue en todo momento se aplicasen las recomendaciones UX sobre navegabilidad y validación de formularios ontime para evitar la molesta recarga de una página con una respuesta de error
\t\t\t</li>
\t\t</ul>
\t\tSemana 3
\t\t<ul>
\t\t\t<li>
\t\t\t\tAñadir contenido de prueba (lorem ipsum)
\t\t\t</li>
\t\t\t<li>
\t\t\t\tAñadir funcionalidades extras (IDE online parecido a codepen)
\t\t\t</li>
\t\t\t<li>
\t\t\t\tAñadir Entidades y Controladores secundarios para comentarios y admin
\t\t\t</li>
\t\t</ul>
\t\tSemana 4
\t\t<ul>
\t\t\t<li>
\t\t\t\tTest de funcionalidades y correccón de errores
\t\t\t</li>
\t\t\t<li>
\t\t\t\tRedacción de contenido. Eliminar lorem ipsum de prueba
\t\t\t</li>
\t\t\t<li>
\t\t\t\tAñadir articulos reales y demos
\t\t\t</li>
\t\t\t<li>
\t\t\t\tIntegrar las meta tags del posicionamiento SEO y las meta OG del Mobile First
\t\t\t</li>
\t\t\t<li>
\t\t\t\tDeployment en servidor real con SSL, htacces...
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
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "docs/es/06-planificacion.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/docs/es/06-planificacion.html.twig");
    }
}
