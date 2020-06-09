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

/* home/ca_section_1.html.twig */
class __TwigTemplate_bc8093c83fabf17a86c05513430890ace09d7468f8770880df68f74833e7eb83 extends Template
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
        echo "<section id=\"about-us\">
\t<h1 class=\"titulo\">Somos Nerds! puros Nerds toDevelop!</h1>

\t<div class=\"text\">
\t\t<p>Este es el resultado del proyecto de fin de ciclo de tres compañeros de DAW.<br>
\t\t\tAquí intentaremos unificar todos esos recursos, apuntes, ejercicios, enlaces, tips y cosas que estamos hartos de perder el tiempo buscando de forma recursiva y reiterado entre nuestros archivos o el infinito mundo de internet.
\t\t</p>
\t\t<p>
\t\t\tMuchos direis que podriamos haber usado un Drive, Cloud, Git... pero la realidad es que despues de vivir la experiencia de empezar a estudiar en el sector de las TIC, sabemos como puede ser de desmotivador en ciertos momentos buscar documentación por internet.  Y como lo vivimos y sabemos cuanto nos hubiese gustado que nos hechasen una mano en esos momentos de ansiedad, aprovechamos para compartir nuestros limitados conocimientos y experiencias con todos esos compañeros que se animan y empiezan a dar sus primeros pasos en este sector, como en su dia nos hubiese gustado que hicieran con nosotros
\t\t</p>
\t\t<p>
\t\t\tAdictos a la programación, Geeks de las TIC. Aprendimos mucho, y NO queremos para de hacerlo. Por ello, si en nuestros apuntes detectas información incorrecta o imprecisa, no dudes en informarnos, pues sabemos que estamos en un sector en constante evolución y somos conscientes que hay mucho a mejorar.<br/>
\t\t\tToda contrubución a nuestro aprendizaje seria mas que bienvenida.
\t\t</p>

\t\t<p>
\t\t\tPero cuidado, si eres uno de esos programadores Pro repleto de orgullo y con ganas de criticar, te equivocaste de web. Tomate una pildora de humildad y empieza por preguntarte\t<i>¿Si tan experto eres, que haces buscando ayuda en una web de novatos?</i>. Ahorrate los tecnicismos y los comentarios vanidosos, los minadores de moral no tienen futuro. Aporta o Aparta!!
\t\t</p>

\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "home/ca_section_1.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/ca_section_1.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/home/ca_section_1.html.twig");
    }
}
