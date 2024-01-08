<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_EmailSenderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.email_sender' shared service.
     *
     * @return \Sylius\Component\Mailer\Sender\Sender
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/mailer-bundle/src/Component/Sender/SenderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/mailer-bundle/src/Component/Sender/Sender.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/mailer-bundle/src/Component/Provider/DefaultSettingsProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/mailer-bundle/src/Component/Provider/DefaultSettingsProvider.php';

        $a = ($container->services['sylius.email_renderer.adapter.twig'] ?? $container->load('getSylius_EmailRenderer_Adapter_TwigService'));

        if (isset($container->services['sylius.email_sender'])) {
            return $container->services['sylius.email_sender'];
        }
        $b = ($container->services['sylius.email_sender.adapter.symfony_mailer'] ?? $container->load('getSylius_EmailSender_Adapter_SymfonyMailerService'));

        if (isset($container->services['sylius.email_sender'])) {
            return $container->services['sylius.email_sender'];
        }

        return $container->services['sylius.email_sender'] = new \Sylius\Component\Mailer\Sender\Sender($a, $b, ($container->services['sylius.email_provider'] ?? $container->load('getSylius_EmailProviderService')), ($container->services['sylius.mailer.default_settings_provider'] ?? ($container->services['sylius.mailer.default_settings_provider'] = new \Sylius\Component\Mailer\Provider\DefaultSettingsProvider('Example.com', 'no-reply@example.com'))));
    }
}