<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Context_Setup_ExchangeRateService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.behat.context.setup.exchange_rate' shared service.
     *
     * @return \Sylius\Behat\Context\Setup\ExchangeRateContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Setup/ExchangeRateContext.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedStorageInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedStorage.php';

        return $container->services['sylius.behat.context.setup.exchange_rate'] = new \Sylius\Behat\Context\Setup\ExchangeRateContext(($container->privates['sylius.behat.shared_storage'] ?? ($container->privates['sylius.behat.shared_storage'] = new \Sylius\Behat\Service\SharedStorage())), ($container->services['sylius.factory.exchange_rate'] ?? ($container->services['sylius.factory.exchange_rate'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Currency\\Model\\ExchangeRate'))), ($container->services['sylius.repository.exchange_rate'] ?? $container->getSylius_Repository_ExchangeRateService()));
    }
}