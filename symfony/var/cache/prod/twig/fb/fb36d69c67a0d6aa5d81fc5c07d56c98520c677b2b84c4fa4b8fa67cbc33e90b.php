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
class __TwigTemplate_67d39d288385c7290f1ce9b1cafc39307983c7687b8dbdd3b75e5ceb83e959ae extends Template
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
\t<h1 class=\"doc-titol\">Objectivos</h1>
\t<div class=\"doc-text\">
\t\t<p>
\t\t\tEn la fase inicial de toma de decsiones sobre el producto que esperabamos obtener al final del proyecto, nos marcamos unos objetivos globales que ya mencionamos anteriormente al inicio de esta documentación. A continuacion intentaremos exponer una lista mas específica sobre aquellos puntos en los que sobretodo queriamos trabajar
\t\t</p>
\t\tFrontend
\t\t<ul>
\t\t\t<li>
\t\t\t\tUtilización correcta de las etiquetas HTML5 y distribución correcta en su estructura y orden tanto para accesibilidad como para posicionamente SEO. Concretamente, uso del header, nav, main, section, label. La web no tiene footer así que esta etiqueta la omitimos.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tUso de alt en todos los enlaces y title en su mayoria para la doble AA de accesibilidad.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tQue en todo momento se aplicasen las recomendaciones UX sobre navegabilidad y validación de formularios ontime para evitar la molesta recarga de una página con una respuesta de error
\t\t\t</li>
\t\t\t<li>
\t\t\t\tQue en la lectura de un articulo, el autor y fecha de publicacón estubiesen siempre visible y la gama de colores cambiase adaptandose al color del logo de la categoria de ese artículo
\t\t\t</li>
\t\t\t<li>
\t\t\t\tQue en la vista de un articulo, los fragmento de codigo se viesen formatados como en un IDE
\t\t\t</li>
\t\t\t<li>
\t\t\t\tCrear nuestros propio CSS y JS, evitando el uso de frameworks com Bootstrap, jQuery o googleapis, así como el peso de las imagenes. Basicamente reducir al máximo el numero de request del head procurando así una carga ràpida de la web.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tMobile first. Usar media querys y JS para una adaptacion full responsive
\t\t\t</li>
\t\t\t<li>
\t\t\t\tUn diseño sencillo, simple y minimalista, que al mismo tiempo, mediante sutiles detalles, sugiriese nuestra capacidad para la programación de elementos dinàmicos complejos (hover, scroll, focusin, modales...)
\t\t\t</li>
\t\t\t<li>
\t\t\t\tUsar un framework reactivo como VUE para dar agilidad en algunas funcionalidades como el listado de artículos de una categoria
\t\t\t</li>
\t\t\t<li>
\t\t\t\tCOMENTARIOS*
\t\t\t</li>
\t\t</ul>
\t\tBackend
\t\t<ul>
\t\t\t<li>
\t\t\t\tUtilizar Symfony por sus facilidades en la gestón de la base de datos.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tPotenciar el enrutado de Symfony que te permite estrucutrar las URL del navegador para integrar estrategias de marketing o posicionamiento SEO.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tAprovechar al máximo las ventajas que ofrece TWIG en el renderizado con el uso de Objetos y JSONs.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tConseguir cohexistir una carpeta de demos ajena al enrutador de Symfony
\t\t\t</li>
\t\t</ul>
\t\tDeployment
\t\t<ul>
\t\t\t<li>
\t\t\t\tQue el desarrolo del producto final, nos permita simular precisamente el desarrolo de un producto real, por lo tanto, que saliese a mercado, publico y accesible para todo el mundo, aprovechando el dominio y hosting gratuito, que nos regalaban en concurso webs al punt cat
\t\t\t</li>
\t\t\t<li>
\t\t\t\tQue la web tubiese certificado SSL para https
\t\t\t</li>
\t\t\t<li>
\t\t\t\tQue la web tubiese estadísticas propias o implementar Google Analitics
\t\t\t</li>
\t\t</ul>
\t\tAccessibilidad, User Experience y posicionamiento SEO
\t\t<ul>
\t\t\t<li>
\t\t\t\tQue la web valide doble AA en cuanto a accesibilidad
\t\t\t</li>
\t\t\t<li>
\t\t\t\tIntegrar meta etiquetas de idioma, descripcion, viewport... para el posicionamiento SEO como haria un CRM Wordpress
\t\t\t</li>
\t\t\t<li>
\t\t\t\tIntegrar funciones que renderizen las meta etiquetas OG para posibilitar el \"compartir\" los articulos en moviles o redes sociales, usando el propio contenido del artículo y el logo de su categoria principal.
\t\t\t</li>
\t\t</ul>
\t</div>
</section>

";
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
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "docs/es/04-objetivos.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/docs/es/04-objetivos.html.twig");
    }
}
