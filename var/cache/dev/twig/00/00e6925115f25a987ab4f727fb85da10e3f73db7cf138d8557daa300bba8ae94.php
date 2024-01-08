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

/* @SyliusAdmin/ProductVariant/Grid/Field/name.html.twig */
class __TwigTemplate_5ad3e50e2ab6ee342e0fa07940422e0c4d5d2bf8ed00cab6be56e2b5b1a6ccc0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/ProductVariant/Grid/Field/name.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/ProductVariant/Grid/Field/name.html.twig"));

        // line 1
        $context["current_locale"] = twig_get_attribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 1, $this->source); })()), "localeCode", [], "any", false, false, false, 1);
        // line 2
        $context["translation"] = twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 2, $this->source); })()), "getTranslation", [(isset($context["current_locale"]) || array_key_exists("current_locale", $context) ? $context["current_locale"] : (function () { throw new RuntimeError('Variable "current_locale" does not exist.', 2, $this->source); })())], "method", false, false, false, 2);
        // line 3
        $context["translation"] = (((twig_get_attribute($this->env, $this->source, (isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 3, $this->source); })()), "locale", [], "any", false, false, false, 3) == (isset($context["current_locale"]) || array_key_exists("current_locale", $context) ? $context["current_locale"] : (function () { throw new RuntimeError('Variable "current_locale" does not exist.', 3, $this->source); })()))) ? ((isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 3, $this->source); })())) : (null));
        // line 4
        echo "
";
        // line 5
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 5, $this->source); })()), "optionValues", [], "any", false, false, false, 5))) {
            // line 6
            echo "    ";
            if (( !(null === (isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 6, $this->source); })())) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6)))) {
                // line 7
                echo "        <span class=\"ui small header\">
            ";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
                echo "
        </span>
    ";
            } else {
                // line 11
                echo "        ";
                $this->loadTemplate("@SyliusAdmin/Common/_missingTranslation.html.twig", "@SyliusAdmin/ProductVariant/Grid/Field/name.html.twig", 11)->display($context);
                // line 12
                echo "    ";
            }
        } else {
            // line 14
            echo "    <span class=\"ui small header\">
        ";
            // line 15
            $context["product"] = twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "product", [], "any", false, false, false, 15);
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, ((( !(null === (isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 16, $this->source); })())) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16)))) ? (twig_get_attribute($this->env, $this->source, (isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16)) : (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16))), "html", null, true);
            echo "
    </span>
    <br>
    <div class=\"ui horizontal divided list\">
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "optionValues", [], "any", false, false, false, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["optionValue"]) {
                // line 21
                echo "            <div class=\"item\">
                ";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["optionValue"], "value", [], "any", false, false, false, 22), "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['optionValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SyliusAdmin/ProductVariant/Grid/Field/name.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  102 => 25,  93 => 22,  90 => 21,  86 => 20,  78 => 16,  76 => 15,  73 => 14,  69 => 12,  66 => 11,  60 => 8,  57 => 7,  54 => 6,  52 => 5,  49 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set current_locale = sylius.localeCode %}
{% set translation = data.getTranslation(current_locale) %}
{% set translation = translation.locale == current_locale ? translation : null %}

{% if data.optionValues is empty %}
    {% if translation is not null and translation.name is not null %}
        <span class=\"ui small header\">
            {{ translation.name }}
        </span>
    {% else %}
        {% include '@SyliusAdmin/Common/_missingTranslation.html.twig' %}
    {% endif %}
{% else %}
    <span class=\"ui small header\">
        {% set product = data.product %}
        {{ translation is not null and translation.name is not null ? translation.name : product.name }}
    </span>
    <br>
    <div class=\"ui horizontal divided list\">
        {% for optionValue in data.optionValues %}
            <div class=\"item\">
                {{ optionValue.value }}
            </div>
        {% endfor %}
    </div>
{% endif %}
", "@SyliusAdmin/ProductVariant/Grid/Field/name.html.twig", "/var/www/html/Sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductVariant/Grid/Field/name.html.twig");
    }
}
