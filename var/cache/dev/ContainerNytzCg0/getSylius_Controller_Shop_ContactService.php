<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Controller_Shop_ContactService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.controller.shop.contact' shared service.
     *
     * @return \Sylius\Bundle\ShopBundle\Controller\ContactController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ShopBundle/Controller/ContactController.php';

        return $container->services['sylius.controller.shop.contact'] = new \Sylius\Bundle\ShopBundle\Controller\ContactController(($container->services['router'] ?? $container->getRouterService()), ($container->services['.container.private.form.factory'] ?? $container->get_Container_Private_Form_FactoryService()), ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService()), ($container->services['Sylius\\Component\\Channel\\Context\\ChannelContextInterface'] ?? $container->getChannelContextInterfaceService()), ($container->services['sylius.context.customer'] ?? $container->getSylius_Context_CustomerService()), ($container->services['Sylius\\Component\\Locale\\Context\\LocaleContextInterface'] ?? $container->getLocaleContextInterfaceService()), ($container->services['sylius.email_manager.contact'] ?? $container->load('getSylius_EmailManager_ContactService')));
    }
}