<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Extension_Type_PaymentMethodService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.extension.type.payment_method' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Form\Extension\PaymentMethodTypeExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Form/Extension/PaymentMethodTypeExtension.php';

        return $container->services['sylius.form.extension.type.payment_method'] = new \Sylius\Bundle\CoreBundle\Form\Extension\PaymentMethodTypeExtension(($container->services['Sylius\\Bundle\\PayumBundle\\Validator\\GroupsGenerator\\GatewayConfigGroupsGenerator'] ?? $container->load('getGatewayConfigGroupsGeneratorService')));
    }
}
