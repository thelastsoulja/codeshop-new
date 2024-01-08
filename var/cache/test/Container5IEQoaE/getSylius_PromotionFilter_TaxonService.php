<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_PromotionFilter_TaxonService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.promotion_filter.taxon' shared service.
     *
     * @return \Sylius\Component\Core\Promotion\Filter\TaxonFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Promotion/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Promotion/Filter/TaxonFilter.php';

        return $container->services['sylius.promotion_filter.taxon'] = new \Sylius\Component\Core\Promotion\Filter\TaxonFilter();
    }
}