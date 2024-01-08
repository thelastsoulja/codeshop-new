<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCompositePaymentConfigurationProviderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\Provider\CompositePaymentConfigurationProvider' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Provider\CompositePaymentConfigurationProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Provider/CompositePaymentConfigurationProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Provider/CompositePaymentConfigurationProvider.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\Provider\\CompositePaymentConfigurationProvider'] = new \Sylius\Bundle\ApiBundle\Provider\CompositePaymentConfigurationProvider(new RewindableGenerator(function () use ($container) {
            return new \EmptyIterator();
        }, 0));
    }
}
