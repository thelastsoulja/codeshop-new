<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Context_Hybrid_Shop_CompositeCustomerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.behat.context.hybrid.shop.composite_customer' shared service.
     *
     * @return \Sylius\Behat\Context\Hybrid\Setup\SecurityContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Hybrid/Setup/SecurityContext.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedStorageInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedStorage.php';

        return $container->services['sylius.behat.context.hybrid.shop.composite_customer'] = new \Sylius\Behat\Context\Hybrid\Setup\SecurityContext(($container->services['sylius.behat.context.setup.shop_security'] ?? $container->load('getSylius_Behat_Context_Setup_ShopSecurityService')), ($container->services['sylius.behat.context.setup.shop_api_security'] ?? $container->load('getSylius_Behat_Context_Setup_ShopApiSecurityService')), ($container->privates['sylius.behat.shared_storage'] ?? ($container->privates['sylius.behat.shared_storage'] = new \Sylius\Behat\Service\SharedStorage())));
    }
}