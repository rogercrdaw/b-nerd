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

/* homepage.html.twig */
class __TwigTemplate_36b51f25dc161d971ff1ea0bc83a105de4b31ba27db165755d70588bcecc4d58 extends Template
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
            'section_01' => [$this, 'block_section_01'],
            'section_02' => [$this, 'block_section_02'],
            'section_03' => [$this, 'block_section_03'],
            'section_04' => [$this, 'block_section_04'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "homepage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "

\t";
        // line 10
        $this->displayBlock('section_01', $context, $blocks);
        // line 13
        echo "
\t";
        // line 14
        $this->displayBlock('section_02', $context, $blocks);
        // line 17
        echo "
\t";
        // line 18
        $this->displayBlock('section_03', $context, $blocks);
        // line 21
        echo "
\t";
        // line 22
        $this->displayBlock('section_04', $context, $blocks);
        // line 25
        echo "

";
    }

    // line 10
    public function block_section_01($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "\t\t";
        echo twig_include($this->env, $context, "home/ca_section_1.html.twig");
        echo "
\t";
    }

    // line 14
    public function block_section_02($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "\t\t";
        echo twig_include($this->env, $context, "home/ca_section_2.html.twig");
        echo "
\t";
    }

    // line 18
    public function block_section_03($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "\t\t";
        echo twig_include($this->env, $context, "home/ca_section_3.html.twig");
        echo "
\t";
    }

    // line 22
    public function block_section_04($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "\t\t";
        echo twig_include($this->env, $context, "home/ca_section_4.html.twig");
        echo "
\t";
    }

    public function getTemplateName()
    {
        return "homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 23,  126 => 22,  119 => 19,  115 => 18,  108 => 15,  104 => 14,  97 => 11,  93 => 10,  87 => 25,  85 => 22,  82 => 21,  80 => 18,  77 => 17,  75 => 14,  72 => 13,  70 => 10,  66 => 8,  62 => 7,  55 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "homepage.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/homepage.html.twig");
    }
}
