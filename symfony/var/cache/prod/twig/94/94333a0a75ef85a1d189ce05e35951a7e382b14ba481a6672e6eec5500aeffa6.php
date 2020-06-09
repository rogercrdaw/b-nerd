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

/* docs/es/17-conclusiones.html.twig */
class __TwigTemplate_e817edbd5ce290614515956711400e90986f9f347af74397db4a79e324f43f2d extends Template
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
\t<h1 class=\"doc-titol\">Conclusiones finales</h1>
\t<div class=\"doc-text\">
\t\t<p>
\t\t\tResumen de cierre, conclusiones finales
\t\t</p>


\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "docs/es/17-conclusiones.html.twig";
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
        return new Source("", "docs/es/17-conclusiones.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/docs/es/17-conclusiones.html.twig");
    }
}
