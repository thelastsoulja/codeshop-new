<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Doctrine_Orm_Default_SubresourceDataProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.doctrine.orm.default.subresource_data_provider' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Orm\SubresourceDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Common/Util/IdentifierManagerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Orm/SubresourceDataProvider.php';

        $a = ($container->privates['api_platform.metadata.property.metadata_factory.cached.legacy'] ?? $container->getApiPlatform_Metadata_Property_MetadataFactory_Cached_LegacyService());

        if (isset($container->privates['api_platform.doctrine.orm.default.subresource_data_provider'])) {
            return $container->privates['api_platform.doctrine.orm.default.subresource_data_provider'];
        }

        return $container->privates['api_platform.doctrine.orm.default.subresource_data_provider'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\SubresourceDataProvider(($container->services['doctrine'] ?? $container->getDoctrineService()), ($container->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $container->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), $a, new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->services['Sylius\\Bundle\\ApiBundle\\Doctrine\\QueryCollectionExtension\\HideArchivedShippingMethodExtension'] ?? ($container->services['Sylius\\Bundle\\ApiBundle\\Doctrine\\QueryCollectionExtension\\HideArchivedShippingMethodExtension'] = new \Sylius\Bundle\ApiBundle\Doctrine\QueryCollectionExtension\HideArchivedShippingMethodExtension('Sylius\\Component\\Core\\Model\\ShippingMethod')));
            yield 1 => ($container->services['Sylius\\Bundle\\ApiBundle\\Doctrine\\QueryCollectionExtension\\AcceptedProductReviewsExtension'] ?? ($container->services['Sylius\\Bundle\\ApiBundle\\Doctrine\\QueryCollectionExtension\\AcceptedProductReviewsExtension'] = new \Sylius\Bundle\ApiBundle\Doctrine\QueryCollectionExtension\AcceptedProductReviewsExtension('Sylius\\Component\\Core\\Model\\ProductReview')));
            yield 2 => ($container->services['Sylius\\Bundle\\ApiBundle\\Doctrine\\QueryCollectionExtension\\AddressesExtension'] ?? $container->load('getAddressesExtensionService'));
            yield 3 => ($container->services['Sylius\\Bundle\\ApiBundle\\Doctrine\\QueryCollectionExtension\\ProductsByChannelAndLocaleCodeExtension'] ?? $container->load('getProductsByChannelAndLocaleCodeExtensionService'));
            yield 4 => ($container->services['Sylius\\Bundle\\ApiBundle\\Doctrine\\QueryCollectionExtension\\ProductsByTaxonExtension'] ?? $container->load('getProductsByTaxonExtensionService'));
            yield 5 => ($container->services['Sylius\\Bundle\\ApiBundle\\Doctrine\\QueryCollectionExtension\\AvailableProductAssociationsInProductCollectionExtension'] ?? $container->load('getAvailableProductAssociationsInProductCollectionExtensionService'));
            yield 6 => ($container->services['Sylius\\Bundle\\ApiBundle\\Doctrine\\QueryCollectionExtension\\OrdersByChannelExtension'] ?? $container->load('getOrdersByChannelExtensionService'));
            yield 7 => ($container->services['Sylius\\Bundle\\ApiBundle\\Doctrine\\QueryCollectionExtension\\OrdersByLoggedInUserExtension'] ?? $container->load('getOrdersByLoggedInUserExtensionService'));
            yield 8 => ($container->services['Sylius\\Bundle\\ApiBundle\\Doctrine\\QueryCollectionExtension\\ProductsWithEnableFlagExtension'] ?? $container->load('getProductsWithEnableFlagExtensionService'));
            yield 9 => ($container->services['Sylius\\Bundle\\ApiBundle\\Doctrine\\QueryCollectionExtension\\EnabledProductVariantsExtension'] ?? $container->load('getEnabledProductVariantsExtensionService'));
            yield 10 => ($container->services['Sylius\\Bundle\\ApiBundle\\Doctrine\\QueryCollectionExtension\\CountryCollectionExtension'] ?? $container->load('getCountryCollectionExtensionService'));
            yield 11 => ($container->services['Sylius\\Bundle\\ApiBundle\\Doctrine\\QueryCollectionExtension\\TaxonCollectionExtension'] ?? $container->load('getTaxonCollectionExtensionService'));
            yield 12 => ($container->services['Sylius\\Bundle\\ApiBundle\\Doctrine\\QueryCollectionExtension\\CurrencyCollectionExtension'] ?? $container->load('getCurrencyCollectionExtensionService'));
            yield 13 => ($container->services['Sylius\\Bundle\\ApiBundle\\Doctrine\\QueryCollectionExtension\\LocaleCollectionExtension'] ?? $container->load('getLocaleCollectionExtensionService'));
            yield 14 => ($container->services['Sylius\\Bundle\\ApiBundle\\Doctrine\\QueryExtension\\ExchangeRateExtension'] ?? $container->load('getExchangeRateExtensionService'));
            yield 15 => ($container->services['Sylius\\Bundle\\ApiBundle\\Doctrine\\QueryExtension\\OrderExtension'] ?? $container->load('getOrderExtensionService'));
            yield 16 => ($container->privates['api_platform.doctrine.orm.query_extension.filter'] ?? $container->load('getApiPlatform_Doctrine_Orm_QueryExtension_FilterService'));
            yield 17 => ($container->services['Sylius\\Bundle\\ApiBundle\\Doctrine\\QueryCollectionExtension\\RestrictingFilterEagerLoadingExtension'] ?? $container->load('getRestrictingFilterEagerLoadingExtensionService'));
            yield 18 => ($container->privates['api_platform.doctrine.orm.query_extension.eager_loading'] ?? $container->load('getApiPlatform_Doctrine_Orm_QueryExtension_EagerLoadingService'));
            yield 19 => ($container->privates['api_platform.doctrine.orm.query_extension.order'] ?? $container->load('getApiPlatform_Doctrine_Orm_QueryExtension_OrderService'));
            yield 20 => ($container->privates['api_platform.doctrine.orm.query_extension.pagination'] ?? $container->load('getApiPlatform_Doctrine_Orm_QueryExtension_PaginationService'));
        }, 21), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->services['Sylius\\Bundle\\ApiBundle\\Doctrine\\QueryItemExtension\\AddressItemExtension'] ?? $container->load('getAddressItemExtensionService'));
            yield 1 => ($container->services['Sylius\\Bundle\\ApiBundle\\Doctrine\\QueryItemExtension\\OrderShopUserItemExtension'] ?? $container->load('getOrderShopUserItemExtensionService'));
            yield 2 => ($container->services['Sylius\\Bundle\\ApiBundle\\Doctrine\\QueryItemExtension\\OrderVisitorItemExtension'] ?? $container->load('getOrderVisitorItemExtensionService'));
            yield 3 => ($container->services['Sylius\\Bundle\\ApiBundle\\Doctrine\\QueryItemExtension\\EnabledProductVariantItemExtension'] ?? $container->load('getEnabledProductVariantItemExtensionService'));
            yield 4 => ($container->services['Sylius\\Bundle\\ApiBundle\\Doctrine\\QueryItemExtension\\EnabledProductInProductAssociationItemExtension'] ?? $container->load('getEnabledProductInProductAssociationItemExtensionService'));
            yield 5 => ($container->services['Sylius\\Bundle\\ApiBundle\\Doctrine\\QueryExtension\\ExchangeRateExtension'] ?? $container->load('getExchangeRateExtensionService'));
            yield 6 => ($container->services['Sylius\\Bundle\\ApiBundle\\Doctrine\\QueryExtension\\OrderExtension'] ?? $container->load('getOrderExtensionService'));
            yield 7 => ($container->services['Sylius\\Bundle\\ApiBundle\\Doctrine\\QueryItemExtension\\TaxonItemExtension'] ?? $container->load('getTaxonItemExtensionService'));
            yield 8 => ($container->privates['api_platform.doctrine.orm.query_extension.eager_loading'] ?? $container->load('getApiPlatform_Doctrine_Orm_QueryExtension_EagerLoadingService'));
        }, 9), NULL);
    }
}
