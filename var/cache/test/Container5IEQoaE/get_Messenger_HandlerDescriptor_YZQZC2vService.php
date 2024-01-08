<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_YZQZC2vService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.yZQZC2v' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';

        $a = ($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\CommandHandler\\UpdateCatalogPromotionStateHandler'] ?? $container->load('getUpdateCatalogPromotionStateHandlerService'));

        if (isset($container->privates['.messenger.handler_descriptor.yZQZC2v'])) {
            return $container->privates['.messenger.handler_descriptor.yZQZC2v'];
        }

        return $container->privates['.messenger.handler_descriptor.yZQZC2v'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor($a, ['bus' => 'sylius.command_bus']);
    }
}
