<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_FormRegistry_ShippingCalculatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form_registry.shipping_calculator' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\Form\Registry\FormTypeRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Registry/FormTypeRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Registry/FormTypeRegistry.php';

        $container->services['sylius.form_registry.shipping_calculator'] = $instance = new \Sylius\Bundle\ResourceBundle\Form\Registry\FormTypeRegistry();

        $instance->add('flat_rate', 'default', 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Shipping\\Calculator\\ChannelBasedFlatRateConfigurationType');
        $instance->add('per_unit_rate', 'default', 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Shipping\\Calculator\\ChannelBasedPerUnitRateConfigurationType');

        return $instance;
    }
}
