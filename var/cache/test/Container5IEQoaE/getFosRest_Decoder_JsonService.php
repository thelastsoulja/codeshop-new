<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosRest_Decoder_JsonService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'fos_rest.decoder.json' shared service.
     *
     * @return \FOS\RestBundle\Decoder\JsonDecoder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Decoder/DecoderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Decoder/JsonDecoder.php';

        return $container->privates['fos_rest.decoder.json'] = new \FOS\RestBundle\Decoder\JsonDecoder();
    }
}
