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

/* @SyliusAdmin/Product/Grid/Action/updatePositions.html.twig */
class __TwigTemplate_ad0346a40e0dad6a5aa19aa3678501a18d40029bbc3df42ffb64f7f0f448d9af extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Grid/Action/updatePositions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Grid/Action/updatePositions.html.twig"));

        // line 1
        echo "<form id=\"sylius-update-product-taxons\" class=\"sylius-update-product-taxons\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_taxons_update_position");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("update-product-taxon-position"), "html", null, true);
        echo "\" />
    <button class=\"ui labeled loadable icon button sylius-save-position\" type=\"submit\">
        <i class=\"icon checkmark\"></i>
        ";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.save_positions"), "html", null, true);
        echo "
    </button>
</form>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Grid/Action/updatePositions.html.twig";
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
        return array (  55 => 6,  49 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form id=\"sylius-update-product-taxons\" class=\"sylius-update-product-taxons\" action=\"{{ path('sylius_admin_product_taxons_update_position') }}\" method=\"post\">
    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('update-product-taxon-position') }}\" />
    <button class=\"ui labeled loadable icon button sylius-save-position\" type=\"submit\">
        <i class=\"icon checkmark\"></i>
        {{ 'sylius.ui.save_positions'|trans }}
    </button>
</form>
", "@SyliusAdmin/Product/Grid/Action/updatePositions.html.twig", "/var/www/html/Sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Grid/Action/updatePositions.html.twig");
    }
}
