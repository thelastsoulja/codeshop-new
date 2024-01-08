<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChooseShippingMethodHandlerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\CommandHandler\Checkout\ChooseShippingMethodHandler' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\CommandHandler\Checkout\ChooseShippingMethodHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/MessageHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/CommandHandler/Checkout/ChooseShippingMethodHandler.php';

        $a = ($container->services['SM\\Factory\\FactoryInterface'] ?? $container->getFactoryInterfaceService());

        if (isset($container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Checkout\\ChooseShippingMethodHandler'])) {
            return $container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Checkout\\ChooseShippingMethodHandler'];
        }

        return $container->services['Sylius\\Bundle\\ApiBundle\\CommandHandler\\Checkout\\ChooseShippingMethodHandler'] = new \Sylius\Bundle\ApiBundle\CommandHandler\Checkout\ChooseShippingMethodHandler(($container->services['sylius.repository.order'] ?? $container->getSylius_Repository_OrderService()), ($container->services['sylius.repository.shipping_method'] ?? $container->getSylius_Repository_ShippingMethodService()), ($container->services['sylius.repository.shipment'] ?? $container->getSylius_Repository_ShipmentService()), ($container->services['sylius.shipping_method_eligibility_checker'] ?? $container->getSylius_ShippingMethodEligibilityCheckerService()), $a);
    }
}