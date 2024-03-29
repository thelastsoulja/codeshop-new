<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSyliusFixtures_SuiteLoaderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius_fixtures.suite_loader' shared service.
     *
     * @return \Sylius\Bundle\FixturesBundle\Loader\HookableSuiteLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/fixtures-bundle/src/Loader/SuiteLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/fixtures-bundle/src/Loader/HookableSuiteLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/fixtures-bundle/src/Loader/SuiteLoader.php';

        return $container->services['sylius_fixtures.suite_loader'] = new \Sylius\Bundle\FixturesBundle\Loader\HookableSuiteLoader(new \Sylius\Bundle\FixturesBundle\Loader\SuiteLoader(($container->services['sylius_fixtures.fixture_loader'] ?? $container->load('getSyliusFixtures_FixtureLoaderService'))));
    }
}
