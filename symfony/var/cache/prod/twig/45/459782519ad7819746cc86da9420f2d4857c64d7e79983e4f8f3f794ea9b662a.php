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
class __TwigTemplate_cafd1640dce7cea616ad11e9a613f52a623aecfb853b4d02239f4b8b4956affb extends Template
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
\t<h1 class=\"doc-titol\">b-Nerd! El producto objetivo</h1>
\t<div class=\"doc-text\">
\t\t<p>
\t\t\tComo estudiantes, comprobamos hasta la saciedad, cuantas veces uno termina buscando por internet explicaciones, ejemplos, respuestas o mauales sobre pequeñas cosas, a menudo muy específicas sobre infinidad de cosas que en un momento determinado estan impidiendote terminar una tarea.<br/>
\t\t\tSomos conscientes que elegimos estudiar en un sector en el que debemos estar en constante aprendizage y no se equivocan los docentes al insistir en la habilidad y soltura a la hora de consultar por internet en webs oficiales, documentacion de referencia, foros de contrastada reputación... No obstante observamos tres apuntes que consideramos muy relevantes.
\t\t</p>
\t\t<p>
\t\t\t1. Existe infinidad e información en internet. A menudo perdemos mas tiempo en detectar que información correcta, obsoleta o de una fuente de reputación, que no leiendo y aprendiendo.<br/>
\t\t\tLo peor de todo es que cuando encuentras una solución que te vale, nunca la guardas. Y pasado un tiempo, si vuelves a necessitar de esa información, ni te acuerdas de donde la encontraste.
\t\t</p>
\t\t<p>
\t\t\t2. En segundo plano, pero muy relevante. Observamos como parecen exisitir dos grandes bloques de tipologia de contenidos con un gran salto diferencial entre ellos. Los contenidos para noobs y los que van de Pro! Este punto es muy importante y permitidnos que lo expliquemos con cierto detalle.
\t\t</p>
\t\t<ul>
\t\t\t<li>
\t\t\t\tPrimero estan esas pàginas web, motivadas por la monetización y por ello, mas centradas en el uso de estrategias SEO, que no de explicar algo util, explicito, de forma resumida y con los pertinentes ejemplos. Te pegan un artículo extra largo, indigerible, con explicaciones pa tontos y que encima, al final del articulo, no encuentras ni un fragmento de codigo ilustrativo. Se preocupan mas en repetir mil veces las palabras clave del SEO que de compartir conocimientos.<br>
\t\t\t\tYa no leemos estos articulos en diagonal, los leemos directmente en vertical, buscando ese codigo de ejemplo que dudosamente encontraremos.
\t\t\t</li>
\t\t\t<br/>
\t\t\t<li>
\t\t\t\tPero luego estan los Pro. Esas pàginas web donde alguien que parece falto de autoestima o reconocimento social, aprovecha para soltar todas las palabrotas y tecnicismos posibles para explicar algo excesivamente complejo, amenudo porque el mismo se ha complicado la vida inecessarimente. Esas pàginas web que se pueden detectar ràpidamente por un estilo vanidosidad y una elevada capacidad por menospreciar el trabajo de otros.<br/>
\t\t\t\tFacilmente podemos asociarlos al extenso grupo de minadores de moral.
\t\t\t</li>
\t\t</ul>
\t\t<p>
\t\t\t3. Por ultimo, no lo observamos, lo padecimos todos a diario. La busqueda recuerrente de ese fragmento de codigo que ya hiciste en su dia y no tienes ni idea de en que carpeta, proyecto, archivo, maquina virtual.... y donde lo metiste?
\t\t</p>
\t\t<p>
\t\t\tEn base a lo citado, pensamos en unificar nuestros propios tips y demos para evitar la ineficiente perdida de tiempo en la recurrente buscando de información que ya tenias pero no sabes donde. Y al mismo tiempo, disponer de un soporte visual para compartir nuestro aprendizaje, ampliarlo con feedback de usuarios y mostrar nuestros Hard Skills
\t\t</p>
\t</div>
</section>
";
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
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "docs/es/03-producto.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/docs/es/03-producto.html.twig");
    }
}
