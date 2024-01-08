<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCatalogPromotionContextService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Behat\Context\Setup\CatalogPromotionContext' shared service.
     *
     * @return \Sylius\Behat\Context\Setup\CatalogPromotionContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Setup/CatalogPromotionContext.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedStorageInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Service/SharedStorage.php';

        return $container->services['Sylius\\Behat\\Context\\Setup\\CatalogPromotionContext'] = new \Sylius\Behat\Context\Setup\CatalogPromotionContext(($container->services['Sylius\\Bundle\\CoreBundle\\Fixture\\Factory\\CatalogPromotionExampleFactory'] ?? $container->load('getCatalogPromotionExampleFactoryService')), ($container->services['sylius.factory.catalog_promotion_scope'] ?? ($container->services['sylius.factory.catalog_promotion_scope'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Core\\Model\\CatalogPromotionScope'))), ($container->services['sylius.factory.catalog_promotion_action'] ?? ($container->services['sylius.factory.catalog_promotion_action'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Promotion\\Model\\CatalogPromotionAction'))), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['sylius.repository.channel'] ?? $container->getSylius_Repository_ChannelService()), ($container->services['SM\\Factory\\FactoryInterface'] ?? $container->getFactoryInterfaceService()), ($container->privates['debug.traced.sylius.event_bus'] ?? $container->getDebug_Traced_Sylius_EventBusService()), ($container->privates['sylius.behat.shared_storage'] ?? ($container->privates['sylius.behat.shared_storage'] = new \Sylius\Behat\Service\SharedStorage())));
    }
}