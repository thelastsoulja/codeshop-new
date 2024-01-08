<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Identifier_IntegerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.identifier.integer' shared service.
     *
     * @return \ApiPlatform\Core\Identifier\Normalizer\IntegerDenormalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Identifier/Normalizer/IntegerDenormalizer.php';

        return $container->privates['api_platform.identifier.integer'] = new \ApiPlatform\Core\Identifier\Normalizer\IntegerDenormalizer();
    }
}
