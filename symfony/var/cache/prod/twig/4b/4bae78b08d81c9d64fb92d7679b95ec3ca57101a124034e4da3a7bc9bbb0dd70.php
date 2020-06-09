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

/* user/profile.html.twig */
class __TwigTemplate_f8926ef317f081b89a0d357e29214f499b31af5875943a128e0618d8002d5a02 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_description' => [$this, 'block_meta_description'],
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "user/profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<meta description=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "descripcio", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
";
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "\tB-NERDS! Meet ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 8), "html", null, true);
        echo "
";
    }

    // line 11
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "\t";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
";
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "
\t<section>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<h1 class=\"titulo\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 20), "html", null, true);
        echo "</h1>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "nom", [], "any", false, false, false, 22), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "cognom", [], "any", false, false, false, 22), "html", null, true);
        echo "
\t\t\t\t</p>

\t\t\t\t";
        // line 25
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "github", [], "any", true, true, false, 25) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "github", [], "any", false, false, false, 25)))) {
            // line 26
            echo "\t\t\t\t\t<a class=\"socialmedia-link\" href=\"https://www.github.com/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "github", [], "any", false, false, false, 26), "html", null, true);
            echo "\" alt=\"Enllaç al Github de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 26), "html", null, true);
            echo "\" title=\"https://www.github.com/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "github", [], "any", false, false, false, 26), "html", null, true);
            echo "\" target=\"_blank\">
\t\t\t\t\t\t<i class=\"socialmedia-icon fa fa-github-square\"></i>&nbsp;";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "github", [], "any", false, false, false, 27), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t";
        }
        // line 30
        echo "\t\t\t\t<br/>
\t\t\t\t";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "linkedin", [], "any", true, true, false, 31) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "linkedin", [], "any", false, false, false, 31)))) {
            // line 32
            echo "\t\t\t\t\t<a class=\"socialmedia-link\" href=\"https://www.linkedin.com/in/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "linkedin", [], "any", false, false, false, 32), "html", null, true);
            echo "\" alt=\"Enllaç al Linkedin de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 32), "html", null, true);
            echo "\" title=\"https://www.linkedin.com/in/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "linkedin", [], "any", false, false, false, 32), "html", null, true);
            echo "\" target=\"_blank\">
\t\t\t\t\t\t<i class=\"socialmedia-icon fa fa-linkedin-square\"></i>&nbsp;";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "linkedin", [], "any", false, false, false, 33), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t";
        }
        // line 36
        echo "\t\t\t\t<br/>
\t\t\t\t";
        // line 37
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "twitter", [], "any", true, true, false, 37) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "twitter", [], "any", false, false, false, 37)))) {
            // line 38
            echo "\t\t\t\t\t<a class=\"socialmedia-link\" href=\"https://www.twitter.com/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "twitter", [], "any", false, false, false, 38), "html", null, true);
            echo "\" alt=\"Enllaç al Twitter de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 38), "html", null, true);
            echo "\" title=\"https://www.twitter.com/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "twitter", [], "any", false, false, false, 38), "html", null, true);
            echo "\" target=\"_blank\">
\t\t\t\t\t\t<i class=\"socialmedia-icon fa fa-twitter-square\"></i>&nbsp;";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "twitter", [], "any", false, false, false, 39), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t<br/>
\t\t\t\t";
        // line 43
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "linkedin", [], "any", true, true, false, 43) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "facebook", [], "any", false, false, false, 43)))) {
            // line 44
            echo "\t\t\t\t\t<a class=\"socialmedia-link\" href=\"https://www.facebook.com/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "facebook", [], "any", false, false, false, 44), "html", null, true);
            echo "\" alt=\"Enllaç al Facebook de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 44), "html", null, true);
            echo "\" title=\"https://www.facebook.com/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "facebook", [], "any", false, false, false, 44), "html", null, true);
            echo "\" target=\"_blank\">
\t\t\t\t\t\t<i class=\"socialmedia-icon fa fa-facebook-square\"></i>&nbsp;";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "facebook", [], "any", false, false, false, 45), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t";
        }
        // line 48
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t";
        // line 51
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "imatge", [], "any", false, false, false, 51)) {
            // line 52
            echo "\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/imatges_perfil/" . twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "imatge", [], "any", false, false, false, 52))), "html", null, true);
            echo "\" alt=\"Imatge de perfil de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 52), "html", null, true);
            echo "\" class=\"profile-image\">
\t\t\t\t";
        } else {
            // line 54
            echo "\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/imatges_perfil/default.jpg"), "html", null, true);
            echo "\" alt=\"Sense imatge de perfil\" class=\"profile-image\">
\t\t\t\t";
        }
        // line 56
        echo "\t\t\t</div>
\t\t</div>

\t\t<p class=\"text\">";
        // line 59
        echo twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "descripcio", [], "any", false, false, false, 59);
        echo "
\t\t</p>
\t\t<p class=\"comments text-right\">
\t\t\t";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 62), "html", null, true);
        echo " es usuari desde\t";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "dataregistre", [], "any", false, false, false, 62), "Y"), "html", null, true);
        echo "<br/>
\t\t\tha participat amb <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articlesAutor", ["username" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 63)]), "html", null, true);
        echo "\" alt=\"Enllaç a llista d'articles de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 63), "html", null, true);
        echo "\" title=\"Veure articles de
\t\t\t";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 64), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "articles", [], "any", false, false, false, 64)), "html", null, true);
        echo " articles <i class=\"fa fa-sticky-note-o\"></i></a><br/>
\t\t\t";
        // line 65
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "comentaris", [], "any", false, false, false, 65)), "html", null, true);
        echo " comentaris <i class=\"fa fa-comment-o\"></i><br/>
\t\t\t";
        // line 66
        if (((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 66) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 66), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 66), "username", [], "any", false, false, false, 66))) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 67
            echo "\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userProfileEdit", ["username" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\" alt=\"Editar perfil\">editar perfil <i class=\"fa fa-pencil-square-o\"></i></a>
\t\t\t";
        }
        // line 69
        echo "\t\t</p>
\t</section>
";
    }

    public function getTemplateName()
    {
        return "user/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 69,  238 => 67,  236 => 66,  232 => 65,  226 => 64,  220 => 63,  214 => 62,  208 => 59,  203 => 56,  197 => 54,  189 => 52,  187 => 51,  182 => 48,  176 => 45,  167 => 44,  165 => 43,  162 => 42,  156 => 39,  147 => 38,  145 => 37,  142 => 36,  136 => 33,  127 => 32,  125 => 31,  122 => 30,  116 => 27,  107 => 26,  105 => 25,  97 => 22,  92 => 20,  86 => 16,  82 => 15,  75 => 12,  71 => 11,  64 => 8,  60 => 7,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/profile.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/user/profile.html.twig");
    }
}
