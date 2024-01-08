<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Behat_Context_Transform_ProvinceService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.behat.context.transform.province' shared service.
     *
     * @return \Sylius\Behat\Context\Transform\ProvinceContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Behat/Context/Transform/ProvinceContext.php';

        return $container->services['sylius.behat.context.transform.province'] = new \Sylius\Behat\Context\Transform\ProvinceContext(($container->services['sylius.repository.province'] ?? $container->getSylius_Repository_ProvinceService()));
    }
}
