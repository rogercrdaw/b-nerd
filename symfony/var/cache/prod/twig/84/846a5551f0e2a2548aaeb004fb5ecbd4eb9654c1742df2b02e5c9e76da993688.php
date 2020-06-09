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

/* docs/es/14-media.html.twig */
class __TwigTemplate_32764737180f265c7298bd976ddca8279d79b351a152382f0e357a35e670a9b3 extends Template
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
\t<h1 class=\"doc-titol\">Pitch y presentación</h1>
\t<div class=\"doc-text\">
\t\t<p>
\t\t\tVer
\t\t\t<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("docs/files/presentacion_resumen_es.odp"), "html", null, true);
        echo "\" alt\"ver presentación resumen\" target=\"blank\">presentación resumen (ES)</a><br/>
\t\t\tSee
\t\t\t<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("docs/files/presentacion_resumen_en.odp"), "html", null, true);
        echo "\" alt\"see our summary presentation\" target=\"blank\">our summary presentation (EN)</a>
\t\t</p>

\t\t<video width=\"100%\" poster=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("docs/docs-img/video_pitch_preview.jpg"), "html", null, true);
        echo "\" controls>
\t\t\t<source src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("docs/files/video_pitch_hd.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\">
\t\t\tYour browser does not support HTML video.</video>
\t</p>
</div></section>
";
    }

    public function getTemplateName()
    {
        return "docs/es/14-media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 12,  57 => 11,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "docs/es/14-media.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/docs/es/14-media.html.twig");
    }
}
