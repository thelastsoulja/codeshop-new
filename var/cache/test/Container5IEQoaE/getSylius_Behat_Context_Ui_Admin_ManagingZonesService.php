<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Context_Ui_Admin_ManagingZonesService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.behat.context.ui.admin.managing_zones' shared service.
     *
     * @return \Sylius\Behat\Context\Ui\Admin\ManagingZonesContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Ui/Admin/ManagingZonesContext.php';

        return $container->services['sylius.behat.context.ui.admin.managing_zones'] = new \Sylius\Behat\Context\Ui\Admin\ManagingZonesContext(($container->privates['sylius.behat.page.admin.zone.create'] ?? $container->load('getSylius_Behat_Page_Admin_Zone_CreateService')), ($container->privates['sylius.behat.page.admin.zone.index'] ?? $container->load('getSylius_Behat_Page_Admin_Zone_IndexService')), ($container->privates['sylius.behat.page.admin.zone.update'] ?? $container->load('getSylius_Behat_Page_Admin_Zone_UpdateService')), ($container->privates['sylius.behat.current_page_resolver'] ?? $container->load('getSylius_Behat_CurrentPageResolverService')), ($container->privates['sylius.behat.notification_checker'] ?? $container->load('getSylius_Behat_NotificationCheckerService')));
    }
}
