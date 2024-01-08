<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Context_Ui_Admin_ManagingShipmentsService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.behat.context.ui.admin.managing_shipments' shared service.
     *
     * @return \Sylius\Behat\Context\Ui\Admin\ManagingShipmentsContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Ui/Admin/ManagingShipmentsContext.php';

        return $container->services['sylius.behat.context.ui.admin.managing_shipments'] = new \Sylius\Behat\Context\Ui\Admin\ManagingShipmentsContext(($container->privates['sylius.behat.page.admin.shipment.index'] ?? $container->load('getSylius_Behat_Page_Admin_Shipment_IndexService')), ($container->privates['sylius.behat.page.admin.order.show'] ?? $container->load('getSylius_Behat_Page_Admin_Order_ShowService')), ($container->privates['sylius.behat.notification_checker'] ?? $container->load('getSylius_Behat_NotificationCheckerService')), ($container->privates['sylius.behat.page.admin.shipment.show'] ?? $container->load('getSylius_Behat_Page_Admin_Shipment_ShowService')));
    }
}