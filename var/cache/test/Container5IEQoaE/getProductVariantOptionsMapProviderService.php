<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductVariantOptionsMapProviderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'Sylius\Component\Core\Provider\ProductVariantMap\ProductVariantOptionsMapProvider' shared service.
     *
     * @return \Sylius\Component\Core\Provider\ProductVariantMap\ProductVariantOptionsMapProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Provider/ProductVariantMap/ProductVariantMapProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Provider/ProductVariantMap/ProductVariantOptionsMapProvider.php';

        return $container->privates['Sylius\\Component\\Core\\Provider\\ProductVariantMap\\ProductVariantOptionsMapProvider'] = new \Sylius\Component\Core\Provider\ProductVariantMap\ProductVariantOptionsMapProvider();
    }
}
