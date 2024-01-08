<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_ApiPlatformClient_ShopService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'sylius.behat.api_platform_client.shop' shared service.
     *
     * @return \Sylius\Behat\Client\ApiPlatformClient
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Client/ApiClientInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Client/ApiPlatformClient.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedStorageInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedStorage.php';

        return $container->privates['sylius.behat.api_platform_client.shop'] = new \Sylius\Behat\Client\ApiPlatformClient((isset($container->factories['test.client']) ? $container->factories['test.client']() : $container->load('getTest_ClientService')), ($container->privates['sylius.behat.shared_storage'] ?? ($container->privates['sylius.behat.shared_storage'] = new \Sylius\Behat\Service\SharedStorage())), ($container->privates['sylius.behat.request_factory'] ?? $container->load('getSylius_Behat_RequestFactoryService')), $container->getEnv('resolve:SYLIUS_API_AUTHORIZATION_HEADER'), 'shop');
    }
}
