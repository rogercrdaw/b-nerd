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

/* docs/es/11-exitos.html.twig */
class __TwigTemplate_e4934abeb2b6fc1424a243046b948f2c11ff5870f4b35518c5d89571343344cf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "docs/es/11-exitos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "docs/es/11-exitos.html.twig"));

        // line 1
        echo "<section id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 1, $this->source); })()), "linkslug", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
\t<h1 class=\"doc-titol\">Eso de lo que nos sentimos orgullosos</h1>
\t<div class=\"doc-text\">
\t\t<p>
\t\t\tSomos conscientes de que no hemos inventado nada nuevo y que dentro de unos años lo veremos de distinta manera, pero a día de hoy estamos satisfechos con:
\t\t</p>

\t\tMobile First (responsive)
\t\t<ul>
\t\t\t<li>
\t\t\t\tNos marcamos como objetivo de diseño frontend seguir las tendéncias Mobile First. Aunque al final dedicasemos muchas horas y nos retrasase en la planificacón, debido a que todo el CSS y JS es de creación propia.
\t\t\t</li>
\t\t</ul>
\t\tUser Experience UI/UX
\t\t<ul>
\t\t\t<li>
\t\t\t\tTeníamos claro que la UX no es un vanalidad y que si existe es por algo. Procuramos implementar al máximo posible todas sus recomendaciones y creemos que los resultados hablan por si solos.
\t\t\t</li>
\t\t</ul>
\t\tDark Mode
\t\t<ul>
\t\t\t<li>
\t\t\t\tBendita inspiración! Loca propuesta, que surgió a medio proyecto y que pensabamos que sería más complicada. Decidimos probar de implementar y grata sorpresa la que nos llevamos, y que mola mucho.
\t\t\t</li>
\t\t</ul>
\t\tComentarios
\t\t<ul>
\t\t\t<li>
\t\t\t\tEste era un punto de nuestro proyecto, muy importante debido a que queriamos que existiese la posiblidad de dar un feedback a los artículos, con la finalidad de que usuarios mas Pro, vía comentarios, pudiesen proporcionar conocimento, correcciones y experiencias, que aportar a nuestro aprendizaje.<br/>
\t\t\t\tNo obstante, era de difícil implementación, si no gestionabamos de algun modo el acceso total a comentarios por parte de usuarios anónimos y/o bots.<br/>
\t\t\t\tA medio proyecto lo decartamos, pero al final lo logramos implementar.
\t\t\t</li>
\t\t</ul>

\t\tCode Snippet
\t\t<ul>
\t\t\t<li>
\t\t\t\tTodo programador visualiza mejor un fragmento de codigo, si lo ve como lo vería en su IDE. Creíamos que sería de mayor dificultad y con la ayuda de algunas librerías javascript lo conseguimos.
\t\t\t</li>
\t\t</ul>
\t\tIDE online y demos
\t\t<ul>
\t\t\t<li>
\t\t\t\tNos interesaba mucho incorporar en el proyecto que un artículo pudiese contener ejemplos de código (html, css y js) que se pudiesen probar online en un editor integrado parecido a w3schools, codepen, jsbin...
\t\t\t\t<br/>
\t\t\t\t<a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_detall", ["slug" => "integracion-de-un-ide-(html,-css-y-javascript)"]);
        echo "\" target=\"blank\">así lo hicimos</a>
\t\t\t</li>
\t\t</ul>

\t\tSerialize
\t\t<ul>
\t\t\t<li>
\t\t\t\tAunque no consegumos implementar un frontend reactivo con VUE para llamadas a una API, si aprendimos y profundizamos en un complemento de Symfony que está preparado y listo para su uso, con el propisto de devolver los articulos en formato JSON para adaptación del backend.
\t\t\t\t<br/>
\t\t\t\t<a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_detall", ["slug" => "convertir-entidades-de-symfony-en-json"]);
        echo "\" target=\"blank\">así lo hicimos</a>
\t\t\t</li>
\t\t</ul>

\t\tOpen Graph y posicionamiento SEO
\t\t<ul>
\t\t\t<li>
\t\t\t\tDejamos la estructura web ya prepada con el protocolo OpenGraph para el \"rich object share in a sociay media\". Además de las meta tags necesarias para la redacción de contenido enfocado a posicionamineto SEO.
\t\t\t\t<br/>
\t\t\t\t<a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_detall", ["slug" => "implementacion-de-open-graph-en-el-proyecto"]);
        echo "\" target=\"blank\">así lo hicimos</a>
\t\t\t</li>
\t\t</ul>

