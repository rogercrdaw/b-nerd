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

/* docs/es/12-seguridad.html.twig */
class __TwigTemplate_6800e664a2e8265dc28da519a0fdd68325b10350e93fd5dae7409eea8425bb4d extends Template
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
\t<h1 class=\"doc-titol\">Aspectos de seguridad trabajados</h1>
\t<div class=\"doc-text\">
\t\t\t<p>
\t\t\tLimitación de comentarios a solo usuarios registrados. Asi mismo, solo visibles cuando una admin los modere
\t\t</p>
\t\t\t\t\t<p>
\t\t\tControl con JS para evitar la insercion de URL completes en redes sociales
\t\t</p>
\t\t<p>
\t\t\tLimitación de reegistro de usuario via Bots mediante mail de confirmación para la verificación de registro
\t\t</p>


\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "docs/es/12-seguridad.html.twig";
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
        return new Source("", "docs/es/12-seguridad.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/docs/es/12-seguridad.html.twig");
    }
}
