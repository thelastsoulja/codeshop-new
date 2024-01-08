<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Context_Ui_Admin_ManagingOrdersService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.behat.context.ui.admin.managing_orders' shared service.
     *
     * @return \Sylius\Behat\Context\Ui\Admin\ManagingOrdersContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Ui/Admin/ManagingOrdersContext.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedStorageInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedStorage.php';

        return $container->services['sylius.behat.context.ui.admin.managing_orders'] = new \Sylius\Behat\Context\Ui\Admin\ManagingOrdersContext(($container->privates['sylius.behat.shared_storage'] ?? ($container->privates['sylius.behat.shared_storage'] = new \Sylius\Behat\Service\SharedStorage())), ($container->privates['sylius.behat.page.admin.order.index'] ?? $container->load('getSylius_Behat_Page_Admin_Order_IndexService')), ($container->privates['sylius.behat.page.admin.order.show'] ?? $container->load('getSylius_Behat_Page_Admin_Order_ShowService')), ($container->privates['sylius.behat.page.admin.order.update'] ?? $container->load('getSylius_Behat_Page_Admin_Order_UpdateService')), ($container->privates['sylius.behat.page.admin.order.history'] ?? $container->load('getSylius_Behat_Page_Admin_Order_HistoryService')), ($container->privates['sylius.behat.page.error'] ?? $container->load('getSylius_Behat_Page_ErrorService')), ($container->privates['sylius.behat.notification_checker'] ?? $container->load('getSylius_Behat_NotificationCheckerService')), ($container->privates['sylius.behat.shared_security'] ?? $container->load('getSylius_Behat_SharedSecurityService')));
    }
}