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

/* @SyliusShop/Common/Order/_summary.html.twig */
class __TwigTemplate_fbbfa9fb3b09278d3f24a184d1c12d412262116c8d8e12b99066d4b4512ec4b3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Order/_summary.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Order/_summary.html.twig"));

        // line 1
        $this->loadTemplate("@SyliusShop/Common/Order/_addresses.html.twig", "@SyliusShop/Common/Order/_summary.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("@SyliusShop/Common/Order/_table.html.twig", "@SyliusShop/Common/Order/_summary.html.twig", 2)->display($context);
        // line 3
        echo "
<div class=\"ui two column stackable grid\">
    <div class=\"column\" id=\"sylius-payments\">
        ";
        // line 6
        $this->loadTemplate("@SyliusShop/Common/Order/_payments.html.twig", "@SyliusShop/Common/Order/_summary.html.twig", 6)->display($context);
        // line 7
        echo "    </div>
    <div class=\"column\" id=\"sylius-shipments\">
        ";
        // line 9
        $this->loadTemplate("@SyliusShop/Common/Order/_shipments.html.twig", "@SyliusShop/Common/Order/_summary.html.twig", 9)->display($context);
        // line 10
        echo "    </div>
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
        return "@SyliusShop/Common/Order/_summary.html.twig";
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
        return array (  60 => 10,  58 => 9,  54 => 7,  52 => 6,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include '@SyliusShop/Common/Order/_addresses.html.twig' %}
{% include '@SyliusShop/Common/Order/_table.html.twig' %}

<div class=\"ui two column stackable grid\">
    <div class=\"column\" id=\"sylius-payments\">
        {% include '@SyliusShop/Common/Order/_payments.html.twig' %}
    </div>
    <div class=\"column\" id=\"sylius-shipments\">
        {% include '@SyliusShop/Common/Order/_shipments.html.twig' %}
    </div>
</div>
", "@SyliusShop/Common/Order/_summary.html.twig", "/var/www/html/Sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Order/_summary.html.twig");
    }
}
