<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCountryProvincesDeletionCheckerInterfaceService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Component\Addressing\Checker\CountryProvincesDeletionCheckerInterface' shared service.
     *
     * @return \Sylius\Component\Addressing\Checker\CountryProvincesDeletionChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Addressing/Checker/CountryProvincesDeletionCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Addressing/Checker/CountryProvincesDeletionChecker.php';

        return $container->services['Sylius\\Component\\Addressing\\Checker\\CountryProvincesDeletionCheckerInterface'] = new \Sylius\Component\Addressing\Checker\CountryProvincesDeletionChecker(($container->services['sylius.repository.zone_member'] ?? $container->load('getSylius_Repository_ZoneMemberService')), ($container->services['sylius.repository.province'] ?? $container->getSylius_Repository_ProvinceService()));
    }
}
