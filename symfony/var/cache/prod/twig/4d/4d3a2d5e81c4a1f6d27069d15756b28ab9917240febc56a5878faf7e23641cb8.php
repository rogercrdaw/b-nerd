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

/* docs/menu_docs.html.twig */
class __TwigTemplate_8a2916d6e3940b06d06ddc3475aadb32a0b3be04c16591e77bf6ee310091c2b3 extends Template
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
        echo "<ul class=\"menu-user\" style=\"bottom:58vh\">
\t<li>
\t\t<a class=\"menu-link logout-link\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" alt=\"Enllaç a formulari de login\">
\t\t\tb-Nerds!
\t\t</a>
\t</li>
</ul>

<ul class=\"menu-bottom\">
\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sections"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 11
            echo "\t\t<li>
\t\t\t";
            // line 12
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 12)) {
                // line 13
                echo "\t\t\t\t<a class=\"menu-link scrollable active\" href=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["section"], "linkslug", [], "any", false, false, false, 13), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["section"], "linkalt", [], "any", false, false, false, 13), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["section"], "linkname", [], "any", false, false, false, 13), "html", null, true);
                echo "</a>
\t\t\t";
            } else {
                // line 15
                echo "\t\t\t\t<a class=\"menu-link scrollable\" href=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["section"], "linkslug", [], "any", false, false, false, 15), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["section"], "linkalt", [], "any", false, false, false, 15), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["section"], "linkname", [], "any", false, false, false, 15), "html", null, true);
                echo "</a>
\t\t\t";
            }
            // line 17
            echo "\t\t</li>

\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
\t<li id=\"hamburgesa\">
\t\t<i class=\"menu-icon fa fa-bars\" alt=\"Desplegar el menu de navegació\"></i>
\t</li>
\t<li id=\"dark-mode\">
\t\t<i class=\"menu-icon fa fa-toggle-off\" alt=\"Botó per activar o desactivar el tema fosc\"></i>
\t</li>

</ul>
";
    }

    public function getTemplateName()
    {
        return "docs/menu_docs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 20,  93 => 17,  83 => 15,  73 => 13,  71 => 12,  68 => 11,  51 => 10,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "docs/menu_docs.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/docs/menu_docs.html.twig");
    }
}
