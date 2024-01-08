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

/* @SyliusAdmin/AdminUser/Form/_avatar.html.twig */
class __TwigTemplate_0a021eb50b5feaac3eb442aeeb6debf40ad409a2aa8f6dba8b12cd920baad0a6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/AdminUser/Form/_avatar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/AdminUser/Form/_avatar.html.twig"));

        // line 1
        echo "<div class=\"field\" id=\"add-avatar\">
    <label>";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.avatar"), "html", null, true);
        echo "</label>
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "avatar", [], "any", false, false, false, 3), 'row', ["label" => false]);
        echo "
</div>
";
        // line 5
        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["admin_user"]) || array_key_exists("admin_user", $context) ? $context["admin_user"] : (function () { throw new RuntimeError('Variable "admin_user" does not exist.', 5, $this->source); })()), "avatar", [], "any", false, false, false, 5)) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["admin_user"]) || array_key_exists("admin_user", $context) ? $context["admin_user"] : (function () { throw new RuntimeError('Variable "admin_user" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5)))) {
            // line 6
            echo "    <button
        formaction=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_admin_user_remove_avatar", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["admin_user"]) || array_key_exists("admin_user", $context) ? $context["admin_user"] : (function () { throw new RuntimeError('Variable "admin_user" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "_csrf_token" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_get_attribute($this->env, $this->source, (isset($context["admin_user"]) || array_key_exists("admin_user", $context) ? $context["admin_user"] : (function () { throw new RuntimeError('Variable "admin_user" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7))]), "html", null, true);
            echo "\"
        type=\"submit\"
        class=\"ui icon red labeled button\"
    >
        <i class=\"icon trash\"></i> ";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.delete"), "html", null, true);
            echo "
    </button>
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
        return "@SyliusAdmin/AdminUser/Form/_avatar.html.twig";
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
        return array (  67 => 11,  60 => 7,  57 => 6,  55 => 5,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"field\" id=\"add-avatar\">
    <label>{{ 'sylius.ui.avatar'|trans }}</label>
    {{ form_row(form.avatar, {'label': false}) }}
</div>
{% if admin_user.avatar is not null and admin_user.id is not null %}
    <button
        formaction=\"{{ path('sylius_admin_admin_user_remove_avatar', {'id': admin_user.id, '_csrf_token': csrf_token(admin_user.id)}) }}\"
        type=\"submit\"
        class=\"ui icon red labeled button\"
    >
        <i class=\"icon trash\"></i> {{ 'sylius.ui.delete'|trans }}
    </button>
{% endif %}
", "@SyliusAdmin/AdminUser/Form/_avatar.html.twig", "/var/www/html/Sylius/src/Sylius/Bundle/AdminBundle/Resources/views/AdminUser/Form/_avatar.html.twig");
    }
}
