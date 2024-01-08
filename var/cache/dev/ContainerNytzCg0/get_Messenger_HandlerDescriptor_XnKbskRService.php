<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_XnKbskRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.xnKbskR' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';

        $a = ($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Listener\\ProductVariantCreatedListener'] ?? $container->load('getProductVariantCreatedListenerService'));

        if (isset($container->privates['.messenger.handler_descriptor.xnKbskR'])) {
            return $container->privates['.messenger.handler_descriptor.xnKbskR'];
        }

        return $container->privates['.messenger.handler_descriptor.xnKbskR'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor($a, ['bus' => 'sylius.event_bus']);
    }
}
