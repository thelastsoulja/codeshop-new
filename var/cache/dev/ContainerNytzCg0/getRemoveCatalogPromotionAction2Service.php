<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRemoveCatalogPromotionAction2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\Controller\RemoveCatalogPromotionAction' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Controller\RemoveCatalogPromotionAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Controller/RemoveCatalogPromotionAction.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\Controller\\RemoveCatalogPromotionAction'] = new \Sylius\Bundle\ApiBundle\Controller\RemoveCatalogPromotionAction(($container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Processor\\CatalogPromotionRemovalProcessorInterface'] ?? $container->load('getCatalogPromotionRemovalProcessorInterfaceService')));
    }
}
