<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_ShippingMethodService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.shipping_method' shared service.
     *
     * @return \Sylius\Bundle\ShippingBundle\Form\Type\ShippingMethodType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/AbstractResourceType.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ShippingBundle/Form/Type/ShippingMethodType.php';

        return $container->services['sylius.form.type.shipping_method'] = new \Sylius\Bundle\ShippingBundle\Form\Type\ShippingMethodType('Sylius\\Component\\Core\\Model\\ShippingMethod', $container->parameters['sylius.form.type.shipping_method.validation_groups'], 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingMethodTranslationType', ($container->services['sylius.registry.shipping_calculator'] ?? $container->getSylius_Registry_ShippingCalculatorService()), ($container->services['sylius.form_registry.shipping_calculator'] ?? $container->load('getSylius_FormRegistry_ShippingCalculatorService')));
    }
}
