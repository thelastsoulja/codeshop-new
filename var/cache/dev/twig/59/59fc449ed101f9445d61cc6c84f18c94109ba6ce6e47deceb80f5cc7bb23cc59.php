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

/* @SyliusAdmin/Product/_showInShopButton.html.twig */
class __TwigTemplate_170f548a4666182e4d4e0dbf19b398a492ca6ad01c80311d1ef0b8d23f6d1162 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/_showInShopButton.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/_showInShopButton.html.twig"));

        // line 1
        $context["enabledChannels"] = twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 1, $this->source); })()), "channels", [], "any", false, false, false, 1), function ($__channel__) use ($context, $macros) { $context["channel"] = $__channel__; return (twig_get_attribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 1, $this->source); })()), "enabled", [], "any", false, false, false, 1) == true); });
        // line 2
        echo "
";
        // line 3
        if ($this->extensions['Sylius\Bundle\CoreBundle\Twig\BundleLoadedCheckerExtension']->isBundleLoaded("SyliusShopBundle")) {
            // line 4
            echo "    ";
            if (( !twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 4, $this->source); })()), "enabled", [], "any", false, false, false, 4) || (twig_length_filter($this->env, (isset($context["enabledChannels"]) || array_key_exists("enabledChannels", $context) ? $context["enabledChannels"] : (function () { throw new RuntimeError('Variable "enabledChannels" does not exist.', 4, $this->source); })())) < 1))) {
                // line 5
                echo "        <a class=\"ui labeled icon button disabled\" href=\"#\" ";
                echo $this->env->getFunction('sylius_test_html_attribute')->getCallable()("show-product-in-shop-page");
                echo ">
            <i class=\"angle right icon\"></i>
            ";
                // line 7
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.show_product_in_shop_page"), "html", null, true);
                echo "
        </a>
    ";
            } elseif ((twig_length_filter($this->env,             // line 9
(isset($context["enabledChannels"]) || array_key_exists("enabledChannels", $context) ? $context["enabledChannels"] : (function () { throw new RuntimeError('Variable "enabledChannels" does not exist.', 9, $this->source); })())) > 1)) {
                // line 10
                echo "        <div class=\"ui floating dropdown labeled icon button\" ";
                echo $this->env->getFunction('sylius_test_html_attribute')->getCallable()("show-product-in-shop-page");
                echo ">
            <i class=\"share alternate icon\"></i>
            <span class=\"text\">
                ";
                // line 13
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.show_product_in_shop_page"), "html", null, true);
                echo "
            </span>
            <div class=\"menu\">
                <div class=\"scrolling menu\">
                    ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["enabledChannels"]) || array_key_exists("enabledChannels", $context) ? $context["enabledChannels"] : (function () { throw new RuntimeError('Variable "enabledChannels" does not exist.', 17, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                    // line 18
                    echo "                        ";
                    $context["product_translation"] = $this->env->getFunction('sylius_product_translation')->getCallable()((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 18, $this->source); })()), $context["channel"]);
                    // line 19
                    echo "                        ";
                    if ( !(null === (isset($context["product_translation"]) || array_key_exists("product_translation", $context) ? $context["product_translation"] : (function () { throw new RuntimeError('Variable "product_translation" does not exist.', 19, $this->source); })()))) {
                        // line 20
                        echo "                            ";
                        $context["url"] = $this->extensions['Sylius\Bundle\CoreBundle\Twig\ChannelUrlExtension']->generateChannelUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["product_translation"]) || array_key_exists("product_translation", $context) ? $context["product_translation"] : (function () { throw new RuntimeError('Variable "product_translation" does not exist.', 20, $this->source); })()), "slug", [], "any", false, false, false, 20), "_locale" => twig_get_attribute($this->env, $this->source, (isset($context["product_translation"]) || array_key_exists("product_translation", $context) ? $context["product_translation"] : (function () { throw new RuntimeError('Variable "product_translation" does not exist.', 20, $this->source); })()), "locale", [], "any", false, false, false, 20)]), $context["channel"]);
                        // line 21
                        echo "                        ";
                    }
                    // line 22
                    echo "
                        <a
                            href=\"";
                    // line 24
                    echo (( !array_key_exists("url", $context)) ? ("#") : ((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 24, $this->source); })())));
                    echo "\"
                            class=\"item ";
                    // line 25
                    if ( !array_key_exists("url", $context)) {
                        echo "disabled";
                    }
                    echo "\"
                            target=\"_blank\"
                        >
                            <i class=\"angle right icon\"></i>
                            ";
                    // line 29
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.show_in"), "html", null, true);
                    echo "
                            ";
                    // line 30
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "name", [], "any", false, false, false, 30), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "code", [], "any", false, false, false, 30), "html", null, true);
                    echo ")
                        </a>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "                </div>
            </div>
        </div>
    ";
            } else {
                // line 37
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["enabledChannels"]) || array_key_exists("enabledChannels", $context) ? $context["enabledChannels"] : (function () { throw new RuntimeError('Variable "enabledChannels" does not exist.', 37, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                    // line 38
                    echo "            ";
                    $context["product_translation"] = $this->env->getFunction('sylius_product_translation')->getCallable()((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 38, $this->source); })()), $context["channel"]);
                    // line 39
                    echo "            ";
                    if ( !(null === (isset($context["product_translation"]) || array_key_exists("product_translation", $context) ? $context["product_translation"] : (function () { throw new RuntimeError('Variable "product_translation" does not exist.', 39, $this->source); })()))) {
                        // line 40
                        echo "                ";
                        $context["url"] = $this->extensions['Sylius\Bundle\CoreBundle\Twig\ChannelUrlExtension']->generateChannelUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["product_translation"]) || array_key_exists("product_translation", $context) ? $context["product_translation"] : (function () { throw new RuntimeError('Variable "product_translation" does not exist.', 40, $this->source); })()), "slug", [], "any", false, false, false, 40), "_locale" => twig_get_attribute($this->env, $this->source, (isset($context["product_translation"]) || array_key_exists("product_translation", $context) ? $context["product_translation"] : (function () { throw new RuntimeError('Variable "product_translation" does not exist.', 40, $this->source); })()), "locale", [], "any", false, false, false, 40)]), $context["channel"]);
                        // line 41
                        echo "            ";
                    }
                    // line 42
                    echo "
            <a
                class=\"ui labeled icon button ";
                    // line 44
                    if ( !array_key_exists("url", $context)) {
                        echo "disabled";
                    }
                    echo "\"
                href=\"";
                    // line 45
                    echo (( !array_key_exists("url", $context)) ? ("#") : ((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 45, $this->source); })())));
                    echo "\"
                target=\"_blank\"
                ";
                    // line 47
                    echo $this->env->getFunction('sylius_test_html_attribute')->getCallable()("show-product-in-shop-page");
                    echo "
            >
                <i class=\"angle right icon\"></i>
                ";
                    // line 50
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.show_product_in_shop_page"), "html", null, true);
                    echo "
            </a>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "    ";
            }
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/_showInShopButton.html.twig";
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
        return array (  181 => 53,  172 => 50,  166 => 47,  161 => 45,  155 => 44,  151 => 42,  148 => 41,  145 => 40,  142 => 39,  139 => 38,  134 => 37,  128 => 33,  117 => 30,  113 => 29,  104 => 25,  100 => 24,  96 => 22,  93 => 21,  90 => 20,  87 => 19,  84 => 18,  80 => 17,  73 => 13,  66 => 10,  64 => 9,  59 => 7,  53 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set enabledChannels = product.channels|filter(channel => channel.enabled == true) %}

