<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductVariantPriceMapProviderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'Sylius\Component\Core\Provider\ProductVariantMap\ProductVariantPriceMapProvider' shared service.
     *
     * @return \Sylius\Component\Core\Provider\ProductVariantMap\ProductVariantPriceMapProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Provider/ProductVariantMap/ProductVariantMapProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Provider/ProductVariantMap/ProductVariantPriceMapProvider.php';

        return $container->privates['Sylius\\Component\\Core\\Provider\\ProductVariantMap\\ProductVariantPriceMapProvider'] = new \Sylius\Component\Core\Provider\ProductVariantMap\ProductVariantPriceMapProvider(($container->services['sylius.calculator.product_variant_price'] ?? $container->getSylius_Calculator_ProductVariantPriceService()));
    }
}
