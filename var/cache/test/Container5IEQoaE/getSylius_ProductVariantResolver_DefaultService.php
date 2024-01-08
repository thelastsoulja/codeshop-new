<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_ProductVariantResolver_DefaultService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.product_variant_resolver.default' shared service.
     *
     * @return \Sylius\Component\Product\Resolver\DefaultProductVariantResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Product/Resolver/DefaultProductVariantResolver.php';

        return $container->services['sylius.product_variant_resolver.default'] = new \Sylius\Component\Product\Resolver\DefaultProductVariantResolver(($container->services['sylius.repository.product_variant'] ?? $container->load('getSylius_Repository_ProductVariantService')));
    }
}