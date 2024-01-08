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

/* @SyliusAdmin/ChannelPricingLogEntry/Index/_breadcrumb.html.twig */
class __TwigTemplate_f4b147698dc96de6ecd43ad5ca3b5d038492d8de2fb42ff57c4a1ba73bb820af extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/ChannelPricingLogEntry/Index/_breadcrumb.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/ChannelPricingLogEntry/Index/_breadcrumb.html.twig"));

        // line 1
        $macros["breadcrumb"] = $this->macros["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "@SyliusAdmin/ChannelPricingLogEntry/Index/_breadcrumb.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["product_variant"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "product_variant", [], "any", false, false, false, 3);
        // line 4
        $context["product"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "product_variant", [], "any", false, false, false, 4), "product", [], "any", false, false, false, 4);
        // line 5
        echo "
";
        // line 6
        echo twig_call_macro($macros["breadcrumb"], "macro_crumble", [[["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.administration"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_dashboard")], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.products"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_index")], ["label" => ((twig_get_attribute($this->env, $this->source,         // line 9
($context["product"] ?? null), "name", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 9), twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 9, $this->source); })()), "code", [], "any", false, false, false, 9))) : (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 9, $this->source); })()), "code", [], "any", false, false, false, 9))), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)])], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.variants"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_variant_index", ["productId" => twig_get_attribute($this->env, $this->source,         // line 10
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)])], ["label" => ((twig_get_attribute($this->env, $this->source,         // line 11
($context["product_variant"] ?? null), "name", [], "any", true, true, false, 11)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["product_variant"] ?? null), "name", [], "any", false, false, false, 11), twig_get_attribute($this->env, $this->source, (isset($context["product_variant"]) || array_key_exists("product_variant", $context) ? $context["product_variant"] : (function () { throw new RuntimeError('Variable "product_variant" does not exist.', 11, $this->source); })()), "code", [], "any", false, false, false, 11))) : (twig_get_attribute($this->env, $this->source, (isset($context["product_variant"]) || array_key_exists("product_variant", $context) ? $context["product_variant"] : (function () { throw new RuntimeError('Variable "product_variant" does not exist.', 11, $this->source); })()), "code", [], "any", false, false, false, 11))), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_variant_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product_variant"]) || array_key_exists("product_variant", $context) ? $context["product_variant"] : (function () { throw new RuntimeError('Variable "product_variant" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "productId" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)])], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.price_history")]]], 6, $context, $this->getSourceContext());
        // line 13
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SyliusAdmin/ChannelPricingLogEntry/Index/_breadcrumb.html.twig";
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
        return array (  60 => 13,  58 => 11,  57 => 10,  56 => 9,  55 => 6,  52 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@SyliusAdmin/Macro/breadcrumb.html.twig' as breadcrumb %}

{% set product_variant = configuration.vars.product_variant %}
{% set product = configuration.vars.product_variant.product %}

{{ breadcrumb.crumble([
    { label: 'sylius.ui.administration'|trans, url: path('sylius_admin_dashboard') },
    { label: 'sylius.ui.products'|trans, url: path('sylius_admin_product_index') },
    { label: product.name|default(product.code), url: path('sylius_admin_product_show', {'id': product.id }) },
    { label: 'sylius.ui.variants'|trans, url: path('sylius_admin_product_variant_index', {'productId': product.id }) },
    { label: product_variant.name|default(product_variant.code), url: path('sylius_admin_product_variant_update', {'id': product_variant.id, 'productId': product.id }) },
    { label: 'sylius.ui.price_history'|trans },
]) }}
", "@SyliusAdmin/ChannelPricingLogEntry/Index/_breadcrumb.html.twig", "/var/www/html/Sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ChannelPricingLogEntry/Index/_breadcrumb.html.twig");
    }
}
