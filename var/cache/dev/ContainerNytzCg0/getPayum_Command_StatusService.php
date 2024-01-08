<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPayum_Command_StatusService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'payum.command.status' shared service.
     *
     * @return \Payum\Bundle\PayumBundle\Command\StatusCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/payum/payum-bundle/Command/StatusCommand.php';

        $container->privates['payum.command.status'] = $instance = new \Payum\Bundle\PayumBundle\Command\StatusCommand(($container->services['payum'] ?? $container->load('getPayumService')));

        $instance->setName('payum:status');
        $instance->setDescription('Allows to get a payment status.');

        return $instance;
    }
}