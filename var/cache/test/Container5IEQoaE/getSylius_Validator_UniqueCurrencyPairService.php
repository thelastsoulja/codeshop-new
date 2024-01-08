<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Validator_UniqueCurrencyPairService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.validator.unique_currency_pair' shared service.
     *
     * @return \Sylius\Bundle\CurrencyBundle\Validator\Constraints\UniqueCurrencyPairValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CurrencyBundle/Validator/Constraints/UniqueCurrencyPairValidator.php';

        return $container->services['sylius.validator.unique_currency_pair'] = new \Sylius\Bundle\CurrencyBundle\Validator\Constraints\UniqueCurrencyPairValidator(($container->services['sylius.repository.exchange_rate'] ?? $container->getSylius_Repository_ExchangeRateService()));
    }
}