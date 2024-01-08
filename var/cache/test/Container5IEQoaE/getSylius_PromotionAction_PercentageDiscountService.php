<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_PromotionAction_PercentageDiscountService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.promotion_action.percentage_discount' shared service.
     *
     * @return \Sylius\Component\Core\Promotion\Action\PercentageDiscountPromotionActionCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Promotion/Action/PromotionActionCommandInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Promotion/Action/DiscountPromotionActionCommand.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Promotion/Action/PercentageDiscountPromotionActionCommand.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Distributor/ProportionalIntegerDistributorInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Distributor/ProportionalIntegerDistributor.php';

        return $container->services['sylius.promotion_action.percentage_discount'] = new \Sylius\Component\Core\Promotion\Action\PercentageDiscountPromotionActionCommand(($container->services['sylius.proportional_integer_distributor'] ?? ($container->services['sylius.proportional_integer_distributor'] = new \Sylius\Component\Core\Distributor\ProportionalIntegerDistributor())), ($container->services['sylius.promotion.units_promotion_adjustments_applicator'] ?? $container->load('getSylius_Promotion_UnitsPromotionAdjustmentsApplicatorService')), ($container->services['Sylius\\Component\\Core\\Distributor\\MinimumPriceDistributorInterface'] ?? $container->load('getMinimumPriceDistributorInterfaceService')));
    }
}
