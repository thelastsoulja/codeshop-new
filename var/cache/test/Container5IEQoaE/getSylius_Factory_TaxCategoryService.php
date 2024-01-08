<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Factory_TaxCategoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.factory.tax_category' shared service.
     *
     * @return \Sylius\Component\Resource\Factory\Factory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['sylius.factory.tax_category'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Taxation\\Model\\TaxCategory');
    }
}
