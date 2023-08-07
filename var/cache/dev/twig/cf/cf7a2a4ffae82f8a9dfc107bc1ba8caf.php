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

/* cart/index.html.twig */
class __TwigTemplate_b75f6a3c6e8d84257bdad67cfacc5ab4 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        echo "Cart manager
";
        
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
        echo "\t<div class=\"container\">
\t\t<a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ds_san_pham");
        echo "\" class=\"btn btn-outline-primary\">Add another product</a>
\t\t<table class=\"table\">
\t\t\t<tr>
\t\t\t\t<th>STT</th>
\t\t\t\t<th>Product</th>
\t\t\t\t<th>Price</th>
\t\t\t\t<th>Quantity</th>
\t\t\t\t<th>Total</th>
\t\t\t\t<th>Action</th>
\t\t\t</tr>
\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cart_manager"]) || array_key_exists("cart_manager", $context) ? $context["cart_manager"] : (function () { throw new RuntimeError('Variable "cart_manager" does not exist.', 18, $this->source); })()), "items", [], "any", false, false, false, 18));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "\t\t\t\t<tr>
\t\t\t\t\t<form action=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_update");
            echo "\" method=\"POST\">
\t\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22), "html", null, true);
            echo "
\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 25), "price", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
                            <input type='hidden' value='";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27), "html", null, true);
            echo "' name='product_id'/>
\t\t\t\t\t\t\t<input type='number' onchange=\"this.form.submit()\" value='";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 28), "html", null, true);
            echo "' min=\"1\" name='qty'/>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "amount", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_remove", ["product_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">Remove</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</form>
\t\t\t\t</tr>
\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t\t<tr>
\t\t\t<td colspan='5' >SUM</td>
\t\t\t<td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cart_manager"]) || array_key_exists("cart_manager", $context) ? $context["cart_manager"] : (function () { throw new RuntimeError('Variable "cart_manager" does not exist.', 39, $this->source); })()), "amount", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
\t\t\t<a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order");
        echo "\" class =\"btn btn-danger\">Order</a>
\t\t
\t\t\t</tr>
\t\t</table>
\t\t<a></a>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 49
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 50
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
<link rel=\"stylesheet\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/cart.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 51,  235 => 50,  225 => 49,  207 => 47,  190 => 40,  186 => 39,  182 => 37,  163 => 32,  158 => 30,  153 => 28,  149 => 27,  144 => 25,  140 => 24,  135 => 22,  131 => 21,  127 => 20,  124 => 19,  107 => 18,  94 => 8,  91 => 7,  81 => 6,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Cart manager
{% endblock %}

{% block body %}
\t<div class=\"container\">
\t\t<a href=\"{{path('app_ds_san_pham')}}\" class=\"btn btn-outline-primary\">Add another product</a>
\t\t<table class=\"table\">
\t\t\t<tr>
\t\t\t\t<th>STT</th>
\t\t\t\t<th>Product</th>
\t\t\t\t<th>Price</th>
\t\t\t\t<th>Quantity</th>
\t\t\t\t<th>Total</th>
\t\t\t\t<th>Action</th>
\t\t\t</tr>
\t\t\t{% for item in cart_manager.items %}
\t\t\t\t<tr>
\t\t\t\t\t<form action=\"{{path('app_cart_update')}}\" method=\"POST\">
\t\t\t\t\t\t<td>{{loop.index}}</td>
\t\t\t\t\t\t<td>{{item.product.id}}
\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t{{item.product.name}}</td>
\t\t\t\t\t\t<td>{{item.product.price}}</td>
\t\t\t\t\t\t<td>
                            <input type='hidden' value='{{item.product.id}}' name='product_id'/>
\t\t\t\t\t\t\t<input type='number' onchange=\"this.form.submit()\" value='{{item.quantity}}' min=\"1\" name='qty'/>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>{{item.amount}}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{path('app_cart_remove',{'product_id':item.product.id})}}\">Remove</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</form>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t\t<tr>
\t\t\t<td colspan='5' >SUM</td>
\t\t\t<td>{{cart_manager.amount}}</td>
\t\t\t<a href=\"{{path('app_order')}}\" class =\"btn btn-danger\">Order</a>
\t\t
\t\t\t</tr>
\t\t</table>
\t\t<a></a>
\t</div>
{% endblock %}
{% block javascripts %}
{% endblock %}
{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css')}}\"/>
<link rel=\"stylesheet\" href=\"{{asset('css/cart.css')}}\"/>
{% endblock %}", "cart/index.html.twig", "D:\\project\\MyArchive\\templates\\cart\\index.html.twig");
    }
}
