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

/* docs/es/14-manual.html.twig */
class __TwigTemplate_4c1693ee5bce3bcfd03d4a04ff2a776771dd7bf40e641aa1b40c474a53107c7b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "docs/es/14-manual.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "docs/es/14-manual.html.twig"));

        // line 1
        echo "<section id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 1, $this->source); })()), "linkslug", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
\t<h1 class=\"doc-titol\">Manual de usuario e instalación de versión demo</h1>
\t<div class=\"doc-text\">
\t\t<p>
\t\t\tLa mejor forma de testear la web es registrarse en ella.
\t\t\t<a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" target=\"blank\">enlace a registro de usuario</a><br>
\t\t\tPara su instalación en local, será preciso disponer de Symfony5 y Composer instalados.
\t\t</p>
\t\t<ul>
\t\t\t<li>
\t\t\t\t<a href=\"https://symfony.com/download\" alt=\"enlace a website oficial de Symfony\" target=\"blank\">Download Symfony from Symfony.com</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"https://getcomposer.org/download/\" alt=\"enlace a website oficial de composer\" target=\"blank\">Download Composer from getcomposer.org</a>
\t\t\t</li>
\t\t</ul>
\t\t<ol>
\t\t\t<li>
\t\t\t\tClonar nuestro
\t\t\t\t<a href=\"https://github.com/rogercrdaw/b-Nerd\" alt=\"enlace a repositoria Git\" target=\"blank\">repositorio Git</a><br/>
\t\t\t\t\$git clone https://github.com/rogercrdaw/b-Nerd.git
\t\t\t</li>
\t\t\t<li>
\t\t\t\tCrea una base de datos y
\t\t\t\t<a href=\"https://symfony.com/doc/current/doctrine.html#configuring-the-database\" alt=\"enlace a documentación oficial de Symfony\" target=\"blank\">configura el archivo .env</a>
\t\t\t\tcon los datos de acceso a tu base de datos
\t\t\t</li>
\t\t\t<li>
\t\t\t\tEjecutar en consola o terminal (si tu IDE no lo integra)<br>
\t\t\t\tphp bin/console make:migrations<br/>
\t\t\t\tphp bin/console doctrine:migrations:migrate<br/>
\t\t\t\tphp bin/console doctrine:fixtures:load<br/></li>
\t\t</ol>
\t\t<p>
\t\t\tAquí tienes una demostración de como Nerdear por nuestra web.
\t\t</p>
\t\t<video width=\"100%\" poster=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("docs/docs-img/demo.jpg"), "html", null, true);
        echo "\" controls>
\t\t\t<source src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("docs/files/demo.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\">
\t\t\tYour browser does not support HTML video.
\t\t</video>
\t</div>
</section>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "docs/es/14-manual.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 38,  86 => 37,  52 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"{{section.linkslug}}\">
\t<h1 class=\"doc-titol\">Manual de usuario e instalación de versión demo</h1>
\t<div class=\"doc-text\">
\t\t<p>
\t\t\tLa mejor forma de testear la web es registrarse en ella.
\t\t\t<a href=\"{{path('app_register')}}\" target=\"blank\">enlace a registro de usuario</a><br>
\t\t\tPara su instalación en local, será preciso disponer de Symfony5 y Composer instalados.
\t\t</p>
\t\t<ul>
\t\t\t<li>
\t\t\t\t<a href=\"https://symfony.com/download\" alt=\"enlace a website oficial de Symfony\" target=\"blank\">Download Symfony from Symfony.com</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"https://getcomposer.org/download/\" alt=\"enlace a website oficial de composer\" target=\"blank\">Download Composer from getcomposer.org</a>
\t\t\t</li>
\t\t</ul>
\t\t<ol>
\t\t\t<li>
\t\t\t\tClonar nuestro
\t\t\t\t<a href=\"https://github.com/rogercrdaw/b-Nerd\" alt=\"enlace a repositoria Git\" target=\"blank\">repositorio Git</a><br/>
\t\t\t\t\$git clone https://github.com/rogercrdaw/b-Nerd.git
\t\t\t</li>
\t\t\t<li>
\t\t\t\tCrea una base de datos y
\t\t\t\t<a href=\"https://symfony.com/doc/current/doctrine.html#configuring-the-database\" alt=\"enlace a documentación oficial de Symfony\" target=\"blank\">configura el archivo .env</a>
\t\t\t\tcon los datos de acceso a tu base de datos
\t\t\t</li>
\t\t\t<li>
\t\t\t\tEjecutar en consola o terminal (si tu IDE no lo integra)<br>
\t\t\t\tphp bin/console make:migrations<br/>
\t\t\t\tphp bin/console doctrine:migrations:migrate<br/>
\t\t\t\tphp bin/console doctrine:fixtures:load<br/></li>
\t\t</ol>
\t\t<p>
\t\t\tAquí tienes una demostración de como Nerdear por nuestra web.
\t\t</p>
\t\t<video width=\"100%\" poster=\"{{ asset('docs/docs-img/demo.jpg') }}\" controls>
\t\t\t<source src=\"{{ asset('docs/files/demo.mp4') }}\" type=\"video/mp4\">
\t\t\tYour browser does not support HTML video.
\t\t</video>
\t</div>
</section>
", "docs/es/14-manual.html.twig", "C:\\xampp\\htdocs\\symfony\\projecte_DAW\\symfony\\templates\\docs\\es\\14-manual.html.twig");
    }
}
