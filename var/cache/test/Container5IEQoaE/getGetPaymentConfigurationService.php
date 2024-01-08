<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetPaymentConfigurationService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\Controller\Payment\GetPaymentConfiguration' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Controller\Payment\GetPaymentConfiguration
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Controller/Payment/GetPaymentConfiguration.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\Controller\\Payment\\GetPaymentConfiguration'] = new \Sylius\Bundle\ApiBundle\Controller\Payment\GetPaymentConfiguration(($container->services['sylius.repository.payment'] ?? $container->load('getSylius_Repository_PaymentService')), ($container->services['Sylius\\Bundle\\ApiBundle\\Provider\\CompositePaymentConfigurationProvider'] ?? $container->load('getCompositePaymentConfigurationProviderService')));
    }
}