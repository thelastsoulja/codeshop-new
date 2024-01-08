<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Fixture_CustomerGroupService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.fixture.customer_group' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Fixture\CustomerGroupFixture
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/fixtures-bundle/src/Fixture/FixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Fixture/AbstractResourceFixture.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Fixture/CustomerGroupFixture.php';

        return $container->services['sylius.fixture.customer_group'] = new \Sylius\Bundle\CoreBundle\Fixture\CustomerGroupFixture(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['sylius.fixture.example_factory.customer_group'] ?? $container->load('getSylius_Fixture_ExampleFactory_CustomerGroupService')));
    }
}
