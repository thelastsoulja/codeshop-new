<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Validator_InStockService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.validator.in_stock' shared service.
     *
     * @return \Sylius\Bundle\InventoryBundle\Validator\Constraints\InStockValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/InventoryBundle/Validator/Constraints/InStockValidator.php';

        return $container->services['sylius.validator.in_stock'] = new \Sylius\Bundle\InventoryBundle\Validator\Constraints\InStockValidator(($container->services['sylius.availability_checker.default'] ?? ($container->services['sylius.availability_checker.default'] = new \Sylius\Component\Inventory\Checker\AvailabilityChecker())));
    }
}
