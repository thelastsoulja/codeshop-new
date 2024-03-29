<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPaymentFactoryInterfaceService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Component\Payment\Factory\PaymentFactoryInterface' shared service.
     *
     * @return \Sylius\Component\Payment\Factory\PaymentFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Payment/Factory/PaymentFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Payment/Factory/PaymentFactory.php';

        return $container->services['Sylius\\Component\\Payment\\Factory\\PaymentFactoryInterface'] = new \Sylius\Component\Payment\Factory\PaymentFactory(($container->privates['sylius.custom_factory.payment.inner'] ?? ($container->privates['sylius.custom_factory.payment.inner'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Core\\Model\\Payment'))));
    }
}
