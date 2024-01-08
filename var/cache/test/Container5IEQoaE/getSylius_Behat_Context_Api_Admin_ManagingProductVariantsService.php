<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Context_Api_Admin_ManagingProductVariantsService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.behat.context.api.admin.managing_product_variants' shared service.
     *
     * @return \Sylius\Behat\Context\Api\Admin\ManagingProductVariantsContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Api/Admin/ManagingProductVariantsContext.php';

        return $container->services['sylius.behat.context.api.admin.managing_product_variants'] = new \Sylius\Behat\Context\Api\Admin\ManagingProductVariantsContext(($container->services['Sylius\\Component\\Product\\Resolver\\ProductVariantResolverInterface'] ?? $container->getProductVariantResolverInterfaceService()), ($container->privates['sylius.behat.api_platform_client.admin'] ?? $container->load('getSylius_Behat_ApiPlatformClient_AdminService')), ($container->privates['Sylius\\Behat\\Client\\ResponseCheckerInterface'] ?? $container->load('getResponseCheckerInterfaceService')), ($container->services['api_platform.iri_converter'] ?? $container->getApiPlatform_IriConverterService()), ($container->privates['sylius.behat.section_iri_converter'] ?? $container->load('getSylius_Behat_SectionIriConverterService')));
    }
}
