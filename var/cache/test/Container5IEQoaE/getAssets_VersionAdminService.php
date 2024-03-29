<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssets_VersionAdminService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'assets._version_admin' shared service.
     *
     * @return \Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/VersionStrategy/JsonManifestVersionStrategy.php';

        return $container->privates['assets._version_admin'] = new \Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy((\dirname(__DIR__, 4).'/public/build/admin/manifest.json'), ($container->privates['.debug.http_client'] ?? $container->get_Debug_HttpClientService()), false);
    }
}