\t\tZona de demos
\t\t<ul>
\t\t\t<li>
\t\t\t\tConseguimos ajustar la configuración del servidor para la coexistencia de Symfony5 con una carpeta demos ajena a su enrutado.
\t\t\t\t<br/>
\t\t\t\t<a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_detall", ["slug" => "coexistir-rutas-del-servidor-con-las-de-symfony"]);
        echo "\" target=\"blank\">así lo hicimos</a>
\t\t\t</li>
\t\t</ul>

\t\tCuentas de correo
\t\t<ul>
\t\t\t<li>
\t\t\t\tPara evitar el registro indiscriminado de cuentas de usuario \"fake\" via bots. Resolvimos añadir la popular estraregia de forzar en el registro de usuarios, la validación de estos con un mail de verificación. Para ello se han configurado específicas cuentas de correo \"noreply\" y aprendimos de la integración de los services en Symofony y el componete SwiftMailer.
\t\t\t\t<br/>
\t\t\t\t<a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_detall", ["slug" => "validacion-de-email-con-swiftmailer-en-symfony"]);
        echo "\" target=\"blank\">así lo hicimos</a>
\t\t\t</li>
\t\t</ul>

\t\tDeployment
\t\t<ul>
\t\t\t<li>
\t\t\t\tYa desde el primer sprint, hicimos deployment de una versión de prueba en la plataforma labs de nuestro centro educativo con la finalidad de estar en todo momento preparados para los posibles problemes del despliegue en un entorno de producción real.
\t\t\t\t<br/>
\t\t\t\t<a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_detall", ["slug" => "despliegue-completo-de-symfony-en-el-servidor"]);
        echo "\" target=\"blank\">así lo hicimos</a>
\t\t\t</li>
\t\t</ul>

\t\tCertificado SSL
\t\t<ul>
\t\t\t<li>
\t\t\t\tSiguiendo la tendencia actual, hacia el encriptado de toda comunicación TIC, era relevante para nosotros, que si el producto final, salia a mercado y por lo tanto se hacía publico y visble a todo nerd, debía hacerse con un certificado SSL.
\t\t\t\t<br/>
\t\t\t\t<a href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_detall", ["slug" => "generar-certificado-ssl-gratuito"]);
        echo "\" target=\"blank\">así lo hicimos</a>
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
        return "docs/es/11-exitos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 100,  152 => 91,  140 => 82,  128 => 73,  116 => 64,  104 => 55,  92 => 46,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"{{section.linkslug}}\">
\t<h1 class=\"doc-titol\">Eso de lo que nos sentimos orgullosos</h1>
\t<div class=\"doc-text\">
\t\t<p>
\t\t\tSomos conscientes de que no hemos inventado nada nuevo y que dentro de unos años lo veremos de distinta manera, pero a día de hoy estamos satisfechos con:
\t\t</p>

\t\tMobile First (responsive)
\t\t<ul>
\t\t\t<li>
\t\t\t\tNos marcamos como objetivo de diseño frontend seguir las tendéncias Mobile First. Aunque al final dedicasemos muchas horas y nos retrasase en la planificacón, debido a que todo el CSS y JS es de creación propia.
\t\t\t</li>
\t\t</ul>
\t\tUser Experience UI/UX
\t\t<ul>
\t\t\t<li>
\t\t\t\tTeníamos claro que la UX no es un vanalidad y que si existe es por algo. Procuramos implementar al máximo posible todas sus recomendaciones y creemos que los resultados hablan por si solos.
\t\t\t</li>
\t\t</ul>
\t\tDark Mode
\t\t<ul>
\t\t\t<li>
\t\t\t\tBendita inspiración! Loca propuesta, que surgió a medio proyecto y que pensabamos que sería más complicada. Decidimos probar de implementar y grata sorpresa la que nos llevamos, y que mola mucho.
\t\t\t</li>
\t\t</ul>
\t\tComentarios
\t\t<ul>
\t\t\t<li>
\t\t\t\tEste era un punto de nuestro proyecto, muy importante debido a que queriamos que existiese la posiblidad de dar un feedback a los artículos, con la finalidad de que usuarios mas Pro, vía comentarios, pudiesen proporcionar conocimento, correcciones y experiencias, que aportar a nuestro aprendizaje.<br/>
\t\t\t\tNo obstante, era de difícil implementación, si no gestionabamos de algun modo el acceso total a comentarios por parte de usuarios anónimos y/o bots.<br/>
\t\t\t\tA medio proyecto lo decartamos, pero al final lo logramos implementar.
\t\t\t</li>
\t\t</ul>

