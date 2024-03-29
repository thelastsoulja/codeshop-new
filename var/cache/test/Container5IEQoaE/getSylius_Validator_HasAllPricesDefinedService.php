<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Validator_HasAllPricesDefinedService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.validator.has_all_prices_defined' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Validator\Constraints\HasAllPricesDefinedValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Validator/Constraints/HasAllPricesDefinedValidator.php';

        return $container->services['sylius.validator.has_all_prices_defined'] = new \Sylius\Bundle\CoreBundle\Validator\Constraints\HasAllPricesDefinedValidator();
    }
}
