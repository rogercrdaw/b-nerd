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

/* docs/es/13-media.html.twig */
class __TwigTemplate_eb14143a7f38a4f6c56d1cc5f2f472017f6fad6ed9c4532df33bae1747e48cb1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "docs/es/13-media.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "docs/es/13-media.html.twig"));

        // line 1
        echo "<section id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 1, $this->source); })()), "linkslug", [], "any", false, false, false, 1), "html", null, true);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "docs/es/13-media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 12,  63 => 11,  57 => 8,  52 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"{{section.linkslug}}\">
\t<h1 class=\"doc-titol\">Pitch y presentación</h1>
\t<div class=\"doc-text\">
\t\t<p>
\t\t\tVer
\t\t\t<a href=\"{{ asset('docs/files/presentacion_resumen_es.odp') }}\" alt\"ver presentación resumen\" target=\"blank\">presentación resumen (ES)</a><br/>
\t\t\tSee
\t\t\t<a href=\"{{ asset('docs/files/presentacion_resumen_en.odp') }}\" alt\"see our summary presentation\" target=\"blank\">our summary presentation (EN)</a>
\t\t</p>

\t\t<video width=\"100%\" poster=\"{{ asset('docs/docs-img/video_pitch_preview.jpg') }}\" controls>
\t\t\t<source src=\"{{ asset('docs/files/video_pitch_hd.mp4') }}\" type=\"video/mp4\">
\t\t\tYour browser does not support HTML video.</video>
\t</p>
</div></section>
", "docs/es/13-media.html.twig", "C:\\xampp\\htdocs\\symfony\\projecte_DAW\\symfony\\templates\\docs\\es\\13-media.html.twig");
    }
}
