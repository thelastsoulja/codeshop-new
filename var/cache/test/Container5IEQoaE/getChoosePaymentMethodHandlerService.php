<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChoosePaymentMethodHandlerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\CommandHandler\Checkout\ChoosePaymentMethodHandler' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\CommandHandler\Checkout\ChoosePaymentMethodHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/MessageHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/CommandHandler/Checkout/ChoosePaymentMethodHandler.php';

        $a = ($container->services['SM\\Factory\\FactoryInterface'] ?? $container->getFactoryInterfaceService());

        if (isset($container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Checkout\\ChoosePaymentMethodHandler'])) {
            return $container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Checkout\\ChoosePaymentMethodHandler'];
        }

        return $container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Checkout\\ChoosePaymentMethodHandler'] = new \Sylius\Bundle\ApiBundle\CommandHandler\Checkout\ChoosePaymentMethodHandler(($container->services['sylius.repository.order'] ?? $container->getSylius_Repository_OrderService()), ($container->services['sylius.repository.payment_method'] ?? $container->getSylius_Repository_PaymentMethodService()), ($container->services['sylius.repository.payment'] ?? $container->load('getSylius_Repository_PaymentService')), $a, ($container->privates['Sylius\\Bundle\\ApiBundle\\Changer\\PaymentMethodChangerInterface'] ?? $container->load('getPaymentMethodChangerInterfaceService')));
    }
}
