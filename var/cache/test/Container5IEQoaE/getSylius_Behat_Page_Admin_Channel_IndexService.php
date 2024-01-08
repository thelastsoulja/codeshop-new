<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Page_Admin_Channel_IndexService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'sylius.behat.page.admin.channel.index' shared service.
     *
     * @return \Sylius\Behat\Page\Admin\Channel\IndexPage
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/friends-of-behat/page-object-extension/src/Page/PageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friends-of-behat/page-object-extension/src/Page/Page.php';
        include_once \dirname(__DIR__, 4).'/vendor/friends-of-behat/page-object-extension/src/Page/SymfonyPageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friends-of-behat/page-object-extension/src/Page/SymfonyPage.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Page/Admin/Crud/IndexPageInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Page/Admin/Crud/IndexPage.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Page/Admin/Channel/IndexPageInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Page/Admin/Channel/IndexPage.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/Accessor/TableAccessorInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/Accessor/TableAccessor.php';

        return $container->privates['sylius.behat.page.admin.channel.index'] = new \Sylius\Behat\Page\Admin\Channel\IndexPage(($container->services['behat.mink.default_session'] ?? $container->load('getBehat_Mink_DefaultSessionService')), ($container->services['behat.mink.parameters'] ?? $container->load('getBehat_Mink_ParametersService')), ($container->services['router'] ?? $container->getRouterService()), ($container->privates['sylius.behat.table_accessor'] ?? ($container->privates['sylius.behat.table_accessor'] = new \Sylius\Behat\Service\Accessor\TableAccessor())), 'sylius_admin_channel_index');
    }
}
