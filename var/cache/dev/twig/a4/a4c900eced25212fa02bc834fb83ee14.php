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

/* registration/register.html.twig */
class __TwigTemplate_c4ac0ea5d410d66dfc741b0e5a8ce0da extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 45
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 44
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), [0 => "bootstrap_5_layout.html.twig"], true);
        // line 45
        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 45);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 47
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Register";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 49
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 50
        echo "
<body>
    <header>
        <h2 class=\"logo\">  BAO BAO STORE </h2>
            <nav class=\"navigation\">
                ";
        // line 57
        echo "
                <a href = \"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"btnRegister-popup\">Login</a>
            </nav>
    </header>
</body>

<div class=\"container\">
    <h1 class=\"TD\">Register</h1>
    <hr>

    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 67, $this->source); })()), 'errors');
        echo "

    ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 69, $this->source); })()), 'form_start');
        echo "
        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 70, $this->source); })()), "username", [], "any", false, false, false, 70), 'row');
        echo "
        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), "first_name", [], "any", false, false, false, 71), 'row');
        echo "
        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 72, $this->source); })()), "last_name", [], "any", false, false, false, 72), 'row');
        echo "
        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 73, $this->source); })()), "plainPassword", [], "any", false, false, false, 73), 'row', ["label" => "Password"]);
        // line 75
        echo "
        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 76, $this->source); })()), "agreeTerms", [], "any", false, false, false, 76), 'row');
        echo "

        <button class\"style\" type=\"submit\" class=\"btn btn-success\">Register</button>
        
    ";
        // line 80
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 80, $this->source); })()), 'form_end');
        echo "
</div> 
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 84
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 85
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\"/>
<link rel=\"stylesheet\" href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/register.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 86,  170 => 85,  160 => 84,  147 => 80,  140 => 76,  137 => 75,  135 => 73,  131 => 72,  127 => 71,  123 => 70,  119 => 69,  114 => 67,  102 => 58,  99 => 57,  92 => 50,  82 => 49,  63 => 47,  52 => 45,  50 => 44,  37 => 45,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% form_theme registrationForm 'bootstrap_5_layout.html.twig'%}
{% extends 'base.html.twig' %} #}

{# {% block title %}Register{% endblock %} #}

{# {% block body %}
    <body>
    
            <header>
                    <h2 class=\"logo\">Logo</h2>
                    <nav class=\"navigation\">
                    <a href=\"#\">HOME</a>
                    <a href=\"#\">PRODUCT</a>
                    <a href=\"#\">SERVICES</a>
                    <a href=\"#\">CONTACT</a>
                    <button class=\"btnLogin-popup\"> Login </button>
                    </nav>
            </header>
           
            {# <h1 class =\"Register\">Register</h1>

            {{ form_errors(registrationForm) }}

            {{ form_start(registrationForm) }}
                {{ form_row(registrationForm.username) }}
                {{ form_row(registrationForm.first_name) }}
                {{ form_row(registrationForm.last_name) }}
                {{ form_row(registrationForm.plainPassword, {
                    label: 'Password'
                }) }}
                {{ form_row(registrationForm.agreeTerms) }}

                <button type=\"submit\" class=\"btn-primary\">Register</button>
            {{ form_end(registrationForm) }}
            
     
    </body>
{% endblock %}

{% block stylesheet %}
        <link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\" /> 
        <title> BAOBAO STORE </title>
{% endblock %} #}
{% form_theme registrationForm 'bootstrap_5_layout.html.twig'%}
{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}

<body>
    <header>
        <h2 class=\"logo\">  BAO BAO STORE </h2>
            <nav class=\"navigation\">
                {# <a href=\"{{path('app_success')}}\" class =\"btnLogin-popup\">Services</a>
                <a href=\"{{path('app_note')}}\"class=\"btnLogin-popup\">Contact</a> #}

                <a href = \"{{path('app_login')}}\" class=\"btnRegister-popup\">Login</a>
            </nav>
    </header>
</body>

<div class=\"container\">
    <h1 class=\"TD\">Register</h1>
    <hr>

    {{ form_errors(registrationForm) }}

    {{ form_start(registrationForm) }}
        {{ form_row(registrationForm.username) }}
        {{ form_row(registrationForm.first_name) }}
        {{ form_row(registrationForm.last_name) }}
        {{ form_row(registrationForm.plainPassword, {
            label: 'Password'
        }) }}
        {{ form_row(registrationForm.agreeTerms) }}

        <button class\"style\" type=\"submit\" class=\"btn btn-success\">Register</button>
        
    {{ form_end(registrationForm) }}
</div> 
{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{asset('css/bootstrap.css')}}\"/>
<link rel=\"stylesheet\" href=\"{{asset('css/register.css')}}\"/>
{% endblock %}", "registration/register.html.twig", "D:\\project\\MyArchive\\templates\\registration\\register.html.twig");
    }
}
