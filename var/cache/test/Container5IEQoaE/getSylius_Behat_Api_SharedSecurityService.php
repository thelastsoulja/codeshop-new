<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Api_SharedSecurityService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'sylius.behat.api.shared_security' shared service.
     *
     * @return \Sylius\Behat\Service\SharedSecurityService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedSecurityServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedSecurityService.php';

        return $container->privates['sylius.behat.api.shared_security'] = new \Sylius\Behat\Service\SharedSecurityService(($container->services['sylius.behat.api_security'] ?? $container->load('getSylius_Behat_ApiSecurityService')));
    }
}
