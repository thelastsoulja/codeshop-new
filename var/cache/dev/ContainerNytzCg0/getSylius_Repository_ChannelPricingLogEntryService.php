<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Repository_ChannelPricingLogEntryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.repository.channel_pricing_log_entry' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Doctrine\ORM\ChannelPricingLogEntryRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Repository/ChannelPricingLogEntryRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Doctrine/ORM/ChannelPricingLogEntryRepository.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->services['sylius.repository.channel_pricing_log_entry'])) {
            return $container->services['sylius.repository.channel_pricing_log_entry'];
        }

        return $container->services['sylius.repository.channel_pricing_log_entry'] = new \Sylius\Bundle\CoreBundle\Doctrine\ORM\ChannelPricingLogEntryRepository($a, $a->getClassMetadata('Sylius\\Component\\Core\\Model\\ChannelPricingLogEntry'));
    }
}