<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImagePathGeneratorInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Component\Core\Generator\ImagePathGeneratorInterface' shared service.
     *
     * @return \Sylius\Component\Core\Generator\UploadedImagePathGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Generator/ImagePathGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Component/Core/Generator/UploadedImagePathGenerator.php';

        return $container->services['Sylius\\Component\\Core\\Generator\\ImagePathGeneratorInterface'] = new \Sylius\Component\Core\Generator\UploadedImagePathGenerator();
    }
}
