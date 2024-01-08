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

/* @SyliusAdmin/Product/Attribute/attributesCollection.html.twig */
class __TwigTemplate_d619378144ae9fe6d81ac1ed618286173b32da12b9c971e38be86c7cb5a6d510 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'collection_widget' => [$this, 'block_collection_widget'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@SyliusAdmin/Form/theme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Attribute/attributesCollection.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Attribute/attributesCollection.html.twig"));

        $this->parent = $this->loadTemplate("@SyliusAdmin/Form/theme.html.twig", "@SyliusAdmin/Product/Attribute/attributesCollection.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 4
        $macros["self"] = $this;
        // line 5
        echo "
    <div>
        ";
        // line 7
        $context["attributes"] = [];
        // line 8
        echo "
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 10
            echo "            ";
            $context["code"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 10), "data", [], "any", false, false, false, 10), "attribute", [], "any", false, false, false, 10), "code", [], "any", false, false, false, 10);
            // line 11
            echo "
            ";
            // line 12
            if ( !twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 12, $this->source); })()), [], "array", true, true, false, 12)) {
                // line 13
                echo "                ";
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 13, $this->source); })()), [(isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 13, $this->source); })()) => []]);
                // line 14
                echo "            ";
            }
            // line 15
            echo "
            ";
            // line 16
            $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 16, $this->source); })()), [(isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 16, $this->source); })()) => twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 16, $this->source); })()), (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 16, $this->source); })()), [], "array", false, false, false, 16), [$context["child"]])]);
            // line 17
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
            // line 20
            echo "            <div class=\"attributes-group\" data-attribute-code=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
                <div class=\"attributes-header\">
                    <strong>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["attribute"], 0, [], "array", false, false, false, 22), "value", [], "any", false, false, false, 22), "vars", [], "any", false, false, false, 22), "label", [], "any", false, false, false, 22), "html", null, true);
            echo "</strong>
                    <div>
                        <button class=\"ui basic red labeled icon button\" data-attribute=\"delete\">
                            <i class=\"remove icon\"></i>";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.delete"), "html", null, true);
            echo "
                        </button>
                    </div>
                </div>
                <div class=\"attributes-list\">
                    ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["attribute"]);
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 31
                echo "                        ";
                echo twig_call_macro($macros["self"], "macro_collection_item", [$context["child"]], 31, $context, $this->getSourceContext());
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function macro_collection_item($__form__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "collection_item"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "collection_item"));

            // line 40
            echo "    ";
            $macros["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "@SyliusAdmin/Product/Attribute/attributesCollection.html.twig", 40)->unwrap();
            // line 41
            echo "
    <div class=\"attribute\" data-id=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "vars", [], "any", false, false, false, 42), "data", [], "any", false, false, false, 42), "attribute", [], "any", false, false, false, 42), "code", [], "any", false, false, false, 42), "html", null, true);
            echo "\">
        <div class=\"attribute-row\">
            <div class=\"attribute-label";
            // line 44
            if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "localeCode", [], "any", false, false, false, 44), "vars", [], "any", false, false, false, 44), "value", [], "any", false, false, false, 44) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "localeCode", [], "any", false, false, false, 44), "vars", [], "any", false, false, false, 44), "value", [], "any", false, false, false, 44) == (isset($context["sylius_base_locale"]) || array_key_exists("sylius_base_locale", $context) ? $context["sylius_base_locale"] : (function () { throw new RuntimeError('Variable "sylius_base_locale" does not exist.', 44, $this->source); })())))) {
                echo " required field";
            }
            echo "\">
                <label>
                    ";
            // line 46
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "localeCode", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "value", [], "any", false, false, false, 46)) {
                // line 47
                echo "                        <span class=\"language\">";
                echo twig_call_macro($macros["flags"], "macro_fromLocaleCode", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "localeCode", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "value", [], "any", false, false, false, 47)], 47, $context, $this->getSourceContext());
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getFilter('sylius_locale_name')->getCallable()(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "localeCode", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "value", [], "any", false, false, false, 47)), "html", null, true);
                echo "</span>
                        <br>
                    ";
            } else {
                // line 50
                echo "                        <i class=\"globe icon\"></i>
                    ";
            }
            // line 52
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "vars", [], "any", false, false, false, 52), "value", [], "any", false, false, false, 52), "attribute", [], "any", false, false, false, 52), "translation", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "vars", [], "any", false, false, false, 52), "value", [], "any", false, false, false, 52), "localeCode", [], "any", false, false, false, 52)], "method", false, false, false, 52), "name", [], "any", false, false, false, 52), "html", null, true);
            echo "
                </label>
            </div>
            <div class=\"attribute-input\" data-test-product-attribute-value-in-locale=\"";
            // line 55
            echo twig_escape_filter($this->env, twig_sprintf("%s %s", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "vars", [], "any", false, false, false, 55), "data", [], "any", false, false, false, 55), "attribute", [], "any", false, false, false, 55), "name", [], "any", false, false, false, 55), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "localeCode", [], "any", false, false, false, 55), "vars", [], "any", false, false, false, 55), "value", [], "any", false, false, false, 55)), "html", null, true);
            echo "\">
                <div ";
            // line 56
            echo ((twig_in_filter("checkbox", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "children", [], "any", false, false, false, 56), "value", [], "any", false, false, false, 56), "vars", [], "any", false, false, false, 56), "block_prefixes", [], "any", false, false, false, 56))) ? ("class=\"ui toggle checkbox\"") : (""));
            echo ">
                    ";
            // line 57
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "value", [], "any", false, false, false, 57), 'widget');
            echo "
                </div>
            </div>
            <div class=\"attribute-action\">
                ";
            // line 61
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "localeCode", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "value", [], "any", false, false, false, 61)) {
                // line 62
                echo "                    <a href=\"#\" class=\"ui basic button\" data-attribute=\"copy\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.apply_to_all"), "html", null, true);
                echo "</a>
                ";
            }
            // line 64
            echo "            </div>
            <div class=\"attribute-error\">
                ";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "value", [], "any", false, false, false, 66), 'errors');
            echo "
            </div>
        </div>
        <input type=\"hidden\" name=\"";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "attribute", [], "any", false, false, false, 69), "vars", [], "any", false, false, false, 69), "full_name", [], "any", false, false, false, 69), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "attribute", [], "any", false, false, false, 69), "vars", [], "any", false, false, false, 69), "id", [], "any", false, false, false, 69), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "vars", [], "any", false, false, false, 69), "data", [], "any", false, false, false, 69), "attribute", [], "any", false, false, false, 69), "code", [], "any", false, false, false, 69), "html", null, true);
            echo "\"/>
        <input type=\"hidden\" name=\"";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "localeCode", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), "full_name", [], "any", false, false, false, 70), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "localeCode", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), "id", [], "any", false, false, false, 70), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "localeCode", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), "value", [], "any", false, false, false, 70), "html", null, true);
            echo "\"/>
    </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Attribute/attributesCollection.html.twig";
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
        return array (  266 => 70,  258 => 69,  252 => 66,  248 => 64,  242 => 62,  240 => 61,  233 => 57,  229 => 56,  225 => 55,  218 => 52,  214 => 50,  205 => 47,  203 => 46,  196 => 44,  191 => 42,  188 => 41,  185 => 40,  166 => 39,  156 => 36,  148 => 33,  139 => 31,  135 => 30,  127 => 25,  121 => 22,  115 => 20,  111 => 19,  108 => 18,  102 => 17,  100 => 16,  97 => 15,  94 => 14,  91 => 13,  89 => 12,  86 => 11,  83 => 10,  79 => 9,  76 => 8,  74 => 7,  70 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@SyliusAdmin/Form/theme.html.twig' %}

{% block collection_widget -%}
    {% import _self as self %}

    <div>
        {% set attributes = {} %}

        {% for child in form %}
            {% set code = child.vars.data.attribute.code %}

            {% if attributes[code] is not defined %}
                {% set attributes = attributes|merge({ (code): [] }) %}
            {% endif %}

            {% set attributes = attributes|merge({ (code): attributes[code]|merge([child]) }) %}
        {% endfor %}

        {% for key, attribute in attributes %}
            <div class=\"attributes-group\" data-attribute-code=\"{{ key }}\">
                <div class=\"attributes-header\">
                    <strong>{{ attribute[0].value.vars.label }}</strong>
                    <div>
                        <button class=\"ui basic red labeled icon button\" data-attribute=\"delete\">
                            <i class=\"remove icon\"></i>{{ 'sylius.ui.delete'|trans }}
                        </button>
                    </div>
                </div>
                <div class=\"attributes-list\">
                    {% for child in attribute %}
                        {{ self.collection_item(child) }}
                    {% endfor %}
                </div>
            </div>
        {% endfor %}
    </div>
{%- endblock collection_widget %}

{% macro collection_item(form) %}
    {% import '@SyliusUi/Macro/flags.html.twig' as flags %}

    <div class=\"attribute\" data-id=\"{{ form.vars.data.attribute.code }}\">
        <div class=\"attribute-row\">
            <div class=\"attribute-label{% if not form.localeCode.vars.value or form.localeCode.vars.value == sylius_base_locale %} required field{% endif %}\">
                <label>
                    {% if form.localeCode.vars.value %}
                        <span class=\"language\">{{ flags.fromLocaleCode(form.localeCode.vars.value) }} {{ form.localeCode.vars.value|sylius_locale_name }}</span>
                        <br>
                    {% else %}
                        <i class=\"globe icon\"></i>
                    {% endif %}
                    {{ form.vars.value.attribute.translation(form.vars.value.localeCode).name }}
                </label>
            </div>
            <div class=\"attribute-input\" data-test-product-attribute-value-in-locale=\"{{ \"%s %s\"|format(form.vars.data.attribute.name, form.localeCode.vars.value) }}\">
                <div {{ 'checkbox' in form.children.value.vars.block_prefixes ? 'class=\"ui toggle checkbox\"' : '' }}>
                    {{ form_widget(form.value) }}
                </div>
            </div>
            <div class=\"attribute-action\">
                {% if form.localeCode.vars.value %}
                    <a href=\"#\" class=\"ui basic button\" data-attribute=\"copy\">{{ 'sylius.ui.apply_to_all'|trans }}</a>
                {% endif %}
            </div>
            <div class=\"attribute-error\">
                {{ form_errors(form.value) }}
            </div>
        </div>
        <input type=\"hidden\" name=\"{{ form.attribute.vars.full_name }}\" id=\"{{ form.attribute.vars.id }}\" value=\"{{ form.vars.data.attribute.code }}\"/>
        <input type=\"hidden\" name=\"{{ form.localeCode.vars.full_name }}\" id=\"{{ form.localeCode.vars.id }}\" value=\"{{ form.localeCode.vars.value }}\"/>
    </div>
{% endmacro %}
", "@SyliusAdmin/Product/Attribute/attributesCollection.html.twig", "/var/www/html/Sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Attribute/attributesCollection.html.twig");
    }
}
