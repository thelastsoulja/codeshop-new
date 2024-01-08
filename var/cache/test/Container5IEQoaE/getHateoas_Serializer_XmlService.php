<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHateoas_Serializer_XmlService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'hateoas.serializer.xml' shared service.
     *
     * @return \Hateoas\Serializer\XmlSerializer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/willdurand/hateoas/src/Serializer/SerializerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/willdurand/hateoas/src/Serializer/XmlSerializer.php';

        return $container->privates['hateoas.serializer.xml'] = new \Hateoas\Serializer\XmlSerializer();
    }
}