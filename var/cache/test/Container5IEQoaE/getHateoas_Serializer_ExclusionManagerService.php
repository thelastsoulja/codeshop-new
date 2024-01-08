<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHateoas_Serializer_ExclusionManagerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'hateoas.serializer.exclusion_manager' shared service.
     *
     * @return \Hateoas\Serializer\ExclusionManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/willdurand/hateoas/src/Serializer/ExclusionManager.php';

        return $container->privates['hateoas.serializer.exclusion_manager'] = new \Hateoas\Serializer\ExclusionManager(($container->privates['hateoas.serializer.exclusion.expression_language_strategy'] ?? $container->load('getHateoas_Serializer_Exclusion_ExpressionLanguageStrategyService')));
    }
}