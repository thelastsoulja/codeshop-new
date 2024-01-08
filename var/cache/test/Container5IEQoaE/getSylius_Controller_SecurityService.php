<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Controller_SecurityService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.controller.security' shared service.
     *
     * @return \Sylius\Bundle\UiBundle\Controller\SecurityController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/UiBundle/Controller/SecurityController.php';

        return $container->services['sylius.controller.security'] = new \Sylius\Bundle\UiBundle\Controller\SecurityController(($container->privates['security.authentication_utils'] ?? $container->load('getSecurity_AuthenticationUtilsService')), ($container->services['.container.private.form.factory'] ?? $container->get_Container_Private_Form_FactoryService()), ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService()), ($container->services['.container.private.security.authorization_checker'] ?? $container->get_Container_Private_Security_AuthorizationCheckerService()), ($container->services['router'] ?? $container->getRouterService()));
    }
}
