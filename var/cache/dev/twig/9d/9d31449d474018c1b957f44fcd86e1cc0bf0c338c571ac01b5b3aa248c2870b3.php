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

/* @SyliusShop/Product/Show/_images.html.twig */
class __TwigTemplate_34efb7f596fdf2d158756232b14e22c3ff373a636baad19d16909a19b464f9d1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_images.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_images.html.twig"));

        // line 1
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 1, $this->source); })()), "imagesByType", ["main"], "method", false, false, false, 1))) {
            // line 2
            echo "    ";
            $context["source_path"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 2, $this->source); })()), "imagesByType", ["main"], "method", false, false, false, 2), "first", [], "any", false, false, false, 2), "path", [], "any", false, false, false, 2);
            // line 3
            echo "    ";
            $context["original_path"] = $this->extensions['Sylius\Bundle\CoreBundle\Twig\FilterExtension']->filter((isset($context["source_path"]) || array_key_exists("source_path", $context) ? $context["source_path"] : (function () { throw new RuntimeError('Variable "source_path" does not exist.', 3, $this->source); })()), "sylius_shop_product_original");
            // line 4
            echo "    ";
            $context["path"] = $this->extensions['Sylius\Bundle\CoreBundle\Twig\FilterExtension']->filter((isset($context["source_path"]) || array_key_exists("source_path", $context) ? $context["source_path"] : (function () { throw new RuntimeError('Variable "source_path" does not exist.', 4, $this->source); })()), ((array_key_exists("filter", $context)) ? (_twig_default_filter((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 4, $this->source); })()), "sylius_shop_product_large_thumbnail")) : ("sylius_shop_product_large_thumbnail")));
        } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 5, $this->source); })()), "images", [], "any", false, false, false, 5), "first", [], "any", false, false, false, 5)) {
            // line 6
            echo "    ";
            $context["source_path"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 6, $this->source); })()), "images", [], "any", false, false, false, 6), "first", [], "any", false, false, false, 6), "path", [], "any", false, false, false, 6);
            // line 7
            echo "    ";
            $context["original_path"] = $this->extensions['Sylius\Bundle\CoreBundle\Twig\FilterExtension']->filter((isset($context["source_path"]) || array_key_exists("source_path", $context) ? $context["source_path"] : (function () { throw new RuntimeError('Variable "source_path" does not exist.', 7, $this->source); })()), "sylius_shop_product_original");
            // line 8
            echo "    ";
            $context["path"] = $this->extensions['Sylius\Bundle\CoreBundle\Twig\FilterExtension']->filter((isset($context["source_path"]) || array_key_exists("source_path", $context) ? $context["source_path"] : (function () { throw new RuntimeError('Variable "source_path" does not exist.', 8, $this->source); })()), ((array_key_exists("filter", $context)) ? (_twig_default_filter((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 8, $this->source); })()), "sylius_shop_product_large_thumbnail")) : ("sylius_shop_product_large_thumbnail")));
        } else {
            // line 10
            echo "    ";
            if ((isset($context["use_webpack"]) || array_key_exists("use_webpack", $context) ? $context["use_webpack"] : (function () { throw new RuntimeError('Variable "use_webpack" does not exist.', 10, $this->source); })())) {
                // line 11
                echo "        ";
                $context["original_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/shop/images/400x300.png", "shop");
                // line 12
                echo "    ";
            } else {
                // line 13
                echo "        ";
                $context["original_path"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/shop/img/400x300.png");
                // line 14
                echo "    ";
            }
            // line 15
            echo "    ";
            $context["path"] = (isset($context["original_path"]) || array_key_exists("original_path", $context) ? $context["original_path"] : (function () { throw new RuntimeError('Variable "original_path" does not exist.', 15, $this->source); })());
        }
        // line 17
        echo "
<div data-product-image=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\" data-product-link=\"";
        echo twig_escape_filter($this->env, (isset($context["original_path"]) || array_key_exists("original_path", $context) ? $context["original_path"] : (function () { throw new RuntimeError('Variable "original_path" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\"></div>
<a href=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["original_path"]) || array_key_exists("original_path", $context) ? $context["original_path"] : (function () { throw new RuntimeError('Variable "original_path" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "\" class=\"ui fluid image\" data-lightbox=\"sylius-product-image\">
    <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\" id=\"main-image\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "\" ";
        echo $this->env->getFunction('sylius_test_html_attribute')->getCallable()("main-image");
        echo " />
</a>
";
        // line 22
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 22, $this->source); })()), "images", [], "any", false, false, false, 22)) > 1)) {
            // line 23
            echo "<div class=\"ui divider\"></div>

";
            // line 25
            echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.shop.product.show.before_thumbnails", ["product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 25, $this->source); })())]);
            echo "

