<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_PaymentService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.payment' shared service.
     *
     * @return \Sylius\Bundle\PaymentBundle\Form\Type\PaymentType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/AbstractResourceType.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/PaymentBundle/Form/Type/PaymentType.php';

        return $container->services['sylius.form.type.payment'] = new \Sylius\Bundle\PaymentBundle\Form\Type\PaymentType('Sylius\\Component\\Core\\Model\\Payment', $container->parameters['sylius.form.type.payment.validation_groups']);
    }
}