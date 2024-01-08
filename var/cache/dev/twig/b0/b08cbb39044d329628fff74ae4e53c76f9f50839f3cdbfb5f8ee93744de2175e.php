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

/* @SyliusShop/Product/Show/_association.html.twig */
class __TwigTemplate_ee2dc5cb06793937e9bc14bd69f894913dd7d39506ade7602da848912c2a7638 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_association.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_association.html.twig"));

        // line 1
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product_association"]) || array_key_exists("product_association", $context) ? $context["product_association"] : (function () { throw new RuntimeError('Variable "product_association" does not exist.', 1, $this->source); })()), "associatedProducts", [], "any", false, false, false, 1), "empty", [], "method", false, false, false, 1)) {
            // line 2
            echo "    <h4 class=\"ui horizontal section divider header\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product_association"]) || array_key_exists("product_association", $context) ? $context["product_association"] : (function () { throw new RuntimeError('Variable "product_association" does not exist.', 2, $this->source); })()), "type", [], "any", false, false, false, 2), "name", [], "any", false, false, false, 2), "html", null, true);
            echo "</h4>
    <div id=\"sylius-product-association-";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product_association"]) || array_key_exists("product_association", $context) ? $context["product_association"] : (function () { throw new RuntimeError('Variable "product_association" does not exist.', 3, $this->source); })()), "type", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3), "html", null, true);
            echo "\" ";
            echo $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-association", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product_association"]) || array_key_exists("product_association", $context) ? $context["product_association"] : (function () { throw new RuntimeError('Variable "product_association" does not exist.', 3, $this->source); })()), "type", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3));
            echo ">
    ";
            // line 4
            $this->loadTemplate("@SyliusShop/Product/_horizontalList.html.twig", "@SyliusShop/Product/Show/_association.html.twig", 4)->display(twig_array_merge($context, ["products" => twig_get_attribute($this->env, $this->source, (isset($context["product_association"]) || array_key_exists("product_association", $context) ? $context["product_association"] : (function () { throw new RuntimeError('Variable "product_association" does not exist.', 4, $this->source); })()), "associatedProducts", [], "any", false, false, false, 4)]));
            // line 5
            echo "    </div>
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
        return "@SyliusShop/Product/Show/_association.html.twig";
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
        return array (  58 => 5,  56 => 4,  50 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not product_association.associatedProducts.empty() %}
    <h4 class=\"ui horizontal section divider header\">{{ product_association.type.name }}</h4>
    <div id=\"sylius-product-association-{{ product_association.type.name }}\" {{ sylius_test_html_attribute('product-association', product_association.type.name) }}>
    {% include '@SyliusShop/Product/_horizontalList.html.twig' with {'products': product_association.associatedProducts} %}
    </div>
{% endif %}
", "@SyliusShop/Product/Show/_association.html.twig", "/var/www/html/Sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_association.html.twig");
    }
}
