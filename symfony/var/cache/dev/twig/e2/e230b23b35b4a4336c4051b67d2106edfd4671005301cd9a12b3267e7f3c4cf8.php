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

/* docs/es/03-producto.html.twig */
class __TwigTemplate_66112454ac5aa6519e845bcf000c588b114f63b7c628b3d6dcdea283cd78830d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "docs/es/03-producto.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "docs/es/03-producto.html.twig"));

        // line 1
        echo "<section id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 1, $this->source); })()), "linkslug", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
\t<h1 class=\"doc-titol\">b-Nerd! El producto objetivo</h1>
\t<div class=\"doc-text\">
\t\t<p>
\t\t\tComo estudiantes, comprobamos hasta la saciedad, cuantas veces uno termina buscando por internet explicaciones, ejemplos, respuestas o manuales, a menudo muy específicas sobre infinidad de cosas que en un momento determinado están impidiéndote terminar una tarea.<br/>
\t\t\tSomos conscientes que elegimos estudiar en un sector en el que debemos estar en constante aprendizaje y no se equivocan los docentes al insistir en la habilidad y soltura a la hora de consultar por internet en webs oficiales, documentación de referencia, foros de contrastada reputación... No obstante observamos tres apuntes que consideramos muy relevantes.
\t\t</p>
\t\t<p>
\t\t\t1. Existe infinidad de información en internet. A menudo perdemos mas tiempo en detectar que información es correcta, obsoleta o de una fuente de dudosa reputación, que no leyendo y aprendiendo.<br/>
\t\t\tLo peor de todo es que cuando encuentras una solución que te vale, nunca la guardas. Y pasado un tiempo, si vuelves a necesitar de esa información, no te acuerdas de donde la encontraste.
\t\t</p>
\t\t<p>
\t\t\t2. En segundo lugar, pero no menos importante. Observamos como parecen exisitir dos grandes tipos de contenido muy diferenciados entre ellos. Los dirigidos a Noobs y los que van de Pro!<br/>
\t\t\tPermitidnos que nos expliquemos con más detalle.
\t\t</p>
\t\t<ul>
\t\t\t<li>
\t\t\t\tPrimero están esas páginas web, motivadas por la monetización  y centradas en el uso de estrategias SEO, más que por explicar algo útil, concreto, resumido y con sus pertinentes ejemplos. Te pegan un rollazo, indigerible, con explicaciones pa tontos y que encima, al final del artículo, no encuentras ni un fragmento de código ilustrativo.<br>
\t\t\t\tYa no leemos estos artículos en diagonal, los leemos directmente en vertical, buscando ese código de ejemplo que dudosamente encontraremos.
\t\t\t</li>
\t\t\t<br/>
\t\t\t<li>
\t\t\t\tPero luego están los Pro. Esas páginas web donde alguien que parece falto de autoestima o reconocimento social, aprovecha para soltar todas las palabrotas y tecnicismos posibles para explicar algo excesivamente complejo, a menudo porque él mismo se ha complicado la vida innecesarimente.<br/>
\t\t\t\tEsas páginas web que se pueden detectar rápidamente por un estilo vanidoso y una elevada capacidad por menospreciar el trabajo de otros. Forman parte de ese extenso grupo de minadores de moral.
\t\t\t</li>
\t\t</ul>
\t\t<p>
\t\t\t3. Por último, no lo observamos, lo padecemos todos a diario. La búsqueda recuerrente de ese fragmento de código que ya hiciste en su día y no tienes ni idea de en que carpeta, proyecto, archivo, máquina virtual... dónde lo metiste?
\t\t</p>
\t\t<p>
\t\t\tEn base a lo citado, pensamos en unificar nuestros propios tips y demos para evitar la ineficiente pérdida de tiempo en la recurrente búsqueda de información que ya tenías pero no sabes donde. Y al mismo tiempo, disponer de un soporte virtual para compartir nuestro aprendizaje, ampliarlo con feedback de usuarios y mostrar nuestros Hard Skills.
\t\t</p>
\t</div>
</section>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "docs/es/03-producto.html.twig";
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
\t<h1 class=\"doc-titol\">b-Nerd! El producto objetivo</h1>
\t<div class=\"doc-text\">
\t\t<p>
\t\t\tComo estudiantes, comprobamos hasta la saciedad, cuantas veces uno termina buscando por internet explicaciones, ejemplos, respuestas o manuales, a menudo muy específicas sobre infinidad de cosas que en un momento determinado están impidiéndote terminar una tarea.<br/>
\t\t\tSomos conscientes que elegimos estudiar en un sector en el que debemos estar en constante aprendizaje y no se equivocan los docentes al insistir en la habilidad y soltura a la hora de consultar por internet en webs oficiales, documentación de referencia, foros de contrastada reputación... No obstante observamos tres apuntes que consideramos muy relevantes.
\t\t</p>
\t\t<p>
\t\t\t1. Existe infinidad de información en internet. A menudo perdemos mas tiempo en detectar que información es correcta, obsoleta o de una fuente de dudosa reputación, que no leyendo y aprendiendo.<br/>
\t\t\tLo peor de todo es que cuando encuentras una solución que te vale, nunca la guardas. Y pasado un tiempo, si vuelves a necesitar de esa información, no te acuerdas de donde la encontraste.
\t\t</p>
\t\t<p>
\t\t\t2. En segundo lugar, pero no menos importante. Observamos como parecen exisitir dos grandes tipos de contenido muy diferenciados entre ellos. Los dirigidos a Noobs y los que van de Pro!<br/>
\t\t\tPermitidnos que nos expliquemos con más detalle.
\t\t</p>
\t\t<ul>
\t\t\t<li>
\t\t\t\tPrimero están esas páginas web, motivadas por la monetización  y centradas en el uso de estrategias SEO, más que por explicar algo útil, concreto, resumido y con sus pertinentes ejemplos. Te pegan un rollazo, indigerible, con explicaciones pa tontos y que encima, al final del artículo, no encuentras ni un fragmento de código ilustrativo.<br>
\t\t\t\tYa no leemos estos artículos en diagonal, los leemos directmente en vertical, buscando ese código de ejemplo que dudosamente encontraremos.
\t\t\t</li>
\t\t\t<br/>
\t\t\t<li>
\t\t\t\tPero luego están los Pro. Esas páginas web donde alguien que parece falto de autoestima o reconocimento social, aprovecha para soltar todas las palabrotas y tecnicismos posibles para explicar algo excesivamente complejo, a menudo porque él mismo se ha complicado la vida innecesarimente.<br/>
\t\t\t\tEsas páginas web que se pueden detectar rápidamente por un estilo vanidoso y una elevada capacidad por menospreciar el trabajo de otros. Forman parte de ese extenso grupo de minadores de moral.
\t\t\t</li>
\t\t</ul>
\t\t<p>
\t\t\t3. Por último, no lo observamos, lo padecemos todos a diario. La búsqueda recuerrente de ese fragmento de código que ya hiciste en su día y no tienes ni idea de en que carpeta, proyecto, archivo, máquina virtual... dónde lo metiste?
\t\t</p>
\t\t<p>
\t\t\tEn base a lo citado, pensamos en unificar nuestros propios tips y demos para evitar la ineficiente pérdida de tiempo en la recurrente búsqueda de información que ya tenías pero no sabes donde. Y al mismo tiempo, disponer de un soporte virtual para compartir nuestro aprendizaje, ampliarlo con feedback de usuarios y mostrar nuestros Hard Skills.
\t\t</p>
\t</div>
</section>
", "docs/es/03-producto.html.twig", "C:\\xampp\\htdocs\\symfony\\projecte_DAW\\symfony\\templates\\docs\\es\\03-producto.html.twig");
    }
}
