<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_GridFilter_DateService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.grid_filter.date' shared service.
     *
     * @return \Sylius\Component\Grid\Filter\DateFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Filtering/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Filter/DateFilter.php';

        return $container->services['sylius.grid_filter.date'] = new \Sylius\Component\Grid\Filter\DateFilter();
    }
}
