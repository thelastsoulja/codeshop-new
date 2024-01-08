<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Context_Setup_ShippingCategoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.behat.context.setup.shipping_category' shared service.
     *
     * @return \Sylius\Behat\Context\Setup\ShippingCategoryContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Setup/ShippingCategoryContext.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedStorageInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedStorage.php';

        return $container->services['sylius.behat.context.setup.shipping_category'] = new \Sylius\Behat\Context\Setup\ShippingCategoryContext(($container->privates['sylius.behat.shared_storage'] ?? ($container->privates['sylius.behat.shared_storage'] = new \Sylius\Behat\Service\SharedStorage())), ($container->services['sylius.factory.shipping_category'] ?? ($container->services['sylius.factory.shipping_category'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Shipping\\Model\\ShippingCategory'))), ($container->services['sylius.repository.shipping_category'] ?? $container->load('getSylius_Repository_ShippingCategoryService')));
    }
}