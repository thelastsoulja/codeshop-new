<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Doctrine_Orm_Default_ItemDataProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.doctrine.orm.default.item_data_provider' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Orm\ItemDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/DataProvider/DenormalizedIdentifiersAwareItemDataProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Common/Util/IdentifierManagerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Orm/ItemDataProvider.php';

        $a = ($container->privates['api_platform.metadata.property.metadata_factory.cached.legacy'] ?? $container->getApiPlatform_Metadata_Property_MetadataFactory_Cached_LegacyService());

        if (isset($container->privates['api_platform.doctrine.orm.default.item_data_provider'])) {
            return $container->privates['api_platform.doctrine.orm.default.item_data_provider'];
        }

        return $container->privates['api_platform.doctrine.orm.default.item_data_provider'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\ItemDataProvider(($container->services['doctrine'] ?? $container->getDoctrineService()), ($container->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $container->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), $a, new RewindableGenerator(function () use ($container) {
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
