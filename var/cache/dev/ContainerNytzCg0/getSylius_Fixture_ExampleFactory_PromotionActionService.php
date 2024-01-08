<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Fixture_ExampleFactory_PromotionActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.fixture.example_factory.promotion_action' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Fixture\Factory\PromotionActionExampleFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Fixture/Factory/ExampleFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Fixture/Factory/AbstractExampleFactory.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Fixture/Factory/PromotionActionExampleFactory.php';

        return $container->services['sylius.fixture.example_factory.promotion_action'] = new \Sylius\Bundle\CoreBundle\Fixture\Factory\PromotionActionExampleFactory(($container->services['Sylius\\Component\\Core\\Factory\\PromotionActionFactoryInterface'] ?? $container->load('getPromotionActionFactoryInterfaceService')));
    }
}
