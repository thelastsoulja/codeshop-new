<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetAddressLogEntryCollectionActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\Controller\GetAddressLogEntryCollectionAction' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Controller\GetAddressLogEntryCollectionAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/HandleTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Controller/GetAddressLogEntryCollectionAction.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\Controller\\GetAddressLogEntryCollectionAction'] = new \Sylius\Bundle\ApiBundle\Controller\GetAddressLogEntryCollectionAction(($container->privates['debug.traced.sylius.query_bus'] ?? $container->getDebug_Traced_Sylius_QueryBusService()));
    }
}
