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
class __TwigTemplate_d922daf51e2e9d676672e662f5523ab28e0fe4adf6ee3f2ec050582d1c8346d6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/ca_section_3.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/ca_section_3.html.twig"));

        // line 1
        echo "<section id=\"how\">
\t<h1 class=\"titulo\">Keel Calm! Speak Encrypt!</h1>
\t<div class=\"text\">


\t\t<p>
\t\t\tEl derecho a la privacidad es como el derecho a la libertad de expresión. Que no tengas nada que decir, no significa que renuncies a tu derecho a expresarte, así como que no tengas nada que esconder, no significa que renuncies a tu derecho a la privacidad.<br/>
\t\t\t&nbsp;&nbsp;<i>\"Eduard Snowden\"</i>
\t\t</p>
\t\t<p>
\t\t\tNo obstante no hay que confundir discreción con anonimato. En esta página web ni usamos cookies, ni recolectamos datos.<br/>
\t\t\tPedimos el mail en el registro de nuevos usuarios para evitar los molestos Bots creaCuentasFake. Hoy no te mandaremos spam, y con toda probabilidad, mañana tampoco.</p>
\t\t<p>
\t\t\tNos planteamos el uso de GoogleAnalitics por un tema de estadísticas y visitas pero..... para qué? Si esta web es mas para nosotros que para navegantes curiosos! Y si al final lo implementásemos, seguro sería con nuestro propio código, que al fin y al cabo, lo aprendimos y podemos hacerlo.
\t\t</p>


\t\t";
        // line 30
        echo "\t</div>
</section>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/ca_section_3.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  62 => 30,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"how\">
\t<h1 class=\"titulo\">Keel Calm! Speak Encrypt!</h1>
\t<div class=\"text\">


\t\t<p>
\t\t\tEl derecho a la privacidad es como el derecho a la libertad de expresión. Que no tengas nada que decir, no significa que renuncies a tu derecho a expresarte, así como que no tengas nada que esconder, no significa que renuncies a tu derecho a la privacidad.<br/>
\t\t\t&nbsp;&nbsp;<i>\"Eduard Snowden\"</i>
\t\t</p>
\t\t<p>
\t\t\tNo obstante no hay que confundir discreción con anonimato. En esta página web ni usamos cookies, ni recolectamos datos.<br/>
\t\t\tPedimos el mail en el registro de nuevos usuarios para evitar los molestos Bots creaCuentasFake. Hoy no te mandaremos spam, y con toda probabilidad, mañana tampoco.</p>
\t\t<p>
\t\t\tNos planteamos el uso de GoogleAnalitics por un tema de estadísticas y visitas pero..... para qué? Si esta web es mas para nosotros que para navegantes curiosos! Y si al final lo implementásemos, seguro sería con nuestro propio código, que al fin y al cabo, lo aprendimos y podemos hacerlo.
\t\t</p>


\t\t{# <ul class=\"cat-list\">
\t\t\t{% for cat in categories_altres %}
\t\t\t\t{% if cat.articles|length > 0 %}
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('articles_categoria', {cat_name: cat.nom}) }}\" alt\"enllaç a articles de la categoria {{cat.nom}}\" title=\"Veure articles de {{cat.nom}}\">
\t\t\t\t\t\t\t<img src=\"{{ asset(\"img/categories/\" ~ cat.logo) }}\" alt=\"{{cat.nom}} icon\" class=\"cat-icon\">
\t\t\t\t\t\t\t<span class=\"badge badge-secondary cat-length\">{{cat.articles|length }}</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t{% endfor %}
\t\t</ul> #}
\t</div>
</section>
", "home/ca_section_3.html.twig", "C:\\xampp\\htdocs\\symfony\\projecte_DAW\\symfony\\templates\\home\\ca_section_3.html.twig");
    }
}
