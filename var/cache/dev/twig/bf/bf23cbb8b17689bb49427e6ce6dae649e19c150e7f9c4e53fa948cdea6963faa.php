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

/* @SyliusShop/Product/Box/_content.html.twig */
class __TwigTemplate_15e7e12335146042bca9e538426c4add48f84e5e2031367190f35a14aebed6c1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Box/_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Box/_content.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Product/Box/_content.html.twig", 1)->unwrap();
        // line 2
        echo "
<div class=\"ui fluid card\" ";
        // line 3
        echo $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product");
        echo ">
    <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 4, $this->source); })()), "slug", [], "any", false, false, false, 4), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 4, $this->source); })()), "translation", [], "any", false, false, false, 4), "locale", [], "any", false, false, false, 4)]), "html", null, true);
        echo "\" class=\"blurring dimmable image\">
        <div class=\"ui dimmer\">
            <div class=\"content\">
                <div class=\"center\">
                    <div class=\"ui inverted button\">";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.view_more"), "html", null, true);
        echo "</div>
                </div>
            </div>
        </div>
        ";
        // line 12
        $this->loadTemplate("@SyliusShop/Product/_mainImage.html.twig", "@SyliusShop/Product/Box/_content.html.twig", 12)->display(twig_array_merge($context, ["product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })())]));
        // line 13
        echo "    </a>
    <div class=\"content\" ";
        // line 14
        echo $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-content");
        echo ">
        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "slug", [], "any", false, false, false, 15), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "translation", [], "any", false, false, false, 15), "locale", [], "any", false, false, false, 15)]), "html", null, true);
        echo "\" class=\"header sylius-product-name\" ";
        echo $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-name", twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15));
        echo ">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
        echo "</a>

        ";
        // line 17
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 17, $this->source); })()), "enabledVariants", [], "any", false, false, false, 17), "empty", [], "method", false, false, false, 17)) {
            // line 18
            echo "            ";
            $context["variant"] = $this->env->getFilter('sylius_resolve_variant')->getCallable()((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 18, $this->source); })()));
            // line 19
            echo "            ";
            $context["price"] = twig_call_macro($macros["money"], "macro_calculatePrice", [(isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 19, $this->source); })())], 19, $context, $this->getSourceContext());
            // line 20
            echo "            ";
            $context["originalPrice"] = twig_call_macro($macros["money"], "macro_calculateOriginalPrice", [(isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 20, $this->source); })())], 20, $context, $this->getSourceContext());
            // line 21
            echo "            ";
            $context["appliedPromotions"] = twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 21, $this->source); })()), "getAppliedPromotionsForChannel", [twig_get_attribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 21, $this->source); })()), "channel", [], "any", false, false, false, 21)], "method", false, false, false, 21);
            // line 22
            echo "
            ";
            // line 23
            $this->loadTemplate("@SyliusShop/Product/Show/_catalogPromotionLabels.html.twig", "@SyliusShop/Product/Box/_content.html.twig", 23)->display(twig_array_merge($context, ["appliedPromotions" => (isset($context["appliedPromotions"]) || array_key_exists("appliedPromotions", $context) ? $context["appliedPromotions"] : (function () { throw new RuntimeError('Variable "appliedPromotions" does not exist.', 23, $this->source); })()), "withDescription" => false]));
            // line 24
            echo "
            ";
            // line 25
            if ($this->env->getFilter('sylius_has_discount')->getCallable()((isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 25, $this->source); })()), ["channel" => twig_get_attribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 25, $this->source); })()), "channel", [], "any", false, false, false, 25)])) {
                // line 26
                echo "            <div class=\"sylius-product-original-price\" ";
                echo $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-original-price");
                echo "><del>";
                echo twig_escape_filter($this->env, (isset($context["originalPrice"]) || array_key_exists("originalPrice", $context) ? $context["originalPrice"] : (function () { throw new RuntimeError('Variable "originalPrice" does not exist.', 26, $this->source); })()), "html", null, true);
                echo "</del></div>
            ";
            }
            // line 28
            echo "            <div class=\"sylius-product-price\" ";
            echo $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-price");
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 28, $this->source); })()), "html", null, true);
            echo "</div>
        ";
        }
        // line 30
        echo "    </div>
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
        return "@SyliusShop/Product/Box/_content.html.twig";
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
        return array (  124 => 30,  116 => 28,  108 => 26,  106 => 25,  103 => 24,  101 => 23,  98 => 22,  95 => 21,  92 => 20,  89 => 19,  86 => 18,  84 => 17,  75 => 15,  71 => 14,  68 => 13,  66 => 12,  59 => 8,  52 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

<div class=\"ui fluid card\" {{ sylius_test_html_attribute('product') }}>
    <a href=\"{{ path('sylius_shop_product_show', {'slug': product.slug, '_locale': product.translation.locale}) }}\" class=\"blurring dimmable image\">
        <div class=\"ui dimmer\">
            <div class=\"content\">
                <div class=\"center\">
                    <div class=\"ui inverted button\">{{ 'sylius.ui.view_more'|trans }}</div>
                </div>
            </div>
        </div>
        {% include '@SyliusShop/Product/_mainImage.html.twig' with {'product': product} %}
    </a>
    <div class=\"content\" {{ sylius_test_html_attribute('product-content') }}>
        <a href=\"{{ path('sylius_shop_product_show', {'slug': product.slug, '_locale': product.translation.locale}) }}\" class=\"header sylius-product-name\" {{ sylius_test_html_attribute('product-name', product.name) }}>{{ product.name }}</a>

        {% if not product.enabledVariants.empty() %}
            {% set variant = product|sylius_resolve_variant %}
            {% set price = money.calculatePrice(variant) %}
            {% set originalPrice = money.calculateOriginalPrice(variant) %}
            {% set appliedPromotions = variant.getAppliedPromotionsForChannel(sylius.channel) %}

            {% include '@SyliusShop/Product/Show/_catalogPromotionLabels.html.twig' with {'appliedPromotions': appliedPromotions, 'withDescription': false} %}

            {% if variant|sylius_has_discount({'channel': sylius.channel}) %}
            <div class=\"sylius-product-original-price\" {{ sylius_test_html_attribute('product-original-price') }}><del>{{ originalPrice }}</del></div>
            {% endif %}
            <div class=\"sylius-product-price\" {{ sylius_test_html_attribute('product-price') }}>{{ price }}</div>
        {% endif %}
    </div>
</div>
", "@SyliusShop/Product/Box/_content.html.twig", "/var/www/html/Sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Box/_content.html.twig");
    }
}
