<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSingleValueForProductVariantOptionValidatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\Validator\Constraints\SingleValueForProductVariantOptionValidator' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Validator\Constraints\SingleValueForProductVariantOptionValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Validator/Constraints/SingleValueForProductVariantOptionValidator.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\Validator\\Constraints\\SingleValueForProductVariantOptionValidator'] = new \Sylius\Bundle\ApiBundle\Validator\Constraints\SingleValueForProductVariantOptionValidator();
    }
}
