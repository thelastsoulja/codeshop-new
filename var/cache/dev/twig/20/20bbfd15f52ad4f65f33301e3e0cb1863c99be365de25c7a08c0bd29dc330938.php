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

/* @SyliusAdmin/Product/Index/_content.html.twig */
class __TwigTemplate_39a1d0293084e1e258912035eb0c137fa43b5473c54c8b7a2379542b16975620 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Index/_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Index/_content.html.twig"));

        // line 1
        echo "<div class=\"ui two column stackable grid sticky-container\">
    <div class=\"sixteen wide mobile sixteen wide tablet three wide computer column sticky-column\">
        ";
        // line 3
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.product.index.content.sidebar", $context);
        echo "
    </div>
    <div class=\"sixteen wide mobile sixteen wide tablet thirteen wide computer column sylius-product-index\">
        ";
        // line 6
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.product.index.content.main", $context);
        echo "
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Index/_content.html.twig";
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
        return array (  53 => 6,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"ui two column stackable grid sticky-container\">
    <div class=\"sixteen wide mobile sixteen wide tablet three wide computer column sticky-column\">
        {{ sylius_template_event('sylius.admin.product.index.content.sidebar', _context) }}
    </div>
    <div class=\"sixteen wide mobile sixteen wide tablet thirteen wide computer column sylius-product-index\">
        {{ sylius_template_event('sylius.admin.product.index.content.main', _context) }}
    </div>
</div>
", "@SyliusAdmin/Product/Index/_content.html.twig", "/var/www/html/Sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Index/_content.html.twig");
    }
}
