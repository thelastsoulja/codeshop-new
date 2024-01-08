<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_PmxluhoService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.pmxluho' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';

        $a = ($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Listener\\CatalogPromotionCreatedListener'] ?? $container->load('getCatalogPromotionCreatedListenerService'));

        if (isset($container->privates['.messenger.handler_descriptor.pmxluho'])) {
            return $container->privates['.messenger.handler_descriptor.pmxluho'];
        }

        return $container->privates['.messenger.handler_descriptor.pmxluho'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor($a, ['bus' => 'sylius.event_bus']);
    }
}