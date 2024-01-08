<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Listener_UserMailerListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sylius.listener.user_mailer_listener' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\EventListener\MailerListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/EventListener/MailerListener.php';

        $a = ($container->services['sylius.email_sender'] ?? $container->load('getSylius_EmailSenderService'));

        if (isset($container->privates['sylius.listener.user_mailer_listener'])) {
            return $container->privates['sylius.listener.user_mailer_listener'];
        }

        return $container->privates['sylius.listener.user_mailer_listener'] = new \Sylius\Bundle\CoreBundle\EventListener\MailerListener($a, ($container->services['Sylius\\Component\\Channel\\Context\\ChannelContextInterface'] ?? $container->getChannelContextInterfaceService()), ($container->services['Sylius\\Component\\Locale\\Context\\LocaleContextInterface'] ?? $container->getLocaleContextInterfaceService()));
    }
}
