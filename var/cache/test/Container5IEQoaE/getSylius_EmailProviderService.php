<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_EmailProviderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.email_provider' shared service.
     *
     * @return \Sylius\Component\Mailer\Provider\EmailProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/mailer-bundle/src/Component/Provider/EmailProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/mailer-bundle/src/Component/Provider/EmailProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/mailer-bundle/src/Component/Factory/EmailFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/mailer-bundle/src/Component/Factory/EmailFactory.php';

        return $container->services['sylius.email_provider'] = new \Sylius\Component\Mailer\Provider\EmailProvider(($container->services['sylius.factory.email'] ?? ($container->services['sylius.factory.email'] = new \Sylius\Component\Mailer\Factory\EmailFactory())), $container->parameters['sylius.mailer.emails']);
    }
}
