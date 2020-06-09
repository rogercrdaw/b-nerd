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

/* home/ca_section_4.html.twig */
class __TwigTemplate_a3aaa201ae158612bcefb283aa9190df1513fedba614978e6a44f3d8d1395751 extends Template
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
        echo "<section id=\"contact\">
\t<h1 class=\"titulo\">Contacto</h1>
\t<div class=\"text\">
\t\t<p>
\t\tNo seremos los más indicados para dar lecciones sobre la red, esta web es más para nosotros que para los otros.<br/> 
\t\tSomos Geeks de las TIC en constante aprendizaje y toda aportación, sugerencia o piropo que nos quieras dar lo puedes hacer mediante este formulario.
\t\t</p>
\t\t<p>
\t\tEn la medida de lo posible, daremos respuesta a los mensajes.
\t\t</p>
\t\t<br/>
\t\t<form action=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact_service"] ?? null), "getForm", [], "method", false, false, false, 12), "html", null, true);
        echo "\" method=\"POST\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"name\">Nombre</label>
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\"/>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"email\">Correo</label>
\t\t\t\t<input type=\"email\" class=\"form-control\"name=\"email\" id=\"email\"/>
\t\t\t</div>
\t\t\t<div class=\"form-group\">\t\t\t
\t\t\t\t<label for=\"subject\">Asunto</label>
\t\t\t\t<select type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\"/>
\t\t\t\t\t<option>Problemas en el login o registro de usuario</option>
\t\t\t\t\t<option>Notificar error o bug</option>
\t\t\t\t\t<option>Reclamar derechos de autor</option>
\t\t\t\t\t<option>Felicitaciones o ofertar de empleo &#128539;</option>
\t\t\t\t\t<option>Otras consultas</option>
\t\t\t\t</select>\t\t\t
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"message\">Mensaje</label>
\t\t\t\t<textarea name=\"message\" id=\"message\" class=\"form-control\" rows=\"4\"></textarea>
\t\t\t</div>
\t\t\t<input type=\"submit\" class=\"btn btn-outline-secondary\" name=\"submit\" value=\"Enviar\"/>
\t\t</form>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "home/ca_section_4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/ca_section_4.html.twig", "/hosting/www/b-nerd.cat/public/symfony/templates/home/ca_section_4.html.twig");
    }
}
