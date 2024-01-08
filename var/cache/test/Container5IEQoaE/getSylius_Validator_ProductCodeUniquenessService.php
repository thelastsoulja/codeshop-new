<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Validator_ProductCodeUniquenessService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.validator.product_code_uniqueness' shared service.
     *
     * @return \Sylius\Bundle\ProductBundle\Validator\UniqueSimpleProductCodeValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ProductBundle/Validator/UniqueSimpleProductCodeValidator.php';

        return $container->services['sylius.validator.product_code_uniqueness'] = new \Sylius\Bundle\ProductBundle\Validator\UniqueSimpleProductCodeValidator(($container->services['sylius.repository.product_variant'] ?? $container->load('getSylius_Repository_ProductVariantService')));
    }
}
