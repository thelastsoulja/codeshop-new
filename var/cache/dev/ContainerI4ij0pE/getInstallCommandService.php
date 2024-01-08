<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInstallCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\CoreBundle\Command\InstallCommand' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Command\InstallCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius-labs/polyfill-symfony-framework-bundle/src/Command/ContainerAwareCommand.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Command/AbstractInstallCommand.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Command/InstallCommand.php';

        $container->services['Sylius\\Bundle\\CoreBundle\\Command\\InstallCommand'] = $instance = new \Sylius\Bundle\CoreBundle\Command\InstallCommand();

        $instance->setName('sylius:install');

        return $instance;
    }
}