<div class=\"ui small images\">
    ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 28, $this->source); })()), "images", [], "any", false, false, false, 28));
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
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 29
                echo "    ";
                if ((isset($context["use_webpack"]) || array_key_exists("use_webpack", $context) ? $context["use_webpack"] : (function () { throw new RuntimeError('Variable "use_webpack" does not exist.', 29, $this->source); })())) {
                    // line 30
                    echo "        ";
                    $context["path"] = (( !(null === twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 30))) ? ($this->extensions['Sylius\Bundle\CoreBundle\Twig\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 30), "sylius_shop_product_small_thumbnail")) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/shop/images/200x200.png")));
                    // line 31
                    echo "    ";
                } else {
                    // line 32
                    echo "        ";
                    $context["path"] = (( !(null === twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 32))) ? ($this->extensions['Sylius\Bundle\CoreBundle\Twig\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 32), "sylius_shop_product_small_thumbnail")) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/shop/img/200x200.png")));
                    // line 33
                    echo "    ";
                }
                // line 34
                echo "    <div class=\"ui image\">
    ";
                // line 35
                if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 35, $this->source); })()), "isConfigurable", [], "method", false, false, false, 35) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 35, $this->source); })()), "enabledVariants", [], "any", false, false, false, 35)) > 0))) {
                    // line 36
                    echo "        ";
                    $this->loadTemplate("@SyliusShop/Product/Show/_imageVariants.html.twig", "@SyliusShop/Product/Show/_images.html.twig", 36)->display($context);
                    // line 37
                    echo "    ";
                }
                // line 38
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Sylius\Bundle\CoreBundle\Twig\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 38), "sylius_shop_product_original"), "html", null, true);
                echo "\" data-lightbox=\"sylius-product-image\">
            <img src=\"";
                // line 39
                echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 39, $this->source); })()), "html", null, true);
                echo "\" data-large-thumbnail=\"";
                echo twig_escape_filter($this->env, $this->extensions['Sylius\Bundle\CoreBundle\Twig\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 39), "sylius_shop_product_large_thumbnail"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39), "html", null, true);
                echo "\" />
        </a>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "</div>
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
        return "@SyliusShop/Product/Show/_images.html.twig";
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
        return array (  189 => 43,  167 => 39,  162 => 38,  159 => 37,  156 => 36,  154 => 35,  151 => 34,  148 => 33,  145 => 32,  142 => 31,  139 => 30,  136 => 29,  119 => 28,  113 => 25,  109 => 23,  107 => 22,  98 => 20,  94 => 19,  88 => 18,  85 => 17,  81 => 15,  78 => 14,  75 => 13,  72 => 12,  69 => 11,  66 => 10,  62 => 8,  59 => 7,  56 => 6,  54 => 5,  51 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if product.imagesByType('main') is not empty %}
    {% set source_path = product.imagesByType('main').first.path %}
    {% set original_path = source_path|imagine_filter('sylius_shop_product_original') %}
    {% set path = source_path|imagine_filter(filter|default('sylius_shop_product_large_thumbnail')) %}
{% elseif product.images.first %}
    {% set source_path = product.images.first.path %}
    {% set original_path = source_path|imagine_filter('sylius_shop_product_original') %}
    {% set path = source_path|imagine_filter(filter|default('sylius_shop_product_large_thumbnail')) %}
{% else %}
    {% if use_webpack %}
        {% set original_path = asset('build/shop/images/400x300.png', 'shop') %}
    {% else %}
        {% set original_path = asset('assets/shop/img/400x300.png') %}
    {% endif %}
    {% set path = original_path %}
{% endif %}

<div data-product-image=\"{{ path }}\" data-product-link=\"{{ original_path }}\"></div>
<a href=\"{{ original_path }}\" class=\"ui fluid image\" data-lightbox=\"sylius-product-image\">
    <img src=\"{{ path }}\" id=\"main-image\" alt=\"{{ product.name }}\" {{ sylius_test_html_attribute('main-image') }} />
</a>
{% if product.images|length > 1 %}
<div class=\"ui divider\"></div>

{{ sylius_template_event('sylius.shop.product.show.before_thumbnails', {'product': product}) }}

<div class=\"ui small images\">
    {% for image in product.images %}
    {% if use_webpack %}
        {% set path = image.path is not null ? image.path|imagine_filter('sylius_shop_product_small_thumbnail') : asset('build/shop/images/200x200.png') %}
    {% else %}
        {% set path = image.path is not null ? image.path|imagine_filter('sylius_shop_product_small_thumbnail') : asset('assets/shop/img/200x200.png') %}
    {% endif %}
    <div class=\"ui image\">
    {% if product.isConfigurable() and product.enabledVariants|length > 0 %}
        {% include '@SyliusShop/Product/Show/_imageVariants.html.twig' %}
    {% endif %}
        <a href=\"{{ image.path|imagine_filter('sylius_shop_product_original') }}\" data-lightbox=\"sylius-product-image\">
            <img src=\"{{ path }}\" data-large-thumbnail=\"{{ image.path|imagine_filter('sylius_shop_product_large_thumbnail') }}\" alt=\"{{ product.name }}\" />
        </a>
    </div>
    {% endfor %}
</div>
{% endif %}
", "@SyliusShop/Product/Show/_images.html.twig", "/var/www/html/Sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_images.html.twig");
    }
}
