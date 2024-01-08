<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Factory_EmailService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.factory.email' shared service.
     *
     * @return \Sylius\Component\Mailer\Factory\EmailFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/mailer-bundle/src/Component/Factory/EmailFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/mailer-bundle/src/Component/Factory/EmailFactory.php';

        return $container->services['sylius.factory.email'] = new \Sylius\Component\Mailer\Factory\EmailFactory();
    }
}
