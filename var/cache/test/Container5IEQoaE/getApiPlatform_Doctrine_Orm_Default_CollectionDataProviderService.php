<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Doctrine_Orm_Default_CollectionDataProviderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.doctrine.orm.default.collection_data_provider' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Orm\CollectionDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Orm/CollectionDataProvider.php';

        return $container->privates['api_platform.doctrine.orm.default.collection_data_provider'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\CollectionDataProvider(($container->services['doctrine'] ?? $container->getDoctrineService()), new RewindableGenerator(function () use ($container) {
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
        }, 21));
    }
}
