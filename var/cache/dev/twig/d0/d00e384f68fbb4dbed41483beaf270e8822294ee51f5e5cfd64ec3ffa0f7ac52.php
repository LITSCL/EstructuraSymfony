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

/* models/usuario/crear_usuario.html.twig */
class __TwigTemplate_79dcf5d830a511486dd48b740825ffbfc3fd2fab91e318daddbfa216b3b8ba9d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "models/usuario/crear_usuario.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "models/usuario/crear_usuario.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "models/usuario/crear_usuario.html.twig", 1);
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
        echo "\t<h1>Estas en Crear Usuario</h1>
\t
\t";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 8, $this->source); })()), 'form_start');
        echo "
\t<table border=\"5px\">
\t\t<tr>
\t\t\t<td>";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 11, $this->source); })()), "rut", [], "any", false, false, false, 11), 'label');
        echo "</td> <!-- Renderizando componente. -->
\t\t\t<td>";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 12, $this->source); })()), "rut", [], "any", false, false, false, 12), 'widget');
        echo "</td> <!-- Renderizando componente. -->
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 15, $this->source); })()), "nombre", [], "any", false, false, false, 15), 'label');
        echo "</td>
\t\t\t<td>";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 16, $this->source); })()), "nombre", [], "any", false, false, false, 16), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 19, $this->source); })()), "apellido", [], "any", false, false, false, 19), 'label');
        echo "</td>
\t\t\t<td>";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 20, $this->source); })()), "apellido", [], "any", false, false, false, 20), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 23, $this->source); })()), "email", [], "any", false, false, false, 23), 'label');
        echo "</td>
\t\t\t<td>";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 24, $this->source); })()), "email", [], "any", false, false, false, 24), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 27, $this->source); })()), "clave", [], "any", false, false, false, 27), 'label');
        echo "</td>
\t\t\t<td>";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 28, $this->source); })()), "clave", [], "any", false, false, false, 28), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 31, $this->source); })()), "tipo", [], "any", false, false, false, 31), 'label');
        echo "</td>
\t\t\t<td>";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 32, $this->source); })()), "tipo", [], "any", false, false, false, 32), 'widget');
        echo "</td>
\t\t</tr>
\t</table>
\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 35, $this->source); })()), "boton", [], "any", false, false, false, 35), 'widget');
        echo "
\t";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 36, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo " <!-- El JSON indica que no se van a renderizar los componentes. -->
\t
\t";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "session", [], "any", false, false, false, 38), "flashbag", [], "method", false, false, false, 38), "get", [0 => "mensaje"], "method", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            echo " <!-- Este bucle es obligatorio para recibir una sesion correctamente. -->
\t\t";
            // line 39
            if (($context["mensaje"] == "Exitoso")) {
                // line 40
                echo "\t\t\t<strong class=\"alerta-verde\">Usuario creado correctamente</strong>
\t\t";
            } elseif ((            // line 41
$context["mensaje"] == "Fallido")) {
                // line 42
                echo "\t\t\t<strong class=\"alerta-roja\">Error al crear el usuario</strong>
\t\t";
            }
            // line 44
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t
\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "session", [], "any", false, false, false, 46), "flashbag", [], "method", false, false, false, 46), "get", [0 => "errores"], "method", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["errores"]) {
            echo " <!-- Este bucle es obligatorio para recibir una sesion correctamente. -->
\t\t<div class=\"listado-errores\">
\t\t\t<ul>
\t\t\t";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["errores"]);
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                echo "\t
\t\t\t\t<li>";
                // line 50
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "\t\t\t</ul>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['errores'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "models/usuario/crear_usuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 52,  207 => 50,  201 => 49,  193 => 46,  190 => 45,  184 => 44,  180 => 42,  178 => 41,  175 => 40,  173 => 39,  167 => 38,  162 => 36,  158 => 35,  152 => 32,  148 => 31,  142 => 28,  138 => 27,  132 => 24,  128 => 23,  122 => 20,  118 => 19,  112 => 16,  108 => 15,  102 => 12,  98 => 11,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello UsuarioController!{% endblock %}

{% block body %}
\t<h1>Estas en Crear Usuario</h1>
\t
\t{{ form_start(formulario) }}
\t<table border=\"5px\">
\t\t<tr>
\t\t\t<td>{{ form_label(formulario.rut) }}</td> <!-- Renderizando componente. -->
\t\t\t<td>{{ form_widget(formulario.rut) }}</td> <!-- Renderizando componente. -->
\t\t</tr>
\t\t<tr>
\t\t\t<td>{{ form_label(formulario.nombre) }}</td>
\t\t\t<td>{{ form_widget(formulario.nombre) }}</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>{{ form_label(formulario.apellido) }}</td>
\t\t\t<td>{{ form_widget(formulario.apellido) }}</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>{{ form_label(formulario.email) }}</td>
\t\t\t<td>{{ form_widget(formulario.email) }}</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>{{ form_label(formulario.clave) }}</td>
\t\t\t<td>{{ form_widget(formulario.clave) }}</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>{{ form_label(formulario.tipo) }}</td>
\t\t\t<td>{{ form_widget(formulario.tipo) }}</td>
\t\t</tr>
\t</table>
\t{{ form_widget(formulario.boton) }}
\t{{ form_end(formulario, {\"render_rest\": false}) }} <!-- El JSON indica que no se van a renderizar los componentes. -->
\t
\t{% for mensaje in app.session.flashbag().get(\"mensaje\") %} <!-- Este bucle es obligatorio para recibir una sesion correctamente. -->
\t\t{% if mensaje == \"Exitoso\" %}
\t\t\t<strong class=\"alerta-verde\">Usuario creado correctamente</strong>
\t\t{% elseif mensaje == \"Fallido\" %}
\t\t\t<strong class=\"alerta-roja\">Error al crear el usuario</strong>
\t\t{% endif %}
\t{% endfor %}
\t
\t{% for errores in app.session.flashbag().get(\"errores\") %} <!-- Este bucle es obligatorio para recibir una sesion correctamente. -->
\t\t<div class=\"listado-errores\">
\t\t\t<ul>
\t\t\t{% for error in errores %}\t
\t\t\t\t<li>{{ error }}</li>
\t\t\t{% endfor %}
\t\t\t</ul>
\t\t</div>
\t{% endfor %}
{% endblock %}
", "models/usuario/crear_usuario.html.twig", "C:\\xampp\\htdocs\\EstructuraSymfony\\templates\\models\\usuario\\crear_usuario.html.twig");
    }
}
