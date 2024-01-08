<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_Filter_PostProcessor_MozjpegService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'liip_imagine.filter.post_processor.mozjpeg' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\PostProcessor\MozJpegPostProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/PostProcessor/PostProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/PostProcessor/AbstractPostProcessor.php';
        include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/PostProcessor/MozJpegPostProcessor.php';

        return $container->privates['liip_imagine.filter.post_processor.mozjpeg'] = new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\MozJpegPostProcessor('/opt/mozjpeg/bin/cjpeg');
    }
}
