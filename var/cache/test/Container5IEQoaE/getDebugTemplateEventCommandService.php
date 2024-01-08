<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebugTemplateEventCommandService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'Sylius\Bundle\UiBundle\Command\DebugTemplateEventCommand' shared service.
     *
     * @return \Sylius\Bundle\UiBundle\Command\DebugTemplateEventCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Sylius/Bundle/UiBundle/Command/DebugTemplateEventCommand.php';

        $container->privates['Sylius\\Bundle\\UiBundle\\Command\\DebugTemplateEventCommand'] = $instance = new \Sylius\Bundle\UiBundle\Command\DebugTemplateEventCommand(($container->privates['Sylius\\Bundle\\UiBundle\\Registry\\TemplateBlockRegistryInterface'] ?? $container->getTemplateBlockRegistryInterfaceService()));

        $instance->setName('sylius:debug:template-event');

        return $instance;
    }
}
