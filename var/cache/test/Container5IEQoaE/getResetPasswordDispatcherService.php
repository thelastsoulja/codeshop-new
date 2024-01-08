<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getResetPasswordDispatcherService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\CoreBundle\MessageDispatcher\ResetPasswordDispatcher' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\MessageDispatcher\ResetPasswordDispatcher
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/MessageDispatcher/ResetPasswordDispatcherInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/MessageDispatcher/ResetPasswordDispatcher.php';

        return $container->services['Sylius\\Bundle\\CoreBundle\\MessageDispatcher\\ResetPasswordDispatcher'] = new \Sylius\Bundle\CoreBundle\MessageDispatcher\ResetPasswordDispatcher(($container->services['messenger.default_bus'] ?? $container->getMessenger_DefaultBusService()));
    }
}
