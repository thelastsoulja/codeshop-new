<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getShippingMethodFilterService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\ApiBundle\Filter\ShippingMethodFilter' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Filter\ShippingMethodFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/ApiBundle/Filter/ShippingMethodFilter.php';

        return $container->services['Sylius\\Bundle\\ApiBundle\\Filter\\ShippingMethodFilter'] = new \Sylius\Bundle\ApiBundle\Filter\ShippingMethodFilter();
    }
}