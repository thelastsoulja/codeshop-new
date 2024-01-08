<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHateoas_Configuration_Metadata_YamlDriverService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'hateoas.configuration.metadata.yaml_driver' shared service.
     *
     * @return \Hateoas\Configuration\Metadata\Driver\YamlDriver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/AdvancedDriverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/AbstractFileDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/willdurand/hateoas/src/Configuration/Metadata/Driver/CheckExpressionTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/willdurand/hateoas/src/Configuration/Metadata/Driver/YamlDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Type/ParserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Type/Parser.php';

        return $container->privates['hateoas.configuration.metadata.yaml_driver'] = new \Hateoas\Configuration\Metadata\Driver\YamlDriver(($container->privates['jms_serializer.metadata.traceable_file_locator'] ?? $container->getJmsSerializer_Metadata_TraceableFileLocatorService()), ($container->privates['jms_serializer.expression_evaluator'] ?? $container->getJmsSerializer_ExpressionEvaluatorService()), ($container->services['hateoas.configuration.provider'] ?? $container->load('getHateoas_Configuration_ProviderService')), ($container->privates['jms_serializer.type_parser'] ?? ($container->privates['jms_serializer.type_parser'] = new \JMS\Serializer\Type\Parser())));
    }
}
