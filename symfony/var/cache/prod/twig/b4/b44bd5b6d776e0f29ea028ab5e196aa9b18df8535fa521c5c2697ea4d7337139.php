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
class __TwigTemplate_f337ec92810b766244e75b540de4c5190af8bca6a7b70c54e056a5005c14b5e1 extends Template
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
\t<h1 class=\"doc-titol\">Indice de contenidos de esta docmuentación</h1>
\t<div class=\"doc-text\">

\t\t<p>Definición, planteamiento y aspectos globales del proyecto</p>

\t\t<h5 class=\"doc-list\">1. Presentación</h5>
\t\t<h5 class=\"doc-list\">2. Indice de contenidos</h5>
\t\t<h5 class=\"doc-list\">3. Descripción del producto final objetivo</h5>
\t\t<h5 class=\"doc-list\">4. Objetivos planteados al inicio del proyecto</h5>
\t\t<h5 class=\"doc-list\">5. Herramientas y tecnologias utilizadas</h5>
\t\t<h5 class=\"doc-list\">6. Organización y planificación del desarrollo</h5>

\t\t<p>Especificaciones del dessarollo</p>

\t\t<h5 class=\"doc-list\">7. Bocetos de diseño iniciales</h5>
\t\t<h5 class=\"doc-list\">8. Diagrama funcionalidades o casos de uso</h5>
\t\t<h5 class=\"doc-list\">9. Estructuración de la Base de datos</h5>
\t\t<h5 class=\"doc-list\">10. Eso que queriamos, y morimos en el intento</h5>
\t\t<h5 class=\"doc-list\">11. Eso que queriamos, y de lo que nos sentimos orgullosos</h5>
\t\t<h5 class=\"doc-list\">12. Seguridad aplicada</h5>
\t\t<h5 class=\"doc-list\">13. Valoracions de desarrollo</h5>

\t\t<p>Anexos para uso e instalación</p>

\t\t";
        // line 27
        echo "\t\t<h5 class=\"doc-list\">14. Multimedia</h5>

\t\t<h5 class=\"doc-list\">15. Manual de usuario</h5>
\t\t";
        // line 31
        echo "\t\t<br/>
\t\t<h5 class=\"doc-list\">16. Conclusiones finales</h5>

\t</div>
</section>
";
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
        return array (  71 => 31,  66 => 27,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "docs/es/02-indice.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/docs/es/02-indice.html.twig");
    }
}
