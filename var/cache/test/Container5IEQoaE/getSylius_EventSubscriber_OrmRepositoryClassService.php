<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_EventSubscriber_OrmRepositoryClassService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sylius.event_subscriber.orm_repository_class' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\EventListener\ORMRepositoryClassSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/EventListener/AbstractDoctrineSubscriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/EventListener/ORMRepositoryClassSubscriber.php';

        return $container->services['sylius.event_subscriber.orm_repository_class'] = new \Sylius\Bundle\ResourceBundle\EventListener\ORMRepositoryClassSubscriber(($container->privates['sylius.resource_registry'] ?? $container->getSylius_ResourceRegistryService()));
    }
}
