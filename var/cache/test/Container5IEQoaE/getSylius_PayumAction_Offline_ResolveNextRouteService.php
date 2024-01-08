<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_PayumAction_Offline_ResolveNextRouteService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.payum_action.offline.resolve_next_route' shared service.
     *
     * @return \Sylius\Bundle\PayumBundle\Action\Offline\ResolveNextRouteAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Action/ActionInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/PayumBundle/Action/Offline/ResolveNextRouteAction.php';

        return $container->services['sylius.payum_action.offline.resolve_next_route'] = new \Sylius\Bundle\PayumBundle\Action\Offline\ResolveNextRouteAction();
    }
}
