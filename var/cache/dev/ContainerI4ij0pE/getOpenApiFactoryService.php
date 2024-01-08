<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOpenApiFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\ApiBundle\OpenApi\Factory\OpenApiFactory' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\OpenApi\Factory\OpenApiFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/OpenApi/Factory/OpenApiFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/OpenApi/Factory/OpenApiFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/OpenApi/Factory/OpenApiFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/State/Pagination/PaginationOptions.php';

        return $container->privates['Sylius\\Bundle\\ApiBundle\\OpenApi\\Factory\\OpenApiFactory'] = new \Sylius\Bundle\ApiBundle\OpenApi\Factory\OpenApiFactory(new \ApiPlatform\Core\OpenApi\Factory\OpenApiFactory(($container->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), ($container->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($container->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $container->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($container->privates['api_platform.metadata.property.metadata_factory.cached.legacy'] ?? $container->getApiPlatform_Metadata_Property_MetadataFactory_Cached_LegacyService()), ($container->privates['api_platform.hydra.json_schema.schema_factory'] ?? $container->getApiPlatform_Hydra_JsonSchema_SchemaFactoryService()), ($container->privates['api_platform.json_schema.type_factory'] ?? $container->getApiPlatform_JsonSchema_TypeFactoryService()), ($container->privates['api_platform.operation_path_resolver.router'] ?? $container->getApiPlatform_OperationPathResolver_RouterService()), ($container->privates['api_platform.filter_locator'] ?? $container->getApiPlatform_FilterLocatorService()), ($container->privates['api_platform.subresource_operation_factory.cached'] ?? $container->getApiPlatform_SubresourceOperationFactory_CachedService()), ($container->privates['api_platform.identifiers_extractor.cached'] ?? $container->getApiPlatform_IdentifiersExtractor_CachedService()), $container->parameters['api_platform.formats'], ($container->privates['api_platform.openapi.options'] ?? $container->load('getApiPlatform_Openapi_OptionsService')), new \ApiPlatform\State\Pagination\PaginationOptions(true, 'page', true, 'itemsPerPage', false, 'pagination', 30, NULL, false, false, 'partial')), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['Sylius\\Bundle\\ApiBundle\\OpenApi\\Documentation\\AcceptLanguageHeaderDocumentationModifier'] ?? $container->load('getAcceptLanguageHeaderDocumentationModifierService'));
            yield 1 => ($container->privates['Sylius\\Bundle\\ApiBundle\\OpenApi\\Documentation\\AdminAuthenticationTokenDocumentationModifier'] ?? ($container->privates['Sylius\\Bundle\\ApiBundle\\OpenApi\\Documentation\\AdminAuthenticationTokenDocumentationModifier'] = new \Sylius\Bundle\ApiBundle\OpenApi\Documentation\AdminAuthenticationTokenDocumentationModifier('/api/v2')));
            yield 2 => ($container->privates['Sylius\\Bundle\\ApiBundle\\OpenApi\\Documentation\\PathHiderDocumentationModifier'] ?? $container->load('getPathHiderDocumentationModifierService'));
            yield 3 => ($container->privates['Sylius\\Bundle\\ApiBundle\\OpenApi\\Documentation\\AttributeTypeDocumentationModifier'] ?? $container->load('getAttributeTypeDocumentationModifierService'));
            yield 4 => ($container->privates['Sylius\\Bundle\\ApiBundle\\OpenApi\\Documentation\\ProductDocumentationModifier'] ?? ($container->privates['Sylius\\Bundle\\ApiBundle\\OpenApi\\Documentation\\ProductDocumentationModifier'] = new \Sylius\Bundle\ApiBundle\OpenApi\Documentation\ProductDocumentationModifier()));
            yield 5 => ($container->privates['Sylius\\Bundle\\ApiBundle\\OpenApi\\Documentation\\ProductImageDocumentationModifier'] ?? $container->load('getProductImageDocumentationModifierService'));
            yield 6 => ($container->privates['Sylius\\Bundle\\ApiBundle\\OpenApi\\Documentation\\ProductReviewDocumentationModifier'] ?? ($container->privates['Sylius\\Bundle\\ApiBundle\\OpenApi\\Documentation\\ProductReviewDocumentationModifier'] = new \Sylius\Bundle\ApiBundle\OpenApi\Documentation\ProductReviewDocumentationModifier('/api/v2')));
            yield 7 => ($container->privates['Sylius\\Bundle\\ApiBundle\\OpenApi\\Documentation\\ProductSlugDocumentationModifier'] ?? ($container->privates['Sylius\\Bundle\\ApiBundle\\OpenApi\\Documentation\\ProductSlugDocumentationModifier'] = new \Sylius\Bundle\ApiBundle\OpenApi\Documentation\ProductSlugDocumentationModifier('/api/v2')));
            yield 8 => ($container->privates['Sylius\\Bundle\\ApiBundle\\OpenApi\\Documentation\\ProductVariantDocumentationModifier'] ?? ($container->privates['Sylius\\Bundle\\ApiBundle\\OpenApi\\Documentation\\ProductVariantDocumentationModifier'] = new \Sylius\Bundle\ApiBundle\OpenApi\Documentation\ProductVariantDocumentationModifier()));
            yield 9 => ($container->privates['Sylius\\Bundle\\ApiBundle\\OpenApi\\Documentation\\ShippingMethodDocumentationModifier'] ?? ($container->privates['Sylius\\Bundle\\ApiBundle\\OpenApi\\Documentation\\ShippingMethodDocumentationModifier'] = new \Sylius\Bundle\ApiBundle\OpenApi\Documentation\ShippingMethodDocumentationModifier()));
            yield 10 => ($container->privates['Sylius\\Bundle\\ApiBundle\\OpenApi\\Documentation\\ShopAuthenticationTokenDocumentationModifier'] ?? ($container->privates['Sylius\\Bundle\\ApiBundle\\OpenApi\\Documentation\\ShopAuthenticationTokenDocumentationModifier'] = new \Sylius\Bundle\ApiBundle\OpenApi\Documentation\ShopAuthenticationTokenDocumentationModifier('/api/v2')));
            yield 11 => ($container->privates['Sylius\\Bundle\\ApiBundle\\OpenApi\\Documentation\\CustomerDocumentationModifier'] ?? ($container->privates['Sylius\\Bundle\\ApiBundle\\OpenApi\\Documentation\\CustomerDocumentationModifier'] = new \Sylius\Bundle\ApiBundle\OpenApi\Documentation\CustomerDocumentationModifier()));
            yield 12 => ($container->privates['Sylius\\Bundle\\ApiBundle\\OpenApi\\Documentation\\PromotionDocumentationModifier'] ?? $container->load('getPromotionDocumentationModifierService'));
            yield 13 => ($container->privates['Sylius\\Bundle\\ApiBundle\\OpenApi\\Documentation\\OrderAdjustmentsTypeDocumentationModifier'] ?? ($container->privates['Sylius\\Bundle\\ApiBundle\\OpenApi\\Documentation\\OrderAdjustmentsTypeDocumentationModifier'] = new \Sylius\Bundle\ApiBundle\OpenApi\Documentation\OrderAdjustmentsTypeDocumentationModifier('/api/v2', 'Sylius\\Component\\Core\\Model\\Adjustment')));
            yield 14 => ($container->privates['Sylius\\Bundle\\ApiBundle\\OpenApi\\Documentation\\AddressLogEntryDocumentationModifier'] ?? ($container->privates['Sylius\\Bundle\\ApiBundle\\OpenApi\\Documentation\\AddressLogEntryDocumentationModifier'] = new \Sylius\Bundle\ApiBundle\OpenApi\Documentation\AddressLogEntryDocumentationModifier()));
        }, 15));
    }
}
