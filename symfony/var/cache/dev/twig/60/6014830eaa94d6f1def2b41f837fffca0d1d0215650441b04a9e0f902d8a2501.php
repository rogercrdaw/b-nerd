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

/* docs/es/02-indice.html.twig */
class __TwigTemplate_3c98bd568355b3f97598043e1c7d3bdc95bf50865e67a9ea297f13616fc02b6f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "docs/es/02-indice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "docs/es/02-indice.html.twig"));

        // line 1
        echo "<section id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 1, $this->source); })()), "linkslug", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
\t<h1 class=\"doc-titol\">Índice de contenidos de esta docmuentación</h1>
\t<div class=\"doc-text\">

\t\t<p>Definición, planteamiento y aspectos globales del proyecto</p>
\t\t<a href=\"#portada\"><h5 class=\"doc-list\">1. Presentación</h5></a>
\t\t<a href=\"#indice\"><h5 class=\"doc-list\">2. Indice de contenidos</h5></a>
\t\t<a href=\"#producto\"><h5 class=\"doc-list\">3. Descripción del producto final objetivo</h5></a>
\t\t<a href=\"#objetivos\"><h5 class=\"doc-list\">4. Objetivos planteados al inicio del proyecto</h5></a>
\t\t<a href=\"#tecnologias\"><h5 class=\"doc-list\">5. Herramientas y tecnologias utilizadas</h5></a>
\t\t<a href=\"#planificacion\"><h5 class=\"doc-list\">6. Organización y planificación del desarrollo</h5></a>

\t\t<p>Especificaciones del dessarollo</p>
\t\t<a href=\"#wireframes\"><h5 class=\"doc-list\">7. Bocetos de diseño iniciales</h5></a>
\t\t<a href=\"#funcionalidades\"><h5 class=\"doc-list\">8. Diagrama funcionalidades o casos de uso</h5></a>
\t\t<a href=\"#BBDD\"><h5 class=\"doc-list\">9. Estructuración de la Base de datos</h5></a>
\t\t<a href=\"#fracasos\"><h5 class=\"doc-list\">10. Eso que queriamos, y morimos en el intento</h5></a>
\t\t<a href=\"#exitos\"><h5 class=\"doc-list\">11. Eso que queriamos, y de lo que nos sentimos orgullosos</h5></a>
\t\t<a href=\"#seguridad\"><h5 class=\"doc-list\">12. Seguridad aplicada</h5></a>

\t\t<p>Anexos para uso e instalación</p>
\t\t<a href=\"#media\"><h5 class=\"doc-list\">13. Multimedia</h5></a>
\t\t<a href=\"#manual\"><h5 class=\"doc-list\">14. Manual de usuario e instalación</h5></a>
\t\t<br/>
\t\t<a href=\"#valoraciones\"><h5 class=\"doc-list\">15. Conclusiones finales</h5></a>

\t</div>
</section>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "docs/es/02-indice.html.twig";
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
\t<h1 class=\"doc-titol\">Índice de contenidos de esta docmuentación</h1>
\t<div class=\"doc-text\">

\t\t<p>Definición, planteamiento y aspectos globales del proyecto</p>
\t\t<a href=\"#portada\"><h5 class=\"doc-list\">1. Presentación</h5></a>
\t\t<a href=\"#indice\"><h5 class=\"doc-list\">2. Indice de contenidos</h5></a>
\t\t<a href=\"#producto\"><h5 class=\"doc-list\">3. Descripción del producto final objetivo</h5></a>
\t\t<a href=\"#objetivos\"><h5 class=\"doc-list\">4. Objetivos planteados al inicio del proyecto</h5></a>
\t\t<a href=\"#tecnologias\"><h5 class=\"doc-list\">5. Herramientas y tecnologias utilizadas</h5></a>
\t\t<a href=\"#planificacion\"><h5 class=\"doc-list\">6. Organización y planificación del desarrollo</h5></a>

\t\t<p>Especificaciones del dessarollo</p>
\t\t<a href=\"#wireframes\"><h5 class=\"doc-list\">7. Bocetos de diseño iniciales</h5></a>
\t\t<a href=\"#funcionalidades\"><h5 class=\"doc-list\">8. Diagrama funcionalidades o casos de uso</h5></a>
\t\t<a href=\"#BBDD\"><h5 class=\"doc-list\">9. Estructuración de la Base de datos</h5></a>
\t\t<a href=\"#fracasos\"><h5 class=\"doc-list\">10. Eso que queriamos, y morimos en el intento</h5></a>
\t\t<a href=\"#exitos\"><h5 class=\"doc-list\">11. Eso que queriamos, y de lo que nos sentimos orgullosos</h5></a>
\t\t<a href=\"#seguridad\"><h5 class=\"doc-list\">12. Seguridad aplicada</h5></a>

\t\t<p>Anexos para uso e instalación</p>
\t\t<a href=\"#media\"><h5 class=\"doc-list\">13. Multimedia</h5></a>
\t\t<a href=\"#manual\"><h5 class=\"doc-list\">14. Manual de usuario e instalación</h5></a>
\t\t<br/>
\t\t<a href=\"#valoraciones\"><h5 class=\"doc-list\">15. Conclusiones finales</h5></a>

\t</div>
</section>
", "docs/es/02-indice.html.twig", "C:\\xampp\\htdocs\\symfony\\projecte_DAW\\symfony\\templates\\docs\\es\\02-indice.html.twig");
    }
}
