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

/* @SyliusAdmin/Product/Show/_pricing.html.twig */
class __TwigTemplate_dc437836e74b8fce58d552b6f0ae4aa8e41365ff55edd83fc222583aa91022d9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_pricing.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_pricing.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "@SyliusAdmin/Product/Show/_pricing.html.twig", 1)->unwrap();
        // line 2
        echo "<div id=\"pricing\">
    <h4 class=\"ui top attached large header\">";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.pricing"), "html", null, true);
        echo "</h4>
    <div class=\"ui attached segment\">
        <table id=\"pricing\" class=\"ui very basic celled table\">
            <thead>
                <tr>
                    <th><strong class=\"gray text\">";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.channels"), "html", null, true);
        echo "</strong></th>
                    <th><strong class=\"gray text\">";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.price"), "html", null, true);
        echo "</strong></th>
                    <th><strong class=\"gray text\">";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.original_price"), "html", null, true);
        echo "</strong></th>
                    <th><strong class=\"gray text\">";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.lowest_price_before_discount"), "html", null, true);
        echo "</strong></th>
                    <th><strong class=\"gray text\">";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.discounted_by"), "html", null, true);
        echo "</strong></th>
                    <th><strong class=\"gray text\">";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.history"), "html", null, true);
        echo "</strong></th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 17, $this->source); })()), "variants", [], "any", false, false, false, 17), "first", [], "any", false, false, false, 17), "channelPricings", [], "any", false, false, false, 17));
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
            // line 18
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 18, $this->source); })()), "channels", [], "any", false, false, false, 18), "first", [], "any", false, false, false, 18) != false)) {
                // line 19
                echo "                    <tr>
                        <td class=\"five wide gray text\">
                            <strong>";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Sylius\Bundle\AdminBundle\Twig\ChannelNameExtension']->getChannelNameByCode(twig_get_attribute($this->env, $this->source, $context["channelPricing"], "channelCode", [], "any", false, false, false, 21)), "html", null, true);
                echo "</strong>
                        </td>
                        <td>";
                // line 23
                echo twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, $context["channelPricing"], "price", [], "any", false, false, false, 23), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 23, $this->source); })()), "channels", [], "any", false, false, false, 23), "first", [], "any", false, false, false, 23), "baseCurrency", [], "any", false, false, false, 23)], 23, $context, $this->getSourceContext());
                echo "</td>
                        <td>";
                // line 24
                echo ((twig_get_attribute($this->env, $this->source, $context["channelPricing"], "originalPrice", [], "any", false, false, false, 24)) ? (twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, $context["channelPricing"], "originalPrice", [], "any", false, false, false, 24), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 24, $this->source); })()), "channels", [], "any", false, false, false, 24), "first", [], "any", false, false, false, 24), "baseCurrency", [], "any", false, false, false, 24)], 24, $context, $this->getSourceContext())) : ("-"));
                echo "</td>
                        <td>";
                // line 25
                echo ((twig_get_attribute($this->env, $this->source, $context["channelPricing"], "lowestPriceBeforeDiscount", [], "any", false, false, false, 25)) ? (twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, $context["channelPricing"], "lowestPriceBeforeDiscount", [], "any", false, false, false, 25), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 25, $this->source); })()), "channels", [], "any", false, false, false, 25), "first", [], "any", false, false, false, 25), "baseCurrency", [], "any", false, false, false, 25)], 25, $context, $this->getSourceContext())) : ("-"));
                echo "</td>
                        ";
                // line 26
                $this->loadTemplate("@SyliusAdmin/Product/Show/_appliedPromotions.html.twig", "@SyliusAdmin/Product/Show/_pricing.html.twig", 26)->display($context);
                // line 27
                echo "                        <td>
                            <a class=\"ui blue labeled icon button\" href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_channel_pricing_log_entry_index", ["productId" => twig_get_attribute($this->env, $this->source,                 // line 29
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29), "variantId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 30
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 30, $this->source); })()), "variants", [], "any", false, false, false, 30), "first", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30), "channelPricingId" => twig_get_attribute($this->env, $this->source,                 // line 31
$context["channelPricing"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                // line 32
                echo "\">
                                <i class=\"icon search\"></i>
                                ";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.show"), "html", null, true);
                echo "
                            </a>
                        </td>
                    </tr>
                ";
            }
            // line 39
            echo "            ";
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
        return "@SyliusAdmin/Product/Show/_pricing.html.twig";
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
        return array (  160 => 40,  146 => 39,  138 => 34,  134 => 32,  132 => 31,  131 => 30,  130 => 29,  129 => 28,  126 => 27,  124 => 26,  120 => 25,  116 => 24,  112 => 23,  107 => 21,  103 => 19,  100 => 18,  83 => 17,  76 => 13,  72 => 12,  68 => 11,  64 => 10,  60 => 9,  56 => 8,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"@SyliusAdmin/Common/Macro/money.html.twig\" as money %}
<div id=\"pricing\">
    <h4 class=\"ui top attached large header\">{{ 'sylius.ui.pricing'|trans }}</h4>
    <div class=\"ui attached segment\">
        <table id=\"pricing\" class=\"ui very basic celled table\">
            <thead>
                <tr>
                    <th><strong class=\"gray text\">{{ 'sylius.ui.channels'|trans }}</strong></th>
                    <th><strong class=\"gray text\">{{ 'sylius.ui.price'|trans }}</strong></th>
                    <th><strong class=\"gray text\">{{ 'sylius.ui.original_price'|trans }}</strong></th>
                    <th><strong class=\"gray text\">{{ 'sylius.ui.lowest_price_before_discount'|trans }}</strong></th>
                    <th><strong class=\"gray text\">{{ 'sylius.ui.discounted_by'|trans }}</strong></th>
                    <th><strong class=\"gray text\">{{ 'sylius.ui.history'|trans }}</strong></th>
                </tr>
            </thead>
            <tbody>
            {% for channelPricing in product.variants.first.channelPricings %}
                {% if product.channels.first != false %}
                    <tr>
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
                                'variantId': product.variants.first.id,
                                'channelPricingId': channelPricing.id
                            }) }}\">
                                <i class=\"icon search\"></i>
                                {{ 'sylius.ui.show'|trans }}
                            </a>
                        </td>
                    </tr>
                {% endif %}
            {% endfor %}
            </tbody>
        </table>
    </div>
</div>
", "@SyliusAdmin/Product/Show/_pricing.html.twig", "/var/www/html/Sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_pricing.html.twig");
    }
}
