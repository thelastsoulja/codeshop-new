<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Fixture_ExampleFactory_ProductAttributeService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.fixture.example_factory.product_attribute' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Fixture\Factory\ProductAttributeExampleFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Fixture/Factory/ExampleFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Fixture/Factory/AbstractExampleFactory.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Fixture/Factory/ProductAttributeExampleFactory.php';

        return $container->services['sylius.fixture.example_factory.product_attribute'] = new \Sylius\Bundle\CoreBundle\Fixture\Factory\ProductAttributeExampleFactory(($container->services['sylius.factory.product_attribute'] ?? $container->load('getSylius_Factory_ProductAttributeService')), ($container->services['sylius.repository.locale'] ?? $container->getSylius_Repository_LocaleService()), $container->parameters['sylius.attribute.attribute_types']);
    }
}
