<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Controller_UserSecurityService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.controller.user_security' shared service.
     *
     * @return \Sylius\Bundle\UserBundle\Controller\SecurityController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/UserBundle/Controller/SecurityController.php';

        $container->services['sylius.controller.user_security'] = $instance = new \Sylius\Bundle\UserBundle\Controller\SecurityController(($container->privates['security.authentication_utils'] ?? $container->load('getSecurity_AuthenticationUtilsService')), ($container->services['.container.private.form.factory'] ?? $container->get_Container_Private_Form_FactoryService()));

        $instance->setContainer($container);

        return $instance;
    }
}
