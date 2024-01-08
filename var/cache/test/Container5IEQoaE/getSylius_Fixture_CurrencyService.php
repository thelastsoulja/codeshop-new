<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Fixture_CurrencyService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.fixture.currency' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Fixture\CurrencyFixture
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/fixtures-bundle/src/Fixture/FixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/fixtures-bundle/src/Fixture/AbstractFixture.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Fixture/CurrencyFixture.php';

        return $container->services['sylius.fixture.currency'] = new \Sylius\Bundle\CoreBundle\Fixture\CurrencyFixture(($container->services['sylius.factory.currency'] ?? ($container->services['sylius.factory.currency'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Currency\\Model\\Currency'))), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
