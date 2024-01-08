<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Fixture_ShopUserService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.fixture.shop_user' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Fixture\ShopUserFixture
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/fixtures-bundle/src/Fixture/FixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Fixture/AbstractResourceFixture.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Fixture/ShopUserFixture.php';

        return $container->services['sylius.fixture.shop_user'] = new \Sylius\Bundle\CoreBundle\Fixture\ShopUserFixture(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['sylius.fixture.example_factory.shop_user'] ?? $container->load('getSylius_Fixture_ExampleFactory_ShopUserService')));
    }
}
