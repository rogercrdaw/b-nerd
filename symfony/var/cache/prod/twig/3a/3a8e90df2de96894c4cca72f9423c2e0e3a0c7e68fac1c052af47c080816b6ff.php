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

/* docs/es/13-valoraciones.html.twig */
class __TwigTemplate_b5f4415198554780a0e552f235cb85338c1bf8a88823f0b010b986509a6aaff6 extends Template
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
\t<h1 class=\"doc-titol\">Valoraciones personales</h1>
\t<div class=\"doc-text\">

\t\t<h5>Adam JJ</h5>
\t\t<p>
\t\t\thola que tal
\t\t</p>
\t\t<h5>Aleix RA</h5>
\t\t<p>
\t\t\tYo no soy Nerd
\t\t</p>
\t\t<h5>Roger CR</h5>
\t\t<p>
\t\t\tTodos somos Nerds
\t\t</p>


\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "docs/es/13-valoraciones.html.twig";
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
        return new Source("", "docs/es/13-valoraciones.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/docs/es/13-valoraciones.html.twig");
    }
}
