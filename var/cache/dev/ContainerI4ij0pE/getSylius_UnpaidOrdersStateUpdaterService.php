<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_UnpaidOrdersStateUpdaterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.unpaid_orders_state_updater' shared service.
     *
     * @return \Sylius\Component\Core\Updater\UnpaidOrdersStateUpdater
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Updater/UnpaidOrdersStateUpdaterInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Updater/UnpaidOrdersStateUpdater.php';

        return $container->services['sylius.unpaid_orders_state_updater'] = new \Sylius\Component\Core\Updater\UnpaidOrdersStateUpdater(($container->services['sylius.repository.order'] ?? $container->getSylius_Repository_OrderService()), ($container->services['SM\\Factory\\FactoryInterface'] ?? $container->getFactoryInterfaceService()), '5 days', ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
