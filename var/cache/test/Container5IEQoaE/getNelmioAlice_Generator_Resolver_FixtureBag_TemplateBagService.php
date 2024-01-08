<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_Generator_Resolver_FixtureBag_TemplateBagService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.generator.resolver.fixture_bag.template_bag' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\Fixture\TemplateFixtureBagResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/FixtureBagResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Fixture/TemplateFixtureBagResolver.php';

        return $container->privates['nelmio_alice.generator.resolver.fixture_bag.template_bag'] = new \Nelmio\Alice\Generator\Resolver\Fixture\TemplateFixtureBagResolver();
    }
}
