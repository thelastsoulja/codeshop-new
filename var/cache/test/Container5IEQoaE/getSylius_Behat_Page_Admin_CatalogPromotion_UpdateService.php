<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Page_Admin_CatalogPromotion_UpdateService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'sylius.behat.page.admin.catalog_promotion.update' shared service.
     *
     * @return \Sylius\Behat\Page\Admin\CatalogPromotion\UpdatePage
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/friends-of-behat/page-object-extension/src/Page/PageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friends-of-behat/page-object-extension/src/Page/Page.php';
        include_once \dirname(__DIR__, 4).'/vendor/friends-of-behat/page-object-extension/src/Page/SymfonyPageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friends-of-behat/page-object-extension/src/Page/SymfonyPage.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Page/Admin/Crud/UpdatePageInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Page/Admin/Crud/UpdatePage.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Page/Admin/CatalogPromotion/UpdatePageInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Behaviour/ChecksCodeImmutability.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Page/Admin/CatalogPromotion/UpdatePage.php';

        return $container->privates['sylius.behat.page.admin.catalog_promotion.update'] = new \Sylius\Behat\Page\Admin\CatalogPromotion\UpdatePage(($container->services['behat.mink.default_session'] ?? $container->load('getBehat_Mink_DefaultSessionService')), ($container->services['behat.mink.parameters'] ?? $container->load('getBehat_Mink_ParametersService')), ($container->services['router'] ?? $container->getRouterService()), 'sylius_admin_catalog_promotion_update');
    }
}
