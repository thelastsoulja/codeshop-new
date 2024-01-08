<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCatalogPromotionClearerInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\CoreBundle\CatalogPromotion\Processor\CatalogPromotionClearerInterface' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\CatalogPromotion\Processor\CatalogPromotionClearer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/CatalogPromotion/Processor/CatalogPromotionClearerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/CatalogPromotion/Processor/CatalogPromotionClearer.php';

        return $container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\Processor\\CatalogPromotionClearerInterface'] = new \Sylius\Bundle\CoreBundle\CatalogPromotion\Processor\CatalogPromotionClearer();
    }
}
