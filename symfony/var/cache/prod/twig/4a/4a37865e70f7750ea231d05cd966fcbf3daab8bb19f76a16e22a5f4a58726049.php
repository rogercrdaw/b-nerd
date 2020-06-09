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
class __TwigTemplate_8a507cf410a36490cc04dceba0ff105063b7552e59092d0b2905852f407da666 extends Template
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
\t<h1 class=\"doc-titol\">Somos Nerds! puros Nerds toDevelope</h1>
\t<div class=\"doc-text\">
\t\t<h3>Proyecto final de CFGS Deserrollo de Aplicacions Web</h3>
\t\t<h5>por Adam JH, Aleix RA y Roger CR</h5>

\t\t<p>
\t\t\tEsta web surge del proyecto de final de curso de tres compañeros de DAW. Ideado principalemente para dar respuesa a un proyecto personal que seguidamente exponedremos, junto al interés por desarrollar un producto en el que poder integrar al mismo tiempo, todas o casi todas las cosas que hemos ido aprendiendo a lo largo del nuestar formación.
\t\t</p>
\t\t<p>
\t\t\tElegir la temàtica no fue tarea fàcil, pues encontrar un producto en el que se pudiesen integrar los contenidos acadèmicos trabajados, como demostración de las aptitudes y conocimientos adquiridos, era complejo por la dificultad de conseguir que pudiesen coexisitir distintas tecnologias de frontend, backend y sistemas sin xocar entre ellas.
\t\t</p>

\t\t<p>
\t\t\tPor ello elegimos como aplicación web que para muchos seria a primera vista un simple blog de artículos (posts). No obstante, desde cero, sin usar ningun CRM, template o plantilla predefinida. Permitiendonos compartir nuestro aprendizage con artículos repartido en categorias para los distintos idiomas de programación, frameworks o temas en general. Marcandonos como objetivos principales:
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\tDesarrollar el backend con Symfony para una gestión del enrutado de las URL que nos permitiese jugar con las categorias inCSS, inPHP, inApache...)
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tAplicar en frontend todos las teorias trabajadas en sobre diseño y tecnicas en Responisve, User Experience, OG y SEO)
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tIntegrar un frontend reactivo con VUE, que no conseguimos y terminamos creando nuestro propio javascript full Modelo Vista Controlador.
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tHacer el Deployment de la web en un entorno de producción real, con configuraciones hoy en dia básicas sobre accesos, redireccionados, permisos, SSL, mails...
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tUtiliza herramientas de trabajo coordinado como Git, SCRUM y Basecamp, actualmente muy extendidas en la mayoria de empresas.
\t\t\t\t</li>
\t\t\t</ul>
\t\t</p>
\t\t<p>
\t\t\tSolo en 4 semanas y con la complejidad añadida de un confinamiento, que no ha impedido a 3 personas de 3 provincias distintas, comunicar-se a diario, organizar-se y realizar casi todos los objetivos que nos propusimos, creemos que con exito
\t\t</p>
\t</div>
</section>
";
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
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "docs/es/01-portada.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/docs/es/01-portada.html.twig");
    }
}
