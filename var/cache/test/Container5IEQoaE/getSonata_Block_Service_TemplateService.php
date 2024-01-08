<?php

namespace Container5IEQoaE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSonata_Block_Service_TemplateService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'sonata.block.service.template' shared service.
     *
     * @return \Sonata\BlockBundle\Block\Service\TemplateBlockService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/BlockServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/AbstractBlockService.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/EditableBlockService.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/TemplateBlockService.php';

        $a = ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService());

        if (isset($container->privates['sonata.block.service.template'])) {
            return $container->privates['sonata.block.service.template'];
        }

        return $container->privates['sonata.block.service.template'] = new \Sonata\BlockBundle\Block\Service\TemplateBlockService($a);
    }
}