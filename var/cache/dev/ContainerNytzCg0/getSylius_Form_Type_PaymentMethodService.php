<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_PaymentMethodService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.payment_method' shared service.
     *
     * @return \Sylius\Bundle\PaymentBundle\Form\Type\PaymentMethodType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/AbstractResourceType.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/PaymentBundle/Form/Type/PaymentMethodType.php';

        return $container->services['sylius.form.type.payment_method'] = new \Sylius\Bundle\PaymentBundle\Form\Type\PaymentMethodType('Sylius\\Component\\Core\\Model\\PaymentMethod', $container->parameters['sylius.form.type.payment_method.validation_groups']);
    }
}
