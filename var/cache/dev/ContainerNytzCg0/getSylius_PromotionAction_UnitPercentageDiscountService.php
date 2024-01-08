<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_PromotionAction_UnitPercentageDiscountService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.promotion_action.unit_percentage_discount' shared service.
     *
     * @return \Sylius\Component\Core\Promotion\Action\UnitPercentageDiscountPromotionActionCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Promotion/Action/PromotionActionCommandInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Promotion/Action/UnitDiscountPromotionActionCommand.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Promotion/Action/UnitPercentageDiscountPromotionActionCommand.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Promotion/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Promotion/Filter/TaxonFilter.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Promotion/Filter/ProductFilter.php';

        return $container->services['sylius.promotion_action.unit_percentage_discount'] = new \Sylius\Component\Core\Promotion\Action\UnitPercentageDiscountPromotionActionCommand(($container->services['Sylius\\Component\\Order\\Factory\\AdjustmentFactoryInterface'] ?? $container->load('getAdjustmentFactoryInterfaceService')), ($container->services['sylius.promotion_filter.price_range'] ?? $container->load('getSylius_PromotionFilter_PriceRangeService')), ($container->services['sylius.promotion_filter.taxon'] ?? ($container->services['sylius.promotion_filter.taxon'] = new \Sylius\Component\Core\Promotion\Filter\TaxonFilter())), ($container->services['sylius.promotion_filter.product'] ?? ($container->services['sylius.promotion_filter.product'] = new \Sylius\Component\Core\Promotion\Filter\ProductFilter())));
    }
}