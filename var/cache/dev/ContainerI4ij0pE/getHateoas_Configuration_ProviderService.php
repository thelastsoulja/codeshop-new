<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHateoas_Configuration_ProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'hateoas.configuration.provider' shared service.
     *
     * @return \Hateoas\Configuration\Provider\ChainProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/willdurand/hateoas/src/Configuration/Provider/RelationProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/willdurand/hateoas/src/Configuration/Provider/ChainProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/willdurand/hateoas/src/Configuration/Provider/FunctionProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/willdurand/hateoas/src/Configuration/Provider/StaticMethodProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/willdurand/hateoas/src/Configuration/Provider/ExpressionEvaluatorProvider.php';

        return $container->services['hateoas.configuration.provider'] = new \Hateoas\Configuration\Provider\ChainProvider([0 => new \Hateoas\Configuration\Provider\FunctionProvider(), 1 => new \Hateoas\Configuration\Provider\StaticMethodProvider(), 2 => new \Hateoas\Configuration\Provider\ExpressionEvaluatorProvider(($container->privates['jms_serializer.expression_evaluator'] ?? $container->getJmsSerializer_ExpressionEvaluatorService()))]);
    }
}
