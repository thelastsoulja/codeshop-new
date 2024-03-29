<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_H_M6GhService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.h.M_6Gh' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';

        $a = ($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\CommandHandler\\RemoveInactiveCatalogPromotionHandler'] ?? $container->load('getRemoveInactiveCatalogPromotionHandlerService'));

        if (isset($container->privates['.messenger.handler_descriptor.h.M_6Gh'])) {
            return $container->privates['.messenger.handler_descriptor.h.M_6Gh'];
        }

        return $container->privates['.messenger.handler_descriptor.h.M_6Gh'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor($a, ['bus' => 'sylius.command_bus']);
    }
}