\t\tCode Snippet
\t\t<ul>
\t\t\t<li>
\t\t\t\tTodo programador visualiza mejor un fragmento de codigo, si lo ve como lo vería en su IDE. Creíamos que sería de mayor dificultad y con la ayuda de algunas librerías javascript lo conseguimos.
\t\t\t</li>
\t\t</ul>
\t\tIDE online y demos
\t\t<ul>
\t\t\t<li>
\t\t\t\tNos interesaba mucho incorporar en el proyecto que un artículo pudiese contener ejemplos de código (html, css y js) que se pudiesen probar online en un editor integrado parecido a w3schools, codepen, jsbin...
\t\t\t\t<br/>
\t\t\t\t<a href=\"{{path('article_detall', {slug:'integracion-de-un-ide-(html,-css-y-javascript)'}) }}\" target=\"blank\">así lo hicimos</a>
\t\t\t</li>
\t\t</ul>

\t\tSerialize
\t\t<ul>
\t\t\t<li>
\t\t\t\tAunque no consegumos implementar un frontend reactivo con VUE para llamadas a una API, si aprendimos y profundizamos en un complemento de Symfony que está preparado y listo para su uso, con el propisto de devolver los articulos en formato JSON para adaptación del backend.
\t\t\t\t<br/>
\t\t\t\t<a href=\"{{path('article_detall', {slug:'convertir-entidades-de-symfony-en-json'}) }}\" target=\"blank\">así lo hicimos</a>
\t\t\t</li>
\t\t</ul>

\t\tOpen Graph y posicionamiento SEO
\t\t<ul>
\t\t\t<li>
\t\t\t\tDejamos la estructura web ya prepada con el protocolo OpenGraph para el \"rich object share in a sociay media\". Además de las meta tags necesarias para la redacción de contenido enfocado a posicionamineto SEO.
\t\t\t\t<br/>
\t\t\t\t<a href=\"{{path('article_detall', {slug:'implementacion-de-open-graph-en-el-proyecto'}) }}\" target=\"blank\">así lo hicimos</a>
\t\t\t</li>
\t\t</ul>

\t\tZona de demos
\t\t<ul>
\t\t\t<li>
\t\t\t\tConseguimos ajustar la configuración del servidor para la coexistencia de Symfony5 con una carpeta demos ajena a su enrutado.
\t\t\t\t<br/>
\t\t\t\t<a href=\"{{path('article_detall', {slug:'coexistir-rutas-del-servidor-con-las-de-symfony'}) }}\" target=\"blank\">así lo hicimos</a>
\t\t\t</li>
\t\t</ul>

\t\tCuentas de correo
\t\t<ul>
\t\t\t<li>
\t\t\t\tPara evitar el registro indiscriminado de cuentas de usuario \"fake\" via bots. Resolvimos añadir la popular estraregia de forzar en el registro de usuarios, la validación de estos con un mail de verificación. Para ello se han configurado específicas cuentas de correo \"noreply\" y aprendimos de la integración de los services en Symofony y el componete SwiftMailer.
\t\t\t\t<br/>
\t\t\t\t<a href=\"{{path('article_detall', {slug:'validacion-de-email-con-swiftmailer-en-symfony'}) }}\" target=\"blank\">así lo hicimos</a>
\t\t\t</li>
\t\t</ul>

\t\tDeployment
\t\t<ul>
\t\t\t<li>
\t\t\t\tYa desde el primer sprint, hicimos deployment de una versión de prueba en la plataforma labs de nuestro centro educativo con la finalidad de estar en todo momento preparados para los posibles problemes del despliegue en un entorno de producción real.
\t\t\t\t<br/>
\t\t\t\t<a href=\"{{path('article_detall', {slug:'despliegue-completo-de-symfony-en-el-servidor'}) }}\" target=\"blank\">así lo hicimos</a>
\t\t\t</li>
\t\t</ul>

\t\tCertificado SSL
\t\t<ul>
\t\t\t<li>
\t\t\t\tSiguiendo la tendencia actual, hacia el encriptado de toda comunicación TIC, era relevante para nosotros, que si el producto final, salia a mercado y por lo tanto se hacía publico y visble a todo nerd, debía hacerse con un certificado SSL.
\t\t\t\t<br/>
\t\t\t\t<a href=\"{{path('article_detall', {slug:'generar-certificado-ssl-gratuito'}) }}\" target=\"blank\">así lo hicimos</a>
\t\t\t</li>
\t\t</ul>

\t</div>
</section>
", "docs/es/11-exitos.html.twig", "C:\\xampp\\htdocs\\symfony\\projecte_DAW\\symfony\\templates\\docs\\es\\11-exitos.html.twig");
    }
}
