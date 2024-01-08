<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChannelPricingLogEntriesRemoverInterface2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\CoreBundle\PriceHistory\Remover\ChannelPricingLogEntriesRemoverInterface' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\PriceHistory\Remover\ChannelPricingLogEntriesRemover
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/PriceHistory/Remover/ChannelPricingLogEntriesRemoverInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/PriceHistory/Remover/ChannelPricingLogEntriesRemover.php';

        return $container->services['Sylius\\Bundle\\CoreBundle\\PriceHistory\\Remover\\ChannelPricingLogEntriesRemoverInterface'] = new \Sylius\Bundle\CoreBundle\PriceHistory\Remover\ChannelPricingLogEntriesRemover(($container->services['sylius.repository.channel_pricing_log_entry'] ?? $container->load('getSylius_Repository_ChannelPricingLogEntryService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['Sylius\\Calendar\\Provider\\DateTimeProviderInterface'] ?? ($container->privates['Sylius\\Calendar\\Provider\\DateTimeProviderInterface'] = new \Sylius\Calendar\Provider\Calendar())), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), 100);
    }
}