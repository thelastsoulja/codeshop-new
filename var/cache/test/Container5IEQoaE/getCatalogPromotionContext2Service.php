<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCatalogPromotionContext2Service extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Behat\Context\Transform\CatalogPromotionContext' shared service.
     *
     * @return \Sylius\Behat\Context\Transform\CatalogPromotionContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Transform/CatalogPromotionContext.php';

        return $container->services['Sylius\\Behat\\Context\\Transform\\CatalogPromotionContext'] = new \Sylius\Behat\Context\Transform\CatalogPromotionContext(($container->services['sylius.repository.catalog_promotion'] ?? $container->load('getSylius_Repository_CatalogPromotionService')));
    }
}