<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_ShippingMethodRule_CollectionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.shipping_method_rule.collection' shared service.
     *
     * @return \Sylius\Bundle\ShippingBundle\Form\Type\ShippingMethodRuleCollectionType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ShippingBundle/Form/Type/Core/AbstractConfigurationCollectionType.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ShippingBundle/Form/Type/ShippingMethodRuleCollectionType.php';

        return $container->services['sylius.form.type.shipping_method_rule.collection'] = new \Sylius\Bundle\ShippingBundle\Form\Type\ShippingMethodRuleCollectionType(($container->services['sylius.registry.shipping_method_rule_checker'] ?? $container->getSylius_Registry_ShippingMethodRuleCheckerService()));
    }
}
