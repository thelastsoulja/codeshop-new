<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_DkVjlTSService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.dkVjlTS' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';

        $a = ($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Listener\\CatalogPromotionStateChangedListener'] ?? $container->load('getCatalogPromotionStateChangedListenerService'));

        if (isset($container->privates['.messenger.handler_descriptor.dkVjlTS'])) {
            return $container->privates['.messenger.handler_descriptor.dkVjlTS'];
        }

        return $container->privates['.messenger.handler_descriptor.dkVjlTS'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor($a, ['bus' => 'sylius.event_bus']);
    }
}
