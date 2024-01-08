<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetProductBySlugActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\Controller\GetProductBySlugAction' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Controller\GetProductBySlugAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Controller/GetProductBySlugAction.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\Controller\\GetProductBySlugAction'] = new \Sylius\Bundle\ApiBundle\Controller\GetProductBySlugAction(($container->services['Sylius\\Component\\Channel\\Context\\ChannelContextInterface'] ?? $container->getChannelContextInterfaceService()), ($container->services['Sylius\\Component\\Locale\\Context\\LocaleContextInterface'] ?? $container->getLocaleContextInterfaceService()), ($container->services['sylius.repository.product'] ?? $container->load('getSylius_Repository_ProductService')), ($container->privates['api_platform.symfony.iri_converter'] ?? $container->getApiPlatform_Symfony_IriConverterService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
