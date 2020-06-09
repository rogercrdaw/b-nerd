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

/* inline_editor/full_editor.html.twig */
class __TwigTemplate_ef317b3e89027a5c52055720ceb36c77cac6b6a3f178e33deef713979bd616f7 extends Template
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
        echo "<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Editor VUE</title>
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/inline_editor.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/inline_editor.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/normalize.css"), "html", null, true);
        echo "\">
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.11/ace.js\"></script>
</head>
<body onload=\"refresh()\">
<div class=\"inline-editor\">
    ";
        // line 14
        echo "    \t
    <h1 id=\"html-title\" class=\"editor-title\">HTML</h1>
    <div id=\"html-editor\" class=\"editor\" rows=\"10\" onkeyup=\"refresh()\">";
        // line 16
        if ((isset($context["html"]) || array_key_exists("html", $context))) {
            echo twig_escape_filter($this->env, ($context["html"] ?? null), "html", null, true);
        }
        echo "</div>
    <h1 id=\"css-title\" class=\"editor-title\">CSS</h1>
    <div id=\"css-editor\" class=\"editor\" rows=\"10\" onkeyup=\"refresh()\">";
        // line 18
        if ((isset($context["css"]) || array_key_exists("css", $context))) {
            echo twig_escape_filter($this->env, ($context["css"] ?? null), "html", null, true);
        }
        echo "</div>
    <h1 id=\"js-title\" class=\"editor-title\">JavaScript</h1>
    <div id=\"js-editor\" class=\"editor\" rows=\"10\" onkeyup=\"refresh()\">";
        // line 20
        if ((isset($context["js"]) || array_key_exists("js", $context))) {
            echo twig_escape_filter($this->env, ($context["js"] ?? null), "html", null, true);
        }
        echo "</div>
    <div id=\"viewer-box\">
        <iframe id=\"viewer\">
        </iframe>
    </div>
</div>

<script>
    
</script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "inline_editor/full_editor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  71 => 18,  64 => 16,  60 => 14,  52 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "inline_editor/full_editor.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/inline_editor/full_editor.html.twig");
    }
}
