<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getResetPasswordHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\CommandHandler\Account\ResetPasswordHandler' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\CommandHandler\Account\ResetPasswordHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/MessageHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/CommandHandler/Account/ResetPasswordHandler.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Account\\ResetPasswordHandler'] = new \Sylius\Bundle\ApiBundle\CommandHandler\Account\ResetPasswordHandler(($container->services['sylius.user_password_resetter.shop'] ?? $container->load('getSylius_UserPasswordResetter_ShopService')));
    }
}
