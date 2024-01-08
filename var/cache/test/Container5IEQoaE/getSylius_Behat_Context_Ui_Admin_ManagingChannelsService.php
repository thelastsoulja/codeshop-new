<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Context_Ui_Admin_ManagingChannelsService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.behat.context.ui.admin.managing_channels' shared service.
     *
     * @return \Sylius\Behat\Context\Ui\Admin\ManagingChannelsContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Ui/Admin/ManagingChannelsContext.php';

        return $container->services['sylius.behat.context.ui.admin.managing_channels'] = new \Sylius\Behat\Context\Ui\Admin\ManagingChannelsContext(($container->privates['sylius.behat.page.admin.channel.index'] ?? $container->load('getSylius_Behat_Page_Admin_Channel_IndexService')), ($container->privates['sylius.behat.page.admin.channel.create'] ?? $container->load('getSylius_Behat_Page_Admin_Channel_CreateService')), ($container->privates['sylius.behat.page.admin.channel.update'] ?? $container->load('getSylius_Behat_Page_Admin_Channel_UpdateService')), ($container->privates['sylius.behat.element.admin.channel.shipping_address_in_checkout_required'] ?? $container->load('getSylius_Behat_Element_Admin_Channel_ShippingAddressInCheckoutRequiredService')), ($container->privates['sylius.behat.current_page_resolver'] ?? $container->load('getSylius_Behat_CurrentPageResolverService')), ($container->privates['sylius.behat.notification_checker'] ?? $container->load('getSylius_Behat_NotificationCheckerService')), ($container->privates['Sylius\\Behat\\Element\\Admin\\Channel\\DiscountedProductsCheckingPeriodInputElementInterface'] ?? $container->load('getDiscountedProductsCheckingPeriodInputElementInterfaceService')), ($container->privates['Sylius\\Behat\\Element\\Admin\\Channel\\LowestPriceFlagElementInterface'] ?? $container->load('getLowestPriceFlagElementInterfaceService')), ($container->privates['Sylius\\Behat\\Element\\Admin\\Channel\\ExcludeTaxonsFromShowingLowestPriceInputElementInterface'] ?? $container->load('getExcludeTaxonsFromShowingLowestPriceInputElementInterfaceService')));
    }
}