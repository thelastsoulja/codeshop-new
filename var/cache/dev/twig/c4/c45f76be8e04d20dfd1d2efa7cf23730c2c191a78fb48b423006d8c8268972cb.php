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

/* @SyliusAdmin/CatalogPromotion/Show/_translations.html.twig */
class __TwigTemplate_3d49a33eb83e769c00361028ad431dac8daae91a7c150266b92fa28f5722f658 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/CatalogPromotion/Show/_translations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/CatalogPromotion/Show/_translations.html.twig"));

        // line 1
        $macros["flags"] = $this->macros["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "@SyliusAdmin/CatalogPromotion/Show/_translations.html.twig", 1)->unwrap();
        // line 2
        echo "
<div class=\"ui hidden divider\"></div>

<div class=\"ui styled fluid accordion\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["catalog_promotion"]) || array_key_exists("catalog_promotion", $context) ? $context["catalog_promotion"] : (function () { throw new RuntimeError('Variable "catalog_promotion" does not exist.', 6, $this->source); })()), "translations", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["translation"]) {
            // line 7
            echo "        <div class=\"title\">
            <i class=\"dropdown icon\"></i>
            ";
            // line 9
            echo twig_call_macro($macros["flags"], "macro_fromLocaleCode", [twig_get_attribute($this->env, $this->source, $context["translation"], "locale", [], "any", false, false, false, 9)], 9, $context, $this->getSourceContext());
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getFilter('sylius_locale_name')->getCallable()(twig_get_attribute($this->env, $this->source, $context["translation"], "locale", [], "any", false, false, false, 9)), "html", null, true);
            echo "
        </div>
        <div class=\"ui content\">
            <table class=\"ui very basic celled table\">
                <tbody>
                <tr>
                    <td class=\"three wide\"><strong class=\"gray text\">";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.label"), "html", null, true);
            echo "</strong></td>
                    <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["translation"], "label", [], "any", false, false, false, 16), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td class=\"three wide\"><strong class=\"gray text\">";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.description"), "html", null, true);
            echo "</strong></td>
                    <td>";
            // line 20
            echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["translation"], "description", [], "any", false, false, false, 20), "html", null, true));
            echo "</td>
                </tr>
                </tbody>
            </table>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SyliusAdmin/CatalogPromotion/Show/_translations.html.twig";
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
        return array (  96 => 26,  84 => 20,  80 => 19,  74 => 16,  70 => 15,  59 => 9,  55 => 7,  51 => 6,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@SyliusUi/Macro/flags.html.twig' as flags %}

<div class=\"ui hidden divider\"></div>

<div class=\"ui styled fluid accordion\">
    {% for translation in catalog_promotion.translations %}
        <div class=\"title\">
            <i class=\"dropdown icon\"></i>
            {{ flags.fromLocaleCode(translation.locale) }} {{ translation.locale|sylius_locale_name }}
        </div>
        <div class=\"ui content\">
            <table class=\"ui very basic celled table\">
                <tbody>
                <tr>
                    <td class=\"three wide\"><strong class=\"gray text\">{{ 'sylius.ui.label'|trans }}</strong></td>
                    <td>{{ translation.label }}</td>
                </tr>
                <tr>
                    <td class=\"three wide\"><strong class=\"gray text\">{{ 'sylius.ui.description'|trans }}</strong></td>
                    <td>{{ translation.description|nl2br }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    {% endfor %}
</div>
", "@SyliusAdmin/CatalogPromotion/Show/_translations.html.twig", "/var/www/html/Sylius/src/Sylius/Bundle/AdminBundle/Resources/views/CatalogPromotion/Show/_translations.html.twig");
    }
}
