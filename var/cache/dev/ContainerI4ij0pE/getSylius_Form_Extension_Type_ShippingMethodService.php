<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Extension_Type_ShippingMethodService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.extension.type.shipping_method' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Form\Extension\ShippingMethodTypeExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Form/Extension/ShippingMethodTypeExtension.php';

        return $container->services['sylius.form.extension.type.shipping_method'] = new \Sylius\Bundle\CoreBundle\Form\Extension\ShippingMethodTypeExtension(($container->services['Sylius\\Bundle\\ShippingBundle\\Validator\\GroupsGenerator\\ShippingMethodConfigurationGroupsGenerator'] ?? $container->load('getShippingMethodConfigurationGroupsGeneratorService')));
    }
}
