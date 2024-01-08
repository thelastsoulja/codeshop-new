<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Installer_Checker_CommandDirectoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.installer.checker.command_directory' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Installer\Checker\CommandDirectoryChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Installer/Checker/CommandDirectoryChecker.php';

        return $container->services['sylius.installer.checker.command_directory'] = new \Sylius\Bundle\CoreBundle\Installer\Checker\CommandDirectoryChecker(($container->services['.container.private.filesystem'] ?? ($container->services['.container.private.filesystem'] = new \Symfony\Component\Filesystem\Filesystem())));
    }
}
