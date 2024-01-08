<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_PromotionFilter_ProductService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.promotion_filter.product' shared service.
     *
     * @return \Sylius\Component\Core\Promotion\Filter\ProductFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Promotion/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Promotion/Filter/ProductFilter.php';

        return $container->services['sylius.promotion_filter.product'] = new \Sylius\Component\Core\Promotion\Filter\ProductFilter();
    }
}
