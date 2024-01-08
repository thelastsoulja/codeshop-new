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

/* @SyliusShop/Product/Show/_variants.html.twig */
class __TwigTemplate_6a2f80ffba4bad8c90eeed2a8376d5d205710b87c786202316662f342c2fdf60 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_variants.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_variants.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Product/Show/_variants.html.twig", 1)->unwrap();
        // line 2
        echo "
<table class=\"ui single line small table\" id=\"sylius-product-variants\" ";
        // line 3
        echo $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-variants");
        echo ">
    <thead>
    <tr>
        <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.variant"), "html", null, true);
        echo "</th>
        <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.price"), "html", null, true);
        echo "</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })()), "enabledVariants", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["key"] => $context["variant"]) {
            // line 13
            echo "        ";
            $context["channelPricing"] = twig_get_attribute($this->env, $this->source, $context["variant"], "getChannelPricingForChannel", [twig_get_attribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 13, $this->source); })()), "channel", [], "any", false, false, false, 13)], "method", false, false, false, 13);
            // line 14
            echo "        <tr ";
            echo $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-variants-row");
            echo ">
            <td>
                ";
            // line 16
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["variant"], "name", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["variant"], "name", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, $context["variant"], "descriptor", [], "any", false, false, false, 16))) : (twig_get_attribute($this->env, $this->source, $context["variant"], "descriptor", [], "any", false, false, false, 16))), "html", null, true);
            echo "
                ";
            // line 17
            if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 17, $this->source); })()), "hasOptions", [], "method", false, false, false, 17)) {
                // line 18
                echo "                    <div class=\"ui horizontal divided list\">
                        ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["variant"], "optionValues", [], "any", false, false, false, 19));
                foreach ($context['_seq'] as $context["_key"] => $context["optionValue"]) {
                    // line 20
                    echo "                            <div class=\"item\">
                                ";
                    // line 21
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["optionValue"], "value", [], "any", false, false, false, 21), "html", null, true);
                    echo "
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['optionValue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "                    </div>
                ";
            }
            // line 26
            echo "            </td>
            ";
            // line 27
            $context["appliedPromotions"] = twig_array_map($this->env, twig_get_attribute($this->env, $this->source, (isset($context["channelPricing"]) || array_key_exists("channelPricing", $context) ? $context["channelPricing"] : (function () { throw new RuntimeError('Variable "channelPricing" does not exist.', 27, $this->source); })()), "appliedPromotions", [], "any", false, false, false, 27), function ($__promotion__) use ($context, $macros) { $context["promotion"] = $__promotion__; return ["label" => twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 27, $this->source); })()), "label", [], "any", false, false, false, 27), "description" => twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27)]; });
            // line 28
            echo "            ";
            $context["days"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 28, $this->source); })()), "channel", [], "any", false, false, false, 28), "channelPriceHistoryConfig", [], "any", false, false, false, 28), "lowestPriceForDiscountedProductsCheckingPeriod", [], "any", false, false, false, 28);
            // line 29
            echo "            ";
            $context["hasLowestPrice"] = $this->env->getFilter('sylius_has_lowest_price')->getCallable()($context["variant"], ["channel" => twig_get_attribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 29, $this->source); })()), "channel", [], "any", false, false, false, 29)]);
            // line 30
            echo "            ";
            $context["hasDiscount"] = $this->env->getFilter('sylius_has_discount')->getCallable()($context["variant"], ["channel" => twig_get_attribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 30, $this->source); })()), "channel", [], "any", false, false, false, 30)]);
            // line 31
            echo "
            <td class=\"sylius-product-variant-price\"
                data-applied-promotions=\"";
            // line 33
            echo twig_escape_filter($this->env, json_encode((isset($context["appliedPromotions"]) || array_key_exists("appliedPromotions", $context) ? $context["appliedPromotions"] : (function () { throw new RuntimeError('Variable "appliedPromotions" does not exist.', 33, $this->source); })())), "html", null, true);
            echo "\"
                ";
            // line 34
            if ((isset($context["hasDiscount"]) || array_key_exists("hasDiscount", $context) ? $context["hasDiscount"] : (function () { throw new RuntimeError('Variable "hasDiscount" does not exist.', 34, $this->source); })())) {
                // line 35
                echo "                data-original-price=\"";
                echo twig_call_macro($macros["money"], "macro_calculateOriginalPrice", [$context["variant"]], 35, $context, $this->getSourceContext());
                echo "\"
                ";
                // line 36
                if ((isset($context["hasLowestPrice"]) || array_key_exists("hasLowestPrice", $context) ? $context["hasLowestPrice"] : (function () { throw new RuntimeError('Variable "hasLowestPrice" does not exist.', 36, $this->source); })())) {
                    // line 37
                    echo "                    ";
                    $context["lowestPriceBeforeDiscount"] = twig_call_macro($macros["money"], "macro_calculateLowestPrice", [$context["variant"]], 37, $context, $this->getSourceContext());
                    // line 38
                    echo "                    data-lowest-price-before-discount=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.lowest_price_days_before_discount_was", ["%days%" =>                     // line 40
(isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 40, $this->source); })()), "%price%" =>                     // line 41
(isset($context["lowestPriceBeforeDiscount"]) || array_key_exists("lowestPriceBeforeDiscount", $context) ? $context["lowestPriceBeforeDiscount"] : (function () { throw new RuntimeError('Variable "lowestPriceBeforeDiscount" does not exist.', 41, $this->source); })())]), "html", null, true);
                    // line 43
                    echo "\"
                ";
                }
                // line 45
                echo "                ";
            }
            echo ">
                ";
            // line 46
            echo twig_call_macro($macros["money"], "macro_calculatePrice", [$context["variant"]], 46, $context, $this->getSourceContext());
            echo "
            </td>
            <td class=\"right aligned\">
                ";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "cartItem", [], "any", false, false, false, 49), "variant", [], "any", false, false, false, 49), $context["key"], [], "array", false, false, false, 49), 'widget', ["label" => false]);
            echo "
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['variant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "    </tbody>
</table>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_variants.html.twig";
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
        return array (  172 => 53,  162 => 49,  156 => 46,  151 => 45,  147 => 43,  145 => 41,  144 => 40,  142 => 38,  139 => 37,  137 => 36,  132 => 35,  130 => 34,  126 => 33,  122 => 31,  119 => 30,  116 => 29,  113 => 28,  111 => 27,  108 => 26,  104 => 24,  95 => 21,  92 => 20,  88 => 19,  85 => 18,  83 => 17,  79 => 16,  73 => 14,  70 => 13,  66 => 12,  58 => 7,  54 => 6,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

<table class=\"ui single line small table\" id=\"sylius-product-variants\" {{ sylius_test_html_attribute('product-variants') }}>
    <thead>
    <tr>
        <th>{{ 'sylius.ui.variant'|trans }}</th>
        <th>{{ 'sylius.ui.price'|trans }}</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    {% for key, variant in product.enabledVariants %}
        {% set channelPricing = variant.getChannelPricingForChannel(sylius.channel) %}
        <tr {{ sylius_test_html_attribute('product-variants-row') }}>
            <td>
                {{ variant.name|default(variant.descriptor) }}
                {% if product.hasOptions() %}
                    <div class=\"ui horizontal divided list\">
                        {% for optionValue in variant.optionValues %}
                            <div class=\"item\">
                                {{ optionValue.value }}
                            </div>
                        {% endfor %}
                    </div>
                {% endif %}
            </td>
            {% set appliedPromotions = channelPricing.appliedPromotions|map(promotion => ({'label': promotion.label, 'description': promotion.description})) %}
            {% set days = sylius.channel.channelPriceHistoryConfig.lowestPriceForDiscountedProductsCheckingPeriod %}
            {% set hasLowestPrice = variant|sylius_has_lowest_price({'channel': sylius.channel})%}
            {% set hasDiscount = variant|sylius_has_discount({'channel': sylius.channel}) %}

            <td class=\"sylius-product-variant-price\"
                data-applied-promotions=\"{{ appliedPromotions|json_encode }}\"
                {% if hasDiscount %}
                data-original-price=\"{{ money.calculateOriginalPrice(variant) }}\"
                {% if hasLowestPrice %}
                    {% set lowestPriceBeforeDiscount = money.calculateLowestPrice(variant) %}
                    data-lowest-price-before-discount=\"{{
                    'sylius.ui.lowest_price_days_before_discount_was'|trans({
                        '%days%': days,
                        '%price%': lowestPriceBeforeDiscount
                    })
                    }}\"
                {% endif %}
                {% endif %}>
                {{ money.calculatePrice(variant) }}
            </td>
            <td class=\"right aligned\">
                {{ form_widget(form.cartItem.variant[key], {'label': false}) }}
            </td>
        </tr>
    {% endfor %}
    </tbody>
</table>
", "@SyliusShop/Product/Show/_variants.html.twig", "/var/www/html/Sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_variants.html.twig");
    }
}
