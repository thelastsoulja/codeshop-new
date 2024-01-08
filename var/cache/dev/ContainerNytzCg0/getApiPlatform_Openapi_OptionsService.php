<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Openapi_OptionsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.openapi.options' shared service.
     *
     * @return \ApiPlatform\OpenApi\Options
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/OpenApi/Options.php';

        return $container->privates['api_platform.openapi.options'] = new \ApiPlatform\OpenApi\Options('', '', '0.0.0', false, 'oauth2', 'application', '', '', '', [], $container->getParameter('api_platform.swagger.api_keys'), NULL, NULL, NULL, NULL, NULL, NULL);
    }
}
