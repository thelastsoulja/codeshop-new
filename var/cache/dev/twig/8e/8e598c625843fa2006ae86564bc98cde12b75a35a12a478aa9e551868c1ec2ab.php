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

/* @SyliusAdmin/Product/_position.html.twig */
class __TwigTemplate_4254e96f64bea7de5ed8c36901356afdb56c0a95f313f458d9cb78ffa32fa482 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/_position.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/_position.html.twig"));

        // line 1
        if ((isset($context["taxonId"]) || array_key_exists("taxonId", $context) ? $context["taxonId"] : (function () { throw new RuntimeError('Variable "taxonId" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 2, $this->source); })()), "productTaxons", [], "any", false, false, false, 2));
            foreach ($context['_seq'] as $context["_key"] => $context["productTaxon"]) {
                // line 3
                echo "        ";
                if (((isset($context["taxonId"]) || array_key_exists("taxonId", $context) ? $context["taxonId"] : (function () { throw new RuntimeError('Variable "taxonId" does not exist.', 3, $this->source); })()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productTaxon"], "taxon", [], "any", false, false, false, 3), "id", [], "any", false, false, false, 3))) {
                    // line 4
                    echo "            <div style=\"width: 100%; text-align: center;\">
                <div class=\"ui input position\" style=\"width: 50px;\">
                    <input
                        type=\"text\"
                        value=\"";
                    // line 8
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productTaxon"], "position", [], "any", false, false, false, 8), "html", null, true);
                    echo "\"
                        name=\"productTaxons[";
                    // line 9
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productTaxon"], "id", [], "any", false, false, false, 9), "html", null, true);
                    echo "]\"
                        form=\"sylius-update-product-taxons\"
                        class=\"sylius-product-taxon-position\"
                        style=\"text-align: center;\"
                        ";
                    // line 13
                    echo $this->env->getFunction('sylius_test_html_attribute')->getCallable()("product-name", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productTaxon"], "product", [], "any", false, false, false, 13), "name", [], "any", false, false, false, 13));
                    echo "
                    />
                </div>
            </div>
        ";
                }
                // line 18
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productTaxon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/_position.html.twig";
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
        return array (  78 => 18,  70 => 13,  63 => 9,  59 => 8,  53 => 4,  50 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if taxonId %}
    {% for productTaxon in product.productTaxons%}
        {% if taxonId == productTaxon.taxon.id %}
            <div style=\"width: 100%; text-align: center;\">
                <div class=\"ui input position\" style=\"width: 50px;\">
                    <input
                        type=\"text\"
                        value=\"{{ productTaxon.position }}\"
                        name=\"productTaxons[{{ productTaxon.id }}]\"
                        form=\"sylius-update-product-taxons\"
                        class=\"sylius-product-taxon-position\"
                        style=\"text-align: center;\"
                        {{ sylius_test_html_attribute('product-name', productTaxon.product.name) }}
                    />
                </div>
            </div>
        {% endif %}
    {% endfor %}
{% endif %}
", "@SyliusAdmin/Product/_position.html.twig", "/var/www/html/Sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/_position.html.twig");
    }
}
