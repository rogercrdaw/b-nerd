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

/* docs/es/15-manual.html.twig */
class __TwigTemplate_5d4f693055b73026a1c11147c205701bf07eb871c3a6f9a54164f2945f699697 extends Template
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
\t<h1 class=\"doc-titol\">Manual de usuario e instalación de versión demo</h1>
\t<div class=\"doc-text\">
\t\t<p>
\t\t\tLa mejor forma de testear la web es registrar-se en ella.
\t\t\t<a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" target=\"blank\">enlace a registro de usuario</a><br>
\t\t\tPara su instalación en local, serà preciso disponer de Symofny y composer instalados
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"https://symfony.com/download\" alt=\"enlace a website oficial de Symfony\" target=\"blank\">Download Symfony from Symfony.com</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"https://getcomposer.org/download/\" alt=\"enlace a website oficial de composer\" target=\"blank\">Download Composer from getcomposer.org</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ol>
\t\t\t\t<li>Crear un
\t\t\t\t\t<a href=\"https://symfony.com/doc/current/setup.htmlnuevo\" alt=\"enlace a documentación oficial de Symfony\" target=\"blank\">nuevo proyecto --full</a>
\t\t\t\t\tde Symfony
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tVincular la carpeta del nuevo proyecto con nuestro
\t\t\t\t\t<a href=\"https://github.com/aleixr20/projecte_DAW/tree/master/symfony\" alt=\"enlace a repositoria Git\" target=\"blank\">repositorio Git</a><br/>
\t\t\t\t\t\$git remote show origin<br/>
\t\t\t\t\t\$git remote add origin https://github.com/aleixr20/projecte_DAW.git
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tCrea una base de datos y
\t\t\t\t\t<a href=\"https://symfony.com/doc/current/doctrine.html#configuring-the-database\" alt=\"enlace a documentación oficial de Symfony\" target=\"blank\">configura el archivo .env</a>
\t\t\t\t\tcon los datos de acceso a tu base de datos
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tejecutar en consola o terminal (si tu IDE no lo integra)<br>
\t\t\t\t\tphp bin/console make:migrations<br/>
\t\t\t\t\tphp bin/console doctrine:migrations:migrate<br/>
\t\t\t\t\tphp bin/console doctrine:fixtures:load<br/></li>
\t\t\t</ol>
\t\t\tEso deberia ser suficiente si no fuera por los componentes extras que instalamos y que posiblemente no tengas en la versión --full por defecto de un nuevo proyecto en Symfony.
\t\t\t<ul>
\t\t\t\t<li>composer requiere XX</li>
\t\t\t\t<li>composer requiere XX</li>
\t\t\t\t<li>composer requiere XX</li>
\t\t\t\t<li>composer requiere XX</li>
\t\t\t\t<li>composer requiere XX</li>
\t\t\t\t<li>composer requiere XX</li>
\t\t\t</ul>
\t\t</p>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "docs/es/15-manual.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "docs/es/15-manual.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/docs/es/15-manual.html.twig");
    }
}
