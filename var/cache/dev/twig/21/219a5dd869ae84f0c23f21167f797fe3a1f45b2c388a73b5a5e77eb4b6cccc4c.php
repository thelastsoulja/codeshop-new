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

/* @SyliusShop/Order/show.html.twig */
class __TwigTemplate_219f295e4e1e38427a5573f14ed1688258d11f0937cd373c37cb73cd02bf486b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Order/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Order/show.html.twig"));

        // line 3
        $macros["messages"] = $this->macros["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "@SyliusShop/Order/show.html.twig", 3)->unwrap();
        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), ["@SyliusShop/Form/theme.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "@SyliusShop/Order/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.summary_of_your_order"), "html", null, true);
        echo " | ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"ui segment\">
        ";
        // line 11
        $this->loadTemplate("@SyliusShop/Order/_summary.html.twig", "@SyliusShop/Order/show.html.twig", 11)->display($context);
        // line 12
        echo "
        ";
        // line 13
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 13, $this->source); })()), "paymentState", [], "any", false, false, false, 13), ["awaiting_payment"])) {
            // line 14
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_order_show", ["tokenValue" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 14, $this->source); })()), "tokenValue", [], "any", false, false, false, 14)]), "attr" => ["class" => "ui loadable form", "novalidate" => "novalidate"]]);
            echo "
            <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

            ";
            // line 17
            $this->loadTemplate("@SyliusShop/Checkout/SelectPayment/_form.html.twig", "@SyliusShop/Order/show.html.twig", 17)->display($context);
            // line 18
            echo "            <div class=\"ui hidden divider\"></div>
            ";
            // line 19
            $context["order_cannot_be_paid"] =  !$this->extensions['Sylius\Bundle\ShopBundle\Twig\OrderPaymentsExtension']->allNewPaymentsCanBePaid((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 19, $this->source); })()));
            // line 20
            echo "            <button type=\"submit\" class=\"ui large blue icon labeled button ";
            if ((isset($context["order_cannot_be_paid"]) || array_key_exists("order_cannot_be_paid", $context) ? $context["order_cannot_be_paid"] : (function () { throw new RuntimeError('Variable "order_cannot_be_paid" does not exist.', 20, $this->source); })())) {
                echo "disabled";
            }
            echo "\" id=\"sylius-pay-link\" ";
            echo $this->env->getFunction('sylius_test_html_attribute')->getCallable()("pay-link");
            echo " ";
            if ((isset($context["order_cannot_be_paid"]) || array_key_exists("order_cannot_be_paid", $context) ? $context["order_cannot_be_paid"] : (function () { throw new RuntimeError('Variable "order_cannot_be_paid" does not exist.', 20, $this->source); })())) {
                echo "disabled";
            }
            echo ">
                <i class=\"check icon\"></i> ";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.pay"), "html", null, true);
            echo "
            </button>

            ";
            // line 24
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "_token", [], "any", false, false, false, 24), 'row');
            echo "
            ";
            // line 25
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_end', ["render_rest" => false]);
            echo "
        ";
        } else {
            // line 27
            echo "            ";
            echo twig_call_macro($macros["messages"], "macro_info", ["sylius.ui.you_can_no_longer_change_payment_method_of_this_order"], 27, $context, $this->getSourceContext());
            echo "
        ";
        }
        // line 29
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SyliusShop/Order/show.html.twig";
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
        return array (  153 => 29,  147 => 27,  142 => 25,  138 => 24,  132 => 21,  119 => 20,  117 => 19,  114 => 18,  112 => 17,  105 => 14,  103 => 13,  100 => 12,  98 => 11,  95 => 10,  85 => 9,  64 => 7,  53 => 1,  51 => 5,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@SyliusShop/layout.html.twig' %}

{% import '@SyliusUi/Macro/messages.html.twig' as messages %}

{% form_theme form '@SyliusShop/Form/theme.html.twig' %}

{% block title %}{{ 'sylius.ui.summary_of_your_order'|trans }} | {{ parent() }}{% endblock %}

{% block content %}
    <div class=\"ui segment\">
        {% include '@SyliusShop/Order/_summary.html.twig' %}

        {% if order.paymentState in ['awaiting_payment'] %}
            {{ form_start(form, {'action': path('sylius_shop_order_show', {'tokenValue': order.tokenValue}), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
            <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

            {% include '@SyliusShop/Checkout/SelectPayment/_form.html.twig' %}
            <div class=\"ui hidden divider\"></div>
            {% set order_cannot_be_paid = not sylius_order_can_be_paid(order) %}
            <button type=\"submit\" class=\"ui large blue icon labeled button {% if order_cannot_be_paid %}disabled{% endif %}\" id=\"sylius-pay-link\" {{ sylius_test_html_attribute('pay-link') }} {% if order_cannot_be_paid %}disabled{% endif %}>
                <i class=\"check icon\"></i> {{ 'sylius.ui.pay'|trans }}
            </button>

            {{ form_row(form._token) }}
            {{ form_end(form, {'render_rest': false}) }}
        {% else %}
            {{ messages.info('sylius.ui.you_can_no_longer_change_payment_method_of_this_order') }}
        {% endif %}
    </div>
{% endblock %}
", "@SyliusShop/Order/show.html.twig", "/var/www/html/Sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Order/show.html.twig");
    }
}
