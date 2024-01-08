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

/* @SyliusShop/Account/AddressBook/update.html.twig */
class __TwigTemplate_89054b85f5cdb66ab03c5f066fef64e5f4f5401ae99a867704ec19cb485f87a8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'subcontent' => [$this, 'block_subcontent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@SyliusShop/Account/AddressBook/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Account/AddressBook/update.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Account/AddressBook/update.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), ["@SyliusShop/Form/theme.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Account/AddressBook/layout.html.twig", "@SyliusShop/Account/AddressBook/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.edit_my_address"), "html", null, true);
        echo " | ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_subcontent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subcontent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subcontent"));

        // line 8
        echo "    <div class=\"ui segment\">
        <h1 class=\"ui dividing header\">
            ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.address_book"), "html", null, true);
        echo "
            <div class=\"sub header\">";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.edit_my_address"), "html", null, true);
        echo "</div>
        </h1>

        ";
        // line 14
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.account.address_book.update.after_content_header", ["address" => (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 14, $this->source); })())]);
        echo "

        ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_address_book_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "method" => "PUT", "attr" => ["class" => "ui loadable form", "novalidate" => "novalidate"]]);
        echo "

        ";
        // line 18
        $this->loadTemplate("@SyliusShop/Common/Form/_address.html.twig", "@SyliusShop/Account/AddressBook/update.html.twig", 18)->display(twig_array_merge($context, ["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })())]));
        // line 19
        echo "
        <div class=\"ui two column grid\">
            <div class=\"column\">
                <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_address_book_index");
        echo "\" class=\"ui large icon labeled button\">
                    <i class=\"left arrow icon\"></i> ";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.cancel"), "html", null, true);
        echo "
                </a>
            </div>
            <div class=\"right aligned column\">
                <button type=\"submit\" class=\"ui large icon labeled blue button\" ";
        // line 27
        echo $this->env->getFunction('sylius_test_html_attribute')->getCallable()("save-changes");
        echo ">
                    <i class=\"icon save\"></i> ";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.save_changes"), "html", null, true);
        echo "
                </button>
            </div>
        </div>

        ";
        // line 33
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.account.address_book.update.form", ["address" => (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 33, $this->source); })())]);
        echo "

        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "_token", [], "any", false, false, false, 35), 'row');
        echo "
        ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "
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
        return "@SyliusShop/Account/AddressBook/update.html.twig";
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
        return array (  156 => 36,  152 => 35,  147 => 33,  139 => 28,  135 => 27,  128 => 23,  124 => 22,  119 => 19,  117 => 18,  112 => 16,  107 => 14,  101 => 11,  97 => 10,  93 => 8,  83 => 7,  62 => 5,  51 => 1,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@SyliusShop/Account/AddressBook/layout.html.twig' %}

{% form_theme form '@SyliusShop/Form/theme.html.twig' %}

{% block title %}{{ 'sylius.ui.edit_my_address'|trans }} | {{ parent() }}{% endblock %}

{% block subcontent %}
    <div class=\"ui segment\">
        <h1 class=\"ui dividing header\">
            {{ 'sylius.ui.address_book'|trans }}
            <div class=\"sub header\">{{ 'sylius.ui.edit_my_address'|trans }}</div>
        </h1>

        {{ sylius_template_event('sylius.shop.account.address_book.update.after_content_header', {'address': address}) }}

        {{ form_start(form, {'action': path('sylius_shop_account_address_book_update', {'id': address.id}), 'method': 'PUT', 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}

        {% include '@SyliusShop/Common/Form/_address.html.twig' with {'form': form} %}

        <div class=\"ui two column grid\">
            <div class=\"column\">
                <a href=\"{{ path('sylius_shop_account_address_book_index') }}\" class=\"ui large icon labeled button\">
                    <i class=\"left arrow icon\"></i> {{ 'sylius.ui.cancel'|trans }}
                </a>
            </div>
            <div class=\"right aligned column\">
                <button type=\"submit\" class=\"ui large icon labeled blue button\" {{ sylius_test_html_attribute('save-changes') }}>
                    <i class=\"icon save\"></i> {{ 'sylius.ui.save_changes'|trans}}
                </button>
            </div>
        </div>

        {{ sylius_template_event('sylius.shop.account.address_book.update.form', {'address': address}) }}

        {{ form_row(form._token) }}
        {{ form_end(form, {'render_rest': false}) }}
    </div>
{% endblock %}
", "@SyliusShop/Account/AddressBook/update.html.twig", "/var/www/html/Sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/AddressBook/update.html.twig");
    }
}
