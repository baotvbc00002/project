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

/* invoice/list.html.twig */
class __TwigTemplate_e76cc9c5d53f37437634365a3091b380 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "invoice/list.html.twig", 1);
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

        echo "Hello Invoice!";
        
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
        echo "<body>
    <header>
        <h2 class=\"logo\"> BAO BAO STORE </h2>
            <nav class=\"navigation\">
                <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_manager");
        echo "\"class=\"btnLogin-popup\">account management</a>
                <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_san_pham");
        echo "\" class = \"btnLogin-popup\">Add Product</a>
                <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\" class =\"btnLogin-popup\">Feedback</a>
                <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_manager_add");
        echo "\"class=\"btnLogin-popup\">Add Admin</a>
\t\t\t\t<a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ds_Invoice");
        echo "\"class=\"btnLogin-popup\">Invoice</a>
                <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"class=\"btnLogin-popup\">Logout</a>
            </nav>
    </header>
</body>
<div class=\"container\">

    <table class=\"table\" style=\"text-align: center\"
        <thead>
            <tr >
                <td> No </td>
                <td> Invoice Code  </td>
                <td> Customer Name </td>
                <td> Address </td>
                <td> Phone Number </td>
                <td> Total Price </td>
                ";
        // line 31
        echo "                <td> Act </td>
            </tr>
         </thead>

         <tbody>
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 36, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["inv"]) {
            // line 37
            echo "                <tr>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inv"], "getId", [], "method", false, false, false, 39), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inv"], "getCustomerName", [], "method", false, false, false, 40), "html", null, true);
            echo "</td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inv"], "getCustomerAddress", [], "method", false, false, false, 41), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inv"], "getCustomerPhone", [], "method", false, false, false, 42), "html", null, true);
            echo "</td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inv"], "getTotalPrice", [], "method", false, false, false, 43), "html", null, true);
            echo "</td>
                    ";
            // line 50
            echo "                        
                    <td>
                        <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order", ["id" => twig_get_attribute($this->env, $this->source, $context["inv"], "getId", [], "method", false, false, false, 52)]), "html", null, true);
            echo "\" class=\"btn btn-warning\"> Detail</a>
                        <a href=\"javascript:deleteinv('";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_invoice", ["id" => twig_get_attribute($this->env, $this->source, $context["inv"], "getId", [], "method", false, false, false, 53)]), "html", null, true);
            echo "')\" class=\"btn btn-danger\"> Delete</a> 
\t\t\t\t\t\t<link rel=\"stylesheet\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
            echo "\"/>
                     <link rel=\"stylesheet\" href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/list.css"), "html", null, true);
            echo "\"/>
\t\t\t\t\t</td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </tbody>
    </table>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 66
        echo "<script>
    function deleteinv(url){
        if(confirm(\"Do you delete invoice?\")){
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
        return "invoice/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 66,  232 => 65,  218 => 59,  200 => 55,  196 => 54,  192 => 53,  188 => 52,  184 => 50,  180 => 43,  176 => 42,  172 => 41,  168 => 40,  164 => 39,  160 => 38,  157 => 37,  140 => 36,  133 => 31,  115 => 15,  111 => 14,  107 => 13,  103 => 12,  99 => 11,  95 => 10,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello Invoice!{% endblock %}

{% block body %}
<body>
    <header>
        <h2 class=\"logo\"> BAO BAO STORE </h2>
            <nav class=\"navigation\">
                <a href=\"{{path('app_user_manager')}}\"class=\"btnLogin-popup\">account management</a>
                <a href=\"{{path('app_san_pham')}}\" class = \"btnLogin-popup\">Add Product</a>
                <a href=\"{{path('app_contact')}}\" class =\"btnLogin-popup\">Feedback</a>
                <a href=\"{{path('app_user_manager_add')}}\"class=\"btnLogin-popup\">Add Admin</a>
\t\t\t\t<a href=\"{{path('app_ds_Invoice')}}\"class=\"btnLogin-popup\">Invoice</a>
                <a href=\"{{path('app_login')}}\"class=\"btnLogin-popup\">Logout</a>
            </nav>
    </header>
</body>
<div class=\"container\">

    <table class=\"table\" style=\"text-align: center\"
        <thead>
            <tr >
                <td> No </td>
                <td> Invoice Code  </td>
                <td> Customer Name </td>
                <td> Address </td>
                <td> Phone Number </td>
                <td> Total Price </td>
                {# <td> Status </td> #}
                <td> Act </td>
            </tr>
         </thead>

         <tbody>
            {% for inv in data %}
                <tr>
                    <td>{{loop.index}}</td>
                    <td>{{inv.getId()}}</td>
                    <td>{{inv.getCustomerName()}}</td>
                    <td>{{inv.getCustomerAddress()}}</td>
                    <td>{{inv.getCustomerPhone()}}</td>
                    <td>{{inv.getTotalPrice()}}</td>
                    {# <td>{{inv.isStatus()}}
                        {% if isStatus() == false %}
                            <p>Deliveried</p>
                        {% elseif isStatus() == true %}
                            <p>Deliverying</p>
                    </td> #}
                        
                    <td>
                        <a href=\"{{path('app_order',{'id':inv.getId()})}}\" class=\"btn btn-warning\"> Detail</a>
                        <a href=\"javascript:deleteinv('{{path('app_delete_invoice',{'id':inv.getId()})}}')\" class=\"btn btn-danger\"> Delete</a> 
\t\t\t\t\t\t<link rel=\"stylesheet\" href=\"{{asset('css/bootstrap.css')}}\"/>
                     <link rel=\"stylesheet\" href=\"{{asset('css/list.css')}}\"/>
\t\t\t\t\t</td>
                </tr>
             {% endfor %}
        </tbody>
    </table>
</div>

{% endblock %}

{% block javascripts %}
<script>
    function deleteinv(url){
        if(confirm(\"Do you delete invoice?\")){
            window.location.href = url;
        }
    }
</script>
{% endblock %}", "invoice/list.html.twig", "D:\\project\\MyArchive\\templates\\invoice\\list.html.twig");
    }
}
