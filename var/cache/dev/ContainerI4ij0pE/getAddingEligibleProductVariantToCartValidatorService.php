<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddingEligibleProductVariantToCartValidatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\Validator\Constraints\AddingEligibleProductVariantToCartValidator' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Validator\Constraints\AddingEligibleProductVariantToCartValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Validator/Constraints/AddingEligibleProductVariantToCartValidator.php';

        $a = ($container->services['sylius.repository.product_variant'] ?? $container->load('getSylius_Repository_ProductVariantService'));

        if (isset($container->services['Sylius\\Bundle\\ApiBundle\\Validator\\Constraints\\AddingEligibleProductVariantToCartValidator'])) {
            return $container->services['Sylius\\Bundle\\ApiBundle\\Validator\\Constraints\\AddingEligibleProductVariantToCartValidator'];
        }
        $b = ($container->services['sylius.repository.order'] ?? $container->getSylius_Repository_OrderService());

        if (isset($container->services['Sylius\\Bundle\\ApiBundle\\Validator\\Constraints\\AddingEligibleProductVariantToCartValidator'])) {
            return $container->services['Sylius\\Bundle\\ApiBundle\\Validator\\Constraints\\AddingEligibleProductVariantToCartValidator'];
        }

        return $container->services['Sylius\\Bundle\\ApiBundle\\Validator\\Constraints\\AddingEligibleProductVariantToCartValidator'] = new \Sylius\Bundle\ApiBundle\Validator\Constraints\AddingEligibleProductVariantToCartValidator($a, $b, ($container->services['sylius.availability_checker.default'] ?? ($container->services['sylius.availability_checker.default'] = new \Sylius\Component\Inventory\Checker\AvailabilityChecker())));
    }
}