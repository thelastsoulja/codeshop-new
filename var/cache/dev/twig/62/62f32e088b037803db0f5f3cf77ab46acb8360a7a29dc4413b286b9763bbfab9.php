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

/* @SyliusShop/Common/Order/Label/ShipmentState/singleShipmentState.html.twig */
class __TwigTemplate_f2dbc0f0dc4920b600a4167848a2f2adeb615f5249614180feddbb43011c3b9e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Order/Label/ShipmentState/singleShipmentState.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Order/Label/ShipmentState/singleShipmentState.html.twig"));

        // line 2
        $context["viewOptions"] = ["cart" => ["icon" => "adjust", "color" => "grey"], "cancelled" => ["icon" => "ban", "color" => "red"], "shipped" => ["icon" => "plane", "color" => "green"], "ready" => ["icon" => "clock", "color" => "blue"]];
        // line 9
        echo "
";
        // line 10
        $context["value"] = ("sylius.ui." . (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 10, $this->source); })()));
        // line 11
        echo "
<span class=\"ui ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["viewOptions"]) || array_key_exists("viewOptions", $context) ? $context["viewOptions"] : (function () { throw new RuntimeError('Variable "viewOptions" does not exist.', 12, $this->source); })()), (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 12, $this->source); })()), [], "array", false, false, false, 12), "color", [], "array", false, false, false, 12), "html", null, true);
        echo " label\">
    <i class=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["viewOptions"]) || array_key_exists("viewOptions", $context) ? $context["viewOptions"] : (function () { throw new RuntimeError('Variable "viewOptions" does not exist.', 13, $this->source); })()), (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 13, $this->source); })()), [], "array", false, false, false, 13), "icon", [], "array", false, false, false, 13), "html", null, true);
        echo " icon\"></i>
    ";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 14, $this->source); })())), "html", null, true);
        echo "
</span>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SyliusShop/Common/Order/Label/ShipmentState/singleShipmentState.html.twig";
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
        return array (  61 => 14,  57 => 13,  53 => 12,  50 => 11,  48 => 10,  45 => 9,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{%
    set viewOptions = {
    cart: { icon: \"adjust\", color: \"grey\" } ,
    cancelled: { icon: \"ban\", color: \"red\" } ,
    shipped: { icon: \"plane\", color: \"green\" } ,
    ready: { icon: \"clock\", color: \"blue\" } ,
    }
%}

{% set value = 'sylius.ui.' ~ state %}

<span class=\"ui {{ viewOptions[state]['color'] }} label\">
    <i class=\"{{ viewOptions[state]['icon'] }} icon\"></i>
    {{ value|trans }}
</span>
", "@SyliusShop/Common/Order/Label/ShipmentState/singleShipmentState.html.twig", "/var/www/html/Sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Order/Label/ShipmentState/singleShipmentState.html.twig");
    }
}
