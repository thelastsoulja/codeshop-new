<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPathPrefixProviderInterfaceService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\Provider\PathPrefixProviderInterface' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Provider\PathPrefixProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Provider/PathPrefixProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Provider/PathPrefixProvider.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\Provider\\PathPrefixProviderInterface'] = new \Sylius\Bundle\ApiBundle\Provider\PathPrefixProvider(($container->services['Sylius\\Bundle\\ApiBundle\\Context\\UserContextInterface'] ?? $container->getUserContextInterfaceService()), '/api/v2');
    }
}
