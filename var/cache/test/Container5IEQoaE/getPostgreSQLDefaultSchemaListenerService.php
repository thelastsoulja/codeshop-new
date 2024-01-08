<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPostgreSQLDefaultSchemaListenerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\CoreBundle\EventListener\PostgreSQLDefaultSchemaListener' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\EventListener\PostgreSQLDefaultSchemaListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/CoreBundle/EventListener/PostgreSQLDefaultSchemaListener.php';

        return $container->services['Sylius\\Bundle\\CoreBundle\\EventListener\\PostgreSQLDefaultSchemaListener'] = new \Sylius\Bundle\CoreBundle\EventListener\PostgreSQLDefaultSchemaListener();
    }
}
