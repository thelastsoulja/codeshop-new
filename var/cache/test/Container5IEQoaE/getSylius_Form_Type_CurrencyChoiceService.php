<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_CurrencyChoiceService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.currency_choice' shared service.
     *
     * @return \Sylius\Bundle\CurrencyBundle\Form\Type\CurrencyChoiceType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CurrencyBundle/Form/Type/CurrencyChoiceType.php';

        $a = ($container->services['sylius.repository.currency'] ?? $container->load('getSylius_Repository_CurrencyService'));

        if (isset($container->services['sylius.form.type.currency_choice'])) {
            return $container->services['sylius.form.type.currency_choice'];
        }

        return $container->services['sylius.form.type.currency_choice'] = new \Sylius\Bundle\CurrencyBundle\Form\Type\CurrencyChoiceType($a);
    }
}
