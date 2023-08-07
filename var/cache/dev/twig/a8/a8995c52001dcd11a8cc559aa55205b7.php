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

/* contact/index.html.twig */
class __TwigTemplate_cd0d9c057a31b4eeb45513afd4ad3964 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ContactController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
    <style>
        form {
            margin: 50px auto;
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type=\"text\"], textarea {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }
        input[type=\"submit\"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <form id=\"feedbackForm\" action=\"\">
        <button name=\"\" id=\"\" class=\"btn btn-secondary btn-lg btn-block\">Feedback</button>
        <label for=\"name\">Name:</label>
        <input type=\"text\" id=\"name\" name=\"name\" required>

        <label for=\"email\">Email:</label>
        <input type=\"email\" id=\"email\" name=\"email\" required>

        <label for=\"message\">Message:</label>
        <textarea id=\"message\" name=\"message\" rows=\"4\" required></textarea>

        <input type=\"submit\" value=\"Submit\">
    </form>

    <script>
        const form = document.querySelector('#feedbackForm');
        form.addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent the form from submitting

            // Get form values
            const name = document.querySelector('#name').value;
            const email = document.querySelector('#email').value;
            const message = document.querySelector('#message').value;

            // Send the form data to a server or perform other actions
            console.log('Name:', name);
            console.log('Email:', email);
            console.log('Message:', message);

            // Reset the form
            form.reset();
        });
    </script>
</body>
</html>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ContactController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
    <style>
        form {
            margin: 50px auto;
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type=\"text\"], textarea {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }
        input[type=\"submit\"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <form id=\"feedbackForm\" action=\"\">
        <button name=\"\" id=\"\" class=\"btn btn-secondary btn-lg btn-block\">Feedback</button>
        <label for=\"name\">Name:</label>
        <input type=\"text\" id=\"name\" name=\"name\" required>

        <label for=\"email\">Email:</label>
        <input type=\"email\" id=\"email\" name=\"email\" required>

        <label for=\"message\">Message:</label>
        <textarea id=\"message\" name=\"message\" rows=\"4\" required></textarea>

        <input type=\"submit\" value=\"Submit\">
    </form>

    <script>
        const form = document.querySelector('#feedbackForm');
        form.addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent the form from submitting

            // Get form values
            const name = document.querySelector('#name').value;
            const email = document.querySelector('#email').value;
            const message = document.querySelector('#message').value;

            // Send the form data to a server or perform other actions
            console.log('Name:', name);
            console.log('Email:', email);
            console.log('Message:', message);

            // Reset the form
            form.reset();
        });
    </script>
</body>
</html>

{% endblock %}
", "contact/index.html.twig", "D:\\project\\MyArchive\\templates\\contact\\index.html.twig");
    }
}
