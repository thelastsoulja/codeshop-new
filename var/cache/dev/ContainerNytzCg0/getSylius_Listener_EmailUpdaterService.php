<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Listener_EmailUpdaterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.listener.email_updater' shared service.
     *
     * @return \Sylius\Bundle\ShopBundle\EventListener\CustomerEmailUpdaterListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ShopBundle/EventListener/CustomerEmailUpdaterListener.php';

        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->services['sylius.listener.email_updater'])) {
            return $container->services['sylius.listener.email_updater'];
        }

        return $container->services['sylius.listener.email_updater'] = new \Sylius\Bundle\ShopBundle\EventListener\CustomerEmailUpdaterListener(($container->services['sylius.shop_user.token_generator.email_verification'] ?? $container->load('getSylius_ShopUser_TokenGenerator_EmailVerificationService')), ($container->services['Sylius\\Component\\Channel\\Context\\ChannelContextInterface'] ?? $container->getChannelContextInterfaceService()), $a, ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['sylius.section_resolver.uri_based_section_resolver'] ?? $container->getSylius_SectionResolver_UriBasedSectionResolverService()), ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()));
    }
}
