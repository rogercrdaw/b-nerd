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
class __TwigTemplate_f8af2231fa2f13eb4b2559516cf573471bd0b049ba9d3b1e66bf80a41ffc17bc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "docs/es/12-seguridad.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "docs/es/12-seguridad.html.twig"));

        // line 1
        echo "<section id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 1, $this->source); })()), "linkslug", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
\t<h1 class=\"doc-titol\">Aspectos de seguridad trabajados</h1>
\t<div class=\"doc-text\">
\t\t<p>
\t\t\tDado que el proyecto contiene varios formularios vulnerables a ataques de inyección, decidimos dedicarle las horas necesarias para evitar:
\t\t</p>
\t\t<ul>
\t\t\t<li>
\t\t\t\tURLs falsas en las redes sociales de los usuarios.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tQue un usuario al editar su perfil no pueda incluir scripts.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tContraseñas poco seguras.
\t\t\t</li>
\t\t</ul>
\t\t<p>
\t\t\tPuesto a que es conocida la facilidad con la que se crean cuentas falsas, era importante para nosotros implementa contramedidads ya conocidas como la de un mail de verificación.
\t\t</p>
\t\t<p>
\t\t\tLimitación de comentarios a solo usuarios registrados. Asi mismo, solo serán visibles cuando una admin los modere.
\t\t</p>
\t\t<p>
\t\t\tImplementación de un certificado SSL para garantizar una navegación segura.
\t\t</p>
\t</div>
</section>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"{{section.linkslug}}\">
\t<h1 class=\"doc-titol\">Aspectos de seguridad trabajados</h1>
\t<div class=\"doc-text\">
\t\t<p>
\t\t\tDado que el proyecto contiene varios formularios vulnerables a ataques de inyección, decidimos dedicarle las horas necesarias para evitar:
\t\t</p>
\t\t<ul>
\t\t\t<li>
\t\t\t\tURLs falsas en las redes sociales de los usuarios.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tQue un usuario al editar su perfil no pueda incluir scripts.
\t\t\t</li>
\t\t\t<li>
\t\t\t\tContraseñas poco seguras.
\t\t\t</li>
\t\t</ul>
\t\t<p>
\t\t\tPuesto a que es conocida la facilidad con la que se crean cuentas falsas, era importante para nosotros implementa contramedidads ya conocidas como la de un mail de verificación.
\t\t</p>
\t\t<p>
\t\t\tLimitación de comentarios a solo usuarios registrados. Asi mismo, solo serán visibles cuando una admin los modere.
\t\t</p>
\t\t<p>
\t\t\tImplementación de un certificado SSL para garantizar una navegación segura.
\t\t</p>
\t</div>
</section>
", "docs/es/12-seguridad.html.twig", "C:\\xampp\\htdocs\\symfony\\projecte_DAW\\symfony\\templates\\docs\\es\\12-seguridad.html.twig");
    }
}
