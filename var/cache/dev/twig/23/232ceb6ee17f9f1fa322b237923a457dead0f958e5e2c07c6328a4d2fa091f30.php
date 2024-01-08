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

/* @SyliusCore/Email/adminPasswordReset.html.twig */
class __TwigTemplate_242e1ab678357611a2907332bf93277997f8a36ab67332993ee28c72fcfae3fa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'subject' => [$this, 'block_subject'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@SyliusCore/Email/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusCore/Email/adminPasswordReset.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusCore/Email/adminPasswordReset.html.twig"));

        $this->parent = $this->loadTemplate("@SyliusCore/Email/layout.html.twig", "@SyliusCore/Email/adminPasswordReset.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subject"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo "    ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.admin_password_reset.subject", [], null, (isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 4, $this->source); })()));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        // line 9
        echo "        <div style=\"font-family: sans-serif; background: #eee; padding-top: 30px; padding-bottom: 30px; font-size: 16px; color: #333; line-height: 1.5\">
            <div style=\"max-width: 600px; margin: 20px auto;\">
                <div style=\"margin-bottom: 30px; text-align: center;\">
                    ";
        // line 12
        if ((isset($context["use_webpack"]) || array_key_exists("use_webpack", $context) ? $context["use_webpack"] : (function () { throw new RuntimeError('Variable "use_webpack" does not exist.', 12, $this->source); })())) {
            // line 13
            echo "                        <img src=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/admin/images/logo.png", "admin"));
            echo "\" alt=\"Sylius\" style=\"width: 170px\">
                    ";
        } else {
            // line 15
            echo "                        <img src=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/img/logo.png"));
            echo "\" alt=\"Sylius\" style=\"width: 170px\">
                    ";
        }
        // line 17
        echo "                </div>

                <div style=\"background: #fff; padding: 40px 30px;\">
                    ";
        // line 20
        $this->displayBlock("content", $context, $blocks);
        echo "
                </div>

                <div style=\"text-align: center; padding: 20px 0;\">
                    <a href=\"https://sylius.com\" target=\"_blank\" style=\"color: #1abb9c; text-decoration: none;\">sylius.com</a>
                </div>
            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 32
        echo "    <div style=\"text-align: center; margin-bottom: 30px;\">
        <div style=\"font-size: 24px;\">
            ";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.admin_password_reset.hello", [], null, (isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 34, $this->source); })())), "html", null, true);
        echo " <strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adminUser"]) || array_key_exists("adminUser", $context) ? $context["adminUser"] : (function () { throw new RuntimeError('Variable "adminUser" does not exist.', 34, $this->source); })()), "firstName", [], "any", false, false, false, 34), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adminUser"]) || array_key_exists("adminUser", $context) ? $context["adminUser"] : (function () { throw new RuntimeError('Variable "adminUser" does not exist.', 34, $this->source); })()), "lastName", [], "any", false, false, false, 34), "html", null, true);
        echo "</strong><br>
        </div>
        ";
        // line 36
        if ($this->extensions['Sylius\Bundle\CoreBundle\Twig\BundleLoadedCheckerExtension']->isBundleLoaded("SyliusAdminBundle")) {
            // line 37
            echo "            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.password_reset.to_reset_your_password", [], null, (isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 37, $this->source); })())), "html", null, true);
            echo ":
        ";
        } else {
            // line 39
            echo "            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.admin_password_reset.to_reset_your_password_token", [], null, (isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 39, $this->source); })())), "html", null, true);
            echo ":
        ";
        }
        // line 41
        echo "    </div>

    <div style=\"text-align: center;\">
        ";
        // line 44
        if ($this->extensions['Sylius\Bundle\CoreBundle\Twig\BundleLoadedCheckerExtension']->isBundleLoaded("SyliusAdminBundle")) {
            // line 45
            echo "            ";
            $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_admin_render_password_reset", ["token" => twig_get_attribute($this->env, $this->source, (isset($context["adminUser"]) || array_key_exists("adminUser", $context) ? $context["adminUser"] : (function () { throw new RuntimeError('Variable "adminUser" does not exist.', 45, $this->source); })()), "passwordResetToken", [], "any", false, false, false, 45)]);
            // line 46
            echo "            <a href=\"";
            echo (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 46, $this->source); })());
            echo "\" style=\"display: inline-block; text-align: center; background: #1abb9c; padding: 18px 28px; color: #fff; text-decoration: none; border-radius: 3px;\">
                ";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.admin_password_reset.reset_your_password", [], null, (isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 47, $this->source); })())), "html", null, true);
            echo "
            </a>
        ";
        } else {
            // line 50
            echo "            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.email.admin_password_reset.token", [], null, (isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 50, $this->source); })())), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adminUser"]) || array_key_exists("adminUser", $context) ? $context["adminUser"] : (function () { throw new RuntimeError('Variable "adminUser" does not exist.', 50, $this->source); })()), "passwordResetToken", [], "any", false, false, false, 50), "html", null, true);
            echo "
        ";
        }
        // line 52
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SyliusCore/Email/adminPasswordReset.html.twig";
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
        return array (  204 => 52,  196 => 50,  190 => 47,  185 => 46,  182 => 45,  180 => 44,  175 => 41,  169 => 39,  163 => 37,  161 => 36,  152 => 34,  148 => 32,  138 => 31,  119 => 20,  114 => 17,  108 => 15,  102 => 13,  100 => 12,  95 => 9,  93 => 8,  83 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@SyliusCore/Email/layout.html.twig' %}

{% block subject %}
    {{ 'sylius.email.admin_password_reset.subject'|trans({}, null, localeCode)|raw }}
{% endblock %}

{% block body %}
    {% autoescape false %}
        <div style=\"font-family: sans-serif; background: #eee; padding-top: 30px; padding-bottom: 30px; font-size: 16px; color: #333; line-height: 1.5\">
            <div style=\"max-width: 600px; margin: 20px auto;\">
                <div style=\"margin-bottom: 30px; text-align: center;\">
                    {% if use_webpack %}
                        <img src=\"{{ absolute_url(asset('build/admin/images/logo.png', 'admin')) }}\" alt=\"Sylius\" style=\"width: 170px\">
                    {% else %}
                        <img src=\"{{ absolute_url(asset('assets/admin/img/logo.png')) }}\" alt=\"Sylius\" style=\"width: 170px\">
                    {% endif %}
                </div>

                <div style=\"background: #fff; padding: 40px 30px;\">
                    {{ block(\"content\") }}
                </div>

                <div style=\"text-align: center; padding: 20px 0;\">
                    <a href=\"https://sylius.com\" target=\"_blank\" style=\"color: #1abb9c; text-decoration: none;\">sylius.com</a>
                </div>
            </div>
        </div>
    {% endautoescape %}
{% endblock %}

{% block content %}
    <div style=\"text-align: center; margin-bottom: 30px;\">
        <div style=\"font-size: 24px;\">
            {{ 'sylius.email.admin_password_reset.hello'|trans({}, null, localeCode) }} <strong>{{ adminUser.firstName }} {{ adminUser.lastName }}</strong><br>
        </div>
        {% if sylius_bundle_loaded_checker('SyliusAdminBundle') %}
            {{ 'sylius.email.password_reset.to_reset_your_password'|trans({}, null, localeCode) }}:
        {% else %}
            {{ 'sylius.email.admin_password_reset.to_reset_your_password_token'|trans({}, null, localeCode) }}:
        {% endif %}
    </div>

    <div style=\"text-align: center;\">
        {% if sylius_bundle_loaded_checker('SyliusAdminBundle') %}
            {% set url = url('sylius_admin_render_password_reset', {'token': adminUser.passwordResetToken}) %}
            <a href=\"{{ url|raw }}\" style=\"display: inline-block; text-align: center; background: #1abb9c; padding: 18px 28px; color: #fff; text-decoration: none; border-radius: 3px;\">
                {{ 'sylius.email.admin_password_reset.reset_your_password'|trans({}, null, localeCode) }}
            </a>
        {% else %}
            {{ 'sylius.email.admin_password_reset.token'|trans({}, null, localeCode) }}: {{ adminUser.passwordResetToken }}
        {% endif %}
    </div>
{% endblock %}
", "@SyliusCore/Email/adminPasswordReset.html.twig", "/var/www/html/Sylius/src/Sylius/Bundle/CoreBundle/Resources/views/Email/adminPasswordReset.html.twig");
    }
}
