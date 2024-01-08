<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKnpGaufrette_FilesystemMapService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'knp_gaufrette.filesystem_map' shared service.
     *
     * @return \Knp\Bundle\GaufretteBundle\FilesystemMap
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/gaufrette/src/Gaufrette/FilesystemMapInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-gaufrette-bundle/FilesystemMap.php';

        return $container->services['knp_gaufrette.filesystem_map'] = new \Knp\Bundle\GaufretteBundle\FilesystemMap(['sylius_image' => ($container->services['gaufrette.sylius_image_filesystem'] ?? $container->load('getGaufrette_SyliusImageFilesystemService'))]);
    }
}