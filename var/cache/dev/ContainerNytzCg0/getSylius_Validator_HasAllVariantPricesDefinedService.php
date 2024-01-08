<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Validator_HasAllVariantPricesDefinedService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.validator.has_all_variant_prices_defined' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Validator\Constraints\HasAllVariantPricesDefinedValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Validator/Constraints/HasAllVariantPricesDefinedValidator.php';

        return $container->services['sylius.validator.has_all_variant_prices_defined'] = new \Sylius\Bundle\CoreBundle\Validator\Constraints\HasAllVariantPricesDefinedValidator();
    }
}
