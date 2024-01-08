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

/* @SyliusShop/Order/thankYou.html.twig */
class __TwigTemplate_25d008e38951d3b0ee7efa4c1d8aadf9ea78727ec96ed6775827b1ffc203a95c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Order/thankYou.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Order/thankYou.html.twig"));

        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "@SyliusShop/Order/thankYou.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.thank_you"), "html", null, true);
        echo " | ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"ui hidden divider\"></div>
    <div class=\"ui grid\">
        <div class=\"center aligned sixteen wide column\">
            <h1 class=\"ui icon header\">
                ";
        // line 10
        $context["lastPayment"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 10, $this->source); })()), "payments", [], "any", false, false, false, 10), "last", [], "method", false, false, false, 10);
        // line 11
        echo "                <i class=\"circular rocket icon\"></i>
                <div class=\"content\" id=\"sylius-thank-you\" ";
        // line 12
        echo $this->env->getFunction('sylius_test_html_attribute')->getCallable()("thank-you");
        echo ">
                    ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.thank_you"), "html", null, true);
        echo "
                    <div class=\"sub header\">";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.placed_an_order"), "html", null, true);
        echo "</div>
                </div>
            </h1>

            ";
        // line 18
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.order.thank_you.after_message", ["order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 18, $this->source); })())]);
        echo "

            ";
        // line 20
        if (((isset($context["lastPayment"]) || array_key_exists("lastPayment", $context) ? $context["lastPayment"] : (function () { throw new RuntimeError('Variable "lastPayment" does not exist.', 20, $this->source); })()) != false)) {
            // line 21
            echo "                ";
            if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lastPayment"]) || array_key_exists("lastPayment", $context) ? $context["lastPayment"] : (function () { throw new RuntimeError('Variable "lastPayment" does not exist.', 21, $this->source); })()), "method", [], "any", false, false, false, 21), "instructions", [], "any", false, false, false, 21))) {
                // line 22
                echo "                    <div id=\"sylius-payment-method-instructions\" class=\"ui segment\" ";
                echo $this->env->getFunction('sylius_test_html_attribute')->getCallable()("payment-method-instructions");
                echo ">
                        ";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lastPayment"]) || array_key_exists("lastPayment", $context) ? $context["lastPayment"] : (function () { throw new RuntimeError('Variable "lastPayment" does not exist.', 23, $this->source); })()), "method", [], "any", false, false, false, 23), "instructions", [], "any", false, false, false, 23), "html", null, true);
                echo "
                    </div>
                ";
            }
            // line 26
            echo "                <div class=\"ui hidden divider\"></div>
            ";
        }
        // line 28
        echo "
            ";
        // line 29
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 29, $this->source); })()), "customer", [], "any", false, false, false, 29), "user", [], "any", false, false, false, 29))) {
            // line 30
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_order_show", ["number" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 30, $this->source); })()), "number", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" id=\"sylius-show-order-in-account\" class=\"ui large blue button\" ";
            echo $this->env->getFunction('sylius_test_html_attribute')->getCallable()("show-order-in-account");
            echo ">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.view_order"), "html", null, true);
            echo "</a>
            ";
        } else {
            // line 32
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_order_show", ["tokenValue" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 32, $this->source); })()), "tokenValue", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" id=\"payment-method-page\" class=\"ui large blue button\" ";
            echo $this->env->getFunction('sylius_test_html_attribute')->getCallable()("payment-method-page");
            echo ">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.change_payment_method"), "html", null, true);
            echo "</a>
                <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_register_after_checkout", ["tokenValue" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 33, $this->source); })()), "tokenValue", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\" class=\"ui large green button\" ";
            echo $this->env->getFunction('sylius_test_html_attribute')->getCallable()("create-an-account");
            echo ">
                    <i class=\"signup icon\"></i>
                    ";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.create_an_account"), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 38
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SyliusShop/Order/thankYou.html.twig";
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
        return array (  178 => 38,  172 => 35,  165 => 33,  156 => 32,  146 => 30,  144 => 29,  141 => 28,  137 => 26,  131 => 23,  126 => 22,  123 => 21,  121 => 20,  116 => 18,  109 => 14,  105 => 13,  101 => 12,  98 => 11,  96 => 10,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@SyliusShop/layout.html.twig' %}

{% block title %}{{ 'sylius.ui.thank_you'|trans }} | {{ parent() }}{% endblock %}

{% block content %}
    <div class=\"ui hidden divider\"></div>
    <div class=\"ui grid\">
        <div class=\"center aligned sixteen wide column\">
            <h1 class=\"ui icon header\">
                {% set lastPayment = order.payments.last() %}
                <i class=\"circular rocket icon\"></i>
                <div class=\"content\" id=\"sylius-thank-you\" {{ sylius_test_html_attribute('thank-you') }}>
                    {{ 'sylius.ui.thank_you'|trans }}
                    <div class=\"sub header\">{{ 'sylius.ui.placed_an_order'|trans }}</div>
                </div>
            </h1>

            {{ sylius_template_event('sylius.shop.order.thank_you.after_message', {'order': order}) }}

            {% if lastPayment != false %}
                {%  if lastPayment.method.instructions is not null %}
                    <div id=\"sylius-payment-method-instructions\" class=\"ui segment\" {{ sylius_test_html_attribute('payment-method-instructions') }}>
                        {{ lastPayment.method.instructions }}
                    </div>
                {% endif %}
                <div class=\"ui hidden divider\"></div>
            {% endif %}

            {% if order.customer.user is not null %}
                <a href=\"{{ path('sylius_shop_account_order_show', {'number': order.number}) }}\" id=\"sylius-show-order-in-account\" class=\"ui large blue button\" {{ sylius_test_html_attribute('show-order-in-account') }}>{{ 'sylius.ui.view_order'|trans }}</a>
            {% else %}
                <a href=\"{{ path('sylius_shop_order_show', {'tokenValue': order.tokenValue}) }}\" id=\"payment-method-page\" class=\"ui large blue button\" {{ sylius_test_html_attribute('payment-method-page') }}>{{ 'sylius.ui.change_payment_method'|trans }}</a>
                <a href=\"{{ path('sylius_shop_register_after_checkout', {'tokenValue': order.tokenValue}) }}\" class=\"ui large green button\" {{ sylius_test_html_attribute('create-an-account') }}>
                    <i class=\"signup icon\"></i>
                    {{ 'sylius.ui.create_an_account'|trans }}
                </a>
            {% endif %}
        </div>
    </div>
{% endblock %}
", "@SyliusShop/Order/thankYou.html.twig", "/var/www/html/Sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Order/thankYou.html.twig");
    }
}
