<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPriceChangeLoggerInterface2Service extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\CoreBundle\PriceHistory\Logger\PriceChangeLoggerInterface' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\PriceHistory\Logger\PriceChangeLogger
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/PriceHistory/Logger/PriceChangeLoggerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/PriceHistory/Logger/PriceChangeLogger.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Factory/ChannelPricingLogEntryFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Factory/ChannelPricingLogEntryFactory.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->services['Sylius\\Bundle\\CoreBundle\\PriceHistory\\Logger\\PriceChangeLoggerInterface'])) {
            return $container->services['Sylius\\Bundle\\CoreBundle\\PriceHistory\\Logger\\PriceChangeLoggerInterface'];
        }

        return $container->services['Sylius\\Bundle\\CoreBundle\\PriceHistory\\Logger\\PriceChangeLoggerInterface'] = new \Sylius\Bundle\CoreBundle\PriceHistory\Logger\PriceChangeLogger(($container->services['sylius.factory.channel_pricing_log_entry'] ?? ($container->services['sylius.factory.channel_pricing_log_entry'] = new \Sylius\Component\Core\Factory\ChannelPricingLogEntryFactory('Sylius\\Component\\Core\\Model\\ChannelPricingLogEntry'))), $a, ($container->privates['Sylius\\Calendar\\Provider\\DateTimeProviderInterface'] ?? ($container->privates['Sylius\\Calendar\\Provider\\DateTimeProviderInterface'] = new \Sylius\Calendar\Tests\Behat\Provider\FakeCalendar(\dirname(__DIR__, 4)))));
    }
}