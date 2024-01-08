<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Context_Ui_UserService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.behat.context.ui.user' shared service.
     *
     * @return \Sylius\Behat\Context\Ui\UserContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Ui/UserContext.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedStorageInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedStorage.php';

        return $container->services['sylius.behat.context.ui.user'] = new \Sylius\Behat\Context\Ui\UserContext(($container->privates['sylius.behat.shared_storage'] ?? ($container->privates['sylius.behat.shared_storage'] = new \Sylius\Behat\Service\SharedStorage())), ($container->services['sylius.repository.shop_user'] ?? $container->load('getSylius_Repository_ShopUserService')), ($container->privates['sylius.behat.page.admin.customer.show'] ?? $container->load('getSylius_Behat_Page_Admin_Customer_ShowService')), ($container->privates['sylius.behat.page.shop.home'] ?? $container->load('getSylius_Behat_Page_Shop_HomeService')));
    }
}
