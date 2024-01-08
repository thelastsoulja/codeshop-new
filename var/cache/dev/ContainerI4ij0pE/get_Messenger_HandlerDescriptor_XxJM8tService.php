<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_XxJM8tService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.XxJM_8t' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';

        $a = ($container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Promotion\\GeneratePromotionCouponHandler'] ?? $container->load('getGeneratePromotionCouponHandlerService'));

        if (isset($container->privates['.messenger.handler_descriptor.XxJM_8t'])) {
            return $container->privates['.messenger.handler_descriptor.XxJM_8t'];
        }

        return $container->privates['.messenger.handler_descriptor.XxJM_8t'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor($a, ['bus' => 'sylius_default.bus']);
    }
}
