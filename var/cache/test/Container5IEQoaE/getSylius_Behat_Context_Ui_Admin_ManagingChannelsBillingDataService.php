<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Context_Ui_Admin_ManagingChannelsBillingDataService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.behat.context.ui.admin.managing_channels_billing_data' shared service.
     *
     * @return \Sylius\Behat\Context\Ui\Admin\ManagingChannelsBillingDataContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Ui/Admin/ManagingChannelsBillingDataContext.php';

        return $container->services['sylius.behat.context.ui.admin.managing_channels_billing_data'] = new \Sylius\Behat\Context\Ui\Admin\ManagingChannelsBillingDataContext(($container->privates['sylius.behat.element.admin.channel.shop_billing_data'] ?? $container->load('getSylius_Behat_Element_Admin_Channel_ShopBillingDataService')));
    }
}