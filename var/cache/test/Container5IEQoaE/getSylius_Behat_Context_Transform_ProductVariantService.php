<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Context_Transform_ProductVariantService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.behat.context.transform.product_variant' shared service.
     *
     * @return \Sylius\Behat\Context\Transform\ProductVariantContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Transform/ProductVariantContext.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedStorageInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedStorage.php';

        return $container->services['sylius.behat.context.transform.product_variant'] = new \Sylius\Behat\Context\Transform\ProductVariantContext(($container->services['sylius.repository.product'] ?? $container->load('getSylius_Repository_ProductService')), ($container->services['sylius.repository.product_variant'] ?? $container->load('getSylius_Repository_ProductVariantService')), ($container->privates['sylius.behat.shared_storage'] ?? ($container->privates['sylius.behat.shared_storage'] = new \Sylius\Behat\Service\SharedStorage())));
    }
}