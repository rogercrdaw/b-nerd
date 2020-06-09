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
class __TwigTemplate_e3049ba57ddb60ab4a906c750ecd9c0dad9df083fa2bba9bd4dcbd6b8abfab57 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_meta_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_description"));

        // line 4
        echo "\t<meta description=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 4, $this->source); })()), "descripcio", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "\tB-NERDS! Meet ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 8, $this->source); })()), "username", [], "any", false, false, false, 8), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 12
        echo "\t";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "
\t<section>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<h1 class=\"titulo\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "username", [], "any", false, false, false, 20), "html", null, true);
        echo "</h1>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "cognom", [], "any", false, false, false, 22), "html", null, true);
        echo "
\t\t\t\t</p>

\t\t\t\t";
        // line 25
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "github", [], "any", true, true, false, 25) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "github", [], "any", false, false, false, 25)))) {
            // line 26
            echo "\t\t\t\t\t<a class=\"socialmedia-link\" href=\"https://www.github.com/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "github", [], "any", false, false, false, 26), "html", null, true);
            echo "\" alt=\"Enllaç al Github de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "username", [], "any", false, false, false, 26), "html", null, true);
            echo "\" title=\"https://www.github.com/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "github", [], "any", false, false, false, 26), "html", null, true);
            echo "\" target=\"_blank\">
\t\t\t\t\t\t<i class=\"socialmedia-icon fa fa-github-square\"></i>&nbsp;";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "github", [], "any", false, false, false, 27), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t";
        }
        // line 30
        echo "\t\t\t\t<br/>
\t\t\t\t";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "linkedin", [], "any", true, true, false, 31) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "linkedin", [], "any", false, false, false, 31)))) {
            // line 32
            echo "\t\t\t\t\t<a class=\"socialmedia-link\" href=\"https://www.linkedin.com/in/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "linkedin", [], "any", false, false, false, 32), "html", null, true);
            echo "\" alt=\"Enllaç al Linkedin de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "username", [], "any", false, false, false, 32), "html", null, true);
            echo "\" title=\"https://www.linkedin.com/in/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "linkedin", [], "any", false, false, false, 32), "html", null, true);
            echo "\" target=\"_blank\">
\t\t\t\t\t\t<i class=\"socialmedia-icon fa fa-linkedin-square\"></i>&nbsp;";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "linkedin", [], "any", false, false, false, 33), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t";
        }
        // line 36
        echo "\t\t\t\t<br/>
\t\t\t\t";
        // line 37
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "twitter", [], "any", true, true, false, 37) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 37, $this->source); })()), "twitter", [], "any", false, false, false, 37)))) {
            // line 38
            echo "\t\t\t\t\t<a class=\"socialmedia-link\" href=\"https://www.twitter.com/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "twitter", [], "any", false, false, false, 38), "html", null, true);
            echo "\" alt=\"Enllaç al Twitter de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "username", [], "any", false, false, false, 38), "html", null, true);
            echo "\" title=\"https://www.twitter.com/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "twitter", [], "any", false, false, false, 38), "html", null, true);
            echo "\" target=\"_blank\">
\t\t\t\t\t\t<i class=\"socialmedia-icon fa fa-twitter-square\"></i>&nbsp;";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "twitter", [], "any", false, false, false, 39), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t<br/>
\t\t\t\t";
        // line 43
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "linkedin", [], "any", true, true, false, 43) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "facebook", [], "any", false, false, false, 43)))) {
            // line 44
            echo "\t\t\t\t\t<a class=\"socialmedia-link\" href=\"https://www.facebook.com/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "facebook", [], "any", false, false, false, 44), "html", null, true);
            echo "\" alt=\"Enllaç al Facebook de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "username", [], "any", false, false, false, 44), "html", null, true);
            echo "\" title=\"https://www.facebook.com/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "facebook", [], "any", false, false, false, 44), "html", null, true);
            echo "\" target=\"_blank\">
\t\t\t\t\t\t<i class=\"socialmedia-icon fa fa-facebook-square\"></i>&nbsp;";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 45, $this->source); })()), "facebook", [], "any", false, false, false, 45), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "imatge", [], "any", false, false, false, 51)) {
            // line 52
            echo "\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/imatges_perfil/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "imatge", [], "any", false, false, false, 52))), "html", null, true);
            echo "\" alt=\"Imatge de perfil de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "username", [], "any", false, false, false, 52), "html", null, true);
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
        echo twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 59, $this->source); })()), "descripcio", [], "any", false, false, false, 59);
        echo "
\t\t</p>
\t\t<p class=\"comments text-right\">
\t\t\t";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 62, $this->source); })()), "username", [], "any", false, false, false, 62), "html", null, true);
        echo " es usuari desde\t";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 62, $this->source); })()), "dataregistre", [], "any", false, false, false, 62), "Y"), "html", null, true);
        echo "<br/>
\t\t\tha participat amb <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articlesAutor", ["username" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 63, $this->source); })()), "username", [], "any", false, false, false, 63)]), "html", null, true);
        echo "\" alt=\"Enllaç a llista d'articles de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 63, $this->source); })()), "username", [], "any", false, false, false, 63), "html", null, true);
        echo "\" title=\"Veure articles de
\t\t\t";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 64, $this->source); })()), "username", [], "any", false, false, false, 64), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 64, $this->source); })()), "articles", [], "any", false, false, false, 64)), "html", null, true);
        echo " articles <i class=\"fa fa-sticky-note-o\"></i></a><br/>
\t\t\t";
        // line 65
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 65, $this->source); })()), "comentaris", [], "any", false, false, false, 65)), "html", null, true);
        echo " comentaris <i class=\"fa fa-comment-o\"></i><br/>
