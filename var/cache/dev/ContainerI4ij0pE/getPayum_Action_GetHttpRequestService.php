<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPayum_Action_GetHttpRequestService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'payum.action.get_http_request' shared service.
     *
     * @return \Payum\Core\Bridge\Symfony\Action\GetHttpRequestAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Action/ActionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Bridge/Symfony/Action/GetHttpRequestAction.php';

        $container->services['payum.action.get_http_request'] = $instance = new \Payum\Core\Bridge\Symfony\Action\GetHttpRequestAction();

        $instance->setHttpRequestStack(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));

        return $instance;
    }
}
