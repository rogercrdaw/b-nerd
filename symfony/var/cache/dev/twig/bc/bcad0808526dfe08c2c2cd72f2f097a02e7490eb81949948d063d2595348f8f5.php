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

/* docs/es/04-objetivos.html.twig */
class __TwigTemplate_cf96b6f567bc4dd0476733f44ea279edc9a8c356e01019c0ededf664735d0b11 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "docs/es/04-objetivos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "docs/es/04-objetivos.html.twig"));

        // line 1
        echo "<section id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 1, $this->source); })()), "linkslug", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
\t<h1 class=\"doc-titol\">Objectivos</h1>
\t<div class=\"doc-text\">
\t\t<p>
\t\t\tEn la fase inicial de la toma de decsiones sobre el producto que esperábamos obtener al final del proyecto, nos marcamos unos objetivos globales que ya mencionamos anteriormente al inicio de esta documentación. A continuación intentaremos exponer una lista más detallada sobre aquellos puntos que consideramos prioritarios:
\t\t</p>
\t\tFrontend
\t\t<ul>
\t\t\t<li>
\t\t\t\tQue el diseño fuese sencillo, simple y minimalista. Al mismo tiempo, mediante sutiles detalles, mostrase nuestra capacidad para la programación de elementos dinámicos complejos (hover, scroll, focusin, modales...).
\t\t\t</li>
\t\t\t<li>
\t\t\t\tQue en la lectura de un artículo, el autor y fecha de publicación estuviesen siempre visibles y la gama de colores se adaptase al contenido.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tQue en la vista de un artículo, los fragmentos de código se viesen formatados como en un IDE.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tCrear nuestros propios CSS y JS, evitando el uso de frameworks como Bootstrap, jQuery o Googleapis, así como el peso de las imágenes, buscando reducir al máximo el número de request del head.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tMobile first. Usar media queries y JS para una adaptación full responsive.
\t\t\t</li>

\t\t\t<li>
\t\t\t\tUsar un framework reactivo como VUE para dar agilidad en algunas funcionalidades como el listado de artículos de una categoría.
\t\t\t</li>
\t\t</ul>
\t\tBackend
\t\t<ul>
\t\t\t<li>
\t\t\t\tUtilizar Symfony5 por sus facilidades en la gestión de la base de datos, asi como su enrutado que te permite estructurar las URL del navegador para integrar estrategias de marketing o posicionamiento SEO.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tAprovechar al máximo las ventajas que ofrece TWIG en el renderizado con el uso de Objetos en formato JSON.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tConseguir cohexistir una carpeta de demos ajena al enrutador de Symfony.
\t\t\t</li>
\t\t</ul>
\t\tDeployment
\t\t<ul>
\t\t\t<li>
\t\t\t\tQue el desarrollo del producto final, nos permitise simular precisamente el desarrollo de un producto real, por lo tanto, que saliese a mercado, público y accesible para todo el mundo.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tQue la web tuviese certificado de seguridad SSL.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tQue la web tuviese estadísticas propias o implementar Google Analitics.
\t\t\t</li>
\t\t</ul>
\t\tAccessibilidad, User Experience y posicionamiento SEO
\t\t<ul>
\t\t\t<li>
\t\t\t\tUtilización correcta de las etiquetas HTML5 asi como su distribución, estructura y orden tanto para conseguir la doble AA en accesibilidad como para posicionamente SEO.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tQue en todo momento se aplicasen las recomendaciones UX sobre navegabilidad y validación de formularios ontime para evitar la molesta recarga de una página con una respuesta de error.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tIntegrar meta etiquetas tanto de idioma, descripción, viewport... para el posicionamiento SEO como de Open Graph que posibiliten el \"compartir\" los artículos en versión móvil o redes sociales.
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
        return "docs/es/04-objetivos.html.twig";
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
\t<h1 class=\"doc-titol\">Objectivos</h1>
\t<div class=\"doc-text\">
\t\t<p>
\t\t\tEn la fase inicial de la toma de decsiones sobre el producto que esperábamos obtener al final del proyecto, nos marcamos unos objetivos globales que ya mencionamos anteriormente al inicio de esta documentación. A continuación intentaremos exponer una lista más detallada sobre aquellos puntos que consideramos prioritarios:
\t\t</p>
\t\tFrontend
\t\t<ul>
\t\t\t<li>
\t\t\t\tQue el diseño fuese sencillo, simple y minimalista. Al mismo tiempo, mediante sutiles detalles, mostrase nuestra capacidad para la programación de elementos dinámicos complejos (hover, scroll, focusin, modales...).
\t\t\t</li>
\t\t\t<li>
\t\t\t\tQue en la lectura de un artículo, el autor y fecha de publicación estuviesen siempre visibles y la gama de colores se adaptase al contenido.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tQue en la vista de un artículo, los fragmentos de código se viesen formatados como en un IDE.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tCrear nuestros propios CSS y JS, evitando el uso de frameworks como Bootstrap, jQuery o Googleapis, así como el peso de las imágenes, buscando reducir al máximo el número de request del head.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tMobile first. Usar media queries y JS para una adaptación full responsive.
\t\t\t</li>

\t\t\t<li>
\t\t\t\tUsar un framework reactivo como VUE para dar agilidad en algunas funcionalidades como el listado de artículos de una categoría.
\t\t\t</li>
\t\t</ul>
\t\tBackend
\t\t<ul>
\t\t\t<li>
\t\t\t\tUtilizar Symfony5 por sus facilidades en la gestión de la base de datos, asi como su enrutado que te permite estructurar las URL del navegador para integrar estrategias de marketing o posicionamiento SEO.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tAprovechar al máximo las ventajas que ofrece TWIG en el renderizado con el uso de Objetos en formato JSON.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tConseguir cohexistir una carpeta de demos ajena al enrutador de Symfony.
\t\t\t</li>
\t\t</ul>
\t\tDeployment
\t\t<ul>
\t\t\t<li>
\t\t\t\tQue el desarrollo del producto final, nos permitise simular precisamente el desarrollo de un producto real, por lo tanto, que saliese a mercado, público y accesible para todo el mundo.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tQue la web tuviese certificado de seguridad SSL.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tQue la web tuviese estadísticas propias o implementar Google Analitics.
\t\t\t</li>
\t\t</ul>
\t\tAccessibilidad, User Experience y posicionamiento SEO
\t\t<ul>
\t\t\t<li>
\t\t\t\tUtilización correcta de las etiquetas HTML5 asi como su distribución, estructura y orden tanto para conseguir la doble AA en accesibilidad como para posicionamente SEO.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tQue en todo momento se aplicasen las recomendaciones UX sobre navegabilidad y validación de formularios ontime para evitar la molesta recarga de una página con una respuesta de error.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tIntegrar meta etiquetas tanto de idioma, descripción, viewport... para el posicionamiento SEO como de Open Graph que posibiliten el \"compartir\" los artículos en versión móvil o redes sociales.
\t\t\t</li>
\t\t</ul>
\t</div>
</section>
", "docs/es/04-objetivos.html.twig", "C:\\xampp\\htdocs\\symfony\\projecte_DAW\\symfony\\templates\\docs\\es\\04-objetivos.html.twig");
    }
}
