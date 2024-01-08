<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Context_Ui_Admin_ManagingExchangeRatesService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.behat.context.ui.admin.managing_exchange_rates' shared service.
     *
     * @return \Sylius\Behat\Context\Ui\Admin\ManagingExchangeRatesContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Ui/Admin/ManagingExchangeRatesContext.php';

        return $container->services['sylius.behat.context.ui.admin.managing_exchange_rates'] = new \Sylius\Behat\Context\Ui\Admin\ManagingExchangeRatesContext(($container->privates['sylius.behat.page.admin.exchange_rate.create'] ?? $container->load('getSylius_Behat_Page_Admin_ExchangeRate_CreateService')), ($container->privates['sylius.behat.page.admin.exchange_rate.index'] ?? $container->load('getSylius_Behat_Page_Admin_ExchangeRate_IndexService')), ($container->privates['sylius.behat.page.admin.exchange_rate.update'] ?? $container->load('getSylius_Behat_Page_Admin_ExchangeRate_UpdateService')));
    }
}
