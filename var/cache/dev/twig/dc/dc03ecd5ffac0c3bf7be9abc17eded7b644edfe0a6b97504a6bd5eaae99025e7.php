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

/* @SyliusAdmin/Product/Attribute/attributeValues.html.twig */
class __TwigTemplate_1e753064eb17603b970016950d0695b0423a1ffcbbdcc18f793535718d385674 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Attribute/attributeValues.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Attribute/attributeValues.html.twig"));

        // line 1
        $macros["self"] = $this->macros["self"] = $this;
        // line 2
        $macros["flags"] = $this->macros["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "@SyliusAdmin/Product/Attribute/attributeValues.html.twig", 2)->unwrap();
        // line 3
        echo "
";
        // line 4
        $context["subject"] = twig_replace_filter(twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), ["_attribute" => ""]);
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["code"] => $context["localeCodes"]) {
            // line 6
            echo "    <div class=\"attributes-group\" data-attribute-code=\"";
            echo twig_escape_filter($this->env, $context["code"], "html", null, true);
            echo "\">
        <div class=\"attributes-header\">
            <strong>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_first($this->env, $context["localeCodes"]), "vars", [], "any", false, false, false, 8), "label", [], "any", false, false, false, 8), "html", null, true);
            echo "</strong>
            <div>
                <button class=\"ui basic red labeled icon button\" data-attribute=\"delete\">
                    <i class=\"remove icon\"></i>";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.delete"), "html", null, true);
            echo "
                </button>
            </div>
        </div>
        <div class=\"attributes-list\">
            ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["localeCodes"]);
            foreach ($context['_seq'] as $context["localeCode"] => $context["form"]) {
                // line 17
                echo "                <div class=\"attribute\" data-id=\"";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\">
                    ";
                // line 18
                $context["id"] = twig_lower_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["form"], "vars", [], "any", false, false, false, 18), "label", [], "any", false, false, false, 18), [" " => "_"]));
                // line 19
                echo "                    <div class=\"attribute-row\">
                        <div class=\"attribute-label";
                // line 20
                if (( !$context["localeCode"] || ($context["localeCode"] == (isset($context["sylius_base_locale"]) || array_key_exists("sylius_base_locale", $context) ? $context["sylius_base_locale"] : (function () { throw new RuntimeError('Variable "sylius_base_locale" does not exist.', 20, $this->source); })())))) {
                    echo " required field";
                }
                echo "\">
                            <label>
                                ";
                // line 22
                if ($context["localeCode"]) {
                    // line 23
                    echo "                                    <span class=\"language\">";
                    echo twig_call_macro($macros["flags"], "macro_fromLocaleCode", [$context["localeCode"]], 23, $context, $this->getSourceContext());
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getFilter('sylius_locale_name')->getCallable()($context["localeCode"]), "html", null, true);
                    echo "</span>
                                    <br>
                                ";
                } else {
                    // line 26
                    echo "                                    <i class=\"globe icon\"></i>
                                ";
                }
                // line 28
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["form"], "vars", [], "any", false, false, false, 28), "label", [], "any", false, false, false, 28), "html", null, true);
                echo "
                            </label>
                        </div>
                        <div class=\"attribute-input\" data-test-product-attribute-value-in-locale=\"";
                // line 31
                echo twig_escape_filter($this->env, twig_sprintf("%s %s", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["form"], "vars", [], "any", false, false, false, 31), "label", [], "any", false, false, false, 31), $context["localeCode"]), "html", null, true);
                echo "\">
                            ";
                // line 32
                if (twig_in_filter("type_checkbox", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["form"], "vars", [], "any", false, false, false, 32), "cache_key", [], "any", false, false, false, 32))) {
                    // line 33
                    echo "                                <div class=\"ui toggle checkbox\">
                                    ";
                    // line 34
                    echo twig_call_macro($macros["self"], "macro_formField", [$context["form"], (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 34, $this->source); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 34, $this->source); })()), "", (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 34, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 34, $this->source); })()), "applicationName", [], "any", false, false, false, 34)], 34, $context, $this->getSourceContext());
                    echo "
                                    <label></label>
                                </div>
                            ";
                } else {
                    // line 38
                    echo "                                ";
                    echo twig_call_macro($macros["self"], "macro_formField", [$context["form"], (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 38, $this->source); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 38, $this->source); })()), "", (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 38, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 38, $this->source); })()), "applicationName", [], "any", false, false, false, 38)], 38, $context, $this->getSourceContext());
                    echo "
                            ";
                }
                // line 40
                echo "                        </div>
                        <div class=\"attribute-action\">
                            ";
                // line 42
                if ($context["localeCode"]) {
                    // line 43
                    echo "                                <a href=\"#\" class=\"ui basic button\" data-attribute=\"copy\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.apply_to_all"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 45
                echo "                        </div>
                    </div>
                    <input type=\"hidden\"
                           name=\"";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 48, $this->source); })()), "applicationName", [], "any", false, false, false, 48), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 48, $this->source); })()), "html", null, true);
                echo "[attributes][";
                echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 48, $this->source); })()), "html", null, true);
                echo "][attribute]\"
                           id=\"";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 49, $this->source); })()), "applicationName", [], "any", false, false, false, 49), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 49, $this->source); })()), "html", null, true);
                echo "_attributes_";
                echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 49, $this->source); })()), "html", null, true);
                echo "_attribute\"
                           value=\"";
                // line 50
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\"/>
                    <input type=\"hidden\"
                           name=\"";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 52, $this->source); })()), "applicationName", [], "any", false, false, false, 52), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 52, $this->source); })()), "html", null, true);
                echo "[attributes][";
                echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 52, $this->source); })()), "html", null, true);
                echo "][localeCode]\"
                           id=\"";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 53, $this->source); })()), "applicationName", [], "any", false, false, false, 53), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 53, $this->source); })()), "html", null, true);
                echo "_attributes_";
                echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 53, $this->source); })()), "html", null, true);
                echo "_localeCode\"
                           value=\"";
                // line 54
                echo twig_escape_filter($this->env, $context["localeCode"], "html", null, true);
                echo "\"/>
                    ";
                // line 55
                $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 55, $this->source); })()) + 1);
                // line 56
                echo "                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['localeCode'], $context['form'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['localeCodes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 62
    public function macro_formField($__item__ = null, $__count__ = null, $__id__ = null, $__prefix__ = null, $__subject__ = null, $__applicationName__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "count" => $__count__,
            "id" => $__id__,
            "prefix" => $__prefix__,
            "subject" => $__subject__,
            "applicationName" => $__applicationName__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "formField"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "formField"));

            // line 63
            echo "    ";
            $macros["__internal_parse_39"] = $this;
            // line 64
            echo "    ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 64, $this->source); })()), "children", [], "any", false, false, false, 64)) > 0)) {
                // line 65
                echo "        ";
                $context["prefix"] = (((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 65, $this->source); })()) . "_") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 65, $this->source); })()), "vars", [], "any", false, false, false, 65), "name", [], "any", false, false, false, 65));
                // line 66
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 66, $this->source); })()), "children", [], "any", false, false, false, 66));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 67
                    echo "            ";
                    echo twig_call_macro($macros["__internal_parse_39"], "macro_formField", [$context["child"], (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 67, $this->source); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 67, $this->source); })()), (isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 67, $this->source); })()), (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 67, $this->source); })()), (isset($context["applicationName"]) || array_key_exists("applicationName", $context) ? $context["applicationName"] : (function () { throw new RuntimeError('Variable "applicationName" does not exist.', 67, $this->source); })())], 67, $context, $this->getSourceContext());
                    echo "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 69, $this->source); })()), "vars", [], "any", false, false, false, 69), "name", [], "any", false, false, false, 69) != "_token")) {
                // line 70
                echo "        ";
                $context["namePrefix"] = twig_replace_filter((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 70, $this->source); })()), ["_" => "]["]);
                // line 71
                echo "        ";
                $context["dataName"] = (((((((((isset($context["applicationName"]) || array_key_exists("applicationName", $context) ? $context["applicationName"] : (function () { throw new RuntimeError('Variable "applicationName" does not exist.', 71, $this->source); })()) . "_") . (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 71, $this->source); })())) . "[attributes][") . (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 71, $this->source); })())) . (isset($context["namePrefix"]) || array_key_exists("namePrefix", $context) ? $context["namePrefix"] : (function () { throw new RuntimeError('Variable "namePrefix" does not exist.', 71, $this->source); })())) . "][") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 71, $this->source); })()), "vars", [], "any", false, false, false, 71), "name", [], "any", false, false, false, 71)) . "]");
                // line 72
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "vars", [], "any", false, true, false, 72), "multiple", [], "any", true, true, false, 72) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 72, $this->source); })()), "vars", [], "any", false, false, false, 72), "multiple", [], "any", false, false, false, 72))) {
                    // line 73
                    echo "            ";
                    $context["dataName"] = ((isset($context["dataName"]) || array_key_exists("dataName", $context) ? $context["dataName"] : (function () { throw new RuntimeError('Variable "dataName" does not exist.', 73, $this->source); })()) . "[]");
                    // line 74
                    echo "        ";
                }
                // line 75
                echo "
        ";
                // line 76
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 76, $this->source); })()), 'widget', ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 76, $this->source); })()), "attr" => ["data-name" => (isset($context["dataName"]) || array_key_exists("dataName", $context) ? $context["dataName"] : (function () { throw new RuntimeError('Variable "dataName" does not exist.', 76, $this->source); })())]]);
                echo "
    ";
            }
            
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
        return "@SyliusAdmin/Product/Attribute/attributeValues.html.twig";
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
        return array (  295 => 76,  292 => 75,  289 => 74,  286 => 73,  283 => 72,  280 => 71,  277 => 70,  274 => 69,  265 => 67,  260 => 66,  257 => 65,  254 => 64,  251 => 63,  227 => 62,  216 => 61,  208 => 58,  201 => 56,  199 => 55,  195 => 54,  187 => 53,  179 => 52,  174 => 50,  166 => 49,  158 => 48,  153 => 45,  147 => 43,  145 => 42,  141 => 40,  135 => 38,  128 => 34,  125 => 33,  123 => 32,  119 => 31,  112 => 28,  108 => 26,  99 => 23,  97 => 22,  90 => 20,  87 => 19,  85 => 18,  80 => 17,  76 => 16,  68 => 11,  62 => 8,  56 => 6,  52 => 5,  50 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import _self as self %}
{% import '@SyliusUi/Macro/flags.html.twig' as flags %}

