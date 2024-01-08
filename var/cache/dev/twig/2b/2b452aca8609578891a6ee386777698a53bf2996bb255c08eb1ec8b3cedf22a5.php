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

/* @SyliusShop/Product/Show/_variantsPricing.html.twig */
class __TwigTemplate_46d480b9f49c8e2b5300d3029e69dea8839c09dd926335b9623b4c6cf41c261c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_variantsPricing.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_variantsPricing.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Product/Show/_variantsPricing.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["days"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 3, $this->source); })()), "channel", [], "any", false, false, false, 3), "channelPriceHistoryConfig", [], "any", false, false, false, 3), "lowestPriceForDiscountedProductsCheckingPeriod", [], "any", false, false, false, 3);
        // line 4
        echo "
<div id=\"sylius-variants-pricing\" data-unavailable-text=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.unavailable"), "html", null, true);
        echo "\">
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pricing"]) || array_key_exists("pricing", $context) ? $context["pricing"] : (function () { throw new RuntimeError('Variable "pricing" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["option_data"]) {
            // line 7
            echo "    ";
            $context["catalog_promotions"] = [];
            // line 8
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, $context["option_data"], "applied_promotions", [], "any", true, true, false, 8)) {
                // line 9
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option_data"], "applied_promotions", [], "any", false, false, false, 9));
                foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                    // line 10
                    echo "            ";
                    $context["catalog_promotions"] = twig_array_merge((isset($context["catalog_promotions"]) || array_key_exists("catalog_promotions", $context) ? $context["catalog_promotions"] : (function () { throw new RuntimeError('Variable "catalog_promotions" does not exist.', 10, $this->source); })()), [["label" => twig_get_attribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 10), "description" => twig_get_attribute($this->env, $this->source, $context["promotion"], "description", [], "any", false, false, false, 10)]]);
                    // line 11
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "    ";
            }
            // line 13
            echo "    <div ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["option_data"]);
            foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                echo "data-";
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "=\"";
                if ((($context["option"] == "value") || ($context["option"] == "original-price"))) {
                    echo twig_call_macro($macros["money"], "macro_convertAndFormat", [$context["value"]], 13, $context, $this->getSourceContext());
                } elseif (($context["option"] == "lowest-price-before-discount")) {
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.lowest_price_days_before_discount_was", ["%days%" => (isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 13, $this->source); })()), "%price%" => twig_call_macro($macros["money"], "macro_convertAndFormat", [$context["value"]], 13, $context, $this->getSourceContext())]), "html", null, true);
                } elseif (($context["option"] == "applied_promotions")) {
                    echo twig_escape_filter($this->env, json_encode((isset($context["catalog_promotions"]) || array_key_exists("catalog_promotions", $context) ? $context["catalog_promotions"] : (function () { throw new RuntimeError('Variable "catalog_promotions" does not exist.', 13, $this->source); })())), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, twig_replace_filter($context["value"], ["\"" => "'"]), "html", null, true);
                }
                echo "\" ";
                echo $this->env->getFunction('sylius_test_html_attribute')->getCallable()("variant-price");
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
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
        return "@SyliusShop/Product/Show/_variantsPricing.html.twig";
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
        return array (  113 => 15,  84 => 13,  81 => 12,  75 => 11,  72 => 10,  67 => 9,  64 => 8,  61 => 7,  57 => 6,  53 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

{% set days = sylius.channel.channelPriceHistoryConfig.lowestPriceForDiscountedProductsCheckingPeriod %}

<div id=\"sylius-variants-pricing\" data-unavailable-text=\"{{ 'sylius.ui.unavailable'|trans }}\">
{% for option_data in pricing %}
    {% set catalog_promotions = [] %}
    {% if option_data.applied_promotions is defined %}
        {% for promotion in option_data.applied_promotions %}
            {% set catalog_promotions = catalog_promotions|merge([{'label': promotion.name, 'description': promotion.description}]) %}
        {% endfor %}
    {% endif %}
    <div {% for option, value in option_data %}data-{{ option }}=\"{% if option == 'value' or option == 'original-price' %}{{ money.convertAndFormat(value) }}{% elseif option == 'lowest-price-before-discount' %}{{ 'sylius.ui.lowest_price_days_before_discount_was'|trans({'%days%': days, '%price%': money.convertAndFormat(value)}) }}{% elseif option == 'applied_promotions' %}{{ catalog_promotions|json_encode }}{% else %}{{ value|replace({'\\\"': '\\''}) }}{% endif %}\" {{ sylius_test_html_attribute('variant-price') }}{% endfor %}></div>
{% endfor %}
</div>
", "@SyliusShop/Product/Show/_variantsPricing.html.twig", "/var/www/html/Sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_variantsPricing.html.twig");
    }
}
