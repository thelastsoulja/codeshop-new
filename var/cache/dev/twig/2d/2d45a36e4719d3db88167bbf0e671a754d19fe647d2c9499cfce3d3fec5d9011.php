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

/* @SyliusAdmin/ChannelPricingLogEntry/Grid/Field/originalPrice.html.twig */
class __TwigTemplate_1a1eca5c900bb10d585815ecb1e9161d4cd8fe0942539e588be9b1d95740f939 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/ChannelPricingLogEntry/Grid/Field/originalPrice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/ChannelPricingLogEntry/Grid/Field/originalPrice.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "@SyliusAdmin/ChannelPricingLogEntry/Grid/Field/originalPrice.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["currencies"] = $this->extensions['Sylius\Bundle\AdminBundle\Twig\ChannelsCurrenciesExtension']->getAllCurrencies();
        // line 4
        $context["channel_code"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 4, $this->source); })()), "channelPricing", [], "any", false, false, false, 4), "channelCode", [], "any", false, false, false, 4);
        // line 5
        echo "
";
        // line 6
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 6, $this->source); })()), "originalPrice", [], "any", false, false, false, 6)) {
            // line 7
            echo "    ";
            echo twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 7, $this->source); })()), "originalPrice", [], "any", false, false, false, 7), twig_get_attribute($this->env, $this->source, (isset($context["currencies"]) || array_key_exists("currencies", $context) ? $context["currencies"] : (function () { throw new RuntimeError('Variable "currencies" does not exist.', 7, $this->source); })()), (isset($context["channel_code"]) || array_key_exists("channel_code", $context) ? $context["channel_code"] : (function () { throw new RuntimeError('Variable "channel_code" does not exist.', 7, $this->source); })()), [], "array", false, false, false, 7)], 7, $context, $this->getSourceContext());
            echo "
";
        } else {
            // line 9
            echo "    <span class=\"gray text\">-</span>
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
        return "@SyliusAdmin/ChannelPricingLogEntry/Grid/Field/originalPrice.html.twig";
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
        return array (  63 => 9,  57 => 7,  55 => 6,  52 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"@SyliusAdmin/Common/Macro/money.html.twig\" as money %}

{% set currencies = sylius_channels_currencies() %}
{% set channel_code = data.channelPricing.channelCode %}

{% if data.originalPrice %}
    {{ money.format(data.originalPrice, currencies[channel_code]) }}
{% else %}
    <span class=\"gray text\">-</span>
{% endif %}
", "@SyliusAdmin/ChannelPricingLogEntry/Grid/Field/originalPrice.html.twig", "/var/www/html/Sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ChannelPricingLogEntry/Grid/Field/originalPrice.html.twig");
    }
}
