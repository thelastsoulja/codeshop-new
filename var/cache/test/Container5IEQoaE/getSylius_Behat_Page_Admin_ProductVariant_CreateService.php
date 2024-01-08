<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Page_Admin_ProductVariant_CreateService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'sylius.behat.page.admin.product_variant.create' shared service.
     *
     * @return \Sylius\Behat\Page\Admin\ProductVariant\CreatePage
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/friends-of-behat/page-object-extension/src/Page/PageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friends-of-behat/page-object-extension/src/Page/Page.php';
        include_once \dirname(__DIR__, 4).'/vendor/friends-of-behat/page-object-extension/src/Page/SymfonyPageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friends-of-behat/page-object-extension/src/Page/SymfonyPage.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Page/Admin/Crud/CreatePageInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Page/Admin/Crud/CreatePage.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Page/Admin/ProductVariant/CreatePageInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Behaviour/DocumentAccessor.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Behaviour/SpecifiesItsCode.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Page/Admin/ProductVariant/CreatePage.php';

        return $container->privates['sylius.behat.page.admin.product_variant.create'] = new \Sylius\Behat\Page\Admin\ProductVariant\CreatePage(($container->services['behat.mink.default_session'] ?? $container->load('getBehat_Mink_DefaultSessionService')), ($container->services['behat.mink.parameters'] ?? $container->load('getBehat_Mink_ParametersService')), ($container->services['router'] ?? $container->getRouterService()), 'sylius_admin_product_variant_create');
    }
}
