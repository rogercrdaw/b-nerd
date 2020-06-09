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
class __TwigTemplate_17789eb5b0aab8a63c55be9c608c4a3199852abf0c9f2650620b9cba206228b3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "docs/es/10-fracasos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "docs/es/10-fracasos.html.twig"));

        // line 1
        echo "<section id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 1, $this->source); })()), "linkslug", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
\t<h1 class=\"doc-titol\">Eso que no conseguimos pero si intentamos</h1>
\t<div class=\"doc-text\">
\t\t<p>
\t\t\tNos marcamos unos objetivos al inicio del proyecto que en algunos casos han sido demasiado ambiciosos. Intentamos desarrollar tareas más complejas de lo que parecían en un principio y no las consideramos un fracaso puesto que aprendimos mucho al intentarlo.
\t\t</p>

\t\tIntegrar VUE con TWIG
\t\t<ul>
\t\t\t<li>
\t\t\t\tEn un principio, era de nuesro interés, realizar un frontend muy reactivo con VUE para evitar la constante recarga de páginas y liberar el servidor de requests ineficientes. No lo conseguimos. A pesar de nuestros reiterados intentos, comprobamos que VUE y TWIG no se llevan nada bien. Aún existiendo un módulo de Symfony para integrar VUE en TWIG, sólo puede implementarse con componentes debido a que comparten la misma notación de variables (ambos usan el doble corchete {}).
\t\t\t</li>
\t\t</ul>
\t\tRespetar los timmings de la planificación prevista (nos retrasamos)
\t\t<ul>
\t\t\t<li>
\t\t\t\tProcuramos seguir en la medida posible, la planificación que nos habiamos propuesto. No obstante, desarrollar nuestro propio diseño sin recursos ajenos, en el segundo sprint nos demoro más tiempo de lo previsto en CSS y JS.
\t\t\t</li>
\t\t</ul>
\t\tInvertir más tiempo en la redacción de contenidos finales (artículos y demos)
\t\t<ul>

\t\t\t<li>
\t\t\t\tDebido a lo mencionado en el punto anterior, las tareas previstas en el sprint 4 para la inclusión de contenido real, quedo aparcada.<br/>
\t\t\t\tNos hubiese gustado terminar el proyeto, con el tiempo suficiente, para poder dedicarnos a escribir artículos y demos, que al final es el motivo principal por el que creamos la web.
\t\t\t</li>
\t\t</ul>
\t\tIntegrar el editor online detro de la vista de un artículo
\t\t<ul>
\t\t\t<li>
\t\t\t\tEra para nosotros un complemento relevante, tener en la web un apartado de demos y IDE propio. Aunque lo creamos, está poco presente. Nos hubiese gustado poder dedicar más tiempo a su integración y visibilidad dentro del proyecto (enlaces, iframe, embed...).
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
        return "docs/es/10-fracasos.html.twig";
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
\t<h1 class=\"doc-titol\">Eso que no conseguimos pero si intentamos</h1>
\t<div class=\"doc-text\">
\t\t<p>
\t\t\tNos marcamos unos objetivos al inicio del proyecto que en algunos casos han sido demasiado ambiciosos. Intentamos desarrollar tareas más complejas de lo que parecían en un principio y no las consideramos un fracaso puesto que aprendimos mucho al intentarlo.
\t\t</p>

\t\tIntegrar VUE con TWIG
\t\t<ul>
\t\t\t<li>
\t\t\t\tEn un principio, era de nuesro interés, realizar un frontend muy reactivo con VUE para evitar la constante recarga de páginas y liberar el servidor de requests ineficientes. No lo conseguimos. A pesar de nuestros reiterados intentos, comprobamos que VUE y TWIG no se llevan nada bien. Aún existiendo un módulo de Symfony para integrar VUE en TWIG, sólo puede implementarse con componentes debido a que comparten la misma notación de variables (ambos usan el doble corchete {}).
\t\t\t</li>
\t\t</ul>
\t\tRespetar los timmings de la planificación prevista (nos retrasamos)
\t\t<ul>
\t\t\t<li>
\t\t\t\tProcuramos seguir en la medida posible, la planificación que nos habiamos propuesto. No obstante, desarrollar nuestro propio diseño sin recursos ajenos, en el segundo sprint nos demoro más tiempo de lo previsto en CSS y JS.
\t\t\t</li>
\t\t</ul>
\t\tInvertir más tiempo en la redacción de contenidos finales (artículos y demos)
\t\t<ul>

\t\t\t<li>
\t\t\t\tDebido a lo mencionado en el punto anterior, las tareas previstas en el sprint 4 para la inclusión de contenido real, quedo aparcada.<br/>
\t\t\t\tNos hubiese gustado terminar el proyeto, con el tiempo suficiente, para poder dedicarnos a escribir artículos y demos, que al final es el motivo principal por el que creamos la web.
\t\t\t</li>
\t\t</ul>
\t\tIntegrar el editor online detro de la vista de un artículo
\t\t<ul>
\t\t\t<li>
\t\t\t\tEra para nosotros un complemento relevante, tener en la web un apartado de demos y IDE propio. Aunque lo creamos, está poco presente. Nos hubiese gustado poder dedicar más tiempo a su integración y visibilidad dentro del proyecto (enlaces, iframe, embed...).
\t\t\t</li>
\t\t</ul>
\t</div>
</section>
", "docs/es/10-fracasos.html.twig", "C:\\xampp\\htdocs\\symfony\\projecte_DAW\\symfony\\templates\\docs\\es\\10-fracasos.html.twig");
    }
}
