<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPromotionCouponEligibilityValidatorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\Validator\Constraints\PromotionCouponEligibilityValidator' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Validator\Constraints\PromotionCouponEligibilityValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Validator/Constraints/PromotionCouponEligibilityValidator.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\Validator\\Constraints\\PromotionCouponEligibilityValidator'] = new \Sylius\Bundle\ApiBundle\Validator\Constraints\PromotionCouponEligibilityValidator(($container->services['sylius.repository.promotion_coupon'] ?? $container->load('getSylius_Repository_PromotionCouponService')), ($container->services['sylius.repository.order'] ?? $container->getSylius_Repository_OrderService()), ($container->privates['Sylius\\Bundle\\ApiBundle\\Checker\\AppliedCouponEligibilityCheckerInterface'] ?? $container->load('getAppliedCouponEligibilityCheckerInterfaceService')));
    }
}