<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Context_Api_Admin_ManagingTaxRatesService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.behat.context.api.admin.managing_tax_rates' shared service.
     *
     * @return \Sylius\Behat\Context\Api\Admin\ManagingTaxRatesContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Api/Admin/ManagingTaxRatesContext.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedStorageInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedStorage.php';

        return $container->services['sylius.behat.context.api.admin.managing_tax_rates'] = new \Sylius\Behat\Context\Api\Admin\ManagingTaxRatesContext(($container->privates['sylius.behat.api_platform_client.admin'] ?? $container->load('getSylius_Behat_ApiPlatformClient_AdminService')), ($container->privates['Sylius\\Behat\\Client\\ResponseCheckerInterface'] ?? $container->load('getResponseCheckerInterfaceService')), ($container->services['api_platform.iri_converter'] ?? $container->getApiPlatform_IriConverterService()), ($container->privates['sylius.behat.shared_storage'] ?? ($container->privates['sylius.behat.shared_storage'] = new \Sylius\Behat\Service\SharedStorage())));
    }
}
