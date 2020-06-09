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

/* admin/admin.html.twig */
class __TwigTemplate_becca7221cb7763a668142cbb2fc01cfeb16e330f9cd8a0fbb0979c384c214e1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "admin/admin.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t";
        echo twig_include($this->env, $context, "admin/menu_admin.html.twig");
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
\t<section>
\t\t<h1 class=\"article_individual_titol\">";
        // line 10
        echo twig_escape_filter($this->env, ($context["controller_name"] ?? null), "html", null, true);
        echo "</h1>
\t\t<p>Aqui hauria de sortir d'entrada una llista resum de novetats. Per exemple:
\t\t</p>
\t\t<ul>
\t\t\t<li>
\t\t\t\tUna llista de totes les categories amb el numero d'articles visibles de cada una d'elles
\t\t\t</li>
\t\t\t<li>
\t\t\t\tUn avis sobre categories que no tenen articles amb enllaç a adminCategories per si es volen eliminar categories
\t\t\t</li>
\t\t\t<li>
\t\t\t\tUn avis sobre quants comentaris s'han afegir l'ultim mes amb enllaç al adminComentaris per poder moderar-los
\t\t\t</li>
\t\t\t<li>
\t\t\t\tUn avis sobre quants usuaris s'han registrat l'ultim mes amb enllaç a adminUsuaris per veure qui son, s'han afegit algun comentari, si han editat el seu perfil....
\t\t\t</li>
\t\t\t<li>
\t\t\t\tUna llista de links de xarxes socials dels usuaris (per veure si algú ha aconseguit colar un link extern no autoritzat)
\t\t\t</li>
\t\t\t<li>
\t\t\t\tJa que encara no ho hem gestionat emb el JS, un espia que indiqui si algú en el seu perfil d'usuari ha escrit una etiqueta html
\t\t\t\t&#706;script&#707;
\t\t\t</li>
\t\t\t<li>
\t\t\t\tEstadistiques de googleAnalitics sobre visites
\t\t\t</li>
\t\t</ul>

\t\t<p>Son exemples a lo bruto, pero estaria bé despres del projecte mirar d'implementar-les</p>

\t</section>

";
    }

    public function getTemplateName()
    {
        return "admin/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 10,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/admin.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/admin/admin.html.twig");
    }
}
