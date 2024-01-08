<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Block_Exception_Renderer_InlineDebugService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'sonata.block.exception.renderer.inline_debug' shared service.
     *
     * @return \Sonata\BlockBundle\Exception\Renderer\InlineDebugRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Exception/Renderer/RendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Exception/Renderer/InlineDebugRenderer.php';

        return $container->services['sonata.block.exception.renderer.inline_debug'] = new \Sonata\BlockBundle\Exception\Renderer\InlineDebugRenderer(($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService()), '@SonataBlock/Block/block_exception_debug.html.twig', true, true);
    }
}
