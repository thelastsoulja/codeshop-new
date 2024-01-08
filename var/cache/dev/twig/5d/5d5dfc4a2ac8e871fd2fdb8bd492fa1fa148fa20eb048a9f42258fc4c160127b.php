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

/* @SyliusUi/Form/Buttons/_create.html.twig */
class __TwigTemplate_ab8b0f6b92cad8b2b2f2528e94783c031963318c50ac05ae63571130d5ce3363 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Form/Buttons/_create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Form/Buttons/_create.html.twig"));

        // line 1
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["paths"]) || array_key_exists("paths", $context) ? $context["paths"] : (function () { throw new RuntimeError('Variable "paths" does not exist.', 1, $this->source); })()), "cancel", [], "any", false, false, false, 1))) {
            // line 2
            echo "    ";
            $context["cancelPath"] = twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paths"]) || array_key_exists("paths", $context) ? $context["paths"] : (function () { throw new RuntimeError('Variable "paths" does not exist.', 2, $this->source); })()), "cancel", [], "any", false, false, false, 2), "?"), 0, [], "array", false, false, false, 2);
        } else {
            // line 4
            echo "    ";
            $context["cancelPath"] = null;
        }
        // line 6
        echo "
<div class=\"ui hidden divider\"></div>
<div class=\"ui buttons\">
    <button class=\"ui labeled icon primary button\" type=\"submit\"><i class=\"plus icon\"></i>";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.create"), "html", null, true);
        echo "</button>
    ";
        // line 10
        $this->loadTemplate("@SyliusUi/Form/Buttons/_cancel.html.twig", "@SyliusUi/Form/Buttons/_create.html.twig", 10)->display(twig_array_merge($context, ["path" => $this->extensions['Sylius\Bundle\UiBundle\Twig\RedirectPathExtension']->generateRedirectPath((isset($context["cancelPath"]) || array_key_exists("cancelPath", $context) ? $context["cancelPath"] : (function () { throw new RuntimeError('Variable "cancelPath" does not exist.', 10, $this->source); })()))]));
        // line 11
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
        return "@SyliusUi/Form/Buttons/_create.html.twig";
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
        return array (  64 => 11,  62 => 10,  58 => 9,  53 => 6,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if paths.cancel is not null %}
    {% set cancelPath = paths.cancel|split('?')[0] %}
{% else %}
    {% set cancelPath = null %}
{% endif %}

<div class=\"ui hidden divider\"></div>
<div class=\"ui buttons\">
    <button class=\"ui labeled icon primary button\" type=\"submit\"><i class=\"plus icon\"></i>{{- 'sylius.ui.create'|trans -}}</button>
    {% include '@SyliusUi/Form/Buttons/_cancel.html.twig' with {'path': sylius_generate_redirect_path(cancelPath)} %}
</div>
", "@SyliusUi/Form/Buttons/_create.html.twig", "/var/www/html/Sylius/src/Sylius/Bundle/UiBundle/Resources/views/Form/Buttons/_create.html.twig");
    }
}
