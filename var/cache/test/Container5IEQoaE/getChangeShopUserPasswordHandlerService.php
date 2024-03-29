<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChangeShopUserPasswordHandlerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\CommandHandler\Account\ChangeShopUserPasswordHandler' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\CommandHandler\Account\ChangeShopUserPasswordHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/MessageHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/CommandHandler/Account/ChangeShopUserPasswordHandler.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Account\\ChangeShopUserPasswordHandler'] = new \Sylius\Bundle\ApiBundle\CommandHandler\Account\ChangeShopUserPasswordHandler(($container->services['sylius.security.password_updater'] ?? $container->load('getSylius_Security_PasswordUpdaterService')), ($container->services['sylius.repository.shop_user'] ?? $container->load('getSylius_Repository_ShopUserService')));
    }
}
