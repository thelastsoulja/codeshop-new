<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCatalogPromotionExampleFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\CoreBundle\Fixture\Factory\CatalogPromotionExampleFactory' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Fixture\Factory\CatalogPromotionExampleFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Fixture/Factory/ExampleFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Fixture/Factory/AbstractExampleFactory.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/Fixture/Factory/CatalogPromotionExampleFactory.php';

        return $container->services['Sylius\\Bundle\\CoreBundle\\Fixture\\Factory\\CatalogPromotionExampleFactory'] = new \Sylius\Bundle\CoreBundle\Fixture\Factory\CatalogPromotionExampleFactory(($container->services['sylius.factory.catalog_promotion'] ?? ($container->services['sylius.factory.catalog_promotion'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Core\\Model\\CatalogPromotion'))), ($container->services['sylius.repository.locale'] ?? $container->getSylius_Repository_LocaleService()), ($container->services['sylius.repository.channel'] ?? $container->getSylius_Repository_ChannelService()), ($container->services['Sylius\\Bundle\\CoreBundle\\Fixture\\Factory\\CatalogPromotionScopeExampleFactory'] ?? $container->load('getCatalogPromotionScopeExampleFactoryService')), ($container->services['Sylius\\Bundle\\CoreBundle\\Fixture\\Factory\\CatalogPromotionActionExampleFactory'] ?? $container->load('getCatalogPromotionActionExampleFactoryService')));
    }
}
