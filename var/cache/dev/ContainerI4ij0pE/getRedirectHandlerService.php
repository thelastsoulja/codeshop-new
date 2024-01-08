<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRedirectHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\AdminBundle\Controller\RedirectHandler' shared service.
     *
     * @return \Sylius\Bundle\AdminBundle\Controller\RedirectHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/RedirectHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/AdminBundle/Controller/RedirectHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/RedirectHandler.php';

        return $container->privates['Sylius\\Bundle\\AdminBundle\\Controller\\RedirectHandler'] = new \Sylius\Bundle\AdminBundle\Controller\RedirectHandler(new \Sylius\Bundle\ResourceBundle\Controller\RedirectHandler(($container->services['router'] ?? $container->getRouterService())), ($container->privates['Sylius\\Bundle\\UiBundle\\Storage\\FilterStorage'] ?? $container->getFilterStorageService()));
    }
}