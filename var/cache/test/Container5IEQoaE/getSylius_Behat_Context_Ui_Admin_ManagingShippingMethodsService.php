<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Context_Ui_Admin_ManagingShippingMethodsService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.behat.context.ui.admin.managing_shipping_methods' shared service.
     *
     * @return \Sylius\Behat\Context\Ui\Admin\ManagingShippingMethodsContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Ui/Admin/ManagingShippingMethodsContext.php';

        return $container->services['sylius.behat.context.ui.admin.managing_shipping_methods'] = new \Sylius\Behat\Context\Ui\Admin\ManagingShippingMethodsContext(($container->privates['sylius.behat.page.admin.shipping_method.index'] ?? $container->load('getSylius_Behat_Page_Admin_ShippingMethod_IndexService')), ($container->privates['sylius.behat.page.admin.shipping_method.create'] ?? $container->load('getSylius_Behat_Page_Admin_ShippingMethod_CreateService')), ($container->privates['sylius.behat.page.admin.shipping_method.update'] ?? $container->load('getSylius_Behat_Page_Admin_ShippingMethod_UpdateService')), ($container->privates['sylius.behat.current_page_resolver'] ?? $container->load('getSylius_Behat_CurrentPageResolverService')), ($container->privates['sylius.behat.notification_checker'] ?? $container->load('getSylius_Behat_NotificationCheckerService')));
    }
}
