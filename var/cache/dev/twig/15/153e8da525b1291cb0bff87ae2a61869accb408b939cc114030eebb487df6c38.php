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

/* @SyliusAdmin/Layout/_channelLinks.html.twig */
class __TwigTemplate_6c6053471811bb41bdf1c1368ef0b611d9f42d94eec0f4a50fe6df68a7ef16ab extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Layout/_channelLinks.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Layout/_channelLinks.html.twig"));

        // line 1
        $context["homepage_path"] = (($this->extensions['Sylius\Bundle\CoreBundle\Twig\BundleLoadedCheckerExtension']->isBundleLoaded("SyliusShopBundle")) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_homepage")) : ("/"));
        // line 2
        echo "
";
        // line 3
        if ((twig_length_filter($this->env, (isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new RuntimeError('Variable "channels" does not exist.', 3, $this->source); })())) > 1)) {
            // line 4
            echo "    <div class=\"ui simple dropdown item\">
        <span>
            ";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.view_your_store"), "html", null, true);
            echo "
        </span>
        <i class=\"dropdown icon\"></i>
        <div class=\"menu\">
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new RuntimeError('Variable "channels" does not exist.', 10, $this->source); })()), function ($__channel__) use ($context, $macros) { $context["channel"] = $__channel__; return  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["channel"], "hostname", [], "any", false, false, false, 10)); }));
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
            foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                // line 11
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Sylius\Bundle\CoreBundle\Twig\ChannelUrlExtension']->generateChannelUrl((isset($context["homepage_path"]) || array_key_exists("homepage_path", $context) ? $context["homepage_path"] : (function () { throw new RuntimeError('Variable "homepage_path" does not exist.', 11, $this->source); })()), $context["channel"]), "html", null, true);
                echo "\" target=\"_blank\" class=\"item\">
                ";
                // line 12
                $this->loadTemplate("@SyliusAdmin/Common/_channel.html.twig", "@SyliusAdmin/Layout/_channelLinks.html.twig", 12)->display($context);
                // line 13
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        </div>
    </div>
";
        } elseif ((twig_length_filter($this->env,         // line 17
(isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new RuntimeError('Variable "channels" does not exist.', 17, $this->source); })())) == 1)) {
            // line 18
            echo "    ";
            $context["channel"] = twig_first($this->env, (isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new RuntimeError('Variable "channels" does not exist.', 18, $this->source); })()));
            // line 19
            echo "
    <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Sylius\Bundle\CoreBundle\Twig\ChannelUrlExtension']->generateChannelUrl((isset($context["homepage_path"]) || array_key_exists("homepage_path", $context) ? $context["homepage_path"] : (function () { throw new RuntimeError('Variable "homepage_path" does not exist.', 20, $this->source); })()), (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 20, $this->source); })())), "html", null, true);
            echo "\" target=\"_blank\" class=\"item\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.view_your_store"), "html", null, true);
            echo "</a>
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
        return "@SyliusAdmin/Layout/_channelLinks.html.twig";
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
        return array (  112 => 20,  109 => 19,  106 => 18,  104 => 17,  100 => 15,  85 => 13,  83 => 12,  78 => 11,  61 => 10,  54 => 6,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set homepage_path = sylius_bundle_loaded_checker('SyliusShopBundle') ? path('sylius_shop_homepage') : '/' %}

{% if channels|length > 1 %}
    <div class=\"ui simple dropdown item\">
        <span>
            {{ 'sylius.ui.view_your_store'|trans }}
        </span>
        <i class=\"dropdown icon\"></i>
        <div class=\"menu\">
            {% for channel in channels|filter(channel => channel.hostname is not empty) %}
            <a href=\"{{ sylius_channel_url(homepage_path, channel) }}\" target=\"_blank\" class=\"item\">
                {% include '@SyliusAdmin/Common/_channel.html.twig' %}
            </a>
            {% endfor %}
        </div>
    </div>
{% elseif channels|length == 1 %}
    {% set channel = channels|first %}

    <a href=\"{{ sylius_channel_url(homepage_path, channel) }}\" target=\"_blank\" class=\"item\">{{ 'sylius.ui.view_your_store'|trans }}</a>
{% endif %}
", "@SyliusAdmin/Layout/_channelLinks.html.twig", "/var/www/html/Sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Layout/_channelLinks.html.twig");
    }
}
