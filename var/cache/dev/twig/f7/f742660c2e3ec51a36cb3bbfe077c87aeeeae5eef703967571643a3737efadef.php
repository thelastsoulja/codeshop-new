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

/* @SyliusShop/Checkout/_header.html.twig */
class __TwigTemplate_418f46f50c36490c12ce1361550ae6024880f7bd56f8159f2da676574ca1b42e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/_header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/_header.html.twig"));

        // line 1
        echo "<div class=\"ui basic segment\">
    <div class=\"ui large text menu\">
        <div class=\"ui small image\">
            ";
        // line 4
        if ((isset($context["use_webpack"]) || array_key_exists("use_webpack", $context) ? $context["use_webpack"] : (function () { throw new RuntimeError('Variable "use_webpack" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_homepage");
            echo "\">
                    <img src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/shop/images/logo.png", "shop"), "html", null, true);
            echo "\" />
                </a>
            ";
        } else {
            // line 9
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_homepage");
            echo "\">
                    <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/shop/img/logo.png"), "html", null, true);
            echo "\" />
                </a>
            ";
        }
        // line 13
        echo "        </div>
        <div class=\"right menu\">
            ";
        // line 15
        if ( !(null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "customer", [], "any", false, true, false, 15), "id", [], "any", true, true, false, 15)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "customer", [], "any", false, true, false, 15), "id", [], "any", false, false, false, 15), null)) : (null)))) {
            // line 16
            echo "                <div class=\"item\" id=\"purchaser-email\" ";
            echo $this->env->getFunction('sylius_test_html_attribute')->getCallable()("purchaser-name-or-email");
            echo ">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.checking_out_as"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 16, $this->source); })()), "customer", [], "any", false, false, false, 16), "email", [], "any", false, false, false, 16)) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "customer", [], "any", false, true, false, 16), "fullName", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "customer", [], "any", false, true, false, 16), "fullName", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 16, $this->source); })()), "customer", [], "any", false, false, false, 16), "email", [], "any", false, false, false, 16))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 16, $this->source); })()), "customer", [], "any", false, false, false, 16), "email", [], "any", false, false, false, 16))))), "html", null, true);
            echo ".</div>
            ";
        } else {
            // line 18
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_login");
            echo "\" class=\"item\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.sign_in"), "html", null, true);
            echo "</a>
            ";
        }
        // line 20
        echo "        </div>
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
        return "@SyliusShop/Checkout/_header.html.twig";
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
        return array (  96 => 20,  88 => 18,  78 => 16,  76 => 15,  72 => 13,  66 => 10,  61 => 9,  55 => 6,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"ui basic segment\">
    <div class=\"ui large text menu\">
        <div class=\"ui small image\">
            {% if use_webpack %}
                <a href=\"{{ path('sylius_shop_homepage') }}\">
                    <img src=\"{{ asset('build/shop/images/logo.png', 'shop') }}\" />
                </a>
            {% else %}
                <a href=\"{{ path('sylius_shop_homepage') }}\">
                    <img src=\"{{ asset('assets/shop/img/logo.png') }}\" />
                </a>
            {% endif %}
        </div>
        <div class=\"right menu\">
            {% if order.customer.id|default(null) is not null %}
                <div class=\"item\" id=\"purchaser-email\" {{ sylius_test_html_attribute('purchaser-name-or-email') }}>{{ 'sylius.ui.checking_out_as'|trans }} {{ app.user is null ? order.customer.email : order.customer.fullName|default(order.customer.email) }}.</div>
            {% else %}
                <a href=\"{{ path('sylius_shop_login') }}\" class=\"item\">{{ 'sylius.ui.sign_in'|trans }}</a>
            {% endif %}
        </div>
    </div>
</div>
", "@SyliusShop/Checkout/_header.html.twig", "/var/www/html/Sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/_header.html.twig");
    }
}
