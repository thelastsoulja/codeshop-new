<?php

namespace ContainerI4ij0pE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClearPriceHistoryCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.Sylius\Bundle\CoreBundle\PriceHistory\Cli\Command\ClearPriceHistoryCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.Sylius\\Bundle\\CoreBundle\\PriceHistory\\Cli\\Command\\ClearPriceHistoryCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('sylius:price-history:clear', [], 'Clears the price history up to a given number of days ago', false, function () use ($container): \Sylius\Bundle\CoreBundle\PriceHistory\Cli\Command\ClearPriceHistoryCommand {
            return ($container->services['Sylius\\Bundle\\CoreBundle\\PriceHistory\\Cli\\Command\\ClearPriceHistoryCommand'] ?? $container->load('getClearPriceHistoryCommand2Service'));
        });
    }
}