{% if sylius_bundle_loaded_checker('SyliusShopBundle') %}
    {% if not product.enabled or enabledChannels|length < 1 %}
        <a class=\"ui labeled icon button disabled\" href=\"#\" {{ sylius_test_html_attribute('show-product-in-shop-page') }}>
            <i class=\"angle right icon\"></i>
            {{ 'sylius.ui.show_product_in_shop_page'|trans }}
        </a>
    {% elseif enabledChannels|length > 1 %}
        <div class=\"ui floating dropdown labeled icon button\" {{ sylius_test_html_attribute('show-product-in-shop-page') }}>
            <i class=\"share alternate icon\"></i>
            <span class=\"text\">
                {{ 'sylius.ui.show_product_in_shop_page'|trans }}
            </span>
            <div class=\"menu\">
                <div class=\"scrolling menu\">
                    {% for channel in enabledChannels %}
                        {% set product_translation = sylius_product_translation(product, channel) %}
                        {% if product_translation is not null %}
                            {% set url = sylius_channel_url(path('sylius_shop_product_show', {'slug': product_translation.slug, '_locale': product_translation.locale}), channel) %}
                        {% endif %}

                        <a
                            href=\"{{ (url is not defined) ? '#' : url|raw }}\"
                            class=\"item {% if url is not defined %}disabled{% endif %}\"
                            target=\"_blank\"
                        >
                            <i class=\"angle right icon\"></i>
                            {{ 'sylius.ui.show_in'|trans }}
                            {{ channel.name }} ({{ channel.code }})
                        </a>
                    {% endfor %}
                </div>
            </div>
        </div>
    {% else %}
        {% for channel in enabledChannels %}
            {% set product_translation = sylius_product_translation(product, channel) %}
            {% if product_translation is not null %}
                {% set url = sylius_channel_url(path('sylius_shop_product_show', {'slug': product_translation.slug, '_locale': product_translation.locale}), channel) %}
            {% endif %}

            <a
                class=\"ui labeled icon button {% if url is not defined %}disabled{% endif %}\"
                href=\"{{ (url is not defined) ? '#' : url|raw }}\"
                target=\"_blank\"
                {{ sylius_test_html_attribute('show-product-in-shop-page') }}
            >
                <i class=\"angle right icon\"></i>
                {{ 'sylius.ui.show_product_in_shop_page'|trans }}
            </a>
        {% endfor %}
    {% endif %}
{% endif %}
", "@SyliusAdmin/Product/_showInShopButton.html.twig", "/var/www/html/Sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/_showInShopButton.html.twig");
    }
}
