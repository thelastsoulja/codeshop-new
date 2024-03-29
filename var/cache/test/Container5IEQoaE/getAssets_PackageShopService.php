<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssets_PackageShopService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'assets._package_shop' shared service.
     *
     * @return \Sylius\Bundle\ThemeBundle\Asset\Package\PathPackage
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['assets._package_shop'] = new \Sylius\Bundle\ThemeBundle\Asset\Package\PathPackage('', ($container->privates['assets._version_shop'] ?? $container->load('getAssets_VersionShopService')), ($container->privates['sylius.theme.context.channel_based'] ?? $container->getSylius_Theme_Context_ChannelBasedService()), ($container->privates['Sylius\\Bundle\\ThemeBundle\\Asset\\PathResolverInterface'] ?? $container->getPathResolverInterfaceService()), ($container->privates['assets.context'] ?? $container->getAssets_ContextService()));
    }
}
