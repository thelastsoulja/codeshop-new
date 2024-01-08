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

/* @SyliusAdmin/Product/Show/_appliedPromotions.html.twig */
class __TwigTemplate_556ef54df15c406fd5a59ec1d2a3fd93070fd0d63f382059d388f5b7643dfc76 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_appliedPromotions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_appliedPromotions.html.twig"));

        // line 1
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["channelPricing"]) || array_key_exists("channelPricing", $context) ? $context["channelPricing"] : (function () { throw new RuntimeError('Variable "channelPricing" does not exist.', 1, $this->source); })()), "appliedPromotions", [], "any", false, false, false, 1))) {
            // line 2
            echo "    <td>-</td>
";
        } else {
            // line 4
            echo "    <td class=\"fourteen wide\">
        <ul class=\"ui list\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["channelPricing"]) || array_key_exists("channelPricing", $context) ? $context["channelPricing"] : (function () { throw new RuntimeError('Variable "channelPricing" does not exist.', 6, $this->source); })()), "appliedPromotions", [], "any", false, false, false, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["appliedPromotion"]) {
                // line 7
                echo "                <li class=\"label\" style=\"text-decoration: none;\">
                    <a
                        href=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_catalog_promotion_show", ["id" => twig_get_attribute($this->env, $this->source, $context["appliedPromotion"], "id", [], "any", false, false, false, 9)]), "html", null, true);
                echo "\"
                        class=\"applied-promotion\"
                    >
                        ";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appliedPromotion"], "name", [], "any", false, false, false, 12), "html", null, true);
                echo "
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appliedPromotion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        </ul>
    </td>
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
        return "@SyliusAdmin/Product/Show/_appliedPromotions.html.twig";
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
        return array (  77 => 16,  67 => 12,  61 => 9,  57 => 7,  53 => 6,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if channelPricing.appliedPromotions is empty %}
    <td>-</td>
{% else %}
    <td class=\"fourteen wide\">
        <ul class=\"ui list\">
            {% for appliedPromotion in channelPricing.appliedPromotions %}
                <li class=\"label\" style=\"text-decoration: none;\">
                    <a
                        href=\"{{ path('sylius_admin_catalog_promotion_show', {'id': appliedPromotion.id}) }}\"
                        class=\"applied-promotion\"
                    >
                        {{ appliedPromotion.name }}
                    </a>
                </li>
            {% endfor %}
        </ul>
    </td>
{% endif %}
", "@SyliusAdmin/Product/Show/_appliedPromotions.html.twig", "/var/www/html/Sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_appliedPromotions.html.twig");
    }
}
