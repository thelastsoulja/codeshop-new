<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSendAccountVerificationEmailHandlerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\CommandHandler\Account\SendAccountVerificationEmailHandler' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\CommandHandler\Account\SendAccountVerificationEmailHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/MessageHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/CommandHandler/Account/SendAccountVerificationEmailHandler.php';

        $a = ($container->services['sylius.email_sender'] ?? $container->load('getSylius_EmailSenderService'));

        if (isset($container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Account\\SendAccountVerificationEmailHandler'])) {
            return $container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Account\\SendAccountVerificationEmailHandler'];
        }

        return $container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Account\\SendAccountVerificationEmailHandler'] = new \Sylius\Bundle\ApiBundle\CommandHandler\Account\SendAccountVerificationEmailHandler(($container->services['sylius.repository.shop_user'] ?? $container->load('getSylius_Repository_ShopUserService')), ($container->services['sylius.repository.channel'] ?? $container->getSylius_Repository_ChannelService()), $a);
    }
}
