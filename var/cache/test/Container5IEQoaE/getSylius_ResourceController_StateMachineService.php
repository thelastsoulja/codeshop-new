<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_ResourceController_StateMachineService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'sylius.resource_controller.state_machine' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\Controller\StateMachine
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/StateMachineInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/StateMachine.php';

        return $container->privates['sylius.resource_controller.state_machine'] = new \Sylius\Bundle\ResourceBundle\Controller\StateMachine(($container->services['SM\\Factory\\FactoryInterface'] ?? $container->getFactoryInterfaceService()));
    }
}
