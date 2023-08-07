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

/* invoice/index.html.twig */
class __TwigTemplate_d995c794600608970e2898da1c98b9af extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "invoice/index.html.twig", 2);
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

        echo "invoice
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div class=\"container\">
        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["sp_form"]) || array_key_exists("sp_form", $context) ? $context["sp_form"] : (function () { throw new RuntimeError('Variable "sp_form" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["sp_form"]) || array_key_exists("sp_form", $context) ? $context["sp_form"] : (function () { throw new RuntimeError('Variable "sp_form" does not exist.', 10, $this->source); })()), 'widget');
        echo "
            <input type=\"submit\" value=\"Confirm\" class=\"btn btn-primary\" />
        ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["sp_form"]) || array_key_exists("sp_form", $context) ? $context["sp_form"] : (function () { throw new RuntimeError('Variable "sp_form" does not exist.', 12, $this->source); })()), 'form_end');
        echo "
\t\t<table class=\"table\">
\t\t\t<tr>
\t\t\t\t<th>STT</th>
\t\t\t\t<th>Product</th>
\t\t\t\t<th>Price</th>
\t\t\t\t<th>Quantity</th>
\t\t\t\t<th>Total</th>
\t\t\t</tr>
\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cart_manager"]) || array_key_exists("cart_manager", $context) ? $context["cart_manager"] : (function () { throw new RuntimeError('Variable "cart_manager" does not exist.', 21, $this->source); })()), "items", [], "any", false, false, false, 21));
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
            // line 22
            echo "\t\t\t\t<tr>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24), "html", null, true);
            echo "
                        -
                        ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 27), "price", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 29), "html", null, true);
            echo "
                    </td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "amount", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
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
        // line 34
        echo "\t\t  <a href=\"javascript:deletesp('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(" app_order", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["sp"]) || array_key_exists("sp", $context) ? $context["sp"] : (function () { throw new RuntimeError('Variable "sp" does not exist.', 34, $this->source); })()), "getId", [], "method", false, false, false, 34)]), "html", null, true);
        echo "')\" class=\"btn btn-warning\"> Delete</a>
\t\t</table>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        if ( !twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 39, $this->source); })()))) {
            // line 40
            echo "    <script> alert(\"";
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 40, $this->source); })()), "html", null, true);
            echo "\");</script>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 44
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 45
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
<link rel=\"stylesheet\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/cart.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "invoice/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 46,  226 => 45,  216 => 44,  202 => 40,  200 => 39,  190 => 38,  175 => 34,  158 => 31,  153 => 29,  148 => 27,  144 => 26,  139 => 24,  135 => 23,  132 => 22,  115 => 21,  103 => 12,  98 => 10,  94 => 9,  91 => 8,  81 => 7,  61 => 4,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}invoice
{% endblock %}

{% block body %}
\t<div class=\"container\">
        {{form_start(sp_form)}}
            {{form_widget(sp_form)}}
            <input type=\"submit\" value=\"Confirm\" class=\"btn btn-primary\" />
        {{form_end(sp_form)}}
\t\t<table class=\"table\">
\t\t\t<tr>
\t\t\t\t<th>STT</th>
\t\t\t\t<th>Product</th>
\t\t\t\t<th>Price</th>
\t\t\t\t<th>Quantity</th>
\t\t\t\t<th>Total</th>
\t\t\t</tr>
\t\t\t{% for item in cart_manager.items %}
\t\t\t\t<tr>
                    <td>{{loop.index}}</td>
                    <td>{{item.product.id}}
                        -
                        {{item.product.name}}</td>
                    <td>{{item.product.price}}</td>
                    <td>
                        {{item.quantity}}
                    </td>
                    <td>{{item.amount}}</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t  <a href=\"javascript:deletesp('{{path(' app_order',{'id':sp.getId()})}}')\" class=\"btn btn-warning\"> Delete</a>
\t\t</table>
\t</div>
{% endblock %}
{% block javascripts %}
{% if message is not empty %}
    <script> alert(\"{{message}}\");</script>
{% endif %}
{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css')}}\"/>
<link rel=\"stylesheet\" href=\"{{asset('css/cart.css')}}\"/>
{% endblock %}", "invoice/index.html.twig", "D:\\project\\MyArchive\\templates\\invoice\\index.html.twig");
    }
}
