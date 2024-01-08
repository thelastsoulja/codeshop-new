<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrderShippingMethodEligibilityValidatorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\Validator\Constraints\OrderShippingMethodEligibilityValidator' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Validator\Constraints\OrderShippingMethodEligibilityValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Validator/Constraints/OrderShippingMethodEligibilityValidator.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\Validator\\Constraints\\OrderShippingMethodEligibilityValidator'] = new \Sylius\Bundle\ApiBundle\Validator\Constraints\OrderShippingMethodEligibilityValidator(($container->services['sylius.repository.order'] ?? $container->getSylius_Repository_OrderService()), ($container->services['sylius.shipping_method_eligibility_checker'] ?? $container->getSylius_ShippingMethodEligibilityCheckerService()));
    }
}
