<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Fixture_AdminUserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.fixture.admin_user' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Fixture\AdminUserFixture
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Definition/ConfigurationInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/fixtures-bundle/src/Fixture/FixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Fixture/AbstractResourceFixture.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Fixture/AdminUserFixture.php';

        return $container->services['sylius.fixture.admin_user'] = new \Sylius\Bundle\CoreBundle\Fixture\AdminUserFixture(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['sylius.fixture.example_factory.admin_user'] ?? $container->load('getSylius_Fixture_ExampleFactory_AdminUserService')));
    }
}
