<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_CatalogPromotion_Criteria_DateRangeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.catalog_promotion.criteria.date_range' shared service.
     *
     * @return \Sylius\Bundle\PromotionBundle\Criteria\DateRange
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/PromotionBundle/Criteria/CriteriaInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/PromotionBundle/Criteria/DateRange.php';

        return $container->services['sylius.catalog_promotion.criteria.date_range'] = new \Sylius\Bundle\PromotionBundle\Criteria\DateRange(($container->privates['Sylius\\Calendar\\Provider\\DateTimeProviderInterface'] ?? ($container->privates['Sylius\\Calendar\\Provider\\DateTimeProviderInterface'] = new \Sylius\Calendar\Provider\Calendar())));
    }
}
