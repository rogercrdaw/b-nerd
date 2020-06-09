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

/* docs/es/15-valoraciones.html.twig */
class __TwigTemplate_e3dcc4dcb242eff76fd4fd66e2b2967142ba745bffa84f0368196788d20a5f1c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "docs/es/15-valoraciones.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "docs/es/15-valoraciones.html.twig"));

        // line 1
        echo "<section id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 1, $this->source); })()), "linkslug", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
\t<h1 class=\"doc-titol\">Valoraciones personales</h1>
\t<div class=\"doc-text\">

\t\t<h5>Adam JJ</h5>
\t\t<p>
\t\t\tEn mi opinión este tipo de metodologías en grupo ayudan mucho el proceso de aprendizaje, ya que lo hicimos bastante dinámico conectándonos a Hangouts.<br/>
\t\t\tTambién dar las gracias a Roger y Aleix, me han ayudado mucho y han tenido una paciencia increíble, de estar conmigo al principio con los mil problemas que tuve con Git a estar mano a mano picando código.</p>
\t\t<p>
\t\t\tComo punto positivo, he aprendido mucho de Symfony5, no sabía hasta que punto un framework como este podía hacer las cosas que hace, la gestión que tiene con una base de datos, la forma de concatenar con TWIG...</p>
\t\t<p>
\t\t\tRealmente trabajar de esta manera nos sirve para nuestro futuro en el mundo laboral, ya que los proyectos a los que nos encontraremos algún día no son cosa de uno al final, son trabajos en equipo y nos tenemos que adaptar y aprender de nuestros compañeros y viceversa.</p>
\t\t<br>
\t\t<h5>Aleix RA</h5>
\t\t<p>
\t\t\tLo que más valoro de este proyecto es la ilusión y las ganas que le hemos puesto, fue una suerte que en la primera reunión surgiera está propuesta que, unánimemente aprobamos. Nos hemos mantenido conectados en todo momento, sin lugar a desmotivaciones y, a veces, incluso demasiadas horas con poco descanso. Todo esto estoy seguro de que no hubiese sido posible con otro tipo de proyecto que no nos hubiese terminado de convencer.</p>
\t\t<p>
\t\t\tMentiría si dijera que en un principio nuestras aspiraciones no eran más altas, pero nos hemos encontrado con piedras por el camino que nos han hecho perder tiempo buscando la manera de apartarlas o de esquivarlas, aunque sin ninguna duda este tiempo perdido se ha convertido en aprendizaje ganado.</p>
\t\t<p>
\t\t\tPor último se que el margen de mejora es muy grande, pero como hemos comentado varias veces con mis compañeros, “si Java va por la versión 14 por algo será”, y estoy seguro de que en un futuro vamos a poder disfrutar de nuevas versiones de este proyecto.</p>
\t\t<br>
\t\t<h5>Roger CR</h5>
\t\t<p>
\t\t\tMediocre. No hicimos nada nuevo ni nada fuera de lo normal. Por el timepo invertido, el resultado deberia ser muy superior.<br/>
\t\t\tNo puedo realizar una valoración justa, debido a que en las últimas semanas de desarrollo del proyecto, las más decisivas, la nefasta tarea que llaman educación por parte de los docentes del centro me llevo a estados físicos y mentales de mucho estrés y ansiedad.</p>
\t\t<p>
\t\t\tEste proyecto era una idea mia que tenia en mente desde hacia tiempo, y les debo mucho a mis compañeros, pues de ellos es de quien realmente he aprendido. Por desgracia, todas las ganas que tenia de compartir mis conocimientos, se desvanecieron en el sprint final del proyecto.</p>
\t\t<p>
\t\t\tEsta era una carrera de fondo, y parece que no supe gestionar mi implicación. Llegué exahusto a la recta final, sin fuerzas para cruzar la meta
\t\t</p>
\t\t<br/>
\t\t<br/>
\t\t<br/>
\t\t<br/>
\t\tTodos somos Nerds!


