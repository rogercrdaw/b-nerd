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

/* home/ca_section_3.html.twig */
class __TwigTemplate_557d98209ec511a37397b5cb0a057b4259cb44c3c49c66b357803940d3e1740c extends Template
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
        echo "<section id=\"how\">
\t<h1 class=\"titulo\">Keel Calm! Speak Encrypt!</h1>
\t<div class=\"text\">


\t\t<p>
\t\t\tEl derecho a la privacidad es como el derecho a la libertad de expresión. Que no tengas nada que decir, no significa que renuncies a tu derecho a expresarte, asi como que no tengas nada que esconder, no significa que renuncies a tu derecho a la privacidad.<br/>
\t\t\t&nbsp;&nbsp;<i>\"Eduard Snowden\"</i>
\t\t</p>
\t\t<p>
\t\t\tNo obstante no hay que confundir discreción con anonimato. En esta página web ni usamos cookies, ni recolectamos datos.<br/>
\t\t\tPedimos el mail en el registro de nuevos usuarios para evitar los molestos Bots creaCuentasFake. Hoy no te mandaremos spam, y con toda probabilidad, mañana tampoco.</p>
\t\t<p>
\t\t\tNos planteamos el uso de GoogleAnalitics por un tema de estadísticas y visitas pero..... para que? si esta web es mas para nosotros que para navegantes curiosos! Y si al final lo implementásemos, seguro seria con nuestro propio codigo, que al fin y al cabo, lo aprendimos y podemos hacerlo.
\t\t</p>


\t\t";
        // line 30
        echo "\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "home/ca_section_3.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  56 => 30,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/ca_section_3.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/home/ca_section_3.html.twig");
    }
}