\t\t\t";
        // line 66
        if (((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 66, $this->source); })()), "username", [], "any", false, false, false, 66), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "username", [], "any", false, false, false, 66))) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 67
            echo "\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userProfileEdit", ["username" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 67, $this->source); })()), "username", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\" alt=\"Editar perfil\">editar perfil <i class=\"fa fa-pencil-square-o\"></i></a>
\t\t\t";
        }
        // line 69
        echo "\t\t</p>
\t</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  298 => 69,  292 => 67,  290 => 66,  286 => 65,  280 => 64,  274 => 63,  268 => 62,  262 => 59,  257 => 56,  251 => 54,  243 => 52,  241 => 51,  236 => 48,  230 => 45,  221 => 44,  219 => 43,  216 => 42,  210 => 39,  201 => 38,  199 => 37,  196 => 36,  190 => 33,  181 => 32,  179 => 31,  176 => 30,  170 => 27,  161 => 26,  159 => 25,  151 => 22,  146 => 20,  140 => 16,  130 => 15,  117 => 12,  107 => 11,  94 => 8,  84 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block meta_description %}
\t<meta description=\"{{user.descripcio}}\">
{% endblock %}

{% block title %}
\tB-NERDS! Meet {{user.username}}
{% endblock %}

{% block navbar %}
\t{{ include('menu.html.twig') }}
{% endblock %}

{% block content %}

\t<section>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<h1 class=\"titulo\">{{user.username}}</h1>
\t\t\t\t<p>
\t\t\t\t\t{{ user.nom }} {{ user.cognom }}
\t\t\t\t</p>

\t\t\t\t{% if user.github is defined and (user.github is not empty)%}
\t\t\t\t\t<a class=\"socialmedia-link\" href=\"https://www.github.com/{{ user.github }}\" alt=\"Enllaç al Github de {{user.username}}\" title=\"https://www.github.com/{{user.github}}\" target=\"_blank\">
\t\t\t\t\t\t<i class=\"socialmedia-icon fa fa-github-square\"></i>&nbsp;{{user.github}}
\t\t\t\t\t</a>
\t\t\t\t{% endif %}
\t\t\t\t<br/>
\t\t\t\t{% if user.linkedin is defined and (user.linkedin is not empty)%}
\t\t\t\t\t<a class=\"socialmedia-link\" href=\"https://www.linkedin.com/in/{{ user.linkedin }}\" alt=\"Enllaç al Linkedin de {{user.username}}\" title=\"https://www.linkedin.com/in/{{user.linkedin}}\" target=\"_blank\">
\t\t\t\t\t\t<i class=\"socialmedia-icon fa fa-linkedin-square\"></i>&nbsp;{{user.linkedin}}
\t\t\t\t\t</a>
\t\t\t\t{% endif %}
\t\t\t\t<br/>
\t\t\t\t{% if user.twitter is defined and (user.twitter is not empty)%}
\t\t\t\t\t<a class=\"socialmedia-link\" href=\"https://www.twitter.com/{{ user.twitter }}\" alt=\"Enllaç al Twitter de {{user.username}}\" title=\"https://www.twitter.com/{{user.twitter}}\" target=\"_blank\">
\t\t\t\t\t\t<i class=\"socialmedia-icon fa fa-twitter-square\"></i>&nbsp;{{user.twitter}}
\t\t\t\t\t</a>
\t\t\t\t{% endif %}
\t\t\t\t<br/>
\t\t\t\t{% if user.linkedin is defined and (user.facebook is not empty)%}
\t\t\t\t\t<a class=\"socialmedia-link\" href=\"https://www.facebook.com/{{ user.facebook }}\" alt=\"Enllaç al Facebook de {{user.username}}\" title=\"https://www.facebook.com/{{user.facebook}}\" target=\"_blank\">
\t\t\t\t\t\t<i class=\"socialmedia-icon fa fa-facebook-square\"></i>&nbsp;{{user.facebook}}
\t\t\t\t\t</a>
\t\t\t\t{% endif %}

\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t{% if user.imatge %}
\t\t\t\t\t<img src=\"{{ asset(\"img/imatges_perfil/\" ~ user.imatge) }}\" alt=\"Imatge de perfil de {{user.username}}\" class=\"profile-image\">
\t\t\t\t{% else %}
\t\t\t\t\t<img src=\"{{ asset(\"img/imatges_perfil/default.jpg\") }}\" alt=\"Sense imatge de perfil\" class=\"profile-image\">
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>

\t\t<p class=\"text\">{{ user.descripcio|raw }}
\t\t</p>
\t\t<p class=\"comments text-right\">
\t\t\t{{user.username}} es usuari desde\t{{user.dataregistre|date('Y')}}<br/>
\t\t\tha participat amb <a href=\"{{path('articlesAutor', {username:user.username}) }}\" alt=\"Enllaç a llista d'articles de {{user.username}}\" title=\"Veure articles de
\t\t\t{{user.username}}\">{{user.articles|length}} articles <i class=\"fa fa-sticky-note-o\"></i></a><br/>
\t\t\t{{ user.comentaris|length }} comentaris <i class=\"fa fa-comment-o\"></i><br/>
\t\t\t{% if app.user and (user.username == app.user.username) or is_granted('ROLE_ADMIN') %}
\t\t\t\t<a href=\"{{ path('userProfileEdit', {username:user.username}) }}\" alt=\"Editar perfil\">editar perfil <i class=\"fa fa-pencil-square-o\"></i></a>
\t\t\t{% endif %}
\t\t</p>
\t</section>
{% endblock %}
", "user/profile.html.twig", "C:\\xampp\\htdocs\\symfony\\projecte_DAW\\symfony\\templates\\user\\profile.html.twig");
    }
}
