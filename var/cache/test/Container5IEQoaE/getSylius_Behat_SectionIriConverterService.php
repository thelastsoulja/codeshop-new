<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_SectionIriConverterService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'sylius.behat.section_iri_converter' shared service.
     *
     * @return \Sylius\Behat\Service\Converter\SectionAwareIriConverter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/Converter/SectionAwareIriConverterInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/Converter/SectionAwareIriConverter.php';

        return $container->privates['sylius.behat.section_iri_converter'] = new \Sylius\Behat\Service\Converter\SectionAwareIriConverter(($container->services['api_platform.route_name_resolver'] ?? $container->load('getApiPlatform_RouteNameResolverService')), ($container->privates['api_platform.router'] ?? $container->getApiPlatform_RouterService()), ($container->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $container->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($container->privates['api_platform.metadata.property.metadata_factory.cached.legacy'] ?? $container->getApiPlatform_Metadata_Property_MetadataFactory_Cached_LegacyService()), ($container->privates['property_accessor'] ?? $container->getPropertyAccessorService()), ($container->privates['api_platform.identifiers_extractor.cached'] ?? $container->getApiPlatform_IdentifiersExtractor_CachedService()), ($container->privates['api_platform.resource_class_resolver'] ?? $container->getApiPlatform_ResourceClassResolverService()), ($container->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()));
    }
}
