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

/* @SyliusShop/Layout/Footer/Grid/_pre_footer.html.twig */
class __TwigTemplate_caf4477dfe8818689446b005c1a929fafde3740d109103a59be7360f05f1b696 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Layout/Footer/Grid/_pre_footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Layout/Footer/Grid/_pre_footer.html.twig"));

        // line 1
        echo "<div class=\"pre-footer\">
    <div>
        <div><i class=\"shipping fast icon\"></i></div>
        <strong>";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.footer.banner.free_shipping_title"), "html", null, true);
        echo "</strong>
        <div>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.footer.banner.free_shipping_content"), "html", null, true);
        echo "</div>
    </div>
    <div>
        <div><i class=\"dollar sign icon\"></i></div>
        <strong>";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.footer.banner.multiple_payments_title"), "html", null, true);
        echo "</strong>
        <div>";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.footer.banner.multiple_payments_content"), "html", null, true);
        echo "</div>
    </div>
    <div>
        <div><i class=\"certificate icon\"></i></div>
        <strong>";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.footer.banner.guarantee_title"), "html", null, true);
        echo "</strong>
        <div>";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.footer.banner.guarantee_content"), "html", null, true);
        echo "</div>
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
        return "@SyliusShop/Layout/Footer/Grid/_pre_footer.html.twig";
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
        return array (  74 => 15,  70 => 14,  63 => 10,  59 => 9,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"pre-footer\">
    <div>
        <div><i class=\"shipping fast icon\"></i></div>
        <strong>{{ 'sylius.footer.banner.free_shipping_title'|trans }}</strong>
        <div>{{ 'sylius.footer.banner.free_shipping_content'|trans }}</div>
    </div>
    <div>
        <div><i class=\"dollar sign icon\"></i></div>
        <strong>{{ 'sylius.footer.banner.multiple_payments_title'|trans }}</strong>
        <div>{{ 'sylius.footer.banner.multiple_payments_content'|trans }}</div>
    </div>
    <div>
        <div><i class=\"certificate icon\"></i></div>
        <strong>{{ 'sylius.footer.banner.guarantee_title'|trans }}</strong>
        <div>{{ 'sylius.footer.banner.guarantee_content'|trans }}</div>
    </div>
</div>
", "@SyliusShop/Layout/Footer/Grid/_pre_footer.html.twig", "/var/www/html/Sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Layout/Footer/Grid/_pre_footer.html.twig");
    }
}
