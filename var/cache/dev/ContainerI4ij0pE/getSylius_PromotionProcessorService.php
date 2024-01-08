<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_PromotionProcessorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.promotion_processor' shared service.
     *
     * @return \Sylius\Component\Promotion\Processor\PromotionProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Promotion/Processor/PromotionProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Promotion/Processor/PromotionProcessor.php';

        $a = ($container->services['sylius.active_promotions_provider'] ?? $container->load('getSylius_ActivePromotionsProviderService'));

        if (isset($container->services['sylius.promotion_processor'])) {
            return $container->services['sylius.promotion_processor'];
        }
        $b = ($container->services['sylius.promotion_eligibility_checker'] ?? $container->load('getSylius_PromotionEligibilityCheckerService'));

        if (isset($container->services['sylius.promotion_processor'])) {
            return $container->services['sylius.promotion_processor'];
        }
        $c = ($container->services['sylius.promotion_applicator'] ?? $container->load('getSylius_PromotionApplicatorService'));

        if (isset($container->services['sylius.promotion_processor'])) {
            return $container->services['sylius.promotion_processor'];
        }

        return $container->services['sylius.promotion_processor'] = new \Sylius\Component\Promotion\Processor\PromotionProcessor($a, $b, $c);
    }
}
