<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Context_Ui_Admin_ManagingCustomersService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.behat.context.ui.admin.managing_customers' shared service.
     *
     * @return \Sylius\Behat\Context\Ui\Admin\ManagingCustomersContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Ui/Admin/ManagingCustomersContext.php';

        return $container->services['sylius.behat.context.ui.admin.managing_customers'] = new \Sylius\Behat\Context\Ui\Admin\ManagingCustomersContext(($container->privates['sylius.behat.page.admin.customer.create'] ?? $container->load('getSylius_Behat_Page_Admin_Customer_CreateService')), ($container->privates['sylius.behat.page.admin.customer.index'] ?? $container->load('getSylius_Behat_Page_Admin_Customer_IndexService')), ($container->privates['sylius.behat.page.admin.customer.update'] ?? $container->load('getSylius_Behat_Page_Admin_Customer_UpdateService')), ($container->privates['sylius.behat.page.admin.customer.show'] ?? $container->load('getSylius_Behat_Page_Admin_Customer_ShowService')), ($container->privates['sylius.behat.page.admin.customer.order_index'] ?? $container->load('getSylius_Behat_Page_Admin_Customer_OrderIndexService')), ($container->privates['sylius.behat.current_page_resolver'] ?? $container->load('getSylius_Behat_CurrentPageResolverService')));
    }
}