{% set subject = metadata.name|replace({'_attribute': ''}) %}
{% for code, localeCodes in forms %}
    <div class=\"attributes-group\" data-attribute-code=\"{{ code }}\">
        <div class=\"attributes-header\">
            <strong>{{ (localeCodes|first).vars.label }}</strong>
            <div>
                <button class=\"ui basic red labeled icon button\" data-attribute=\"delete\">
                    <i class=\"remove icon\"></i>{{ 'sylius.ui.delete'|trans }}
                </button>
            </div>
        </div>
        <div class=\"attributes-list\">
            {% for localeCode, form in localeCodes %}
                <div class=\"attribute\" data-id=\"{{ code }}\">
                    {% set id = form.vars.label|replace({' ': '_'})|lower %}
                    <div class=\"attribute-row\">
                        <div class=\"attribute-label{% if not localeCode or localeCode == sylius_base_locale %} required field{% endif %}\">
                            <label>
                                {% if localeCode %}
                                    <span class=\"language\">{{ flags.fromLocaleCode(localeCode) }} {{ localeCode|sylius_locale_name }}</span>
                                    <br>
                                {% else %}
                                    <i class=\"globe icon\"></i>
                                {% endif %}
                                {{ form.vars.label }}
                            </label>
                        </div>
                        <div class=\"attribute-input\" data-test-product-attribute-value-in-locale=\"{{ \"%s %s\"|format(form.vars.label, localeCode) }}\">
                            {% if 'type_checkbox' in form.vars.cache_key %}
                                <div class=\"ui toggle checkbox\">
                                    {{ self.formField(form, count, id, '', subject, metadata.applicationName) }}
                                    <label></label>
                                </div>
                            {% else %}
                                {{ self.formField(form, count, id, '', subject, metadata.applicationName) }}
                            {% endif %}
                        </div>
                        <div class=\"attribute-action\">
                            {% if localeCode %}
                                <a href=\"#\" class=\"ui basic button\" data-attribute=\"copy\">{{ 'sylius.ui.apply_to_all'|trans }}</a>
                            {% endif %}
                        </div>
                    </div>
                    <input type=\"hidden\"
                           name=\"{{ metadata.applicationName }}_{{ subject }}[attributes][{{ count }}][attribute]\"
                           id=\"{{ metadata.applicationName }}_{{ subject }}_attributes_{{ count }}_attribute\"
                           value=\"{{ code }}\"/>
                    <input type=\"hidden\"
                           name=\"{{ metadata.applicationName }}_{{ subject }}[attributes][{{ count }}][localeCode]\"
                           id=\"{{ metadata.applicationName }}_{{ subject }}_attributes_{{ count }}_localeCode\"
                           value=\"{{ localeCode }}\"/>
                    {% set count = count + 1 %}
                </div>
            {% endfor %}
        </div>
    </div>
{% endfor %}

{% macro formField(item, count, id, prefix, subject, applicationName) %}
    {% from _self import formField %}
    {% if item.children|length > 0 %}
        {% set prefix = prefix~'_'~item.vars.name %}
        {% for child in item.children %}
            {{ formField(child, count, id, prefix, subject, applicationName) }}
        {% endfor %}
    {% elseif item.vars.name != '_token' %}
        {% set namePrefix = prefix|replace({'_': ']['}) %}
        {% set dataName = applicationName~'_'~subject~'[attributes]['~count~namePrefix~']['~item.vars.name~']' %}
        {% if item.vars.multiple is defined and item.vars.multiple %}
            {% set dataName = dataName~'[]' %}
        {% endif %}

        {{ form_widget(item, {'id': id, 'attr': {'data-name': dataName }}) }}
    {% endif %}
{% endmacro %}
", "@SyliusAdmin/Product/Attribute/attributeValues.html.twig", "/var/www/html/Sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Attribute/attributeValues.html.twig");
    }
}
