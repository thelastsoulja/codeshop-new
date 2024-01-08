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

/* @SyliusShop/Product/Show/_priceWidget.html.twig */
class __TwigTemplate_0a0d8eeae299dfe416a7714ae205d5dbe43b90b41d485bb9dc868ee469309486 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_priceWidget.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_priceWidget.html.twig"));

        // line 1
        $context["variant"] = $this->env->getFilter('sylius_resolve_variant')->getCallable()((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 1, $this->source); })()));
        // line 2
        echo "
";
        // line 3
        if ( !(null === (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 3, $this->source); })()))) {
            // line 4
            echo "    ";
            $context["appliedPromotions"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 4, $this->source); })()), "getChannelPricingForChannel", [twig_get_attribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 4, $this->source); })()), "channel", [], "any", false, false, false, 4)], "method", false, false, false, 4), "getAppliedPromotions", [], "method", false, false, false, 4);
            // line 5
            echo "    ";
            $this->loadTemplate("@SyliusShop/Product/Show/_catalogPromotionLabels.html.twig", "@SyliusShop/Product/Show/_priceWidget.html.twig", 5)->display(twig_array_merge($context, ["appliedPromotions" => (isset($context["appliedPromotions"]) || array_key_exists("appliedPromotions", $context) ? $context["appliedPromotions"] : (function () { throw new RuntimeError('Variable "appliedPromotions" does not exist.', 5, $this->source); })()), "withDescription" => true]));
        }
        // line 7
        echo "
<div class=\"ui stackable grid\" ";
        // line 8
        echo $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-price-content");
        echo ">
    <div class=\"seven wide column\">
        ";
        // line 10
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 10, $this->source); })()), "enabledVariants", [], "any", false, false, false, 10), "empty", [], "method", false, false, false, 10)) {
            // line 11
            echo "            ";
            $this->loadTemplate("@SyliusShop/Product/Show/_price.html.twig", "@SyliusShop/Product/Show/_priceWidget.html.twig", 11)->display($context);
            // line 12
            echo "        ";
        }
        // line 13
        echo "    </div>
    <div class=\"nine wide right aligned column\">
        <span class=\"ui sub header\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "code", [], "any", false, false, false, 15), "html", null, true);
        echo "</span>
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
        return "@SyliusShop/Product/Show/_priceWidget.html.twig";
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
        return array (  77 => 15,  73 => 13,  70 => 12,  67 => 11,  65 => 10,  60 => 8,  57 => 7,  53 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set variant = product|sylius_resolve_variant %}

{% if variant is not null %}
    {% set appliedPromotions = variant.getChannelPricingForChannel(sylius.channel).getAppliedPromotions() %}
    {% include '@SyliusShop/Product/Show/_catalogPromotionLabels.html.twig' with {'appliedPromotions': appliedPromotions, 'withDescription': true} %}
{% endif %}

<div class=\"ui stackable grid\" {{ sylius_test_html_attribute('product-price-content') }}>
    <div class=\"seven wide column\">
        {% if not product.enabledVariants.empty() %}
            {% include '@SyliusShop/Product/Show/_price.html.twig' %}
        {% endif %}
    </div>
    <div class=\"nine wide right aligned column\">
        <span class=\"ui sub header\">{{ product.code }}</span>
    </div>
</div>
", "@SyliusShop/Product/Show/_priceWidget.html.twig", "/var/www/html/Sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_priceWidget.html.twig");
    }
}
