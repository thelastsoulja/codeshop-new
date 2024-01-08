<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Sonata_Block_Command_DebugBlocks_LazyService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.sonata.block.command.debug_blocks.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.sonata.block.command.debug_blocks.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('debug:sonata:block', [], 'Debug all blocks available, show default settings of each block', false, function () use ($container): \Sonata\BlockBundle\Command\DebugBlocksCommand {
            return ($container->privates['sonata.block.command.debug_blocks'] ?? $container->load('getSonata_Block_Command_DebugBlocksService'));
        });
    }
}