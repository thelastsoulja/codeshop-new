<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Doctrine_Orm_EventSubscriber_LoadMetadata_AttributeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.doctrine.orm.event_subscriber.load_metadata.attribute' shared service.
     *
     * @return \Sylius\Bundle\AttributeBundle\Doctrine\ORM\Subscriber\LoadMetadataSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/AttributeBundle/Doctrine/ORM/Subscriber/LoadMetadataSubscriber.php';

        return $container->services['sylius.doctrine.orm.event_subscriber.load_metadata.attribute'] = new \Sylius\Bundle\AttributeBundle\Doctrine\ORM\Subscriber\LoadMetadataSubscriber($container->parameters['sylius.attribute.subjects']);
    }
}
