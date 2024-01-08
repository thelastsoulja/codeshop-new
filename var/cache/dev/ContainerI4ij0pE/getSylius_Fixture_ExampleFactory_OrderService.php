<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Fixture_ExampleFactory_OrderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.fixture.example_factory.order' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Fixture\Factory\OrderExampleFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Fixture/Factory/ExampleFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Fixture/Factory/AbstractExampleFactory.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Fixture/Factory/OrderExampleFactory.php';

        return $container->services['sylius.fixture.example_factory.order'] = new \Sylius\Bundle\CoreBundle\Fixture\Factory\OrderExampleFactory(($container->services['sylius.custom_factory.order'] ?? $container->getSylius_CustomFactory_OrderService()), ($container->services['sylius.factory.cart_item'] ?? $container->load('getSylius_Factory_CartItemService')), ($container->services['sylius.order_item_quantity_modifier.limiting'] ?? $container->load('getSylius_OrderItemQuantityModifier_LimitingService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['sylius.repository.channel'] ?? $container->getSylius_Repository_ChannelService()), ($container->services['sylius.repository.customer'] ?? $container->load('getSylius_Repository_CustomerService')), ($container->services['sylius.repository.product'] ?? $container->load('getSylius_Repository_ProductService')), ($container->services['sylius.repository.country'] ?? $container->load('getSylius_Repository_CountryService')), ($container->services['sylius.repository.payment_method'] ?? $container->getSylius_Repository_PaymentMethodService()), ($container->services['sylius.repository.shipping_method'] ?? $container->getSylius_Repository_ShippingMethodService()), ($container->services['sylius.factory.address'] ?? $container->load('getSylius_Factory_AddressService')), ($container->services['SM\\Factory\\FactoryInterface'] ?? $container->getFactoryInterfaceService()), ($container->services['sylius.checker.order_shipping_method_selection_requirement'] ?? $container->getSylius_Checker_OrderShippingMethodSelectionRequirementService()), ($container->services['sylius.checker.order_payment_method_selection_requirement'] ?? $container->getSylius_Checker_OrderPaymentMethodSelectionRequirementService()));
    }
}
