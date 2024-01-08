<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBrowsingCatalogPromotionProductVariantsContextService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Behat\Context\Api\Admin\BrowsingCatalogPromotionProductVariantsContext' shared service.
     *
     * @return \Sylius\Behat\Context\Api\Admin\BrowsingCatalogPromotionProductVariantsContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Api/Admin/BrowsingCatalogPromotionProductVariantsContext.php';

        return $container->services['Sylius\\Behat\\Context\\Api\\Admin\\BrowsingCatalogPromotionProductVariantsContext'] = new \Sylius\Behat\Context\Api\Admin\BrowsingCatalogPromotionProductVariantsContext(($container->privates['sylius.behat.api_platform_client.admin'] ?? $container->load('getSylius_Behat_ApiPlatformClient_AdminService')), ($container->privates['Sylius\\Behat\\Client\\ResponseCheckerInterface'] ?? $container->load('getResponseCheckerInterfaceService')), ($container->services['api_platform.iri_converter'] ?? $container->getApiPlatform_IriConverterService()));
    }
}
