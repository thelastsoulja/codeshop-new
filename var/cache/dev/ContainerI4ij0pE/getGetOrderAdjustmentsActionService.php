<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetOrderAdjustmentsActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\Controller\GetOrderAdjustmentsAction' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Controller\GetOrderAdjustmentsAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Controller/GetOrderAdjustmentsAction.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\Controller\\GetOrderAdjustmentsAction'] = new \Sylius\Bundle\ApiBundle\Controller\GetOrderAdjustmentsAction(($container->services['sylius.repository.order'] ?? $container->getSylius_Repository_OrderService()));
    }
}
