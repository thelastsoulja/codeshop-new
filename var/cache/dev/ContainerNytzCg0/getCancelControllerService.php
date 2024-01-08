<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCancelControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Payum\Bundle\PayumBundle\Controller\CancelController' shared autowired service.
     *
     * @return \Payum\Bundle\PayumBundle\Controller\CancelController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/payum/payum-bundle/Traits/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/payum/payum-bundle/Controller/PayumController.php';
        include_once \dirname(__DIR__, 4).'/vendor/payum/payum-bundle/Controller/CancelController.php';

        $container->services['Payum\\Bundle\\PayumBundle\\Controller\\CancelController'] = $instance = new \Payum\Bundle\PayumBundle\Controller\CancelController(($container->services['payum'] ?? $container->load('getPayumService')));

        $instance->setContainer($container);

        return $instance;
    }
}
