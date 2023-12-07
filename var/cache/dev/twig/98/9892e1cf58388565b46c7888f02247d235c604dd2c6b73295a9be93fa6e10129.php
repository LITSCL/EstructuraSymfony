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

/* models/usuario/iniciar_sesion.html.twig */
class __TwigTemplate_2fb781ef4f7718681328e53b7fdafad0978cd087b74e444f06afe63eaac4ac5f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "models/usuario/iniciar_sesion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "models/usuario/iniciar_sesion.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "models/usuario/iniciar_sesion.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello UsuarioController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<h1>Iniciar sesión</h1>
\t<form action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("usuario_accion_autenticarSesion");
        echo "\" method=\"POST\">
\t\t<table>
\t\t\t<tr>
\t\t\t\t<td><label for=\"username\">Rut</label></td>
\t\t\t\t<td><input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["ultimoRutUsuario"]) || array_key_exists("ultimoRutUsuario", $context) ? $context["ultimoRutUsuario"] : (function () { throw new RuntimeError('Variable "ultimoRutUsuario" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "\"/></td> <!-- El name debe ser \"_username\" porque Symfony lo procesa de esa forma. -->
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td><label for=\"password\">Contraseña</label></td>
\t\t\t\t<td><input type=\"password\" id=\"password\" name=\"_password\"/></td> <!-- El name debe ser \"_password\" porque Symfony lo procesa de esa forma. -->
\t\t\t</tr>
\t\t</table>
\t\t<button type=\"submit\">Login</button>
\t</form>
\t
\t";
        // line 21
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 21, $this->source); })())) {
            // line 22
            echo "\t\t<strong class=\"alerta-roja\">Credenciales incorrectas</strong>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "models/usuario/iniciar_sesion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 22,  111 => 21,  98 => 11,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello UsuarioController!{% endblock %}

{% block body %}
\t<h1>Iniciar sesión</h1>
\t<form action=\"{{ path('usuario_accion_autenticarSesion') }}\" method=\"POST\">
\t\t<table>
\t\t\t<tr>
\t\t\t\t<td><label for=\"username\">Rut</label></td>
\t\t\t\t<td><input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ ultimoRutUsuario }}\"/></td> <!-- El name debe ser \"_username\" porque Symfony lo procesa de esa forma. -->
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td><label for=\"password\">Contraseña</label></td>
\t\t\t\t<td><input type=\"password\" id=\"password\" name=\"_password\"/></td> <!-- El name debe ser \"_password\" porque Symfony lo procesa de esa forma. -->
\t\t\t</tr>
\t\t</table>
\t\t<button type=\"submit\">Login</button>
\t</form>
\t
\t{% if error %}
\t\t<strong class=\"alerta-roja\">Credenciales incorrectas</strong>
    {% endif %}
{% endblock %}", "models/usuario/iniciar_sesion.html.twig", "C:\\xampp\\htdocs\\EstructuraSymfony\\templates\\models\\usuario\\iniciar_sesion.html.twig");
    }
}
