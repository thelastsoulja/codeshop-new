<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Context_Ui_Admin_ImpersonatingCustomersService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.behat.context.ui.admin.impersonating_customers' shared service.
     *
     * @return \Sylius\Behat\Context\Ui\Admin\ImpersonatingCustomersContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Ui/Admin/ImpersonatingCustomersContext.php';

        return $container->services['sylius.behat.context.ui.admin.impersonating_customers'] = new \Sylius\Behat\Context\Ui\Admin\ImpersonatingCustomersContext(($container->privates['sylius.behat.page.admin.customer.show'] ?? $container->load('getSylius_Behat_Page_Admin_Customer_ShowService')), ($container->privates['sylius.behat.page.admin.dashboard'] ?? $container->load('getSylius_Behat_Page_Admin_DashboardService')), ($container->privates['sylius.behat.page.shop.home'] ?? $container->load('getSylius_Behat_Page_Shop_HomeService')), ($container->privates['sylius.behat.page.admin.impersonate_user'] ?? $container->load('getSylius_Behat_Page_Admin_ImpersonateUserService')));
    }
}