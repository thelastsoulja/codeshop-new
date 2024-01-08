<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Openapi_CommandService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.openapi.command' shared service.
     *
     * @return \ApiPlatform\Symfony\Bundle\Command\OpenApiCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Symfony/Bundle/Command/OpenApiCommand.php';

        $container->privates['api_platform.openapi.command'] = $instance = new \ApiPlatform\Symfony\Bundle\Command\OpenApiCommand(($container->privates['Sylius\\Bundle\\ApiBundle\\OpenApi\\Factory\\OpenApiFactory'] ?? $container->load('getOpenApiFactoryService')), ($container->services['.container.private.serializer'] ?? $container->get_Container_Private_SerializerService()));

        $instance->setName('api:openapi:export');

        return $instance;
    }
}
