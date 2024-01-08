<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCatalogPromotionScopeTypeExtensionService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\AdminBundle\Form\Extension\CatalogPromotionScopeTypeExtension' shared service.
     *
     * @return \Sylius\Bundle\AdminBundle\Form\Extension\CatalogPromotionScopeTypeExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/AdminBundle/Form/Extension/CatalogPromotionScopeTypeExtension.php';

        $a = ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService());

        if (isset($container->privates['Sylius\\Bundle\\AdminBundle\\Form\\Extension\\CatalogPromotionScopeTypeExtension'])) {
            return $container->privates['Sylius\\Bundle\\AdminBundle\\Form\\Extension\\CatalogPromotionScopeTypeExtension'];
        }

        return $container->privates['Sylius\\Bundle\\AdminBundle\\Form\\Extension\\CatalogPromotionScopeTypeExtension'] = new \Sylius\Bundle\AdminBundle\Form\Extension\CatalogPromotionScopeTypeExtension(new RewindableGenerator(function () use ($container) {
            yield 'for_products' => ($container->services['sylius.form.type.for_products_scope'] ?? $container->load('getSylius_Form_Type_ForProductsScopeService'));
            yield 'for_taxons' => ($container->services['sylius.form.type.for_taxons_scope'] ?? $container->load('getSylius_Form_Type_ForTaxonsScopeService'));
            yield 'for_variants' => ($container->services['sylius.form.type.for_variants_scope'] ?? $container->load('getSylius_Form_Type_ForVariantsScopeService'));
        }, 3), $a);
    }
}
