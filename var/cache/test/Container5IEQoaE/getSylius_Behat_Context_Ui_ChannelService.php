<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Context_Ui_ChannelService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.behat.context.ui.channel' shared service.
     *
     * @return \Sylius\Behat\Context\Ui\ChannelContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Ui/ChannelContext.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedStorageInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedStorage.php';

        return $container->services['sylius.behat.context.ui.channel'] = new \Sylius\Behat\Context\Ui\ChannelContext(($container->privates['sylius.behat.shared_storage'] ?? ($container->privates['sylius.behat.shared_storage'] = new \Sylius\Behat\Service\SharedStorage())), ($container->privates['sylius.behat.channel_context_setter'] ?? $container->load('getSylius_Behat_ChannelContextSetterService')), ($container->services['sylius.repository.channel'] ?? $container->getSylius_Repository_ChannelService()), ($container->privates['sylius.behat.page.admin.channel.create'] ?? $container->load('getSylius_Behat_Page_Admin_Channel_CreateService')), ($container->privates['sylius.behat.page.shop.home'] ?? $container->load('getSylius_Behat_Page_Shop_HomeService')), ($container->privates['sylius.behat.page.test_plugin.main'] ?? $container->load('getSylius_Behat_Page_TestPlugin_MainService')));
    }
}
