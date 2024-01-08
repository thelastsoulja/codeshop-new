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

/* @SyliusShop/Product/Show/_price.html.twig */
class __TwigTemplate_ef909d2553ae111fcade33de45e56140461c7a5dab58abc365701b22f1c1e9a4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_price.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_price.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Product/Show/_price.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["variant"] = $this->env->getFilter('sylius_resolve_variant')->getCallable()((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 3, $this->source); })()));
        // line 4
        $context["hasDiscount"] = $this->env->getFilter('sylius_has_discount')->getCallable()((isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 4, $this->source); })()), ["channel" => twig_get_attribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 4, $this->source); })()), "channel", [], "any", false, false, false, 4)]);
        // line 5
        echo "
<span class=\"ui header\" id=\"product-original-price\"";
        // line 6
        if ( !(isset($context["hasDiscount"]) || array_key_exists("hasDiscount", $context) ? $context["hasDiscount"] : (function () { throw new RuntimeError('Variable "hasDiscount" does not exist.', 6, $this->source); })())) {
            echo " style=\"display: none;\"";
        }
        echo " ";
        echo $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-original-price", twig_call_macro($macros["money"], "macro_calculateOriginalPrice", [(isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 6, $this->source); })())], 6, $context, $this->getSourceContext()));
        echo ">
    ";
        // line 7
        if ((isset($context["hasDiscount"]) || array_key_exists("hasDiscount", $context) ? $context["hasDiscount"] : (function () { throw new RuntimeError('Variable "hasDiscount" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "        <del>";
            echo twig_call_macro($macros["money"], "macro_calculateOriginalPrice", [(isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 8, $this->source); })())], 8, $context, $this->getSourceContext());
            echo "</del>
    ";
        }
        // line 10
        echo "</span>

<span class=\"ui huge header\" id=\"product-price\" ";
        // line 12
        echo $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-price", twig_call_macro($macros["money"], "macro_calculatePrice", [(isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 12, $this->source); })())], 12, $context, $this->getSourceContext()));
        echo ">
    ";
        // line 13
        echo twig_call_macro($macros["money"], "macro_calculatePrice", [(isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 13, $this->source); })())], 13, $context, $this->getSourceContext());
        echo "
</span>

";
        // line 16
        $context["days"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 16, $this->source); })()), "channel", [], "any", false, false, false, 16), "channelPriceHistoryConfig", [], "any", false, false, false, 16), "lowestPriceForDiscountedProductsCheckingPeriod", [], "any", false, false, false, 16);
        // line 17
        $context["hasLowestPrice"] = $this->env->getFilter('sylius_has_lowest_price')->getCallable()((isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 17, $this->source); })()), ["channel" => twig_get_attribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 17, $this->source); })()), "channel", [], "any", false, false, false, 17)]);
        // line 18
        echo "
<div class=\"ui mini label\" id=\"lowest-price-before-discount\"
    ";
        // line 20
        if (((isset($context["hasDiscount"]) || array_key_exists("hasDiscount", $context) ? $context["hasDiscount"] : (function () { throw new RuntimeError('Variable "hasDiscount" does not exist.', 20, $this->source); })()) && (isset($context["hasLowestPrice"]) || array_key_exists("hasLowestPrice", $context) ? $context["hasLowestPrice"] : (function () { throw new RuntimeError('Variable "hasLowestPrice" does not exist.', 20, $this->source); })()))) {
            // line 21
            echo "        style=\"white-space: nowrap\"
    ";
        } else {
            // line 23
            echo "        style=\"display: none;\"
    ";
        }
        // line 25
        echo ">
    ";
        // line 26
        if (((isset($context["hasDiscount"]) || array_key_exists("hasDiscount", $context) ? $context["hasDiscount"] : (function () { throw new RuntimeError('Variable "hasDiscount" does not exist.', 26, $this->source); })()) && (isset($context["hasLowestPrice"]) || array_key_exists("hasLowestPrice", $context) ? $context["hasLowestPrice"] : (function () { throw new RuntimeError('Variable "hasLowestPrice" does not exist.', 26, $this->source); })()))) {
            // line 27
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.lowest_price_days_before_discount_was", ["%days%" => (isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 27, $this->source); })()), "%price%" => twig_call_macro($macros["money"], "macro_calculateLowestPrice", [(isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 27, $this->source); })())], 27, $context, $this->getSourceContext())]), "html", null, true);
            echo "
    ";
        }
        // line 29
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_price.html.twig";
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
        return array (  114 => 29,  108 => 27,  106 => 26,  103 => 25,  99 => 23,  95 => 21,  93 => 20,  89 => 18,  87 => 17,  85 => 16,  79 => 13,  75 => 12,  71 => 10,  65 => 8,  63 => 7,  55 => 6,  52 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

{% set variant = product|sylius_resolve_variant %}
{% set hasDiscount = variant|sylius_has_discount({'channel': sylius.channel}) %}

<span class=\"ui header\" id=\"product-original-price\"{% if not hasDiscount %} style=\"display: none;\"{% endif %} {{ sylius_test_html_attribute('product-original-price', money.calculateOriginalPrice(variant)) }}>
    {% if hasDiscount %}
        <del>{{ money.calculateOriginalPrice(variant) }}</del>
    {% endif %}
</span>

<span class=\"ui huge header\" id=\"product-price\" {{ sylius_test_html_attribute('product-price', money.calculatePrice(variant)) }}>
    {{ money.calculatePrice(variant) }}
</span>

{% set days = sylius.channel.channelPriceHistoryConfig.lowestPriceForDiscountedProductsCheckingPeriod %}
{% set hasLowestPrice = variant|sylius_has_lowest_price({'channel': sylius.channel})%}

<div class=\"ui mini label\" id=\"lowest-price-before-discount\"
    {% if hasDiscount and hasLowestPrice %}
        style=\"white-space: nowrap\"
    {% else %}
        style=\"display: none;\"
    {% endif %}
>
    {% if hasDiscount and hasLowestPrice %}
        {{ 'sylius.ui.lowest_price_days_before_discount_was'|trans({'%days%': days, '%price%': money.calculateLowestPrice(variant)}) }}
    {% endif %}
</div>
", "@SyliusShop/Product/Show/_price.html.twig", "/var/www/html/Sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_price.html.twig");
    }
}
