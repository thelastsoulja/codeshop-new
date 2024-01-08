<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Validator_ProductCodeExistsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.validator.product_code_exists' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Validator\Constraints\ProductCodeExistsValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Validator/Constraints/ProductCodeExistsValidator.php';

        return $container->services['sylius.validator.product_code_exists'] = new \Sylius\Bundle\CoreBundle\Validator\Constraints\ProductCodeExistsValidator(($container->services['sylius.repository.product'] ?? $container->load('getSylius_Repository_ProductService')));
    }
}
