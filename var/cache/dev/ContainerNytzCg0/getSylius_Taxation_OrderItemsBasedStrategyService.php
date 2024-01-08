<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Taxation_OrderItemsBasedStrategyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.taxation.order_items_based_strategy' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Taxation\Strategy\TaxCalculationStrategy
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Taxation/Strategy/TaxCalculationStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Taxation/Strategy/TaxCalculationStrategy.php';

        return $container->services['sylius.taxation.order_items_based_strategy'] = new \Sylius\Bundle\CoreBundle\Taxation\Strategy\TaxCalculationStrategy('order_items_based', new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->services['sylius.taxation.order_shipment_taxes_applicator'] ?? $container->load('getSylius_Taxation_OrderShipmentTaxesApplicatorService'));
            yield 1 => ($container->services['sylius.taxation.order_items_taxes_applicator'] ?? $container->load('getSylius_Taxation_OrderItemsTaxesApplicatorService'));
        }, 2));
    }
}
