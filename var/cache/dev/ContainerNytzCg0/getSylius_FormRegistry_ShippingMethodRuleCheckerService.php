<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_FormRegistry_ShippingMethodRuleCheckerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form_registry.shipping_method_rule_checker' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\Form\Registry\FormTypeRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Registry/FormTypeRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Registry/FormTypeRegistry.php';

        $container->services['sylius.form_registry.shipping_method_rule_checker'] = $instance = new \Sylius\Bundle\ResourceBundle\Form\Registry\FormTypeRegistry();

        $instance->add('total_weight_greater_than_or_equal', 'default', 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\Rule\\TotalWeightGreaterThanOrEqualConfigurationType');
        $instance->add('total_weight_less_than_or_equal', 'default', 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\Rule\\TotalWeightLessThanOrEqualConfigurationType');
        $instance->add('order_total_greater_than_or_equal', 'default', 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Shipping\\Rule\\ChannelBasedOrderTotalGreaterThanOrEqualConfigurationType');
        $instance->add('order_total_less_than_or_equal', 'default', 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Shipping\\Rule\\ChannelBasedOrderTotalLessThanOrEqualConfigurationType');

        return $instance;
    }
}
