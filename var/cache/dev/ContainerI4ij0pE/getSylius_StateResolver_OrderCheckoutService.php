<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_StateResolver_OrderCheckoutService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.state_resolver.order_checkout' shared service.
     *
     * @return \Sylius\Component\Core\StateResolver\CheckoutStateResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Order/StateResolver/StateResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/StateResolver/CheckoutStateResolver.php';

        $a = ($container->services['SM\\Factory\\FactoryInterface'] ?? $container->getFactoryInterfaceService());

        if (isset($container->services['sylius.state_resolver.order_checkout'])) {
            return $container->services['sylius.state_resolver.order_checkout'];
        }

        return $container->services['sylius.state_resolver.order_checkout'] = new \Sylius\Component\Core\StateResolver\CheckoutStateResolver($a, ($container->services['sylius.checker.order_payment_method_selection_requirement'] ?? $container->getSylius_Checker_OrderPaymentMethodSelectionRequirementService()), ($container->services['sylius.checker.order_shipping_method_selection_requirement'] ?? $container->getSylius_Checker_OrderShippingMethodSelectionRequirementService()));
    }
}
