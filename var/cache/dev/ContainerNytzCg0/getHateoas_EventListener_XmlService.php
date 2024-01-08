<?php

namespace ContainerNytzCg0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHateoas_EventListener_XmlService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'hateoas.event_listener.xml' shared service.
     *
     * @return \Hateoas\Serializer\AddRelationsListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/willdurand/hateoas/src/Serializer/AddRelationsListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/willdurand/hateoas/src/Serializer/SerializerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/willdurand/hateoas/src/Serializer/XmlSerializer.php';
        include_once \dirname(__DIR__, 4).'/vendor/willdurand/hateoas/src/Serializer/Metadata/InlineDeferrer.php';

        return $container->services['hateoas.event_listener.xml'] = new \Hateoas\Serializer\AddRelationsListener(new \Hateoas\Serializer\XmlSerializer(), ($container->privates['hateoas.links_factory'] ?? $container->load('getHateoas_LinksFactoryService')), ($container->privates['hateoas.embeds_factory'] ?? $container->load('getHateoas_EmbedsFactoryService')), ($container->privates['hateoas.inline_deferrer.embeds'] ?? ($container->privates['hateoas.inline_deferrer.embeds'] = new \Hateoas\Serializer\Metadata\InlineDeferrer())), ($container->privates['hateoas.inline_deferrer.links'] ?? ($container->privates['hateoas.inline_deferrer.links'] = new \Hateoas\Serializer\Metadata\InlineDeferrer())));
    }
}
