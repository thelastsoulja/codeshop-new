<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_OrderItemService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.order_item' shared service.
     *
     * @return \Sylius\Bundle\OrderBundle\Form\Type\OrderItemType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/AbstractResourceType.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/OrderBundle/Form/Type/OrderItemType.php';

        return $container->services['sylius.form.type.order_item'] = new \Sylius\Bundle\OrderBundle\Form\Type\OrderItemType('Sylius\\Component\\Core\\Model\\OrderItem', $container->parameters['sylius.form.type.order_item.validation_groups'], ($container->services['sylius.form.data_mapper.order_item_quantity'] ?? $container->load('getSylius_Form_DataMapper_OrderItemQuantityService')));
    }
}
