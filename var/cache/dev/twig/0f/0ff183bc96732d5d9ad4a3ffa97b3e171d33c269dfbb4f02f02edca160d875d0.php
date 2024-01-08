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

/* @SyliusShop/Account/AddressBook/_item.html.twig */
class __TwigTemplate_3abf107d451f89162e403f7d56580899f27cf69391f7a540e922a913c553b01b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Account/AddressBook/_item.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Account/AddressBook/_item.html.twig"));

        // line 1
        $macros["buttons"] = $this->macros["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "@SyliusShop/Account/AddressBook/_item.html.twig", 1)->unwrap();
        // line 2
        echo "
<div class=\"address-card\">
    <div class=\"address-card-content\" ";
        // line 4
        echo $this->env->getFunction('sylius_test_html_attribute')->getCallable()("address", twig_sprintf("%s %s", twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 4, $this->source); })()), "firstName", [], "any", false, false, false, 4), twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 4, $this->source); })()), "lastName", [], "any", false, false, false, 4)));
        echo ">
        <div>
            ";
        // line 6
        $this->loadTemplate("@SyliusShop/Common/_address.html.twig", "@SyliusShop/Account/AddressBook/_item.html.twig", 6)->display(twig_array_merge($context, ["address" => (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 6, $this->source); })())]));
        // line 7
        echo "        </div>
        <div class=\"buttons\">
            <div ";
        // line 9
        echo $this->env->getFunction('sylius_test_html_attribute')->getCallable()("edit-button");
        echo ">";
        echo twig_call_macro($macros["buttons"], "macro_edit", [$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_address_book_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)])], 9, $context, $this->getSourceContext());
        echo "</div>
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_address_book_set_as_default", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]));
        echo "
            ";
        // line 11
        echo twig_call_macro($macros["buttons"], "macro_delete", [$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_address_book_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)]), null, true, twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)], 11, $context, $this->getSourceContext());
        echo "
        </div>
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
        return "@SyliusShop/Account/AddressBook/_item.html.twig";
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
        return array (  70 => 11,  66 => 10,  60 => 9,  56 => 7,  54 => 6,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}

<div class=\"address-card\">
    <div class=\"address-card-content\" {{ sylius_test_html_attribute('address', \"%s %s\"|format(address.firstName, address.lastName)) }}>
        <div>
            {% include '@SyliusShop/Common/_address.html.twig' with {'address': address} %}
        </div>
        <div class=\"buttons\">
            <div {{ sylius_test_html_attribute('edit-button') }}>{{ buttons.edit(path('sylius_shop_account_address_book_update', {'id': address.id})) }}</div>
            {{ render(path('sylius_shop_account_address_book_set_as_default', {'id': address.id})) }}
            {{ buttons.delete(path('sylius_shop_account_address_book_delete', {'id': address.id}), null, true, address.id) }}
        </div>
    </div>
</div>
", "@SyliusShop/Account/AddressBook/_item.html.twig", "/var/www/html/Sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/AddressBook/_item.html.twig");
    }
}
