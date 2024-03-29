<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContextProviderInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\UiBundle\ContextProvider\ContextProviderInterface' shared service.
     *
     * @return \Sylius\Bundle\UiBundle\ContextProvider\DefaultContextProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/UiBundle/ContextProvider/ContextProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/UiBundle/ContextProvider/DefaultContextProvider.php';

        return $container->services['Sylius\\Bundle\\UiBundle\\ContextProvider\\ContextProviderInterface'] = new \Sylius\Bundle\UiBundle\ContextProvider\DefaultContextProvider();
    }
}
