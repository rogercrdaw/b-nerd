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

/* docs/es/10-fracasos.html.twig */
class __TwigTemplate_3f303cc7ee757bff53dddf0907f6b8900bf9abb42462b3f7357d99a83ee070a2 extends Template
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
\t<h1 class=\"doc-titol\">Eso que no conseguimos pero si intentamos</h1>
\t<div class=\"doc-text\">
\t\t<p>
\t\t\tLo intentamos, pero no conseguimos. g bl bla bla bla
\t\t</p>

\t\tIntegrar VUE con TWIG
\t\t<ul>
\t\t\t<li>
\t\t\t\tEn un principio, era de nuesro interes, realizar un frontend muy reactivo con VUE para evitar la constante recarga de pàginas y liberar el servidor de requests ineficientes. No lo conseguimos. A pesar de nuestros reitardos intentos, comprobamos que VUE y TWIG no se llevan nada bien. Aun existiendo un modulo de symfony para integrar VUE en TWIG, solo puede implmentarse con componentes debido a que comparten la misma notación de variables (ambos usan el doble corchete {})
\t\t\t</li>
\t\t</ul>
\t\tRespetar los timmings de la planificacion prevista (nos retrasamos)
\t\t<ul>
\t\t\t<li>
\t\t\t\tProcuramos seguimos en la medida posible, la planificación que nos habiamos propuesto . No obstanto, al querer desarrollar nuestro propio diseño sin recursos ajenos, en el segundo sprint dedicamos mas tiempo de los previsto en CSS y JS. Eso conllevó un  significativo retraso de las tareas del sprint 2 al 3.
\t\t\t</li>
\t\t</ul>
\t\tInvertir mas tiempo en la redacción de conendios finales (articulos)
\t\t<ul>

\t\t\t<li>
\t\t\t\tDebido a lo mencionado en el punto anterior, las tareas previstas en el srpint 4 para la inclusión de contenido real, quedo aparcada.<br/>
\t\t\t\tNos hubiese gustado terminar el proyeto, con el tiempo suficiente, para poder dedicar-nos a excribir articulos y demos, que al final es el motivo principal por el que creamos la web.
\t\t\t</li>
\t\t</ul>
\t\tIntegrar el editor online detro de la vista de un articulo
\t\t<ul>
\t\t\t<li>
\t\t\t\tEra para nosotros un complemento relevanmte, tener en la web un apartado de demos y IDE propio. Aunque lo creamos, està poco presente. Nos hubiese gustado poder dedicar mas tiempo a su integración y visibilidad dentro de los articolos (enlaces, iframe, embed... )
\t\t\t</li>
\t\t</ul>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "docs/es/10-fracasos.html.twig";
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
        return new Source("", "docs/es/10-fracasos.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/docs/es/10-fracasos.html.twig");
    }
}
