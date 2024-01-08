<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_GridFilter_MoneyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.grid_filter.money' shared service.
     *
     * @return \Sylius\Component\Grid\Filter\MoneyFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Filtering/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Filter/MoneyFilter.php';

        return $container->services['sylius.grid_filter.money'] = new \Sylius\Component\Grid\Filter\MoneyFilter();
    }
}
