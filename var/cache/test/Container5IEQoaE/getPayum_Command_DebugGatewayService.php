<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPayum_Command_DebugGatewayService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'payum.command.debug_gateway' shared service.
     *
     * @return \Payum\Bundle\PayumBundle\Command\DebugGatewayCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/payum/payum-bundle/Command/DebugGatewayCommand.php';

        $container->privates['payum.command.debug_gateway'] = $instance = new \Payum\Bundle\PayumBundle\Command\DebugGatewayCommand(($container->services['payum'] ?? $container->load('getPayumService')));

        $instance->setName('debug:payum:gateway');
        $instance->setAliases([0 => 'payum:gateway:debug']);

        return $instance;
    }
}
