<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRequestResetPasswordEmailHandlerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\CoreBundle\MessageHandler\Admin\Account\RequestResetPasswordEmailHandler' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\MessageHandler\Admin\Account\RequestResetPasswordEmailHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/MessageHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/MessageHandler/Admin/Account/RequestResetPasswordEmailHandler.php';

        $a = ($container->services['messenger.default_bus'] ?? $container->getMessenger_DefaultBusService());

        if (isset($container->services['Sylius\\Bundle\\CoreBundle\\MessageHandler\\Admin\\Account\\RequestResetPasswordEmailHandler'])) {
            return $container->services['Sylius\\Bundle\\CoreBundle\\MessageHandler\\Admin\\Account\\RequestResetPasswordEmailHandler'];
        }

        return $container->services['Sylius\\Bundle\\CoreBundle\\MessageHandler\\Admin\\Account\\RequestResetPasswordEmailHandler'] = new \Sylius\Bundle\CoreBundle\MessageHandler\Admin\Account\RequestResetPasswordEmailHandler(($container->services['sylius.repository.admin_user'] ?? $container->load('getSylius_Repository_AdminUserService')), ($container->services['sylius.admin_user.token_generator.password_reset'] ?? $container->load('getSylius_AdminUser_TokenGenerator_PasswordResetService')), ($container->privates['Sylius\\Calendar\\Provider\\DateTimeProviderInterface'] ?? ($container->privates['Sylius\\Calendar\\Provider\\DateTimeProviderInterface'] = new \Sylius\Calendar\Tests\Behat\Provider\FakeCalendar(\dirname(__DIR__, 4)))), $a);
    }
}
