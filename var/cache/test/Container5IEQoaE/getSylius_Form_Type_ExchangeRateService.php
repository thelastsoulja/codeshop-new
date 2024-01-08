<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_ExchangeRateService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.exchange_rate' shared service.
     *
     * @return \Sylius\Bundle\CurrencyBundle\Form\Type\ExchangeRateType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/AbstractResourceType.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CurrencyBundle/Form/Type/ExchangeRateType.php';

        return $container->services['sylius.form.type.exchange_rate'] = new \Sylius\Bundle\CurrencyBundle\Form\Type\ExchangeRateType('Sylius\\Component\\Currency\\Model\\ExchangeRate', $container->parameters['sylius.form.type.exchange_rate.validation_groups']);
    }
}
