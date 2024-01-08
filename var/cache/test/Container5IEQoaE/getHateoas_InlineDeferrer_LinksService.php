<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHateoas_InlineDeferrer_LinksService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'hateoas.inline_deferrer.links' shared service.
     *
     * @return \Hateoas\Serializer\Metadata\InlineDeferrer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/willdurand/hateoas/src/Serializer/Metadata/InlineDeferrer.php';

        return $container->privates['hateoas.inline_deferrer.links'] = new \Hateoas\Serializer\Metadata\InlineDeferrer();
    }
}
