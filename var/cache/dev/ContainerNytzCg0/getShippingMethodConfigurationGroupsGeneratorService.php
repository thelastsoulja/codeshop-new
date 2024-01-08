<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getShippingMethodConfigurationGroupsGeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ShippingBundle\Validator\GroupsGenerator\ShippingMethodConfigurationGroupsGenerator' shared service.
     *
     * @return \Sylius\Bundle\ShippingBundle\Validator\GroupsGenerator\ShippingMethodConfigurationGroupsGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ShippingBundle/Validator/GroupsGenerator/ShippingMethodConfigurationGroupsGenerator.php';

        return $container->services['Sylius\\Bundle\\ShippingBundle\\Validator\\GroupsGenerator\\ShippingMethodConfigurationGroupsGenerator'] = new \Sylius\Bundle\ShippingBundle\Validator\GroupsGenerator\ShippingMethodConfigurationGroupsGenerator($container->parameters['sylius.shipping.shipping_method_calculator.validation_groups']);
    }
}
