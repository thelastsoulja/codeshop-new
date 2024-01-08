<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Context_Transform_CurrencyService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.behat.context.transform.currency' shared service.
     *
     * @return \Sylius\Behat\Context\Transform\CurrencyContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Transform/CurrencyContext.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Currency/Converter/CurrencyNameConverterInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Currency/Converter/CurrencyNameConverter.php';

        return $container->services['sylius.behat.context.transform.currency'] = new \Sylius\Behat\Context\Transform\CurrencyContext(($container->services['sylius.currency_name_converter'] ?? ($container->services['sylius.currency_name_converter'] = new \Sylius\Component\Currency\Converter\CurrencyNameConverter())), ($container->services['sylius.repository.currency'] ?? $container->load('getSylius_Repository_CurrencyService')));
    }
}
