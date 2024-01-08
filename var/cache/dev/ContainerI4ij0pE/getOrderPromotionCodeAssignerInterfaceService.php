<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrderPromotionCodeAssignerInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\Assigner\OrderPromotionCodeAssignerInterface' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Assigner\OrderPromotionCodeAssigner
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Assigner/OrderPromotionCodeAssignerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Assigner/OrderPromotionCodeAssigner.php';

        $a = ($container->services['sylius.order_processing.order_processor'] ?? $container->load('getSylius_OrderProcessing_OrderProcessorService'));

        if (isset($container->services['Sylius\\Bundle\\ApiBundle\\Assigner\\OrderPromotionCodeAssignerInterface'])) {
            return $container->services['Sylius\\Bundle\\ApiBundle\\Assigner\\OrderPromotionCodeAssignerInterface'];
        }

        return $container->services['Sylius\\Bundle\\ApiBundle\\Assigner\\OrderPromotionCodeAssignerInterface'] = new \Sylius\Bundle\ApiBundle\Assigner\OrderPromotionCodeAssigner(($container->services['sylius.repository.promotion_coupon'] ?? $container->load('getSylius_Repository_PromotionCouponService')), $a);
    }
}
