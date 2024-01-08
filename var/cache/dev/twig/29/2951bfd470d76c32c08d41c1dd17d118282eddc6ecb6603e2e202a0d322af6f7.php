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

/* @SyliusAdmin/Product/Show/_variantContentPricing.html.twig */
class __TwigTemplate_e39f592ded7d4df73fe75408316fec52eb6bb07c2a391641ada848b06c52eb82 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_variantContentPricing.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_variantContentPricing.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "@SyliusAdmin/Product/Show/_variantContentPricing.html.twig", 1)->unwrap();
        // line 2
        echo "
<div class=\"column\">
    <div class=\"ui segment\">
        <div class=\"ui small header\">
            ";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.pricing"), "html", null, true);
        echo "
        </div>
        <table class=\"ui very basic celled table\">
            <tbody>
            <tr class=\"pricing-header\">
                <td class=\"gray text\"><strong>";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.channels"), "html", null, true);
        echo "</strong></td>
                <td class=\"gray text\"><strong>";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.price"), "html", null, true);
        echo "</strong></td>
                <td class=\"gray text\"><strong>";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.original_price"), "html", null, true);
        echo "</strong></td>
                <td class=\"gray text\"><strong>";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.lowest_price_before_discount"), "html", null, true);
        echo "</strong></td>
                <td class=\"gray text\"><strong>";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.discounted_by"), "html", null, true);
        echo "</strong></td>
                <td class=\"gray text\"><strong>";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.history"), "html", null, true);
        echo "</strong></td>
            </tr>
            ";
        // line 18
        $context["currencies"] = $this->extensions['Sylius\Bundle\AdminBundle\Twig\ChannelsCurrenciesExtension']->getAllCurrencies();
        // line 19
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 19, $this->source); })()), "channelPricings", [], "any", false, false, false, 19));
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
        foreach ($context['_seq'] as $context["_key"] => $context["channelPricing"]) {
            // line 20
            echo "                <tr class=\"pricing\">
                    <td class=\"five wide gray text\">
                        <strong>";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Sylius\Bundle\AdminBundle\Twig\ChannelNameExtension']->getChannelNameByCode(twig_get_attribute($this->env, $this->source, $context["channelPricing"], "channelCode", [], "any", false, false, false, 22)), "html", null, true);
            echo "</strong>
                    </td>
                    <td>";
            // line 24
            echo twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, $context["channelPricing"], "price", [], "any", false, false, false, 24), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 24, $this->source); })()), "channels", [], "any", false, false, false, 24), "first", [], "any", false, false, false, 24), "baseCurrency", [], "any", false, false, false, 24)], 24, $context, $this->getSourceContext());
            echo "</td>
                    <td>";
            // line 25
            echo ((twig_get_attribute($this->env, $this->source, $context["channelPricing"], "originalPrice", [], "any", false, false, false, 25)) ? (twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, $context["channelPricing"], "originalPrice", [], "any", false, false, false, 25), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 25, $this->source); })()), "channels", [], "any", false, false, false, 25), "first", [], "any", false, false, false, 25), "baseCurrency", [], "any", false, false, false, 25)], 25, $context, $this->getSourceContext())) : ("-"));
            echo "</td>
                    <td>";
            // line 26
            echo ((twig_get_attribute($this->env, $this->source, $context["channelPricing"], "lowestPriceBeforeDiscount", [], "any", false, false, false, 26)) ? (twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, $context["channelPricing"], "lowestPriceBeforeDiscount", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 26, $this->source); })()), "channels", [], "any", false, false, false, 26), "first", [], "any", false, false, false, 26), "baseCurrency", [], "any", false, false, false, 26)], 26, $context, $this->getSourceContext())) : ("-"));
            echo "</td>
                    ";
            // line 27
            $this->loadTemplate("@SyliusAdmin/Product/Show/_appliedPromotions.html.twig", "@SyliusAdmin/Product/Show/_variantContentPricing.html.twig", 27)->display($context);
            // line 28
            echo "                    <td>
                        <a class=\"ui blue labeled icon button\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_channel_pricing_log_entry_index", ["productId" => twig_get_attribute($this->env, $this->source,             // line 30
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30), "variantId" => twig_get_attribute($this->env, $this->source,             // line 31
(isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31), "channelPricingId" => twig_get_attribute($this->env, $this->source,             // line 32
$context["channelPricing"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            // line 33
            echo "\">
                            <i class=\"icon search\"></i>
                            ";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.show"), "html", null, true);
            echo "
                        </a>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channelPricing'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </tbody>
        </table>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Show/_variantContentPricing.html.twig";
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
        return array (  158 => 40,  139 => 35,  135 => 33,  133 => 32,  132 => 31,  131 => 30,  130 => 29,  127 => 28,  125 => 27,  121 => 26,  117 => 25,  113 => 24,  108 => 22,  104 => 20,  86 => 19,  84 => 18,  79 => 16,  75 => 15,  71 => 14,  67 => 13,  63 => 12,  59 => 11,  51 => 6,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"@SyliusAdmin/Common/Macro/money.html.twig\" as money %}

<div class=\"column\">
    <div class=\"ui segment\">
        <div class=\"ui small header\">
            {{ 'sylius.ui.pricing'|trans }}
        </div>
        <table class=\"ui very basic celled table\">
            <tbody>
            <tr class=\"pricing-header\">
                <td class=\"gray text\"><strong>{{ 'sylius.ui.channels'|trans }}</strong></td>
                <td class=\"gray text\"><strong>{{ 'sylius.ui.price'|trans }}</strong></td>
                <td class=\"gray text\"><strong>{{ 'sylius.ui.original_price'|trans }}</strong></td>
                <td class=\"gray text\"><strong>{{ 'sylius.ui.lowest_price_before_discount'|trans }}</strong></td>
                <td class=\"gray text\"><strong>{{ 'sylius.ui.discounted_by'|trans }}</strong></td>
                <td class=\"gray text\"><strong>{{ 'sylius.ui.history'|trans }}</strong></td>
            </tr>
            {% set currencies = sylius_channels_currencies() %}
            {% for channelPricing in variant.channelPricings %}
                <tr class=\"pricing\">
                    <td class=\"five wide gray text\">
                        <strong>{{ channelPricing.channelCode|sylius_channel_name }}</strong>
                    </td>
                    <td>{{ money.format(channelPricing.price, product.channels.first.baseCurrency) }}</td>
                    <td>{{ channelPricing.originalPrice ? money.format(channelPricing.originalPrice, product.channels.first.baseCurrency) : '-' }}</td>
                    <td>{{ channelPricing.lowestPriceBeforeDiscount ? money.format(channelPricing.lowestPriceBeforeDiscount, product.channels.first.baseCurrency) : '-' }}</td>
                    {% include '@SyliusAdmin/Product/Show/_appliedPromotions.html.twig' %}
                    <td>
                        <a class=\"ui blue labeled icon button\" href=\"{{ path('sylius_admin_channel_pricing_log_entry_index', {
                            'productId': product.id,
                            'variantId': variant.id,
                            'channelPricingId': channelPricing.id
                        }) }}\">
                            <i class=\"icon search\"></i>
                            {{ 'sylius.ui.show'|trans }}
                        </a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
</div>
", "@SyliusAdmin/Product/Show/_variantContentPricing.html.twig", "/var/www/html/Sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_variantContentPricing.html.twig");
    }
}
