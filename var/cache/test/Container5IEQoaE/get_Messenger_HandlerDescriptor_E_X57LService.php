<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_E_X57LService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.e._X57L' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';

        return $container->privates['.messenger.handler_descriptor.e._X57L'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->privates['Sylius\\Bundle\\ApiBundle\\QueryHandler\\GetAddressLogEntryCollectionHandler'] ?? $container->load('getGetAddressLogEntryCollectionHandlerService')), ['bus' => 'sylius.query_bus']);
    }
}