\t</div>
</section>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "docs/es/15-valoraciones.html.twig";
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
\t<h1 class=\"doc-titol\">Valoraciones personales</h1>
\t<div class=\"doc-text\">

\t\t<h5>Adam JJ</h5>
\t\t<p>
\t\t\tEn mi opinión este tipo de metodologías en grupo ayudan mucho el proceso de aprendizaje, ya que lo hicimos bastante dinámico conectándonos a Hangouts.<br/>
\t\t\tTambién dar las gracias a Roger y Aleix, me han ayudado mucho y han tenido una paciencia increíble, de estar conmigo al principio con los mil problemas que tuve con Git a estar mano a mano picando código.</p>
\t\t<p>
\t\t\tComo punto positivo, he aprendido mucho de Symfony5, no sabía hasta que punto un framework como este podía hacer las cosas que hace, la gestión que tiene con una base de datos, la forma de concatenar con TWIG...</p>
\t\t<p>
\t\t\tRealmente trabajar de esta manera nos sirve para nuestro futuro en el mundo laboral, ya que los proyectos a los que nos encontraremos algún día no son cosa de uno al final, son trabajos en equipo y nos tenemos que adaptar y aprender de nuestros compañeros y viceversa.</p>
\t\t<br>
\t\t<h5>Aleix RA</h5>
\t\t<p>
\t\t\tLo que más valoro de este proyecto es la ilusión y las ganas que le hemos puesto, fue una suerte que en la primera reunión surgiera está propuesta que, unánimemente aprobamos. Nos hemos mantenido conectados en todo momento, sin lugar a desmotivaciones y, a veces, incluso demasiadas horas con poco descanso. Todo esto estoy seguro de que no hubiese sido posible con otro tipo de proyecto que no nos hubiese terminado de convencer.</p>
\t\t<p>
\t\t\tMentiría si dijera que en un principio nuestras aspiraciones no eran más altas, pero nos hemos encontrado con piedras por el camino que nos han hecho perder tiempo buscando la manera de apartarlas o de esquivarlas, aunque sin ninguna duda este tiempo perdido se ha convertido en aprendizaje ganado.</p>
\t\t<p>
\t\t\tPor último se que el margen de mejora es muy grande, pero como hemos comentado varias veces con mis compañeros, “si Java va por la versión 14 por algo será”, y estoy seguro de que en un futuro vamos a poder disfrutar de nuevas versiones de este proyecto.</p>
\t\t<br>
\t\t<h5>Roger CR</h5>
\t\t<p>
\t\t\tMediocre. No hicimos nada nuevo ni nada fuera de lo normal. Por el timepo invertido, el resultado deberia ser muy superior.<br/>
\t\t\tNo puedo realizar una valoración justa, debido a que en las últimas semanas de desarrollo del proyecto, las más decisivas, la nefasta tarea que llaman educación por parte de los docentes del centro me llevo a estados físicos y mentales de mucho estrés y ansiedad.</p>
\t\t<p>
\t\t\tEste proyecto era una idea mia que tenia en mente desde hacia tiempo, y les debo mucho a mis compañeros, pues de ellos es de quien realmente he aprendido. Por desgracia, todas las ganas que tenia de compartir mis conocimientos, se desvanecieron en el sprint final del proyecto.</p>
\t\t<p>
\t\t\tEsta era una carrera de fondo, y parece que no supe gestionar mi implicación. Llegué exahusto a la recta final, sin fuerzas para cruzar la meta
\t\t</p>
\t\t<br/>
\t\t<br/>
\t\t<br/>
\t\t<br/>
\t\tTodos somos Nerds!


\t</div>
</section>
", "docs/es/15-valoraciones.html.twig", "C:\\xampp\\htdocs\\symfony\\projecte_DAW\\symfony\\templates\\docs\\es\\15-valoraciones.html.twig");
    }
}
