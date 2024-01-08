<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Controller_Shop_RegisterThankYouService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.controller.shop.register_thank_you' shared service.
     *
     * @return \Sylius\Bundle\ShopBundle\Controller\RegistrationThankYouController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ShopBundle/Controller/RegistrationThankYouController.php';

        return $container->services['sylius.controller.shop.register_thank_you'] = new \Sylius\Bundle\ShopBundle\Controller\RegistrationThankYouController(($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService()), ($container->services['Sylius\\Component\\Channel\\Context\\ChannelContextInterface'] ?? $container->getChannelContextInterfaceService()), ($container->services['router'] ?? $container->getRouterService()));
    }
}
