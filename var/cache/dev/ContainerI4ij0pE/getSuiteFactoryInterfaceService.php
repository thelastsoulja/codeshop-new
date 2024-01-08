<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuiteFactoryInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\FixturesBundle\Suite\SuiteFactoryInterface' shared service.
     *
     * @return \Sylius\Bundle\FixturesBundle\Suite\SuiteFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/fixtures-bundle/src/Suite/SuiteFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/fixtures-bundle/src/Suite/SuiteFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Definition/Processor.php';

        $a = ($container->services['Sylius\\Bundle\\FixturesBundle\\Listener\\ListenerRegistryInterface'] ?? $container->load('getListenerRegistryInterfaceService'));

        if (isset($container->services['Sylius\\Bundle\\FixturesBundle\\Suite\\SuiteFactoryInterface'])) {
            return $container->services['Sylius\\Bundle\\FixturesBundle\\Suite\\SuiteFactoryInterface'];
        }

        return $container->services['Sylius\\Bundle\\FixturesBundle\\Suite\\SuiteFactoryInterface'] = new \Sylius\Bundle\FixturesBundle\Suite\SuiteFactory(($container->services['sylius_fixtures.fixture_registry'] ?? $container->load('getSyliusFixtures_FixtureRegistryService')), $a, new \Symfony\Component\Config\Definition\Processor());
    }
}
