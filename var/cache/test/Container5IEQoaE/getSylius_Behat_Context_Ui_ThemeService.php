<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Context_Ui_ThemeService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.behat.context.ui.theme' shared service.
     *
     * @return \Sylius\Behat\Context\Ui\ThemeContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Ui/ThemeContext.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedStorageInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedStorage.php';

        return $container->services['sylius.behat.context.ui.theme'] = new \Sylius\Behat\Context\Ui\ThemeContext(($container->privates['sylius.behat.shared_storage'] ?? ($container->privates['sylius.behat.shared_storage'] = new \Sylius\Behat\Service\SharedStorage())), ($container->privates['sylius.behat.page.admin.channel.index'] ?? $container->load('getSylius_Behat_Page_Admin_Channel_IndexService')), ($container->privates['sylius.behat.page.admin.channel.update'] ?? $container->load('getSylius_Behat_Page_Admin_Channel_UpdateService')), ($container->privates['sylius.behat.page.shop.home'] ?? $container->load('getSylius_Behat_Page_Shop_HomeService')));
    }
}