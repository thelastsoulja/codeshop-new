<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Fixture_ExampleFactory_ShippingCategoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.fixture.example_factory.shipping_category' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Fixture\Factory\ShippingCategoryExampleFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Fixture/Factory/ExampleFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Fixture/Factory/AbstractExampleFactory.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Fixture/Factory/ShippingCategoryExampleFactory.php';

        return $container->services['sylius.fixture.example_factory.shipping_category'] = new \Sylius\Bundle\CoreBundle\Fixture\Factory\ShippingCategoryExampleFactory(($container->services['sylius.factory.shipping_category'] ?? ($container->services['sylius.factory.shipping_category'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Shipping\\Model\\ShippingCategory'))));
    }
}
