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

/* docs/es/09-bbdd.html.twig */
class __TwigTemplate_8b33c16e48e28818cc362a100b8b48d511db7d1c06e9311152e505ed85553525 extends Template
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
\t<h1 class=\"doc-titol\">Base de datos</h1>
\t<div class=\"doc-text\">
\t\t<p>
\t\t\tNuestra idea inicial sobre la base de datos era
\t\t</p>

\t\t<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("docs/files/phpMyAdmin-DBprint.pdf"), "html", null, true);
        echo "\" alt\"enlace a archivo pdf con informe de la base de datos\" target=\"blank\">importacio PDF de la DB</a>

\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "docs/es/09-bbdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "docs/es/09-bbdd.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/docs/es/09-bbdd.html.twig");
    }
}
