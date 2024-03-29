<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Api_OrderCurrencyFilterService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.api.order_currency_filter' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Orm/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Orm/PropertyHelperTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Common/PropertyHelperTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Orm/Filter/AbstractFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Orm/Filter/ContextAwareFilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Orm/Filter/AbstractContextAwareFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Common/Filter/SearchFilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Common/Filter/SearchFilterTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Doctrine/Orm/Filter/SearchFilter.php';

        $a = ($container->services['api_platform.iri_converter'] ?? $container->getApiPlatform_IriConverterService());

        if (isset($container->services['sylius.api.order_currency_filter'])) {
            return $container->services['sylius.api.order_currency_filter'];
        }

        return $container->services['sylius.api.order_currency_filter'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter(($container->services['doctrine'] ?? $container->getDoctrineService()), NULL, $a, ($container->privates['property_accessor'] ?? $container->getPropertyAccessorService()), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), ['currencyCode' => 'exact'], ($container->privates['api_platform.identifiers_extractor.cached'] ?? $container->getApiPlatform_IdentifiersExtractor_CachedService()), ($container->privates['serializer.name_converter.metadata_aware'] ?? $container->getSerializer_NameConverter_MetadataAwareService()));
    }
}
