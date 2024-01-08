<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExclusiveCriteriaService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\CoreBundle\CatalogPromotion\DiscountApplicationCriteria\ExclusiveCriteria' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\CatalogPromotion\DiscountApplicationCriteria\ExclusiveCriteria
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/PromotionBundle/DiscountApplicationCriteria/DiscountApplicationCriteriaInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/CatalogPromotion/DiscountApplicationCriteria/ExclusiveCriteria.php';

        return $container->services['Sylius\\Bundle\\CoreBundle\\CatalogPromotion\\DiscountApplicationCriteria\\ExclusiveCriteria'] = new \Sylius\Bundle\CoreBundle\CatalogPromotion\DiscountApplicationCriteria\ExclusiveCriteria();
    }
}
