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

/* @SyliusAdmin/Product/Show/_moreDetails.html.twig */
class __TwigTemplate_b43e5a128100162257299b42654e370062534e8e6bac3cd748bd92b281cbb07f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_moreDetails.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_moreDetails.html.twig"));

        // line 1
        $macros["flags"] = $this->macros["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "@SyliusAdmin/Product/Show/_moreDetails.html.twig", 1)->unwrap();
        // line 2
        echo "
<div id=\"more-details\" class=\"ui styled fluid accordion\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 4, $this->source); })()), "translations", [], "any", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["translation"]) {
            // line 5
            echo "        <div class=\"title\">
            <i class=\"dropdown icon\"></i>
            ";
            // line 7
            echo twig_call_macro($macros["flags"], "macro_fromLocaleCode", [twig_get_attribute($this->env, $this->source, $context["translation"], "locale", [], "any", false, false, false, 7)], 7, $context, $this->getSourceContext());
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getFilter('sylius_locale_name')->getCallable()(twig_get_attribute($this->env, $this->source, $context["translation"], "locale", [], "any", false, false, false, 7)), "html", null, true);
            echo "
        </div>
        <div class=\"ui content\">
            <table class=\"ui very basic celled table\">
                <tbody>
                <tr>
                    <td class=\"three wide\"><strong class=\"gray text\">";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.name"), "html", null, true);
            echo "</strong></td>
                    <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["translation"], "name", [], "any", false, false, false, 14), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td class=\"three wide\"><strong class=\"gray text\">";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.slug"), "html", null, true);
            echo "</strong></td>
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["translation"], "slug", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td class=\"three wide\"><strong class=\"gray text\">";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.description"), "html", null, true);
            echo "</strong></td>
                    <td>";
            // line 22
            echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["translation"], "description", [], "any", false, false, false, 22), "html", null, true));
            echo "</td>
                </tr>
                <tr>
                    <td class=\"three wide\"><strong class=\"gray text\">";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.meta_keywords"), "html", null, true);
            echo "</strong></td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["translation"], "metaKeywords", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td class=\"three wide\"><strong class=\"gray text\">";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.meta_description"), "html", null, true);
            echo "</strong></td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["translation"], "metaDescription", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <td class=\"three wide\"><strong class=\"gray text\">";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.short_description"), "html", null, true);
            echo "</strong></td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["translation"], "shortDescription", [], "any", false, false, false, 34), "html", null, true);
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
        // line 40
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
        return "@SyliusAdmin/Product/Show/_moreDetails.html.twig";
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
        return array (  134 => 40,  122 => 34,  118 => 33,  112 => 30,  108 => 29,  102 => 26,  98 => 25,  92 => 22,  88 => 21,  82 => 18,  78 => 17,  72 => 14,  68 => 13,  57 => 7,  53 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@SyliusUi/Macro/flags.html.twig' as flags %}

<div id=\"more-details\" class=\"ui styled fluid accordion\">
    {% for translation in product.translations %}
        <div class=\"title\">
            <i class=\"dropdown icon\"></i>
            {{ flags.fromLocaleCode(translation.locale) }} {{ translation.locale|sylius_locale_name }}
        </div>
        <div class=\"ui content\">
            <table class=\"ui very basic celled table\">
                <tbody>
                <tr>
                    <td class=\"three wide\"><strong class=\"gray text\">{{ 'sylius.ui.name'|trans }}</strong></td>
                    <td>{{ translation.name }}</td>
                </tr>
                <tr>
                    <td class=\"three wide\"><strong class=\"gray text\">{{ 'sylius.ui.slug'|trans }}</strong></td>
                    <td>{{ translation.slug }}</td>
                </tr>
                <tr>
                    <td class=\"three wide\"><strong class=\"gray text\">{{ 'sylius.ui.description'|trans }}</strong></td>
                    <td>{{ translation.description|nl2br }}</td>
                </tr>
                <tr>
                    <td class=\"three wide\"><strong class=\"gray text\">{{ 'sylius.ui.meta_keywords'|trans }}</strong></td>
                    <td>{{ translation.metaKeywords }}</td>
                </tr>
                <tr>
                    <td class=\"three wide\"><strong class=\"gray text\">{{ 'sylius.ui.meta_description'|trans }}</strong></td>
                    <td>{{ translation.metaDescription }}</td>
                </tr>
                <tr>
                    <td class=\"three wide\"><strong class=\"gray text\">{{ 'sylius.ui.short_description'|trans }}</strong></td>
                    <td>{{ translation.shortDescription }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    {% endfor %}
</div>
", "@SyliusAdmin/Product/Show/_moreDetails.html.twig", "/var/www/html/Sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_moreDetails.html.twig");
    }
}
