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
class __TwigTemplate_a879e6c8717fa800b1f46822543709924d898ad4dcc1039ec4d9e3e48f5cab7b extends Template
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
\t<h1 class=\"doc-titol\">Eso de lo que nos sentimos orgullosos</h1>
\t<div class=\"doc-text\">
\t\t<p>
\t\t\tTrump nos felicita por nuestra gran exito en el desarollo
\t\t</p>

\t\tMobile First (responsive)
\t\t<ul>
\t\t\t<li>
\t\t\t\tNos marcamos como objetivo de diseño frontend seguir las tendéncias Mobile First. Aunque al final dedicasemos muchas horas y nos retrasase en la planificacón, debido a que todo el CSS y JS es propio y *no copiado*, estmos muy stisfechos con los resultados obtenidos
\t\t\t</li>
\t\t</ul>
\t\tUser Experience UI/UX
\t\t<ul>
\t\t\t<li>
\t\t\t\tTeniamos claro que la UX no es un vanalidad y que si existe es por algo. Procuramos implementar al máximo posible todas sus recomendaciones y creemos que los resultados *dicen mucho al rescepto*
\t\t\t</li>
\t\t</ul>
\t\tDark Mode
\t\t<ul>
\t\t\t<li>
\t\t\t\tBendita inspiración! Loca propuesta, que surgió a medio proyecto y que dada su poca complejidad, decidimos probar de implementar. Grata sorpresa la que nos llavamos y de la que *estamos muy satisfechos* o *mola mucho*
\t\t\t</li>
\t\t</ul>
\t\tComentaris
\t\t<ul>
\t\t\t<li>
\t\t\t\tEste era un punto de nuestro proyecto, muy importante debido a que queriamos que existiese la posiblidad de dar un feedback a los articulos, con la finalidad de que usuarios mas Pro, via comentarios, pudiesen proporcionar conocimento, correcciones y experiencias, que aportar a nuestro aprendizage.<br/>
\t\t\t\tNo obstante, era de dificil implementación, si no gestionabamos de alguna modo el acceso total a comentarios por parte de usuarios anonimos y/o bots.<br/>
\t\t\t\t*En un prinicipo, por falta de tiempo en su dessarrollo, quedó descartado y al final, lo conseguimos implementar*
\t\t\t</li>
\t\t</ul>

\t\tCode Snippet
\t\t<ul>
\t\t\t<li>
\t\t\t\tTodo programador *entiende* mejor un fragmento de codigo, si lo ve como lo veria en su IDE. Creiamo que seria de mayor dificultad y sin embargo descubrimos la existencia de muchas de librerias javascript dedicadas a eso.
\t\t\t</li>
\t\t</ul>
\t\tIDE online y demos
\t\t<ul>
\t\t\t<li>
\t\t\t\tNos interesa mucho, incorporar en *la web*, que un articulo pudiese contener ejemplos de codigo (html, css y js) que se pudiesen probar online en un editor integrado parecido a w3schools, codepen, jsbin...
\t\t\t\t<br/>
\t\t\t\t<a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_detall", ["slug" => "integracion-de-un-ide-(html,-css-y-javascript)"]);
        echo "\" target=\"blank\">ver explicación detallada</a>
\t\t\t</li>
\t\t</ul>

\t\tSerialize
\t\t<ul>
\t\t\t<li>
\t\t\t\tAunque no consegumos implementar un frontend reactivo con VUE para llamadas a backend tipo API, Si aprendimos y profundizamos en un *complemento* de Symfony que esta preparado y listo para su uso, con el propisto de devolver los articulos en formato JSON para adaptación del backend a tipo API.
\t\t\t\t<br/>
\t\t\t\t<a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_detall", ["slug" => "convertir-entidades-de-symfony-en-json"]);
        echo "\" target=\"blank\">ver explicación detallada</a>
\t\t\t</li>
\t\t</ul>

\t\tMeta OG y posicionamiento SEO
\t\t<ul>
\t\t\t<li>
\t\t\t\tDejamos la estructura web ya prepada con el protocolo OpenGraph para el \"rich object share in a sociay media\". Ademas de las meta tags necessarias para la redacción de contenido enfocado a posicionamineto SEO
\t\t\t\t<br/>
\t\t\t\t<a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_detall", ["slug" => "implementacion-de-open-graph-en-el-proyecto"]);
        echo "\" target=\"blank\">ver explicación detallada</a>
\t\t\t</li>
\t\t</ul>

\t\tApartat de demos
\t\t<ul>
\t\t\t<li>
\t\t\t\tConseguimos ajusta la configuración del servidor para la coexistecnia de Symfony con una carpeta demos externa a su enrutado.
\t\t\t\t<br/>
\t\t\t\t<a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_detall", ["slug" => "coexistir-rutas-del-servidor-con-las-de-symfony"]);
        echo "\" target=\"blank\">ver explicación detallada</a>
\t\t\t</li>
\t\t</ul>

\t\tCuentas de correo
\t\t<ul>
\t\t\t<li>
\t\t\t\tVara evitar el registro indiscriminado de cuentas de usuario \"fake\" via bots. Resolvimos añadir la *popular* estraregia de forçar en el registro de usuarios, la validación de estos con un mail de verificación. Para ello se han configurado especificas cuentas de correo \"no-replay\" y aprendimos de la integración de los services en Symofony y el componete SwiftMailer
\t\t\t\t<a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_detall", ["slug" => "validacion-de-email-con-swiftmailer-en-symfony"]);
        echo "\" target=\"blank\">ver explicación detallada</a>
\t\t\t</li>
\t\t</ul>

\t\tDeployment
\t\t<ul>
\t\t\t<li>
\t\t\t\tYa desde el primer sprint, hicimos deployment de una versión de prueba en la plataforma labs de nuestro centro educstivo con la finalidad de estar en todo momento XXX los posibles problemes del despliegue en un entorno de producción real.<br/>
\t\t\t\tAprovechamos que teniamos un dominio y hosting gratuito producto de la participación en el concurso \"webs al punt cat\" para realizar un Deplayment integral lo mas parecido posible a una situación real.
\t\t\t\t<a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_detall", ["slug" => "despliegue-completo-de-symfony-en-el-servidor"]);
        echo "\" target=\"blank\">ver explicación detallada</a>
\t\t\t</li>
\t\t</ul>

\t\tCertificat SSL
\t\t<ul>
\t\t\t<li>
\t\t\t\tSiguiendo la tendencia actual, hacia el encriptado de toda comunicación TIC, era relevante para nosotros, que si el producto final, salia a mercado y por lo tanto se hacia publicaba y visble a todo nerd, debia hacer-se con un certificado SSL
\t\t\t\t<a href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_detall", ["slug" => "generar-certificado-ssl-gratuito"]);
        echo "\" target=\"blank\">ver explicación detallada</a>
\t\t\t</li>
\t\t</ul>

\t</div>
</section>
";
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
        return array (  156 => 98,  145 => 90,  133 => 81,  122 => 73,  110 => 64,  98 => 55,  86 => 46,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "docs/es/11-exitos.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/docs/es/11-exitos.html.twig");
    }
}
