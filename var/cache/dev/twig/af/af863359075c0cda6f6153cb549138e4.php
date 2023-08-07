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

/* san_pham/list.html.twig */
class __TwigTemplate_9212a0e690a3b4dc31c357168e96c554 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "san_pham/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "san_pham/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "san_pham/list.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello NoteController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<body>
    <header>
        <h2 class=\"logo\"> BAO BAO STORE </h2>
            <nav class=\"navigation\">
                <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_manager");
        echo "\"class=\"btnLogin-popup\">account management</a>
                <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_san_pham");
        echo "\" class = \"btnLogin-popup\">Add Product</a>
                <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\" class =\"btnLogin-popup\">Feedback</a>
                <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_manager_add");
        echo "\"class=\"btnLogin-popup\">Add Admin</a>
                <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ds_Invoice");
        echo "\"class=\"btnLogin-popup\">Invoice</a>
                <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"class=\"btnLogin-popup\">Logout</a>
            </nav>
    </header>
</body>
<div class=\"container\">
        ";
        // line 23
        echo "    <table class=\" table\">
        <thead>
            <tr>
                <td> STT</td>
                <td> Code Product </td>
                <td> Name Product </td>
                <td>Price</td>
                <td> Photo </td>
                <td>Act</td>
            </tr>
        </thead>
        <body>
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 35, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["sp"]) {
            // line 36
            echo "        <tr>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
            <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sp"], "getId", [], "method", false, false, false, 38), "html", null, true);
            echo "</td>
            <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sp"], "getName", [], "method", false, false, false, 39), "html", null, true);
            echo "</td>
        
            <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sp"], "getPrice", [], "method", false, false, false, 41), "html", null, true);
            echo "</td>
            <td><img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/sanpham/" . twig_get_attribute($this->env, $this->source, $context["sp"], "getPhoto", [], "method", false, false, false, 42))), "html", null, true);
            echo "\" height=\"70\"/></td>
            <td>
                     <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_san_pham", ["id" => twig_get_attribute($this->env, $this->source, $context["sp"], "getId", [], "method", false, false, false, 44)]), "html", null, true);
            echo "\" class =\"btn btn-danger\"> Edit </a>
                     <a href=\"javascript:deletesp('";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_san_pham", ["id" => twig_get_attribute($this->env, $this->source, $context["sp"], "getId", [], "method", false, false, false, 45)]), "html", null, true);
            echo "')\" class=\"btn btn-warning\"> Delete</a>
                        <form>
                            <button type=\"submit\" formmethod=\"post\" formaction=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_add", ["product_id" => twig_get_attribute($this->env, $this->source, $context["sp"], "getId", [], "method", false, false, false, 47)]), "html", null, true);
            echo "\" class=\"btn btn-dark\">Add to cart</button>
                        </form>
                     <link rel=\"stylesheet\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
            echo "\"/>
                     <link rel=\"stylesheet\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/list.css"), "html", null, true);
            echo "\"/>
             </td>
        </tr>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        </body>
    </table>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "    <script>
        function deletesp(url){
            if(confirm(\"Do you detele product?\")){
                window.location.href = url;
                }
        }
    </script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "san_pham/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 59,  228 => 58,  215 => 54,  197 => 50,  193 => 49,  188 => 47,  183 => 45,  179 => 44,  174 => 42,  170 => 41,  165 => 39,  161 => 38,  157 => 37,  154 => 36,  137 => 35,  123 => 23,  115 => 16,  111 => 15,  107 => 14,  103 => 13,  99 => 12,  95 => 11,  89 => 7,  79 => 6,  60 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}Hello NoteController!{% endblock %}

{% block body %}
<body>
    <header>
        <h2 class=\"logo\"> BAO BAO STORE </h2>
            <nav class=\"navigation\">
                <a href=\"{{path('app_user_manager')}}\"class=\"btnLogin-popup\">account management</a>
                <a href=\"{{path('app_san_pham')}}\" class = \"btnLogin-popup\">Add Product</a>
                <a href=\"{{path('app_contact')}}\" class =\"btnLogin-popup\">Feedback</a>
                <a href=\"{{path('app_user_manager_add')}}\"class=\"btnLogin-popup\">Add Admin</a>
                <a href=\"{{path('app_ds_Invoice')}}\"class=\"btnLogin-popup\">Invoice</a>
                <a href=\"{{path('app_login')}}\"class=\"btnLogin-popup\">Logout</a>
            </nav>
    </header>
</body>
<div class=\"container\">
        {# <a href=\"{{path('app_san_pham')}}\" class=\"btn btn-dark\"> Add </a>
        <a href=\"{{path('app_logout')}}\" class=\"btn btn-danger\"> Logout</a> #}
    <table class=\" table\">
        <thead>
            <tr>
                <td> STT</td>
                <td> Code Product </td>
                <td> Name Product </td>
                <td>Price</td>
                <td> Photo </td>
                <td>Act</td>
            </tr>
        </thead>
        <body>
        {% for sp in data %}
        <tr>
            <td>{{loop.index}}</td>
            <td>{{sp.getId()}}</td>
            <td>{{sp.getName()}}</td>
        
            <td>{{sp.getPrice()}}</td>
            <td><img src=\"{{asset ('uploads/sanpham/' ~ sp.getPhoto())}}\" height=\"70\"/></td>
            <td>
                     <a href=\"{{path('app_edit_san_pham',{'id' :sp.getId()})}}\" class =\"btn btn-danger\"> Edit </a>
                     <a href=\"javascript:deletesp('{{path('app_delete_san_pham',{'id':sp.getId()})}}')\" class=\"btn btn-warning\"> Delete</a>
                        <form>
                            <button type=\"submit\" formmethod=\"post\" formaction=\"{{path('app_cart_add',{'product_id':sp.getId()})}}\" class=\"btn btn-dark\">Add to cart</button>
                        </form>
                     <link rel=\"stylesheet\" href=\"{{asset('css/bootstrap.css')}}\"/>
                     <link rel=\"stylesheet\" href=\"{{asset('css/list.css')}}\"/>
             </td>
        </tr>
        {% endfor %}
        </body>
    </table>
</div>
{% endblock %}
    {% block javascripts %}
    <script>
        function deletesp(url){
            if(confirm(\"Do you detele product?\")){
                window.location.href = url;
                }
        }
    </script>
    {% endblock %} ", "san_pham/list.html.twig", "D:\\project\\MyArchive\\templates\\san_pham\\list.html.twig");
    }
}
