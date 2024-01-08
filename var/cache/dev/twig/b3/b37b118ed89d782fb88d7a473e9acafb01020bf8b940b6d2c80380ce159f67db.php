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

/* @SyliusAdmin/Form/theme.html.twig */
class __TwigTemplate_e41a3089bd3368d6576e25ae1033cf2b664bdae46f696a601992683b4c8cb32b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            '_sylius_product_attribute_configuration_choices_entry_widget' => [$this, 'block__sylius_product_attribute_configuration_choices_entry_widget'],
            'sylius_taxon_autocomplete_choice_row' => [$this, 'block_sylius_taxon_autocomplete_choice_row'],
            'sylius_product_autocomplete_choice_row' => [$this, 'block_sylius_product_autocomplete_choice_row'],
            'sylius_channel_collection_widget' => [$this, 'block_sylius_channel_collection_widget'],
            '_sylius_channel_channelPriceHistoryConfig_lowestPriceForDiscountedProductsCheckingPeriod_widget' => [$this, 'block__sylius_channel_channelPriceHistoryConfig_lowestPriceForDiscountedProductsCheckingPeriod_widget'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@SyliusUi/Form/theme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Form/theme.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Form/theme.html.twig"));

        $this->parent = $this->loadTemplate("@SyliusUi/Form/theme.html.twig", "@SyliusAdmin/Form/theme.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block__sylius_product_attribute_configuration_choices_entry_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_sylius_product_attribute_configuration_choices_entry_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_sylius_product_attribute_configuration_choices_entry_widget"));

        // line 4
        echo "    ";
        $macros["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "@SyliusAdmin/Form/theme.html.twig", 4)->unwrap();
        // line 5
        echo "
    <div class=\"ui styled fluid accordion\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["translation"]) {
            // line 8
            echo "            <div data-locale=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translation"], "vars", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8), "html", null, true);
            echo "\">
                <div class=\"title";
            // line 9
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 9)) {
                echo " active";
            }
            echo "\">
                    <i class=\"dropdown icon\"></i>
                    ";
            // line 11
            echo twig_call_macro($macros["flags"], "macro_fromLocaleCode", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translation"], "vars", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11)], 11, $context, $this->getSourceContext());
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getFilter('sylius_locale_name')->getCallable()(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translation"], "vars", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11)), "html", null, true);
            echo "
                </div>
                <div class=\"ui content";
            // line 13
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 13)) {
                echo " active";
            }
            echo "\">
                    ";
            // line 14
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translation"], 'widget');
            // line 15
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'errors');
            // line 16
            echo "</div>
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_sylius_taxon_autocomplete_choice_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sylius_taxon_autocomplete_choice_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sylius_taxon_autocomplete_choice_row"));

        // line 23
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'row', ["remote_url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_taxon_by_name_phrase"), "load_edit_url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_taxon_by_code")]);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_sylius_product_autocomplete_choice_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sylius_product_autocomplete_choice_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sylius_product_autocomplete_choice_row"));

        // line 27
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'row', ["remote_url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_product_by_name_phrase"), "load_edit_url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_product_by_code")]);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_sylius_channel_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sylius_channel_collection_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sylius_channel_collection_widget"));

        // line 31
        echo "    ";
        $context["channelsErrorCount"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "vars", [], "any", false, false, false, 31), "channels_errors_count", [], "any", false, false, false, 31);
        // line 32
        echo "    <div class=\"ui top attached tabular menu\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["channelCode"] => $context["channelForm"]) {
            // line 34
            echo "            ";
            $context["channelErrorCount"] = (((twig_get_attribute($this->env, $this->source, ($context["channelsErrorCount"] ?? null), $context["channelCode"], [], "array", true, true, false, 34) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["channelsErrorCount"] ?? null), $context["channelCode"], [], "array", false, false, false, 34)))) ? (twig_get_attribute($this->env, $this->source, ($context["channelsErrorCount"] ?? null), $context["channelCode"], [], "array", false, false, false, 34)) : (0));
            // line 35
            echo "            <a class=\"item";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 35)) {
                echo " active";
            }
            echo "\" data-tab=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["channelForm"], "vars", [], "any", false, false, false, 35), "full_name", [], "any", false, false, false, 35), "html", null, true);
            echo "\">
                ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["channelForm"], "vars", [], "any", false, false, false, 36), "label", [], "any", false, false, false, 36), "html", null, true);
            echo "
                ";
            // line 37
            if (((isset($context["channelErrorCount"]) || array_key_exists("channelErrorCount", $context) ? $context["channelErrorCount"] : (function () { throw new RuntimeError('Variable "channelErrorCount" does not exist.', 37, $this->source); })()) > 0)) {
                // line 38
                echo "                    <span class=\"ui small horizontal circular label\" style=\"background-color: #DB2828\">";
                echo twig_escape_filter($this->env, (isset($context["channelErrorCount"]) || array_key_exists("channelErrorCount", $context) ? $context["channelErrorCount"] : (function () { throw new RuntimeError('Variable "channelErrorCount" does not exist.', 38, $this->source); })()), "html", null, true);
                echo "</span>
                ";
            }
            // line 40
            echo "            </a>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['channelCode'], $context['channelForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </div>
    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["channelCode"] => $context["channelForm"]) {
            // line 44
            echo "        <div class=\"ui bottom attached tab segment";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 44)) {
                echo " active";
            }
            echo "\" data-tab=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["channelForm"], "vars", [], "any", false, false, false, 44), "full_name", [], "any", false, false, false, 44), "html", null, true);
            echo "\">
            ";
            // line 45
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["channelForm"], 'row', ["label" => false]);
            echo "
        </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['channelCode'], $context['channelForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block__sylius_channel_channelPriceHistoryConfig_lowestPriceForDiscountedProductsCheckingPeriod_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_sylius_channel_channelPriceHistoryConfig_lowestPriceForDiscountedProductsCheckingPeriod_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_sylius_channel_channelPriceHistoryConfig_lowestPriceForDiscountedProductsCheckingPeriod_widget"));

        // line 51
        echo "    <div class=\"ui right labeled input\">
        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'widget');
        echo "
        <div class=\"ui label\">
            ";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.days"), "html", null, true);
        echo "
        </div>
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
        return "@SyliusAdmin/Form/theme.html.twig";
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
        return array (  342 => 54,  337 => 52,  334 => 51,  324 => 50,  299 => 45,  290 => 44,  273 => 43,  270 => 42,  255 => 40,  249 => 38,  247 => 37,  243 => 36,  234 => 35,  231 => 34,  214 => 33,  211 => 32,  208 => 31,  198 => 30,  185 => 27,  175 => 26,  162 => 23,  152 => 22,  141 => 19,  125 => 16,  123 => 15,  121 => 14,  115 => 13,  108 => 11,  101 => 9,  96 => 8,  79 => 7,  75 => 5,  72 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@SyliusUi/Form/theme.html.twig' %}

{% block _sylius_product_attribute_configuration_choices_entry_widget %}
    {% import '@SyliusUi/Macro/flags.html.twig' as flags %}

    <div class=\"ui styled fluid accordion\">
        {% for translation in form %}
            <div data-locale=\"{{ translation.vars.name }}\">
                <div class=\"title{% if loop.first %} active{% endif %}\">
                    <i class=\"dropdown icon\"></i>
                    {{ flags.fromLocaleCode(translation.vars.name) }} {{ translation.vars.name|sylius_locale_name }}
                </div>
                <div class=\"ui content{% if loop.first %} active{% endif %}\">
                    {{ form_widget(translation) }}
                    {{- form_errors(form) -}}
                </div>
            </div>
        {% endfor %}
    </div>
{% endblock %}

{% block sylius_taxon_autocomplete_choice_row %}
    {{ form_row(form, {'remote_url': path('sylius_admin_ajax_taxon_by_name_phrase'), 'load_edit_url': path('sylius_admin_ajax_taxon_by_code')}) }}
{% endblock %}

{% block sylius_product_autocomplete_choice_row %}
    {{ form_row(form, {'remote_url': path('sylius_admin_ajax_product_by_name_phrase'), 'load_edit_url': path('sylius_admin_ajax_product_by_code')}) }}
{% endblock %}

{% block sylius_channel_collection_widget %}
    {% set channelsErrorCount = form.vars.channels_errors_count %}
    <div class=\"ui top attached tabular menu\">
        {% for channelCode, channelForm in form %}
            {% set channelErrorCount = channelsErrorCount[channelCode] ?? 0 %}
            <a class=\"item{% if loop.first %} active{% endif %}\" data-tab=\"{{ channelForm.vars.full_name }}\">
                {{ channelForm.vars.label }}
                {% if channelErrorCount > 0 %}
                    <span class=\"ui small horizontal circular label\" style=\"background-color: #DB2828\">{{ channelErrorCount }}</span>
                {% endif %}
            </a>
        {% endfor %}
    </div>
    {% for channelCode, channelForm in form %}
        <div class=\"ui bottom attached tab segment{% if loop.first %} active{% endif %}\" data-tab=\"{{ channelForm.vars.full_name }}\">
            {{ form_row(channelForm, {'label': false}) }}
        </div>
    {% endfor %}
{% endblock %}

{% block _sylius_channel_channelPriceHistoryConfig_lowestPriceForDiscountedProductsCheckingPeriod_widget %}
    <div class=\"ui right labeled input\">
        {{ form_widget(form) }}
        <div class=\"ui label\">
            {{ 'sylius.ui.days'|trans }}
        </div>
    </div>
{% endblock %}
", "@SyliusAdmin/Form/theme.html.twig", "/var/www/html/Sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Form/theme.html.twig");
    }
}
